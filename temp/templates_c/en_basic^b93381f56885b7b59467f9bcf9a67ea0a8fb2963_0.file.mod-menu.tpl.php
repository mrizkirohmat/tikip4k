<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:31:07
  from 'C:\xampp\htdocs\tikip4k\templates\modules\mod-menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126461ba45b08_08725483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b93381f56885b7b59467f9bcf9a67ea0a8fb2963' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\modules\\mod-menu.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126461ba45b08_08725483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tikimodule.php','function'=>'smarty_block_tikimodule',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.menu.php','function'=>'smarty_function_menu',),));
?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_error']->value,'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>$_smarty_tpl->tpl_vars['tpl_module_name']->value,'flip'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['flip'])===null||$tmp==='' ? null : $tmp),'decorations'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['decorations'])===null||$tmp==='' ? null : $tmp),'nobox'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['nobox'])===null||$tmp==='' ? null : $tmp),'notitle'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['notitle'])===null||$tmp==='' ? null : $tmp),'type'=>$_smarty_tpl->tpl_vars['module_type']->value));
$_block_repeat=true;
echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_error']->value,'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>$_smarty_tpl->tpl_vars['tpl_module_name']->value,'flip'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['flip'])===null||$tmp==='' ? null : $tmp),'decorations'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['decorations'])===null||$tmp==='' ? null : $tmp),'nobox'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['nobox'])===null||$tmp==='' ? null : $tmp),'notitle'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['notitle'])===null||$tmp==='' ? null : $tmp),'type'=>$_smarty_tpl->tpl_vars['module_type']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php if ((($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['bootstrap'])===null||$tmp==='' ? null : $tmp) != 'n') {?>
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['type'])===null||$tmp==='' ? null : $tmp) == 'horiz' || !empty($_smarty_tpl->tpl_vars['module_params']->value['navbar_brand'])) {?>
			<nav class="<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['navbar_class'])) {
echo $_smarty_tpl->tpl_vars['module_params']->value['navbar_class'];
} else { ?>navbar navbar-expand-lg <?php }?> <?php if ($_smarty_tpl->tpl_vars['prefs']->value['theme_navbar_color_variant'] == 'dark') {?>navbar-dark bg-dark <?php } else { ?>navbar-light bg-light<?php }?>" role="navigation">
				<?php if ($_smarty_tpl->tpl_vars['module_params']->value['navbar_brand'] != '') {?>
					<a class="navbar-brand" href="index.php">
						<img id="logo-header" src="<?php echo $_smarty_tpl->tpl_vars['module_params']->value['navbar_brand'];?>
" alt="Logo">
					</a>
				<?php }?>
				<?php if (empty($_smarty_tpl->tpl_vars['module_params']->value['navbar_toggle']) || $_smarty_tpl->tpl_vars['module_params']->value['navbar_toggle'] != 'n') {?>
						<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mod-menu<?php echo $_smarty_tpl->tpl_vars['module_position']->value;
echo $_smarty_tpl->tpl_vars['module_ord']->value;?>
 .navbar-collapse" aria-controls="mod-menu<?php echo $_smarty_tpl->tpl_vars['module_position']->value;
echo $_smarty_tpl->tpl_vars['module_ord']->value;?>
" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

					<div class="collapse navbar-collapse">
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_edit_icon'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y' && $_smarty_tpl->tpl_vars['module_params']->value['id'] != '42') {?>
							<div class="edit-menu">
								<a href="tiki-admin_menu_options.php?menuId=<?php echo $_smarty_tpl->tpl_vars['module_params']->value['id'];?>
" title="Edit this menu"><?php echo smarty_function_icon(array('name'=>"edit"),$_smarty_tpl);?>
</a>
							</div>
						<?php }?>
						<?php echo smarty_function_menu(array('params'=>$_smarty_tpl->tpl_vars['module_params']->value,'bootstrap'=>'navbar'),$_smarty_tpl);?>

					</div>
				<?php } else { ?>
					<div>
						<?php echo smarty_function_menu(array('params'=>$_smarty_tpl->tpl_vars['module_params']->value,'bootstrap'=>'navbar'),$_smarty_tpl);?>

					</div>
				<?php }?>
			</nav>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_edit_icon'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y' && $_smarty_tpl->tpl_vars['module_params']->value['id'] != '42') {?>
				<div class="edit-menu">
					<a href="tiki-admin_menu_options.php?menuId=<?php echo $_smarty_tpl->tpl_vars['module_params']->value['id'];?>
" title="Edit this menu"><?php echo smarty_function_icon(array('name'=>"edit"),$_smarty_tpl);?>
</a>
				</div>
			<?php }?>
			<?php echo smarty_function_menu(array('params'=>$_smarty_tpl->tpl_vars['module_params']->value,'bootstrap'=>'basic'),$_smarty_tpl);?>

		<?php }?>
	<?php } else { ?>
		<div class="clearfix <?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['menu_class'])) {
echo $_smarty_tpl->tpl_vars['module_params']->value['menu_class'];
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['menu_id'])) {?> id="<?php echo $_smarty_tpl->tpl_vars['module_params']->value['menu_id'];?>
"<?php }?>>
			<?php echo smarty_function_menu(array('params'=>$_smarty_tpl->tpl_vars['module_params']->value),$_smarty_tpl);?>

		</div>
	<?php }
$_block_repeat=false;
echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_error']->value,'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>$_smarty_tpl->tpl_vars['tpl_module_name']->value,'flip'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['flip'])===null||$tmp==='' ? null : $tmp),'decorations'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['decorations'])===null||$tmp==='' ? null : $tmp),'nobox'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['nobox'])===null||$tmp==='' ? null : $tmp),'notitle'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['notitle'])===null||$tmp==='' ? null : $tmp),'type'=>$_smarty_tpl->tpl_vars['module_type']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
