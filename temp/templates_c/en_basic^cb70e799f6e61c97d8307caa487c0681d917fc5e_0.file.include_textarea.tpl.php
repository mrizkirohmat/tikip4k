<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:39:02
  from 'C:\xampp\htdocs\tikip4k\templates\admin\include_textarea.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612664162b05c5_67194905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb70e799f6e61c97d8307caa487c0681d917fc5e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\admin\\include_textarea.tpl',
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
function content_612664162b05c5_67194905 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tabset.php','function'=>'smarty_block_tabset',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tab.php','function'=>'smarty_block_tab',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.help.php','function'=>'smarty_function_help',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.preference.php','function'=>'smarty_function_preference',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.listfilter.php','function'=>'smarty_function_listfilter',),9=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.bootstrap_modal.php','function'=>'smarty_function_bootstrap_modal',),10=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.norecords.php','function'=>'smarty_function_norecords',),11=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	Text area (that apply throughout many features)
<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<form action="tiki-admin.php?page=textarea" method="post" class="admin">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>


	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>
	</div>

	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>"admin_textarea"));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>"admin_textarea"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"General Settings"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"General Settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<br>
			<fieldset>
				<legend>Features<?php echo smarty_function_help(array('url'=>"Text+Area"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_fullscreen'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_filegals_manager'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_dynamic_content'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_replace'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_syntax_highlighter'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_syntax_highlighter_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_syntax_highlighter_theme'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_wysiwyg'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'ajax_autosave'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Wiki syntax<?php echo smarty_function_help(array('url'=>"Wiki-syntax"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_smileys'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_paragraph_formatting'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_wiki_paragraph_formatting_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_wiki_paragraph_formatting_add_br'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'section_comments_parse'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_monosp'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_tables'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_argvariable'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_dynvar_style'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_dynvar_multilingual'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_make_ordered_list_items_display_unique_numbers'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_absolute_to_relative_links'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Typography</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_typo_enable'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_typo_enable_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_typo_quotes'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_typo_approximative_quotes'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_typo_dashes_and_ellipses'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_typo_nobreak_spaces'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset class="mb-4 featurelist">
				<legend>Plugins</legend>
				<?php echo smarty_function_preference(array('name'=>'wikiplugin_showreference'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_addreference'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_alink'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_aname'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_box'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_button'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_center'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_code'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_countdown'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_div'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_dl'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_fade'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_fancylist'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_fancytable'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_font'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_footnote'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_footnotearea'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_gauge'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_html'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_iframe'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_include'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_mono'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_mouseover'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_mwtable'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_now'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_quote'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_remarksbox'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_scroll'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_slider'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_sort'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_split'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_sup'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_sub'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_tabs'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_tag'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_toc'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_versions'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_showpref'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_casperjs'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Miscellaneous</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_purifier'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_autolinks'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_hotwords'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_hotwords_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_hotwords_nw'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_hotwords_sep'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_use_quoteplugin'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_use_three_colon_centertag'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_simplebox_delim'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'mail_template_custom_text'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Default size</legend>
				<?php echo smarty_function_preference(array('name'=>'default_rows_textarea_wiki'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'default_rows_textarea_comment'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'default_rows_textarea_forum'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'default_rows_textarea_forumthread'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>External links and images</legend>
				<?php echo smarty_function_preference(array('name'=>'cachepages'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'cacheimages'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_ext_icon'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_ext_rel_nofollow'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'popupLinks'),$_smarty_tpl);?>

				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'tip','title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					External links will be identified with: <?php echo smarty_function_icon(array('name'=>"link-external"),$_smarty_tpl);?>

				<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php echo smarty_function_preference(array('name'=>'allowImageLazyLoad'),$_smarty_tpl);?>

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
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"About plugins"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"About plugins"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Tiki plugins add functionality to wiki pages, articles, blogs, and so on. You can enable and disable them below.
			You can approve plugin use at <a href="tiki-plugins.php" class="alert-link">tiki-plugins.php</a>.
			The edit-plugin icon is an easy way for users to edit the parameters of each plugin in wiki pages. It can be disabled for individual plugins below.
			<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"About plugins"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php if (!(isset($_smarty_tpl->tpl_vars['disabled']->value))) {?>
				<?php echo smarty_function_button(array('href'=>"?page=textarea&disabled=y",'_text'=>"Check disabled plugins used in wiki pages"),$_smarty_tpl);?>

				<br><br>
			<?php } else { ?>
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'errors','title'=>"Disabled used plugins"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Disabled used plugins"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php if (empty($_smarty_tpl->tpl_vars['disabled']->value)) {?>
						None
					<?php } else { ?>
						<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['disabled']->value), 'plugin');
$_smarty_tpl->tpl_vars['plugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->do_else = false;
?>
							<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( mb_strtolower($_smarty_tpl->tpl_vars['plugin']->value, 'UTF-8') ));?>
</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					<?php }?>
				<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Disabled used plugins"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php }?>

			<fieldset class="mb-5">
				<legend>Plugin preferences</legend>
				<?php echo smarty_function_preference(array('name'=>'profile_autoapprove_wikiplugins'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikipluginprefs_pending_notification'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'image_responsive_class'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_maximum_passes'),$_smarty_tpl);?>

			</fieldset>

			<fieldset class="mb-5">
				<legend>Edit plugin icons</legend>
				<?php echo smarty_function_preference(array('name'=>'wiki_edit_plugin'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="wiki_edit_plugin_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'wiki_edit_icons_toggle'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'wikiplugin_list_gui'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_list_convert_trackerlist'),$_smarty_tpl);?>

			</fieldset>

			<fieldset class="mb-5" id="plugins">
				<legend>Plugins</legend>
				<fieldset class="mb-5 donthide">
					<?php echo smarty_function_preference(array('name'=>'unified_search_textarea_admin'),$_smarty_tpl);?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['unified_search_textarea_admin'] == 'y') {?>
						<label for="pluginfilter" class="col-sm-4 col-form-label">Filter:</label>
						<div class="col-sm-8">
							<input type="text" id="pluginfilter" class="form-control">
						</div>
					<?php } else { ?>
						<?php echo smarty_function_listfilter(array('selectors'=>'#plugins > fieldset','exclude'=>".donthide"),$_smarty_tpl);?>

					<?php }?>
				</fieldset>
				<div id="pluginlist">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['unified_search_textarea_admin'] == 'y') {?>
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'tip','title'=>'Plugin List'));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'tip','title'=>'Plugin List'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						Use the filter input above to find plugins, or enter return to see the whole list
						<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'search','action'=>'help'),$_smarty_tpl);?>
" class="alert-link">Search Help <?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
					<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'tip','title'=>'Plugin List'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['unified_search_textarea_admin'] == 'y') {?><noscript><?php }?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugins']->value, 'info', false, 'plugin');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
						<fieldset class="mb-5">
							<legend>
								<?php if ($_smarty_tpl->tpl_vars['info']->value['iconname']) {
echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['info']->value['iconname']),$_smarty_tpl);
} else {
echo smarty_function_icon(array('name'=>'plugin'),$_smarty_tpl);
}?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['name'] ));?>

							</legend>
							<div class="adminoptionbox">
								<strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value ));?>
