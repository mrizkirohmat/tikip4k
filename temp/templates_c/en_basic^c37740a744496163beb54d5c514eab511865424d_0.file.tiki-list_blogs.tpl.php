<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:36:44
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-list_blogs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126638c2c9625_66772489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c37740a744496163beb54d5c514eab511865424d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-list_blogs.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:find.tpl' => 1,
  ),
),false)) {
function content_6126638c2c9625_66772489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_date.php','function'=>'smarty_modifier_tiki_short_date',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_datetime.php','function'=>'smarty_modifier_tiki_short_datetime',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.userlink.php','function'=>'smarty_modifier_userlink',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.avatarize.php','function'=>'smarty_modifier_avatarize',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.actions.php','function'=>'smarty_block_actions',),9=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),10=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.permission_link.php','function'=>'smarty_function_permission_link',),11=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.norecords.php','function'=>'smarty_function_norecords',),12=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.pagination_links.php','function'=>'smarty_block_pagination_links',),));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"Blogs",'admpage'=>"blogs"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"Blogs",'admpage'=>"blogs"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Blogs<?php $_block_repeat=false;
echo smarty_block_title(array('help'=>"Blogs",'admpage'=>"blogs"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="t_navbar mb-4">
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_create_blogs']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_blog_admin']->value == 'y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-edit_blog.php",'_icon_name'=>"create",'_text'=>"Create Blog",'_type'=>"link",'class'=>"btn btn-link"),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['tiki_p_read_blog']->value == 'y' && $_smarty_tpl->tpl_vars['tiki_p_blog_admin']->value == 'y') {?>
			<?php echo smarty_function_button(array('href'=>"tiki-list_posts.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"list",'_text'=>"List Posts"),$_smarty_tpl);?>

		<?php }?>
	<?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['listpages']->value || ($_smarty_tpl->tpl_vars['find']->value != '')) {?>
	<?php $_smarty_tpl->_subTemplateRender('file:find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value) {?>table-responsive<?php }?>"> 
	<table class="table table-striped normal">
		<?php $_smarty_tpl->_assignInScope('numbercol', 0);?>
		<tr>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_title'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['blog_list_description'] == 'y') {?>
				<?php $_smarty_tpl->_assignInScope('numbercol', $_smarty_tpl->tpl_vars['numbercol']->value+1);?>
				<th><a href="tiki-list_blogs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'title_desc') {?>title_asc<?php } else { ?>title_desc<?php }?>">Blog</a></th>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_created'] == 'y') {?>
				<?php $_smarty_tpl->_assignInScope('numbercol', $_smarty_tpl->tpl_vars['numbercol']->value+1);?>
				<th><a href="tiki-list_blogs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'created_desc') {?>created_asc<?php } else { ?>created_desc<?php }?>">Created</a></th>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_lastmodif'] == 'y') {?>
				<?php $_smarty_tpl->_assignInScope('numbercol', $_smarty_tpl->tpl_vars['numbercol']->value+1);?>
				<th><a href="tiki-list_blogs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'lastModif_desc') {?>lastModif_asc<?php } else { ?>lastModif_desc<?php }?>">Last post</a></th>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_user'] != 'disabled') {?>
				<?php $_smarty_tpl->_assignInScope('numbercol', $_smarty_tpl->tpl_vars['numbercol']->value+1);?>
				<th><a href="tiki-list_blogs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'user_desc') {?>user_asc<?php } else { ?>user_desc<?php }?>">User</a></th>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_posts'] == 'y') {?>
				<?php $_smarty_tpl->_assignInScope('numbercol', $_smarty_tpl->tpl_vars['numbercol']->value+1);?>
				<th class="text-right"><a href="tiki-list_blogs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'posts_desc') {?>posts_asc<?php } else { ?>posts_desc<?php }?>">Posts</a></th>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_visits'] == 'y') {?>
				<?php $_smarty_tpl->_assignInScope('numbercol', $_smarty_tpl->tpl_vars['numbercol']->value+1);?>
				<th class="text-right"><a href="tiki-list_blogs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'hits_desc') {?>hits_asc<?php } else { ?>hits_desc<?php }?>">Visits</a></th>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_activity'] == 'y') {?>
				<?php $_smarty_tpl->_assignInScope('numbercol', $_smarty_tpl->tpl_vars['numbercol']->value+1);?>
				<th><a href="tiki-list_blogs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'activity_desc') {?>activity_asc<?php } else { ?>activity_desc<?php }?>">Activity</a></th>
			<?php }?>
			<?php $_smarty_tpl->_assignInScope('numbercol', $_smarty_tpl->tpl_vars['numbercol']->value+1);?>
			<th></th>
		</tr>
		<?php
$__section_changes_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listpages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_changes_0_total = $__section_changes_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_changes'] = new Smarty_Variable(array());
if ($__section_changes_0_total !== 0) {
for ($__section_changes_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] = 0; $__section_changes_0_iteration <= $__section_changes_0_total; $__section_changes_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']++){
?>
			<tr>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_title'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['blog_list_description'] == 'y') {?>
					<td class="text">
						<?php if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') || ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['individual'] == 'n') || ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['individual_tiki_p_read_blog'] == 'y')) {?>
							<a class="blogname" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['blogId'],'blog');?>
">
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['title']) {?>
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_truncate($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['title'],$_smarty_tpl->tpl_vars['prefs']->value['blog_list_title_len'],"...",true) ));?>

						<?php } else { ?>
							&nbsp;
						<?php }?>
						<?php if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') || ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['individual'] == 'n') || ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['individual_tiki_p_read_blog'] == 'y')) {?>
							</a>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_description'] == 'y') {?>
							<div class="form-text"><?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['description'] )));?>
