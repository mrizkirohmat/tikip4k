<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:53:04
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-print.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126676092fde2_88001693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc0ecd23791081cfcf0ded423b546a1322a2dba1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-print.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6126676092fde2_88001693 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.html_body_attributes.php','function'=>'smarty_function_html_body_attributes',),));
?>
<!DOCTYPE html>
<html lang="<?php if (!empty($_smarty_tpl->tpl_vars['pageLang']->value)) {
echo $_smarty_tpl->tpl_vars['pageLang']->value;
} else {
echo $_smarty_tpl->tpl_vars['prefs']->value['language'];
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['page_id']->value)) {?> id="print_page_<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
"<?php }?>>
	<head>
<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</head>
	<body<?php echo smarty_function_html_body_attributes(array(),$_smarty_tpl);?>
>

		<div id="tiki-clean">
			<div id="tiki-mid">
<?php echo $_smarty_tpl->tpl_vars['mid_data']->value;?>

			</div>
		</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</body>
</html>
<?php }
}
