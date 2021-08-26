<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:00:43
  from 'C:\xampp\htdocs\tikip4k\templates\trackerinput\email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61263efb0b9005_34406340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50b78769e3c8ff80acef3bd1722a2b79cb086c5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\trackerinput\\email.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61263efb0b9005_34406340 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="email" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['ins_id'];?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['value'] ));?>
" class="form-control">
<?php }
}
