<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:42:08
  from 'C:\xampp\htdocs\tikip4k\templates\admin\include_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612656c053d7c5_68896143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eeda11f6a2244e27898d801b154811a4c9eb4a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\admin\\include_user.tpl',
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
function content_612656c053d7c5_68896143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.permission_link.php','function'=>'smarty_function_permission_link',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tabset.php','function'=>'smarty_block_tabset',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tab.php','function'=>'smarty_block_tab',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.help.php','function'=>'smarty_function_help',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.preference.php','function'=>'smarty_function_preference',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),));
?>

<form action="tiki-admin.php?page=user" class="admin" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="t_navbar mb-4 clearfix">
		<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php",'_type'=>"text",'_class'=>"btn btn-link tips",'_icon_name'=>"group",'_text'=>"Groups",'_title'=>":Group Administration"),$_smarty_tpl);?>

		<?php echo smarty_function_button(array('href'=>"tiki-adminusers.php",'_type'=>"text",'_class'=>"btn btn-link tips",'_icon_name'=>"user",'_text'=>"Users",'_title'=>":User Administration"),$_smarty_tpl);?>

		<?php echo smarty_function_permission_link(array('mode'=>'text','label'=>"Permissions"),$_smarty_tpl);?>

		<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>"admin_user_setting"));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>"admin_user_setting"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"User Settings"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"User Settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<br>
			<fieldset>
				<legend>
					Default user preferences
					<?php echo smarty_function_help(array('url'=>"UsersDefaultPrefs",'desc'=>"Users Default Preferences"),$_smarty_tpl);?>

				</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'feature_userPreferences'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_mytiki'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_xmpp_password'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_mytiki_childcontainer">
						<legend>My Account Items</legend>
						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_pages'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_blogs'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_gals'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_msgs'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_tasks'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_forum_topics'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_forum_replies'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_items'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'users_prefs_display_timezone'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_display_12hr_clock'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'change_theme'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_userbreadCrumb'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_tasks_maxRecords'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_diff_versions'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_remember_closed_rboxes'),$_smarty_tpl);?>

				</div>
				</fieldset>
				<fieldset>
				<legend>
					Admin user preferences
				</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'users_admin_actions_require_validation'),$_smarty_tpl);?>

				</div>
				</fieldset>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"User Settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"User Features"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"User Features"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<br>
			<fieldset>
				<legend>User Account Features</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'feature_wizard_user'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_minical'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_tasks'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_notepad'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_user_bookmarks'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_favorites'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_contacts'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_usermenu'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_userlevels'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_wiki_userpage'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_tag_users'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_wiki_userpage_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'feature_wiki_userpage_prefix'),$_smarty_tpl);?>

					</div>
				</div>
			</fieldset>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"User Features"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"User Info and Picture"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"User Info and Picture"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<br>
			<fieldset>
				<legend>User information display</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'users_prefs_user_information'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_show_realnames'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'urlOnUsername'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_show_mouseover_user_info'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_in_search_result'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'highlight_group'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_display_my_to_others'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_tracker_infos'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_who_viewed_my_stuff'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_who_viewed_my_stuff_days'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_who_viewed_my_stuff_show_others'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_unified_user_details'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend>Profile picture</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'user_use_gravatar'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_store_file_gallery_picture'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_small_avatar_size'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_small_avatar_square_crop'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_picture_gallery_id'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_default_picture_id'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"User Info and Picture"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Messaging and Notifications"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Messaging and Notifications"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<br>
			<fieldset>
				<legend>Messages</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'users_prefs_mailCharset'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_messages'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_messages_childcontainer">
						<legend>
							User messages
							<?php echo smarty_function_help(array('url'=>"Inter-User+Messages"),$_smarty_tpl);?>

						</legend>
						<?php echo smarty_function_preference(array('name'=>'users_prefs_mess_maxRecords'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_allowMsgs'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mess_sendReadStatus'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_minPrio'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mess_archiveAfter'),$_smarty_tpl);?>

					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>User notifications</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'monitor_enabled'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="monitor_enabled_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'monitor_individual_clear'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'monitor_count_refresh_interval'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'monitor_reply_email_pattern'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'monitor_digest'),$_smarty_tpl);?>

						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"info",'title'=>"Information"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Information"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						For the digest emails to be sent out, you will need to set-up a cron job.</br>
						Adjust the command parameters for your digest frequency. Default frequency is 7 days.</br>
							<strong>Sample command:</strong>
							<code>/usr/bin/php <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['monitor_command']->value ));?>
</code>
						<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Information"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</div>
				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_user_watches'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_group_watches'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_daily_report_watches'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_daily_report_watches_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'dailyreports_enabled_for_new_users'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_user_watches_translations'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_groupalert'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_webmail'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_notify_users_mention'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Messaging and Notifications"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"User Files"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"User Files"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<br>
			<fieldset>
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_userfiles','visible'=>"always"),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_userfiles_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_use_fgal_for_user_files','mode'=>'invert'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_use_fgal_for_user_files_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'uf_use_db'),$_smarty_tpl);?>

						<div class="adminoptionboxchild uf_use_db_childcontainer n">
							<?php echo smarty_function_preference(array('name'=>'uf_use_dir'),$_smarty_tpl);?>

						</div>
					</div>
				</div>
			</fieldset>

			<fieldset>
				<legend>Settings</legend>
				<?php echo smarty_function_preference(array('name'=>'userfiles_quota'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'userfiles_private'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'userfiles_hidden'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"User Files"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo smarty_block_tabset(array('name'=>"admin_user_setting"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form>
<?php }
}
