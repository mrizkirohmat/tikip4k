<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:44:40
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-ajax_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612649480b11e8_00928173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53b1fb53b5ee6c5315e151bd4746c82c44fae2c6' => 
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
function content_612649480b11e8_00928173 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax'] == 'y') {?>
<div id="ajaxLoading">Loading...</div>
<div id="ajaxLoadingBG">&nbsp;</div>
<div id="ajaxDebug"></div>
<?php }
}
}
