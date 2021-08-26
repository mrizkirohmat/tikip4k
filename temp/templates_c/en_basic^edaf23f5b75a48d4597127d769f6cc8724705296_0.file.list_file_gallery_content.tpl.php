<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:27:53
  from 'C:\xampp\htdocs\tikip4k\templates\list_file_gallery_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61265369f19779_36736959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edaf23f5b75a48d4597127d769f6cc8724705296' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\list_file_gallery_content.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:fgal_context_menu.tpl' => 2,
  ),
),false)) {
function content_61265369f19779_36736959 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.select_all.php','function'=>'smarty_function_select_all',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.self_link.php','function'=>'smarty_block_self_link',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.popup.php','function'=>'smarty_function_popup',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_long_datetime.php','function'=>'smarty_modifier_tiki_long_datetime',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_long_date.php','function'=>'smarty_modifier_tiki_long_date',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.username.php','function'=>'smarty_modifier_username',),9=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.kbsize.php','function'=>'smarty_modifier_kbsize',),10=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),11=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),12=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_datetime.php','function'=>'smarty_modifier_tiki_short_datetime',),13=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_date.php','function'=>'smarty_modifier_tiki_short_date',),14=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.userlink.php','function'=>'smarty_modifier_userlink',),15=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.iconify.php','function'=>'smarty_modifier_iconify',),16=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_remaining_days_from_now.php','function'=>'smarty_modifier_tiki_remaining_days_from_now',),17=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.norecords.php','function'=>'smarty_function_norecords',),));
?>

<?php if (empty($_smarty_tpl->tpl_vars['sort_arg']->value)) {?>
	<?php $_smarty_tpl->_assignInScope('sort_arg', 'sort_mode');
}?>
<div class="table-responsive">
	<table class="table">
		<tr>
			<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['show_checked'] != 'n' && ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_upload_files']->value == 'y')) {?>
				<?php $_smarty_tpl->_assignInScope('nbCols', $_smarty_tpl->tpl_vars['nbCols']->value+1);?>
				<th class="checkbox-cell">
					<div class="form-check">
						<?php echo smarty_function_select_all(array('checkbox_names'=>'file[],subgal[]'),$_smarty_tpl);?>

					</div>
				</th>
			<?php }?>

			<?php if (($_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_icon'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_text'] == 'y') && (!(isset($_smarty_tpl->tpl_vars['gal_info']->value['show_action'])) || $_smarty_tpl->tpl_vars['gal_info']->value['show_action'] == 'y') && $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y') {?>
				<?php if ((isset($_smarty_tpl->tpl_vars['nbCols']->value))) {?>
					<?php $_smarty_tpl->_assignInScope('nbCols', $_smarty_tpl->tpl_vars['nbCols']->value+1);?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('nbCols', 1);?>
				<?php }?>
				<th style="width: 1em">&nbsp;

				</th>
			<?php }?>

			<?php if ((isset($_smarty_tpl->tpl_vars['gal_info']->value['show_parentName'])) && $_smarty_tpl->tpl_vars['gal_info']->value['show_parentName'] == 'y') {?>
				<th>
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>'parentName'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>'parentName'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Gallery<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>'parentName'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				</th>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['show_thumb']->value) && $_smarty_tpl->tpl_vars['show_thumb']->value == 'y') {?>
				<th>
				</th>
			<?php }?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fgal_listing_conf']->value, 'item', false, 'propname');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['propname']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['key']))) {?>
					<?php $_smarty_tpl->_assignInScope('key_name', $_smarty_tpl->tpl_vars['item']->value['key']);?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('key_name', "show_".((string)$_smarty_tpl->tpl_vars['propname']->value));?>
				<?php }?>

				<?php if ((isset($_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value])) && $_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value] == 'o') {?>
					<?php $_smarty_tpl->_assignInScope('show_infos', 'y');?>
					<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == ($_smarty_tpl->tpl_vars['propname']->value).('_asc') || $_smarty_tpl->tpl_vars['sort_mode']->value == ($_smarty_tpl->tpl_vars['propname']->value).('_desc')) {?>
						<?php $_smarty_tpl->_assignInScope('other_columns_selected', $_smarty_tpl->tpl_vars['propname']->value);?>
					<?php } else { ?>
						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'other_columns', null);?>
							<?php if ((isset($_smarty_tpl->tpl_vars['other_columns']->value))) {?>
								<?php echo $_smarty_tpl->tpl_vars['other_columns']->value;?>

							<?php }?>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('sort_mode'=>($_smarty_tpl->tpl_vars['propname']->value).('_asc')));