</strong>: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['info']->value['description'])===null||$tmp==='' ? '' : $tmp) ));?>

								<?php echo smarty_function_help(array('url'=>"Plugin".((string)$_smarty_tpl->tpl_vars['plugin']->value)),$_smarty_tpl);?>

							</div>
							<?php $_smarty_tpl->_assignInScope('pref', "wikiplugin_".((string)$_smarty_tpl->tpl_vars['plugin']->value));?>
							<?php if (in_array($_smarty_tpl->tpl_vars['pref']->value,$_smarty_tpl->tpl_vars['info']->value['prefs'])) {?>
								<?php $_smarty_tpl->_assignInScope('pref', "wikiplugin_".((string)$_smarty_tpl->tpl_vars['plugin']->value));?>
								<?php $_smarty_tpl->_assignInScope('pref_inline', "wikiplugininline_".((string)$_smarty_tpl->tpl_vars['plugin']->value));?>
								<?php echo smarty_function_preference(array('name'=>$_smarty_tpl->tpl_vars['pref']->value,'label'=>"Enable"),$_smarty_tpl);?>

								<?php echo smarty_function_preference(array('name'=>$_smarty_tpl->tpl_vars['pref_inline']->value,'label'=>"Disable edit plugin icon (make plugin inline)"),$_smarty_tpl);?>

							<?php }?>
						</fieldset>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['unified_search_textarea_admin'] == 'y') {?></noscript><?php }?>
			</fieldset>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Plugins"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>'Plugin Aliases','key'=>'plugin_alias'));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>'Plugin Aliases','key'=>'plugin_alias'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<br>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"About plugin aliases"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"About plugin aliases"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				Tiki plugin aliases allow you to define your own custom configurations of existing plugins.<br>
				Find out more here:<?php echo smarty_function_help(array('url'=>"Plugin+Alias"),$_smarty_tpl);?>

			<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"About plugin aliases"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] != 'y') {?>
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					This page is designed to work with JavaScript
				<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php }?>

			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>'plugin_alias'));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>'plugin_alias'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>'Available alias'));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>'Available alias'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<fieldset id="pluginalias_available">
						<legend>
							<strong>Available alias</strong>
						</legend>
						<div class="input_submit_container">
							<table class="table table-striped">
								<tr>
									<th></th>
									<th>Plugin Alias</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugins_alias']->value, 'name');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
									<tr>
										<td>
											<input type="checkbox" name="enabled[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
