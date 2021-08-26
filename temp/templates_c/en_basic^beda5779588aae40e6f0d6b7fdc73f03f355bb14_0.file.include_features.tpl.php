<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:31:17
  from 'C:\xampp\htdocs\tikip4k\templates\admin\include_features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61266245175ee6_97457490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beda5779588aae40e6f0d6b7fdc73f03f355bb14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\admin\\include_features.tpl',
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
function content_61266245175ee6_97457490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tabset.php','function'=>'smarty_block_tabset',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tab.php','function'=>'smarty_block_tab',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.preference.php','function'=>'smarty_function_preference',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),));
?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	Please see the <a class='alert-link' target='tikihelp' href='http://doc.tiki.org/Features'>evaluation of each feature</a> on Tiki's developer site.
<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<form class="admin" id="features" name="features" action="tiki-admin.php?page=features" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>
	</div>


	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>"admin_features"));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>"admin_features"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		
		
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Global features",'key'=>'global'));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Global features",'key'=>'global'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<br>

			<fieldset>
				<legend>Main features</legend>
				<div class="admin clearfix form-group featurelist">
					<?php echo smarty_function_preference(array('name'=>'feature_wiki'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_file_galleries'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_blogs'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_articles'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_forums'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_trackers'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_calendar'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_search'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset>
				<legend>Secondary features</legend>

				<div class="admin clearfix form-group featurelist">
					<?php echo smarty_function_preference(array('name'=>'feature_categories'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_freetags'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_polls'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_quizzes'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_surveys'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_newsletters'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_shoutbox'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_minichat'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_live_support'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset>
				<legend>Administrative features</legend>
				<div class="admin clearfix form-group featurelist">
					<?php echo smarty_function_preference(array('name'=>'feature_stats'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_actionlog'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_scheduler'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_banners'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_contribution'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_copyright'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_comm'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_dynamic_content'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_perspective'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_sefurl'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_html_pages'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_htmlfeed'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_areas'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_templated_groups'),$_smarty_tpl);?>

					<legend>Watches</legend>
					<div class="adminoptionboxchild">
						<fieldset>
							<?php echo smarty_function_preference(array('name'=>'feature_user_watches'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'feature_group_watches'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'feature_daily_report_watches'),$_smarty_tpl);?>

							<div class="adminoptionboxchild" id="feature_daily_report_watches_childcontainer">
								<?php echo smarty_function_preference(array('name'=>'dailyreports_enabled_for_new_users'),$_smarty_tpl);?>

							</div>
							<?php echo smarty_function_preference(array('name'=>'feature_user_watches_translations'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'feature_user_watches_languages'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'feature_groupalert'),$_smarty_tpl);?>

						</fieldset>
					</div>
					<legend>Object Maintainers and Freshness</legend>
					<div class="adminoptionboxchild">
						<fieldset>
							<?php echo smarty_function_preference(array('name'=>'object_maintainers_enable'),$_smarty_tpl);?>

							<div class="adminoptionboxchild" id="object_maintainers_enable_childcontainer">
								<?php echo smarty_function_preference(array('name'=>'object_maintainers_default_update_frequency'),$_smarty_tpl);?>

							</div>
						</fieldset>
					</div>
				</div>
			</fieldset>

			<fieldset>
				<legend>Additional features</legend>
				<div class="admin clearfix form-group featurelist">
					<?php echo smarty_function_preference(array('name'=>'feature_sheet'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_directory'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_draw'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_draw_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'feature_draw_hide_buttons'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_draw_separate_base_image'),$_smarty_tpl);?>

						<div class="adminoptionboxchild" id="feature_draw_separate_base_image_childcontainer">
							<?php echo smarty_function_preference(array('name'=>'feature_draw_in_userfiles'),$_smarty_tpl);?>

						</div>
					</div>
					<div class="adminoptionboxchild">
						<fieldset>
							<legend>Payment and Accounting</legend>
							<?php echo smarty_function_preference(array('name'=>'feature_credits'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'feature_accounting'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'payment_feature'),$_smarty_tpl);?>

						</fieldset>
					</div>
					<div class="adminoptionboxchild">
						<fieldset>
							<legend>Mail and Sharing</legend>
							<?php echo smarty_function_preference(array('name'=>'feature_socialnetworks'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'feature_share'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'feature_webmail'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'feature_mailin'),$_smarty_tpl);?>

						</fieldset>
					</div>
					<?php echo smarty_function_preference(array('name'=>'feature_docs'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_slideshow'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_slideshow_pdfexport'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_time_sheet'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_faqs'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_galleries'),$_smarty_tpl);?>

				</div>
				<fieldset class="mb-3 w-100 clearfix featurelist">
					<legend> Progressive Web App </legend>
					<?php echo smarty_function_preference(array('name'=>'pwa_feature'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="pwa_feature_childcontainer">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning",'close'=>"n"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl'] == 'y') {?>
								Search Engine Friendly URL feature needs to be disabled.<br/>
							<?php }?>
							PWA feature requires bypassing CSRF Tokens, this represents a security issue.
						<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning",'close'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</div>
				</fieldset>
			</fieldset>

			<fieldset>
				<legend>Interaction with online services or other software</legend>
				<div class="admin clearfix featurelist">
					<?php echo smarty_function_preference(array('name'=>'connect_feature'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_kaltura'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'zotero_enabled'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="zotero_enabled_childcontainer">
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['zotero_client_key'] && $_smarty_tpl->tpl_vars['prefs']->value['zotero_client_secret'] && $_smarty_tpl->tpl_vars['prefs']->value['zotero_group_id']) {?>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'info','title'=>"Configuration completed"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'info','title'=>"Configuration completed"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><a href="<?php echo smarty_function_service(array('controller'=>'oauth','action'=>'request','provider'=>'zotero'),$_smarty_tpl);?>
">Authenticate with Zotero</a><?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'info','title'=>"Configuration completed"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php }?>
						<?php echo smarty_function_preference(array('name'=>'zotero_client_key'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'zotero_client_secret'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'zotero_group_id'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'zotero_style'),$_smarty_tpl);?>

					</div>
				</div>
			</fieldset>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Global features",'key'=>'global'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Interface",'key'=>'interface'));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Interface",'key'=>'interface'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<br>
			<fieldset class="mb-3 w-100 clearfix featurelist">
				<legend> Ajax </legend>
				<?php echo smarty_function_preference(array('name'=>'feature_ajax'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_ajax_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'ajax_autosave'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset class="mb-3 w-100 clearfix featurelist">
				<legend> jQuery plugins and add-ons </legend>
				<?php echo smarty_function_preference(array('name'=>'feature_jquery_autocomplete'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_jquery_media'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_jquery_reflection'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_jquery_superfish'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'jquery_smartmenus_enable'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="jquery_smartmenus_enable_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'jquery_smartmenus_mode'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_jquery_tooltips'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_jquery_tagcanvas'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_jquery_ui_theme'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_jquery_ui'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_jquery_validation'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_jquery_zoom'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'jquery_ui_chosen'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="jquery_ui_chosen_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'jquery_ui_chosen_sortable'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'jquery_fitvidjs'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'jquery_timeago'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'jquery_jqdoublescroll'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'tiki_prefix_css'),$_smarty_tpl);?>

				<div class="adminoptionboxchild">
					<fieldset>
						<legend>Experimental</legend>
						<?php echo smarty_function_preference(array('name'=>'feature_jquery_carousel'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_jquery_tablesorter'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'vuejs_enable'),$_smarty_tpl);?>

						<div class="adminoptionboxchild" id="vuejs_enable_childcontainer">
							<?php echo smarty_function_preference(array('name'=>'vuejs_always_load'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'vuejs_build_mode'),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'tracker_field_rules'),$_smarty_tpl);?>

						</div>
					</fieldset>
				</div>
			</fieldset>

			<fieldset class="mb-3 w-100 clearfix featurelist">
				<legend> Mobile </legend>
					<?php echo smarty_function_preference(array('name'=>'mobile_feature'),$_smarty_tpl);?>


					<div class="adminoptionboxchild" id="mobile_feature_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'mobile_perspectives'),$_smarty_tpl);?>

					</div>
			</fieldset>

		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Interface",'key'=>'interface'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Programmer",'key'=>'programmer'));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Programmer",'key'=>'programmer'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<br>
			<div class="admin clearfix featurelist">
				<?php echo smarty_function_preference(array('name'=>'feature_integrator'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_xmlrpc'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_debug_console'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_tikitests'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'disableJavascript'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'javascript_assume_enabled'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'smarty_compilation'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_webservices'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_dummy'),$_smarty_tpl);?>

			</div>

			<div class="admin clearfix featurelist">
				<fieldset>
					<legend>Logging and Reporting</legend>
					<div class="adminoptionbox">
						<?php echo smarty_function_preference(array('name'=>'error_reporting_level'),$_smarty_tpl);?>

						<div class="adminoptionboxchild">
							<?php echo smarty_function_preference(array('name'=>'error_reporting_adminonly','label'=>"Visible to admin only"),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>'smarty_notice_reporting','label'=>"Include Smarty notices"),$_smarty_tpl);?>

						</div>
					</div>

					<?php echo smarty_function_preference(array('name'=>'log_mail'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'log_sql'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="log_sql_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'log_sql_perf_min'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'log_tpl'),$_smarty_tpl);?>

				</fieldset>
			</div>

			<div class="table">
				<fieldset>
					<legend>Custom Code</legend>
					<?php echo smarty_function_preference(array('name'=>"header_custom_js"),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'smarty_security'),$_smarty_tpl);?>

				</fieldset>
			</div>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Programmer",'key'=>'programmer'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo smarty_block_tabset(array('name'=>"admin_features"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form>
<?php }
}
