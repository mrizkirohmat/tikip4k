<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:27:53
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-list_file_gallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126536947c119_32667326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '670dc7693c61ebdbb54fdaa3a985522abe80c034' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-list_file_gallery.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:edit_file_gallery.tpl' => 1,
    'file:duplicate_file_gallery.tpl' => 1,
    'file:find.tpl' => 1,
    'file:list_file_gallery.tpl' => 1,
  ),
),false)) {
function content_6126536947c119_32667326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.self_link.php','function'=>'smarty_block_self_link',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.permission_link.php','function'=>'smarty_function_permission_link',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.query.php','function'=>'smarty_function_query',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),9=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),10=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),11=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.pagination_links.php','function'=>'smarty_block_pagination_links',),12=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"File Galleries",'admpage'=>"fgal"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"File Galleries",'admpage'=>"fgal"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value == 'y' && $_smarty_tpl->tpl_vars['galleryId']->value == 0) {?>
		Create a File Gallery
	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value == 'y') {?>
			Edit Gallery:
		<?php }?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['name']->value;
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }
$_block_repeat=false;
echo smarty_block_title(array('help'=>"File Galleries",'admpage'=>"fgal"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<div class="t_navbar mb-4">
	<div class="btn-group float-right">
		<?php if (!$_smarty_tpl->tpl_vars['js']->value) {?><ul class="cssmenu_horiz"><li class="dropdown-item"><?php }?>
		<a class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#"  title="Views">
			<?php echo smarty_function_icon(array('name'=>"menu-extra"),$_smarty_tpl);?>

		</a>
		<ul class="dropdown-menu dropdown-menu-right">
			<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value != 'y' && $_smarty_tpl->tpl_vars['dup_mode']->value != 'y') {?>
				<li class="dropdown-divider"></li>
				<li class="dropdown-title">
					Views
				</li>
				<li class="dropdown-divider"></li>
				<?php if ($_smarty_tpl->tpl_vars['view']->value != 'admin' && $_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value == 'y') {?>
					<li class="dropdown-item">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>"wrench",'_text'=>"Admin",'view'=>"admin",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>"wrench",'_text'=>"Admin",'view'=>"admin",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>"wrench",'_text'=>"Admin",'view'=>"admin",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['view']->value != 'browse') {?>
					<li class="dropdown-item">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>"view",'_text'=>"Browse",'view'=>"browse",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>"view",'_text'=>"Browse",'view'=>"browse",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>"view",'_text'=>"Browse",'view'=>"browse",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['view']->value != 'finder' && $_smarty_tpl->tpl_vars['prefs']->value['fgal_elfinder_feature'] == 'y') {?>
					<li class="dropdown-item">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>"file-archive-open",'_text'=>"Finder",'view'=>"finder",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>"file-archive-open",'_text'=>"Finder",'view'=>"finder",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>"file-archive-open",'_text'=>"Finder",'view'=>"finder",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['view']->value != 'list') {?>
					<li class="dropdown-item">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>"list",'_text'=>"List",'view'=>"list",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>"list",'_text'=>"List",'view'=>"list",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>"list",'_text'=>"List",'view'=>"list",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['view']->value != 'page' && $_smarty_tpl->tpl_vars['filescount']->value > 0) {?>
					<li class="dropdown-item">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>"textfile",'_text'=>"Page",'view'=>"page",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>"textfile",'_text'=>"Page",'view'=>"page",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>"textfile",'_text'=>"Page",'view'=>"page",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</li>
				<?php }?>
			<?php }?>
			<li class="dropdown-divider"></li>
			<li class="dropdown-title">
				Gallery actions
			</li>
			<li class="dropdown-divider"></li>
			<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value != 'y' || $_smarty_tpl->tpl_vars['dup_mode']->value != 'y') {?>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_file_galleries']->value == 'y' || (!empty($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value == $_smarty_tpl->tpl_vars['gal_info']->value['user'] && $_smarty_tpl->tpl_vars['gal_info']->value['type'] == 'user' && $_smarty_tpl->tpl_vars['tiki_p_userfiles']->value == 'y')) {?>
					<li class="dropdown-item">
						<a href="tiki-list_file_gallery.php?edit_mode=1&galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
"><?php echo smarty_function_icon(array('name'=>"edit"),$_smarty_tpl);?>
 Edit</a>
					</li>
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_file_galleries']->value == 'y' && $_smarty_tpl->tpl_vars['dup_mode']->value != 'y' && $_smarty_tpl->tpl_vars['gal_info']->value['type'] != 'user' && count($_smarty_tpl->tpl_vars['all_galleries']->value) > 0) {?>
				<li class="dropdown-item">
					<a href="tiki-list_file_gallery.php?dup_mode=1&galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
"><?php echo smarty_function_icon(array('name'=>"copy"),$_smarty_tpl);?>
 Duplicate</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_assign_perm_file_gallery']->value == 'y') {?>
				<li class="dropdown-item">
					<?php echo smarty_function_permission_link(array('mode'=>'text','type'=>"file gallery",'permType'=>"file galleries",'id'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_group_watches'] == 'y' && ($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y')) {?>
				<li class="dropdown-item">
					
					<a href="tiki-object_watches.php?objectId=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['galleryId']->value,"url" ));?>
&amp;watch_event=file_gallery_changed&amp;objectType=File+Gallery&amp;objectName=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gal_info']->value['name'],"url" ));?>
&amp;objectHref=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ('tiki-list_file_gallery.php?galleryId=').($_smarty_tpl->tpl_vars['galleryId']->value),"url" ));?>
">
						<?php echo smarty_function_icon(array('name'=>'watch-group'),$_smarty_tpl);?>
 Group monitor
					</a>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches'] == 'y') {?>
				<li class="dropdown-item">
					<?php if (!(isset($_smarty_tpl->tpl_vars['user_watching_file_gallery']->value)) || $_smarty_tpl->tpl_vars['user_watching_file_gallery']->value == 'n') {?>
						<form action="tiki-list_file_gallery.php" method="post">
							<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

							<input type="hidden" name="galleryName" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'attr' ));?>