" <?php if ($_smarty_tpl->tpl_vars['prefs']->value[('wikiplugin_').($_smarty_tpl->tpl_vars['name']->value)] == 'y') {?>checked="checked"<?php }?>>
										</td>
										<td>
											<a href="tiki-admin.php?page=textarea&amp;plugin_alias=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
</a>
										</td>
										<td>
											<?php echo smarty_function_icon(array('name'=>'pencil','href'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ('tiki-admin.php?page=textarea&plugin_alias=').($_smarty_tpl->tpl_vars['name']->value) ))),$_smarty_tpl);?>

										</td>
										<td>
											
											<button type="submit" name="alias_delete" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
" class="btn btn-link text-danger" style="cursor: pointer">
												<?php echo smarty_function_icon(array('name'=>'delete'),$_smarty_tpl);?>

											</button>
										</td>
									</tr>
								<?php
}
if ($_smarty_tpl->tpl_vars['name']->do_else) {
?>
									<?php echo smarty_function_norecords(array('_colspan'=>4),$_smarty_tpl);?>

								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</table>
							<div class="submit">
								<?php if (!empty($_REQUEST['plugin_alias'])) {?>
									<?php echo smarty_function_button(array('name'=>'add','id'=>'pluginalias_add','_text'=>'Create','_class'=>'btn btn-info','_script'=>'tiki-admin.php?page=textarea&new_alias'),$_smarty_tpl);?>

								<?php }?>
								<?php if ((isset($_REQUEST['new_alias']))) {?>
									<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$("a[href='#contentplugin_alias-2']").tab("show");<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
								<?php }?>
								<input type="submit" class="btn btn-primary" name="enable" value="Enable Checked Plugins">
							</div>
						</div>
					</fieldset>
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$('#pluginalias_available legend').trigger('click');<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>'Available alias'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php if (!empty($_REQUEST['plugin_alias'])) {?>
					<?php $_smarty_tpl->_assignInScope('tabname', 'Edit Alias');?>
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$("a[href='#contentplugin_alias-2']").tab("show");<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('tabname', 'Create Alias');?>
					<?php if (!(isset($_REQUEST['new_alias']))) {?>
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$("a[href='#contentplugin_alias-1']").tab("show");<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php }?>
				<?php }?>
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>$_smarty_tpl->tpl_vars['tabname']->value));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>$_smarty_tpl->tpl_vars['tabname']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<fieldset id="pluginalias_general">
						<legend>
							General information 
						</legend>

						<div class="form-group row">
							<label class="col-form-label col-sm-4" for="plugin_alias">
								Plugin name
							</label>
							<div class="col-sm-8">
								<?php if (!empty($_REQUEST['plugin_alias'])) {?>
									<input type="hidden" class="form-control" name="plugin_alias" id="plugin_alias" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin_admin']->value['plugin_name'] ));?>
">
									<strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin_admin']->value['plugin_name'] ));?>
</strong>
								<?php } else { ?>
									<input type="text" class="form-control" name="plugin_alias" id="plugin_alias">
								<?php }?>
							</div>
						</div><br>
						<div class="form-group row">
							<label class="col-form-label col-sm-4" for="implementation">
								Base plugin
							</label>
							<div class="col-sm-8">
								<select class="form-control" name="implementation" id="implementation">
									<option></option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugins_real']->value, 'base');
