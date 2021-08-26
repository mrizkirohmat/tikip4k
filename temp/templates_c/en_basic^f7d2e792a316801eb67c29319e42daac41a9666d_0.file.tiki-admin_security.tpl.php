<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:28:37
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-admin_security.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612661a5e4d349_07599274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7d2e792a316801eb67c29319e42daac41a9666d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-admin_security.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612661a5e4d349_07599274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.norecords.php','function'=>'smarty_function_norecords',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.truex.php','function'=>'smarty_modifier_truex',),));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"Security Admin",'admpage'=>"security"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"Security Admin",'admpage'=>"security"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Security Admin<?php $_block_repeat=false;
echo smarty_block_title(array('help'=>"Security Admin",'admpage'=>"security"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	To <a class="alert-link" target="tikihelp" href="http://security.tiki.org/tiki-contact.php">report any security issues</a>.
	For additional security checks, please visit <a href="tiki-check.php" class="alert-link">Tiki Server Compatibility Check</a>.
<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<h2>Tiki settings</h2>
<div class="table-responsive secsetting-table">
	<table class="table table-striped table-hover">
		<tr>
			<th>Tiki variable</th>
			<th>Setting</th>
			<th>Risk Factor</th>
			<th>Explanation</th>
		</tr>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tikisettings']->value, 'item', false, 'key');
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
					<span class="text-<?php echo $_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['risk']]['class'];?>
">
						<?php echo smarty_function_icon(array('name'=>((string)$_smarty_tpl->tpl_vars['fmap']->value[$_smarty_tpl->tpl_vars['item']->value['risk']]['icon'])),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['risk'];?>

					</span>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
			</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php if (!$_smarty_tpl->tpl_vars['tikisettings']->value) {?>
			<?php echo smarty_function_norecords(array('_colspan'=>4),$_smarty_tpl);?>

		<?php }?>
	</table>
</div>
About WikiPlugins and security: Make sure to only grant the "tiki_p_plugin_approve" permission to trusted editors. You can deactivate risky plugins at (<a href="tiki-admin.php?page=textarea">tiki-admin.php?page=textarea</a>). You can approve plugin use at <a href="tiki-plugins.php">tiki-plugins.php</a>.

<br>
<h2>Security checks</h2>
<div>
	<form action="tiki-admin_security.php" method="post">
		<input type="submit" name="check_files" class="btn btn-primary" value="Check all tiki files">
	</form>
	<br>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Info"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		Note, that this can take a very long time. You should check your max_execution_time setting in php.ini.
	<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<br>
	<br>
</div>

<?php if ($_smarty_tpl->tpl_vars['filecheck']->value) {?>
	<div class="table-responsive secfile-table">
		<table class="table table-striped table-hover">
			<tr>
				<th colspan="2">File checks</th>
			</tr>
			<tr>
				<th>Filename</th>
				<th>State</th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tikifiles']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<tr>
					<td class="url"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	</div>
<?php }?>

<a href="tiki-admin_security.php?check_file_permissions" class="btn btn-primary">Check file permissions</a>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Info"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	Note, that this can take a very long time. You should check your max_execution_time setting in php.ini.
	<br>
	This check tries to find files with problematic file permissions. Some file permissions that are shown here as problematic may be unproblematic or unavoidable in some environments.
	<br>
	See end of table for detailed explanations.
<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php if ($_smarty_tpl->tpl_vars['permcheck']->value) {?>
	<div class="table-responsive secperm-table">
		<table class="table table-striped table-hover">
			<tr>
				<th>Filename</th>
				<th>type</th>
				<th colspan="2">owner</th>
				<th colspan="3">special</th>
				<th>user</th>
				<th>group</th>
				<th>other</th>
			</tr>
			<tr>
				<th colspan="2">&#160;</th>
				<th>uid</th>
				<th>gid</th>
				<th>suid</th>
				<th>sgid</th>
				<th>sticky</th>
				<th>rwx</th>
				<th>rwx</th>
				<th>rwx</th>
			</tr>
			<tr>
				<th colspan="16">Set User ID (suid) files</th>
			</tr>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['suid']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<tr>
					<td class="url"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['t'];?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['u'];?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['g'];?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['suid']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['sgid']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['sticky']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ur']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['uw']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ux']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['gr']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['gw']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['gx']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['or']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ow']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ox']);?>
</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			<tr>
				<th colspan="16">World writable files or directories</th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['worldwritable']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<tr>
					<td class="url"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['t'];?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['u'];?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['g'];?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['suid']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['sgid']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['sticky']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ur']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['uw']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ux']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['gr']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['gw']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['gx']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['or']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ow']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ox']);?>
</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			<tr>
				<th colspan="16">Files or directories the Webserver can write to</th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['apachewritable']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<tr>
					<td class="url"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['t'];?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['u'];?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['g'];?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['suid']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['sgid']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['sticky']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ur']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['uw']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ux']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['gr']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['gw']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['gx']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['or']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ow']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ox']);?>
</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			<tr>
				<th colspan="16">Strange Inodes (not file, not link, not directory)</th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['strangeinode']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<tr>
					<td class="url"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['t'];?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['u'];?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['g'];?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['suid']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['sgid']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['sticky']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ur']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['uw']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ux']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['gr']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['gw']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['gx']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['or']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ow']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ox']);?>
</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			<tr>
				<th colspan="16">Executable files</th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['executable']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<tr>
					<td class="url"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['t'];?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['u'];?>
</td>
					<td class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['g'];?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['suid']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['sgid']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['sticky']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ur']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['uw']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ux']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['gr']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['gw']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['gx']);?>
</td>
					<td class="text"><?php echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['or']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ow']);
echo smarty_modifier_truex($_smarty_tpl->tpl_vars['item']->value['ox']);?>
</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	</div>

	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Info"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		What to do with these check results?
		<br>
		Set User ID (suid) files
		<br>
		Suid files are not part of tiki and there is no need for suid files in a webspace. Sometimes intruders that gain elevated privileges leave suid files to "keep the door open".
		<br>
		World writable files or directories
		<br>
		In some environments where you cannot get root or have no other possibilities, it is unavoidable to let your webserver write to some tiki directories like or "temp". In any other case this is not needed. A bug in a script or other users could easily put malicious scripts on your webspace or upload illegal content.
		<br>
		Files or directories the Webserver can write to
		<br>
		The risk is almost the same in shared hosting environments without proper privilege separation (suexec wrappers). The webserver has to be able to write to some directories like "temp". Review the tiki install guide for further information.
		<br>
		Strange Inodes (not file, not link, not directory)
		<br>
		Inodes that are not files or directories are not part of tiki. Review these Inodes!
		<br>
		Executable files
		<br>
		Setting the executable bit can be dangerous if the webserver is configured to execute cgi scripts from that directories. If you use the usual php module (for apache) then php scripts and other files in tiki do not need to have the executable bit. You can safely remove the executable bit with chmod.
		<br>
	<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
