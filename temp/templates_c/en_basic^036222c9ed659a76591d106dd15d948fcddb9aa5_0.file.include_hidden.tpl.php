<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:33:06
  from 'C:\xampp\htdocs\tikip4k\templates\access\include_hidden.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612654a25b2989_83700259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '036222c9ed659a76591d106dd15d948fcddb9aa5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\access\\include_hidden.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612654a25b2989_83700259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),));
if ((isset($_smarty_tpl->tpl_vars['items']->value))) {?>
	<?php $_smarty_tpl->_assignInScope('encodedItems', json_encode($_smarty_tpl->tpl_vars['items']->value));?>
	<input type='hidden' name='items' value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['encodedItems']->value ));?>
">
<?php }
if ((isset($_smarty_tpl->tpl_vars['extra']->value))) {?>
	<?php $_smarty_tpl->_assignInScope('encodedExtra', json_encode($_smarty_tpl->tpl_vars['extra']->value));?>
	<input type='hidden' name='extra' value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['encodedExtra']->value ));?>
">
<?php }
if ((isset($_smarty_tpl->tpl_vars['toList']->value))) {?>
	<?php $_smarty_tpl->_assignInScope('encodedToList', json_encode($_smarty_tpl->tpl_vars['toList']->value));?>
	<input type='hidden' name='toList' value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['encodedToList']->value ));?>
">
<?php }
echo smarty_function_ticket(array('mode'=>"confirm"),$_smarty_tpl);
}
}