$_smarty_tpl->tpl_vars['base']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['base']->value) {
$_smarty_tpl->tpl_vars['base']->do_else = false;
?>
										<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['base']->value ));?>
" <?php if ((isset($_smarty_tpl->tpl_vars['plugin_admin']->value['implementation'])) && $_smarty_tpl->tpl_vars['plugin_admin']->value['implementation'] == $_smarty_tpl->tpl_vars['base']->value) {?>selected="selected"<?php }?>>
											<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['base']->value ));?>

										</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
						</div><br>
						<div class="form-group row">
							<label class="col-form-label col-sm-4" for="plugin_name">
								Name
							</label>
							<div class="col-sm-8">
								<input class="form-control" type="text" name="name" id="plugin_name" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['plugin_admin']->value['description']['name'])===null||$tmp==='' ? '' : $tmp) ));?>
">
							</div>
						</div><br>
						<div class="form-group row">
							<label class="col-form-label col-sm-4" for="plugin_description">
								Description
							</label>
							<div class="col-sm-8">
								<input class="form-control" type="text" name="description" id="plugin_description" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['plugin_admin']->value['description']['description'])===null||$tmp==='' ? '' : $tmp) ));?>
">
							</div>
						</div><br>
						<div class="form-group row">
							<label class="col-form-label col-sm-4" for="plugin_body">
								Body label
							</label>
							<div class="col-sm-8">
								<input class="form-control" type="text" name="body" id="plugin_body" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['plugin_admin']->value['description']['body'])===null||$tmp==='' ? '' : $tmp) ));?>
">
							</div>
						</div><br>
						<div class="form-group row">
							<label class="col-form-label col-sm-4" for="plugin_deps">
								Dependencies
							</label>
							<div class="col-sm-8">
								<input class="form-control" type="text" name="prefs" id="plugin_deps" value="<?php if (!empty($_smarty_tpl->tpl_vars['plugin_admin']->value['description']['prefs'])) {
echo implode(',',$_smarty_tpl->tpl_vars['plugin_admin']->value['description']['prefs']);
}?>">
							</div>
						</div><br>
						<div class="form-group row">
							<label class="col-form-label col-sm-4" for="filter">
								Filter
							</label>
							<div class="col-sm-8">
								<input class="form-control" type="text" id="filter" name="filter" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['plugin_admin']->value['description']['filter'])===null||$tmp==='' ? 'xss' : $tmp) ));?>
">
							</div>
						</div><br>
						<div class="form-group row">
							<label class="col-form-label col-sm-4" for="validate">
								Validation
							</label>
							<div class="col-sm-8">
								<select class="form-control" name="validate" id="validate">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array('none','all','body','arguments'), 'val');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
										<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value ));?>
