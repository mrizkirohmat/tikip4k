<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:03:19
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-admin_menu_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61263f971eec49_51997852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b76b1174f837c5fd8e51f294a853622f9342df0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-admin_menu_options.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61263f971eec49_51997852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.bootstrap_modal.php','function'=>'smarty_function_bootstrap_modal',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tabset.php','function'=>'smarty_block_tabset',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tab.php','function'=>'smarty_block_tab',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.wiki.php','function'=>'smarty_block_wiki',),9=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),10=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),11=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.autocomplete.php','function'=>'smarty_function_autocomplete',),));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"Menus",'url'=>"tiki-admin_menu_options.php?menuId=".((string)$_smarty_tpl->tpl_vars['menuId']->value),'admpage'=>"general&amp;cookietab=3"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"Menus",'url'=>"tiki-admin_menu_options.php?menuId=".((string)$_smarty_tpl->tpl_vars['menuId']->value),'admpage'=>"general&amp;cookietab=3"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Menu: <?php echo $_smarty_tpl->tpl_vars['editable_menu_info']->value['name'];
$_block_repeat=false;
echo smarty_block_title(array('help'=>"Menus",'url'=>"tiki-admin_menu_options.php?menuId=".((string)$_smarty_tpl->tpl_vars['menuId']->value),'admpage'=>"general&amp;cookietab=3"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="t_navbar mb-4">
	<a class="btn btn-link" href="tiki-admin_menus.php">
		<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 List Menus
	</a>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu']->value == 'y') {?>
		<a class="btn btn-primary" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'edit_option','menuId'=>$_smarty_tpl->tpl_vars['menuId']->value),$_smarty_tpl);?>
">
			<?php echo smarty_function_icon(array('name'=>"create"),$_smarty_tpl);?>
 Create menu option
		</a>
		<a class="btn btn-primary" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'edit','menuId'=>$_smarty_tpl->tpl_vars['menuId']->value),$_smarty_tpl);?>
">
			<?php echo smarty_function_icon(array('name'=>"edit"),$_smarty_tpl);?>
 Edit This Menu
		</a>
		<a class="btn btn-primary" href="<?php echo smarty_function_service(array('controller'=>'menu','action'=>'export_menu_options','menuId'=>$_smarty_tpl->tpl_vars['menuId']->value),$_smarty_tpl);?>
" title="Export menu options">
			<?php echo smarty_function_icon(array('name'=>"export"),$_smarty_tpl);?>
 Export
		</a>
		<a class="btn btn-primary no-ajax" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'import_menu_options','menuId'=>$_smarty_tpl->tpl_vars['menuId']->value),$_smarty_tpl);?>
" title="Import menu options">
			<?php echo smarty_function_icon(array('name'=>"import"),$_smarty_tpl);?>
 Import
		</a>
	<?php }?>
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>"admin_menu_options"));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>"admin_menu_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Manage menu ".((string)$_smarty_tpl->tpl_vars['editable_menu_info']->value['name'])));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Manage menu ".((string)$_smarty_tpl->tpl_vars['editable_menu_info']->value['name'])), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<div>
		<h2>Menu options <span class="badge badge-secondary"><?php echo $_smarty_tpl->tpl_vars['cant_pages']->value;?>
</span></h2>

		<div class="navbar mb-4 clearfix">
			<?php echo smarty_function_button(array('_text'=>'Save Options','_class'=>'save_menu  btn btn-sm disabled float-left mb-2','_type'=>'primary','_ajax'=>'n','_auto_args'=>'save_menu,page_ref_id'),$_smarty_tpl);?>

			<ol class="new-option">
				<li id="node_new" class="clearfix new row">
					<div class="col-sm-12">
						<div class="float-left label-group">
							<div class="input-group input-group-sm" style="max-width: 100%">
								<div class="input-group-append">
									<span class="input-group-text"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
								</div>
								<input type="text" class="field-label form-control" value="" placeholder="New option" readonly="readonly">
								<div class="input-group-append">
									<span class="tips input-group-text option-edit" title="|Check this if the option is an alternative to the previous one.">
										<input type="checkbox" class="samepos">
										<?php $_smarty_tpl->_assignInScope('prevpos', $_smarty_tpl->tpl_vars['option']->value['position']);?>
									</span>
									<a href="javascript:void(0)" class="tips input-group-text " title="New option|Drag this on to the menu area below">
										<?php echo smarty_function_icon(array('name'=>'info'),$_smarty_tpl);?>

									</a>
								</div>
							</div>
						</div>
						<div class="float-left url-group hidden">
							<div class="input-group input-group-sm">
								<div class="input-group-prepend">
									<a href="javascript:void(0)" class="input-group-text" onclick='return false;'>
										<?php echo smarty_function_icon(array('name'=>'link'),$_smarty_tpl);?>

									</a>
								</div>
								<input type="text" class="field-url form-control" value="" placeholder="URL or ((page name))">
								<div class="input-group-append">
									<a href="javascript:void(0)" class="input-group-text  option-edit">
										<?php echo smarty_function_icon(array('name'=>'edit','_menu_icon'=>'y','alt'=>"Details"),$_smarty_tpl);?>

									</a>
									<a href="javascript:void(0)" class="input-group-text text-danger option-remove" disabled="disabled">
										<?php echo smarty_function_icon(array('name'=>'remove','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>

									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ol>
		</div>
		<form method="get" action="tiki-admin_menu_options.php">
			<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

			<input type="hidden" name="find" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['find']->value ));?>
