<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:31:54
  from 'C:\xampp\htdocs\tikip4k\templates\admin\include_apply_bottom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126464a116ec2_64114061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6aab23ebaf0e687283f80340a3d43174f8f1c38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\admin\\include_apply_bottom.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126464a116ec2_64114061 (Smarty_Internal_Template $_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['applyTitle']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('applyTitle', "Apply changes");
}
if (empty($_smarty_tpl->tpl_vars['applyValue']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('applyValue', "Apply");
}?>
<br>
<div class="row">
	<div class="form-group col-lg-12 clearfix">
		<div class="text-center">
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
	</div>
</div>
<?php }
}
