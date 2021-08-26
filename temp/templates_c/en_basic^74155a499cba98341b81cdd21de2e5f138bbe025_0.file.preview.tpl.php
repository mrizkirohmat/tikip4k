<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:03:20
  from 'C:\xampp\htdocs\tikip4k\templates\menu\preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61263f98759f59_80013759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74155a499cba98341b81cdd21de2e5f138bbe025' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\menu\\preview.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61263f98759f59_80013759 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81520097461263f9873b1d6_40571399', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37030603861263f9874f3b2_13366512', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout_view.tpl');
}
/* {block "title"} */
class Block_81520097461263f9873b1d6_40571399 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_81520097461263f9873b1d6_40571399',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),));
?>

	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array());
$_block_repeat=true;
echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menuInfo']->value['title'] ));
$_block_repeat=false;
echo smarty_block_title(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_37030603861263f9874f3b2_13366512 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_37030603861263f9874f3b2_13366512',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.menu.php','function'=>'smarty_function_menu',),));
?>

	<h2>Smarty Code</h2>
	<pre id="preview_code">
	{menu id=<?php echo $_smarty_tpl->tpl_vars['menuId']->value;?>
 type=<?php echo $_smarty_tpl->tpl_vars['preview_type']->value;?>
 css=<?php echo $_smarty_tpl->tpl_vars['preview_css']->value;?>
 bootstrap=<?php echo $_smarty_tpl->tpl_vars['preview_bootstrap']->value;?>
}</pre>
	<div class="card">
		<div class="card-header">
			<h3 class="card-title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menuInfo']->value['name'] ));?>
</h3>
		</div>
		<div class="card-body clearfix">
			<?php if ($_smarty_tpl->tpl_vars['preview_type']->value == 'horiz') {?>
				<nav class="navbar navbar-expand-lg <?php if ($_smarty_tpl->tpl_vars['prefs']->value['theme_navbar_color_variant'] == 'dark') {?>navbar-dark bg-dark <?php } else { ?>navbar-light bg-light<?php }?>" role="navigation">
			<?php }?>
					<?php echo smarty_function_menu(array('id'=>$_smarty_tpl->tpl_vars['menuId']->value,'type'=>$_smarty_tpl->tpl_vars['preview_type']->value,'css'=>$_smarty_tpl->tpl_vars['preview_css']->value,'bootstrap'=>$_smarty_tpl->tpl_vars['preview_bootstrap']->value),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['preview_type']->value == 'horiz') {?>
				</nav>
			<?php }?>
		</div>
	</div>
<?php
}
}
/* {/block "content"} */
}
