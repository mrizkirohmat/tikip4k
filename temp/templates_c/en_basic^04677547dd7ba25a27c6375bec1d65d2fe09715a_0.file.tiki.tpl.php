<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:31:54
  from 'C:\xampp\htdocs\tikip4k\templates\tiki.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126464a189588_09422569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04677547dd7ba25a27c6375bec1d65d2fe09715a' => 
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
function content_6126464a189588_09422569 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18865102986126464a188128_50754553', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14332544096126464a188c33_47413743', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout_view.tpl');
}
/* {block 'title'} */
class Block_18865102986126464a188128_50754553 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18865102986126464a188128_50754553',
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
class Block_14332544096126464a188c33_47413743 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14332544096126464a188c33_47413743',
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
