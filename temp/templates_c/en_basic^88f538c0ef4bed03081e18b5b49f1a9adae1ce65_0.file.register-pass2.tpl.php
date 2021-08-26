<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:11:42
  from 'C:\xampp\htdocs\tikip4k\templates\register-pass2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264f9eabb7c1_95258264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88f538c0ef4bed03081e18b5b49f1a9adae1ce65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\register-pass2.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61264f9eabb7c1_95258264 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),));
?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_tpl']) {?>
	<input id='pass2' type="password" name="passAgain" autocomplete="new-password" onkeypress="regCapsLock(event)" class="form-control" >
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_hide_mandatory'] != 'y') {?>&nbsp;<strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }
} else { ?>
	<?php if (!(isset($_smarty_tpl->tpl_vars['openid_associate']->value)) || $_smarty_tpl->tpl_vars['openid_associate']->value != 'y') {?>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="pass2">Confirm password <?php if ($_smarty_tpl->tpl_vars['trackerEditFormId']->value) {?><strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }?></label>
			<div class="col-sm-8">
				<input
					class="form-control"
					id='pass2'
					type="password"
					name="passAgain"
					autocomplete="new-password"
					value="<?php if (!empty($_POST['passAgain'])) {
echo $_POST['passAgain'];
}?>"
				>
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
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_validation'] != 'y' && !$_smarty_tpl->tpl_vars['userTrackerData']->value) {?><span id="checkpass"></span><?php }?>
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['generate_password'] == 'y') {?>
			
			<div class="form-group row">
				<div class="col-sm-3 offset-sm-4">
					<span id="genPass"><?php echo smarty_function_button(array('href'=>"#",'_text'=>"Generate a password"),$_smarty_tpl);?>
</span>
				</div>
				<div class="col-sm-3">
					<input id='genepass' class="form-control" name="genepass" type="text" tabindex="0" style="display:none">
				</div>
			</div>
		<?php }?>
	<?php }
}
}
}
