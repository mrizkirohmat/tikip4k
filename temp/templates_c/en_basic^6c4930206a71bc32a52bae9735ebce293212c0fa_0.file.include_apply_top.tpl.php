<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:29:18
  from 'C:\xampp\htdocs\tikip4k\templates\admin\include_apply_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612645ae3bf432_76303964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c4930206a71bc32a52bae9735ebce293212c0fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\admin\\include_apply_top.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612645ae3bf432_76303964 (Smarty_Internal_Template $_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['applyTitle']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('applyTitle', "Apply changes");
}
if (empty($_smarty_tpl->tpl_vars['applyValue']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('applyValue', "Apply");
}?>
<div class="float-right">
	<input
		type="submit"
		<?php if (!empty($_smarty_tpl->tpl_vars['applyForm']->value)) {?>form="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['applyForm']->value,'attr' ));?>
"<?php }?>
		class="btn btn-primary tips"
		title=":<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['applyTitle']->value,'attr' ));?>
"
		value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['applyValue']->value,'attr' ));?>
"
	>
</div>
<?php }
}