</div>
						<?php }?>
					</td>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_created'] == 'y') {?>
					<td class="date">&nbsp;<?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['created']);?>
&nbsp;</td><!--tiki_date_format:"%b %d" -->
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_lastmodif'] == 'y') {?>
					<td class="date">&nbsp;<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['lastModif']);?>
&nbsp;</td><!--tiki_date_format:"%d of %b [%H:%M]"-->
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_user'] != 'disabled') {?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_user'] == 'link') {?>
						<td class="username">&nbsp;<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['user']);?>
&nbsp;</td>
					<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_user'] == 'avatar') {?>
						<td>&nbsp;<?php echo smarty_modifier_avatarize($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['user']);?>
&nbsp;<br>
						&nbsp;<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['user']);?>
&nbsp;</td>
					<?php } else { ?>
						<td class="username">&nbsp;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['user'] ));?>
&nbsp;</td>
					<?php }?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_posts'] == 'y') {?>
					<td class="integer"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['posts'];?>
</td>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_visits'] == 'y') {?>
					<td class="integer"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['hits'];?>
</td>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['blog_list_activity'] == 'y') {?>
					<td class="integer"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['activity'];?>
</td>
				<?php }?>
				<td class="action">
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('actions', array());
$_block_repeat=true;
echo smarty_block_actions(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') || ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['individual'] == 'n') || ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['individual_tiki_p_read_blog'] == 'y')) {?><action><a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['blogId'],'blog');?>
"><?php echo smarty_function_icon(array('name'=>"view",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"View"),$_smarty_tpl);?>
</a></action><?php }
if (($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['user'] == $_smarty_tpl->tpl_vars['user']->value) || ($_smarty_tpl->tpl_vars['tiki_p_blog_admin']->value == 'y')) {
if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') || ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['individual'] == 'n') || ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['individual_tiki_p_blog_create_blog'] == 'y')) {?><action><a href="tiki-edit_blog.php?blogId=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['blogId'];?>
"><?php echo smarty_function_icon(array('name'=>"edit",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a></action><?php }
}
if ($_smarty_tpl->tpl_vars['tiki_p_blog_post']->value == 'y') {
if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') || ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['individual'] == 'n') || ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['individual_tiki_p_blog_post'] == 'y')) {
if (($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['user'] == $_smarty_tpl->tpl_vars['user']->value) || ($_smarty_tpl->tpl_vars['tiki_p_blog_admin']->value == 'y') || ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['public'] == 'y')) {?><action><a href="tiki-blog_post.php?blogId=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['blogId'];?>
"><?php echo smarty_function_icon(array('name'=>"post",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Post"),$_smarty_tpl);?>
</a></action><?php }
}
}
if ($_smarty_tpl->tpl_vars['tiki_p_blog_admin']->value == 'y' && $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['allow_comments'] == 'y') {?><action><a href='tiki-list_comments.php?types_section=blogs&amp;blogId=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['blogId'];?>
'><?php echo smarty_function_icon(array('name'=>"comments",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Comments"),$_smarty_tpl);?>
</a></action><?php }
if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_assign_perm_blog']->value == 'y') {?><action><?php echo smarty_function_permission_link(array('mode'=>'text','type'=>"blog",'permType'=>"blogs",'id'=>$_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['blogId']),$_smarty_tpl);?>
</action><?php }
if (($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['user'] == $_smarty_tpl->tpl_vars['user']->value) || ($_smarty_tpl->tpl_vars['tiki_p_blog_admin']->value == 'y')) {
if (($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') || ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['individual'] == 'n') || ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['individual_tiki_p_blog_create_blog'] == 'y')) {?><action><a href="tiki-list_blogs.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;remove=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['blogId'];?>
"><?php echo smarty_function_icon(array('name'=>"delete",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>
</a></action><?php }
}?>
					<?php $_block_repeat=false;
echo smarty_block_actions(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				</td>
			</tr>
		<?php }} else {
 ?>
			<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['numbercol']->value),$_smarty_tpl);?>

		<?php
}
?>
	</table>
</div>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
