<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:16:16
  from 'C:\xampp\htdocs\tikip4k\templates\password_help.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612650b0820654_77261782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eea48fab3cfbdc9515da7dec5731a8129b22080f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\password_help.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612650b0820654_77261782 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),));
?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_validation'] == 'n') {?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['min_pass_length'] > 1) {?>
		<div class="highlight"><em><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Minimum %0 characters long<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></em></div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_num'] == 'y') {?>
		<div class="highlight"><em>Password must contain both letters and numbers</em></div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_case'] == 'y') {?>
		<div class="highlight"><em>Password must contain at least one lowercase alphabetical character like "a" and one uppercase character like "A".</em></div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_special'] == 'y') {?>
		<div class="highlight"><em>Password must contain at least one special character like " / $ % ? & * ( ) _ + ...</em></div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_blacklist'] == 'y') {?>
		<div class="highlight"><em>Password is too common.</em></div>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_repetition']) && $_smarty_tpl->tpl_vars['prefs']->value['pass_chr_repetition'] == 'y') {?>
		<div class="highlight"><em>Password must not contain a consecutive repetition of the same character such as "111" or "aab"</em></div>
	<?php }
}
}
}
