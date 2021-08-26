<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:32:28
  from 'C:\xampp\htdocs\tikip4k\templates\admin\include_anchors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126466c92b012_38978260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '790dfddecc0fd5f451b4e31a7af12f3837e207c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\admin\\include_anchors.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126466c92b012_38978260 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),));
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_icons']->value, 'info', false, 'page');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
	<?php if (!$_smarty_tpl->tpl_vars['info']->value['disabled']) {?>
		<li><a href="<?php if ($_smarty_tpl->tpl_vars['info']->value['url']) {
echo $_smarty_tpl->tpl_vars['info']->value['url'];
} else { ?>tiki-admin.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;
}?>" data-alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
" class="tips bottom slow icon nav-link" title="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
|<?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
">
			<?php echo smarty_function_icon(array('name'=>"admin_".((string)$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl);?>

		</a></li>
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
