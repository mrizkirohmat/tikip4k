<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:19:36
  from 'C:\xampp\htdocs\tikip4k\templates\mail\password_reminder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612651786e00b4_36357166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bbc2017cb225978a11264113edfb1e8539613a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\mail\\password_reminder.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612651786e00b4_36357166 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),));
?>
Hi <?php echo $_smarty_tpl->tpl_vars['mail_user']->value;?>
,

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['mail_template_custom_text']));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['mail_template_custom_text']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Someone requested a password reset for your %0account<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['mail_template_custom_text']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> (<?php echo $_smarty_tpl->tpl_vars['mail_site']->value;?>
).

Please click on the following link to confirm you wish to reset your password and go to the screen where you must enter a new "permanent" password. Please pick a password only you will know, and don't share it with anyone else.
<?php echo $_smarty_tpl->tpl_vars['mail_machine']->value;?>
/tiki-change_password.php?user=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mail_user']->value,'url' ));?>
&actpass=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mail_apass']->value,'url' ));?>


Important: Username & password are CaSe SenSitiVe

Important: The old password remains active if you don't click the link above.

<?php }
}