">
							<input type="hidden" name="watch_event" value="file_gallery_changed">
							<input type="hidden" name="watch_object" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['galleryId']->value,'attr' ));?>
">
							<input type="hidden" name="watch_action" value="add">
							<button type="submit" class="btn btn-link link-list" onclick="checkTimeout()">
								<?php echo smarty_function_icon(array('name'=>'watch'),$_smarty_tpl);?>
 Monitor
							</button>
						</form>
					<?php } else { ?>
						<form action="tiki-list_file_gallery.php" method="post">
							<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

							<input type="hidden" name="galleryName" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value,'attr' ));?>
">
							<input type="hidden" name="watch_event" value="file_gallery_changed">
							<input type="hidden" name="watch_object" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['galleryId']->value,'attr' ));?>
">
							<input type="hidden" name="watch_action" value="remove">
							<button type="submit" class="btn btn-link link-list" onclick="checkTimeout()">
								<?php echo smarty_function_icon(array('name'=>'stop-watching'),$_smarty_tpl);?>
 Stop monitoring
							</button>
						</form>
					<?php }?>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feed_file_gallery'] == 'y') {?>
				<li class="dropdown-item">
					<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['type'] == "podcast" || $_smarty_tpl->tpl_vars['gal_info']->value['type'] == "vidcast") {?>
						<a href="tiki-file_gallery_rss.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&amp;ver=PODCAST">
							<?php echo smarty_function_icon(array('name'=>'rss'),$_smarty_tpl);?>
 RSS feed
						</a>
					<?php } else { ?>
						<a href="tiki-file_gallery_rss.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
							<?php echo smarty_function_icon(array('name'=>'rss'),$_smarty_tpl);?>
 RSS feed
						</a>
					<?php }?>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['view']->value == 'browse') {?>
				<li class="dropdown-item">
					<?php if ($_smarty_tpl->tpl_vars['show_details']->value == 'y') {?>
						<a href="<?php echo smarty_function_query(array('_type'=>'relative','show_details'=>'n'),$_smarty_tpl);?>
" title="Hide file information from list view">
							<?php echo smarty_function_icon(array('name'=>'ban','align'=>'right','alt'=>"Hide file information from list view"),$_smarty_tpl);?>
 Hide list view information
						</a>
					<?php } else { ?>
						<a href="<?php echo smarty_function_query(array('_type'=>'relative','show_details'=>'y'),$_smarty_tpl);?>
" title="Show file information from list view">
							<?php echo smarty_function_icon(array('name'=>'view','align'=>'right','alt'=>"Show file information from list view"),$_smarty_tpl);?>
 Show list view information
						</a>
					<?php }?>
				</li>
			<?php }?>
		</ul>
		<?php if (!$_smarty_tpl->tpl_vars['js']->value) {?></li></ul><?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['galleryId']->value > 0) {?>
	
	
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_file_galleries']->value == 'y' && $_smarty_tpl->tpl_vars['edit_mode']->value != 'y') {?>
			<?php echo smarty_function_button(array('_keepall'=>'y','_icon_name'=>"create",'_type'=>"link",'_text'=>"Create",'edit_mode'=>1,'parentId'=>$_smarty_tpl->tpl_vars['galleryId']->value,'cookietab'=>1),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value == 'y' || (!empty($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['user']->value == $_smarty_tpl->tpl_vars['gal_info']->value['user'] && $_smarty_tpl->tpl_vars['gal_info']->value['type'] == 'user' && $_smarty_tpl->tpl_vars['tiki_p_userfiles']->value == 'y')) {?>
			<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value == 'y' || $_smarty_tpl->tpl_vars['dup_mode']->value == 'y') {?>
				<?php echo smarty_function_button(array('_keepall'=>'y','_icon_name'=>"view",'_text'=>"Browse",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

			<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value == 'y' || $_smarty_tpl->tpl_vars['user']->value == $_smarty_tpl->tpl_vars['gal_info']->value['user'] || $_smarty_tpl->tpl_vars['gal_info']->value['public'] == 'y') {?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_upload_files']->value == 'y') {?>
				<?php echo smarty_function_button(array('_keepall'=>'y','_icon_name'=>"upload",'_type'=>"link",'_text'=>"Upload",'href'=>"tiki-upload_file.php",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_upload_files']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_draw'] == 'y') {?>
				<?php echo smarty_function_button(array('_keepall'=>'y','_icon_name'=>"post",'_type'=>"link",'_text'=>"Draw",'href'=>"tiki-edit_draw.php",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

			<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['tiki_p_upload_files']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['wikiplugin_diagram'] == 'y') {?>
                <?php echo smarty_function_button(array('_keepall'=>'y','_icon_name'=>"chart",'_type'=>"link",'_text'=>"Create Diagram",'href'=>"tiki-editdiagram.php",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value,'newDiagram'=>'1'),$_smarty_tpl);?>

            <?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_batch'] == "y" && $_smarty_tpl->tpl_vars['tiki_p_batch_upload_file_dir']->value == 'y') {?>
				<?php echo smarty_function_button(array('_keepall'=>'y','_icon_name'=>"file-archive",'_type'=>"link",'_text'=>"Batch",'href'=>"tiki-batch_upload_files.php",'galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>

			<?php }?>
		<?php }?>
	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['treeRootId']->value == $_smarty_tpl->tpl_vars['prefs']->value['fgal_root_id'] && ($_smarty_tpl->tpl_vars['edit_mode']->value == 'y' || $_smarty_tpl->tpl_vars['dup_mode']->value == 'y')) {?>
			<?php echo smarty_function_button(array('_icon_name'=>"list",'_text'=>"List",'href'=>'?','_class'=>"btn-info"),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_file_galleries']->value == 'y' && $_smarty_tpl->tpl_vars['edit_mode']->value != 'y') {?>
			<?php echo smarty_function_button(array('_icon_name'=>"create",'_keepall'=>'y','_text'=>"Create",'edit_mode'=>"1",'parentId'=>"-1",'galleryId'=>"0"),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_upload_files']->value == 'y') {?>
			<?php echo smarty_function_button(array('_icon_name'=>"export",'_text'=>"Upload",'href'=>"tiki-upload_file.php"),$_smarty_tpl);?>

		<?php }?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value != 'y' && $_smarty_tpl->tpl_vars['prefs']->value['fgal_show_slideshow'] == 'y' && $_smarty_tpl->tpl_vars['gal_info']->value['show_slideshow'] == 'y') {?>
		<?php echo smarty_function_button(array('_icon_name'=>"chart",'_text'=>"SlideShow",'href'=>"#",'_onclick'=>"javascript:window.open('tiki-list_file_gallery.php?galleryId=".((string)$_smarty_tpl->tpl_vars['galleryId']->value)."&amp;slideshow','','menubar=no,width=600,height=500,resizable=yes');return false;"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value != 'y' && $_smarty_tpl->tpl_vars['prefs']->value['h5p_enabled'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_upload_files']->value == 'y' && $_smarty_tpl->tpl_vars['tiki_p_h5p_edit']->value == 'y') {?>
		<a href="<?php echo smarty_function_service(array('controller'=>'h5p','action'=>'edit','modal'=>1),$_smarty_tpl);?>
" class="btn btn-link create-h5p"><?php echo smarty_function_icon(array('name'=>'plus'),$_smarty_tpl);?>
 Create H5P</a>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(".create-h5p").clickModal({title: "Create H5P", size: "modal-lg"});<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value != 'y' && $_smarty_tpl->tpl_vars['gal_info']->value['description'] != '') {?>
	<div class="description form-text">
		<?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gal_info']->value['description'] )));?>

	</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Be careful to set the right permissions on the files you link to.<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<div class="form-check">
		<input type="checkbox" class="form-check-input" id="keepOpenCbx" checked="checked">
		<label for="keepOpenCbx" class="form-check-label">Keep gallery window open</label>
	</div>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['fileChangedMessage']->value)) && $_smarty_tpl->tpl_vars['fileChangedMessage']->value != '') {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"Note"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo $_smarty_tpl->tpl_vars['fileChangedMessage']->value;?>

		<form method="post"
				action="<?php echo $_SERVER['SCRIPT_NAME'];
if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value) && $_smarty_tpl->tpl_vars['filegals_manager']->value != '') {?>?filegals_manager=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filegals_manager']->value ));
}?>"
				class="form-inline">
			<input type="hidden" name="galleryId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['galleryId']->value ));?>
">
			<input type="hidden" name="fileId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fileId']->value ));?>
">
			<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

			<div class="form-group row">
				<label for="comment">
					Comment (optional):
				</label>
					<input type="text" name="comment" id="comment" class="form-control">
			</div>
				<button type="submit" class="btn btn-primary btn-sm">
					<?php echo smarty_function_icon(array('name'=>'ok'),$_smarty_tpl);?>
 Save
				</button>
		</form>
	<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if ($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches'] == 'y' && (isset($_smarty_tpl->tpl_vars['category_watched']->value)) && $_smarty_tpl->tpl_vars['category_watched']->value == 'y') {?>
	<div class="categbar">
		Watched by categories:
		<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['watching_categories']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
			<?php echo smarty_function_button(array('_keepall'=>'y','_text'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['watching_categories']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'] )),'href'=>"tiki-browse_categories.php",'parentId'=>$_smarty_tpl->tpl_vars['watching_categories']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['categId']),$_smarty_tpl);?>

		<?php
}
}
?>
	</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['fgal_diff']->value)) {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"Modifications"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Modifications"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fgal_diff']->value, 'fgp_prop', false, 'fgp_name', 'change', array (
));
$_smarty_tpl->tpl_vars['fgp_prop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fgp_name']->value => $_smarty_tpl->tpl_vars['fgp_prop']->value) {
$_smarty_tpl->tpl_vars['fgp_prop']->do_else = false;
?>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Property <b><?php echo $_smarty_tpl->tpl_vars['fgp_name']->value;?>
</b> Changed<?php $_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Modifications"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value == 'y') {?>
	<br><?php $_smarty_tpl->_subTemplateRender('file:edit_file_gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['dup_mode']->value == 'y') {?>
	<?php $_smarty_tpl->_subTemplateRender('file:duplicate_file_gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
	<?php if ($_smarty_tpl->tpl_vars['view']->value != 'page') {?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_elfinder_feature'] != 'y' || $_smarty_tpl->tpl_vars['view']->value != 'finder') {?>
			<div class="row">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_search'] == 'y') {?>
				<div class="col-sm-6">
					<?php $_smarty_tpl->_subTemplateRender('file:find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('find_show_num_rows'=>'y','find_show_categories_multi'=>'y','find_durations'=>$_smarty_tpl->tpl_vars['find_durations']->value,'find_show_sub'=>'y','find_in'=>"<ul><li>Name</li><li>Filename</li><li>Description</li></ul>"), 0, false);
?>
				</div>
			<?php }?>
			<?php if (($_smarty_tpl->tpl_vars['prefs']->value['fgal_search_in_content'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['fgal_search'] == 'y') && $_smarty_tpl->tpl_vars['galleryId']->value > 0) {?>
				<div class="col-sm-6">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_search_in_content'] == 'y') {?>
						<form id="search-form" class="form" role="form" method="get" action="tiki-search<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forum_local_tiki_search'] == 'y') {?>index<?php } else { ?>results<?php }?>.php">
							<input type="hidden" name="where" value="files">
							<input type="hidden" name="galleryId" value="<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
							<label for="highlight" class="find_content sr-only">Search in content</label>
							<div class="input-group">
								<input name="highlight" size="30" type="text" placeholder="Search in content..." class="form-control tips bottom" title="|Search for text within files in all galleries">
								<div class="input-group-append">
									<input type="submit" class="wikiaction btn btn-info" name="search" value="Go">
								</div>
							</div>
						</form>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_search'] == 'y') {?>
						<form id="search-by-id" class="form" role="form" method="get" action="tiki-list_file_gallery.php">
							<div class="input-group">
								<input class="form-control tips bottom" type="text" name="fileId" id="fileId" <?php if ((isset($_smarty_tpl->tpl_vars['fileId']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['fileId']->value;?>
"<?php }?> placeholder="Search by identifier..." title="|Search for the file with this number, in all galleries">
								<div class="input-group-append">
									<button type="submit" class="btn btn-info">Go</button>
								</div>
							</div>
						</form>
					<?php }?>
				</div>
			<?php }?>
			</div>
		<?php }?>
	<?php } else { ?>
		<div class="pageview">
			<form id="size-form" class="form form-inline" role="form" action="tiki-list_file_gallery.php">
				<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

				<input type="hidden" name="view" value="page">
				<input type="hidden" name="galleryId" value="<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
				<input type="hidden" name="maxRecords" value=1>
				<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
				<label for="maxWidth">
					Maximum width&nbsp;<input id="maxWidth" class="form-control" type="text" name="maxWidth" value="<?php echo $_smarty_tpl->tpl_vars['maxWidth']->value;?>
">
				</label>
				<input type="submit" class="wikiaction btn btn-primary" name="setSize" value="Submit">
			</form>
		</div><br>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			tiki-list_file_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
&maxWidth=<?php echo $_smarty_tpl->tpl_vars['maxWidth']->value;?>
&maxRecords=<?php echo $_smarty_tpl->tpl_vars['maxRecords']->value;?>
&view=<?php echo $_smarty_tpl->tpl_vars['view']->value;?>

		<?php $_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<br>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_quota_show'] != 'n' && $_smarty_tpl->tpl_vars['gal_info']->value['quota']) {?>
		<div style="float:right; width: 350px;">
			<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['usedSize'] != null) {?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'use', null, null);?>
				<?php echo smarty_function_math(array('equation'=>"round((100*x)/(1024*1024*y),0)",'x'=>$_smarty_tpl->tpl_vars['gal_info']->value['usedSize'],'y'=>$_smarty_tpl->tpl_vars['gal_info']->value['quota']),$_smarty_tpl);?>

			<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'left_percent', null, null);?>
				<?php echo smarty_function_math(array('equation'=>"round(100-(100*x)/(1024*1024*y),0)",'x'=>$_smarty_tpl->tpl_vars['gal_info']->value['usedSize'],'y'=>$_smarty_tpl->tpl_vars['gal_info']->value['quota']),$_smarty_tpl);?>

			<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'left', null, null);?>
				<?php echo smarty_function_math(array('equation'=>"round(y - x/(1024*1024),0)",'y'=>$_smarty_tpl->tpl_vars['gal_info']->value['quota'],'x'=>$_smarty_tpl->tpl_vars['gal_info']->value['usedSize']),$_smarty_tpl);?>

			<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_quota_show'] != 'text_only') {
if ($_smarty_tpl->tpl_vars['gal_info']->value['usedSize'] != null) {?>
				<div class="progress" style="display:inline-block;float:right;width: 250px;">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100"
						aria-valuemin="0" aria-valuemax="100" style="width:<?php echo sprintf('%d',$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'left_percent'));?>
%">
					</div>
					<div class="progress-bar progress-bar-danger" role="progressbar" style="width:<?php echo sprintf('%d',$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'use'));?>
%">
					</div>
				</div>
			<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['usedSize'] == null) {?>
					<div class="progress" style="display:inline-block;float:right; width: 250px;">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100"
							aria-valuemin="0" aria-valuemax="100" style="width:100%">
						</div>
						<div class="progress-bar progress-bar-danger" role="progressbar" style="width:0%">
						</div>
					</div>
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_quota_show'] != 'y') {?>
				<?php if ($_smarty_tpl->tpl_vars['gal_info']->value['usedSize'] == null) {?>
					<div style="text-align:center;display:inline-block;float:right;padding-right: 10px;"><strong><?php echo $_smarty_tpl->tpl_vars['gal_info']->value['quota'];?>
 MB</strong> left</div>
				<?php } else { ?>
					<div style="text-align:center;display:inline-block;float:right;padding-right: 10px;"><strong><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'left');?>
 MB</strong> left</div>
				<?php }?>
			<?php }?>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_elfinder_feature'] == 'y' && $_smarty_tpl->tpl_vars['view']->value == 'finder') {?><br>
		<div class="elFinderDialog" style="height: 100%" data-ticket="<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
"></div>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

var elfoptions = initElFinder({
	defaultGalleryId: <?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
,
	deepGallerySearch:1,
	requestType: 'post',
	getFileCallback: function(file,elfinder) { window.handleFinderFile(file,elfinder); },
	height: 600
});

var elFinderInstnce = $(".elFinderDialog").elfinder(elfoptions).elfinder('instance');
elFinderInstnce.customData['ticket'] = $(".elFinderDialog").data('ticket');
// when changing folders update the buttons in the navebar above
elFinderInstnce.bind("open", function (data) {
	$.getJSON($.service('file_finder', 'finder'), {
		cmd: "tikiFileFromHash",
		hash: data.data.cwd.hash
	}).done(function (data) {
		var href = '';
		$(".t_navbar a").each(function () {
			href = $(this).attr("href");
			if (href) {	// avoid chosen select replacements
				href = href.replace(/(galleryId|objectId|parentId|watch_object)=\d+/, '$1=' + data.galleryId);
				$(this).attr("href", href);
			}
		});
	});
});

window.handleFinderFile = function (file, elfinder) {
	var hash = "";
	if (typeof file === "string") {
		var m = file.match(/target=([^&]*)/);
		if (!m || m.length < 2) {
			return false;	// error?
		}
		hash = m[1];
	} else {
		hash = file.hash;
	}
	$.ajax({
		type: 'POST',
		url: $.service('file_finder', 'finder'),
		dataType: 'json',
		data: {
			cmd: "tikiFileFromHash",
			<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
				filegals_manager: "<?php echo $_smarty_tpl->tpl_vars['filegals_manager']->value;?>
",
			<?php }
if (!empty($_smarty_tpl->tpl_vars['insertion_syntax']->value)) {?>
				insertion_syntax: "<?php echo $_smarty_tpl->tpl_vars['insertion_syntax']->value;?>
",
			<?php }?>
			hash: hash
		},
		success: function (data) {
			<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
				window.opener.insertAt('<?php echo $_smarty_tpl->tpl_vars['filegals_manager']->value;?>
', processFgalSyntax(data), false, false, true);
				checkClose();
			<?php }?>
		}
	});
};
		<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender('file:list_file_gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['galleryId']->value > 0 && $_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_comments'] == 'y' && ($_smarty_tpl->tpl_vars['tiki_p_read_comments']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_post_comments']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_edit_comments']->value == 'y')) {?>

		<div id="page-bar">
			<a id="comment-toggle" href="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'list','type'=>"file gallery",'objectId'=>$_smarty_tpl->tpl_vars['galleryId']->value),$_smarty_tpl);?>
#comment-container" class="btn btn-primary btn-sm">
				<?php echo smarty_function_icon(array('name'=>"comments"),$_smarty_tpl);?>
 Comments
			</a>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				$('#comment-toggle').comment_toggle();
			<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		</div>

		<div id="comment-container"></div>
	<?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['galleryId']->value > 0) {?>
	<?php if ($_smarty_tpl->tpl_vars['edited']->value == 'y') {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Information"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Information"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			You can access the file gallery using the following URL: <a class="fgallink alert-link" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
?galleryId=<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
</a>
		<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Information"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }
}
}
}
