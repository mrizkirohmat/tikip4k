<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:04:12
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-admin_modules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61263fcc754614_28081431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95514e58f85940d51daecee61d6f5b9a95ee8000' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-admin_modules.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin_modules_form.tpl' => 1,
  ),
),false)) {
function content_61263fcc754614_28081431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tabset.php','function'=>'smarty_block_tabset',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tab.php','function'=>'smarty_block_tab',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.actions.php','function'=>'smarty_block_actions',),9=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.norecords.php','function'=>'smarty_function_norecords',),10=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),11=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.pagination_links.php','function'=>'smarty_block_pagination_links',),12=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.popup.php','function'=>'smarty_function_popup',),13=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),14=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.textarea.php','function'=>'smarty_block_textarea',),15=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.listfilter.php','function'=>'smarty_function_listfilter',),));
?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"Modules",'admpage'=>"module"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"Modules",'admpage'=>"module"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Admin Modules<?php $_block_repeat=false;
echo smarty_block_title(array('help'=>"Modules",'admpage'=>"module"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><div class="t_navbar mb-4"><form action="tiki-admin_modules.php" method="post" style="display: inline"><?php echo smarty_function_ticket(array(),$_smarty_tpl);?>
<button type="submit" name="clear_cache" value="1" class="btn btn-primary"><?php echo smarty_function_icon(array('name'=>"trash"),$_smarty_tpl);?>
 Clear Cache</button></form><?php if (empty($_REQUEST['show_hidden_modules'])) {
echo smarty_function_button(array('show_hidden_modules'=>"y",'_icon_name'=>"ok",'_text'=>"Show hidden modules"),$_smarty_tpl);
} else {
echo smarty_function_button(array('show_hidden_modules'=>'','_icon_name'=>"disable",'_text'=>"Hide hidden modules"),$_smarty_tpl);
}
echo smarty_function_button(array('_text'=>"Save",'_type'=>"primary",'_icon_name'=>"floppy",'_id'=>"save_modules",'_ajax'=>"n"),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu']->value == 'y') {
echo smarty_function_button(array('href'=>"tiki-admin_menus.php",'_icon_name'=>"menu",'_type'=>"link",'_text'=>"Admin Menus"),$_smarty_tpl);
}
echo smarty_function_button(array('href'=>"./",'_icon_name'=>"disable",'_type'=>"link",'_text'=>"Exit Modules"),$_smarty_tpl);?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['missing_params']->value)) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Modules Parameters"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Modules Parameters"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>The following required parameters are missing:<br/><?php
$__section_ix_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['missing_params']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_0_total = $__section_ix_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_0_total !== 0) {
for ($__section_ix_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_0_iteration <= $__section_ix_0_total; $__section_ix_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_ix']->value['last'] = ($__section_ix_0_iteration === $__section_ix_0_total);
echo $_smarty_tpl->tpl_vars['missing_params']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)];
if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['last'] : null)) {?>,&nbsp;<?php }
}
}
$_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Modules Parameters"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"Modules",'icon'=>"star"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Modules",'icon'=>"star"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><ul><li>Drag the modules around to re-order then click save when ready</li><li>Double click them to edit</li><li>Modules with "position: absolute" in their style can be dragged in to position</li><li>New modules can be dragged from the "All Modules" tab</li></ul><p><strong>Note:</strong> Links and buttons in modules, apart from the Application Menu, have been deliberately disabled on this page to make drag and drop more reliable. Click here to return <a href="./" class="alert-link">HOME</a><br><strong><em>More info here</em></strong> <?php echo smarty_function_icon(array('name'=>"help",'href'=>"http://dev.tiki.org/Modules+Revamp",'class'=>"alert-link"),$_smarty_tpl);?>
</p><?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Modules",'icon'=>"star"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array());
$_block_repeat=true;
echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Assigned modules"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Assigned modules"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs'] != 'y') {?><legend class="heading"><span>Assign/Edit modules</span></legend><?php }?><h2>Assigned Modules</h2><div class="mb-4"><?php echo smarty_function_button(array('edit_assign'=>0,'cookietab'=>2,'_auto_args'=>"edit_assign,cookietab",'_text'=>"Add module"),$_smarty_tpl);?>
</div><div id="assigned_modules"><?php if ($_smarty_tpl->tpl_vars['userHasAssignedModules']->value) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>You will need to go <a href="tiki-user_assigned_modules.php">here</a> to reorder or move modules in the left or right columns since you have created a custom order for these. Use the table below to assign previously unassigned modules, or reorder and move modules where there is no custom order created by the user.<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array());
$_block_repeat=true;
echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module_zone_list']->value, 'zone_info', false, 'zone_initial');
$_smarty_tpl->tpl_vars['zone_info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['zone_initial']->value => $_smarty_tpl->tpl_vars['zone_info']->value) {
$_smarty_tpl->tpl_vars['zone_info']->do_else = false;
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>smarty_modifier_capitalize($_smarty_tpl->tpl_vars['zone_info']->value['name'])));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>smarty_modifier_capitalize($_smarty_tpl->tpl_vars['zone_info']->value['name'])), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><div id="<?php echo $_smarty_tpl->tpl_vars['zone_info']->value['id'];?>
_modules" class="<?php if ($_smarty_tpl->tpl_vars['js']->value) {?>table-responsive<?php }?>"><div><table class="table table-striped table-hover" id="assigned_zone_<?php echo $_smarty_tpl->tpl_vars['zone_initial']->value;?>
"><tr><th>Name</th><th>Order</th><th>Cache</th><th>Rows</th><th>Parameters</th><th>Groups</th><th></th></tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assigned_modules']->value[$_smarty_tpl->tpl_vars['zone_initial']->value], 'module', true);
$_smarty_tpl->tpl_vars['module']->iteration = 0;
$_smarty_tpl->tpl_vars['module']->index = -1;
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
$_smarty_tpl->tpl_vars['module']->iteration++;
$_smarty_tpl->tpl_vars['module']->index++;
$_smarty_tpl->tpl_vars['module']->first = !$_smarty_tpl->tpl_vars['module']->index;
$_smarty_tpl->tpl_vars['module']->last = $_smarty_tpl->tpl_vars['module']->iteration === $_smarty_tpl->tpl_vars['module']->total;
$__foreach_module_1_saved = $_smarty_tpl->tpl_vars['module'];
?><tr><td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['name'] ));?>
</td><td><?php echo $_smarty_tpl->tpl_vars['module']->value['ord'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['module']->value['cache_time'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['module']->value['rows'];?>
</td><td class="small"><?php echo $_smarty_tpl->tpl_vars['module']->value['params_presentable'];?>
</td><td class="small"><?php echo $_smarty_tpl->tpl_vars['module']->value['module_groups'];?>
</td><td><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('actions', array());
$_block_repeat=true;
echo smarty_block_actions(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><action><form href="tiki-admin_modules.php" method="post"><?php echo smarty_function_ticket(array(),$_smarty_tpl);?>
<button type="submit" name="modup" value="<?php echo $_smarty_tpl->tpl_vars['module']->value['moduleId'];?>
"class="btn btn-link link-list"<?php if ($_smarty_tpl->tpl_vars['module']->first) {?> disabled="disabled"<?php }?>><?php echo smarty_function_icon(array('name'=>"up"),$_smarty_tpl);?>
 Move up</button></form></action><action><form href="tiki-admin_modules.php" method="post"><?php echo smarty_function_ticket(array(),$_smarty_tpl);?>
<button type="submit" name="moddown" value="<?php echo $_smarty_tpl->tpl_vars['module']->value['moduleId'];?>
"class="btn btn-link link-list"<?php if ($_smarty_tpl->tpl_vars['module']->last) {?> disabled="disabled" class="disabled"<?php }?>><?php echo smarty_function_icon(array('name'=>"down"),$_smarty_tpl);?>
 Move down</button></form></action><action><a href="tiki-admin_modules.php?edit_assign=<?php echo $_smarty_tpl->tpl_vars['module']->value['moduleId'];?>
&cookietab=2#content_admin_modules1-2"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a></action><action><form href="tiki-admin_modules.php" method="post"><?php echo smarty_function_ticket(array(),$_smarty_tpl);?>
<button type="submit" name="unassign" value="<?php echo $_smarty_tpl->tpl_vars['module']->value['moduleId'];?>
"class="btn btn-link link-list"><?php echo smarty_function_icon(array('name'=>"remove"),$_smarty_tpl);?>
 Unassign</button></form></action>
												<?php $_block_repeat=false;
echo smarty_block_actions(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
											</td>
										</tr>
									<?php
$_smarty_tpl->tpl_vars['module'] = $__foreach_module_1_saved;
}
if ($_smarty_tpl->tpl_vars['module']->do_else) {
?>
										<?php echo smarty_function_norecords(array('_colspan'=>7),$_smarty_tpl);?>

									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</table>
							</div>
						</div>
					<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>smarty_modifier_capitalize($_smarty_tpl->tpl_vars['zone_info']->value['name'])), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php $_block_repeat=false;
echo smarty_block_tabset(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		</div>
		<form method="post" action="#">
			<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

			<input id="module-order" type="hidden" name="module-order" value="">
		</form>
	<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Assigned modules"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php if ((isset($_REQUEST['edit_assign'])) || $_smarty_tpl->tpl_vars['preview']->value == "y") {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Edit module"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Edit module"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<a id="assign"></a>
			<?php if ($_smarty_tpl->tpl_vars['assign_name']->value == '') {?>
				<h2>Assign new module</h2>
			<?php } else { ?>
				<h2>Edit this assigned module: <?php echo $_smarty_tpl->tpl_vars['assign_name']->value;?>
</h2>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['preview']->value == 'y') {?>
				<h3>Preview</h3>
				<?php echo $_smarty_tpl->tpl_vars['preview_data']->value;?>

			<?php }?>
			<form method="post" action="tiki-admin_modules.php<?php if (empty($_smarty_tpl->tpl_vars['assign_name']->value)) {?>?cookietab=2#assign<?php }?>">
				
				<?php if (!empty($_smarty_tpl->tpl_vars['info']->value['moduleId'])) {?>
					<input type="hidden" name="moduleId" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['moduleId'];?>
">
				<?php } elseif (!empty($_smarty_tpl->tpl_vars['moduleId']->value)) {?>
					<input type="hidden" name="moduleId" value="<?php echo $_smarty_tpl->tpl_vars['moduleId']->value;?>
">
				<?php }?>
				<fieldset>
						
						<?php $_smarty_tpl->_subTemplateRender('file:admin_modules_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php if (empty($_smarty_tpl->tpl_vars['assign_name']->value)) {?>
						<div class="input_submit_container">
							<input type="submit" class="btn btn-primary btn-sm" name="preview" value="Module Options">
						</div>
					<?php } else { ?>
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$("#module_params").tabs();<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php }?>
				</fieldset>
			</form>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Edit module"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>

	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Custom Modules"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Custom Modules"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs'] != 'y') {?>
			<legend class="heading">
				<a href="#usertheme" name="usertheme"><span>Custom Modules</span></a>
			</legend>
		<?php }?>
		<h2>Custom Modules</h2>
		<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value) {?>table-responsive<?php }?>">
			<table class="table">
				<tr>
					<th>Name</th>
					<th>Title</th>
					<th></th>
				</tr>

				<?php
$__section_user_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['user_modules']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_user_1_total = $__section_user_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_user'] = new Smarty_Variable(array());
if ($__section_user_1_total !== 0) {
for ($__section_user_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] = 0; $__section_user_1_iteration <= $__section_user_1_total; $__section_user_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']++){
?>
					<tr>
						<td class="text"><a class="tips" href="tiki-admin_modules.php?um_edit=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_modules']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['name'],'url' ));?>
&amp;cookietab=2#editcreate" title="Edit"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_modules']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['name'] ));?>
</a></td>
						<td class="text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_modules']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['title'] ));?>
</td>
						<td class="action">
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('actions', array());
$_block_repeat=true;
echo smarty_block_actions(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
								<action><a href="tiki-admin_modules.php?um_edit=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_modules']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['name'],'url' ));?>
&amp;cookietab=2#editcreate"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a></action><action><a href="tiki-admin_modules.php?edit_assign=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_modules']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['name'],'url' ));?>
&amp;cookietab=2#assign"><?php echo smarty_function_icon(array('name'=>'ok','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Assign"),$_smarty_tpl);?>
</a></action><action><form action="tiki-admin_modules.php?cookietab=2" method="post"><?php echo smarty_function_ticket(array(),$_smarty_tpl);?>
<button type="submit" name="um_remove" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_modules']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['name'] ));?>
"class="btn btn-link link-list"onclick="confirmSimple(event, 'Delete custom module?')"><?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
 Delete</button></form></action>
							<?php $_block_repeat=false;
echo smarty_block_actions(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						</td>
					</tr>
				<?php }} else {
 ?>
				<?php echo smarty_function_norecords(array('_colspan'=>3),$_smarty_tpl);?>

				<?php
}
?>
			</table>
		</div>
		<br>
		<?php if ($_smarty_tpl->tpl_vars['um_name']->value == '') {?>
			<h2>Create new custom module</h2>
		<?php } else { ?>
			<h2>Edit this custom module <?php echo $_smarty_tpl->tpl_vars['um_name']->value;?>
</h2>
		<?php }?>
		<div class="col-sm-10 offset-sm-1">
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				Create your new custom module below. Make sure to preview first and make sure all is OK before <a href="#assign" class="alert-link">assigning it</a>. Using HTML, you will be fine. However, if you improperly use wiki syntax or Smarty code, you could lock yourself out of the site.
			<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		</div>

		<form name='editusr' method="post" action="tiki-admin_modules.php">
			<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

			<div class="form-group row">
				<label class="col-sm-4 col-form-label">Name</label>
				<div class="col-sm-6">
					<input type="text" id="um_name" name="um_name" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['um_name']->value ));?>
" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">Title</label>
				<div class="col-sm-6">
					<input type="text" id="um_title" name="um_title" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['um_title']->value ));?>
" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-4 col-form-label">Parse using</label>
				<div class="col-sm-6">
					<select name="um_parse" id="um_parse" class="form-control mb-3">
						<option value=""<?php if ($_smarty_tpl->tpl_vars['um_parse']->value == '') {?> selected="selected"<?php }?>>None</option>
						<option value="y"<?php if ($_smarty_tpl->tpl_vars['um_parse']->value == "y") {?> selected="selected"<?php }?>>Wiki Markup</option>
					</select>
				</div>
			</div>
			<h3>Objects that can be included</h3>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_polls'] == "y") {?>
				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Available polls</label>
					<div class="col-sm-6">
						<select name="polls" id='list_polls' class="form-control">
							<option value="{poll}">--Random active poll--</option>
							<option value="{poll id=current}">--Random current poll--</option>
							<?php
$__section_ix_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['polls']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_2_total = $__section_ix_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_2_total !== 0) {
for ($__section_ix_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_2_iteration <= $__section_ix_2_total; $__section_ix_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_ix']->value['last'] = ($__section_ix_2_iteration === $__section_ix_2_total);
?>
								<option value="{poll pollId=<?php echo $_smarty_tpl->tpl_vars['polls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['pollId'];?>
}"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['polls']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['title'] ));?>
</option>
							<?php
}
}
?>
						</select>
					</div>
					<div class="col-sm-2">
						<a class="tips" href="javascript:setUserModuleFromCombo('list_galleries', 'um_data');" title=":Use gallery"><?php echo smarty_function_icon(array('name'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a>
						<a title="Help" <?php echo smarty_function_popup(array('text'=>"Params: id= showgalleryname=1 hideimgname=1 hidelink=1",'width'=>100,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['galleries']->value) {?>
				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Random image from</label>
					<div class="col-sm-6">
						<select name="galleries" id='list_galleries' class="form-control">
							<option value="{gallery id=-1}">All galleries</option>
							<?php
$__section_ix_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['galleries']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_3_total = $__section_ix_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_3_total !== 0) {
for ($__section_ix_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_3_iteration <= $__section_ix_3_total; $__section_ix_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_ix']->value['last'] = ($__section_ix_3_iteration === $__section_ix_3_total);
?>
								<option value="{gallery id=<?php echo $_smarty_tpl->tpl_vars['galleries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['galleryId'];?>
}"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['galleries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'] ));?>
</option>
							<?php
}
}
?>
						</select>
					</div>
					<div class="col-sm-2">
						<a class="tips" href="javascript:setUserModuleFromCombo('list_galleries', 'um_data');" title=":Use gallery"><?php echo smarty_function_icon(array('name'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a>
						<a title="Help" <?php echo smarty_function_popup(array('text'=>"Params: id= showgalleryname=1 hideimgname=1 hidelink=1",'width'=>100,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['contents']->value) {?>
				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Dynamic content blocks</label>
					<div class="col-sm-6">
						<select name="contents" id='list_contents' class="form-control">
							<?php
$__section_ix_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['contents']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_4_total = $__section_ix_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_4_total !== 0) {
for ($__section_ix_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_4_iteration <= $__section_ix_4_total; $__section_ix_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_ix']->value['last'] = ($__section_ix_4_iteration === $__section_ix_4_total);
?>
								<option value="{content id=<?php echo $_smarty_tpl->tpl_vars['contents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['contentId'];?>
}"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['contents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['description'],20,"...",true);?>
</option>
							<?php
}
}
?>
						</select>
					</div>
					<div class="col-sm-2">
						<a class="tips" href="javascript:setUserModuleFromCombo('list_contents', 'um_data');" title=":Use dynamic content"><?php echo smarty_function_icon(array('name'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a>>
						<a title="Help" <?php echo smarty_function_popup(array('text'=>"Params: id=",'width'=>100,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['rsss']->value) {?>
				<div class="form-group row">
					<label class="col-sm-4 col-form-label">External feeds</label>
					<div class="col-sm-6">
						<select name="rsss" id='list_rsss' class="form-control">
							<?php
$__section_ix_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['rsss']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_5_total = $__section_ix_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_5_total !== 0) {
for ($__section_ix_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_5_iteration <= $__section_ix_5_total; $__section_ix_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_ix']->value['last'] = ($__section_ix_5_iteration === $__section_ix_5_total);
?>
								<option value="{rss id=<?php echo $_smarty_tpl->tpl_vars['rsss']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['rssId'];?>
}"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rsss']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'] ));?>
</option>
							<?php
}
}
?>
						</select>
					</div>
					<div class="col-sm-2">
						<a class="tips" href="javascript:setUserModuleFromCombo('list_rsss', 'um_data');" title=":Use RSS module"><?php echo smarty_function_icon(array('name'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a>
						<a title="Help" <?php echo smarty_function_popup(array('text'=>"Params: id= max= skip=x,y ",'width'=>100,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['banners']->value) {?>
				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Banner zones</label>
					<div class="col-sm-6">
						<select name="banners" id='list_banners' class="form-control">
							<?php
$__section_ix_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['banners']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_6_total = $__section_ix_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_6_total !== 0) {
for ($__section_ix_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_6_iteration <= $__section_ix_6_total; $__section_ix_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_ix']->value['last'] = ($__section_ix_6_iteration === $__section_ix_6_total);
?>
								<option value="{banner zone=<?php echo $_smarty_tpl->tpl_vars['banners']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['zone'];?>
}"><?php echo $_smarty_tpl->tpl_vars['banners']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['zone'];?>
</option>
							<?php
}
}
?>
						</select>
					</div>
					<div class="col-sm-2">
						<a class="tips" href="javascript:setUserModuleFromCombo('list_banners', 'um_data');" title=":Use banner zone"><?php echo smarty_function_icon(array('name'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a>
						<a title="Help" <?php echo smarty_function_popup(array('text'=>"Params: zone= target=_blank|_self|",'width'=>100,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['wikistructures']->value) {?>
				<div class="form-group row">
					<label class="col-sm-4 col-form-label">Wiki Structures</label>
					<div class="col-sm-6">
						<select name="structures" id='list_wikistructures' class="form-control">
							<?php
$__section_ix_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['wikistructures']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_7_total = $__section_ix_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_7_total !== 0) {
for ($__section_ix_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_7_iteration <= $__section_ix_7_total; $__section_ix_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_ix']->value['last'] = ($__section_ix_7_iteration === $__section_ix_7_total);
?>
								<option value="{wikistructure id=<?php echo $_smarty_tpl->tpl_vars['wikistructures']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['page_ref_id'];?>
}"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['wikistructures']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['pageName'] ));?>
</option>
							<?php
}
}
?>
						</select>
					</div>
					<div class="col-sm-2">
						<a class="tips" href="javascript:setUserModuleFromCombo('list_wikistructures', 'um_data');" title=":Use wiki structure"><?php echo smarty_function_icon(array('name'=>'add','alt'=>"Use"),$_smarty_tpl);?>
</a>
						<a title="Help" <?php echo smarty_function_popup(array('text'=>"Params: id=",'width'=>100,'center'=>true),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
					</div>
				</div>
			<?php }?>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['maximum']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<div class="col-sm-10 offset-sm-1">
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_cssmenus'] == 'y') {?>
					To use a <a target="tikihelp" href="http://users.tpg.com.au/j_birch/plugins/superfish/" class="alert-link">CSS (Superfish) menu</a>, use one of these syntaxes:
					<ul>
						<li>{menu id=X type=vert}</li>
						<li>{menu id=X type=horiz}</li>
					</ul>
				<?php }?>
				To use a default Tiki menu:
					<ul>
						<li>{menu id=X css=n}</li>
					</ul>
				<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Data</label>
				<div class="col-sm-9">
					<a id="editcreate"></a>
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('textarea', array('name'=>'um_data','id'=>'um_data','_class'=>'form-control','_toolbars'=>'y','_previewConfirmExit'=>'n','_wysiwyg'=>"n"));
$_block_repeat=true;
echo smarty_block_textarea(array('name'=>'um_data','id'=>'um_data','_class'=>'form-control','_toolbars'=>'y','_previewConfirmExit'=>'n','_wysiwyg'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['um_data']->value;
$_block_repeat=false;
echo smarty_block_textarea(array('name'=>'um_data','id'=>'um_data','_class'=>'form-control','_toolbars'=>'y','_previewConfirmExit'=>'n','_wysiwyg'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label"></label>
				<div class="col-sm-9">
					<input type="submit" class="btn btn-secondary" name="um_update" value="<?php if (empty($_smarty_tpl->tpl_vars['um_name']->value)) {?>Create<?php } else { ?>Save<?php }?>" onclick="$(window).off('beforeunload');return true;">
				</div>
			</div>
		</form>
	<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Custom Modules"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"All Modules"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"All Modules"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<h2>All Modules</h2>
		<form method="post" action="tiki-admin_modules.php" class="">
			<div style="height:400px;overflow:auto;">
				<div class="was-navbar">
					<?php echo smarty_function_listfilter(array('selectors'=>'#module_list li'),$_smarty_tpl);?>

					<div class="form-check mb-3">
						<input type="checkbox" class="form-check-input" name="module_list_show_all" id="module_list_show_all"<?php if ($_smarty_tpl->tpl_vars['module_list_show_all']->value) {?> checked="checked"<?php }?>>
						<label for="module_list_show_all" class="form-check-lable">Show all modules</label>
					</div>
				</div>
				<ul id="module_list">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_modules_info']->value, 'info', false, 'name');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
						<li class="<?php if ($_smarty_tpl->tpl_vars['info']->value['enabled']) {?>enabled<?php } else { ?>disabled<?php }?> clearfix">
							<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
							<div class="q1 tips"
									title="<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
 &lt;em&gt;(<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
)&lt;/em&gt;|<?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>

									<?php if (!$_smarty_tpl->tpl_vars['info']->value['enabled']) {?>&lt;br /&gt;&lt;small&gt;&lt;em&gt;(Requires <?php echo implode(' &amp; ',$_smarty_tpl->tpl_vars['info']->value['prefs']);?>
)&lt;/em&gt;&lt;/small&gt;<?php }?>">
								<?php echo smarty_function_icon(array('name'=>"module"),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
</strong> <em><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</em>
							</div>
							<div class="description q23">
								<?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>

							</div>
						</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
		</form>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
$("#module_list_show_all").click(function(){
	$("#module_list li.disabled").toggle($(this).prop("checked"));
});
		<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"All Modules"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_block_repeat=false;
echo smarty_block_tabset(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php }
}
