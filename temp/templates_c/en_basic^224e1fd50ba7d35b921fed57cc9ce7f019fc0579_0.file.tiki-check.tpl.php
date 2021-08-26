<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:31:14
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-check.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61266242a2d256_89402400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '224e1fd50ba7d35b921fed57cc9ce7f019fc0579' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-check.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61266242a2d256_89402400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.norecords.php','function'=>'smarty_function_norecords',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"Server Check"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"Server Check"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Server Check<?php $_block_repeat=false;
echo smarty_block_title(array('help'=>"Server Check"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<h2>MySQL or MariaDB Database Properties</h2>
<form method="post" action="tiki-check.php">
<input class="registerSubmit btn btn-primary" type="submit" name="acknowledge" value="Acknowledge (OK)">
<div class="table-responsive">
	<table class="table table-striped table-hover">
		<tr>
			<th>Property</th>
			<th>Value</th>
			<th>Tiki Fitness</th>
			<th class="tips" title="Acknowledge">OK</th>
			<th>Explanation</th>
		</tr>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mysql_properties']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
			<tr>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['setting'];?>
</td>
				<td class="text">
					<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['class'];?>
">
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['fitness'];?>

					</span>
				</td>
				<td class="text"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['fitness'] == 'good') {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['ack']) {?>checked<?php }?> /></td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
			</tr>
		<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
			<?php echo smarty_function_norecords(array('_colspan'=>4),$_smarty_tpl);?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
</div>

<?php if ($_smarty_tpl->tpl_vars['engineTypeNote']->value) {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"New database engine"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"New database engine"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Your website is using a 18.x or higher version of tiki wiki and your database tables are not using the InnoDB database engine, you should consider migrate to InnoDB, that is now the default database engine for Tiki<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"New database engine"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<h2>MySQL crashed Tables</h2>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"Be careful"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Be careful"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>The following list is just a very quick look at SHOW TABLE STATUS that tells you, if tables have been marked as crashed. If you are experiencing database problems you should still run CHECK TABLE or myisamchk to make sure.<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Be careful"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Table</th>
			<th>Comment</th>
		</tr>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mysql_crashed_tables']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
			<tr>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['Comment'];?>
</td>
			</tr>
		<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
			<?php echo smarty_function_norecords(array('_colspan'=>2),$_smarty_tpl);?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
</div>

<h2>Test sending emails</h2>
To test if your installation is capable of sending emails please visit the <a href="tiki-install.php">Tiki Installer</a>.

<h2>Server Information</h2>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Property</th>
			<th>Value</th>
		</tr>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['server_information']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
			<tr>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</td>
			</tr>
		<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
			<?php echo smarty_function_norecords(array('_colspan'=>2),$_smarty_tpl);?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
</div>

<h2>Server Properties</h2>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Property</th>
			<th>Value</th>
			<th>Tiki Fitness</th>
			<th class="tips" title="Acknowledge">OK</th>
			<th>Explanation</th>
		</tr>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['server_properties']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
			<tr>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['setting'];?>
</td>
				<td class="text">
					<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['class'];?>
">
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['fitness'];?>

					</span>
				</td>
				<td class="test"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['fitness'] == 'good') {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['ack']) {?>checked<?php }?> /></td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
			</tr>
		<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
			<?php echo smarty_function_norecords(array('_colspan'=>4),$_smarty_tpl);?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
</div>

<h2>Special directories</h2>
To backup these directories go to <a href="tiki-admin_system.php">Admin->Tiki Cache/SysAdmin</a>.
<?php if (count($_smarty_tpl->tpl_vars['dirs']->value)) {?>
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Directory</th>
				<th>Fitness</th>
				<th>Explanation</th>
			</tr>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dirs']->value, 'd', false, 'k');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
				<tr>
					<td class="text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['d']->value ));?>
</td>
					<td class="text">
						<?php if ($_smarty_tpl->tpl_vars['dirsWritable']->value[$_smarty_tpl->tpl_vars['k']->value]) {?>
							<?php echo smarty_function_icon(array('name'=>'ok','iclass'=>'text-success'),$_smarty_tpl);?>

						<?php } else { ?>
							<?php echo smarty_function_icon(array('name'=>'remove','iclass'=>'text-danger'),$_smarty_tpl);?>

						<?php }?>
					</td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['dirsWritable']->value[$_smarty_tpl->tpl_vars['k']->value]) {?>
							Directory is writeable.
						<?php } else { ?>
							Directory is not writeable!
						<?php }?>
					</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	</div>
<?php }?>


