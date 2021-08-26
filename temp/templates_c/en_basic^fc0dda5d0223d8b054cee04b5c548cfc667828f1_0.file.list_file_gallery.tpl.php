<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:27:53
  from 'C:\xampp\htdocs\tikip4k\templates\list_file_gallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61265369b01c19_33676468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc0dda5d0223d8b054cee04b5c548cfc667828f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\list_file_gallery.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:fgal_view_page.tpl' => 1,
    'file:browse_file_gallery.tpl' => 1,
    'file:list_file_gallery_content.tpl' => 1,
  ),
),false)) {
function content_61265369b01c19_33676468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.self_link.php','function'=>'smarty_block_self_link',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.pagination_links.php','function'=>'smarty_block_pagination_links',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.query.php','function'=>'smarty_function_query',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.reindex_file_pixel.php','function'=>'smarty_function_reindex_file_pixel',),));
?>


<?php if ((!empty($_smarty_tpl->tpl_vars['tree']->value) && $_smarty_tpl->tpl_vars['tiki_p_list_file_galleries']->value != 'n' && $_smarty_tpl->tpl_vars['fgal_options']->value['show_explorer']['value'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_view_fgal_explorer']->value == 'y') || (!empty($_smarty_tpl->tpl_vars['gallery_path']->value) && $_smarty_tpl->tpl_vars['fgal_options']->value['show_path']['value'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_view_fgal_path']->value == 'y')) {?>
	<div class="fgal_top_bar form-group row mx-0">
		<?php if (!empty($_smarty_tpl->tpl_vars['tree']->value) && $_smarty_tpl->tpl_vars['tiki_p_list_file_galleries']->value != 'n' && $_smarty_tpl->tpl_vars['fgal_options']->value['show_explorer']['value'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_view_fgal_explorer']->value == 'y') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y') {?>
				<div id="fgalexplorer_close" style="float:left; vertical-align:middle; display:<?php if (!(isset($_SESSION['tiki_cookie_jar']['show_fgalexplorer'])) || $_SESSION['tiki_cookie_jar']['show_fgalexplorer'] == 'y') {?>none<?php } else { ?>inline<?php }?>;">
					<a href="#"
						class="tips"
						title=":Show Tree"
						onclick="flip('fgalexplorer','');hide('fgalexplorer_close',false);show('fgalexplorer_open',false);return false;">
						<?php echo smarty_function_icon(array('name'=>'file-archive'),$_smarty_tpl);?>

					</a>
				</div>
				<div id="fgalexplorer_open" style="float:left; vertical-align:middle; display:<?php if ((isset($_SESSION['tiki_cookie_jar']['show_fgalexplorer'])) && $_SESSION['tiki_cookie_jar']['show_fgalexplorer'] != 'y') {?>none<?php } else { ?>inline<?php }?>;">
					<a href="#"
						class="tips"
						title=":Hide Tree"
						onclick="flip('fgalexplorer','');hide('fgalexplorer_open',false);show('fgalexplorer_close',false);return false;">
						<?php echo smarty_function_icon(array('name'=>'file-archive-open'),$_smarty_tpl);?>

					</a>
				</div>
			<?php } else { ?>
				<div style="float:left; vertical-align:middle">
					<?php if ((isset($_REQUEST['show_fgalexplorer'])) && $_REQUEST['show_fgalexplorer'] == 'y') {?>
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>'file-archive-open','_class'=>"tips",'_title'=>":Hide Tree",'show_fgalexplorer'=>'n'));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>'file-archive-open','_class'=>"tips",'_title'=>":Hide Tree",'show_fgalexplorer'=>'n'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php $_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>'file-archive-open','_class'=>"tips",'_title'=>":Hide Tree",'show_fgalexplorer'=>'n'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php } else { ?>
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>'file-archive','show_fgalexplorer'=>'y','_class'=>"tips",'_title'=>":Show Tree"));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>'file-archive','show_fgalexplorer'=>'y','_class'=>"tips",'_title'=>":Show Tree"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php $_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>'file-archive','show_fgalexplorer'=>'y','_class'=>"tips",'_title'=>":Show Tree"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php }?>
				</div>
			<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['gallery_path']->value != '' && $_smarty_tpl->tpl_vars['fgal_options']->value['show_path']['value'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_view_fgal_path']->value == 'y') {?>
			<div class="gallerypath" style="vertical-align:middle">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['gallery_path']->value;?>
</div>
		<?php }?>
	</div>
