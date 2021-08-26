<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:36:39
  from 'C:\xampp\htdocs\tikip4k\templates\admin\include_fgal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264767e5e8a8_36465608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2872fc8a976675d447197f70cfe0f619099a040' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\admin\\include_fgal.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/include_apply_top.tpl' => 1,
    'file:admin/include_apply_bottom.tpl' => 1,
  ),
),false)) {
function content_61264767e5e8a8_36465608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tabset.php','function'=>'smarty_block_tabset',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tab.php','function'=>'smarty_block_tab',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.preference.php','function'=>'smarty_function_preference',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.help.php','function'=>'smarty_function_help',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.kbsize.php','function'=>'smarty_modifier_kbsize',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),9=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.quotabar.php','function'=>'smarty_function_quotabar',),10=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),11=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	To create or remove file galleries, select <a class="alert-link" href="tiki-list_file_gallery.php">File Galleries</a> from the application menu.
	<hr>
	If you decide to store files in a directory you must ensure that the user cannot access directly to the directory.
	You have two options to accomplish this:<br><ul><li>Use a directory outside your document root, make sure your php script can read and write to that directory</li><li>Use a directory inside the document root and use .htaccess to prevent the user from listing the directory contents</li></ul>
	To configure the directory path use UNIX like paths for example files/ or c:/foo/files or /www/files/
<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<form action="tiki-admin.php?page=fgal" method="post" class="admin">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>


	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<a role="link" class="btn btn-link tips" href="tiki-list_file_gallery.php" title="File galleries listing">
				<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 File Galleries
			</a>
			<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>
	</div>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>"fgal_admin"));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>"fgal_admin"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"General Settings"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"General Settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<br>

			<fieldset>
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries','visible'=>"always"),$_smarty_tpl);?>

			</fieldset>

			<?php echo smarty_function_preference(array('name'=>'home_file_gallery'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_description'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_use_db'),$_smarty_tpl);?>

			<div class="adminoptionboxchild fgal_use_db_childcontainer n">
				<div class="mb-sm-3">
					<?php echo smarty_function_preference(array('name'=>'fgal_use_dir'),$_smarty_tpl);?>

					<button role="button" type="submit" class="btn btn-primary" name="move" value="to_fs">
						Move files from database to directory
					</button>
				</div>
			</div>
			<div class="col-sm-8 offset-sm-4 mb-sm-3 adminoptionchild fgal_use_db_childcontainer y">
				<button role="button" type="submit" class="btn btn-primary" name="move" value="to_db">
					Move files from directory to database
				</button>
			</div>

			<?php echo smarty_function_preference(array('name'=>'fgal_podcast_dir'),$_smarty_tpl);?>


			<fieldset>
				<legend>Features<?php echo smarty_function_help(array('url'=>"File+Gallery+Config"),$_smarty_tpl);?>
