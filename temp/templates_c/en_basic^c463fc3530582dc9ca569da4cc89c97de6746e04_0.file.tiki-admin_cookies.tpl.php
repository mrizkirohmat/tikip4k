<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:40:44
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-admin_cookies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126647ce016c2_51318243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c463fc3530582dc9ca569da4cc89c97de6746e04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-admin_cookies.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:find.tpl' => 1,
  ),
),false)) {
function content_6126647ce016c2_51318243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.actions.php','function'=>'smarty_block_actions',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.norecords.php','function'=>'smarty_function_norecords',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.pagination_links.php','function'=>'smarty_block_pagination_links',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"Cookie"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"Cookie"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Admin cookies<?php $_block_repeat=false;
echo smarty_block_title(array('help'=>"Cookie"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	To use cookie in a text area (Wiki page, etc), a <a class="alert-link" href="tiki-admin_modules.php">module</a> or a template, use {cookie}.
<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<h2>Create/edit cookies</h2>
<form action="tiki-admin_cookies.php" method="post" class="form-horizontal" role="form">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<input type="hidden" name="cookieId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cookieId']->value ));?>
">
	<div class="form-group row">
		<label class="col-sm-3 col-form-label" for="cookie">Cookie</label>
		<div class="col-sm-9">
			<input type="text" maxlength="255" class="form-control" id="cookie" name="cookie" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cookie']->value ));?>
">
		</div>
	</div>
	<div class="form-group text-center">
		<input type="submit" class="btn btn-primary" name="save" value="Save">
	</div>
</form>

<h2>Upload Cookies from textfile</h2>
<form enctype="multipart/form-data" action="tiki-admin_cookies.php" method="post" class="form-horizontal" role="form">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="form-group row">
		<label class="col-sm-3 col-form-label" for="cookie">Upload from disk</label>
		<div class="col-sm-9">
			<input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
			<input name="userfile1" type="file" class="form-control">
		</div>
	</div>
	<div class="form-group text-center">
		<input type="submit" class="btn btn-primary btn-sm" name="upload" value="Upload">
	</div>
</form>

<h2>Cookies</h2>
<?php if ($_smarty_tpl->tpl_vars['channels']->value) {?>
	<div class="t_navbar">
		<?php ob_start();
echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);
$_prefixVariable1=ob_get_clean();
echo smarty_function_button(array('href'=>"?removeall=1",'_icon_name'=>"trash",'_text'=>"Remove all cookies",'_onclick'=>"confirmSimple(event, 'Remove all cookies?', '".$_prefixVariable1."')"),$_smarty_tpl);?>

	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['channels']->value || ($_smarty_tpl->tpl_vars['find']->value != '')) {?>
	<?php $_smarty_tpl->_subTemplateRender('file:find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value) {?>table-responsive<?php }?>"> 
	<table class="table table-striped table-hover">
		<tr>
			<th>
				<a href="tiki-admin_cookies.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'cookieId_desc') {?>cookieId_asc<?php } else { ?>cookieId_desc<?php }?>">ID</a>
			</th>
			<th>
				<a href="tiki-admin_cookies.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'cookie_desc') {?>cookie_asc<?php } else { ?>cookie_desc<?php }?>">cookie</a>
			</th>
			<th width="15%"></th>
		</tr>
		<?php echo smarty_function_cycle(array('values'=>"odd,even",'print'=>false,'advance'=>false),$_smarty_tpl);?>

		<?php
$__section_user_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['channels']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_user_0_total = $__section_user_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_user'] = new Smarty_Variable(array());
if ($__section_user_0_total !== 0) {
for ($__section_user_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] = 0; $__section_user_0_iteration <= $__section_user_0_total; $__section_user_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']++){
?>
			<tr>
				<td class="id"><?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['cookieId'];?>
</td>
				<td class="text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['cookie'] ));?>
</td>
				<td class="action">
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('actions', array());
$_block_repeat=true;
echo smarty_block_actions(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<action><a href="tiki-admin_cookies.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;cookieId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['cookieId'];?>
"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a></action><action><a href="tiki-admin_cookies.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;remove=<?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['cookieId'];?>
" onclick="confirmSimple(event, 'Remove cookie?', '<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
')"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>
</a></action>
					<?php $_block_repeat=false;
echo smarty_block_actions(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				</td>
			</tr>
		<?php }} else {
 ?>
			<?php echo smarty_function_norecords(array('_colspan'=>3),$_smarty_tpl);?>

		<?php
}
?>
	</table>
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
