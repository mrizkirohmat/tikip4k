<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:36:47
  from 'C:\xampp\htdocs\tikip4k\templates\blog_post_author_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126638fcc92c3_92557924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c091858a3b3dba353f759302ee297c6e01483cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\blog_post_author_info.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126638fcc92c3_92557924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.userlink.php','function'=>'smarty_modifier_userlink',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_long_date.php','function'=>'smarty_modifier_tiki_long_date',),));
?>

<div class="author_info">
	<?php if ($_smarty_tpl->tpl_vars['blog_data']->value['show_avatar'] == 'y') {?>
		<?php echo $_smarty_tpl->tpl_vars['post_info']->value['avatar'];?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['blog_data']->value['use_author'] == 'y') {?>
		<?php echo smarty_function_icon(array('name'=>"user",'iclass'=>"tips",'ititle'=>":Published By"),$_smarty_tpl);?>

		<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['post_info']->value['user']);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['blog_data']->value['add_date'] == 'y') {?>
		<span style="font-size: 80%"><?php echo smarty_function_icon(array('name'=>"clock-o",'iclass'=>"tips",'ititle'=>":Publish Date"),$_smarty_tpl);?>
</span> <?php echo smarty_modifier_tiki_long_date($_smarty_tpl->tpl_vars['post_info']->value['created']);?>

	<?php }?>
</div>
<?php }
}
