<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:36:54
  from 'C:\xampp\htdocs\tikip4k\templates\blog_post_related_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61266396647942_45650041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84d6a97205b7cd33c1c85eef45cb3843c7beca27' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\blog_post_related_content.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61266396647942_45650041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.self_link.php','function'=>'smarty_block_self_link',),));
?>

<?php if ((isset($_smarty_tpl->tpl_vars['post_info']->value['related_posts'])) && !empty($_smarty_tpl->tpl_vars['post_info']->value['related_posts'])) {?>
	<div class="related_posts">
		<h4>Related content:</h4>
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post_info']->value['related_posts'], 'related');
$_smarty_tpl->tpl_vars['related']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['related']->value) {
$_smarty_tpl->tpl_vars['related']->do_else = false;
?>
				<li><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('postId'=>$_smarty_tpl->tpl_vars['related']->value['postId']));
$_block_repeat=true;
echo smarty_block_self_link(array('postId'=>$_smarty_tpl->tpl_vars['related']->value['postId']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['related']->value['name'];
$_block_repeat=false;
echo smarty_block_self_link(array('postId'=>$_smarty_tpl->tpl_vars['related']->value['postId']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
<?php }
}
}
