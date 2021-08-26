<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:26:32
  from 'C:\xampp\htdocs\tikip4k\templates\layout_fullscreen_check.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264508dac151_64353629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7790ea3892e9695b1edc332c23adfbf0ac80874c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\layout_fullscreen_check.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61264508dac151_64353629 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.self_link.php','function'=>'smarty_block_self_link',),));
?>




<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_fullscreen'] == 'y' && $_smarty_tpl->tpl_vars['filegals_manager']->value == '' && $_smarty_tpl->tpl_vars['print_page']->value != 'y') {?>
	<div id="fullscreenbutton">
		<?php if ($_SESSION['fullscreen'] == 'n') {?>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('fullscreen'=>"y",'_ajax'=>'n','_icon_name'=>'expand','_title'=>"Fullscreen"));
$_block_repeat=true;
echo smarty_block_self_link(array('fullscreen'=>"y",'_ajax'=>'n','_icon_name'=>'expand','_title'=>"Fullscreen"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_self_link(array('fullscreen'=>"y",'_ajax'=>'n','_icon_name'=>'expand','_title'=>"Fullscreen"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php } else { ?>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('fullscreen'=>"n",'_ajax'=>'n','_icon_name'=>'compress','_title'=>"Cancel Fullscreen"));
$_block_repeat=true;
echo smarty_block_self_link(array('fullscreen'=>"n",'_ajax'=>'n','_icon_name'=>'compress','_title'=>"Cancel Fullscreen"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_self_link(array('fullscreen'=>"n",'_ajax'=>'n','_icon_name'=>'compress','_title'=>"Cancel Fullscreen"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>
	</div>
<?php }
}
}
