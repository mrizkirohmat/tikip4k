<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:28:27
  from 'C:\xampp\htdocs\tikip4k\templates\layouts\internal\modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126457ba80230_69550744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2381e1b8865aa4b7dd0334612d523224b51a5422' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\layouts\\internal\\modal.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126457ba80230_69550744 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<?php if (!(isset($_smarty_tpl->tpl_vars['noheader']->value)) || $_smarty_tpl->tpl_vars['noheader']->value !== 'y') {?>
	<div class="modal-header">
		<h4 class="modal-title" id="myModalLabel"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value ));
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17008149376126457ba76f08_26905923', 'subtitle');
?>
</h4>
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	</div>
<?php }?>
<div class="modal-body">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18877030106126457ba78537_72463701', 'content');
?>

	<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console'] == 'y' && !empty($_REQUEST['show_smarty_debug'])) {?>
		<?php $_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
?>
	<?php }?>
</div>
<div class="modal-footer">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3305294056126457ba7f903_35283919', 'buttons');
?>

</div>
<?php }
/* {block 'subtitle'} */
class Block_17008149376126457ba76f08_26905923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subtitle' => 
  array (
    0 => 'Block_17008149376126457ba76f08_26905923',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'subtitle'} */
/* {block 'content'} */
class Block_18877030106126457ba78537_72463701 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18877030106126457ba78537_72463701',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'buttons'} */
class Block_3305294056126457ba7f903_35283919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'buttons' => 
  array (
    0 => 'Block_3305294056126457ba7f903_35283919',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<button type="button" class="btn btn-secondary btn-dismiss" data-dismiss="modal">Close</button>
	<?php
}
}
/* {/block 'buttons'} */
}
