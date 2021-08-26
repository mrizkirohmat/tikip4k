<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:12:04
  from 'C:\xampp\htdocs\tikip4k\templates\mail\user_validation_mail_subject.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264fb4c87028_46406852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aacc97ae4c7a7ed496a98b722a3c6c147cb5b786' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\mail\\user_validation_mail_subject.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61264fb4c87028_46406852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Your <?php echo $_smarty_tpl->tpl_vars['prefs']->value['mail_template_custom_text'];?>
registration confirmation<?php $_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> (<?php echo $_smarty_tpl->tpl_vars['mail_site']->value;?>
)
<?php }
}
