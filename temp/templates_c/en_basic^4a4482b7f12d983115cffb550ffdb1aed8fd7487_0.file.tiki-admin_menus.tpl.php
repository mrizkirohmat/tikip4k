<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:00:45
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-admin_menus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61263efd7cec08_67935256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a4482b7f12d983115cffb550ffdb1aed8fd7487' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-admin_menus.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:find.tpl' => 1,
  ),
),false)) {
function content_61263efd7cec08_67935256 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.bootstrap_modal.php','function'=>'smarty_function_bootstrap_modal',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.self_link.php','function'=>'smarty_block_self_link',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.actions.php','function'=>'smarty_block_actions',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.norecords.php','function'=>'smarty_function_norecords',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.pagination_links.php','function'=>'smarty_block_pagination_links',),));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"Menus",'admpage'=>"general&amp;cookietab=3"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"Menus",'admpage'=>"general&amp;cookietab=3"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Menus<?php $_block_repeat=false;
echo smarty_block_title(array('help'=>"Menus",'admpage'=>"general&amp;cookietab=3"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>
	<div class="t_navbar mb-4">
		<a class="btn btn-primary" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'edit'),$_smarty_tpl);?>
">
			<?php echo smarty_function_icon(array('name'=>"create"),$_smarty_tpl);?>
 Create Menu
		</a>
		<?php echo smarty_function_button(array('href'=>"tiki-admin_modules.php",'_icon_name'=>"modules",'_type'=>"link",'_text'=>"Modules"),$_smarty_tpl);?>

	</div>
<?php }
$_smarty_tpl->_subTemplateRender('file:find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value) {?>table-responsive<?php }?>"> 
	<table class="table table-hover">
		<tr>
			<th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'menuId'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'menuId'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>ID<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'menuId'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
			<th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'name'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Name<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
			<th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'type'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'type'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Type<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'type'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
			<th>Options</th>
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
				<td class="id"><?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['menuId'];?>
</td>
				<td class="text">
					<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu_option']->value == 'y' && $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['menuId'] != 42) {?>
						<a class="link tips" href="tiki-admin_menu_options.php?menuId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['menuId'];?>
" title=":Menu Options"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['name'] ));?>
</a>
					<?php } else { ?>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['name'] ));?>

					<?php }?>
					<span class="form-text">
						<?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['description'] )));?>

					</span>
				</td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['type'];?>
</td>
				<td><span class="badge badge-secondary"><?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['options'];?>
</span></td>
				<td class="action">
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('actions', array());
$_block_repeat=true;
echo smarty_block_actions(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php if ($_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['menuId'] != 42) {
if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu']->value == 'y') {?><action><a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'edit','menuId'=>$_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['menuId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a></action><?php }
if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu_option']->value == 'y') {?><action><a href="tiki-admin_menu_options.php?menuId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['menuId'];?>
"><?php echo smarty_function_icon(array('name'=>"list",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Menu options"),$_smarty_tpl);?>
</a></action><?php }
if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu']->value == 'y') {?><action><a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'remove','menuId'=>$_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['menuId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"remove",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Delete"),$_smarty_tpl);?>
</a></action><?php }
} else {
if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?><action><?php echo smarty_function_button(array('reset'=>"y",'menuId'=>$_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['menuId'],'_text'=>"RESET",'_auto_args'=>"reset,menuId",'_class'=>"btn btn-warning btn-sm"),$_smarty_tpl);?>
</action><hr><?php }
}
if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu']->value == 'y') {?><action><a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'clone','menuId'=>$_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['menuId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"copy",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Clone"),$_smarty_tpl);?>
</a></action><?php }?>
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
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
