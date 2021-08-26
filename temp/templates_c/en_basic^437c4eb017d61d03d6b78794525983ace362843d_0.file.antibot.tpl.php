<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:11:42
  from 'C:\xampp\htdocs\tikip4k\templates\antibot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264f9ed35af1_01433126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '437c4eb017d61d03d6b78794525983ace362843d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\antibot.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61264f9ed35af1_01433126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),));
?>

<?php if (empty($_smarty_tpl->tpl_vars['user']->value) || $_smarty_tpl->tpl_vars['user']->value == 'anonymous' || !empty($_smarty_tpl->tpl_vars['showantibot']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('labelclass', 'col-md-3');?>
	<?php $_smarty_tpl->_assignInScope('inputclass', 'col-md-9');?>
	<?php $_smarty_tpl->_assignInScope('captchaclass', 'col-md-4 offset-md-3 mb-3');?>
	<?php if ($_smarty_tpl->tpl_vars['form']->value === 'register') {?>
		<?php $_smarty_tpl->_assignInScope('labelclass', 'col-sm-4');?>
		<?php $_smarty_tpl->_assignInScope('inputclass', 'col-sm-8');?>
		<?php $_smarty_tpl->_assignInScope('captchaclass', 'col-md-4 offset-md-4 mb-3');?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['form']->value === 'moduleSubscribeNL') {?>
		<?php $_smarty_tpl->_assignInScope('labelclass', 'col-md-12');?>
		<?php $_smarty_tpl->_assignInScope('inputclass', 'col-md-12');?>
		<?php $_smarty_tpl->_assignInScope('captchaclass', 'col-md-12 mb-3');?>
	<?php }?>
	<div class="antibot">
		<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type == 'recaptcha' || $_smarty_tpl->tpl_vars['captchalib']->value->type == 'recaptcha20' || $_smarty_tpl->tpl_vars['captchalib']->value->type == 'recaptcha30') {?>
			<div class="form-group row clearfix">
				<div class="<?php echo $_smarty_tpl->tpl_vars['captchaclass']->value;?>
">
					<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->render();?>

				</div>
			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['captchalib']->value->type == 'questions') {?>
			<input type="hidden" name="captcha[id]" id="captchaId" value="<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->generate();?>
">
			<div class="form-group row">
				<label class="<?php echo $_smarty_tpl->tpl_vars['labelclass']->value;?>
 col-form-label">
					<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->render();?>

					<?php if ($_smarty_tpl->tpl_vars['showmandatory']->value == 'y' && $_smarty_tpl->tpl_vars['form']->value != 'register') {?> <strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }?>
				</label>
				<div class="<?php if (!empty($_smarty_tpl->tpl_vars['inputclass']->value)) {
echo $_smarty_tpl->tpl_vars['inputclass']->value;
} else { ?>col-md-8 col-sm-9<?php }?>">
					<input class="form-control" type="text" maxlength="8" name="captcha[input]" id="antibotcode">
				</div>
			</div>
		<?php } else { ?>
			
			<input type="hidden" name="captcha[id]" id="captchaId" value="<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->generate();?>
">
			<div class="form-group row">
				<label class="col-form-label <?php echo $_smarty_tpl->tpl_vars['labelclass']->value;?>
" for="antibotcode">Enter the code below<?php if ($_smarty_tpl->tpl_vars['showmandatory']->value == 'y' && $_smarty_tpl->tpl_vars['form']->value != 'register') {?> <strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }?></label>
				<div class="<?php if (!empty($_smarty_tpl->tpl_vars['inputclass']->value)) {
echo $_smarty_tpl->tpl_vars['inputclass']->value;
} else { ?>col-md-8 col-sm-9<?php }?>">
					<input class="form-control" type="text" maxlength="8" name="captcha[input]" id="antibotcode">
				</div>
			</div>
			<div class="clearfix visible-md-block"></div>
			<div class="form-group row">
				<div class="<?php echo $_smarty_tpl->tpl_vars['captchaclass']->value;?>
">
					<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type == 'default') {?>
						<img id="captchaImg" src="<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->getPath();?>
" alt="Anti-Bot verification code image" height="50">
					<?php } else { ?>
						
						<?php echo $_smarty_tpl->tpl_vars['captchalib']->value->render();?>

					<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type == 'default') {?>
					<div class="col-sm-3">
						<?php echo smarty_function_button(array('_id'=>'captchaRegenerate','_class'=>'','href'=>'#antibot','_text'=>"Try another code",'_icon_name'=>"refresh",'_onclick'=>"generateCaptcha();return false;"),$_smarty_tpl);?>

					</div>
				<?php }?>
			</div>
		<?php }?>
	</div>

	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array('rank'=>1));
$_block_repeat=true;
echo smarty_block_jq(array('rank'=>1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		function antibotVerification(element, rule) {
			if (!jqueryTiki.validate) return;

			var form = $(".antibot").parents('form');
			if (!form.data("validator")) {
				form.validate({});
			}
			element.rules( "add", rule);
		}
	<?php $_block_repeat=false;
echo smarty_block_jq(array('rank'=>1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type == 'recaptcha') {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array('rank'=>1));
$_block_repeat=true;
echo smarty_block_jq(array('rank'=>1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			var existCondition = setInterval(function() {
				if ($('#recaptcha_response_field').length) {
					clearInterval(existCondition);
					antibotVerification($("#recaptcha_response_field"), {required: true});
				}
			}, 100); // wait for captcha to load

		<?php $_block_repeat=false;
echo smarty_block_jq(array('rank'=>1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php } elseif ($_smarty_tpl->tpl_vars['captchalib']->value->type == 'recaptcha20' || $_smarty_tpl->tpl_vars['captchalib']->value->type == 'recaptcha30') {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array('rank'=>1));
$_block_repeat=true;
echo smarty_block_jq(array('rank'=>1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			var existCondition = setInterval(function() {
				if ($('#g-recaptcha-response').length) {
					clearInterval(existCondition);
					antibotVerification($("#g-recaptcha-response"), {required: true});
				}
			}, 100); // wait for captcha to load
		<?php $_block_repeat=false;
echo smarty_block_jq(array('rank'=>1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php if ($_smarty_tpl->tpl_vars['captchalib']->value->type == 'recaptcha30' && $_smarty_tpl->tpl_vars['form']->value == '') {?>
		
			<?php echo '<script'; ?>
>
				function genToken() {
					if($("#g-recaptcha-response").length){
						grecaptcha.ready(function() {
							grecaptcha.execute('<?php echo $_smarty_tpl->tpl_vars['prefs']->value['recaptcha_pubkey'];?>
', {action: 'login'})
									.then(function(token) {
										document.getElementById('g-recaptcha-response').value=token;
									});
						});
					}
				}
			<?php echo '</script'; ?>
>
		
		<?php }?>
	<?php } else { ?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array('rank'=>1));
$_block_repeat=true;
echo smarty_block_jq(array('rank'=>1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			antibotVerification($("#antibotcode"), {
				required: true
			});
		<?php $_block_repeat=false;
echo smarty_block_jq(array('rank'=>1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>

<?php }
}
}
