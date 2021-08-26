<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:56:35
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-searchindex_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61265a23c55c31_68992602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28cbfd242244350767a3b7ff2ebb66ee3e345e51' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-searchindex_form.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61265a23c55c31_68992602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.filter.php','function'=>'smarty_block_filter',),));
?>

<div class="mb-4 nohighlight">
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_search_box'] == 'y') {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('filter', array('action'=>"tiki-searchindex.php",'filter'=>$_smarty_tpl->tpl_vars['filter']->value));
$_block_repeat=true;
echo smarty_block_filter(array('action'=>"tiki-searchindex.php",'filter'=>$_smarty_tpl->tpl_vars['filter']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_filter(array('action'=>"tiki-searchindex.php",'filter'=>$_smarty_tpl->tpl_vars['filter']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>
</div><!--nohighlight-->
	

<?php if ((isset($_smarty_tpl->tpl_vars['results']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['results']->value;?>

<?php }
}
}
