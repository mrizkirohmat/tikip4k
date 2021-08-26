<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:11:42
  from 'C:\xampp\htdocs\tikip4k\templates\register-pass.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264f9ea19736_74007270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef68e5f1b5c5b3ae139f6032bcbfdf9430c8017b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\register-pass.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:password_help.tpl' => 1,
  ),
),false)) {
function content_61264f9ea19736_74007270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),));
?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_tpl']) {?>
	<input id='pass1' type="password" name="pass" autocomplete="new-password" onkeypress="regCapsLock(event)" class="form-control" >
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_hide_mandatory'] != 'y') {?>&nbsp;<strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }
} else { ?>
	<?php if (!(isset($_smarty_tpl->tpl_vars['openid_associate']->value)) || $_smarty_tpl->tpl_vars['openid_associate']->value != 'y') {?>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="pass1">New Password <?php if ($_smarty_tpl->tpl_vars['trackerEditFormId']->value) {?><strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }?></label>
			<div class="col-sm-8">
				<input
					class="form-control"
					id='pass1'
					type="password"
					name="pass"
					autocomplete="new-password"
					value="<?php if (!empty($_POST['pass'])) {
echo $_POST['pass'];
}?>"
				>
				<div style="margin-left:5px;">
					<div id="mypassword_text"><?php echo smarty_function_icon(array('name'=>'ok','istyle'=>'display:none'),$_smarty_tpl);
echo smarty_function_icon(array('name'=>'error','istyle'=>'display:none'),$_smarty_tpl);?>
 <span id="mypassword_text_inner"></span></div>
					<div id="mypassword_bar" style="font-size: 5px; height: 2px; width: 0px;"></div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_validation'] != 'y') {?>
					<div style="margin-top:5px">
						<?php $_smarty_tpl->_subTemplateRender('file:password_help.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					</div>
				<?php }?>
			</div>
		</div>
	<?php }
}
}
}
