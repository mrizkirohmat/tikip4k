<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:56:35
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-searchindex.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61265a239a5c44_19780575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2d5cc3854806350e202670278c22f923048094b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-searchindex.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tiki-searchindex_form.tpl' => 1,
  ),
),false)) {
function content_61265a239a5c44_19780575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58684685961265a23995ca6_45589914', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118917365861265a239a0fb6_11395843', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout_view.tpl');
}
/* {block 'title'} */
class Block_58684685961265a23995ca6_45589914 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_58684685961265a23995ca6_45589914',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),));
?>

	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"Search",'admpage'=>"search"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"Search",'admpage'=>"search"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Search<?php $_block_repeat=false;
echo smarty_block_title(array('help'=>"Search",'admpage'=>"search"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_118917365861265a239a0fb6_11395843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_118917365861265a239a0fb6_11395843',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:tiki-searchindex_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
}