$_block_repeat=true;
echo smarty_block_self_link(array('sort_mode'=>($_smarty_tpl->tpl_vars['propname']->value).('_asc')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['fgal_listing_conf']->value[$_smarty_tpl->tpl_vars['propname']->value]['name'];
$_block_repeat=false;
echo smarty_block_self_link(array('sort_mode'=>($_smarty_tpl->tpl_vars['propname']->value).('_asc')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><br>
						<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php }?>
				<?php }?>

				<?php if ((isset($_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value])) && ($_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value] == 'y' || $_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value] == 'i' || $_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value] == 'a' || $_smarty_tpl->tpl_vars['propname']->value == 'name')) {?>
					<?php $_smarty_tpl->_assignInScope('propval', $_smarty_tpl->tpl_vars['item']->value['name']);?>
					<?php $_smarty_tpl->_assignInScope('link_title', '');?>
					<?php $_smarty_tpl->_assignInScope('td_args', '');?>

					<?php if ($_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value] == 'i' || $_smarty_tpl->tpl_vars['propname']->value == 'type' || ($_smarty_tpl->tpl_vars['propname']->value == 'lockedby' && $_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value] == 'a')) {?>
						<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['icon']))) {?>
							<?php $_smarty_tpl->_assignInScope('propicon', $_smarty_tpl->tpl_vars['item']->value['icon']);?>
						<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('propval', $_smarty_tpl->tpl_vars['item']->value['name'][0]);?>
							<?php }?>
						<?php $_smarty_tpl->_assignInScope('link_title', $_smarty_tpl->tpl_vars['item']->value['name']);?>
						<?php $_smarty_tpl->_assignInScope('td_args', ($_smarty_tpl->tpl_vars['td_args']->value).(' style="width: 1em;text-align:center"'));?>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['propname']->value == 'name' && ($_smarty_tpl->tpl_vars['gal_info']->value['show_name'] == 'a' || $_smarty_tpl->tpl_vars['gal_info']->value['show_name'] == 'f')) {?>
						<?php $_smarty_tpl->_assignInScope('nbCols', $_smarty_tpl->tpl_vars['nbCols']->value+1);?>
						<th<?php echo $_smarty_tpl->tpl_vars['td_args']->value;?>
>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>'filename'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>'filename'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
								Filename
							<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>'filename'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						</th>
					<?php }?>

					<?php if (!(empty($_smarty_tpl->tpl_vars['galleryId']->value) && $_smarty_tpl->tpl_vars['propname']->value == 'lockedby') && ($_smarty_tpl->tpl_vars['propname']->value != 'name' || ($_smarty_tpl->tpl_vars['gal_info']->value['show_name'] == 'a' || $_smarty_tpl->tpl_vars['gal_info']->value['show_name'] == 'n')) && ($_smarty_tpl->tpl_vars['propname']->value != 'description' || $_smarty_tpl->tpl_vars['gal_info']->value['show_name'] != 'n')) {?>
						<?php $_smarty_tpl->_assignInScope('nbCols', $_smarty_tpl->tpl_vars['nbCols']->value+1);?>
						<th<?php echo $_smarty_tpl->tpl_vars['td_args']->value;?>
>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>$_smarty_tpl->tpl_vars['propname']->value,'_title'=>":".((string)$_smarty_tpl->tpl_vars['link_title']->value),'_class'=>'tips'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>$_smarty_tpl->tpl_vars['propname']->value,'_title'=>":".((string)$_smarty_tpl->tpl_vars['link_title']->value),'_class'=>'tips'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
								<?php if (!empty($_smarty_tpl->tpl_vars['propicon']->value)) {?>
									<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['propicon']->value,'alt'=>$_smarty_tpl->tpl_vars['link_title']->value),$_smarty_tpl);?>

								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['propval']->value;?>

								<?php }?>
							<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>$_smarty_tpl->tpl_vars['propname']->value,'_title'=>":".((string)$_smarty_tpl->tpl_vars['link_title']->value),'_class'=>'tips'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						</th>
					<?php }?>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			<?php if (!empty($_smarty_tpl->tpl_vars['other_columns']->value)) {?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'over_other_columns', null, null);?>
					<?php if (!empty($_smarty_tpl->tpl_vars['other_columns_selected']->value)) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('sort_mode'=>'NULL'));