<h2>Apache properties</h2>
<?php if ($_smarty_tpl->tpl_vars['apache_properties']->value) {?>
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Property</th>
				<th>Value</th>
				<th>Tiki Fitness</th>
				<th class="tips" title="Acknowledge">OK</th>
				<th>Explanation</th>
			</tr>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['apache_properties']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<tr>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['setting'];?>
</td>
					<td class="text">
					<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['class'];?>
">
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['fitness'];?>

					</span>
					</td>
					<td class="test"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['fitness'] == 'good') {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['ack']) {?>checked<?php }?> /></td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
				</tr>
			<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
				<?php echo smarty_function_norecords(array('_colspan'=>4),$_smarty_tpl);?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	</div>
<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['no_apache_properties']->value;?>

<?php }?>

<h2>IIS properties</h2>
<?php if ($_smarty_tpl->tpl_vars['iis_properties']->value) {?>
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Property</th>
				<th>Value</th>
				<th>Tiki Fitness</th>
				<th class="tips" title="Acknowledge">OK</th>
				<th>Explanation</th>
			</tr>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['iis_properties']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<tr>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['setting'];?>
</td>
					<td class="text">
					<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['class'];?>
">
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['fitness'];?>

					</span>
					</td>
					<td class="test"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['fitness'] == 'good') {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['ack']) {?>checked<?php }?> /></td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
				</tr>
			<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
				<?php echo smarty_function_norecords(array('_colspan'=>4),$_smarty_tpl);?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	</div>
<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['no_iis_properties']->value;?>

<?php }?>

<h2>PHP scripting language properties</h2>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Property</th>
			<th>Value</th>
			<th>Tiki Fitness</th>
			<th class="tips" title="Acknowledge">OK</th>
			<th>Explanation</th>
		</tr>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['php_properties']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
			<tr>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['setting'];?>
</td>
				<td class="text">
					<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['class'];?>
">
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['fitness'];?>

					</span>
				</td>
				<td class="test"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['fitness'] == 'good') {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['ack']) {?>checked<?php }?> /></td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
			</tr>
		<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
			<?php echo smarty_function_norecords(array('_colspan'=>4),$_smarty_tpl);?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'id'=>"php_conf_info",'title'=>"Change PHP configuration values"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'id'=>"php_conf_info",'title'=>"Change PHP configuration values"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php if ($_smarty_tpl->tpl_vars['php_sapi_info']->value) {?>
		<p>
		<?php if ($_smarty_tpl->tpl_vars['php_sapi_info']->value['message']) {?>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['php_sapi_info']->value['message'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['php_sapi_info']->value['link']) {?>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><a href="<?php echo $_smarty_tpl->tpl_vars['php_sapi_info']->value['link'];?>
" class="alert-link"><?php echo $_smarty_tpl->tpl_vars['php_sapi_info']->value['link'];?>
</a><?php $_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>
		</p>
	<?php }?>

	<p>
		You can check the full documentation on how to change the configurations values in <a href="http://www.php.net/manual/en/configuration.php" class="alert-link">http://www.php.net/manual/en/configuration.php</a>
	</p>
<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'id'=>"php_conf_info",'title'=>"Change PHP configuration values"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<h2>PHP Security properties</h2>
To check the file integrity of your Tiki installation, go to <a href="tiki-admin_security.php">Admin->Security</a>.
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Property</th>
			<th>Value</th>
			<th>Tiki Fitness</th>
			<th class="tips" title="Acknowledge">OK</th>
			<th>Explanation</th>
		</tr>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['security']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
			<tr>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['setting'];?>
</td>
				<td class="text">
					<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['class'];?>
">
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['fitness'];?>

					</span>
				</td>
				<td class="test"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['fitness'] == 'safe') {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['ack']) {?>checked<?php }?> /></td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
			</tr>
		<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
			<?php echo smarty_function_norecords(array('_colspan'=>4),$_smarty_tpl);?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
</div>
</form>

<h2>Tiki Security</h2>
<?php $_smarty_tpl->_assignInScope('sensitive_data_box_title', "Sensitive Data Exposure");
if ($_smarty_tpl->tpl_vars['sensitive_data_detected_files']->value) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'error','title'=>((string)$_smarty_tpl->tpl_vars['sensitive_data_box_title']->value),'close'=>'n'));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'error','title'=>((string)$_smarty_tpl->tpl_vars['sensitive_data_box_title']->value),'close'=>'n'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<p>Tiki detected that there are temporary files in the db folder which may expose credentials or other sensitive information.</p>
	<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sensitive_data_detected_files']->value, 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
			<li>
				<?php echo $_smarty_tpl->tpl_vars['file']->value;?>

			</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'error','title'=>((string)$_smarty_tpl->tpl_vars['sensitive_data_box_title']->value),'close'=>'n'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'info','title'=>((string)$_smarty_tpl->tpl_vars['sensitive_data_box_title']->value),'close'=>'n'));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'info','title'=>((string)$_smarty_tpl->tpl_vars['sensitive_data_box_title']->value),'close'=>'n'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<p>Tiki did not detect temporary files in the db folder which may expose credentials or other sensitive information.</p>
