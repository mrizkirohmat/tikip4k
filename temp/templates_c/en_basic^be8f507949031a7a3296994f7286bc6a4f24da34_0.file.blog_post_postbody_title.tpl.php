<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:04:59
  from 'C:\xampp\htdocs\tikip4k\templates\blog_post_postbody_title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61263ffb8eafc5_77227578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be8f507949031a7a3296994f7286bc6a4f24da34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\blog_post_postbody_title.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blog_post_actions.tpl' => 2,
    'file:blog_post_author_info.tpl' => 1,
    'file:freetag_list.tpl' => 2,
  ),
),false)) {
function content_61263ffb8eafc5_77227578 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.object_link.php','function'=>'smarty_function_object_link',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),));
?>

<header class="clearfix card-header">
	<div class="blog-postbody-title">
		<?php if ($_smarty_tpl->tpl_vars['blog_post_context']->value == 'view_blog') {?>
			<h2 class="card-title">
				<?php echo smarty_function_object_link(array('type'=>"blog post",'id'=>$_smarty_tpl->tpl_vars['post_info']->value['postId'],'title'=>$_smarty_tpl->tpl_vars['post_info']->value['title']),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['post_info']->value['priv'] == 'y') {?> <span class="label label-warning">private</span><?php }?>
			</h2>
			<?php $_smarty_tpl->_subTemplateRender('file:blog_post_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php } elseif ($_smarty_tpl->tpl_vars['blog_post_context']->value == 'excerpt') {?>
			<bold><?php echo smarty_function_object_link(array('type'=>"blog post",'id'=>$_smarty_tpl->tpl_vars['post_info']->value['postId'],'title'=>$_smarty_tpl->tpl_vars['post_info']->value['title']),$_smarty_tpl);?>
</bold>
		<?php } else { ?>
			<h2 class="card-title">
				<?php echo smarty_function_object_link(array('type'=>"blog post",'id'=>$_smarty_tpl->tpl_vars['post_info']->value['postId'],'title'=>$_smarty_tpl->tpl_vars['post_info']->value['title']),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['post_info']->value['priv'] == 'y') {?> <span class="label label-warning">private</span><?php }?>
				<a aria-hidden="true" class="tiki_anchor" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['post_info']->value['postId'],'blogpost');?>
" title="permanent link"><?php echo smarty_function_icon(array('name'=>"link"),$_smarty_tpl);?>
</a>
			</h2>

			<?php $_smarty_tpl->_subTemplateRender('file:blog_post_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		<?php }?>
		<?php $_smarty_tpl->_subTemplateRender('file:blog_post_author_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['blog_post_context']->value == 'preview') {?>
		<?php $_smarty_tpl->_subTemplateRender('file:freetag_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('freetags'=>$_smarty_tpl->tpl_vars['post_info']->value['freetags'],'links_inactive'=>'y'), 0, false);
?>
	<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender('file:freetag_list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('freetags'=>$_smarty_tpl->tpl_vars['post_info']->value['freetags']), 0, true);
?>
	<?php }?>
</header>
<?php }
}