" <?php if (!empty($_smarty_tpl->tpl_vars['plugin_admin']->value['description']['validate']) && $_smarty_tpl->tpl_vars['plugin_admin']->value['description']['validate'] == $_smarty_tpl->tpl_vars['val']->value) {?>selected="selected"<?php }?>>
											<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value ));?>

										</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
						</div><br>
						<div class="form-group row">
							<label class="col-sm-4" for="inline">Inline (no plugin edit UI)</label>
							<div class="col-sm-8">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="inline" name="inline" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['plugin_admin']->value['description']['inline'])) {?>checked="checked"<?php }?>>
								</div>
							</div>
						</div><br>
					</fieldset><br>

					<fieldset id="pluginalias_simple_args">
						<legend>
							Simple plugin arguments <?php echo smarty_function_icon(array('name'=>"add",'class'=>'add-param text-success tips','title'=>'|Add parameter'),$_smarty_tpl);?>

						</legend>
						<div class="form-group row">
							<label class="col-form-label col-sm-6">
								Argument
							</label>
							<label class="col-form-label col-sm-6">
								Default
							</label>
						</div>
						<?php if (!empty($_smarty_tpl->tpl_vars['plugin_admin']->value['params'])) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugin_admin']->value['params'], 'value', false, 'token');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['token']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
								<?php if (!is_array($_smarty_tpl->tpl_vars['value']->value)) {?>
									<div class="form-group row param">
										<div class="col-sm-6">
											<input class="form-control sparam-name" type="text" name="sparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][token]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
">
										</div>
										<div class="col-sm-5">
											<input class="form-control sparam-default" type="text" name="sparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][default]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value ));?>
">
										</div>
										<div class="col-sm-1">
											<?php echo smarty_function_icon(array('name'=>'delete','class'=>'text-danger delete-param tips btn btn-link','title'=>'|Delete this parameter'),$_smarty_tpl);?>

										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['token']->value == '__NEW__') {?>
									<div class="form-group row d-none param">
										<div class="col-sm-6">
											<input class="form-control sparam-name" type="text" name="sparams[__NEW__][token]" value="" placeholder="Name">
										</div>
										<div class="col-sm-5">
											<input class="form-control sparam-default" type="text" name="sparams[__NEW__][default]" value="" placeholder="Default Value">
										</div>
										<div class="col-sm-1">
											<?php echo smarty_function_icon(array('name'=>'delete','class'=>'text-danger delete-param tips btn btn-link','title'=>'|Delete this parameter'),$_smarty_tpl);?>

										</div>
									</div>
								<?php }?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					</fieldset>

					<fieldset id="pluginalias_doc">
						<legend>
							Plugin parameter documentation <?php echo smarty_function_icon(array('name'=>"add",'class'=>'add-param text-success tips','title'=>'|Add parameter documentation'),$_smarty_tpl);?>

						</legend>

						<?php if (!empty($_smarty_tpl->tpl_vars['plugin_admin']->value['description']['params'])) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugin_admin']->value['description']['params'], 'detail', false, 'token');
$_smarty_tpl->tpl_vars['detail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['token']->value => $_smarty_tpl->tpl_vars['detail']->value) {
$_smarty_tpl->tpl_vars['detail']->do_else = false;
?>
								<div class="clearfix param<?php if ($_smarty_tpl->tpl_vars['token']->value == '__NEW__') {?> d-none<?php }?>">
									<div class="form-group row">
										<label class="col-form-label col-sm-4" for="input[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][token]">
											Parameter
										</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" name="input[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][token]" id="input[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][token]" value="<?php if ($_smarty_tpl->tpl_vars['token']->value != '__NEW__') {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));
}?>">
										</div>
										<div class="col-sm-1">
											<?php echo smarty_function_icon(array('name'=>'delete','class'=>'text-danger delete-param tips btn btn-link','title'=>"|Delete this parameter's documentation"),$_smarty_tpl);?>

										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-sm-4" for="input[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][name]">
											Name
										</label>
										<div class="col-sm-8">
											<input class="form-control" type="text" name="input[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][name]" id="input[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][name]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['detail']->value['name'] ));?>
">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-sm-4" for="input[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][description]">
											Description
										</label>
										<div class="col-sm-8">
											<input class="form-control" type="text" name="input[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][description]" id="input[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][description]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['detail']->value['description'] ));?>
">
										</div>
									</div>
									<div class="form-group row">
										<div class=" col-sm-2 offset-sm-4">
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" name="input[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][required]" id="input[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][required]" value="y"<?php if ($_smarty_tpl->tpl_vars['detail']->value['required']) {?> checked="checked"<?php }?>>
												<label class="col-form-label" for="input[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][required]">
													Required
												</label>
											</div>
										</div>
										<div class=" col-sm-2">
											<div class="form-check form-check-inline col-sm-2">
												<input class="form-check-input" type="checkbox" name="input[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][safe]" id="input[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][safe]" value="y"<?php if ($_smarty_tpl->tpl_vars['detail']->value['safe']) {?> checked="checked"<?php }?>>
												<label class="col-form-label" for="input[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][safe]">
													Safe
												</label>
											</div>
										</div>
										<label class="col-form-label col-sm-1" for="input[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][filter]">
											Filter
										</label>
										<div class="col-sm-3">
											<input class="form-control" type="text" name="input[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][filter]" id="input[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][filter]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['filter'])===null||$tmp==='' ? 'xss' : $tmp) ));?>
