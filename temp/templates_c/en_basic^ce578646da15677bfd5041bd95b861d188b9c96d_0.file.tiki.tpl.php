<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:27:07
  from 'C:\xampp\htdocs\tikip4k\templates\tiki.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126452bb3a303_09718434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce578646da15677bfd5041bd95b861d188b9c96d' => 
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
function content_6126452bb3a303_09718434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17990926046126452bb38ba9_39848040', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8225126796126452bb398c1_58885552', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout_view.tpl');
}
/* {block 'title'} */
class Block_17990926046126452bb38ba9_39848040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17990926046126452bb38ba9_39848040',
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
class Block_8225126796126452bb398c1_58885552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8225126796126452bb398c1_58885552',
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
