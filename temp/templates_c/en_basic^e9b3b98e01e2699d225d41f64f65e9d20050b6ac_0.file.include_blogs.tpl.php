<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:36:35
  from 'C:\xampp\htdocs\tikip4k\templates\admin\include_blogs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126638336dcf5_66358951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9b3b98e01e2699d225d41f64f65e9d20050b6ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\admin\\include_blogs.tpl',
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
function content_6126638336dcf5_66358951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tabset.php','function'=>'smarty_block_tabset',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tab.php','function'=>'smarty_block_tab',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.preference.php','function'=>'smarty_function_preference',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.help.php','function'=>'smarty_function_help',),));
?>

<form role="form" action="tiki-admin.php?page=blogs" method="post" class="admin">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="t_navbar mb-4 clearfix">
		<a role="button" class="btn btn-link tips" href="tiki-list_blogs.php" title=":Blogs listing">
			<?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 Blogs
		</a>
		<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>"admin_blogs"));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>"admin_blogs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"General Settings"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"General Settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<br>
			<fieldset>
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_blogs','visible'=>"always"),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Plugins</legend>
				<?php echo smarty_function_preference(array('name'=>'wikiplugin_bloglist'),$_smarty_tpl);?>

			</fieldset>
			<?php echo smarty_function_preference(array('name'=>'home_blog'),$_smarty_tpl);?>

			<fieldset>
				<legend>
					Features<?php echo smarty_function_help(array('url'=>"Blog+Config"),$_smarty_tpl);?>

				</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_blog_rankings'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_blog_heading'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_blog_edit_publish_date'),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories'] == 'y') {?>
					<?php echo smarty_function_preference(array('name'=>'feature_blog_mandatory_category'),$_smarty_tpl);?>

				<?php }?>
				<?php echo smarty_function_preference(array('name'=>'geo_locate_blogpost'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_sefurl_title_blog'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'blog_feature_copyrights'),$_smarty_tpl);?>

				</fieldset>
			<fieldset>
				<legend>Comments</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_blogposts_comments'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'blog_comments_per_page'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'blog_comments_default_ordering'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>
					Sharing on social networks<?php echo smarty_function_help(array('url'=>"Social+Networks#Using+ShareThis"),$_smarty_tpl);?>

				</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_blog_sharethis'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_blog_sharethis_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'blog_sharethis_publisher'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"General Settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Blogs Listings"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Blogs Listings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<br>
			<?php echo smarty_function_preference(array('name'=>'blog_list_order'),$_smarty_tpl);?>

			<fieldset>
				<legend>Items to display</legend>
				<?php echo smarty_function_preference(array('name'=>'blog_list_title'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="blog_list_title_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'blog_list_title_len'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'blog_list_description'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'blog_list_created'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'blog_list_lastmodif'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'blog_list_user'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'blog_list_posts'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'blog_list_visits'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'blog_list_activity'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Blogs Listings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo smarty_block_tabset(array('name'=>"admin_blogs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form>
<?php }
}
