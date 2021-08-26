<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:36:48
  from 'C:\xampp\htdocs\tikip4k\templates\blog_post_navigation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126639011ac90_02933136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a40ef1d5610bf8e01fb5f5f27e5f58a5c8bae21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\blog_post_navigation.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126639011ac90_02933136 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.self_link.php','function'=>'smarty_block_self_link',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if ($_smarty_tpl->tpl_vars['blog_post_context']->value == 'view_blog_post') {?>
	<div class="row pager">
		<div class="col-6 previous">
			<?php if ($_smarty_tpl->tpl_vars['post_info']->value['adjacent']['prev']) {?>
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_script'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['post_info']->value['adjacent']['prev']['postId'],'blogpost'),'_title'=>"Previous post",'_noauto'=>'y'));
$_block_repeat=true;
echo smarty_block_self_link(array('_script'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['post_info']->value['adjacent']['prev']['postId'],'blogpost'),'_title'=>"Previous post",'_noauto'=>'y'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo smarty_function_icon(array('name'=>"arrow-left"),$_smarty_tpl);?>
 <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post_info']->value['adjacent']['prev']['title']);
$_block_repeat=false;
echo smarty_block_self_link(array('_script'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['post_info']->value['adjacent']['prev']['postId'],'blogpost'),'_title'=>"Previous post",'_noauto'=>'y'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php }?>
		</div>
		<div class="col-6 text-right next">
			<?php if ($_smarty_tpl->tpl_vars['post_info']->value['adjacent']['next']) {?>
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_script'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['post_info']->value['adjacent']['next']['postId'],'blogpost'),'_title'=>"Next post",'_noauto'=>'y'));
$_block_repeat=true;
echo smarty_block_self_link(array('_script'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['post_info']->value['adjacent']['next']['postId'],'blogpost'),'_title'=>"Next post",'_noauto'=>'y'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post_info']->value['adjacent']['next']['title']);?>
 <?php echo smarty_function_icon(array('name'=>"arrow-right"),$_smarty_tpl);?>
 <?php $_block_repeat=false;
echo smarty_block_self_link(array('_script'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['post_info']->value['adjacent']['next']['postId'],'blogpost'),'_title'=>"Next post",'_noauto'=>'y'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php }?>
		</div>
	</div>
<?php }
}
}