<?php }?>
<div class="row">
	<?php if (!empty($_smarty_tpl->tpl_vars['tree']->value) && $_smarty_tpl->tpl_vars['tiki_p_list_file_galleries']->value != 'n' && $_smarty_tpl->tpl_vars['fgal_options']->value['show_explorer']['value'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_view_fgal_explorer']->value == 'y' && $_smarty_tpl->tpl_vars['view']->value != 'page') {?>
		<div class="col-sm-3 fgalexplorer" id="fgalexplorer" style="<?php if (((isset($_SESSION['tiki_cookie_jar']['show_fgalexplorer'])) && $_SESSION['tiki_cookie_jar']['show_fgalexplorer'] != 'y') && (!(isset($_REQUEST['show_fgalexplorer'])) || $_REQUEST['show_fgalexplorer'] != 'y')) {?>display:none;<?php }?>">
			<?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

		</div>
		<div class="col-sm-9 fgallisting explorerHidden">
	<?php } else { ?>
		<div class="col-sm-12 fgallisting explorerDisplayed">
	<?php }?>
	<div>
		<?php if ($_smarty_tpl->tpl_vars['maxRecords']->value > 20 && $_smarty_tpl->tpl_vars['cant']->value > $_smarty_tpl->tpl_vars['maxRecords']->value) {?>
			<div class="clearboth" style="margin-bottom: 3px;">
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			</div>
		<?php }?>
		<form name="fgalformid" id="fgalform" method="post" action="<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {
echo smarty_function_query(array('_type'=>'relative','filegals_manager'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filegals_manager']->value ))),$_smarty_tpl);
} else {
echo smarty_function_query(array('_type'=>'relative'),$_smarty_tpl);
}?>" enctype="multipart/form-data">
			<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

			<input type="hidden" name="galleryId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gal_info']->value['galleryId'] ));?>
">
			<input type="hidden" name="find" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['find']->value ));?>
