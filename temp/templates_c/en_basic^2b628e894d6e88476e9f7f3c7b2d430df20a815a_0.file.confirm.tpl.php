<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:36:55
  from 'C:\xampp\htdocs\tikip4k\templates\access\confirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612655872828f8_06879420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b628e894d6e88476e9f7f3c7b2d430df20a815a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\access\\confirm.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:access/include_items.tpl' => 1,
    'file:access/include_hidden.tpl' => 1,
    'file:access/include_extra_fields.tpl' => 1,
    'file:access/include_submit.tpl' => 1,
  ),
),false)) {
function content_612655872828f8_06879420 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163334639261265587262f46_88510867', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172827357761265587273374_96902778', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout_view.tpl');
}
/* {block "title"} */
class Block_163334639261265587262f46_88510867 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_163334639261265587262f46_88510867',
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
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value ));
$_block_repeat=false;
echo smarty_block_title(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_172827357761265587273374_96902778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_172827357761265587273374_96902778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),));
?>

	<form
		id="confirm-action"<?php if (!(isset($_smarty_tpl->tpl_vars['confirmClass']->value)) || $_smarty_tpl->tpl_vars['confirmClass']->value != 'n') {?> class='confirm-action'<?php }?>
		action="<?php echo smarty_function_service(array('controller'=>((string)$_smarty_tpl->tpl_vars['confirmController']->value),'action'=>((string)$_smarty_tpl->tpl_vars['confirmAction']->value)),$_smarty_tpl);?>
"
		method="post"
	>
		<?php $_smarty_tpl->_subTemplateRender('file:access/include_items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender('file:access/include_hidden.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender('file:access/include_extra_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender('file:access/include_submit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</form>
	<?php if (!empty($_smarty_tpl->tpl_vars['extra']->value['help'])) {?>
		<span class="form-text">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['extra']->value['help'] ));?>

		</span>
	<?php }
}
}
/* {/block "content"} */
}