<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'info','title'=>((string)$_smarty_tpl->tpl_vars['sensitive_data_box_title']->value),'close'=>'n'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['print_pdf_from_url'] === "mpdf" && !empty($_smarty_tpl->tpl_vars['mPDFClassMissing']->value)) {?>
	<h2>Print configurations</h2>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'error','title'=>"mPDF Information",'close'=>'n'));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'error','title'=>"mPDF Information",'close'=>'n'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<p>mPDF is selected as Print option, however the class can't be loaded, please check "Print Settings" in /tiki-admin.php?page=print</p>
	<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'error','title'=>"mPDF Information",'close'=>'n'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<h2>File Gallery Search Indexing</h2>
<?php echo smarty_function_icon(array('name'=>'help','href'=>'https://doc.tiki.org/Search+within+files'),$_smarty_tpl);?>
 <em><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>'<a href="https://doc.tiki.org/Search+within+files">','_1'=>'</a>'));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>'<a href="https://doc.tiki.org/Search+within+files">','_1'=>'</a>'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>More information %0 here %1<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>'<a href="https://doc.tiki.org/Search+within+files">','_1'=>'</a>'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></em>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_enable_auto_indexing'] == 'y') {?>
	<?php if ($_smarty_tpl->tpl_vars['security']->value['shell_exec']['setting'] == 'Disabled') {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'error','title'=>'Command Missing','close'=>'n'));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'error','title'=>'Command Missing','close'=>'n'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<p>The command "shell_exec" is required for file gallery search indexing</p>
		<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'error','title'=>'Command Missing','close'=>'n'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Mimetype</th>
				<th>Tiki Fitness</th>
				<th>Explanation</th>
			</tr>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['file_handlers']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<tr>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td class="text">
						<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['class'];?>
">
							<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['fitness'];?>

						</span>
					</td>
					<td class="text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['message'] ));?>
</td>
				</tr>
			<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
				<?php echo smarty_function_norecords(array('_colspan'=>3),$_smarty_tpl);?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	</div>
<?php } else { ?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'info','title'=>'Feature disabled','close'=>'n'));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'info','title'=>'Feature disabled','close'=>'n'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<p><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>'<a href="tiki-admin.php?page=fgal" class="alert-link">','_1'=>'</a>'));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>'<a href="tiki-admin.php?page=fgal" class="alert-link">','_1'=>'</a>'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Go to the %0 File Gallery Control Panel %1 (with advanced preferences showing) to enable<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>'<a href="tiki-admin.php?page=fgal" class="alert-link">','_1'=>'</a>'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></p>
	<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'info','title'=>'Feature disabled','close'=>'n'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<h2>MySQL Variable Information</h2>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Property</th>
			<th>Value</th>
		</tr>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mysql_variables']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
			<tr>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
				<td class="text" style="overflow-wrap: anywhere;" ><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['value'] ));?>
</td>
			</tr>
		<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
			<?php echo smarty_function_norecords(array('_colspan'=>2),$_smarty_tpl);?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
</div>

<h2>PHP Info</h2>
For more detailed information about your PHP installation see <a href="tiki-phpinfo.php">Admin->phpinfo</a>.

