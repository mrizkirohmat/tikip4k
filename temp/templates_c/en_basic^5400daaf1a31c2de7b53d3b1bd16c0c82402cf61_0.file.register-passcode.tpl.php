<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:11:42
  from 'C:\xampp\htdocs\tikip4k\templates\register-passcode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264f9e965be6_59861632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5400daaf1a31c2de7b53d3b1bd16c0c82402cf61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\register-passcode.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61264f9e965be6_59861632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),));
?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_tpl']) {?>
	<input type="password" name="passcode" id="passcode" autocomplete="new-password" onkeypress="regCapsLock(event)" class="form-control" >
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_hide_mandatory'] != 'y') {?>&nbsp;<strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }
} else { ?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['useRegisterPasscode'] == 'y') {?>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label" for="passcode">Passcode to register <strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong>
			</label>
			<div class="col-sm-8">
				<input class="form-control" required="" type="password" name="passcode" id="passcode" autocomplete="new-password" onkeypress="regCapsLock(event)" value="<?php if (!empty($_POST['passcode'])) {
echo $_POST['passcode'];
}?>">
				<em class="form-text">Not your password. <span id="passcode-help" style="display:none">To request a passcode, <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contact'] == 'y') {?><a href="tiki-contact.php"><?php }?>
					contact the system administrator<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contact'] == 'y') {?></a><?php }?>.</span>
				</em>
			</div>
		</div>
	<?php }
}
if ($_smarty_tpl->tpl_vars['prefs']->value['useRegisterPasscode'] == 'y' && !empty($_smarty_tpl->tpl_vars['prefs']->value['registerPasscode']) && $_smarty_tpl->tpl_vars['prefs']->value['showRegisterPasscode'] == 'y') {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		$('span#passcode-help')
		.html("The passcode (to block robots from registration) is: <b><?php echo $_smarty_tpl->tpl_vars['prefs']->value['registerPasscode'];?>
</b>").css('display', 'inline');
	<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else { ?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		$('span#passcode-help').css('display', 'inline');
	<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
