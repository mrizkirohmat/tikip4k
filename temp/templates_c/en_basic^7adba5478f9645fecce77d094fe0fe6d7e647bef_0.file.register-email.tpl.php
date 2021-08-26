<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:11:42
  from 'C:\xampp\htdocs\tikip4k\templates\register-email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264f9e8e65c7_75217872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7adba5478f9645fecce77d094fe0fe6d7e647bef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\register-email.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61264f9e8e65c7_75217872 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_tpl'] && $_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_user_firstlogin'] != 'y') {?>
	<input type="text" id="email" name="email" class="form-control" >
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_hide_mandatory'] != 'y') {?>&nbsp;<strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }
} else { ?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email'] != 'y') {?>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="email">Email <?php if ($_smarty_tpl->tpl_vars['trackerEditFormId']->value) {?><strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }?></label>
			<div class="col-sm-8">
				<input class="form-control" type="text" id="email" name="email" value="<?php if (!empty($_POST['email'])) {
echo $_POST['email'];
}?>">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['validateUsers'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['validateEmail'] != 'y') {?>
					<p class="form-text">
						<em>A valid email is mandatory to register</em>
					</p>
				<?php }?>
			</div>
		</div>
	<?php }
}
}
}
