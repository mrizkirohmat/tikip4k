<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:28:11
  from 'C:\xampp\htdocs\tikip4k\templates\freetag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126456b3fdbd1_04114675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47d6174b323004dae64eb710594e3fd0b21d5324' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\freetag.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126456b3fdbd1_04114675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),));
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value == 'y') {?>
	<div class="form-group row">
		<label class="col-md-4 col-form-label" for="tagBox">Tags</label>
		<div class="col-md-8">
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array('notonready'=>true));
$_block_repeat=true;
echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	function addTag(tag) {
		document.getElementById('tagBox').value = document.getElementById('tagBox').value + ' ' + tag;
	}
<?php $_block_repeat=false;
echo smarty_block_jq(array('notonready'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<div id="freetager">
				<input type="text" id="tagBox" class="form-control" name="freetag_string" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['taglist']->value ));?>
">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tag_suggestion']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'tagurl', null, null);
if ((strstr($_smarty_tpl->tpl_vars['t']->value,' '))) {?>"<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
"<?php } else {
echo $_smarty_tpl->tpl_vars['t']->value;
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<a href="javascript:addTag('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tagurl'),'javascript' )) ));?>
');" onclick="javascript:needToConfirm=false"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value ));?>
</a>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_help'] == 'y') {?>
					<div class="form-text">
						Put tags separated by spaces. For tags with more than one word, use no spaces and put words together or enclose them with double quotes.
					</div>
				<?php }?>
			</div>
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['freetags_multilingual'] == 'y' && $_smarty_tpl->tpl_vars['blog']->value == 'y') {?>
		<div class="form-group row">
			<label for="" class="col-md-4 col-form-label">Language</label>
			<div class="col-md-8">
				<select name="lang" class="form-control">
					<option value="">All</option>
						<?php
$__section_ix_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_5_total = $__section_ix_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_5_total !== 0) {
for ($__section_ix_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_5_iteration <= $__section_ix_5_total; $__section_ix_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
							<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['value'] ));?>
"<?php if ($_smarty_tpl->tpl_vars['lang']->value == $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['value']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'];?>
</option>
						<?php
}
}
?>
				</select>
			</div>
		</div>
	<?php }
}
}
}
