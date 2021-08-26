<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:31:16
  from 'C:\xampp\htdocs\tikip4k\templates\admin\include_security.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61266244290bd5_42770921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7b66b8c2543cea469b2ec58d9ef455b688576e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\admin\\include_security.tpl',
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
function content_61266244290bd5_42770921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.permission_link.php','function'=>'smarty_function_permission_link',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tabset.php','function'=>'smarty_block_tabset',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tab.php','function'=>'smarty_block_tab',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.preference.php','function'=>'smarty_function_preference',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.help.php','function'=>'smarty_function_help',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),));
?>


<div class="t_navbar btn-group form-group row">
	<a role="link" class="btn btn-link" href="tiki-admingroups.php" title="Admin groups">
		<?php echo smarty_function_icon(array('name'=>"group"),$_smarty_tpl);?>
 Admin Groups
	</a>
	<a role="link" class="btn btn-link" href="tiki-adminusers.php" title="Admin users">
		<?php echo smarty_function_icon(array('name'=>"user"),$_smarty_tpl);?>
 Admin Users
	</a>

	<?php echo smarty_function_permission_link(array('mode'=>'link','label'=>"Manage permissions",'icon_name'=>"key",'addclass'=>"btn btn-link"),$_smarty_tpl);?>

</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	Please see the <a class='alert-link' target='tikihelp' href='http://dev.tiki.org/Security'>Security page</a> on Tiki's developer site.
	See <a class="alert-link" href="tiki-admin_security.php" title="Security"><strong>Security Admin</strong></a> for additional security settings.
<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<form class="admin" id="security" name="security" action="tiki-admin.php?page=security" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>
	</div>

	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array());
