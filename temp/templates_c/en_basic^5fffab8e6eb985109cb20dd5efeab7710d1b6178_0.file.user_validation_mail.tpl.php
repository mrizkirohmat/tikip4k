<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:12:04
  from 'C:\xampp\htdocs\tikip4k\templates\mail\user_validation_mail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264fb46b0078_97491626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fffab8e6eb985109cb20dd5efeab7710d1b6178' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\mail\\user_validation_mail.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61264fb46b0078_97491626 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),));
?>
Hi <?php echo $_smarty_tpl->tpl_vars['mail_user']->value;?>
,

You or someone registered this email address at <?php echo $_smarty_tpl->tpl_vars['mail_site']->value;?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['mail_template_custom_text']));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['mail_template_custom_text']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>If you want to be a registered user in this %0site you will have to use the following link to login for the first time:<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['mail_template_custom_text']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo $_smarty_tpl->tpl_vars['validation_url']->value;?>


Enjoy the site!<?php }
}
