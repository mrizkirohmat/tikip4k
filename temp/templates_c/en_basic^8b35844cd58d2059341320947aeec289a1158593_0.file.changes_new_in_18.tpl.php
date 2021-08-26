<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:37:12
  from 'C:\xampp\htdocs\tikip4k\templates\wizard\changes_new_in_18.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612663a8652d03_99526103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b35844cd58d2059341320947aeec289a1158593' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\wizard\\changes_new_in_18.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612663a8652d03_99526103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.preference.php','function'=>'smarty_function_preference',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),));
?>


<div class="media">
	<div class="mr-4">
	<span class="float-left fa-stack fa-lg margin-right-18em" alt="Changes Wizard" title="Changes Wizard">
		<i class="fas fa-arrow-circle-up fa-stack-2x"></i>
		<i class="fas fa-flip-horizontal fa-magic fa-stack-1x ml-4 mt-4"></i>
	</span>
	</div>
	<br/><br/><br/>
	<div class="media-body">
		Main new and improved features and settings in Tiki 18.
		<a href="https://doc.tiki.org/Tiki18" target="tikihelp" class="tikihelp text-info" title="Tiki18:
			This is an LTS version.
			As it is a Long-Term Support (LTS) version, it will be supported for 5 years.
			Many libraries have been upgraded.
			<br/><br/>
			Click to read more
		">
			<?php echo smarty_function_icon(array('name'=>"help",'size'=>1),$_smarty_tpl);?>

		</a>
		<fieldset class="mb-3 w-100 clearfix featurelist">
			<legend>New Features</legend>
			<div class="adminoption form-group row">
				<label class="col-sm-3 col-form-label"><b>Control Panels</b>:</label>
				<div class="offset-sm-1 col-sm-11">
					<?php echo smarty_function_icon(array('name'=>"admin_packages",'size'=>2,'iclass'=>"float-left"),$_smarty_tpl);?>

					Composer Web Install (<b>Packages</b>).
					<a href="https://doc.tiki.org/Packages">More Information...</a><br/><br/>
				</div>
				<label class="col-sm-3 col-form-label"><b>Style guide tool</b>:</label>
				<div class="offset-sm-1 col-sm-9">
					<?php echo smarty_function_icon(array('name'=>"admin_look",'size'=>2,'iclass'=>"float-left"),$_smarty_tpl);?>

					Look and feel colors can be customized with a style guide tool.
					<a href="https://doc.tiki.org/Style-Guide">More Information...</a><br/><br/>
				</div>
			</div>
			<div class="adminoption form-group row">
			</div>
			<?php echo smarty_function_preference(array('name'=>'sitemap_enable'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_sefurl_routes'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'fallbackBaseUrl'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wiki_make_ordered_list_items_display_unique_numbers'),$_smarty_tpl);?>

		</fieldset>
		<fieldset class="mb-3 w-100 clearfix featurelist">
			<legend>New Wiki Plugins</legend>
			<?php echo smarty_function_preference(array('name'=>'wikiplugin_pdfpage'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_preview'),$_smarty_tpl);?>

		</fieldset>
		<fieldset class="mb-3 w-100 clearfix featurelist">
			<legend>Improved Plugins</legend>
			<?php echo smarty_function_preference(array('name'=>'wikiplugin_img'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_list'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_listexecute'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_pdf'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_pivottable'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_trackercalendar'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_trackerlist'),$_smarty_tpl);?>

		</fieldset>
		<fieldset class="mb-3 w-100 clearfix featurelist">
			<legend>PDF from URL: mPDF new settings</legend>
			<?php echo smarty_function_preference(array('name'=>'print_pdf_from_url'),$_smarty_tpl);?>

			<div class="adminoptionboxchild print_pdf_from_url_childcontainer mpdf">
				<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_pagetitle'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_hyperlinks'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_columns'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_watermark'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_watermark_image'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_background'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_background_image'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_coverpage_text_settings'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_coverpage_image_settings'),$_smarty_tpl);?>

			</div>
		</fieldset>
		<fieldset class="mb-3 w-100 clearfix featurelist">
			<legend>Other Extended Features</legend>
			<div class="adminoption form-group row">
				<label class="col-sm-3 col-form-label"><b>Control Panels</b>:</label>
				<div class="offset-sm-1 col-sm-11">
					<?php echo smarty_function_icon(array('name'=>"admin_rtc",'size'=>2,'iclass'=>"float-left"),$_smarty_tpl);?>

					Real-time collaboration tools (<b>RTC</b>).
					<a href="https://doc.tiki.org/RTC">More Information...</a><br/><br/>
				</div>
				<label class="col-sm-3 col-form-label"><b>Console</b>:</label>
				<div class="offset-sm-1 col-sm-11">
					<?php echo smarty_function_icon(array('name'=>"terminal",'size'=>2,'iclass'=>"float-left"),$_smarty_tpl);?>

					New actions can be performed.
					<a href="https://doc.tiki.org/Console">More Information...</a><br/><br/>
				</div>
				<label class="col-sm-3 col-form-label"><b>Menus</b>:</label>
				<div class="offset-sm-1 col-sm-11">
					<?php echo smarty_function_icon(array('name'=>"navicon",'size'=>2,'iclass'=>"float-left"),$_smarty_tpl);?>

					Drag and drop added to menu management.
					<a href="https://doc.tiki.org/Menu#Drag_and_drop">More Information...</a><br/><br/>
				</div>
				<label class="col-sm-3 col-form-label"><b>Profiles</b>:</label>
				<div class="offset-sm-1 col-sm-9">
					<?php echo smarty_function_icon(array('name'=>"admin_profiles",'size'=>2,'iclass'=>"float-left"),$_smarty_tpl);?>

					Dry-run/Preview and Selective Rollback were added, as well as new options to allow exporting files and tracker items.
					<a href="https://doc.tiki.org/Tiki18#Profiles">More Information...</a><br/><br/>
				</div>
				<label class="col-sm-3 col-form-label"><b>Search</b>:</label>
				<div class="offset-sm-1 col-sm-9">
					<?php echo smarty_function_icon(array('name'=>"admin_search",'size'=>2,'iclass'=>"float-left"),$_smarty_tpl);?>

					Calendars and Calendar Items will now appear in search results of the unified search index.
					<a href="https://doc.tiki.org/Tiki18#Search">More Information...</a><br/><br/>
				</div>
			</div>
			
			<?php echo smarty_function_preference(array('name'=>'feature_trackers'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_trackers_childcontainer">
				<legend>General</legend>
				<div class="col-sm-12">
					Certain tracker fields can be converted keeping options
					<a href="https://doc.tiki.org/Tiki18#Trackers">More Information...</a><br/><br/>
				</div>
				<legend>New Fields</legend>
				<?php echo smarty_function_preference(array('name'=>'trackerfield_calendaritem'),$_smarty_tpl);?>
<br/>
				<legend>Improved Fields</legend>
				<?php echo smarty_function_preference(array('name'=>'trackerfield_relation'),$_smarty_tpl);?>
<br/>
			</div>
			<?php echo smarty_function_preference(array('name'=>'ids_enabled'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="ids_enabled_childcontainer">
				<div class="form-group adminoptionbox clearfix">
					<div class="offset-sm-4 col-sm-8">
						<a href="tiki-admin_ids.php">Admin IDS custom rules</a>
					</div>
				</div>
				<?php echo smarty_function_preference(array('name'=>'ids_custom_rules_file'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'ids_mode'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'ids_threshold'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'ids_log_to_file'),$_smarty_tpl);?>

				
			</div>
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
		<fieldset class="mb-3 w-100 clearfix featurelist">
			<legend><?php echo smarty_function_icon(array('name'=>"admin_profiles",'size'=>2,'iclass'=>"float-left"),$_smarty_tpl);?>
New Profiles</legend>
			<ul>
				<li>Activity_Stream
					<a href="https://profiles.tiki.org/Activity_Stream" target="tikihelp" class="tikihelp" title="Activity_Stream:
						Click to read more"><?php echo smarty_function_icon(array('name'=>"help",'size'=>1),$_smarty_tpl);?>

					</a>
				</li><li>Simple_Forum
					<a href="https://profiles.tiki.org/Simple_Forum" target="tikihelp" class="tikihelp" title="Simple_Forum:
						Click to read more"><?php echo smarty_function_icon(array('name'=>"help",'size'=>1),$_smarty_tpl);?>

					</a>
				</li>
				<li>Timesheets_Tracker
					<a href="https://profiles.tiki.org/Timesheets_Tracker" target="tikihelp" class="tikihelp" title="Timesheets_Tracker:
						Click to read more"><?php echo smarty_function_icon(array('name'=>"help",'size'=>1),$_smarty_tpl);?>

					</a>
				</li>
				<li>User_Profile_Business
					<a href="https://profiles.tiki.org/User_Profile_Business" target="tikihelp" class="tikihelp" title="User_Profile_Business:
						Click to read more"><?php echo smarty_function_icon(array('name'=>"help",'size'=>1),$_smarty_tpl);?>

					</a>
				</li>
			</ul>
		</fieldset>
		<i>See the full list of changes.</i>
		<a href="https://doc.tiki.org/Tiki18" target="tikihelp" class="tikihelp" title="Tiki18:
			Click to read more
		">
			<?php echo smarty_function_icon(array('name'=>"help",'size'=>1),$_smarty_tpl);?>

		</a>
	</div>
</div>
<?php }
}