</legend>

				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_rankings'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_comments'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_file_galleries_comments_childcontainer">
					<a class="link" href="tiki-admin.php?page=comments">Manage comment settings</a>
				</div>
				<?php echo smarty_function_preference(array('name'=>'fgal_display_zip_option'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_limit_hits_per_file'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_prevent_negative_score'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'fgal_allow_duplicates'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'file_galleries_use_jquery_upload'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_batch'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_file_galleries_batch_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'fgal_batch_dir'),$_smarty_tpl);?>

				</div>

				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_author'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_delete_after'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="fgal_delete_after_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'fgal_delete_after_email'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'fgal_keep_fileId'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_use_fgal_for_user_files'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_use_fgal_for_wiki_attachments'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_save_draft'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_file_galleries_templates'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_tracker_existing_search'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'fgal_fix_mime_type'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="fgal_fix_mime_type_childcontainer">
					<input
						type="submit"
						class="btn btn-primary btn-sm"
						name="updateMime"
						id="updateMime"
						value="Update mime of all non archived octet-stream files"
					>
				</div>

				<?php echo smarty_function_preference(array('name'=>'fgal_clean_xml_always'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_allow_svg'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'fgal_upload_from_source'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="fgal_upload_from_source_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'fgal_source_refresh_frequency'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_source_show_refresh'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'tiki_check_file_content'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'file_galleries_redirect_from_image_gallery'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_convert_documents_pdf'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_maximum_image_width_preview'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Quota<?php echo smarty_function_help(array('url'=>"File+Gallery+Config#Quota"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'fgal_quota'),$_smarty_tpl);?>
Used: <?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['usedSize']->value);?>

				<div class="adminoptionboxchild" id="fgal_quota_childcontainer">
					<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['fgal_quota'])) {?>
						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'use', null, null);
echo smarty_function_math(array('equation'=>"round((100*x)/(1024*1024*y))",'x'=>$_smarty_tpl->tpl_vars['usedSize']->value,'y'=>$_smarty_tpl->tpl_vars['prefs']->value['fgal_quota']),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
						<?php echo smarty_function_quotabar(array('length'=>'100','value'=>'$smarty.capture.use'),$_smarty_tpl);?>

					<?php }?>
				</div>
				<?php echo smarty_function_preference(array('name'=>'fgal_quota_per_fgal'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="fgal_quota_per_fgal_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'fgal_quota_default'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset>
				<legend>Upload Regex<?php echo smarty_function_help(array('url'=>"File+Gallery+Config#Filename_must_match:"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'fgal_match_regex'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_nmatch_regex'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend> Settings for Media Alchemyst<?php echo smarty_function_help(array('url'=>"Media-Alchemyst"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'alchemy_ffmpeg_path'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'alchemy_ffprobe_path'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'alchemy_unoconv_path'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'alchemy_unoconv_timeout'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'alchemy_unoconv_port'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'alchemy_gs_path'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'alchemy_imagine_driver'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend> Settings for Diagrams</legend>
				<?php echo smarty_function_preference(array('name'=>'fgal_export_diagram_on_image_save'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_use_casperjs_to_export_images'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_use_drawio_services_to_export_images'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"General Settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Plugins"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Plugins"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<br>
			<fieldset class="mb-3 w-100">
				<legend>Plugins</legend>
				<?php echo smarty_function_preference(array('name'=>'wikiplugin_files'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_file'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_img'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_carousel'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_galleriffic'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_colorbox'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_draw'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_annotation'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_flash'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Plugins"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Listings"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Listings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<br>
			<span class="form-text">Configuration for gallery listings</span>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('title'=>"Note"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('title'=>"Note"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				Changing these settings will <em>not</em> affect existing file galleries. These changes will apply <em>only</em> to new file galleries.
			<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('title'=>"Note"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_default_view'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_sortField'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="fgal_sortField_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'fgal_sortDirection'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'fgal_quota_show'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_search'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_search_in_content'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_show_thumbactions'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_thumb_max_size'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_browse_name_max_length'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_image_max_size_x'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_image_max_size_y'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_ratio_hits'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_display_properties'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_display_replace'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_checked'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_icon_fileId'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_show_explorer'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_show_path'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_show_slideshow'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_ocr_state'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_id'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_type'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_name'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_size'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_created'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_lastModif'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_creator'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_author'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_last_user'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_comment'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_files'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_hits'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_lastDownload'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_lockedby'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_backlinks'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_deleteAfter'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_share'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_list_source'),$_smarty_tpl);?>

		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Listings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php if ($_smarty_tpl->tpl_vars['section']->value == 'admin') {?>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Admin Listings"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Admin Listings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<br>
				<span class="form-text">Configuration for gallery administration listings</span>
				<fieldset>
					<?php echo smarty_function_preference(array('name'=>'fgal_list_id_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_type_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_description_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_name_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_size_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_created_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_lastModif_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_creator_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_author_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_last_user_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_comment_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_files_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_hits_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_lastDownload_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_lockedby_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_backlinks_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_deleteAfter_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_share_admin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_list_source_admin'),$_smarty_tpl);?>

				</fieldset>
			<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Admin Listings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>


		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Search Indexing"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Search Indexing"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<br>
			<?php echo smarty_function_preference(array('name'=>'fgal_enable_auto_indexing'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fgal_asynchronous_indexing'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'ocr_enable'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="ocr_enable_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'ocr_every_file'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'ocr_file_level'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'ocr_limit_languages'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'ocr_tesseract_path'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'ocr_pdfimages_path'),$_smarty_tpl);?>

				</div>
			<div class="adminoptionbox">
				<fieldset>
					<legend>Handlers<?php echo smarty_function_help(array('url'=>"Search-within-files",'desc'=>'If you want the content of the files which are in the File Gallery to be accessible by a search, and if you have a script that extracts the file content into a text, you can associate the script to the Mime type and the files content will be indexed.'),$_smarty_tpl);?>
</legend>
					<div class="adminoptionbox">
						<div class="adminoptionlabel">Add custom handlers to make your files &quot;searchable&quot; content.
							<ul>
								<li>
									Use <strong>%1</strong> as the internal file name. For example, use <strong>strings %1</strong> to convert the document to text, using the Unix <strong>strings</strong> command.
								</li>
								<li>
									To delete a handler, leave the <strong>System Command</strong> field blank.
								</li>
							</ul>
						</div>
					</div>

					<?php if (!empty($_smarty_tpl->tpl_vars['missingHandlers']->value)) {?>
						Tiki is pre-configured to handle many common types. If any of those are listed here, it is because the command line tool is unavailable.
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'warning','title'=>"Missing Handlers"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Missing Handlers"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['missingHandlers']->value, 'mime');
$_smarty_tpl->tpl_vars['mime']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mime']->value) {
$_smarty_tpl->tpl_vars['mime']->do_else = false;
?>
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mime']->value ));?>

								<br>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Missing Handlers"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php if ($_smarty_tpl->tpl_vars['vnd_ms_files_exist']->value) {?>
							<div class="adminoptionbox">
								<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'info','title'=>"Mime Types"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'info','title'=>"Mime Types"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
									<p>
										Previous versions of Tiki may have assigned alternative mime-types to Microsoft Office files, such as "application/vnd.ms-word" and these need to be changed to be "application/msword" for the default file indexing to function properly.
									</p>
									<input
										type="submit"
										class="btn btn-primary btn-sm"
										name="filegalfixvndmsfiles"
										value="Fix vnd.ms-* mime type files"
									/>
								<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'info','title'=>"Mime Types"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
							</div>
						<?php }?>
					<?php }?>

					<div class="adminoptionbox">
						<div class="adminoptionlabel">
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>MIME Type</th>
											<th>System Command</th>
										</tr>
									</thead>
									<tbody>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fgal_handlers']->value, 'cmd', false, 'mime');
$_smarty_tpl->tpl_vars['cmd']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mime']->value => $_smarty_tpl->tpl_vars['cmd']->value) {
$_smarty_tpl->tpl_vars['cmd']->do_else = false;
?>
										<tr>
											<td><?php echo $_smarty_tpl->tpl_vars['mime']->value;?>
</td>
											<td>
												<input name="mimes[<?php echo $_smarty_tpl->tpl_vars['mime']->value;?>
]" class="form-control" type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cmd']->value,'html' ));?>
" />
											</td>
										</tr>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<tr>
										<td class="odd">
											<input name="newMime" type="text" class="form-control" />
										</td>
										<td class="odd">
											<input name="newCmd" type="text" class="form-control" />
										</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</fieldset>

				<div class="adminoptionbox">
					<div class="adminoptionlabel">
						<div align="center">
							<input
								type="submit"
								class="btn btn-primary btn-sm"
								name="filegalredosearch"
								value="Reindex all files for search"
							>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['ocr_enable'] === 'y') {?>
								<input
										type="submit"
										<?php if (!$_smarty_tpl->tpl_vars['ocrStalled']->value) {?>disabled<?php }?>
										class="btn btn-primary btn-sm"
										name="ocrstalledreset"
										value="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Reset <?php if ($_smarty_tpl->tpl_vars['ocrStalled']->value) {
echo $_smarty_tpl->tpl_vars['ocrStalled']->value;?>
 <?php }?>OCR 'stalled' files<?php $_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>"
								>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Search Indexing"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Enhancements"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Enhancements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<br>

			<fieldset>
				<legend>Access</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_webdav'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_elfinder_feature'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="fgal_elfinder_feature_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'fgal_elfinder_on_toolbar'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'fgal_elfinder_debug'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_docs'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_pdfjs_feature'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'fgal_viewerjs_feature'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="fgal_viewerjs_feature_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'fgal_viewerjs_uri'),$_smarty_tpl);?>

					<?php if ($_smarty_tpl->tpl_vars['viewerjs_err']->value) {?>
						<div class="col-sm-8 float-sm-right">
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'errors','title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['viewerjs_err']->value;
$_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						</div>
					<?php }?>
				</div>
			</fieldset>
			<fieldset>
				<legend>H5P</legend>
				<?php echo smarty_function_preference(array('name'=>'h5p_enabled'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="h5p_enabled_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'h5p_filegal_id'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'h5p_whitelist'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'h5p_dev_mode'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'h5p_track_user'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'h5p_save_content_state'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="h5p_save_content_state_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'h5p_save_content_frequency'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'h5p_export'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'h5p_hub_is_enabled'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'h5p_site_key'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'h5p_h5p_site_uuid'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'h5p_content_type_cache_updated_at'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'h5p_check_h5p_requirements'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'h5p_send_usage_statistics'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'h5p_has_request_user_consent'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'h5p_enable_lrs_content_types'),$_smarty_tpl);?>


					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"info",'title'=>"H5P Info"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"H5P Info"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						Service URL to purge unused libraries can be found here. Can be used in a cron task<br>
						<a href="<?php echo smarty_function_service(array('controller'=>'h5p','action'=>'cron','token'=>$_smarty_tpl->tpl_vars['prefs']->value['h5p_cron_token']),$_smarty_tpl);?>
" class="btn btn-link">
							<?php echo smarty_function_service(array('controller'=>'h5p','action'=>'cron','token'=>$_smarty_tpl->tpl_vars['prefs']->value['h5p_cron_token']),$_smarty_tpl);?>

						</a>
					<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"H5P Info"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				</div>
			</fieldset>

			<fieldset>
				<legend>Draw</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_draw'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_draw_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_draw_hide_buttons'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_draw_separate_base_image'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_draw_separate_base_image_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'feature_draw_in_userfiles'),$_smarty_tpl);?>

					</div>
				</div>
			</fieldset>

			<fieldset>
				<legend>SCORM<?php echo smarty_function_help(array('desc'=>"SCORM is a package format for Learning Management Systems. Tiki can create tracker items based on the SCORM metadata. This allows you to manage SCORM packages within Tiki."),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'scorm_enabled'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="scorm_enabled_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'scorm_tracker'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset>
				<legend>Vimeo</legend>
				<?php echo smarty_function_preference(array('name'=>'vimeo_upload'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'vimeo_delete'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="vimeo_upload_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'vimeo_default_gallery'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'vimeo_consumer_key'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'vimeo_consumer_secret'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'vimeo_access_token'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'vimeo_access_token_secret'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Enhancements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo smarty_block_tabset(array('name'=>"fgal_admin"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form>
<?php }
}
