<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:43:29
  from 'C:\xampp\htdocs\tikip4k\templates\admin\include_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612649011f8258_76943090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee921877d52acf0f77ffb1933fe0b643ce4b38f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\admin\\include_category.tpl',
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
function content_612649011f8258_76943090 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.preference.php','function'=>'smarty_function_preference',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.help.php','function'=>'smarty_function_help',),));
?>

<form action="tiki-admin.php?page=category" method="post" class="admin">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<a role="link" class="btn btn-link tips" href="tiki-browse_categories.php" title=":Categories listing">
				<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Browse Categories
			</a>
			<a role="link" class="btn btn-link tips" href="tiki-admin_categories.php" title=":Administration">
				<?php echo smarty_function_icon(array('name'=>"cog"),$_smarty_tpl);?>
 Administer Categories
			</a>
			<a role="link" class="btn btn-link tips" href="tiki-edit_categories.php" title=":Organize objects">
				<?php echo smarty_function_icon(array('name'=>"sort"),$_smarty_tpl);?>
 Organize Objects
			</a>
			<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>
	</div>

	<fieldset id="Categories">
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_categories','visible'=>"always"),$_smarty_tpl);?>

	</fieldset>

	<fieldset class="mb-3 w-100">
		<legend>Plugins <?php echo smarty_function_help(array('url'=>"Plugins"),$_smarty_tpl);?>
</legend>
		<?php echo smarty_function_preference(array('name'=>'wikiplugin_category'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wikiplugin_catpath'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wikiplugin_catorphans'),$_smarty_tpl);?>

	</fieldset>

	<fieldset>
		<legend>
			Features
		</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_categorypath'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_categorypath_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'categorypath_excluded'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'categorypath_format'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'category_sort_ascii'),$_smarty_tpl);?>

		<fieldset>
			<legend>
				Category objects
			</legend>
			<?php echo smarty_function_preference(array('name'=>'feature_categoryobjects'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'category_morelikethis_algorithm'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'category_morelikethis_mincommon'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'category_morelikethis_mincommon_orless'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'category_morelikethis_mincommon_max'),$_smarty_tpl);?>

		</fieldset>

		<?php echo smarty_function_preference(array('name'=>'feature_category_transition'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'categories_used_in_tpl'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'categories_add_class_to_body_tag'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'categories_cache_refresh_on_object_cat'),$_smarty_tpl);?>


		<div class="adminoptionboxchild" id="categories_used_in_tpl_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'feature_areas'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'areas_root'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'category_jail'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'category_jail_root'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'category_defaults'),$_smarty_tpl);?>

		<div class="form-group row">
			<div class="col-sm-8 offset-sm-4">
				<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['category_defaults'])) {?>
					<button type="submit" class="btn btn-primary" name="assignWikiCategories" value="y">
						Re-apply last saved category defaults to wiki pages
					</button>
				<?php }?>
			</div>
		</div>
		<?php echo smarty_function_preference(array('name'=>'category_autogeocode_within'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="category_autogeocode_within_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'category_autogeocode_replace'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'category_autogeocode_fudge'),$_smarty_tpl);?>

		</div>

		<?php echo smarty_function_preference(array('name'=>'category_i18n_sync'),$_smarty_tpl);?>

		<div class="adminoptionboxchild category_i18n_sync_childcontainer blacklist whitelist required">
			<?php echo smarty_function_preference(array('name'=>'category_i18n_synced'),$_smarty_tpl);?>

		</div>

		<?php echo smarty_function_preference(array('name'=>'feature_wiki_mandatory_category'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_blog_mandatory_category'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_image_gallery_mandatory_category'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'unified_add_to_categ_search'),$_smarty_tpl);?>



	</fieldset>

	<fieldset>
		<legend>Performance</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_search_show_forbidden_cat'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'category_browse_count_objects'),$_smarty_tpl);?>

	</fieldset>
	<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form>
<?php }
}
