<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:27:50
  from 'C:\xampp\htdocs\tikip4k\templates\prefs\text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612645564254e8_55420559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5022cfd0368304a9846deb0fb5cabe9d35bdb298' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\prefs\\text.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:prefs/shared.tpl' => 1,
  ),
),false)) {
function content_612645564254e8_55420559 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),));
?>
<div class="adminoptionbox preference clearfix form-group row <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['tagstring'] ));
if ((isset($_REQUEST['highlight'])) && $_REQUEST['highlight'] == $_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>">
	<label class="col-form-label col-sm-4" for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['id'] ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['name'] ));?>
</label>
	<div class="col-sm-8">
		<?php if (!empty($_smarty_tpl->tpl_vars['p']->value['units']) || !empty($_smarty_tpl->tpl_vars['p']->value['fgal_picker'])) {?>
			<div class="input-group">
		<?php }?>
		<?php if (is_array($_smarty_tpl->tpl_vars['p']->value['value'])) {?>
			<input name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['preference'] ));?>
" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['id'] ));?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( implode($_smarty_tpl->tpl_vars['p']->value['value'],$_smarty_tpl->tpl_vars['p']->value['separator']) ));?>
" class="form-control" size="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['p']->value['size'])===null||$tmp==='' ? 40 : $tmp) ));?>
"
				type="text" <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
>
		<?php } else { ?>
			<input name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['preference'] ));?>
" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['id'] ));?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['value'] ));?>
" class="form-control" size="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['p']->value['size'])===null||$tmp==='' ? 40 : $tmp) ));?>
"
				type="text" <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['p']->value['units'])) {?>
				<div class="input-group-append">
					<span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['p']->value['units'];?>
</span>
				</div>
			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['p']->value['fgal_picker'])) {?>
			<?php ob_start();?>{<?php $_prefixVariable6 = ob_get_clean();
ob_start();?>}<?php $_prefixVariable7 = ob_get_clean();
$_smarty_tpl->_assignInScope('fileId', (($_prefixVariable6).('fileId')).($_prefixVariable7));?>
				<div class="input-group-append">
					<a class="btn btn-primary" title="Upload image" href="#"
						onclick="$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['id'] ));?>
').select(); openFgalsWindow('tiki-upload_file.php?filegals_manager=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value['id'] ));?>
&insertion_syntax=<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['fileId']->value,'display');?>
', true);return false;">
					<?php echo smarty_function_icon(array('name'=>'image'),$_smarty_tpl);?>
&nbsp;Upload image
					</a>
				</div>
			</div>
		<?php }?>

		<?php $_smarty_tpl->_subTemplateRender("file:prefs/shared.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
</div>
<?php }
}