">
			<input type="hidden" name="sort_mode" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sort_mode']->value ));?>
">
			<input type="hidden" name="menuId" value="<?php echo $_smarty_tpl->tpl_vars['menuId']->value;?>
">
			<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">

			<div class="options-container">
				<ol id="options">
					<?php $_smarty_tpl->_assignInScope('prevpos', 0);?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
						<li class="row clearfix" id="node_<?php echo $_smarty_tpl->tpl_vars['option']->value['optionId'];?>
" data-position="<?php echo $_smarty_tpl->tpl_vars['option']->value['position'];?>
" data-parent="<?php echo $_smarty_tpl->tpl_vars['option']->value['parent'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['option']->value['type'];?>
">
							<div class="col-sm-12">
								<?php if ($_smarty_tpl->tpl_vars['option']->value['name']) {?>
									<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'tooltip', null);
if ($_smarty_tpl->tpl_vars['editable_menu_info']->value['parse'] == 'y') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('wiki', array());
$_block_repeat=true;
echo smarty_block_wiki(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['option']->value['name'];
$_block_repeat=false;
echo smarty_block_wiki(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['name'] ));
}?>|<dl><?php if ($_smarty_tpl->tpl_vars['option']->value['url']) {?><dt>URL:</dt><dd><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_truncate($_smarty_tpl->tpl_vars['option']->value['canonic'],40,' ...') ));?>
</dd><?php }
if ($_smarty_tpl->tpl_vars['option']->value['section']) {?><dt>Sections:</dt><dd><?php echo $_smarty_tpl->tpl_vars['option']->value['section'];?>
</dd><?php }
if ($_smarty_tpl->tpl_vars['option']->value['perm']) {?><dt>Permissions:</dt><dd><?php echo $_smarty_tpl->tpl_vars['option']->value['perm'];?>
</dd><?php }
if ($_smarty_tpl->tpl_vars['option']->value['groupname']) {?><dt>Groups:</dt><dd><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['groupname'] ));?>
</dd><?php }
if ($_smarty_tpl->tpl_vars['option']->value['class']) {?><dt>Class:</dt><dd><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['class'] ));?>
</dd><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userlevels'] == 'y' && !empty($_smarty_tpl->tpl_vars['option']->value['userlevel'])) {
$_smarty_tpl->_assignInScope('it', $_smarty_tpl->tpl_vars['option']->value['userlevel']);?><dt>User Level:</dt><dd><?php echo $_smarty_tpl->tpl_vars['prefs']->value['userlevels'][$_smarty_tpl->tpl_vars['it']->value];?>
</dd><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons'] == 'y' && $_smarty_tpl->tpl_vars['option']->value['icon']) {?><dt>Icon:</dt><dd><?php if ($_smarty_tpl->tpl_vars['prefs']->value['theme_iconset'] == 'legacy') {
echo smarty_function_icon(array('_id'=>$_smarty_tpl->tpl_vars['option']->value['icon'],'_defaultdir'=>$_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons_path']),$_smarty_tpl);
} else {
echo smarty_function_icon(array('name'=>smarty_modifier_replace($_smarty_tpl->tpl_vars['option']->value['icon'],'48x48','')),$_smarty_tpl);
}?>&nbsp;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['icon'] ));?>
</dd><?php }?></dl><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
								<?php } else { ?>
									<?php $_smarty_tpl->_assignInScope('tooltip', "|separator");?>
								<?php }?>

								<div class="float-left label-group mr-4">
									<div class="input-group input-group-sm">
										<div class="input-group-append">
											<span class="input-group-text"><?php echo smarty_function_icon(array('name'=>'sort'),$_smarty_tpl);?>
</span>
										</div>
										<input typecontroller=menu&action=edit_option="text" class="field-label form-control" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['name'] ));?>
" placeholder="Label">
										<div class="input-group-append">
											<span class="tips input-group-text option-edit" title="|Check this if the option is an alternative to the previous one.">
												<input type="checkbox" class="samepos"<?php if ($_smarty_tpl->tpl_vars['option']->value['position'] == $_smarty_tpl->tpl_vars['prevpos']->value) {?> checked="checked"<?php }?>>
												<?php $_smarty_tpl->_assignInScope('prevpos', $_smarty_tpl->tpl_vars['option']->value['position']);?>
											</span>
											<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'edit_option','menuId'=>$_smarty_tpl->tpl_vars['menuId']->value,'optionId'=>$_smarty_tpl->tpl_vars['option']->value['optionId']),$_smarty_tpl);?>
