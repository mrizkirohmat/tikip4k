<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:28:11
  from 'C:\xampp\htdocs\tikip4k\templates\wiki_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126456b2f8f02_36017527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64d1d732f714c3816cdb13ecd48e46b1714cdffe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\wiki_edit.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126456b2f8f02_36017527 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.toolbars.php','function'=>'smarty_function_toolbars',),));
?>


<div class='edit-zone clearfix'> 
	<?php if ($_smarty_tpl->tpl_vars['textarea__toolbars']->value != 'n') {?>
		<div class='textarea-toolbar nav-justified' id='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['textarea_id']->value)===null||$tmp==='' ? 'editwiki' : $tmp);?>
_toolbar'>
			<?php echo smarty_function_toolbars(array('area_id'=>(($tmp = @$_smarty_tpl->tpl_vars['textarea_id']->value)===null||$tmp==='' ? 'editwiki' : $tmp),'comments'=>$_smarty_tpl->tpl_vars['comments']->value,'switcheditor'=>$_smarty_tpl->tpl_vars['switcheditor']->value,'section'=>$_smarty_tpl->tpl_vars['toolbar_section']->value),$_smarty_tpl);?>

		</div>
	<?php }?>
	<textarea <?php echo $_smarty_tpl->tpl_vars['textarea_attributes']->value;?>
><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['textareadata']->value ));?>
</textarea>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['diff_style']->value)) && $_smarty_tpl->tpl_vars['diff_style']->value) {?>
	<input type="hidden" name="oldver" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['diff_oldver']->value ));?>
">
	<input type="hidden" name="newver" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['diff_newver']->value ));?>
">
	<input type="hidden" name="source_page" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['source_page']->value ));?>
">
<?php }?>

<?php }
}