">
			<?php if (!empty($_smarty_tpl->tpl_vars['show_details']->value)) {?><input type="hidden" name="show_details" value="<?php echo $_smarty_tpl->tpl_vars['show_details']->value;?>
"><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_asynchronous_indexing'] == 'y') {?><input type="hidden" name="fast" value="y"><?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['sort_mode']->value)) {?><input type="hidden" name="sort_mode" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sort_mode']->value ));?>
"><?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['file_info']->value))) {?><input type="hidden" name="fileId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file_info']->value['fileId'] ));?>
"><?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['page']->value))) {?><input type="hidden" name="page" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value ));?>
"><?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['view']->value))) {?><input type="hidden" name="view" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['view']->value ));?>
"><?php }?>
			<?php $_smarty_tpl->_assignInScope('nbCols', 0);?>
			<?php $_smarty_tpl->_assignInScope('other_columns', '');?>
			<?php $_smarty_tpl->_assignInScope('other_columns_selected', '');?>
			<?php if ($_smarty_tpl->tpl_vars['view']->value == 'browse' || $_smarty_tpl->tpl_vars['view']->value == 'page') {?>
				<?php $_smarty_tpl->_assignInScope('show_infos', 'y');?>
				<?php if ($_smarty_tpl->tpl_vars['view']->value == 'page') {?>
					<?php $_smarty_tpl->_subTemplateRender('file:fgal_view_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php } else { ?>
					<?php $_smarty_tpl->_subTemplateRender('file:browse_file_gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php }?>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('show_infos', 'n');?>
				<?php $_smarty_tpl->_subTemplateRender('file:list_file_gallery_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php }?>
			<?php if (((isset($_smarty_tpl->tpl_vars['files']->value)) && $_smarty_tpl->tpl_vars['files']->value && $_smarty_tpl->tpl_vars['gal_info']->value['show_checked'] != 'n' && $_smarty_tpl->tpl_vars['prefs']->value['fgal_checked'] == 'y' && ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_upload_files']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_assign_perm_file_gallery']->value == 'y') && ($_smarty_tpl->tpl_vars['prefs']->value['fgal_show_thumbactions'] == 'y' || $_smarty_tpl->tpl_vars['show_details']->value == 'y' || $_smarty_tpl->tpl_vars['view']->value != 'browse') && $_smarty_tpl->tpl_vars['view']->value != 'page')) {?>
				<div id="sel">
					<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_remove_files']->value == 'y' || !(isset($_smarty_tpl->tpl_vars['file_info']->value)) || $_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['fgal_display_zip_option'] == 'y' || $_smarty_tpl->tpl_vars['tiki_p_assign_perm_file_gallery']->value == 'y') {?>
						<div class="input-group col-sm-12">
							<select name="fgal_actions" class="form-control">
								<option value="" selected="selected">
									Select action to perform with checked...
								</option>
								<?php if ($_smarty_tpl->tpl_vars['tiki_p_assign_perm_file_gallery']->value == 'y') {?>
									<option value="permsel_x">
										Assign permissions to file galleries
									</option>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_remove_files']->value == 'y') {?>
									<option
										value="delsel_x"
										class="confirm-simple"
										data-confirm-text="Delete selected items?"
									>
										Delete
									</option>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_display_zip_option'] == 'y') {?>
									<option value="zipsel_x">
										Download zip version
									</option>
								<?php }?>
								<?php if (!(isset($_smarty_tpl->tpl_vars['file_info']->value))) {?>
									<?php if (count($_smarty_tpl->tpl_vars['all_galleries']->value) > 0 && ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_remove_files']->value == 'y')) {?>
										<option value="movesel_x">
											Move
										</option>
									<?php }?>
									<option value="refresh_metadata_x">
										Refresh metadata
									</option>
									<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value == 'y') {?>
										<option
											value="defaultsel_x"
											class="confirm-simple"
											data-confirm-text="Reset to default list view settings?"
										>
											Reset to default list view settings
										</option>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['offset']->value) {?>
										<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
									<?php }?>
								<?php }?>
							</select>
							<span class="input-group-append">
								<button
									class="btn btn-primary"
									form="fgalform"
									type="submit"
									onclick="confirmSimple(event)"
								>
									OK
								</button>
							</span>
						</div>
					<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['movesel_x']->value) && !(isset($_smarty_tpl->tpl_vars['file_info']->value))) {?>
						<div class="card">
							<div class="card-header">
								Move selected file or gallery
							</div>
							<div class="card-body">
								<div class="form-group row">
									<label for="moveto" class="col-sm-2">
										Move to:
									</label>
									<div class="col-sm-8">
										<select name="moveto" class="form-control">
											<?php
$__section_ix_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['all_galleries']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_1_total = $__section_ix_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_1_total !== 0) {
for ($__section_ix_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_1_iteration <= $__section_ix_1_total; $__section_ix_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
												<?php if ($_smarty_tpl->tpl_vars['all_galleries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['id'] != $_smarty_tpl->tpl_vars['galleryId']->value && $_smarty_tpl->tpl_vars['all_galleries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['perms']['tiki_p_upload_files'] == 'y' && ($_smarty_tpl->tpl_vars['all_galleries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['public'] == 'y' || $_smarty_tpl->tpl_vars['all_galleries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['user'] == $_smarty_tpl->tpl_vars['user']->value || $_smarty_tpl->tpl_vars['all_galleries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['perms']['tiki_p_admin_file_galleries'] == 'y')) {?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['all_galleries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['id'];?>
">
														<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['all_galleries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['label'] ));?>

													</option>
												<?php }?>
											<?php
}
}
?>
										</select>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<input
									type='submit'
									class="btn btn-secondary"
									form="fgalform"
									name='movesel'
									value="Move"
								>
							</div>
						</div>
					<?php }?>
				</div>
				<?php if (!empty($_smarty_tpl->tpl_vars['perms']->value)) {?>
					<div class="card">
						<div class="card-header">
							Assign file gallery permissions to groups
						</div>
						<div class="card-body">
							<div class="form-group row">
								<div class="col-sm-6">
									<span class="form-text">
										Permissions
									</span>
									<select name="perms[]" multiple="multiple" size="12" class="form-control">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perms']->value, 'perm');
$_smarty_tpl->tpl_vars['perm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->do_else = false;
?>
											<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['perm']->value['permName'] ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['perm']->value['permName'] ));?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</div>
								<div class="col-sm-6">
									<span class="form-text">
										Groups
									</span>
									<select name="groups[]" multiple="multiple" size="12" class="form-control">
										<?php
$__section_grp_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['groups']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_grp_2_total = $__section_grp_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_grp'] = new Smarty_Variable(array());
if ($__section_grp_2_total !== 0) {
for ($__section_grp_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index'] = 0; $__section_grp_2_iteration <= $__section_grp_2_total; $__section_grp_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index']++){
?>
											<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index'] : null)]['groupName'] ));?>
" <?php if ($_smarty_tpl->tpl_vars['groupName']->value == $_smarty_tpl->tpl_vars['groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index'] : null)]['groupName']) {?>selected="selected"<?php }?>>
												<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_grp']->value['index'] : null)]['groupName'] ));?>

											</option>
										<?php
}
}
?>
									</select>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<input
								class="btn btn-secondary"
								type="submit"
								name="permsel"
								value="Assign"
								onclick="checkTimeout()"
							>
						</div>
					</div>
				<?php }?>
				<br style="clear:both"/>
			<?php }?>
		</form>
		<?php echo smarty_function_reindex_file_pixel(array('id'=>$_smarty_tpl->tpl_vars['reindex_file_id']->value),$_smarty_tpl);?>
<br>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php if ($_smarty_tpl->tpl_vars['view']->value == 'page') {?>
				tiki-list_file_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&maxWidth=<?php echo $_smarty_tpl->tpl_vars['maxWidth']->value;?>
&maxRecords=<?php echo $_smarty_tpl->tpl_vars['maxRecords']->value;?>
&view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>

			<?php }?>
		<?php $_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		</div>
	</div>
</div>
<?php }
}
