<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:04:28
  from 'C:\xampp\htdocs\tikip4k\templates\admin_modules_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61263fdcec5a41_97286199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1525d8d301663684c5a40aff2853d3c596526719' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\admin_modules_form.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61263fdcec5a41_97286199 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.help.php','function'=>'smarty_function_help',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.autocomplete.php','function'=>'smarty_function_autocomplete',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.popup.php','function'=>'smarty_function_popup',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.self_link.php','function'=>'smarty_block_self_link',),));
?>


<?php if (!empty($_smarty_tpl->tpl_vars['assign_name']->value)) {?>
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

<?php }?>
<div class="module_selector form-group row">
	<label for="assign_name">Module Name</label>
	<select id="assign_name" name="assign_name" class="form-control">
		<option value=""></option>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_modules_info']->value, 'info', false, 'name');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
			<?php if ($_smarty_tpl->tpl_vars['info']->value['enabled']) {?>
			<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
" <?php if ($_smarty_tpl->tpl_vars['assign_name']->value == $_smarty_tpl->tpl_vars['name']->value || $_smarty_tpl->tpl_vars['assign_selected']->value == $_smarty_tpl->tpl_vars['name']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
</option>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</select>
	<?php if ((isset($_smarty_tpl->tpl_vars['assign_info']->value))) {?><div class="description form-text"><?php echo $_smarty_tpl->tpl_vars['assign_info']->value['description'];
if ((isset($_smarty_tpl->tpl_vars['assign_info']->value['documentation']))) {?> <?php echo smarty_function_help(array('url'=>$_smarty_tpl->tpl_vars['assign_info']->value['documentation']),$_smarty_tpl);
}?></div><?php }?>
</div>
<div id="module_params">
	<?php if (!empty($_smarty_tpl->tpl_vars['assign_name']->value)) {?>
		<?php if ((isset($_smarty_tpl->tpl_vars['assign_info']->value['type'])) && $_smarty_tpl->tpl_vars['assign_info']->value['type'] == 'function') {?>
			<ul>
				<li><a href="#param_section_basic">Basic</a></li>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assign_info']->value['params'], 'params', false, 'sect');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
					<li><a href="#param_section_<?php echo $_smarty_tpl->tpl_vars['sect']->value;?>
"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['sect']->value);
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a></li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		<?php } else { ?>
		<?php }?>
		<fieldset id="param_section_basic">
			<div class="clearfix form-group row">
				<label for="assign_position">Position</label>
				<select id="assign_position" name="assign_position" class="form-control">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module_zone_list']->value, 'zone', false, 'code');
$_smarty_tpl->tpl_vars['zone']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['zone']->value) {
$_smarty_tpl->tpl_vars['zone']->do_else = false;
?>
						<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['code']->value ));?>
"<?php if ($_smarty_tpl->tpl_vars['code']->value == $_smarty_tpl->tpl_vars['assign_position']->value) {?> selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['zone']->value['name'] ));?>
</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>

			<div class="clearfix form-group row">
				<label for="assign_order">Order</label>
				<select id="assign_order" name="assign_order" class="form-control">
					<?php
$__section_ix_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['orders']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_0_total = $__section_ix_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_0_total !== 0) {
for ($__section_ix_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_0_iteration <= $__section_ix_0_total; $__section_ix_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
						<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)] ));?>
" <?php if ($_smarty_tpl->tpl_vars['assign_order']->value == $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['orders']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)];?>
</option>
					<?php
}
}
?>
				</select>
			</div>

			<div class="clearfix form-group row">
				<label for="assign_cache">Cache Time (secs)</label>
				<input type="text" id="assign_cache" name="assign_cache" class="form-control" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['assign_cache']->value ));?>
">
			</div>
			<?php if (!(isset($_smarty_tpl->tpl_vars['assign_info']->value['type'])) || $_smarty_tpl->tpl_vars['assign_info']->value['type'] != 'function') {?>
				<div class="clearfix form-group row">
					<label for="assign_rows">Rows</label>
					<input type="text" id="assign_rows" name="assign_rows" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['assign_rows']->value ));?>
" class="form-control">
				</div>
			<?php }?>
			<div class="admin2cols adminoptionbox clearfix">
				<label for="groups">Groups</label>
				<select multiple="multiple" id="groups" name="groups[]" class="form-control mb-4">
					<?php
$__section_ix_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['groups']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_1_total = $__section_ix_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_1_total !== 0) {
for ($__section_ix_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_1_iteration <= $__section_ix_1_total; $__section_ix_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
						<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['groupName'] ));?>
" <?php if ($_smarty_tpl->tpl_vars['groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['selected'] == 'y') {?>selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['groupName'] ));?>
</option>
					<?php
}
}
?>
				</select>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen'] != 'y') {?>
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Use Ctrl+Click to select multiple options<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['modallgroups'] == 'y') {?>
					<div class="card"><div class="card-body">
						<?php echo smarty_function_icon(array('name'=>"information",'style'=>"vertical-align:middle;float:left"),$_smarty_tpl);?>
 The <a class="rbox-link" href="tiki-admin.php?page=module">Display Modules to All Groups</a> setting will override your selection of specific groups.
					</div></div>
					<br>
				<?php }?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_assigned_modules'] == 'y') {?>
				<div class="admin2cols adminoptionbox clearfix">
					Visibility
						<select name="assign_type">
							<option value="D" <?php if ($_smarty_tpl->tpl_vars['assign_type']->value == 'D') {?>selected="selected"<?php }?>>
								Displayed now for all eligible users even with personal assigned modules
							</option>
							<option value="d" <?php if ($_smarty_tpl->tpl_vars['assign_type']->value == 'd') {?>selected="selected"<?php }?>>
								Displayed for the eligible users with no personal assigned modules
							</option>
							<option value="P" <?php if ($_smarty_tpl->tpl_vars['assign_type']->value == 'P') {?>selected="selected"<?php }?>>
								Displayed now, can't be unassigned
							</option>
							<option value="h" <?php if ($_smarty_tpl->tpl_vars['assign_type']->value == 'h') {?>selected="selected"<?php }?>>
								Not displayed until a user chooses it
							</option>
						</select>
						<div class="card"><div class="card-body">
							<?php echo smarty_function_icon(array('name'=>"information",'style'=>"vertical-align:middle;float:left;"),$_smarty_tpl);?>
