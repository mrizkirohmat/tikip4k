<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:35:20
  from 'C:\xampp\htdocs\tikip4k\templates\admin\include_connect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61266338b5eb57_91620632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dcda67f12959073ea0dd4ca4b73c4afa1aef5d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\admin\\include_connect.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/include_apply_top.tpl' => 2,
    'file:admin/include_apply_bottom.tpl' => 2,
  ),
),false)) {
function content_61266338b5eb57_91620632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tabset.php','function'=>'smarty_block_tabset',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tab.php','function'=>'smarty_block_tab',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.help.php','function'=>'smarty_function_help',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.preference.php','function'=>'smarty_function_preference',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.defaultmapcenter.php','function'=>'smarty_function_defaultmapcenter',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),9=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.norecords.php','function'=>'smarty_function_norecords',),));
?>
<div>&nbsp;</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array());
$_block_repeat=true;
echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Tiki Connect"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Tiki Connect"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<br>
		<fieldset>
			<legend><strong>Join the community!</strong></legend>
			<p>Tiki Wiki CMS Groupware is Free and Open Source Software (FOSS). It is a community-driven project which exists and improves thanks to the participation of people just like YOU.</p>
			<p><?php echo smarty_function_button(array('href'=>"https://tiki.org/Join",'_text'=>"Join the Community"),$_smarty_tpl);?>
</p>
		</fieldset>
		<fieldset>
			<legend><strong>Tiki news</strong></legend>
			<p>
				Embedded RSS feed from info.tiki.org TODO, meanwhile
				<?php echo smarty_function_button(array('href'=>"https://tiki.org/tiki-articles_rss.php?ver=2",'_text'=>"Add RSS"),$_smarty_tpl);?>

			</p>
			<p>
				Tiki Newsletter <?php echo smarty_function_button(array('_text'=>"Subscribe",'href'=>"https://tiki.org/tiki-admin_newsletter_subscriptions.php?nlId=6&info=1"),$_smarty_tpl);?>

			</p>
		</fieldset>
		<fieldset>
			<legend><strong>Promote your site</strong></legend>
			<p>
				Add your site to the Tiki directory.
				<?php echo smarty_function_button(array('href'=>"tiki-register_site.php",'_text'=>"Submit your site"),$_smarty_tpl);?>

			</p>
		</fieldset>
		<fieldset>
			<legend><strong>Spread the word</strong></legend>
			<p>
				Add the "Powered by" module to your site. 
				<?php echo smarty_function_button(array('href'=>"tiki-admin_modules.php?textFilter=powered&cookietab=3",'_text'=>"Manage Modules"),$_smarty_tpl);?>

			</p>
		</fieldset>
		<fieldset>
			<legend><strong>Help improve Tiki</strong></legend>
			<p>
				Submit a feature request or bug report. <?php echo smarty_function_button(array('_text'=>"Visit Tiki development site",'href'=>"https://dev.tiki.org/Make+a+wish"),$_smarty_tpl);?>

			</p>
		</fieldset>
		<fieldset>
			<legend><strong>Make a financial contribution to the Tiki Association</strong></legend>
			<p>
				<a href="https://tiki.org/Donation">
					<img src="img/tiki/Tiki_Contribute_Button.png" alt="Contribute to Tiki">
				</a>
			</p>
		</fieldset>
	<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Tiki Connect"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Settings"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<br>
		<form class="admin" id="connect" name="connect" action="tiki-admin.php?page=connect" method="post">
			<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

			<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<fieldset>
				<legend>Tiki connect<?php echo smarty_function_help(array('url'=>"Connect"),$_smarty_tpl);?>