$_block_repeat=true;
echo smarty_block_self_link(array('sort_mode'=>'NULL'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>No Additional Sort<?php $_block_repeat=false;
echo smarty_block_self_link(array('sort_mode'=>'NULL'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?><hr><?php }
echo $_smarty_tpl->tpl_vars['other_columns']->value;?>

				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php }?>

			<?php if (!empty($_smarty_tpl->tpl_vars['other_columns_selected']->value)) {?>
				<?php $_smarty_tpl->_assignInScope('nbCols', $_smarty_tpl->tpl_vars['nbCols']->value+1);?>
				<th>
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>$_smarty_tpl->tpl_vars['other_columns_selected']->value,'_title'=>$_smarty_tpl->tpl_vars['fgal_listing_conf']->value[$_smarty_tpl->tpl_vars['other_columns_selected']->value]['name']));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>$_smarty_tpl->tpl_vars['other_columns_selected']->value,'_title'=>$_smarty_tpl->tpl_vars['fgal_listing_conf']->value[$_smarty_tpl->tpl_vars['other_columns_selected']->value]['name']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php echo $_smarty_tpl->tpl_vars['fgal_listing_conf']->value[$_smarty_tpl->tpl_vars['other_columns_selected']->value]['name'];?>

					<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>$_smarty_tpl->tpl_vars['sort_arg']->value,'_sort_field'=>$_smarty_tpl->tpl_vars['other_columns_selected']->value,'_title'=>$_smarty_tpl->tpl_vars['fgal_listing_conf']->value[$_smarty_tpl->tpl_vars['other_columns_selected']->value]['name']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				</th>
			<?php }?>

			<?php if (($_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_icon'] != 'y' && $_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_text'] != 'y') || ((isset($_smarty_tpl->tpl_vars['gal_info']->value['show_action'])) && $_smarty_tpl->tpl_vars['gal_info']->value['show_action'] == 'y') || $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] != 'y') {?>
				<?php $_smarty_tpl->_assignInScope('nbCols', $_smarty_tpl->tpl_vars['nbCols']->value+1);?>
				<th>
					Actions
				</th>
			<?php }?>

			<?php if ((!empty($_smarty_tpl->tpl_vars['other_columns']->value) || !empty($_smarty_tpl->tpl_vars['other_columns_selected']->value)) && $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y') {?>
				<?php $_smarty_tpl->_assignInScope('nbCols', $_smarty_tpl->tpl_vars['nbCols']->value+1);?>
				<th style="width: 1em">
					<?php if (!empty($_smarty_tpl->tpl_vars['other_columns']->value)) {?>
						<a href='#' <?php echo smarty_function_popup(array('fullhtml'=>"1",'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'over_other_columns'),'trigger'=>"click"),$_smarty_tpl);?>
 title="Other Sorts">
					<?php }?>
					<?php echo smarty_function_icon(array('name'=>'ranking','alt'=>"Other Sorts",'title'=>''),$_smarty_tpl);?>

					<?php if (!empty($_smarty_tpl->tpl_vars['other_columns']->value)) {?>
						</a>
					<?php }?>
				</th>
			<?php }?>
		</tr>


		<?php
$__section_changes_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['files']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_changes_3_total = $__section_changes_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_changes'] = new Smarty_Variable(array());
if ($__section_changes_3_total !== 0) {
for ($__section_changes_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] = 0; $__section_changes_3_iteration <= $__section_changes_3_total; $__section_changes_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']++){
?>

			<?php if (((!(isset($_smarty_tpl->tpl_vars['fileId']->value))) || $_smarty_tpl->tpl_vars['fileId']->value == 0) || ($_smarty_tpl->tpl_vars['fileId']->value == $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['id'])) {?>
				<?php if (($_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_icon'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_text'] == 'y') && (!(isset($_smarty_tpl->tpl_vars['gal_info']->value['show_action'])) || $_smarty_tpl->tpl_vars['gal_info']->value['show_action'] == 'y')) {?>
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'over_actions', null, null);?>
						<?php $_smarty_tpl->_assignInScope('file', $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]);
$_smarty_tpl->_subTemplateRender('file:fgal_context_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menu_icon'=>$_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_icon'],'menu_text'=>$_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_text']), 0, true);
?>
					<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php }?>

				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'over_preview', null, null);
if (smarty_modifier_truncate($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['type'],6,'',true) == 'image/') {?><div class='opaque'><img src="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['id'],'thumbnail');?>
"></div><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

				<?php $_smarty_tpl->_assignInScope('nb_over_infos', 0);?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'over_infos', null, null);?>
					<table class="table table-condensed"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fgal_listing_conf']->value, 'prop', false, 'propname');
