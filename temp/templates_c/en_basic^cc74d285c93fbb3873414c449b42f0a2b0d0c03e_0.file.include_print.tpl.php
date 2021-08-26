<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:31:18
  from 'C:\xampp\htdocs\tikip4k\templates\admin\include_print.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61266246810c67_02630646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc74d285c93fbb3873414c449b42f0a2b0d0c03e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\admin\\include_print.tpl',
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
function content_61266246810c67_02630646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.preference.php','function'=>'smarty_function_preference',),));
?>

<form action="tiki-admin.php?page=print" class="admin" method="post">
	<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

	<div class="t_navbar mb-4 clearfix">
		<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>

	<fieldset>
		<legend>PDF settings</legend>
		<?php echo smarty_function_preference(array('name'=>'print_pdf_from_url'),$_smarty_tpl);?>

		<div class="adminoptionboxchild print_pdf_from_url_childcontainer webkit">
			<?php echo smarty_function_preference(array('name'=>'print_pdf_webkit_path'),$_smarty_tpl);?>

		</div>
		<div class="adminoptionboxchild print_pdf_from_url_childcontainer weasyprint">
			<?php echo smarty_function_preference(array('name'=>'print_pdf_weasyprint_path'),$_smarty_tpl);?>

		</div>
		<div class="adminoptionboxchild print_pdf_from_url_childcontainer webservice">
			<?php echo smarty_function_preference(array('name'=>'print_pdf_webservice_url'),$_smarty_tpl);?>

		</div>
		<div class="adminoptionboxchild print_pdf_from_url_childcontainer mpdf">
			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_orientation'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_size'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_printfriendly'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_toc'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_toclinks'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_tocheading'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_toclevels'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_pagetitle'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_header'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_footer'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_margin_left'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_margin_right'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_margin_top'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_margin_bottom'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_margin_header'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_margin_footer'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_hyperlinks'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_autobookmarks'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_columns'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_password'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_watermark'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_watermark_image'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_background'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_background_image'),$_smarty_tpl);?>

 			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_coverpage_text_settings'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_coverpage_image_settings'),$_smarty_tpl);?>



		</div>
		<?php echo smarty_function_preference(array('name'=>'allocate_memory_print_pdf'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'allocate_time_print_pdf'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_slideshow_pdfexport'),$_smarty_tpl);?>

	</fieldset>

	<fieldset>
		<legend>Wiki print version</legend>
		<?php echo smarty_function_preference(array('name'=>'print_wiki_authors'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_wiki_print'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_wiki_print_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'feature_wiki_multiprint'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'feature_print_indexed'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'print_original_url_wiki'),$_smarty_tpl);?>

	</fieldset>

	<fieldset>
		<legend>Articles</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_cms_print'),$_smarty_tpl);?>

	</fieldset>

	<fieldset>
		<legend>Other features</legend>
		<?php echo smarty_function_preference(array('name'=>'print_original_url_tracker'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'print_original_url_forum'),$_smarty_tpl);?>


	</fieldset>
	<?php $_smarty_tpl->_subTemplateRender('file:admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</form>
<?php }
}
