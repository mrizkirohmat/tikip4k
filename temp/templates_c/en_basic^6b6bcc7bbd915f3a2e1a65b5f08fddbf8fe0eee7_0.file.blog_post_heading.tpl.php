<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:04:59
  from 'C:\xampp\htdocs\tikip4k\templates\blog_post_heading.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61263ffb70f9f1_38600919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b6bcc7bbd915f3a2e1a65b5f08fddbf8fe0eee7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\blog_post_heading.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blog_actions.tpl' => 1,
  ),
),false)) {
function content_61263ffb70f9f1_38600919 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),));
?>

<?php if ($_smarty_tpl->tpl_vars['blog_data']->value['use_title_in_post'] == 'y') {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "blog_actions", null, null);
$_smarty_tpl->_subTemplateRender('file:blog_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php ob_start();
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['blogId']->value,'blog');
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('url'=>$_prefixVariable1,'actions'=>((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'blog_actions'))));
$_block_repeat=true;
echo smarty_block_title(array('url'=>$_prefixVariable1,'actions'=>((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'blog_actions'))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['blog_data']->value['title'];
$_block_repeat=false;
echo smarty_block_title(array('url'=>$_prefixVariable1,'actions'=>((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'blog_actions'))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['blog_data']->value['use_breadcrumbs'] == 'y') {?>
	<div class="breadcrumb"><a class="link" href="tiki-list_blogs.php">Blogs</a> <?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_crumb_seper'];?>
 <a class="link" href="tiki-view_blog.php?blogId=<?php echo $_smarty_tpl->tpl_vars['post_info']->value['blogId'];?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_data']->value['title'] ));?>
</a> <?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_crumb_seper'];?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post_info']->value['title'] ));?>
</div>
<?php }?>


<?php }
}
