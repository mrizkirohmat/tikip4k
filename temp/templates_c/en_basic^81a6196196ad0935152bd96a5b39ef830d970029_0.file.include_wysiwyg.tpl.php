<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:29:29
  from 'C:\xampp\htdocs\tikip4k\templates\admin\include_wysiwyg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612653c9b06af6_53717610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a6196196ad0935152bd96a5b39ef830d970029' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\admin\\include_wysiwyg.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/include_apply_top.tpl' => 1,
    'file:admin/include_apply_bottom.tpl' => 1,
  ),
),false)) {
function content_612653c9b06af6_53717610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.preference.php','function'=>'smarty_function_preference',),));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>WYSIWYG means What You See Is What You Get, and is handled in Tiki by <a class="alert-link" href="http://ckeditor.com/">CKEditor</a>.<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<form action="tiki-admin.php?page=wysiwyg" method="post" class="admin">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="t_navbar mb-4 clearfix">
		<a role="button" class="btn btn-link" href="tiki-admin_toolbars.php" title="Toolbars">
			<?php echo smarty_function_icon(array('name'=>"settings"),$_smarty_tpl);?>
 Toolbars
		</a>
		<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_htmltowiki'] != 'y') {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Page links"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Page links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Note that if the SEFURL feature is on, page links created using wysiwyg might not be automatically updated when pages are renamed. This is addressed through the "Use Wiki syntax in WYSIWYG" feature.<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Page links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>
	<fieldset>
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_wysiwyg','visible'=>"always"),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wikiplugin_wysiwyg'),$_smarty_tpl);?>

	</fieldset>
	<fieldset>
		<legend>WYSIWYG editor features</legend>
		<?php echo smarty_function_preference(array('name'=>'wysiwyg_optional'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="wysiwyg_optional_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'wysiwyg_default'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wysiwyg_memo'),$_smarty_tpl);?>

		</div>

		<?php echo smarty_function_preference(array('name'=>'wysiwyg_htmltowiki'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wysiwyg_inline_editing'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wysiwyg_toolbar_skin'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>"wysiwyg_fonts"),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>"wysiwyg_extra_plugins"),$_smarty_tpl);?>

	</fieldset>
	<fieldset>
		<legend class="heading">Related features</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_wiki_paragraph_formatting'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_wiki_paragraph_formatting_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'feature_wiki_paragraph_formatting_add_br'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'feature_ajax'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_ajax_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'ajax_autosave'),$_smarty_tpl);?>

		</div>
	</fieldset>
	<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form><?php }
}
