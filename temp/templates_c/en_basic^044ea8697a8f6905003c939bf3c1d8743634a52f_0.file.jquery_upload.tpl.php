<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:35:09
  from 'C:\xampp\htdocs\tikip4k\templates\file\jquery_upload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126470d956007_40864228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '044ea8697a8f6905003c939bf3c1d8743634a52f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\file\\jquery_upload.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126470d956007_40864228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),));
?>



<div class="form-group row">
	<div class="col-md-12">
		<div class="card bg-light fileupload mb-0">
			<div class="card-body">
				<h3 class="text-center"><?php echo smarty_function_icon(array('name'=>"cloud-upload"),$_smarty_tpl);?>
 Drop files or 
					<div class="btn btn-primary fileinput-button">
						<span>Choose files</span>
						
						<input id="fileupload" type="file" name="files[]" multiple>
					</div>
				</h3>
			</div>
		</div>
	</div>
</div>
<div class="form-group row">
	<div id="files" class="files text-center col-md-12"></div>
</div>
<div class="col-sm-12">
<div class="form-check">
	<label for="autoupload" class="form-check-label">
		<input class="form-check-input" type="checkbox" id="autoupload" name="autoupload"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['filegals_autoupload'] == 'y') {?> checked="checked"<?php }?>>
		Automatic upload
	</label>
</div>
</div>
<div class="d-none">
	<?php echo smarty_function_icon(array('name'=>'file','id'=>'file_icon'),$_smarty_tpl);?>

	<?php echo smarty_function_icon(array('name'=>'pdf','id'=>'pdf_icon'),$_smarty_tpl);?>

	<?php echo smarty_function_icon(array('name'=>'video','id'=>'video_icon'),$_smarty_tpl);?>

	<?php echo smarty_function_icon(array('name'=>'audio','id'=>'audio_icon'),$_smarty_tpl);?>

	<?php echo smarty_function_icon(array('name'=>'zip','id'=>'zip_icon'),$_smarty_tpl);?>

</div>
<?php }
}
