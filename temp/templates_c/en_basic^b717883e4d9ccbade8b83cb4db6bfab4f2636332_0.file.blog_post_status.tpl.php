<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:04:59
  from 'C:\xampp\htdocs\tikip4k\templates\blog_post_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61263ffbe80d67_19840152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b717883e4d9ccbade8b83cb4db6bfab4f2636332' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\blog_post_status.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61263ffbe80d67_19840152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),));
?>

<?php if ($_smarty_tpl->tpl_vars['blog_post_context']->value == 'view_blog' && $_smarty_tpl->tpl_vars['allow_comments']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_blogposts_comments'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_read_comments']->value == 'y') {?>
	<div class="status">
		<a class="link linkcomments" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['post_info']->value['postId'],'blogpost');?>
#comments">
			<?php if ($_smarty_tpl->tpl_vars['post_info']->value['comments'] == 0 && $_smarty_tpl->tpl_vars['tiki_p_post_comments']->value == 'y') {?>
				<?php echo smarty_function_icon(array('name'=>"comment"),$_smarty_tpl);?>
 Leave a comment
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['post_info']->value['comments'] == 1) {?>
                    <?php echo smarty_function_icon(array('name'=>"comment"),$_smarty_tpl);?>
 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['post_info']->value['comments']));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['post_info']->value['comments']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%0 comment<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['post_info']->value['comments']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php } else { ?>
                    <?php echo smarty_function_icon(array('name'=>"comments"),$_smarty_tpl);?>
 <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['post_info']->value['comments']));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['post_info']->value['comments']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%0 comments<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['post_info']->value['comments']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php }?>
			<?php }?>
		</a>
	</div>
<?php }
}
}
