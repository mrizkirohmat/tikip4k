<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:27:51
  from 'C:\xampp\htdocs\tikip4k\templates\tiki.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612645570609f6_04167137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '734d4c470c2877fb1966b5b86486cacb5fdb34fc' => 
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
function content_612645570609f6_04167137 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3675634446126455705f342_68207073', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17066197361264557060031_83738361', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout_view.tpl');
}
/* {block 'title'} */
class Block_3675634446126455705f342_68207073 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3675634446126455705f342_68207073',
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
class Block_17066197361264557060031_83738361 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17066197361264557060031_83738361',
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
