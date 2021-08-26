<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:32:29
  from 'C:\xampp\htdocs\tikip4k\templates\prefs\multiselector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126466dcc32d0_17697627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ad4b49fb319da7c9270f52a0a4f16ec7bc42cc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\prefs\\multiselector.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:prefs/shared.tpl' => 1,
  ),
),false)) {
function content_6126466dcc32d0_17697627 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.object_selector_multi.php','function'=>'smarty_function_object_selector_multi',),));
?>
<div class="adminoptionbox preference clearfix form-group row <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['tagstring'] ));
if ((isset($_REQUEST['highlight'])) && $_REQUEST['highlight'] == $_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>">
	<label class="col-form-label col-sm-4" for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['id'] ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['name'] ));?>
</label>
	<div class="col-sm-8">
		<?php echo smarty_function_object_selector_multi(array('_simplename'=>$_smarty_tpl->tpl_vars['p']->value['preference'],'_simpleid'=>$_smarty_tpl->tpl_vars['p']->value['id'],'_simplevalue'=>$_smarty_tpl->tpl_vars['p']->value['value'],'_separator'=>$_smarty_tpl->tpl_vars['p']->value['separator'],'type'=>$_smarty_tpl->tpl_vars['p']->value['selector_type'],'_format'=>(($tmp = @$_smarty_tpl->tpl_vars['p']->value['format'])===null||$tmp==='' ? null : $tmp)),$_smarty_tpl);?>

		<?php $_smarty_tpl->_subTemplateRender("file:prefs/shared.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
</div>
<?php }
}
