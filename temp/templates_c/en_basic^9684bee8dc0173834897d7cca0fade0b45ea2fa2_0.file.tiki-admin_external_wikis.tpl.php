<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:34:23
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-admin_external_wikis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612662ff451039_44786660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9684bee8dc0173834897d7cca0fade0b45ea2fa2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-admin_external_wikis.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612662ff451039_44786660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.object_selector_multi.php','function'=>'smarty_function_object_selector_multi',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.actions.php','function'=>'smarty_block_actions',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.norecords.php','function'=>'smarty_function_norecords',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.pagination_links.php','function'=>'smarty_block_pagination_links',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"External Wikis"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"External Wikis"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Admin External Wikis<?php $_block_repeat=false;
echo smarty_block_title(array('help'=>"External Wikis"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<h2>Create/Edit External Wiki</h2>
<form action="tiki-admin_external_wikis.php" method="post" class="form-horizontal" role="form">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<input type="hidden" name="extwikiId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['extwikiId']->value ));?>
">
	<div class="form-group row">
		<label for="name" class="col-sm-3 col-form-label">Name</label>
		<div class="col-sm-9">
			<input type="text" maxlength="255" class="form-control" name="name" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['name'] ));?>
">
		</div>
	</div>
	<div class="form-group row">
		<label for="extwiki" class="col-sm-3 col-form-label">URL</label>
		<div class="col-sm-9">
			<input type="text" maxlength="255" class="form-control" name="extwiki" id="extwiki" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['extwiki'] ));?>
">
			<p class="form-text">URL (use $page to be replaced by the page name in the URL example: http://www.example.com/tiki-index.php?page=$page):</p>
		</div>
	</div>
	<div class="form-group row">
		<label for="indexname" class="col-sm-3 col-form-label">Index</label>
		<div class="col-sm-9">
			<input type="text" maxlength="255" class="form-control" name="indexname" id="indexname" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['indexname'] ));?>
">
			<p class="form-text"><em>[prefix]</em>main, such as tiki_main</p>
		</div>
	</div>
	<div class="form-group row">
		<label for="groups" class="col-sm-3 col-form-label">Search as</label>
		<div class="col-sm-9">
			<?php echo smarty_function_object_selector_multi(array('_simplename'=>'groups','_simpleid'=>'groups','_simplevalue'=>$_smarty_tpl->tpl_vars['info']->value['groups'],'type'=>"group",'_separator'=>";"),$_smarty_tpl);?>

			<p class="form-text">Leave blank to search using currently active groups.</p>
		</div>
	</div>
	<div class="form-group text-center">
		<input type="submit" class="btn btn-primary" name="save" value="Save">
	</div>
</form>

<h2>External Wiki</h2>
<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value) {?>table-responsive<?php }?>"> 
	<table class="table table-striped table-hover">
		<tr>
			<th>
				<a href="tiki-admin_external_wikis.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'name_desc') {?>name_asc<?php } else { ?>name_desc<?php }?>">Name</a>
			</th>
			<th>
				<a href="tiki-admin_external_wikis.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'extwiki_desc') {?>extwiki_asc<?php } else { ?>extwiki_desc<?php }?>">ExtWiki</a>
			</th>
			<th>
				<a href="tiki-admin_external_wikis.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'indexname_desc') {?>indexname_asc<?php } else { ?>indexname_desc<?php }?>">Index</a>
			</th>
			<th>
				<a href="tiki-admin_external_wikis.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'groups_desc') {?>groups_asc<?php } else { ?>groups_desc<?php }?>">Search As</a>
			</th>
			<th></th>
		</tr>

		<?php
$__section_user_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['channels']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_user_0_total = $__section_user_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_user'] = new Smarty_Variable(array());
if ($__section_user_0_total !== 0) {
for ($__section_user_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] = 0; $__section_user_0_iteration <= $__section_user_0_total; $__section_user_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']++){
?>
			<tr>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['name'];?>
</td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['extwiki'];?>
</td>
                <td class="text"><?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['indexname'];?>
</td>
                <td class="text"><?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groups'];?>
</td>
				<td class="action">
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('actions', array());
$_block_repeat=true;
echo smarty_block_actions(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<action><a href="tiki-admin_external_wikis.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;extwikiId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['extwikiId'];?>
"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a></action><action><a href="tiki-admin_external_wikis.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;remove=<?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['extwikiId'];?>
" onclick="confirmSimple(event, 'Remove external wiki?', '<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
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
			<?php echo smarty_function_norecords(array('_colspan'=>5),$_smarty_tpl);?>

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
