<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:36:47
  from 'C:\xampp\htdocs\tikip4k\templates\blog_heading.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126638f89c302_89743834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b308bdb87d858d64f2ca4bc4370d6f2ae2d0fef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\blog_heading.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blog_actions.tpl' => 1,
  ),
),false)) {
function content_6126638f89c302_89743834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),));
?>

<?php if ($_smarty_tpl->tpl_vars['blog_data']->value['use_title'] == 'y') {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "blog_actions", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender('file:blog_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('actions'=>((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'blog_actions'))));
$_block_repeat=true;
echo smarty_block_title(array('actions'=>((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'blog_actions'))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['title']->value;
$_block_repeat=false;
echo smarty_block_title(array('actions'=>((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'blog_actions'))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['blog_data']->value['use_description'] == 'y' && $_smarty_tpl->tpl_vars['description']->value != '') {?>
	<div class="description form-text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['description']->value ));?>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['blog_data']->value['use_breadcrumbs'] == 'y') {?>
	<div class="breadcrumb"><a class="link" href="tiki-list_blogs.php">Blogs</a> <?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_crumb_seper'];?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value ));?>
</div>
<?php }?>


<?php }
}
