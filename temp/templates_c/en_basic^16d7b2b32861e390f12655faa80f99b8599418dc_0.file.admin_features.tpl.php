<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:37:55
  from 'C:\xampp\htdocs\tikip4k\templates\wizard\admin_features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612663d3c3ac35_90003702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16d7b2b32861e390f12655faa80f99b8599418dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\wizard\\admin_features.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612663d3c3ac35_90003702 (Smarty_Internal_Template $_smarty_tpl) {
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
		<?php echo smarty_function_icon(array('name'=>"admin_features",'size'=>3,'iclass'=>"float-sm-right"),$_smarty_tpl);?>

		<h4 class="mt-0 mb-4">Set up the main Tiki features. The wiki and file gallery features are always enabled.</h4>
		<fieldset>
			<legend>Main Tiki features</legend>
			
			
			<div class="admin clearfix featurelist">
				<?php echo smarty_function_preference(array('name'=>'feature_blogs'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_articles'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forums'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_trackers'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_polls'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_sheet'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_calendar'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_newsletters'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_banners'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_freetags'),$_smarty_tpl);?>

			</div>
			<br>
			<em>Tiki has many more features.
			See also <a href="http://doc.tiki.org/Global+Features" target="_blank">Global Features @ doc.tiki.org</a></em>
		</fieldset>
		<fieldset>
			<legend>Watches</legend>
			<?php echo smarty_function_icon(array('name'=>"envelope-o",'size'=>2,'iclass'=>"float-sm-right"),$_smarty_tpl);?>

			Enable email notifications to users when changes in the content of specific items (pages, posts, trackers, etc.) are made.
			<div class="admin clearfix featurelist">
				<?php echo smarty_function_preference(array('name'=>'feature_user_watches'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_group_watches'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_daily_report_watches'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_daily_report_watches_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'dailyreports_enabled_for_new_users'),$_smarty_tpl);?>

				</div>
				<?php if ($_smarty_tpl->tpl_vars['isMultiLanguage']->value == true) {?>
					<?php echo smarty_function_preference(array('name'=>'feature_user_watches_translations'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_user_watches_languages'),$_smarty_tpl);?>

				<?php }?>
			</div>
		</fieldset>
	</div>
</div>
<?php }
}