$_smarty_tpl->tpl_vars['prop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['propname']->value => $_smarty_tpl->tpl_vars['prop']->value) {
$_smarty_tpl->tpl_vars['prop']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['item']->value['key']))) {
$_smarty_tpl->_assignInScope('propkey', $_smarty_tpl->tpl_vars['item']->value['key']);
} else {
$_smarty_tpl->_assignInScope('propkey', "show_".((string)$_smarty_tpl->tpl_vars['propname']->value));
}
if (!empty($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)][$_smarty_tpl->tpl_vars['propname']->value])) {
if ($_smarty_tpl->tpl_vars['propname']->value == 'share' && (isset($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['share']['data']))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['share']['data'], 'tmp_prop', false, 'tmp_propname');
$_smarty_tpl->tpl_vars['tmp_prop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tmp_propname']->value => $_smarty_tpl->tpl_vars['tmp_prop']->value) {
$_smarty_tpl->tpl_vars['tmp_prop']->do_else = false;
$_tmp_array = isset($_smarty_tpl->tpl_vars['email']) ? $_smarty_tpl->tpl_vars['email']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['tmp_prop']->value['email'];
$_smarty_tpl->_assignInScope('email', $_tmp_array);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['email']->value && is_array($_smarty_tpl->tpl_vars['email']->value)) {
$_smarty_tpl->_assignInScope('propval', implode($_smarty_tpl->tpl_vars['email']->value,','));
}
} else {
$_smarty_tpl->_assignInScope('propval', $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)][$_smarty_tpl->tpl_vars['propname']->value]);
}
} else {
$_smarty_tpl->_assignInScope('propval', '');
}
if ((isset($_smarty_tpl->tpl_vars['propname']->value)) && ($_smarty_tpl->tpl_vars['propname']->value == 'created' || $_smarty_tpl->tpl_vars['propname']->value == 'lastModif' || $_smarty_tpl->tpl_vars['propname']->value == 'lastDownload')) {
if (empty($_smarty_tpl->tpl_vars['propval']->value)) {
$_smarty_tpl->_assignInScope('propval', '');
} else {
if ((isset($_smarty_tpl->tpl_vars['gal_info']->value['show_modtimedate'])) && $_smarty_tpl->tpl_vars['gal_info']->value['show_modtimedate'] == 'y') {
$_smarty_tpl->_assignInScope('propval', smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['propval']->value));
} else {
$_smarty_tpl->_assignInScope('propval', smarty_modifier_tiki_long_date($_smarty_tpl->tpl_vars['propval']->value));
}
}
} elseif ($_smarty_tpl->tpl_vars['propname']->value == 'last_user' || $_smarty_tpl->tpl_vars['propname']->value == 'author' || $_smarty_tpl->tpl_vars['propname']->value == 'creator') {
$_smarty_tpl->_assignInScope('propval', smarty_modifier_username($_smarty_tpl->tpl_vars['propval']->value));
} elseif ($_smarty_tpl->tpl_vars['propname']->value == 'size') {
$_smarty_tpl->_assignInScope('propval', smarty_modifier_kbsize($_smarty_tpl->tpl_vars['propval']->value,true));
} elseif ($_smarty_tpl->tpl_vars['propname']->value == 'ocr_state') {
if ($_smarty_tpl->tpl_vars['propval']->value === '1') {
$_smarty_tpl->_assignInScope('propval', 'Finished processing');
} elseif ($_smarty_tpl->tpl_vars['propval']->value === '2') {
$_smarty_tpl->_assignInScope('propval', 'Currently processing');
} elseif ($_smarty_tpl->tpl_vars['propval']->value === '3') {
$_smarty_tpl->_assignInScope('propval', 'Queued for processing');
} elseif ($_smarty_tpl->tpl_vars['propval']->value === '4') {
$_smarty_tpl->_assignInScope('propval', 'Processing stalled');
} else {
$_smarty_tpl->_assignInScope('propval', 'No scheduled processing');
}
} elseif ($_smarty_tpl->tpl_vars['propname']->value == 'backlinks' && !empty($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['nbBacklinks'])) {
$_smarty_tpl->_assignInScope('propval', $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['nbBacklinks']);
} elseif ($_smarty_tpl->tpl_vars['propname']->value == 'description') {
$_smarty_tpl->_assignInScope('propval', nl2br($_smarty_tpl->tpl_vars['propval']->value));
}
if ((isset($_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['propkey']->value])) && ($_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['propkey']->value] == 'a' || $_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['propkey']->value] == 'o')) {?><tr><th class="text-right"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fgal_listing_conf']->value[$_smarty_tpl->tpl_vars['propname']->value]['name'] ));?>
</th><td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['propval']->value ));?>
</td></tr><?php $_smarty_tpl->_assignInScope('nb_over_infos', $_smarty_tpl->tpl_vars['nb_over_infos']->value+1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></table>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['nb_over_infos']->value > 0) {?>
					<?php $_smarty_tpl->_assignInScope('over_infos', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'over_infos'));?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('over_infos', '');?>
				<?php }?>

				<?php $_smarty_tpl->_assignInScope('nb_over_share', 0);?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'over_share', null, null);?>
					<?php if (!empty($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['share']['data'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['share']['data'], 'prop', false, 'propname');
$_smarty_tpl->tpl_vars['prop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['propname']->value => $_smarty_tpl->tpl_vars['prop']->value) {
$_smarty_tpl->tpl_vars['prop']->do_else = false;
?><b><?php echo $_smarty_tpl->tpl_vars['prop']->value['email'];?>
</b>: <?php echo $_smarty_tpl->tpl_vars['prop']->value['visit'];?>
 / <?php echo $_smarty_tpl->tpl_vars['prop']->value['maxhits'];?>
<br><?php $_smarty_tpl->_assignInScope('nb_over_share', $_smarty_tpl->tpl_vars['nb_over_share']->value+1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['nb_over_share']->value > 0) {?>
					<?php $_smarty_tpl->_assignInScope('over_share', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'over_share'));?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('over_share', '');?>
				<?php }?>


			<tr>

				<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['show_checked'] != 'n' && ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_upload_files']->value == 'y')) {?>
					<td class="checkbox-cell">
						<div class="form-check">
							<?php if ($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['isgal'] == 1) {?>
								<?php $_smarty_tpl->_assignInScope('checkname', 'subgal');?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('checkname', 'file');?>
							<?php }?>
							<input type="checkbox" class="form-check-input" name="<?php echo $_smarty_tpl->tpl_vars['checkname']->value;?>
[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['id'] ));?>
"
							<?php if ((isset($_REQUEST[$_smarty_tpl->tpl_vars['checkname']->value])) && $_REQUEST[$_smarty_tpl->tpl_vars['checkname']->value] && in_array($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['id'],$_REQUEST[$_smarty_tpl->tpl_vars['checkname']->value])) {?>checked="checked"<?php }?>>
						</div>
					</td>
				<?php }?>

				<?php if (($_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_icon'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_text'] == 'y') && (!(isset($_smarty_tpl->tpl_vars['gal_info']->value['show_action'])) || $_smarty_tpl->tpl_vars['gal_info']->value['show_action'] != 'n') && $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y') {?>
					<td style="white-space: nowrap">
						<a class="fgalname tips" title="Actions" href="#" <?php echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'over_actions'),'trigger'=>"click"),$_smarty_tpl);?>
 style="padding:0; margin:0; border:0">
							<?php echo smarty_function_icon(array('name'=>'wrench','alt'=>"Actions"),$_smarty_tpl);?>

						</a>
					</td>
				<?php }?>

				<?php if ((isset($_smarty_tpl->tpl_vars['show_parentName']->value)) && $_smarty_tpl->tpl_vars['show_parentName']->value == 'y') {?>
					<td>
						<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['galleryId'],'filegallery');?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['parentName'] ));?>
