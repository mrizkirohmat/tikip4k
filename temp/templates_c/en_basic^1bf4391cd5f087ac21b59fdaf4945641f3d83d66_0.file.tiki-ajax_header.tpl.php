<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:26:32
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-ajax_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264508e15691_37192589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bf4391cd5f087ac21b59fdaf4945641f3d83d66' => 
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
function content_61264508e15691_37192589 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax'] == 'y') {?>
<div id="ajaxLoading">Loading...</div>
<div id="ajaxLoadingBG">&nbsp;</div>
<div id="ajaxDebug"></div>
<?php }
}
}
