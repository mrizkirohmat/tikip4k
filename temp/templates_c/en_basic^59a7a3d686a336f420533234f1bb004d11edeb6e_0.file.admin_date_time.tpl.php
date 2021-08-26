<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:37:23
  from 'C:\xampp\htdocs\tikip4k\templates\wizard\admin_date_time.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612663b374df31_25015232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59a7a3d686a336f420533234f1bb004d11edeb6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\wizard\\admin_date_time.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612663b374df31_25015232 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.preference.php','function'=>'smarty_function_preference',),));
?>

<div class="media">
	<div class="mr-4">
		<span class="fa-stack fa-lg" style="width: 100px;" title="Configuration Wizard">
			<i class="fas fa-cog fa-stack-2x"></i>
			<i class="fas fa-flip-horizontal fa-magic fa-stack-1x ml-4 mt-4"></i>
		</span>
	</div>
	<div class="media-body">
		<?php echo smarty_function_icon(array('name'=>"clock-o",'size'=>3,'iclass'=>"float-sm-right"),$_smarty_tpl);?>

		<h4 class="mt-0 mb-4">Set the site time zone and format for displaying dates and times.</h4>
		<fieldset>
			<legend>Date and Time options</legend>
			<div class="admin clearfix featurelist">
				<?php echo smarty_function_preference(array('name'=>'server_timezone'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_display_12hr_clock'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_display_timezone'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'display_field_order'),$_smarty_tpl);?>

			</div>
			<br>
			<em>See also <a href="tiki-admin.php?page=general&amp;alt=General#content4" target="_blank">Date and Time admin panel</a></em>
		</fieldset>
		<br>
	</div>
</div>
<?php }
}
