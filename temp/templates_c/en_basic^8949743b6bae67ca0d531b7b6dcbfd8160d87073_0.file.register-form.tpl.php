<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:11:42
  from 'C:\xampp\htdocs\tikip4k\templates\register-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264f9e76f060_62839973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8949743b6bae67ca0d531b7b6dcbfd8160d87073' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\register-form.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:register-login.tpl' => 1,
    'file:register-email.tpl' => 1,
    'file:register-passcode.tpl' => 1,
    'file:register-pass.tpl' => 1,
    'file:register-pass2.tpl' => 1,
    'file:register-groupchoice.tpl' => 1,
  ),
),false)) {
function content_61264f9e76f060_62839973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),));
?>

<?php $_smarty_tpl->_subTemplateRender("file:register-login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:register-email.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:register-passcode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:register-pass.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:register-pass2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['customfields']->value))) {?>
	<?php
$__section_ir_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['customfields']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ir_0_total = $__section_ir_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ir'] = new Smarty_Variable(array());
if ($__section_ir_0_total !== 0) {
for ($__section_ir_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] = 0; $__section_ir_0_iteration <= $__section_ir_0_total; $__section_ir_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']++){
?>
		<?php if ($_smarty_tpl->tpl_vars['customfields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] : null)]['show']) {?>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label" for="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] : null)]['prefName'];?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['customfields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] : null)]['label'];?>
:<?php $_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></label>
				<div class="col-sm-8">
					<input type="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] : null)]['type'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] : null)]['prefName'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] : null)]['value'];?>
" size="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] : null)]['size'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ir']->value['index'] : null)]['prefName'];?>
" class="form-control" >
				</div>
			</div>
		<?php }?>
	<?php
}
}
}
$_smarty_tpl->_subTemplateRender("file:register-groupchoice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
