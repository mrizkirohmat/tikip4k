<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:38:31
  from 'C:\xampp\htdocs\tikip4k\templates\admin\include_ads.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612663f79a37f6_23041729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f706f4a29939dc3cd0ed43b2f9db874a02ac0b17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\admin\\include_ads.tpl',
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
function content_612663f79a37f6_23041729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.preference.php','function'=>'smarty_function_preference',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.help.php','function'=>'smarty_function_help',),));
?>

<form action="tiki-admin.php?page=ads" onreset="return(confirm("Cancel Edit"))" class="admin" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<a role="link" class="btn btn-link tips" href="tiki-list_banners.php" title=":Banners listing">
				<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Banners
			</a>
			<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>
	</div>

	<fieldset id="Banners">
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_banners','visible'=>"always"),$_smarty_tpl);?>

	</fieldset>

	<fieldset class="mb-3 w-100">
		<legend>Plugins</legend>
		<?php echo smarty_function_preference(array('name'=>'wikiplugin_banner'),$_smarty_tpl);?>

	</fieldset>

	<fieldset>
		<legend>Site ads and banners<?php echo smarty_function_help(array('url'=>"Banners"),$_smarty_tpl);?>
</legend>

		<?php echo smarty_function_preference(array('name'=>'sitead_publish'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_sitead'),$_smarty_tpl);?>

	</fieldset>
	<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form>
<?php }
}