</a>
					</td>
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['show_thumb']->value)) && $_smarty_tpl->tpl_vars['show_thumb']->value == 'y') {?>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['isgal'] == 0) {?>
							<a href="<?php if ($_smarty_tpl->tpl_vars['absurl']->value == 'y') {
echo $_smarty_tpl->tpl_vars['base_url']->value;
}?>tiki-download_file.php?fileId=<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['fileId'];?>
&display"><img src="<?php if ($_smarty_tpl->tpl_vars['absurl']->value == 'y') {
echo $_smarty_tpl->tpl_vars['base_url']->value;
}?>tiki-download_file.php?fileId=<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['fileId'];?>
&thumbnail"></a>
						<?php }?>
					</td>
				<?php }?>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fgal_listing_conf']->value, 'item', false, 'propname');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['propname']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
					<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['key']))) {?>
						<?php $_smarty_tpl->_assignInScope('key_name', $_smarty_tpl->tpl_vars['item']->value['key']);?>
					<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('key_name', "show_".((string)$_smarty_tpl->tpl_vars['propname']->value));?>
					<?php }?>

					<?php if ((isset($_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value])) && ($_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value] == 'y' || $_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value] == 'a' || $_smarty_tpl->tpl_vars['gal_info']->value[$_smarty_tpl->tpl_vars['key_name']->value] == 'i' || $_smarty_tpl->tpl_vars['propname']->value == 'name' || (!empty($_smarty_tpl->tpl_vars['other_columns_selected']->value) && $_smarty_tpl->tpl_vars['propname']->value == $_smarty_tpl->tpl_vars['other_columns_selected']->value))) {?>
						<?php if ((isset($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)][$_smarty_tpl->tpl_vars['propname']->value]))) {?>
							<?php $_smarty_tpl->_assignInScope('propval', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)][$_smarty_tpl->tpl_vars['propname']->value] )));?>
						<?php }?>
						
						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'link', null);?>
							<?php if ($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['isgal'] == 1) {
if (empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {
$_smarty_tpl->_assignInScope('query', '');
} else {
$_smarty_tpl->_assignInScope('query', ('filegals_manager=').($_smarty_tpl->tpl_vars['filegals_manager']->value));
}
if (!empty($_smarty_tpl->tpl_vars['insertion_syntax']->value)) {
if ($_smarty_tpl->tpl_vars['query']->value) {
$_smarty_tpl->_assignInScope('query', ($_smarty_tpl->tpl_vars['query']->value).('&'));
}
$_smarty_tpl->_assignInScope('query', (($_smarty_tpl->tpl_vars['query']->value).('insertion_syntax=')).($_smarty_tpl->tpl_vars['insertion_syntax']->value));
}?>href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['id'],'filegallery',$_smarty_tpl->tpl_vars['query']->value);
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['query']->value ));?>
"<?php } else {
if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>href="#" onclick="window.opener.insertAt('<?php echo $_smarty_tpl->tpl_vars['filegals_manager']->value;?>
',processFgalSyntax('<?php echo smarty_modifier_replace(smarty_modifier_replace(json_encode($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)],JSON_HEX_QUOT),'"','&quot;'),'\u0022','\\\u0022');?>
'), false, false, true);checkClose();return false;" title="Click here to use the file"<?php } elseif (((isset($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['p_download_files'])) && $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['p_download_files'] == 'y') || (!(isset($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['p_download_files'])) && $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['perms']['tiki_p_download_files'] == 'y')) {
if ($_smarty_tpl->tpl_vars['gal_info']->value['type'] == 'podcast' || $_smarty_tpl->tpl_vars['gal_info']->value['type'] == 'vidcast') {?>href="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['fgal_podcast_dir'];
echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['path'];?>
" title="Download"<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['h5p_enabled'] == 'y' && $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['type'] == 'application/zip' && preg_match('/\.h5p$/i',$_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['filename'])) {?>href="<?php echo smarty_function_service(array('controller'=>'h5p','action'=>'embed','fileId'=>$_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['id']),$_smarty_tpl);?>
" title="View"<?php } else { ?>href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['id'],'file');?>
" title="Download"<?php }
}
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'over_preview') != '' && ((((isset($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['p_download_files'])) && $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['p_download_files'] == 'y') || (!(isset($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['p_download_files'])) && $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['perms']['tiki_p_download_files'] == 'y')))) {?> <?php echo smarty_function_popup(array('fullhtml'=>"1",'text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'over_preview')),$_smarty_tpl);
}
}?>
						<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

						
						<?php if ($_smarty_tpl->tpl_vars['propname']->value == 'id' || $_smarty_tpl->tpl_vars['propname']->value == 'name') {?>
							<?php if ($_smarty_tpl->tpl_vars['propname']->value == 'name' && $_smarty_tpl->tpl_vars['propval']->value == '' && $_smarty_tpl->tpl_vars['gal_info']->value['show_name'] == 'n') {?>
								
								<?php $_smarty_tpl->_assignInScope('propval', $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['filename']);?>
								<?php $_smarty_tpl->_assignInScope('propval', "<a class='fgalname namealias' ".((string)$_smarty_tpl->tpl_vars['link']->value).">".((string)$_smarty_tpl->tpl_vars['propval']->value)."</a>");?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('propval', "<a class='fgalname' ".((string)$_smarty_tpl->tpl_vars['link']->value).">".((string)$_smarty_tpl->tpl_vars['propval']->value)."</a>");?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['propname']->value == 'name' && $_smarty_tpl->tpl_vars['gal_info']->value['show_name'] == 'n' && $_smarty_tpl->tpl_vars['gal_info']->value['show_description'] != 'n') {?>
								<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['max_desc'] > 0) {?>
									<?php $_smarty_tpl->_assignInScope('desc', nl2br(smarty_modifier_truncate($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['description'],$_smarty_tpl->tpl_vars['gal_info']->value['max_desc'],"...",false)));?>
								<?php } else { ?>
									<?php $_smarty_tpl->_assignInScope('desc', nl2br($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['description']));?>
								<?php }?>
								<?php $_smarty_tpl->_assignInScope('propval', ((string)$_smarty_tpl->tpl_vars['propval']->value)."<br><span class=\"description\">".((string)$_smarty_tpl->tpl_vars['desc']->value)."</span>");?>
							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value == 'created' || $_smarty_tpl->tpl_vars['propname']->value == 'lastModif' || $_smarty_tpl->tpl_vars['propname']->value == 'lastDownload') {?>
							<?php if (empty($_smarty_tpl->tpl_vars['propval']->value)) {?>
								<?php $_smarty_tpl->_assignInScope('propval', '');?>
							<?php } else { ?>
								<?php if ((isset($_smarty_tpl->tpl_vars['gal_info']->value['show_modtimedate'])) && $_smarty_tpl->tpl_vars['gal_info']->value['show_modtimedate'] == 'y') {?>
									<?php $_smarty_tpl->_assignInScope('propval', smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['propval']->value));?>
								<?php } else { ?>
									<?php $_smarty_tpl->_assignInScope('propval', smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['propval']->value));?>
								<?php }?>
							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value == 'last_user' || $_smarty_tpl->tpl_vars['propname']->value == 'author' || $_smarty_tpl->tpl_vars['propname']->value == 'creator') {?>
							<?php $_smarty_tpl->_assignInScope('propval', smarty_modifier_userlink($_smarty_tpl->tpl_vars['propval']->value));?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value == 'size') {?>
							<?php $_smarty_tpl->_assignInScope('propval', smarty_modifier_kbsize($_smarty_tpl->tpl_vars['propval']->value,true));?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value == 'type') {?>
							<?php if ($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['isgal'] == 1) {?>
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'propval', null);
echo smarty_function_icon(array('name'=>'file-archive-open','class'=>''),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('propval', smarty_modifier_iconify($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['filename'],$_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['type']));?>
							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value == 'description' && $_smarty_tpl->tpl_vars['gal_info']->value['max_desc'] > 0) {?>
							<?php $_smarty_tpl->_assignInScope('propval', nl2br(smarty_modifier_truncate($_smarty_tpl->tpl_vars['propval']->value,$_smarty_tpl->tpl_vars['gal_info']->value['max_desc'],"...",false)));?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value == 'description') {?>
							<?php $_smarty_tpl->_assignInScope('propval', nl2br($_smarty_tpl->tpl_vars['propval']->value));?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value == 'ocr_state') {?>
							<?php if ($_smarty_tpl->tpl_vars['propval']->value === '1') {?>
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'propval', null);
echo smarty_function_icon(array('style'=>'outline','name'=>'check-circle','title'=>'Finished processing'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<?php } elseif ($_smarty_tpl->tpl_vars['propval']->value === '2') {?>
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'propval', null);
echo smarty_function_icon(array('style'=>'outline','name'=>'sync','title'=>'Currently processing'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<?php } elseif ($_smarty_tpl->tpl_vars['propval']->value === '3') {?>
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'propval', null);
echo smarty_function_icon(array('style'=>'outline','name'=>'circle','title'=>'Queued for processing'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<?php } elseif ($_smarty_tpl->tpl_vars['propval']->value === '4') {?>
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'propval', null);
echo smarty_function_icon(array('style'=>'outline','name'=>'pause-circle','title'=>'Processing stalled'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<?php } else { ?>
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'propval', null);
echo smarty_function_icon(array('style'=>'outline','name'=>'times-circle','title'=>'No scheduled processing'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value == 'lockedby' && $_smarty_tpl->tpl_vars['propval']->value != '') {?>
							<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['show_lockedby'] == 'i' || $_smarty_tpl->tpl_vars['gal_info']->value['show_lockedby'] == 'a') {?>
								<?php $_smarty_tpl->_assignInScope('propval', smarty_modifier_username($_smarty_tpl->tpl_vars['propval']->value));?>
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'propval', null);
echo smarty_function_icon(array('name'=>'lock','class'=>'tips','title'=>(":Locked by- ").($_smarty_tpl->tpl_vars['propval']->value)),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('propval', smarty_modifier_userlink($_smarty_tpl->tpl_vars['propval']->value));?>
							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value == 'backlinks') {?>
							<?php if (empty($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['nbBacklinks'])) {?>
								<?php $_smarty_tpl->_assignInScope('propval', '');?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('propval', $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['nbBacklinks']);?>
								<?php $_smarty_tpl->_assignInScope('fid', $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['id']);?>
								<?php $_smarty_tpl->_assignInScope('propval', "<a class='ajaxtips' href='list-file_backlinks_ajax.php?fileId=".((string)$_smarty_tpl->tpl_vars['fid']->value)."' data-ajaxtips='list-file_backlinks_ajax.php?fileId=".((string)$_smarty_tpl->tpl_vars['fid']->value)."'>".((string)$_smarty_tpl->tpl_vars['propval']->value)."</a>");?>
							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value == 'deleteAfter') {?>
							<?php if (empty($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['deleteAfter'])) {?>
								<?php $_smarty_tpl->_assignInScope('propval', "-");?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('limitdate', $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['deleteAfter']+$_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['lastModif']);?>
								<?php $_smarty_tpl->_assignInScope('propval', smarty_modifier_tiki_remaining_days_from_now($_smarty_tpl->tpl_vars['limitdate']->value,$_smarty_tpl->tpl_vars['prefs']->value['short_date_format']));?>
							<?php }?>
						<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value == 'share') {?>
							<?php if ((isset($_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['share']))) {?>
								<?php $_smarty_tpl->_assignInScope('share_string', $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['share']['string']);?>
								<?php $_smarty_tpl->_assignInScope('share_nb', $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['share']['nb']);?>
								<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'share_capture', null);?>
									<a class='fgalname tips' title="Share" href='#' <?php echo smarty_function_popup(array('fullhtml'=>1,'text'=>$_smarty_tpl->tpl_vars['over_share']->value,'left'=>true,'trigger'=>"click"),$_smarty_tpl);?>
 style='cursor:help'><?php echo smarty_function_icon(array('name'=>'group','alt'=>''),$_smarty_tpl);?>
</a> (<?php echo $_smarty_tpl->tpl_vars['share_nb']->value;?>
) <?php echo $_smarty_tpl->tpl_vars['share_string']->value;?>

								<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
								<?php $_smarty_tpl->_assignInScope('propval', $_smarty_tpl->tpl_vars['share_capture']->value);?>
							<?php }?>
							<?php } elseif ($_smarty_tpl->tpl_vars['propname']->value == 'hits') {?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_list_hits'] == 'y') {?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_list_ratio_hits'] == 'y') {?>
									<?php $_smarty_tpl->_assignInScope('hits', $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['hits']);?>
									<?php $_smarty_tpl->_assignInScope('maxhits', $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['maxhits']);?>
									<?php if ($_smarty_tpl->tpl_vars['maxhits']->value <= 0) {?>
										<?php $_smarty_tpl->_assignInScope('propval', $_smarty_tpl->tpl_vars['hits']->value);?>
									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('propval', ((string)$_smarty_tpl->tpl_vars['hits']->value)." / <b>".((string)$_smarty_tpl->tpl_vars['maxhits']->value)."</b>");?>
									<?php }?>
								<?php } else { ?>
									<?php $_smarty_tpl->_assignInScope('propval', $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['hits']);?>
								<?php }?>
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['propname']->value == 'name' && ($_smarty_tpl->tpl_vars['gal_info']->value['show_name'] == 'a' || $_smarty_tpl->tpl_vars['gal_info']->value['show_name'] == 'f')) {?>
							<td>
								<?php if ($_smarty_tpl->tpl_vars['link']->value != '') {?><a class='fgalname fileLink' fileId='<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['id'];?>
' type='<?php echo $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['type'];?>
' <?php echo $_smarty_tpl->tpl_vars['link']->value;?>
><?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['filename'] ));
if ($_smarty_tpl->tpl_vars['link']->value != '') {?></a><?php }?>
							</td>
						<?php }?>

						<?php if (!empty($_smarty_tpl->tpl_vars['other_columns_selected']->value) && $_smarty_tpl->tpl_vars['propname']->value == $_smarty_tpl->tpl_vars['other_columns_selected']->value) {?>
							<?php $_smarty_tpl->_assignInScope('other_columns_selected_val', $_smarty_tpl->tpl_vars['propval']->value);?>
						<?php } else { ?>
							<?php if (!(empty($_smarty_tpl->tpl_vars['galleryId']->value) && $_smarty_tpl->tpl_vars['propname']->value == 'lockedby') && ($_smarty_tpl->tpl_vars['propname']->value != 'name' || ($_smarty_tpl->tpl_vars['gal_info']->value['show_name'] == 'a' || $_smarty_tpl->tpl_vars['gal_info']->value['show_name'] == 'n')) && ($_smarty_tpl->tpl_vars['propname']->value != 'description' || $_smarty_tpl->tpl_vars['gal_info']->value['show_name'] != 'n')) {?>
								<td><?php echo $_smarty_tpl->tpl_vars['propval']->value;?>
</td>
							<?php }?>
						<?php }?>
					<?php }?>
					<?php $_smarty_tpl->_assignInScope('propval', null);?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				<?php if (!empty($_smarty_tpl->tpl_vars['other_columns_selected_val']->value)) {?>
					<td>
						<?php echo $_smarty_tpl->tpl_vars['other_columns_selected_val']->value;?>

					</td>
				<?php }?>

				<?php if (($_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_icon'] != 'y' && $_smarty_tpl->tpl_vars['prefs']->value['use_context_menu_text'] != 'y') || ((isset($_smarty_tpl->tpl_vars['gal_info']->value['show_action'])) && $_smarty_tpl->tpl_vars['gal_info']->value['show_action'] == 'y') || $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] != 'y') {?>
					<?php $_smarty_tpl->_assignInScope('file', $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]);?>
					<td><?php $_smarty_tpl->_subTemplateRender('file:fgal_context_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></td>
				<?php }?>

				<?php if (($_smarty_tpl->tpl_vars['other_columns']->value != '' || $_smarty_tpl->tpl_vars['other_columns_selected']->value != '') && $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y') {?>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['show_infos']->value == 'y') {?>
							<?php if ($_smarty_tpl->tpl_vars['over_infos']->value == '') {?>
								<?php echo smarty_function_icon(array('name'=>'minus','class'=>'tips','title'=>":No information"),$_smarty_tpl);?>

							<?php } else { ?>
								<a class="fgalname tips left" href="#" onclick="return false;" title="Information" <?php echo smarty_function_popup(array('fullhtml'=>"1",'text'=>smarty_modifier_replace($_smarty_tpl->tpl_vars['over_infos']->value,'&amp;','&'),'left'=>true),$_smarty_tpl);?>
 style="cursor:help">
									<?php echo smarty_function_icon(array('name'=>'information','class'=>'','title'=>''),$_smarty_tpl);?>

								</a>
							<?php }?>
						<?php }?>
					</td>
				<?php }?>
			</tr>
		<?php }?>
		<?php }} else {
 ?>
			<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['nbCols']->value),$_smarty_tpl);?>

		<?php
}
?>
		<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['show_checked'] != 'n' && $_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y' && $_smarty_tpl->tpl_vars['view']->value != 'page') {?>
			<tr>
				<td colspan="<?php echo $_smarty_tpl->tpl_vars['nbCols']->value;?>
">
					<?php echo smarty_function_select_all(array('checkbox_names'=>'file[],subgal[]','label'=>"Select All"),$_smarty_tpl);?>

				</td>
			</tr>
		<?php }?>


	</table>
</div>
<?php }
}
