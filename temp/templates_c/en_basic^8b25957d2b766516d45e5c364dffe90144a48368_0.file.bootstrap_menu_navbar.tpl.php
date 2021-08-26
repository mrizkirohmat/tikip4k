<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:09:58
  from 'C:\xampp\htdocs\tikip4k\templates\bootstrap_menu_navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264126dd34c3_57506610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b25957d2b766516d45e5c364dffe90144a48368' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\bootstrap_menu_navbar.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bootstrap_menu_navbar_children.tpl' => 1,
  ),
),false)) {
function content_61264126dd34c3_57506610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),));
?>
<ul class="<?php if ($_smarty_tpl->tpl_vars['bs_menu_class']->value) {
echo $_smarty_tpl->tpl_vars['bs_menu_class']->value;
} else { ?>navbar-nav mr-auto<?php if ($_smarty_tpl->tpl_vars['prefs']->value['jquery_smartmenus_enable'] == 'y') {?> <?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['jquery_smartmenus_mode'])) {?> sm-<?php echo $_smarty_tpl->tpl_vars['prefs']->value['jquery_smartmenus_mode'];
}
}
}?>">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['jquery_smartmenus_enable'] == 'y') {?>
			<?php $_smarty_tpl->_subTemplateRender('file:bootstrap_menu_navbar_children.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['item']->value), 0, true);
?>
		<?php } else { ?>
			<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['children'])) {?>
				<li class="nav-item dropdown<?php if ((($tmp = @$_smarty_tpl->tpl_vars['item']->value['selected'])===null||$tmp==='' ? null : $tmp)) {?> active<?php }?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['class'] ));?>
">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['name'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</a>
					<ul class="dropdown-menu">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'sub');
$_smarty_tpl->tpl_vars['sub']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->do_else = false;
?>
							<li><a class="dropdown-item<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub']->value['class'] ));
if ((($tmp = @$_smarty_tpl->tpl_vars['sub']->value['selected'])===null||$tmp==='' ? null : $tmp)) {?> active<?php }?>" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sub']->value['sefurl'] ));?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['sub']->value['name'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a></li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</li>
			<?php } else { ?>
				<li class="nav-item <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['class'] ));
if ((($tmp = @$_smarty_tpl->tpl_vars['item']->value['selected'])===null||$tmp==='' ? null : $tmp)) {?> active<?php }?>"><a class="nav-link" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['sefurl'] ));?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['item']->value['name'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a></li>
			<?php }?>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
