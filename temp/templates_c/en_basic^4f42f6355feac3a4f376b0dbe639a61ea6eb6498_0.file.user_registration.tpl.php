<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:11:42
  from 'C:\xampp\htdocs\tikip4k\templates\user_registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264f9e5b1a36_74237707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f42f6355feac3a4f376b0dbe639a61ea6eb6498' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\user_registration.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:password_jq.tpl' => 1,
    'file:register-form.tpl' => 1,
    'file:antibot.tpl' => 1,
    'file:modules/mod-login_box.tpl' => 2,
  ),
),false)) {
function content_61264f9e5b1a36_74237707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),));
?>

<?php if (empty($_smarty_tpl->tpl_vars['user']->value)) {?>

	<?php $_smarty_tpl->_subTemplateRender('file:password_jq.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php if ($_smarty_tpl->tpl_vars['openid_associate']->value != 'n') {?>
		<h1>Your OpenID identity is valid</h1>
		<p>However, no account is associated to the OpenID identifier.</p>
	<?php }?>
	<div class="alert alert-warning" id="divRegCapson" style="display: none;"><?php echo smarty_function_icon(array('name'=>'error','style'=>"vertical-align:middle"),$_smarty_tpl);?>
 CapsLock is on.</div>
	<?php if ($_smarty_tpl->tpl_vars['allowRegister']->value == 'y') {?>
		<div class="row">
			<div class="col-sm-12">
				<?php if ($_smarty_tpl->tpl_vars['userTrackerData']->value) {?>
					<?php echo $_smarty_tpl->tpl_vars['userTrackerData']->value;?>

				<?php } else { ?>
					<form action="tiki-register.php<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['registerKey'])) {?>?key=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['registerKey'],'url' ));
}?>" method="post" name="RegForm">
						<?php if ($_REQUEST['invite']) {?><input type='hidden' name='invite' value='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_REQUEST['invite'] ));?>
'><?php }?>
						<?php $_smarty_tpl->_subTemplateRender("file:register-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
						<?php if ($_smarty_tpl->tpl_vars['merged_prefs']->value['feature_antibot'] == 'y') {
$_smarty_tpl->_subTemplateRender('file:antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>'register'), 0, false);
}?>
						<div class="row mb-4">
							<div class="col-sm-8 offset-sm-4">
							  <input type="hidden" name="register" value="1">
							  <button class="btn btn-secondary registerSubmit submit" name="register" type="submit">Register <!--i class="fa fa-check"></i--></button>
							</div>
						</div>
					</form>
				<?php }?>
			</div>
		</div>
		<div class="col-sm-8 offset-sm-4">
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"Note"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_protect_email'] == 'y') {?>
					<?php $_smarty_tpl->_assignInScope('sender_email', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['prefs']->value['sender_email'])===null||$tmp==='' ? "this domain" : $tmp),'hexentity' )));?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('sender_email', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['prefs']->value['sender_email'])===null||$tmp==='' ? "this domain" : $tmp) )));?>
				<?php }?>
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>((string)$_smarty_tpl->tpl_vars['sender_email']->value)));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>((string)$_smarty_tpl->tpl_vars['sender_email']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>If you use an email filter, be sure to add %0 to your accepted list<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>((string)$_smarty_tpl->tpl_vars['sender_email']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['openid_associate']->value == 'y') {?>
		<p>
			Associate OpenID with an existing Tiki account
		</p>
		<?php $_smarty_tpl->_subTemplateRender("file:modules/mod-login_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }
} else { ?>
	<?php $_smarty_tpl->_subTemplateRender('file:modules/mod-login_box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('nobox'=>'y'), 0, true);
}?>

<?php }
}
