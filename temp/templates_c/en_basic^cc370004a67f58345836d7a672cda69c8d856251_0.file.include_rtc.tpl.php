<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:44:06
  from 'C:\xampp\htdocs\tikip4k\templates\admin\include_rtc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612665463cf186_03473806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc370004a67f58345836d7a672cda69c8d856251' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\admin\\include_rtc.tpl',
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
function content_612665463cf186_03473806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.permission_link.php','function'=>'smarty_function_permission_link',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tabset.php','function'=>'smarty_block_tabset',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tab.php','function'=>'smarty_block_tab',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.preference.php','function'=>'smarty_function_preference',),));
?>

<form action="tiki-admin.php?page=rtc" method="post" class="admin">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="t_navbar mb-4 clearfix">
		<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php",'_class'=>"btn-link tips",'_type'=>"text",'_icon_name'=>"group",'_text'=>"Groups",'_title'=>":Group Administration"),$_smarty_tpl);?>

		<?php echo smarty_function_button(array('href'=>"tiki-adminusers.php",'_class'=>"btn-link tips",'_type'=>"text",'_icon_name'=>"user",'_text'=>"Users",'_title'=>":User Administration"),$_smarty_tpl);?>

		<?php echo smarty_function_permission_link(array('addclass'=>"btn btn-link",'_type'=>"text",'mode'=>'text','label'=>"Permissions"),$_smarty_tpl);?>

		<a href="<?php echo smarty_function_service(array('controller'=>'managestream','action'=>'list'),$_smarty_tpl);?>
" class="btn btn-link tips">Activity Rules</a>
		<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>"admin_rtc"));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>"admin_rtc"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"BigBlueButton"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"BigBlueButton"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<br>
			<?php echo smarty_function_preference(array('name'=>'bigbluebutton_feature'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="bigbluebutton_feature_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'bigbluebutton_server_location'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'bigbluebutton_server_salt'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'bigbluebutton_recording_max_duration'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_bigbluebutton'),$_smarty_tpl);?>

			</div>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"BigBlueButton"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"XMPP"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"XMPP"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<h2>XMPP</h2>
			<?php echo smarty_function_preference(array('name'=>'xmpp_feature'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="xmpp_feature_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'xmpp_server_host'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'xmpp_server_http_bind'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'xmpp_muc_component_domain'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'xmpp_auth_method'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'xmpp_openfire_rest_api'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'xmpp_openfire_rest_api_username'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'xmpp_openfire_rest_api_password'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'xmpp_conversejs_debug'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'xmpp_conversejs_init_json'),$_smarty_tpl);?>

			</div>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"XMPP"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo smarty_block_tabset(array('name'=>"admin_rtc"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form>
<?php }
}