Because <a class="rbox-link" href="tiki-admin.php?page=module">Users can Configure Modules</a>, select either &quot;Displayed now for all eligible users even with personal assigned modules&quot; or &quot;Displayed now, can't be unassigned&quot; to make sure users will notice any newly assigned modules.
						</div></div>
					</div>
				<?php }?>
			</fieldset>
			<?php if ((isset($_smarty_tpl->tpl_vars['assign_info']->value['type'])) && $_smarty_tpl->tpl_vars['assign_info']->value['type'] == 'function') {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assign_info']->value['params'], 'params', false, 'sect');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
					<fieldset id="param_section_<?php echo $_smarty_tpl->tpl_vars['sect']->value;?>
">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value, 'param', false, 'name');
$_smarty_tpl->tpl_vars['param']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->do_else = false;
?>
							<div class="admin2cols adminoptionbox clearfix">
								<label for="assign_params[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
]"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['param']->value['name'] ));
if ($_smarty_tpl->tpl_vars['param']->value['required']) {?> <span class="attention">(required)</span><?php }?></label>
								<?php if ((isset($_smarty_tpl->tpl_vars['name']->value)) && $_smarty_tpl->tpl_vars['name']->value == 'type' && $_smarty_tpl->tpl_vars['assign_info']->value['name'] == 'Menu') {?>
									<select id="assign_params[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
]" name="assign_params[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
]" class="form-control">
										<option value="horiz" <?php if ($_smarty_tpl->tpl_vars['param']->value['value'] == 'horiz') {?>selected="selected"<?php }?>>horiz</option>
										<option value="vert" <?php if ($_smarty_tpl->tpl_vars['param']->value['value'] == 'vert') {?>selected="selected"<?php }?>>vert</option>
									</select>
								<?php } else { ?>
									<input type="text" id="assign_params[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
]" name="assign_params[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['param']->value['value'] ));?>
"<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['filter'])) {?> class="<?php echo $_smarty_tpl->tpl_vars['param']->value['filter'];?>
 form-control"<?php } else { ?> class="<?php echo $_smarty_tpl->tpl_vars['param']->value['filter'];?>
 form-control"<?php }?>>
								<?php }?>
								<div class="description mb-3">
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['param']->value['description'] ));?>

									<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['default'])) {?> - Default: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['param']->value['default'] ));
}?>
								</div>
							</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</fieldset>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php echo smarty_function_autocomplete(array('element'=>".pagename",'type'=>"pagename",'options'=>"multiple: true, multipleSeparator:';'"),$_smarty_tpl);?>

			<?php } else { ?>
				<div class="admin2cols adminoptionbox clearfix">
					<a title="Parameters" <?php echo smarty_function_popup(array('text'=>"Params: specific params to the module and/or general params ('lang', 'flip', 'title', 'decorations', 'section', 'overflow', 'page', 'nobox', 'bgcolor', 'color', 'theme', 'notitle', 'nopage'). Separator between params:'&amp;'. E.g. maxlen=15&amp;nonums=y.",'width'=>200,'center'=>true),$_smarty_tpl);?>
>
						<label for="assign_params">Parameters</label>
					</a>
					<textarea id="assign_params" name="assign_params" rows="1" cols="60" class="form-control"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['assign_params']->value ));?>
</textarea>
					<?php echo smarty_function_help(array('url'=>"Module+Parameters",'desc'=>"Enter the parameters in URL format, e.g. 'nobox=y&class=rbox-data'"),$_smarty_tpl);?>

					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('um_edit'=>$_smarty_tpl->tpl_vars['assign_name']->value,'cookietab'=>"2",'_anchor'=>"editcreate"));
$_block_repeat=true;
echo smarty_block_self_link(array('um_edit'=>$_smarty_tpl->tpl_vars['assign_name']->value,'cookietab'=>"2",'_anchor'=>"editcreate"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Edit custom module <?php echo smarty_function_icon(array('name'=>"next"),$_smarty_tpl);
$_block_repeat=false;
echo smarty_block_self_link(array('um_edit'=>$_smarty_tpl->tpl_vars['assign_name']->value,'cookietab'=>"2",'_anchor'=>"editcreate"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				</div>
			<?php }?>
		<div class="form-group row mx-0 d-flex flex-row-reverse">
			<input type="submit" class="btn btn-primary" name="assign" value="Assign" onclick="needToConfirm=false;">
			<input type="submit" class="btn btn-secondary mr-2" name="preview" value="Preview" onclick="needToConfirm=false;">
		</div>
	<?php }?>
</div>
<?php }
}
