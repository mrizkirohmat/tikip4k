<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:04:59
  from 'C:\xampp\htdocs\tikip4k\templates\blog_post_postbody_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61263ffbd64af6_66072568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f97b9894dce5a77ccc62d7cf5360d0490319c0f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\blog_post_postbody_content.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61263ffbd64af6_66072568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.self_link.php','function'=>'smarty_block_self_link',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),));
?>

<?php if ($_smarty_tpl->tpl_vars['blog_post_context']->value == 'view_blog' && $_smarty_tpl->tpl_vars['use_excerpt']->value == 'y' && !empty($_smarty_tpl->tpl_vars['post_info']->value['excerpt'])) {?>
	<div class="postbody-content postbody-excerpt card-body">
		<?php echo $_smarty_tpl->tpl_vars['post_info']->value['parsed_excerpt'];?>

		<div class="read-more-wrapper mt-1"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_script'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['post_info']->value['postId'],'blogpost'),'_noauto'=>'y','_class'=>"btn btn-link pl-0"));
$_block_repeat=true;
echo smarty_block_self_link(array('_script'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['post_info']->value['postId'],'blogpost'),'_noauto'=>'y','_class'=>"btn btn-link pl-0"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo smarty_function_icon(array('name'=>"book-reader"),$_smarty_tpl);?>
 Read more<?php $_block_repeat=false;
echo smarty_block_self_link(array('_script'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['post_info']->value['postId'],'blogpost'),'_noauto'=>'y','_class'=>"btn btn-link pl-0"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div>
	</div>
<?php } else { ?>
	<div class="postbody-content card-body">
		<?php echo $_smarty_tpl->tpl_vars['post_info']->value['parsed_data'];?>

	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['post_info']->value['pages'] > 1) {?>
	<div class="postbody-pagination">
		<?php if ($_smarty_tpl->tpl_vars['blog_post_context']->value == 'view_blog') {?>
			<a class="link more" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['post_info']->value['postId'],'blogpost');?>
">
			More... (<?php echo $_smarty_tpl->tpl_vars['post_info']->value['pages'];?>
 pages)</a>
		<?php } else { ?>
			<div align="center">
				<a class="tips" title=":First" href="tiki-view_blog_post.php?blogId=<?php echo $_REQUEST['blogId'];?>
&amp;postId=<?php echo $_REQUEST['postId'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['post_info']->value['first_page'];?>
">
					<?php echo smarty_function_icon(array('name'=>'backward_step'),$_smarty_tpl);?>

				</a>
				<a class="tips" title=":Previous" href="tiki-view_blog_post.php?blogId=<?php echo $_REQUEST['blogId'];?>
&amp;postId=<?php echo $_REQUEST['postId'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['post_info']->value['prev_page'];?>
">
					<?php echo smarty_function_icon(array('name'=>'backward'),$_smarty_tpl);?>

				</a>
				<small>page:<?php echo $_smarty_tpl->tpl_vars['post_info']->value['pagenum'];?>
/<?php echo $_smarty_tpl->tpl_vars['post_info']->value['pages'];?>
</small>
				<a class="tips" title=":Next" href="tiki-view_blog_post.php?blogId=<?php echo $_REQUEST['blogId'];?>
&amp;postId=<?php echo $_REQUEST['postId'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['post_info']->value['next_page'];?>
">
					<?php echo smarty_function_icon(array('name'=>'forward'),$_smarty_tpl);?>

				</a>
				<a class="tips" title=":Last" href="tiki-view_blog_post.php?blogId=<?php echo $_REQUEST['blogId'];?>
&amp;postId=<?php echo $_REQUEST['postId'];?>
&amp;page=<?php echo $_smarty_tpl->tpl_vars['post_info']->value['last_page'];?>
">
					<?php echo smarty_function_icon(array('name'=>'forward_step'),$_smarty_tpl);?>

				</a>
			</div>
		<?php }?>
	</div>
<?php }
}
}
