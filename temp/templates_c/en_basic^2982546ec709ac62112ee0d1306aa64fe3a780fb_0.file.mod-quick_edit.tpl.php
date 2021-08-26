<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:27:56
  from 'C:\xampp\htdocs\tikip4k\templates\modules\mod-quick_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126455c5f9663_24845540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2982546ec709ac62112ee0d1306aa64fe3a780fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\modules\\mod-quick_edit.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126455c5f9663_24845540 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tikimodule.php','function'=>'smarty_block_tikimodule',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),));
?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"quick_edit",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']));
$_block_repeat=true;
echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"quick_edit",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<form method="post" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['qe_action']->value ));?>
">
		<div>
			<?php if ($_smarty_tpl->tpl_vars['templateId']->value) {?>
				<input type="hidden" name="templateId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['templateId']->value ));?>
" />
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['customTip']->value) {?>
				<input type="hidden" name="customTip" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customTip']->value ));?>
" />
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['customTipTitle']->value) {?>
				<input type="hidden" name="customTipTitle" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customTipTitle']->value ));?>
" />
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['wikiHeaderTpl']->value) {?>
				<input type="hidden" name="wikiHeaderTpl" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['wikiHeaderTpl']->value ));?>
" />
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['mod_quickedit_heading']->value) {?>
				<div class="card-body"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mod_quickedit_heading']->value ));?>
</div>
			<?php }?>
			<div class="form-group row mx-0">
				<input id="<?php echo $_smarty_tpl->tpl_vars['qefield']->value;?>
" class="form-control" type="text" name="page" />
				<?php if ($_smarty_tpl->tpl_vars['addcategId']->value) {?>
					<input type="hidden" name="cat_categories[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addcategId']->value ));?>
" />
					<input type="hidden" name="cat_categorize" value="on" />
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['namespace_enabled'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['namespace_default']) {?>
					<div>
						<label>
							<input type="checkbox" class="form-check-input" name="namespace" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['namespace_default'] ));?>
" checked="checked" />
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['namespace_default']));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['namespace_default']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Within %0<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['namespace_default']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						</label>
					</div>
				<?php }?>
			</div>
			<input type="submit" class="btn btn-primary btn-sm" name="qedit" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submit']->value ));?>
" />
		</div>
	</form>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_autocomplete'] == 'y') {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			$("#<?php echo $_smarty_tpl->tpl_vars['qefield']->value;?>
").tiki("autocomplete", "pagename");
		<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }
$_block_repeat=false;
echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"quick_edit",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
