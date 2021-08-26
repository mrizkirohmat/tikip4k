<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:04:01
  from 'C:\xampp\htdocs\tikip4k\templates\layouts\internal\modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61263fc1d70499_02850261',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66dccf5cd55077251243a4f070c561a25f35d8c2' => 
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
function content_61263fc1d70499_02850261 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<?php if (!(isset($_smarty_tpl->tpl_vars['noheader']->value)) || $_smarty_tpl->tpl_vars['noheader']->value !== 'y') {?>
	<div class="modal-header">
		<h4 class="modal-title" id="myModalLabel"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value ));
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190120716361263fc1d689e1_09575808', 'subtitle');
?>
</h4>
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	</div>
<?php }?>
<div class="modal-body">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92701118761263fc1d69569_85576622', 'content');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156142971761263fc1d6fb39_61580159', 'buttons');
?>

</div>
<?php }
/* {block 'subtitle'} */
class Block_190120716361263fc1d689e1_09575808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subtitle' => 
  array (
    0 => 'Block_190120716361263fc1d689e1_09575808',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'subtitle'} */
/* {block 'content'} */
class Block_92701118761263fc1d69569_85576622 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_92701118761263fc1d69569_85576622',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'buttons'} */
class Block_156142971761263fc1d6fb39_61580159 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'buttons' => 
  array (
    0 => 'Block_156142971761263fc1d6fb39_61580159',
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
