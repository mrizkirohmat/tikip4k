<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:11:42
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264f9e4552e1_01152991',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c425e1a425d2a16d5b30a0aec480c8541cd369c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-register.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61264f9e4552e1_01152991 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.user_registration.php','function'=>'smarty_function_user_registration',),));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('adminpage'=>'login'));
$_block_repeat=true;
echo smarty_block_title(array('adminpage'=>'login'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Registration<?php $_block_repeat=false;
echo smarty_block_title(array('adminpage'=>'login'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if (!empty($_smarty_tpl->tpl_vars['showmsg']->value) && $_smarty_tpl->tpl_vars['showmsg']->value == 'y') {?>
	<div class="simplebox highlight">
		<?php echo nl2br($_smarty_tpl->tpl_vars['msg']->value);?>

	</div>
<?php }?>
<fieldset>
	<?php if ($_smarty_tpl->tpl_vars['user_exists']->value != true) {?>
		<?php if (!(isset($_smarty_tpl->tpl_vars['userTrackerHasDescription']->value))) {?>
			<legend>Register as a new user</legend>
		<?php }?>
	<?php }?>
	<?php echo smarty_function_user_registration(array(),$_smarty_tpl);?>

</fieldset><?php }
}