</legend>
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"info",'title'=>"New Feature",'icon'=>"bricks"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"New Feature",'icon'=>"bricks"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<p><em>Please note: Experimental - work in progress</em></p>
					<p>Tiki Connect is a way to let the Tiki project know how it is being used, and which parts people like or would like fixing (or explaining).<br>
						Once enabled, when you click the '<strong>Send Info</strong>' button below you will be connected with <em>mother.tiki.org</em>, which is where the data will be collected.
					</p>
					<p>You can also send feedback about Tiki by checking the 'Feedback' checkbox(once Tiki Connect is enabled, next to the 'Preference Filters' bar above).
						Icons will appear next to all the preferences where you can 'like', request a 'fix' or ask 'what is this for?'<br>
						Your votes are sent when you connect with mother.tiki.org (currently only by clicking the '<strong>Send Info</strong>' button)
				<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"New Feature",'icon'=>"bricks"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php echo smarty_function_preference(array('name'=>"connect_feature"),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="connect_feature_childcontainer">
					<div class="form-group row">
						<div class="offset-sm-4 col-sm-8">
							<?php echo smarty_function_button(array('_script'=>"#",'class'=>"btn btn-primary",'_text'=>"Send Info",'_title'=>"Send the data",'_id'=>"connect_send_btn"),$_smarty_tpl);?>

							<?php echo smarty_function_button(array('_script'=>"#",'class'=>"btn btn-primary",'_text'=>"Preview info",'_title'=>"See what is going to be sent",'_id'=>"connect_list_btn"),$_smarty_tpl);?>

							<?php if (empty($_smarty_tpl->tpl_vars['prefs']->value['connect_site_title'])) {?>
								<?php echo smarty_function_button(array('_text'=>"Fill form",'class'=>"btn btn-primary",'_title'=>"Fill this form in based on other preferences",'_id'=>"connect_defaults_btn",'_script'=>"#"),$_smarty_tpl);?>

							<?php }?>
						</div>
					</div>
					<?php echo smarty_function_preference(array('name'=>"connect_send_info"),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="connect_send_info_childcontainer">
						<?php echo smarty_function_preference(array('name'=>"connect_site_title"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"connect_site_email"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"connect_site_url"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"connect_site_keywords"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"connect_site_location"),$_smarty_tpl);?>

						<div class="form-group row">
							<div class="offset-sm-4 col-sm-8">
								<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_map();?>

								<div class="map-container" style="height:250px;width:400px;" data-geo-center="<?php echo smarty_function_defaultmapcenter(array(),$_smarty_tpl);?>
"
									data-target-field="connect_site_location"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['connect_server_mode'] == "y") {?>
									data-icon-name="tiki" data-icon-src="img/tiki/tikiicon.png"
									data-icon-size="[16,16]" data-icon-offset="[-8,-16]" data-marker-filter=".geolocated.connection"<?php }?>>
								</div>
							</div>
						</div>
					</div>
					<?php echo smarty_function_preference(array('name'=>"connect_send_anonymous_info"),$_smarty_tpl);?>


					<div class="adminoptionboxchild"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['connect_server_mode'] != "y") {?> style="display:none;"<?php }?>>
						<strong>Advanced settings</strong> Exposed to assist testing and development
						<?php echo smarty_function_preference(array('name'=>"connect_frequency"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"connect_server"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"connect_last_post"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"connect_server_mode"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"connect_guid"),$_smarty_tpl);?>

					</div>
				</div>

			</fieldset>
			<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</form>
	<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['connect_server_mode'] == "y") {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Connections Received"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Connections Received"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<br>
			<form class="admin" name="cserver_form" action="tiki-admin.php?page=connect" method="post">
				<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

				<input name="cserver_search" type="text" value="<?php echo $_smarty_tpl->tpl_vars['cserver_search_text']->value;?>
">
				<input name="cserver" type="submit" class="btn btn-primary" value="Search">
				<?php echo smarty_function_button(array('cserver'=>"rebuild",'_auto_args'=>"cserver,page",'_text'=>"Rebuild Index",'_title'=>"Rebuild received connections index"),$_smarty_tpl);?>

				<?php if (!empty($_smarty_tpl->tpl_vars['connect_stats']->value)) {?>
					<span><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['connect_stats']->value['received'],'_1'=>$_smarty_tpl->tpl_vars['connect_stats']->value['guids']));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['connect_stats']->value['received'],'_1'=>$_smarty_tpl->tpl_vars['connect_stats']->value['guids']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><strong>Server stats:</strong> %0 reports received from %1 Tikis<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['connect_stats']->value['received'],'_1'=>$_smarty_tpl->tpl_vars['connect_stats']->value['guids']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></span>
				<?php }?>
			</form>

			<div class="table-responsive">
				<table class="table">
					<tr>
						<th>Created</th>
						<th>Title</th>
						<th>Language</th>
						<th>Keywords</th>
					</tr>

					<?php
$__section_connection_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['connect_recent']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_connection_0_total = $__section_connection_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_connection'] = new Smarty_Variable(array());
if ($__section_connection_0_total !== 0) {
for ($__section_connection_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_connection']->value['index'] = 0; $__section_connection_0_iteration <= $__section_connection_0_total; $__section_connection_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_connection']->value['index']++){
?>
						<tr>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['connect_recent']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_connection']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_connection']->value['index'] : null)]['created'];?>

							</td>
							<td class="text">
								<a class="<?php echo $_smarty_tpl->tpl_vars['connect_recent']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_connection']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_connection']->value['index'] : null)]['class'];?>
" <?php echo $_smarty_tpl->tpl_vars['connect_recent']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_connection']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_connection']->value['index'] : null)]['metadata'];?>
 href="<?php echo $_smarty_tpl->tpl_vars['connect_recent']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_connection']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_connection']->value['index'] : null)]['url'];?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['connect_recent']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_connection']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_connection']->value['index'] : null)]['title'] ));?>
</a>
							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['connect_recent']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_connection']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_connection']->value['index'] : null)]['language'];?>

							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['connect_recent']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_connection']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_connection']->value['index'] : null)]['keywords'];?>

							</td>
						</tr>
					<?php }} else {
 ?>
						<?php echo smarty_function_norecords(array('_colspan'=>4),$_smarty_tpl);?>

					<?php
}
?>
				</table>
			</div>

		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Connections Received"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>

	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Jitsi"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Jitsi"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<br>
		<form class="admin" id="connect" name="connect" action="tiki-admin.php?page=connect" method="post">
			<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

			<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			<fieldset>
				<legend>Jitsi<?php echo smarty_function_help(array('url'=>"Jitsi"),$_smarty_tpl);?>
</legend>

				<div class="form-group row">
					<label class="col-form-label col-sm-4" for="jitsi-url">
						Provision URL
					</label>
					<div class="col-sm-8">
						<input id="jitsi-url" readonly type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['jitsi_url']->value ));?>
" class="form-control">
					</div>
				</div>
				<?php echo smarty_function_preference(array('name'=>'suite_jitsi_provision'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'suite_jitsi_configuration'),$_smarty_tpl);?>

			</fieldset>
			<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		</form>
	<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Jitsi"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_block_repeat=false;
echo smarty_block_tabset(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
