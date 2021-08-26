<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:11:42
  from 'C:\xampp\htdocs\tikip4k\templates\register-login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264f9e82fe35_00752877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '345b68a32ffc74e4219798c78b5f7199204ace3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\register-login.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61264f9e82fe35_00752877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),));
?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_autogenerate'] == 'y') {?>
	
<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_tpl'] && $_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_user_firstlogin'] != 'y') {?>
	<input type="text" name="name" id="name" class="form-control" >
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_hide_mandatory'] != 'y') {?><strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }
} else { ?>
	<div class="form-group row">
		<label class="col-sm-4 col-form-label" for="name"><?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email'] == 'y') {?>Email<?php } else { ?>Username<?php }?> <?php if ($_smarty_tpl->tpl_vars['trackerEditFormId']->value) {?><strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }?></label>
		<div class="col-sm-8">
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email'] == 'y') {?>
			<input type="email" name="name" id="name" value="<?php if (!empty($_POST['name'])) {
echo $_POST['name'];
}?>" class="form-control" >
			<div class="form-text">Use your email address as your log-in name</div>
		<?php } else { ?>
			<input type="text" name="name" id="name" value="<?php if (!empty($_POST['name'])) {
echo $_POST['name'];
}?>" class="form-control" >
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_validation'] == 'n') {?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['min_username_length'] > 1) {?>
					<div class="highlight"><em><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_username_length']));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_username_length']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Minimum %0 characters long<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_username_length']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></em></div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['lowercase_username'] == 'y') {?>
					<div class="highlight"><em>Lowercase only</em></div>
				<?php }?>
			<?php }?>
		<?php }?>
		</div>
	</div>
<?php }
}
}