<a name="benchmark"></a>
<h2>Benchmark PHP/MySQL</h2>
<a href="tiki-check.php?benchmark=run&ts=<?php echo time();?>
#benchmark" class="btn btn-primary btn-sm" style="margin-bottom: 10px;">Check</a>
<?php if (!empty($_smarty_tpl->tpl_vars['benchmark']->value)) {?>
	<br />
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<tr>
				<th>Property</th>
				<th>Seconds</th>
			</tr>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['benchmark']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<tr>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	</div>
<?php }?>

<a name="bomscanner"></a>
<h2>BOM Detected Files</h2>
<a href="tiki-check.php?bomscanner=run&ts=<?php echo time();?>
#bomscanner" class="btn btn-primary btn-sm" style="margin-bottom: 10px;">Check</a>
<?php if ($_smarty_tpl->tpl_vars['bomscanner']->value) {?>
	<p>Scanned files: <?php echo $_smarty_tpl->tpl_vars['bom_total_files_scanned']->value;?>
</p>
	<?php if (!empty($_smarty_tpl->tpl_vars['bom_detected_files']->value)) {?>
		<p>BOM files detected:</p>
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bom_detected_files']->value, 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
				<li>
					<?php echo $_smarty_tpl->tpl_vars['file']->value;?>

				</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	<?php } else { ?>
		<p><span class="icon icon-information fas fa-info-circle fa-fw"></span>&nbsp;No BOM files detected</p>
	<?php }
}?>

<h2>Tiki Manager</h2>
For more detailed information about Tiki Manager please check <a href="https://doc.tiki.org/Manager">doc.tiki.org</a>.

<?php if ('trim_capable') {?>
	<h3>Server Instance</h3>
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Requirements</th>
				<th>Status</th>
				<th>Message</th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trim_server_requirements']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<tr>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td class="text">
					<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['class'];?>
">
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['fitness'];?>

					</span>
					</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	</div>

	<h3>Client Instance</h3>
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Requirements</th>
				<th>Status</th>
				<th>Message</th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trim_client_requirements']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<tr>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td class="text">
					<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['class'];?>
">
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['fitness']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['fitness'];?>

					</span>
					</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	</div>
<?php } else { ?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'error','title'=>'OS not supported','close'=>'n'));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'error','title'=>'OS not supported','close'=>'n'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<p>Apparently tiki is running on a Windows based server. This feature is not supported natively.</p>
	<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'error','title'=>'OS not supported','close'=>'n'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<h2>User Data Encryption</h2>
<?php if ('users_with_mcrypt_data' > 0) {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'error','title'=>'MCrypt encryption found in users data preferences','close'=>'n'));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'error','title'=>'MCrypt encryption found in users data preferences','close'=>'n'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<p><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['users_with_mcrypt_data']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['users_with_mcrypt_data']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Found %0 user(s) with data preferences encrypted with MCrypt.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['users_with_mcrypt_data']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></p>
		<p>If MCrypt library gets removed, non-converted user encrypted data can no longer be decrypted. The data is
			thus lost and must be re-entered.</p>
	<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'error','title'=>'MCrypt encryption found in users data preferences','close'=>'n'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else { ?>
	<p>No user preferences were found with data encrypted with MCrypt.</p>
<?php }?>

<h2>Tiki Packages</h2>
<?php if (!$_smarty_tpl->tpl_vars['composer_available']->value) {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Composer not found"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Composer not found"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		Composer could not be executed, so the automated check on the packages cannot be performed.
	<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Composer not found"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Package Name</th>
			<th>Version</th>
			<th>Status</th>
			<th>Message</th>
		</tr>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packages']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
			<tr>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['version'];?>
</td>
				<td class="text">
					<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['status']]['class'];?>
">
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['status']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>

					</span>
				</td>
				<td class="text">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['message'], 'message', false, 'message_key');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message_key']->value => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
						<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<br/>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</td>
			</tr>
		<?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
			<?php echo smarty_function_norecords(array('_colspan'=>4),$_smarty_tpl);?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
</div>


<h2>OCR Status</h2>
<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Requirements</th>
			<th>Version</th>
			<th>Status</th>
			<th>Message</th>
		</tr>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ocr']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
			<tr>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['version'];?>
</td>
				<td class="text">
					<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['status']]['class'];?>
">
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['status']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>

					</span>
				</td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
			</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
</div>
<?php }
}
