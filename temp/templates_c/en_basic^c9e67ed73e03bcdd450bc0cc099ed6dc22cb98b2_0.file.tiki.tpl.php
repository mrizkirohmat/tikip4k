<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:32:30
  from 'C:\xampp\htdocs\tikip4k\templates\tiki.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126466e129605_13010118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9e67ed73e03bcdd450bc0cc099ed6dc22cb98b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126466e129605_13010118 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12978062896126466e126b02_55007482', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_635241736126466e1280a1_13700849', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout_view.tpl');
}
/* {block 'title'} */
class Block_12978062896126466e126b02_55007482 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12978062896126466e126b02_55007482',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<!-- Legacy template, no support for title block -->
<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_635241736126466e1280a1_13700849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_635241736126466e1280a1_13700849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo $_smarty_tpl->tpl_vars['mid_data']->value;?>

<?php
}
}
/* {/block 'content'} */
}