$_block_repeat=true;
echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"General Security"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"General Security"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<fieldset>
				<?php if ($_smarty_tpl->tpl_vars['haveMySQLSSL']->value) {
if ($_smarty_tpl->tpl_vars['mysqlSSL']->value) {
$_smarty_tpl->_assignInScope('sslInfoType', 'info');
} else {
$_smarty_tpl->_assignInScope('sslInfoType', 'warning');
}
} else {
$_smarty_tpl->_assignInScope('sslInfoType', 'tip');
}?>
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>$_smarty_tpl->tpl_vars['sslInfoType']->value,'title'=>'MySQL SSL connection'));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>$_smarty_tpl->tpl_vars['sslInfoType']->value,'title'=>'MySQL SSL connection'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php if ($_smarty_tpl->tpl_vars['haveMySQLSSL']->value) {?>
						<?php if ($_smarty_tpl->tpl_vars['mysqlSSL']->value) {?>
							<p class="mysqlsslstatus"><?php echo smarty_function_icon(array('name'=>"lock",'iclass'=>"text-success"),$_smarty_tpl);?>
 MySQL SSL connection is active
							<a class="tikihelp alert-link" title="|MySQL SSL" target="tikihelp" href="http://doc.tiki.org/MySQL SSL">
								<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

							</a>
							</p>
						<?php } else { ?>
							<p class="mysqlsslstatus"><?php echo smarty_function_icon(array('name'=>"unlock"),$_smarty_tpl);?>
 MySQL connection is not encrypted<br>
							To activate SSL, copy the keyfiles (.pem) til db/cert folder. The filenames must end with "-key.pem", "-cert.pem", "-ca.pem"
							<a class="tikihelp alert-link" title="|MySQL SSL" target="tikihelp" href="http://doc.tiki.org/MySQL SSL">
								<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

							</a>
							</p>
						<?php }?>
					<?php } else { ?>
						<p><?php echo smarty_function_icon(array('name'=>"lock",'iclass'=>"text-warning"),$_smarty_tpl);?>
 MySQL Server does not have SSL activated
						<a class="tikihelp alert-link" title="|MySQL SSL" target="tikihelp" href="http://doc.tiki.org/MySQL SSL">
							<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

						</a>
						</p>
					<?php }?>
				<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>$_smarty_tpl->tpl_vars['sslInfoType']->value,'title'=>'MySQL SSL connection'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			</fieldset>
			<fieldset>
				<legend>Smarty and Features Security</legend>
				<?php echo smarty_function_preference(array('name'=>'smarty_security'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="smarty_security_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'smarty_security_functions'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'smarty_security_modifiers'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'smarty_security_dirs'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_purifier'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_htmlpurifier_output'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'session_protected'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'login_http_basic'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'pass_blacklist'),$_smarty_tpl);?>


				Please also see: <a href="tiki-admin.php?page=login">HTTPS (SSL) and other login preferences</a>

				<?php echo smarty_function_preference(array('name'=>'newsletter_external_client'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'tiki_check_file_content'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'tiki_allow_trust_input'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_quick_object_perms'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'zend_http_sslverifypeer'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'zend_http_use_curl'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_debug_console'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_view_tpl'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_edit_templates'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_editcss'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>User Encryption<?php echo smarty_function_help(array('url'=>"User Encryption"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_user_encryption'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_user_encryption_childcontainer">
					<?php if ($_smarty_tpl->tpl_vars['openssl_available']->value) {?>
						Requires the OpenSSL PHP extension for encryption. You have OpenSSL installed.<br>
					<?php } else { ?>
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"OpenSSL is not loaded"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"OpenSSL is not loaded"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						User Encryption requires the PHP extension OpenSSL for encryption.
							You should activate OpenSSL before activating User Encryption.
						<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"OpenSSL is not loaded"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php }?>
					You may also want to add the Domain Password module somewhere.<br>
					<br>
					Comma-separated list of password domains, e.g.: Company ABC,Company XYZ<br>
					The user can add passwords for a registered password domain.
					<?php echo smarty_function_preference(array('name'=>'feature_password_domains'),$_smarty_tpl);?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_user_encryption'] == 'y' && $_smarty_tpl->tpl_vars['show_user_encyption_stats']->value == 'y') {?>
						Statistics for existing data:
						<ul>
							<li>OpenSSL: <?php echo $_smarty_tpl->tpl_vars['user_encryption_stat_openssl']->value;?>
</li>
							<li>MCrypt: <?php echo $_smarty_tpl->tpl_vars['user_encryption_stat_mcrypt']->value;?>
</li>
						</ul>
						When no data which was encoded by MCrypt in Tiki versions prior to 18 is present, User Encryption does not need the MCrypt PHP extension.
					<?php }?>
				</div>
			</fieldset>
			<fieldset>
				<legend>CSRF security<?php echo smarty_function_help(array('url'=>"Security"),$_smarty_tpl);?>
</legend>
				<div class="adminoptionbox">
					Use these options to protect against cross-site request forgeries (CSRF).
				</div>
				<?php echo smarty_function_preference(array('name'=>'site_security_timeout'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_ticketlib'),$_smarty_tpl);?>

			</fieldset>
			<br/>
			<fieldset>
				<legend>HTTP Headers<?php echo smarty_function_help(array('url'=>"Security"),$_smarty_tpl);?>
</legend>
				<div class="adminoptionbox">
					Use these options to add options related with security to the HTTP Headers.
				</div>

				<?php echo smarty_function_preference(array('name'=>'http_header_frame_options'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="http_header_frame_options_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'http_header_frame_options_value'),$_smarty_tpl);?>

				</div>

				<?php echo smarty_function_preference(array('name'=>'http_header_xss_protection'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="http_header_xss_protection_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'http_header_xss_protection_value'),$_smarty_tpl);?>

				</div>

				<?php echo smarty_function_preference(array('name'=>'http_header_content_type_options'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'http_header_content_security_policy'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="http_header_content_security_policy_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'http_header_content_security_policy_value'),$_smarty_tpl);?>

				</div>

				<?php echo smarty_function_preference(array('name'=>'http_header_strict_transport_security'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="http_header_strict_transport_security_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'http_header_strict_transport_security_value'),$_smarty_tpl);?>

				</div>

				<?php echo smarty_function_preference(array('name'=>'http_header_public_key_pins'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="http_header_public_key_pins_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'http_header_public_key_pins_value'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"General Security"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Spam Protection"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Spam Protection"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				You can additionally protect from spam enabling the "<a href="http://doc.tiki.org/Forum+Admin#Forum_moderation" target="_blank" class="alert-link">moderation queue on forums</a>", or through <strong>banning</strong> multiple ip's from the "<a href="tiki-admin_actionlog.php" target="_blank" class="alert-link">Action log</a>", from "<a href="tiki-adminusers.php" target="_blank" class="alert-link">Users registration</a>", or from the "<a href="tiki-list_comments.php" target="_blank" class="alert-link">Comments moderation queue</a>" itself.
			<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<fieldset>
				<legend>CAPTCHA</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_antibot'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_antibot_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'captcha_wordLen'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'captcha_width'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'captcha_noise'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'recaptcha_enabled'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="recaptcha_enabled_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'recaptcha_pubkey'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'recaptcha_privkey'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'recaptcha_theme'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'recaptcha_version'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'captcha_questions_active'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="captcha_questions_active_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'captcha_questions'),$_smarty_tpl);?>

					</div>
				</div>
			</fieldset>
			<?php echo smarty_function_preference(array('name'=>'feature_wiki_protect_email'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_wiki_ext_rel_nofollow'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_banning'),$_smarty_tpl);?>


			<?php echo smarty_function_preference(array('name'=>'feature_comments_moderation'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'comments_akismet_filter'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="comments_akismet_filter_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'comments_akismet_apikey'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'comments_akismet_check_users'),$_smarty_tpl);?>

			</div>

			<?php echo smarty_function_preference(array('name'=>'useRegisterPasscode'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="useRegisterPasscode_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'registerPasscode'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'showRegisterPasscode'),$_smarty_tpl);?>

			</div>

			<?php echo smarty_function_preference(array('name'=>'registerKey'),$_smarty_tpl);?>

		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Spam Protection"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Search results"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Search results"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo smarty_function_preference(array('name'=>'feature_search_show_forbidden_cat'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_search_show_forbidden_obj'),$_smarty_tpl);?>

		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Search results"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Site Access"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Site Access"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo smarty_function_preference(array('name'=>'site_closed'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="site_closed_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'site_closed_title'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'site_closed_msg'),$_smarty_tpl);?>

				<div class="col-sm-8 offset-sm-4">
					<?php echo smarty_function_button(array('_text'=>'Test site closed message','href'=>("tiki-error_simple.php?title=".((string)$_smarty_tpl->tpl_vars['prefs']->value['site_closed_title'])."&error=").($_smarty_tpl->tpl_vars['prefs']->value['site_closed_msg']),'_class'=>'btn-sm','_type'=>'info'),$_smarty_tpl);?>

				</div>
			</div>

			<?php echo smarty_function_preference(array('name'=>'use_load_threshold'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="use_load_threshold_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'load_threshold'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'site_busy_msg'),$_smarty_tpl);?>

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

		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Site Access"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Tokens"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Tokens"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				To manage tokens go to <a href="tiki-admin_tokens.php" class="alert-link">Admin Tokens</a> page. Tokens are also used for the Temporary Users feature (see <a href="tiki-adminusers.php" class="alert-link">Admin Users</a>).
			<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php echo smarty_function_preference(array('name'=>'auth_token_access'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'auth_token_access_maxtimeout'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'auth_token_access_maxhits'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'auth_token_share'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'auth_token_preserve_tempusers'),$_smarty_tpl);?>

		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Tokens"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"OpenPGP"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"OpenPGP"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<fieldset>
				<legend>OpenPGP functionality for PGP/MIME encrypted email messaging</legend>
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Note"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					Experimental OpenPGP fuctionality for PGP/MIME encrypted email messaging.<br><br>
					All email-messaging/notifications/newsletters are sent as PGP/MIME-encrypted messages, signed with the signer-key, and are completely 100% opaque to outsiders. All user accounts need to be properly configured into gnupg keyring with public-keys related to their tiki-account-related email-addresses.
				<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Note"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php echo smarty_function_preference(array('name'=>'openpgp_gpg_pgpmimemail'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="openpgp_gpg_pgpmimemail_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'openpgp_gpg_home'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'openpgp_gpg_path'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'openpgp_gpg_signer_passphrase_store'),$_smarty_tpl);?>

					<div class="adminoptionboxchild openpgp_gpg_signer_passphrase_store_childcontainer preferences">
						<?php echo smarty_function_preference(array('name'=>'openpgp_gpg_signer_passphrase'),$_smarty_tpl);?>

						<br><em>If you use preferences option for the signer passphrase, clear the file option just for security</em>
					</div>
					<div class="adminoptionboxchild openpgp_gpg_signer_passphrase_store_childcontainer file">
						<?php echo smarty_function_preference(array('name'=>'openpgp_gpg_signer_passfile'),$_smarty_tpl);?>

						<br><em>If you use file for the signer passphrase, clear the preferences option just for security</em>
					</div>
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Note"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						The email of preference <a href="tiki-admin.php?page=general&alt=General" class="alert-link">'sender_email'</a> is used as signer key ID, and it must have both private and public key in the gnupg keyring.
					<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Note"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				</div>
			</fieldset>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"OpenPGP"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_repeat=false;
echo smarty_block_tabset(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form>
<?php }
}
