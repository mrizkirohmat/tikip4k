<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:42:50
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-ajax_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612648dae39be3_21370460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f78c2337bfbe5ae75659a39a4ba0df5d6893ecc2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-ajax_header.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612648dae39be3_21370460 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax'] == 'y') {?>
<div id="ajaxLoading">Loading...</div>
<div id="ajaxLoadingBG">&nbsp;</div>
<div id="ajaxDebug"></div>
<?php }
}
}
