<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:19:31
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-remind_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61265173b53740_03110320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '233e95727cde5a9eb75bda5a683d95d6fcc07319' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-remind_password.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61265173b53740_03110320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('admpage'=>'login'));
$_block_repeat=true;
echo smarty_block_title(array('admpage'=>'login'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>I forgot my password<?php $_block_repeat=false;
echo smarty_block_title(array('admpage'=>'login'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['showmsg']->value != 'n') {?>
	<?php if ($_smarty_tpl->tpl_vars['showmsg']->value == 'e') {?>
		<span class="warn tips" title=":Error"><?php echo smarty_function_icon(array('name'=>'error','style'=>"vertical-align:middle;align:left;"),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo smarty_function_icon(array('name'=>'ok','alt'=>"OK",'style'=>"vertical-align:middle;align:left;"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email'] != 'y') {?>
		<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['msg']->value,'html' )))===null||$tmp==='' ? "Enter your username or email." : $tmp);?>

	<?php } else { ?>
		<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['msg']->value,'html' )))===null||$tmp==='' ? "Enter your email." : $tmp);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['showmsg']->value == 'e') {?>
		</span>
	<?php }?>
	<br><br>
<?php }
if ($_smarty_tpl->tpl_vars['showfrm']->value == 'y') {?>
<div>
	<form action="tiki-remind_password.php" method="post">
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email'] != 'y') {?>
			<div class="form-group row">
				<label class="col-sm-3 col-md-2 col-form-label" for="name">Username</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" placeholder="Username" name="name" id="name">
				</div>
			</div>
			<div class="form-group row">
				<div class="offset-sm-3 offset-md-2 col-sm-9 offset-xs-0">
					<strong class="text-uppercase">or</strong>
				</div>
			</div>
		<?php }?>
		<div class="form-group row">
			<label class="col-sm-3 col-md-2 col-form-label" for="email">Email</label>
			<div class="col-sm-6">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email'] != 'y') {?>
					<input type="email" class="form-control" placeholder="Email" name="email" id="email">
				<?php } else { ?>
					<input type="email" class="form-control" placeholder="Email" name="name" id="name">
				<?php }?>
			</div>
		</div>
		<div class="form-group row">
			<div class="offset-sm-3 offset-md-2 col-sm-9">
				<input type="submit" class="btn btn-primary" name="remind" value="Request Password Reset">
			</div>
		</div>
	</form>
</div>
<?php }
}
}
