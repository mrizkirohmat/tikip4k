<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:31:53
  from 'C:\xampp\htdocs\tikip4k\templates\prefs\flag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612646497d34b0_78891675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a451d8072d783287202de9e388a33c7ca9c5d27a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\prefs\\flag.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:prefs/shared.tpl' => 1,
  ),
),false)) {
function content_612646497d34b0_78891675 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="adminoptionbox preference clearfix <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['tagstring'] ));
if ((isset($_REQUEST['highlight'])) && $_REQUEST['highlight'] == $_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>">
	<div class="adminoption form-group row">
		<label class="col-sm-4">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['name'] ));?>

		</label>
		<div class="col-sm-8">
			<div class="form-check">
				<input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['id'] ));?>
" class="form-check-input" type="checkbox" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['preference'] ));?>
" <?php if ($_smarty_tpl->tpl_vars['p']->value['value'] == 'y') {?>checked="checked" <?php }?>
					<?php if (!$_smarty_tpl->tpl_vars['p']->value['available']) {?>disabled="disabled"<?php }?> <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>

					data-tiki-admin-child-block="#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['preference'] ));?>
_childcontainer"
					data-tiki-admin-child-mode="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mode']->value ));?>
"
				>
				<?php $_smarty_tpl->_subTemplateRender("file:prefs/shared.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>

		</div>
	</div>
</div>
<?php }
}
