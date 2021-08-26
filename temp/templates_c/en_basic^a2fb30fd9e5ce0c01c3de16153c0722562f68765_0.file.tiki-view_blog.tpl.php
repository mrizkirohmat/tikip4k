<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:36:47
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-view_blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126638f79be48_83356764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2fb30fd9e5ce0c01c3de16153c0722562f68765' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-view_blog.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blog_heading.tpl' => 1,
    'file:find.tpl' => 1,
    'file:blog_wrapper.tpl' => 1,
  ),
),false)) {
function content_6126638f79be48_83356764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.pagination_links.php','function'=>'smarty_block_pagination_links',),));
?>

<?php if (!(isset($_smarty_tpl->tpl_vars['show_heading']->value)) || $_smarty_tpl->tpl_vars['show_heading']->value != "n") {?>
	<?php if (strlen($_smarty_tpl->tpl_vars['heading']->value) > 0 && $_smarty_tpl->tpl_vars['prefs']->value['feature_blog_heading'] == 'y') {?>
		<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['heading']->value, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>
	<?php } else { ?>
		<?php $_smarty_tpl->_subTemplateRender('file:blog_heading.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['use_find']->value == 'y') {?>
		<?php $_smarty_tpl->_subTemplateRender('file:find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('find_show_num_rows'=>'y'), 0, false);
?>
	<?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['excerpt']->value == 'y') {?>
	<?php $_smarty_tpl->_assignInScope('request_context', "excerpt");
} else { ?>
	<?php $_smarty_tpl->_assignInScope('request_context', "view_blog");
}?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listpages']->value, 'post_info');
$_smarty_tpl->tpl_vars['post_info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post_info']->value) {
$_smarty_tpl->tpl_vars['post_info']->do_else = false;
?>
	<article class="card blogpost clearfix d-block mb-5<?php if (!empty($_smarty_tpl->tpl_vars['container_class']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['container_class']->value;
}?>">
		<?php $_smarty_tpl->_subTemplateRender('file:blog_wrapper.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('blog_post_context'=>$_smarty_tpl->tpl_vars['request_context']->value), 0, true);
?>
	</article>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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