">
										</div>
									</div>
									<hr>
								</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					</fieldset><br>

					<div id="pluginalias_body">
						<fieldset>
							<legend>
								Plugin body 
							</legend>

							<div class="form-group row">
								<label class="col-sm-4" for="ignorebody">
									Ignore user input
								</label>
								<div class="col-sm-8">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="ignorebody" id="ignorebody" value="y"<?php if (!empty($_smarty_tpl->tpl_vars['plugin_admin']->value['body']['input']) && $_smarty_tpl->tpl_vars['plugin_admin']->value['body']['input'] == 'ignore') {?> checked="checked"<?php }?>/>
									</div>
								</div>
							</div>
							<div class=" form-group row">
								<label class="col-form-label col-sm-4" for="defaultbody">Default content</label>
								<div class="col-sm-8">
									<textarea class="form-control" cols="60" rows="12" id="defaultbody" name="defaultbody"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_smarty_tpl->tpl_vars['plugin_admin']->value['body']['default'])===null||$tmp==='' ? '' : $tmp) ));?>
</textarea>
								</div>
							</div>
							<fieldset>
								<legend>
									Body Parameters <?php echo smarty_function_icon(array('name'=>"add",'class'=>'add-param text-success tips','title'=>'|Add body parameter'),$_smarty_tpl);?>

								</legend>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugin_admin']->value['body']['params'], 'detail', false, 'token');
$_smarty_tpl->tpl_vars['detail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['token']->value => $_smarty_tpl->tpl_vars['detail']->value) {
$_smarty_tpl->tpl_vars['detail']->do_else = false;
?>
									<div class="clearfix param<?php if ($_smarty_tpl->tpl_vars['token']->value == '__NEW__') {?> d-none<?php }?>">
										<div class="form-group row">
											<label class="col-form-label col-sm-6" for="bodyparam[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][token]">
												Parameter
											</label>
											<div class="col-sm-5">
												<input class="form-control" type="text" name="bodyparam[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][token]" id="bodyparam[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][token]" value="<?php if ($_smarty_tpl->tpl_vars['token']->value != '__NEW__') {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));
}?>">
											</div>
											<div class="col-sm-1">
												<?php echo smarty_function_icon(array('name'=>'delete','class'=>'text-danger delete-param tips btn btn-link','title'=>"|Delete this body parameter"),$_smarty_tpl);?>

											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-sm-6" for="bodyparam[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][encoding]">
												Encoding
											</label>
											<div class="col-sm-6">
												<select class="form-control" name="bodyparam[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][encoding]" id="bodyparam[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][encoding]">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array('none','html','url'), 'val');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
														<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value ));?>
" <?php if ($_smarty_tpl->tpl_vars['detail']->value['encoding'] == $_smarty_tpl->tpl_vars['val']->value) {?>selected="selected"<?php }?>>
															<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value ));?>

														</option>
													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-sm-6" for="bodyparam[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][input]">
												Argument source (if different)
											</label>
											<div class="col-sm-6">
												<input class="form-control" type="text" name="bodyparam[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][input]" id="bodyparam[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][input]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['detail']->value['input'] ));?>
">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-sm-6" for="bodyparam[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][default]">
												Default value
											</label>
											<div class="col-sm-6">
												<input class="form-control" type="text" name="bodyparam[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][default]" id="bodyparam[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][default]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['detail']->value['default'] ));?>