" class="tips input-group-text" title='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tooltip']->value ));?>
'>
												<?php echo smarty_function_icon(array('name'=>'info'),$_smarty_tpl);?>

											</a>
										</div>
									</div>
								</div>
								<div class="float-left url-group">
									<div class="input-group input-group-sm">
										<div class="input-group-append">
										<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['sefurl'] ));?>
" class="input-group-text tips confirm" title="|Test URL">
											<?php echo smarty_function_icon(array('name'=>'link'),$_smarty_tpl);?>

										</a>
										</div>
										<input type="text" class="field-url form-control" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['canonic'] ));?>
" placeholder="URL or ((page name))">
										<div class="input-group-append">
											<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'menu','action'=>'edit_option','menuId'=>$_smarty_tpl->tpl_vars['menuId']->value,'optionId'=>$_smarty_tpl->tpl_vars['option']->value['optionId']),$_smarty_tpl);?>
" class="tips input-group-text option-edit confirm" title="|Details">
												<?php echo smarty_function_icon(array('name'=>'edit','_menu_icon'=>'y','alt'=>"Details"),$_smarty_tpl);?>

											</a>
											<a href="#" class="tips input-group-text text-danger option-remove" title="|Remove Option">
												<?php echo smarty_function_icon(array('name'=>'remove','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>

											</a>
										</div>
									</div>
								</div>
							</div>
							<ol class="child-options"></ol>
						</li>
					<?php
}
if ($_smarty_tpl->tpl_vars['option']->do_else) {
?>

					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'options', null, null);?>select:function(event,ui){ui.item.value='(('+ui.item.value+'))';}<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo smarty_function_autocomplete(array('element'=>'.field-url','type'=>'pagename','options'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'options')),$_smarty_tpl);?>

				</ol>
			</div>

		</form>

		<?php echo smarty_function_button(array('_text'=>'Save Options','_class'=>'save_menu  btn btn-sm disabled','_type'=>'primary','_ajax'=>'n','_auto_args'=>'save_menu,page_ref_id'),$_smarty_tpl);?>


	</div>
<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Manage menu ".((string)$_smarty_tpl->tpl_vars['editable_menu_info']->value['name'])), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Preview and Deploy"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Preview and Deploy"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<h2>Preview menu</h2>


			<form action="<?php echo smarty_function_service(array('controller'=>'menu','action'=>'preview'),$_smarty_tpl);?>
" class="form-inline preview mb-4">
				<input type="hidden" name="menuId" value="<?php echo $_smarty_tpl->tpl_vars['menuId']->value;?>
">
				<div class="form-group col-sm-3">
					<label for="preview_type" class="col-form-label mr-2">Type:</label>
					<select id="preview_type" class="form-control" name="preview_type">
						<option value="vert"<?php if ($_smarty_tpl->tpl_vars['preview_type']->value == 'vert') {?> selected<?php }?>>Vertical</option>
						<option value="horiz"<?php if ($_smarty_tpl->tpl_vars['preview_type']->value == 'horiz') {?> selected<?php }?>>Horizontal</option>
					</select>
				</div>
				<div class="col-sm-2">
					<div class="form-check">
						<label for="preview_bootstrap" class="form-check-label">
							Bootstrap
						</label>
						<input type="checkbox" id="preview_bootstrap" class="form-check-input ml-2" name="preview_bootstrap"<?php if ($_smarty_tpl->tpl_vars['preview_bootstrap']->value == 'y') {?> checked="checked"<?php }?>>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="form-check">
						<label for="preview_css" class="form-check-label">
							CSS
						</label>
						<input type="checkbox" id="preview_css" class="form-check-input ml-2" name="preview_css"<?php if ($_smarty_tpl->tpl_vars['preview_css']->value == 'y') {?> checked="checked"<?php }?>>
					</div>
				</div>
				<div class="form-group col-sm-3">
					<label for="preview_position" class="col-form-label mr-2">
						Position
					</label>
					<select id="preview_position" class="form-control">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module_zone_list']->value, 'zone', false, 'code');
$_smarty_tpl->tpl_vars['zone']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['zone']->value) {
$_smarty_tpl->tpl_vars['zone']->do_else = false;
?>
							<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['code']->value ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['zone']->value['name'] ));?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
				<div class="col-sm-2">
					<?php echo smarty_function_button(array('_text'=>'Deploy','_class'=>'deploy_menu btn btn-primary','_type'=>'default','_ajax'=>'n'),$_smarty_tpl);?>

				</div>
			</form>


	<div class="preview-menu">
		&nbsp;
	</div>
<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Preview and Deploy"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo smarty_block_tabset(array('name'=>"admin_menu_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
