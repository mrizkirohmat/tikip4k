<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:22:25
  from 'C:\xampp\htdocs\tikip4k\templates\tiki_full.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612644115c0457_41145028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bf135c013df5d8e23ce58e8b29d6c801e261abc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki_full.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:tiki-ajax_header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_612644115c0457_41145028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.html_body_attributes.php','function'=>'smarty_function_html_body_attributes',),));
?>
<!DOCTYPE html>
<html lang="<?php if (!empty($_smarty_tpl->tpl_vars['pageLang']->value)) {
echo $_smarty_tpl->tpl_vars['pageLang']->value;
} else {
echo $_smarty_tpl->tpl_vars['prefs']->value['language'];
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['page_id']->value)) {?> id="page_<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
"<?php }?>>
<head>
	<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body<?php echo smarty_function_html_body_attributes(array(),$_smarty_tpl);?>
>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_bidi'] == 'y') {?>
<div dir="rtl">
<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax'] == 'y') {?>
	<?php $_smarty_tpl->_subTemplateRender('file:tiki-ajax_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
if ($_smarty_tpl->tpl_vars['is_slideshow']->value == 'y') {?>
	<div class="reveal">
		<div class="slides">
<?php } else { ?>
	<div id="main">
		<div id="tiki-center">
			<div id="role_main">
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['mid_data']->value;?>

<?php if ($_smarty_tpl->tpl_vars['is_slideshow']->value == 'y') {?>
	</div>
		<div id="ss-settings-holder" title="Click for slideshow operations"><span class="fas fa-cogs" style="font-size:1rem;color:#666" id="ss-settings"></span></div>
		<div id="ss-options" class="d-flex flex-row justify-content-around align-content-end flex-wrap">
			<div class="p-2">
				<select id="showtheme" class="form-control">
					<option value="">Change Theme</option>
					<?php echo $_smarty_tpl->tpl_vars['themeOptions']->value;?>

				</select>
			</div>
			<div class="p-2">
				<select id="showtransition" class="form-control">
					<option value="">Change Transition</option>
					<option value="zoom">Zoom</option>
					<option value="fade">Fade</option>
					<option value="slide">Slide</option>
					<option value="convex">Convex</option>
					<option value="concave">Concave</option>
					<option value="">Off</option>
				</select>
			</div>
			<div class="p-2" id="reveal-controls"><span class="fas fa-fast-backward mr-1"  id="firstSlide" title="Go to First Slide"></span><span class="fas fa-step-backward mr-1" id="prevSlide" title="Go to Previous Slide"></span><span class="fas fa-play-circle mr-1" id="play"></span><span class="fas fa-undo mr-1 icon-inactive" id="loop" title="Auto-play in loop"></span><span class="fas fa-step-forward mr-1"  id="nextSlide" title="Go to Next Slide"></span><span class="fas fa-fast-forward"  id="lastSlide" title="Go to Last Slide"></span></div>
			<div class="p-2" id="listSlides"><span class="fas fa-list mr-1"   title="List Slides"></span> List Slides</div>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_slideshow_pdfexport'] == 'y') {?>
				<div class="p-2"><a href="tiki-slideshow.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&pdf=1&landscape=1" target="_blank" id="exportPDF"><span class="far fa-file-pdf"></span> Export PDF</a></div>
				<div class="p-2"><a href="tiki-slideshow.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
&pdf=1&printslides=1" target="_blank"><span class="fas fa-print"></span>  Handouts</a></div>
			<?php }?>

			<div class="p-2"><a href="tiki-index.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><span class="fas fa-sign-out-alt"></span> Exit Slideshow</a></div>
		</div>
<?php } else { ?>
			</div>
		</div>
	</div>
<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_bidi'] == 'y') {?>
	</div>
<?php }
$_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>

<?php }
}
