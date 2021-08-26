<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:10:16
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264f48d94120_00186903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3d2be8c08dd2b2f75ab58ce5caa86dafdcf11cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-login.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61264f48d94120_00186903 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.module.php','function'=>'smarty_function_module',),));
?>

<div class="row justify-content-center">
	<div class="col-sm-6">
		<?php echo smarty_function_module(array('module'=>'login_box','mode'=>"module",'show_register'=>"y",'show_forgot'=>"y",'show_two_factor_auth'=>((string)$_smarty_tpl->tpl_vars['twoFactorForm']->value),'error'=>'','flip'=>'','decorations'=>'','nobox'=>'','notitle'=>''),$_smarty_tpl);?>

	</div>
</div>
<?php }
}
