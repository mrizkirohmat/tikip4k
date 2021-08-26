<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:12:12
  from 'C:\xampp\htdocs\tikip4k\templates\mail\user_validation_msg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264fbc6bc709_09953063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a49a09ed1f88067a1202cdc5aed8f73a765088b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\mail\\user_validation_msg.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61264fbc6bc709_09953063 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['prefs']->value['login_autogenerate'] == 'y') {?>
	<strong>Your <?php echo $_smarty_tpl->tpl_vars['prefs']->value['mail_template_custom_text'];?>
account ID <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 has been generated.</strong>
<?php }?>
You will receive an email with the information needed to log into this site the first time.
<?php }
}
