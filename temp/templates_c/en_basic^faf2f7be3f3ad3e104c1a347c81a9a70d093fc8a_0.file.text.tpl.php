<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:00:42
  from 'C:\xampp\htdocs\tikip4k\templates\trackerinput\text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61263efae85c25_00602879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faf2f7be3f3ad3e104c1a347c81a9a70d093fc8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\trackerinput\\text.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61263efae85c25_00602879 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.autocomplete.php','function'=>'smarty_function_autocomplete',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.langname.php','function'=>'smarty_modifier_langname',),));
if ($_smarty_tpl->tpl_vars['field']->value['isMultilingual'] != 'y') {?>
	<div<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['prepend'] || $_smarty_tpl->tpl_vars['field']->value['options_map']['append']) {?> class="input-group"<?php }?>>
		<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['prepend']) {?>
			<span class="input-group-append">
				<span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['prepend'];?>
</span>
			</span>
		<?php }?>
		<input type="text" class="form-control" id="<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['field']->value['ins_id'],'[','_'),']','');?>
" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['size']) {?>size="<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['size'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['max']) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['max'];?>
"<?php }?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['field']->value['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['field']->value['defaultvalue'] : $tmp) ));?>
">
		<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['append']) {?>
			<span class="input-group-append">
				<span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['append'];?>
</span>
			</span>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['autocomplete'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_autocomplete'] == 'y') {?>
			<?php echo smarty_function_autocomplete(array('element'=>smarty_modifier_replace(smarty_modifier_replace(("#").($_smarty_tpl->tpl_vars['field']->value['ins_id']),"[","_"),"]",''),'type'=>"trackervalue",'options'=>((("trackerId:").($_smarty_tpl->tpl_vars['field']->value['trackerId'])).(",fieldId:")).($_smarty_tpl->tpl_vars['field']->value['fieldId'])),$_smarty_tpl);?>

		<?php }?>
	</div>
<?php } else { ?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['lingualvalue'], 'ling', false, NULL, 'multi', array (
));
$_smarty_tpl->tpl_vars['ling']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ling']->value) {
$_smarty_tpl->tpl_vars['ling']->do_else = false;
?>
		<label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ling']->value['id'] ));?>
"><?php echo smarty_modifier_langname($_smarty_tpl->tpl_vars['ling']->value['lang']);?>
</label>
		<div<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['prepend'] || $_smarty_tpl->tpl_vars['field']->value['options_map']['append']) {?> class="input-group"<?php }?>>
			<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['options_map']['prepend'])) {?>
				<span class="input-group-append">
					<span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['prepend'];?>
</span>
				</span>
			<?php }?>

			<input type="text" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ling']->value['id'] ));?>
" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
[<?php echo $_smarty_tpl->tpl_vars['ling']->value['lang'];?>
]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ling']->value['value'] ));?>
" class="form-control"
				<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['size']) {?>size="<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['size'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['max']) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['max'];?>
"<?php }?>> 

			<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['append']) {?>
				<span class="input-group-append">
					<span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['field']->value['options_map']['append'];?>
</span>
				</span>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['field']->value['options_map']['autocomplete'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_autocomplete'] == 'y') {?>
				<?php echo smarty_function_autocomplete(array('element'=>"#".((string)$_smarty_tpl->tpl_vars['ling']->value['id']),'type'=>"trackervalue",'options'=>"trackerId:".((string)$_smarty_tpl->tpl_vars['field']->value['trackerId']).",fieldId:".((string)$_smarty_tpl->tpl_vars['field']->value['fieldId'])),$_smarty_tpl);?>

			<?php }?>
		</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
