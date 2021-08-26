<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:36:47
  from 'C:\xampp\htdocs\tikip4k\templates\blog_post_actions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126638fb5deb4_24966926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de8c25a632816470ff5a92bd95b9fe1253d179c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\blog_post_actions.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126638fb5deb4_24966926 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.permission_link.php','function'=>'smarty_function_permission_link',),));
?>

<div class="actions blogpostactions float-right btn-group">
	<?php if (!$_smarty_tpl->tpl_vars['js']->value) {?><ul class="cssmenu_horiz"><li><?php }?>
	<a class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#"title="Blog post actions">
		<?php echo smarty_function_icon(array('name'=>"menu-extra"),$_smarty_tpl);?>

	</a>
	<div class="dropdown-menu">
		<h6 class="dropdown-header">
			Blog post actions
		</h6>
		<div class="dropdown-divider"></div>
			<a class="dropdown-item" href="tiki-print_blog_post.php?postId=<?php echo $_smarty_tpl->tpl_vars['post_info']->value['postId'];?>
">
				<?php echo smarty_function_icon(array('name'=>"print",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Print"),$_smarty_tpl);?>

			</a>
		<?php if ($_smarty_tpl->tpl_vars['blog_post_context']->value != 'print') {?>
			<?php if (($_smarty_tpl->tpl_vars['ownsblog']->value == 'y') || ($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['post_info']->value['user'] == $_smarty_tpl->tpl_vars['user']->value) || $_smarty_tpl->tpl_vars['tiki_p_blog_admin']->value == 'y') {?>
					<a class="dropdown-item" href="tiki-blog_post.php?blogId=<?php echo $_smarty_tpl->tpl_vars['post_info']->value['blogId'];?>
&amp;postId=<?php echo $_smarty_tpl->tpl_vars['post_info']->value['postId'];?>
">
						<?php echo smarty_function_icon(array('name'=>"edit"),$_smarty_tpl);?>
 Edit
					</a>
					<a class="dropdown-item" href="tiki-view_blog.php?blogId=<?php echo $_smarty_tpl->tpl_vars['post_info']->value['blogId'];?>
&amp;remove=<?php echo $_smarty_tpl->tpl_vars['post_info']->value['postId'];?>
" onclick="confirmSimple(event, 'Delete this item?', '<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
')">
						<?php echo smarty_function_icon(array('name'=>"remove"),$_smarty_tpl);?>
 Remove
					</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_assign_perm_blog']->value == 'y') {?>
				<span class="dropdown-item"><?php echo smarty_function_permission_link(array('mode'=>'text','type'=>"blog",'permType'=>"blogs",'id'=>$_smarty_tpl->tpl_vars['post_info']->value['blogId']),$_smarty_tpl);?>
</span>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['prefs']->value['feature_notepad'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_notepad']->value == 'y') {?>
					<?php if ($_smarty_tpl->tpl_vars['blog_post_context']->value == 'view_blog') {?>
						<a class="dropdown-item" href="tiki-view_blog.php?blogId=<?php echo $_smarty_tpl->tpl_vars['post_info']->value['blogId'];?>
&amp;savenotepad=<?php echo $_smarty_tpl->tpl_vars['post_info']->value['postId'];?>
" onclick="confirmSimple(event, 'Save to notepad?', '<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
')">
							<?php echo smarty_function_icon(array('name'=>"notepad"),$_smarty_tpl);?>
 Save to notepad
						</a>
					<?php } else { ?>
						<a class="dropdown-item" href="tiki-view_blog_post.php?postId=<?php echo $_REQUEST['postId'];?>
&amp;savenotepad=1" onclick="confirmSimple(event, 'Save to notepad?', '<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
')">
							<?php echo smarty_function_icon(array('name'=>"notepad"),$_smarty_tpl);?>
 Save to notepad
						</a>
					<?php }?>
			<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blog_sharethis'] == "y") {?>
				
				<?php echo '<script'; ?>
 type="text/javascript">
					//Create your sharelet with desired properties and set button element to false
					var object<?php echo $_smarty_tpl->tpl_vars['postId']->value;?>
 = SHARETHIS.addEntry({}, {button:false});
					//Output your customized button
					document.write('<a class="dropdown-item" id="share<?php echo $_smarty_tpl->tpl_vars['postId']->value;?>
" href="#"><?php echo smarty_function_icon(array('name'=>"sharethis"),$_smarty_tpl);?>
 ShareThis</a>');
					//Tie customized button to ShareThis button functionality.
					var element<?php echo $_smarty_tpl->tpl_vars['postId']->value;?>
 = document.getElementById("share<?php echo $_smarty_tpl->tpl_vars['postId']->value;?>
");
					object<?php echo $_smarty_tpl->tpl_vars['postId']->value;?>
.attachButton(element<?php echo $_smarty_tpl->tpl_vars['postId']->value;?>
);
				<?php echo '</script'; ?>
>
				
		<?php }?>
	</div>
	<?php if (!$_smarty_tpl->tpl_vars['js']->value) {?></li></ul><?php }?>
</div>
<?php }
}
