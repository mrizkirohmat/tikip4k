<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:11:42
  from 'C:\xampp\htdocs\tikip4k\templates\register-groupchoice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264f9eb7ca46_97439365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4984789a030c9dbbd52c6b9a1daedeb48a4938d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\register-groupchoice.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61264f9eb7ca46_97439365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),));
if ($_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['user_register_prettytracker_tpl'] && $_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_user_firstlogin'] != 'y') {?>
	<?php if ((isset($_smarty_tpl->tpl_vars['theChoiceGroup']->value))) {?>
		<input type="hidden" name="chosenGroup" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['theChoiceGroup']->value ));?>
">
	<?php } elseif ((isset($_smarty_tpl->tpl_vars['listgroups']->value))) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listgroups']->value, 'gr');
$_smarty_tpl->tpl_vars['gr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gr']->value) {
$_smarty_tpl->tpl_vars['gr']->do_else = false;
?>
			<?php if ($_smarty_tpl->tpl_vars['gr']->value['registrationChoice'] == 'y') {?>
				<div class="registergroup">
					<input type="radio" name="chosenGroup" id="gr_<?php echo $_smarty_tpl->tpl_vars['gr']->value['id'];?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gr']->value['groupName'] ));?>
">
					<label for="gr_<?php echo $_smarty_tpl->tpl_vars['gr']->value['id'];?>
">
						<?php if ($_smarty_tpl->tpl_vars['gr']->value['groupDesc']) {?>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gr']->value['groupDesc'] ));
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php } else { ?>
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gr']->value['groupName'] ));?>

						<?php }?>
					</label>
				</div>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }
} else { ?>
	
	<?php if ((isset($_smarty_tpl->tpl_vars['theChoiceGroup']->value))) {?>
		<input type="hidden" name="chosenGroup" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['theChoiceGroup']->value ));?>
">
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
$.getJSON('group_tracker_ajax.php', {chosenGroup:'<?php echo $_smarty_tpl->tpl_vars['theChoiceGroup']->value;?>
'}, function(data) {
	$("#registerTracker").html(data['res']).tikiModal();
});
		<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<div id="registerTracker"></div>
	<?php } elseif ((isset($_smarty_tpl->tpl_vars['listgroups']->value))) {?>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label">
				Group<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_must_choose_group'] == 'y') {?> <?php if ($_smarty_tpl->tpl_vars['trackerEditFormId']->value) {?><strong class='mandatory_star text-danger tips' title=":This field is mandatory">*</strong><?php }
}?>
			</label>
			<div class="col-sm-8">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listgroups']->value, 'gr');
$_smarty_tpl->tpl_vars['gr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gr']->value) {
$_smarty_tpl->tpl_vars['gr']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['gr']->value['registrationChoice'] == 'y') {?>
						<div class="registergroup">
							<input type="radio" name="chosenGroup" id="gr_<?php echo $_smarty_tpl->tpl_vars['gr']->value['id'];?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gr']->value['groupName'] ));?>
"
									<?php if (!empty($_POST['chosenGroup']) && $_POST['chosenGroup'] == call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gr']->value['groupName'] ))) {?>checked="checked"<?php }?>>
							<label for="gr_<?php echo $_smarty_tpl->tpl_vars['gr']->value['id'];?>
">
								<?php if ($_smarty_tpl->tpl_vars['gr']->value['groupDesc']) {?>
									<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gr']->value['groupDesc'] ));
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
								<?php } else { ?>
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gr']->value['groupName'] ));?>

								<?php }?>
							</label>
						</div>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
		<div id="registerTracker" class="col-sm-8 offset-sm-4">
			<?php if ($_smarty_tpl->tpl_vars['trackerEditFormId']->value) {?>
				<div class="col-sm-9 offset-sm-3">
					<div class="text-center alert alert-danger">
						<em class='mandatory_note'>Fields marked with an * are mandatory.</em>
					</div>
				</div>
			<?php }?>
		</div>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
$("input[name='chosenGroup']").change(function() {
	$("#registerTracker").tikiModal("Loading...");
	var gr = $("input[name='chosenGroup']:checked").val();
	$.getJSON('group_tracker_ajax.php',{chosenGroup:gr}, function(data) {
		if ($("#registerTracker").children().length === 0) {
			$(".trackerplugindesc").parents("tr").remove();
		}
		$("#registerTracker").html(data['res']).tikiModal();
		$("input[name^=captcha]").parents("tr").show();
		$("input[name=register]").prop("disabled", false);
		$("#registerTracker").parents("table:first").css({borderSpacing:"0 !important",borderCollapse:"collapse !important"});
		$("tr td:first", "#registerTracker").width($("#registerTracker").parents('table:first').find("td:first").width());
	});
})<?php if (!empty($_POST['chosenGroup'])) {?>.change()<?php }?>;
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_must_choose_group'] == 'y') {?>
$("input[name^=captcha]").parents("tr").hide();
$("input[name=register]").prop("disabled", true);
<?php }?>
		<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['userTracker'] == 'y') {?>
		<input type="hidden" name="chosenGroup" value="Registered">
	<?php }
}
}
}
