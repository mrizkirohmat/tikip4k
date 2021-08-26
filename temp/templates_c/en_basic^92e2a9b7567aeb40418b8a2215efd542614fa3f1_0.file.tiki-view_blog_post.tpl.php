<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:36:54
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-view_blog_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612663964c7609_61526428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92e2a9b7567aeb40418b8a2215efd542614fa3f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-view_blog_post.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blog_post_heading.tpl' => 1,
    'file:blog_wrapper.tpl' => 1,
    'file:blog_post_related_content.tpl' => 1,
  ),
),false)) {
function content_612663964c7609_61526428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),));
?>

<?php if (strlen($_smarty_tpl->tpl_vars['blog_data']->value['post_heading']) > 0 && $_smarty_tpl->tpl_vars['prefs']->value['feature_blog_heading'] == 'y') {?>
	<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['blog_data']->value['post_heading'], $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch();
} else { ?>
	<?php $_smarty_tpl->_subTemplateRender('file:blog_post_heading.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
<article class="card blogpost post post_single">
	<?php $_smarty_tpl->_subTemplateRender('file:blog_wrapper.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('blog_post_context'=>'view_blog_post'), 0, false);
?>
</article>
<?php $_smarty_tpl->_subTemplateRender('file:blog_post_related_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogposts_comments'] == 'y' && $_smarty_tpl->tpl_vars['blog_data']->value['allow_comments'] == 'y' && ($_smarty_tpl->tpl_vars['tiki_p_read_comments']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_post_comments']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_edit_comments']->value == 'y')) {?>
	<div id="comment-container" data-target="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'list','type'=>"blog post",'objectId'=>$_smarty_tpl->tpl_vars['postId']->value),$_smarty_tpl);?>
"></div>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		var id = '#comment-container';
		$(id).comment_load($(id).data('target'));
		$(document).ajaxComplete(function(){$(id).tiki_popover();});
	<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
