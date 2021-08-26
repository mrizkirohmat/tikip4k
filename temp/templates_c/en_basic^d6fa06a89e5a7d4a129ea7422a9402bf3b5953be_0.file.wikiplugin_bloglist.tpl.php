<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:31:54
  from 'C:\xampp\htdocs\tikip4k\templates\wiki-plugins\wikiplugin_bloglist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126464aeb6ff0_78801707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6fa06a89e5a7d4a129ea7422a9402bf3b5953be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\wiki-plugins\\wikiplugin_bloglist.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126464aeb6ff0_78801707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_date.php','function'=>'smarty_modifier_tiki_short_date',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.username.php','function'=>'smarty_modifier_username',),));
?>
<div class="blogtools<?php if (!empty($_smarty_tpl->tpl_vars['container_class']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['container_class']->value;
}?>">
<div class="table-responsive">
<table class="table">
<tr><th>Date</th><th>Title</th><th>Author</th></tr>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogItems']->value, 'blogItem');
$_smarty_tpl->tpl_vars['blogItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blogItem']->value) {
$_smarty_tpl->tpl_vars['blogItem']->do_else = false;
?>
	<tr>
		<td><?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['blogItem']->value['created']);?>
</td>
		<td><a class="link" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['blogItem']->value['postId'],'blogpost');?>
"><?php echo $_smarty_tpl->tpl_vars['blogItem']->value['title'];?>
</a></td>
		<td><?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['blogItem']->value['user']);?>
</td>
	</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
</div>
</div><?php }
}
