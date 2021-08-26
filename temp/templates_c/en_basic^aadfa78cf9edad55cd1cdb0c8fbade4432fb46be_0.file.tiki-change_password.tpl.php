<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:19:47
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-change_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126518335e443_42002301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aadfa78cf9edad55cd1cdb0c8fbade4432fb46be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-change_password.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:password_jq.tpl' => 1,
    'file:password_help.tpl' => 1,
  ),
),false)) {
function content_6126518335e443_42002301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),));
?>

<?php if ((isset($_smarty_tpl->tpl_vars['new_user_validation']->value)) && $_smarty_tpl->tpl_vars['new_user_validation']->value == 'y') {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array());
$_block_repeat=true;
echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Your account has been validated.<?php $_block_repeat=false;
echo smarty_block_title(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>You have to choose a password to use this account.<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else { ?>
	<?php $_smarty_tpl->_assignInScope('new_user_validation', 'n');
}?>
<div class="row">
<div class="col-md-10 offset-md-1">
	<form role="form" method="post" action="tiki-change_password.php">
		<div class="card">
			<?php if (!empty($_smarty_tpl->tpl_vars['oldpass']->value) && $_smarty_tpl->tpl_vars['new_user_validation']->value == 'y') {?>
				<input type="hidden" name="oldpass" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['oldpass']->value ));?>
">
			<?php } elseif (!empty($_REQUEST['actpass'])) {?>
				<input type="hidden" name="actpass" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_REQUEST['actpass'] ));?>
">
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['new_user_validation']->value == 'y') {?>
				<input type="hidden" name="new_user_validation" value="y">
			<?php }?>
			<div class="card-header text-center">
				<?php if ($_smarty_tpl->tpl_vars['new_user_validation']->value != 'y') {?>
					<h3 class="card-title">Change password</h3>
				<?php } else { ?>
					<h3 class="card-title">Set password</h3>
				<?php }?>
			</div>
			<div class="card-body">
				<div class="clearfix">
					<?php $_smarty_tpl->_subTemplateRender('file:password_jq.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<div class="text-center" id="divRegCapson" style="display:none;">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>CapsLock is on.<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-4 col-form-label" for="user">Username</label>
					<div class="col-md-8">
						<?php if (empty($_smarty_tpl->tpl_vars['userlogin']->value)) {?>
							<input type="text" class="form-control" id="user" name="user" autocomplete="username">
						<?php } else { ?>
							<input type="hidden" id="user" name="user" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userlogin']->value ));?>
">
							<input type="text" class="form-control" id="user-autocomplete" name="user-autocomplete" disabled="disabled" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userlogin']->value ));?>
" autocomplete="username">
						<?php }?>
					</div>
				</div>
				<?php if (empty($_REQUEST['actpass']) && ($_smarty_tpl->tpl_vars['new_user_validation']->value != 'y' || empty($_smarty_tpl->tpl_vars['oldpass']->value))) {?>
					<div class="form-group row">
						<label class="col-md-4 col-form-label" for="oldpass">Old Password</label>
						<div class="col-md-8">
							<input type="password" class="form-control" name="oldpass" id="oldpass" placeholder="Old Password" autocomplete="current-password">
						</div>
					</div>
				<?php }?>
				<div class="form-group row">
					<label class="col-md-4 col-form-label" for="pass1">New Password</label>
					<div class="col-md-8">
						<input type="password" class="form-control" placeholder="New Password" name="pass" id="pass1" autocomplete="new-password">
						<div style="margin-left:5px;">
							<div id="mypassword_text"><?php echo smarty_function_icon(array('name'=>'ok','istyle'=>'display:none'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>'error','istyle'=>'display:none'),$_smarty_tpl);?>
 <span id="mypassword_text_inner"></span></div>
							<div id="mypassword_bar" style="font-size: 5px; height: 2px; width: 0px;"></div>
						</div>
						<div style="margin-top:5px">
							<?php $_smarty_tpl->_subTemplateRender('file:password_help.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-md-4 col-form-label" for="pass2">Repeat Password</label>
					<div class="col-md-8">
						<input type="password" class="form-control" name="passAgain" id="pass2" placeholder="Repeat Password" autocomplete="new-password">
						<div id="mypassword2_text">
							<div id="match" style="display:none">
								<?php echo smarty_function_icon(array('name'=>'ok','istyle'=>'color:#0ca908'),$_smarty_tpl);?>
 Passwords match
							</div>
							<div id="nomatch" style="display:none">
								<?php echo smarty_function_icon(array('name'=>'error','istyle'=>'color:#ff0000'),$_smarty_tpl);?>
 Passwords do not match
							</div>
						</div>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['generate_password'] == 'y') {?>
					<div class="form-group row">
						<div class="col-md-4 offset-md-4">
							<span id="genPass"><?php echo smarty_function_button(array('href'=>"#",'_text'=>"Generate a password"),$_smarty_tpl);?>
</span>
						</div>
						<div class="col-md-4">
							<input id='genepass' class="form-control" name="genepass" type="text" tabindex="0" style="display:none">
						</div>
					</div>
				<?php }?>
				<?php if (empty($_smarty_tpl->tpl_vars['email']->value)) {?>
					<div class="form-group row">
						<label class="col-md-4 col-form-label" for="email">Email</label>
						<div class="col-md-8">
							<input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php if (!empty($_smarty_tpl->tpl_vars['email']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['email']->value ));
}?>" autocomplete="email">
						</div>
					</div>
				<?php }?>
			</div>
			<div class="card-footer text-center">
				<input type="submit" class="btn btn-secondary" name="change" onclick="return checkPasswordsMatch('#pass2', '#pass1', '#mypassword2_text');" value="Apply"><span id="validate"></span>
			</div>
		</div>
	</form>
</div>
</div>
<?php }
}