">
											</div>
										</div>
										<hr>
									</div>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</fieldset>
						</fieldset>
					</div><br><br>

					<fieldset id="pluginalias_composed_args">
						<legend>
							Composed plugin arguments <?php echo smarty_function_icon(array('name'=>"add",'class'=>'add-param text-success tips','title'=>'|Add composed parameter'),$_smarty_tpl);?>

						</legend>

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugin_admin']->value['params'], 'detail', false, 'token');
$_smarty_tpl->tpl_vars['detail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['token']->value => $_smarty_tpl->tpl_vars['detail']->value) {
$_smarty_tpl->tpl_vars['detail']->do_else = false;
?>
							<?php if (is_array($_smarty_tpl->tpl_vars['detail']->value)) {?>
								<?php if (!(isset($_smarty_tpl->tpl_vars['composed_args']->value))) {
$_smarty_tpl->_assignInScope('composed_args', true);
}?>
								<div class="clearfix param<?php if ($_smarty_tpl->tpl_vars['token']->value == '__NEW__') {?> d-none<?php }?>">
									<div class="form-group row">
										<label class="col-form-label col-sm-4" for="cparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][token]">
											Parameter
										</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" name="cparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][token]" id="cparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][token]" value="<?php if ($_smarty_tpl->tpl_vars['token']->value != '__NEW__') {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));
}?>">
										</div>
										<div class="col-sm-1">
											<?php echo smarty_function_icon(array('name'=>'delete','class'=>'text-danger delete-param tips btn btn-link','title'=>"|Delete this composed argument"),$_smarty_tpl);?>

										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-sm-4" for="cparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][pattern]">
											Pattern
										</label>
										<div class="col-sm-8">
											<input class="form-control" type="text" name="cparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][pattern]" id="cparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][pattern]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['detail']->value['pattern'] ));?>
">
										</div>
									</div>
									<fieldset class="ml-5">
										<legend class="h4">
											Composed parameters <?php echo smarty_function_icon(array('name'=>"add",'class'=>'add-param text-success tips','title'=>'|Add composed parameter'),$_smarty_tpl);?>

										</legend>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['detail']->value['params'], 'd', false, 't');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
											<div class="clearfix param<?php if ($_smarty_tpl->tpl_vars['t']->value == '__NEW__') {?> d-none<?php }?>">
												<div class="form-group row">
													<label class="col-form-label col-sm-6" for="cparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][params][<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value ));?>
][token]">
														Parameter
													</label>
													<div class="col-sm-5">
														<input class="form-control" type="text" name="cparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][params][<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value ));?>
][token]" id="cparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][params][<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value ));?>
][token]" value="<?php if ($_smarty_tpl->tpl_vars['t']->value != '__NEW__') {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value ));
}?>">
													</div>
													<div class="col-sm-1">
														<?php echo smarty_function_icon(array('name'=>'delete','class'=>'text-danger delete-param tips btn btn-link','title'=>"|Delete this composed parameter"),$_smarty_tpl);?>

													</div>
												</div>
												<div class="form-group row">
													<label class="col-form-label col-sm-6" for="cparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][pattern]">
														Encoding
													</label>
													<div class="col-sm-6">
														<select class="form-control" name="cparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][params][<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value ));?>
][encoding]" id="cparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][pattern]">
															<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array('none','html','url'), 'val');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
																<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value ));?>
" <?php if ($_smarty_tpl->tpl_vars['d']->value['encoding'] == $_smarty_tpl->tpl_vars['val']->value) {?>selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value ));?>
</option>
															<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-form-label col-sm-6" for="cparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][params][<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value ));?>
][input]">
														Argument source (if different):
													</label>
													<div class="col-sm-6">
														<input class="form-control" type="text" name="cparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][params][<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value ));?>
][input]" id="cparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][params][<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value ));?>
][input]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['d']->value['input'] ));?>
"/>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-form-label col-sm-6" for="cparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][params][<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value ));?>
][input]">
														Default value
													</label>
													<div class="col-sm-6">
														<input class="form-control" type="text" name="cparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][params][<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value ));?>
][default]" id="cparams[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value ));?>
][params][<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value ));?>
][input]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['d']->value['default'] ));?>
"/>
													</div>
												</div>
												<hr>
											</div>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</fieldset>
								</div>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</fieldset>
				<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>$_smarty_tpl->tpl_vars['tabname']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php $_block_repeat=false;
echo smarty_block_tabset(array('name'=>'plugin_alias'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>'Plugin Aliases','key'=>'plugin_alias'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo smarty_block_tabset(array('name'=>"admin_textarea"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form>
<?php }
}
