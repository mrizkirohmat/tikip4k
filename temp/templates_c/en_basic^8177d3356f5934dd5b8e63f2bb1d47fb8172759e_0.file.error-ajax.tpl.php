<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:33:38
  from 'C:\xampp\htdocs\tikip4k\templates\error-ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612654c22fe943_00503507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8177d3356f5934dd5b8e63f2bb1d47fb8172759e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\error-ajax.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612654c22fe943_00503507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1409561703612654c22f5bb8_65147900', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1977005754612654c22fa868_79374514', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "internal/ajax.tpl");
}
/* {block 'title'} */
class Block_1409561703612654c22f5bb8_65147900 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1409561703612654c22f5bb8_65147900',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),));
?>

	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array());
$_block_repeat=true;
echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Oops<?php $_block_repeat=false;
echo smarty_block_title(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_1977005754612654c22fa868_79374514 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1977005754612654c22fa868_79374514',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="alert alert-warning">
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['detail']->value['message'] ));?>

	</div>
<?php
}
}
/* {/block 'content'} */
}
