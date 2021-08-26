<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:22:24
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-upload_file.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264410cdd824_05031961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '515dff562c9a2a987032a5e3db7a558e186162d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-upload_file.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:categorize.tpl' => 4,
    'file:metadata/meta_view_tabs.tpl' => 1,
  ),
),false)) {
function content_61264410cdd824_05031961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.kbsize.php','function'=>'smarty_modifier_kbsize',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.filegal_uploader.php','function'=>'smarty_function_filegal_uploader',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.html_select_duration.php','function'=>'smarty_function_html_select_duration',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.user_selector.php','function'=>'smarty_function_user_selector',),9=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),10=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),11=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),12=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),13=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),14=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.wikiplugin.php','function'=>'smarty_block_wikiplugin',),));
?>

<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value) && !(isset($_REQUEST['simpleMode']))) {?>
	<?php $_smarty_tpl->_assignInScope('simpleMode', 'y');
} else { ?>
	<?php $_smarty_tpl->_assignInScope('simpleMode', 'n');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"File Galleries",'admpage'=>"fgal"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"File Galleries",'admpage'=>"fgal"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['editFileId']->value) {?>Edit File: <?php echo $_smarty_tpl->tpl_vars['fileInfo']->value['filename'];
} else { ?>Upload File<?php }
$_block_repeat=false;
echo smarty_block_title(array('help'=>"File Galleries",'admpage'=>"fgal"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if (!empty($_smarty_tpl->tpl_vars['galleryId']->value) || ((isset($_smarty_tpl->tpl_vars['galleries']->value)) && count($_smarty_tpl->tpl_vars['galleries']->value) > 0 && $_smarty_tpl->tpl_vars['tiki_p_list_file_galleries']->value == 'y') || ((isset($_smarty_tpl->tpl_vars['uploads']->value)) && count($_smarty_tpl->tpl_vars['uploads']->value) > 0)) {?>
	<div class="t_navbar mb-4">
		<?php if (!empty($_smarty_tpl->tpl_vars['galleryId']->value)) {?>
			<?php echo smarty_function_button(array('galleryId'=>((string)$_smarty_tpl->tpl_vars['galleryId']->value),'href'=>"tiki-list_file_gallery.php",'class'=>"btn btn-primary",'_text'=>"Browse Gallery"),$_smarty_tpl);?>

		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['galleries']->value)) && count($_smarty_tpl->tpl_vars['galleries']->value) > 0 && $_smarty_tpl->tpl_vars['tiki_p_list_file_galleries']->value == 'y') {?>
			<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
				<?php $_smarty_tpl->_assignInScope('fgmanager', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filegals_manager']->value )));?>
				<?php echo smarty_function_button(array('href'=>"tiki-list_file_gallery.php?filegals_manager=".((string)$_smarty_tpl->tpl_vars['fgmanager']->value),'class'=>"btn btn-info",'_text'=>"List Galleries"),$_smarty_tpl);?>

			<?php } else { ?>
				<?php echo smarty_function_button(array('href'=>"tiki-list_file_gallery.php",'class'=>"btn btn-info",'_text'=>"List Galleries"),$_smarty_tpl);?>

			<?php }?>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['uploads']->value)) && count($_smarty_tpl->tpl_vars['uploads']->value) > 0) {?>
			<?php echo smarty_function_button(array('href'=>"#upload",'class'=>"btn btn-primary",'_text'=>"Upload File"),$_smarty_tpl);?>

		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
			<?php if ($_smarty_tpl->tpl_vars['simpleMode']->value == 'y') {
echo smarty_function_button(array('simpleMode'=>'n','galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value,'href'=>'','class'=>"btn btn-primary",'_text'=>"Advanced mode",'_ajax'=>"n"),$_smarty_tpl);
} else {
echo smarty_function_button(array('galleryId'=>$_smarty_tpl->tpl_vars['galleryId']->value,'href'=>'','_text'=>"Simple mode",'_ajax'=>"n"),$_smarty_tpl);
}?>
			<span<?php if ($_smarty_tpl->tpl_vars['simpleMode']->value == 'y') {?> style="display:none;"<?php }?>>
				<label for="keepOpenCbx">Keep gallery window open</label>
				<input type="checkbox" id="keepOpenCbx" checked="checked">
			</span>
			<div id="tikifeedback" class="col-sm-8 offset-2"></div>
		<?php }?>
	</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['errors']->value)) && count($_smarty_tpl->tpl_vars['errors']->value) > 0) {?>
	<div class="alert alert-danger">
		<h2>Errors detected</h2>
		<?php
$__section_ix_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['errors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_0_total = $__section_ix_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_0_total !== 0) {
for ($__section_ix_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_0_iteration <= $__section_ix_0_total; $__section_ix_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
			<?php echo $_smarty_tpl->tpl_vars['errors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)];?>
<br>
		<?php
}
}
?>
		<?php echo smarty_function_button(array('href'=>"#upload",'_text'=>"Retry"),$_smarty_tpl);?>

	</div>
<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y') {?>
	<div id='progress'>
		<div id='progress_0'></div>
	</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['uploads']->value)) && count($_smarty_tpl->tpl_vars['uploads']->value) > 0) {?>
	<table class="table">
		<?php
$__section_ix_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['uploads']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_1_total = $__section_ix_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_1_total !== 0) {
for ($__section_ix_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_1_iteration <= $__section_ix_1_total; $__section_ix_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
			<tr>
				<td class="text-center">
					<img src="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['fileId'],'thumbnail');?>
">
				</td>
				<td>
					<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value) && $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] === 'y') {?>
						<a href="#" onclick="window.opener.insertAt('<?php echo $_smarty_tpl->tpl_vars['filegals_manager']->value;?>
','<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['files']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['wiki_syntax'] ));?>
');checkClose();return false;" title="Click here to use the file"><?php echo $_smarty_tpl->tpl_vars['uploads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'];?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['uploads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['size']);?>
)</a>
					<?php } else { ?>
						<b><?php echo $_smarty_tpl->tpl_vars['uploads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'];?>
 (<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['uploads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['size']);?>
)</b>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] === 'y') {?>
						<?php echo smarty_function_button(array('href'=>"#",'_flip_id'=>("uploadinfos").($_smarty_tpl->tpl_vars['uploads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['fileId']),'_text'=>"Additional Info"),$_smarty_tpl);?>

					<?php }?>
					<div style="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y') {?>display:none;<?php }?>" id="uploadinfos<?php echo $_smarty_tpl->tpl_vars['uploads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['fileId'];?>
">
						<h5>
							Syntax Tips
						</h5>
						<div>
							Download link using Tiki syntax:
						</div>
						<div class="ml-3">
							<code>
								[<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['fileId'],'file');?>
|<?php echo $_smarty_tpl->tpl_vars['uploads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'];?>
]
							</code>
						</div>
						<div>
							Display an image using Tiki syntax:
						</div>
						<div class="ml-3">
							<code>
								&#x7b;img src="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['fileId'],'preview');?>
" link="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['fileId'],'file');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['uploads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'];?>
"}
							</code>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_shadowbox'] == 'y') {?>
							<div>
								Use as a thumbnail with ShadowBox:
							</div>
						<div class="ml-3">
							<code>
								&#x7b;img src="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['fileId'],'thumbnail');?>
" link="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['uploads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['fileId'],'preview');?>
" rel="shadowbox[gallery];type=img" alt="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"}
							</code>
						</div>
						<?php }?>
						<div>
							Download link using HTML:
						</div>
						<div class="ml-3">
							<code>
								&lt;a href="<?php echo $_smarty_tpl->tpl_vars['uploads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['dllink'];?>
"&gt;<?php echo $_smarty_tpl->tpl_vars['uploads']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'];?>
&lt;/a&gt;
							</code>
						</div>
					</div>
				</td>
			</tr>
		<?php
}
}
?>
	</table>
	<h2>Upload File</h2>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['fileChangedMessage']->value))) {?>
	<div align="center">
		<div class="wikitext">
			<?php echo $_smarty_tpl->tpl_vars['fileChangedMessage']->value;?>

		</div>
	</div>
<?php }
if ($_smarty_tpl->tpl_vars['editFileId']->value && (isset($_smarty_tpl->tpl_vars['fileInfo']->value['lockedby'])) && $_smarty_tpl->tpl_vars['fileInfo']->value['lockedby'] != '') {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"Info",'icon'=>"lock"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Info",'icon'=>"lock"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php if ($_smarty_tpl->tpl_vars['user']->value == $_smarty_tpl->tpl_vars['fileInfo']->value['lockedby']) {?>
			You locked the file
		<?php } else { ?>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>The file has been locked by <?php echo $_smarty_tpl->tpl_vars['fileInfo']->value['lockedby'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>
	<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Info",'icon'=>"lock"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>
<div>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'upload_file', 'upload_str', null);?>
		<div class="fgal_file">
			<div class="fgal_file_c1">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] !== 'y' || $_smarty_tpl->tpl_vars['prefs']->value['file_galleries_use_jquery_upload'] != 'y' || $_smarty_tpl->tpl_vars['editFileId']->value) {?>
					<?php if ($_smarty_tpl->tpl_vars['simpleMode']->value != 'y') {?>
						<div class="form-group row">
							<label for="name" class="col-md-4 col-form-label">File title</label>
							<div class="col-md-8">
								<input class="form-control" type="text" id="name" name="name[]"
									<?php if ((isset($_smarty_tpl->tpl_vars['fileInfo']->value)) && $_smarty_tpl->tpl_vars['fileInfo']->value['name']) {?>
										value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fileInfo']->value['name'] ));?>
"
									<?php }?>
									size="40"
								>
								<?php if ((isset($_smarty_tpl->tpl_vars['gal_info']->value['type'])) && ($_smarty_tpl->tpl_vars['gal_info']->value['type'] == "podcast" || $_smarty_tpl->tpl_vars['gal_info']->value['type'] == "vidcast")) {?>
									(required field for podcasts)
								<?php }?>
							</div>
						</div>
						<div class="form-group row">
							<label for="description" class="col-md-4 col-form-label">File description</label>
							<div class="col-md-8">
								<textarea class="form-control" id="description" name="description[]"><?php if ((isset($_smarty_tpl->tpl_vars['fileInfo']->value['description']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fileInfo']->value['description'] ));
}?></textarea>
								<?php if ((isset($_smarty_tpl->tpl_vars['gal_info']->value['type'])) && ($_smarty_tpl->tpl_vars['gal_info']->value['type'] == "podcast" || $_smarty_tpl->tpl_vars['gal_info']->value['type'] == "vidcast")) {?>
									<br><em>Required for podcasts.</em>
								<?php }?>
							</div>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] !== 'y' || $_smarty_tpl->tpl_vars['prefs']->value['file_galleries_use_jquery_upload'] != 'y' || $_smarty_tpl->tpl_vars['editFileId']->value) {?>
						<div class="form-group row">
							<label for="userfile" class="col-md-4 col-form-label"><?php if ($_smarty_tpl->tpl_vars['editFileId']->value) {?>Re-upload from disk<?php } else { ?>Upload from disk<?php }?></label>
							<div class="col-md-8">
								<?php if ($_smarty_tpl->tpl_vars['editFileId']->value) {?>
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fileInfo']->value['filename'] ));?>

								<?php }?>
								<input id="userfile" name="userfile[]" type="file" size="40">
							</div>
						</div>
					<?php }?>
				<?php } else { ?>
					<?php echo smarty_function_filegal_uploader(array(),$_smarty_tpl);?>

				<?php }?>
			</div>
			<div class="col-sm-12">
				<div class="form-check">
					<label for="imagesize" class="form-check-label">
						<input class="form-check-input" type="checkbox" id="imagesize" name="imagesize" checked="checked" value="yes" /><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Use Gallery default resize settings for images <span id="imageResizeInfo"><?php if ($_smarty_tpl->tpl_vars['gal_info']->value["image_max_size_x"]) {?>(<?php echo $_smarty_tpl->tpl_vars['gal_info']->value["image_max_size_x"];?>
px X <?php echo $_smarty_tpl->tpl_vars['gal_info']->value["image_max_size_y"];?>
 px)<?php } else { ?>(No resize)<?php }?></span><?php $_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</label>
				</div>
			</div>
			<div id="customsize" style="display:none">
				<div class="form-group row">
					<label for="image_max_size_x" class="col-sm-4 text-right">Maximum width of images</label>
					<div class="col-sm-8">
						<div class="input-group col-sm-4">
							<input type="text" name="image_max_size_x" id="image_max_size_x" value="<?php echo $_smarty_tpl->tpl_vars['gal_info']->value["image_max_size_x"];?>
" class="form-control text-right">
							<div class="input-group-append">
								<span class="input-group-text"> px</span>
							</div>
						</div>
						<span class="form-text">If an image is wider than this, it will be resized. Attention: In this case, the original image will be lost. (0=unlimited)</span>
					</div>
				</div>
				<div class="form-group row">
					<label for="image_max_size_y" class="col-sm-4 text-right">Maximum height of images in gallery</label>
					<div class="col-sm-8">
						<div class="input-group col-sm-4">
							<input type="text" name="image_max_size_y" id="image_max_size_y" value="<?php echo $_smarty_tpl->tpl_vars['gal_info']->value["image_max_size_y"];?>
" class="form-control text-right">
							<div class="input-group-append">
								<span class="input-group-text"> px</span>
							</div>
						</div>
						<span class="form-text">If an image is higher than this, it will be resized. Attention: In this case, the original image will be lost. (0=unlimited)</span>
					</div>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['simpleMode']->value != 'y') {?>
				<div class="fgal_file_c2">
					<?php if (!$_smarty_tpl->tpl_vars['editFileId']->value && $_smarty_tpl->tpl_vars['tiki_p_batch_upload_files']->value == 'y') {?>
						<div class="col-sm-12">
							<div class="form-check mb-3">
								<label for="isbatch" class="form-check-label">
									<input type="checkbox" id="isbatch" name="isbatch[]" class="form-check-input">
									Unzip zip files
								</label>
							</div>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_delete_after'] == 'y') {?>
						<div class="form-group row">
							<label for="deleteAfter" class="col-md-4 col-form-label">File can be deleted after</label>
							<div class="col-md-8">
								<?php if ($_smarty_tpl->tpl_vars['editFileId']->value) {?>
									<?php echo smarty_function_html_select_duration(array('prefix'=>'deleteAfter','id'=>"deleteAfter",'default_value'=>$_smarty_tpl->tpl_vars['fileInfo']->value['deleteAfter']),$_smarty_tpl);?>

								<?php } else { ?>
									<?php echo smarty_function_html_select_duration(array('prefix'=>'deleteAfter[]','id'=>"deleteAfter",'default_unit'=>'week'),$_smarty_tpl);?>

								<?php }?>
							</div>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['editFileId']->value) {?>
						<input type="hidden" name="galleryId" value="<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
						<input type="hidden" name="fileId" value="<?php echo $_smarty_tpl->tpl_vars['editFileId']->value;?>
">
						<input type="hidden" name="lockedby" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fileInfo']->value['lockedby'] ));?>
">
					<?php } else { ?>
						<?php if (count($_smarty_tpl->tpl_vars['galleries']->value) == 0) {?>
							<?php if (!empty($_smarty_tpl->tpl_vars['galleryId']->value)) {?>
								<input type="hidden" name="galleryId[]" value="<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
							<?php } else { ?>
								<input type="hidden" name="galleryId[]" value="<?php echo $_smarty_tpl->tpl_vars['treeRootId']->value;?>
">
							<?php }?>
						<?php } elseif (empty($_smarty_tpl->tpl_vars['groupforalert']->value)) {?>
							<div class="form-group row">
								<label for="galleryId" class="col-md-4 col-form-label">File gallery</label>
								<div class="col-md-8">
									<select id="galleryId" name="galleryId[]" class="form-control">
										<option value="<?php echo $_smarty_tpl->tpl_vars['treeRootId']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['treeRootId']->value == $_smarty_tpl->tpl_vars['galleryId']->value) {?>selected="selected"<?php }?> style="font-style:italic; border-bottom:1px dashed #666;">Root</option>
										<?php
$__section_idx_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['galleries']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_idx_2_total = $__section_idx_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_idx'] = new Smarty_Variable(array());
if ($__section_idx_2_total !== 0) {
for ($__section_idx_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] = 0; $__section_idx_2_iteration <= $__section_idx_2_total; $__section_idx_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']++){
?>
											<?php if ($_smarty_tpl->tpl_vars['galleries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)]['id'] != $_smarty_tpl->tpl_vars['treeRootId']->value && ($_smarty_tpl->tpl_vars['galleries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)]['perms']['tiki_p_upload_files'] == 'y' || $_smarty_tpl->tpl_vars['tiki_p_userfiles']->value == 'y')) {?>
												<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['galleries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)]['id'] ));?>
" <?php if ($_smarty_tpl->tpl_vars['galleries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)]['id'] == $_smarty_tpl->tpl_vars['galleryId']->value) {?>selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['galleries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)]['name'] ));?>
</option>
											<?php }?>
										<?php
}
}
?>
									</select>
								</div>
							</div>
						<?php } else { ?>
							<input type="hidden" name="galleryId[]" value="<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
						<?php }?>
					<?php }?>
					<div class="form-group row">
						<label for="user" class="col-md-4 col-form-label">Uploaded by</label>
						<div class="col-md-8">
							<?php echo smarty_function_user_selector(array('id'=>'user','name'=>'user[]','select'=>$_smarty_tpl->tpl_vars['fileInfo']->value['user'],'editable'=>$_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value),$_smarty_tpl);?>

						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_author'] == 'y') {?>
						<div class="form-group row">
							<label for="author" class="col-md-4 col-form-label">Creator</label>
							<div class="col-md-8">
								<input type="text" id="author"name="author[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fileInfo']->value['author'] ));?>
"><br>
								<span class="description">Creator of file, if different from the 'Uploaded by' user</span>
							</div>
						</div>
					<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['groupforalert']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['showeachuser']->value == 'y') {?>
							<div class="form-group row">
								<label class="col-md-4 col-form-label">Choose users to alert</label>
								<div class="col-md-8">
									<?php
$__section_idx_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listusertoalert']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_idx_3_total = $__section_idx_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_idx'] = new Smarty_Variable(array());
if ($__section_idx_3_total !== 0) {
for ($__section_idx_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] = 0; $__section_idx_3_iteration <= $__section_idx_3_total; $__section_idx_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']++){
?>
										<label>
											<input type="checkbox" name="listtoalert[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listusertoalert']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)]['user'] ));?>
"> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listusertoalert']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)]['user'] ));?>

										</label>
									<?php
}
}
?>
								</div>
							</div>
						<?php } else { ?>
							<?php
$__section_idx_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listusertoalert']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_idx_4_total = $__section_idx_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_idx'] = new Smarty_Variable(array());
if ($__section_idx_4_total !== 0) {
for ($__section_idx_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] = 0; $__section_idx_4_iteration <= $__section_idx_4_total; $__section_idx_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']++){
?>
								<input type="hidden" name="listtoalert[]" value="<?php echo $_smarty_tpl->tpl_vars['listusertoalert']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_idx']->value['index'] : null)]['user'];?>
">
							<?php
}
}
?>
						<?php }?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['editFileId']->value) {?>
						<div class="form-group row">
							<label for="filetype" class="col-md-4 col-form-label">File Type</label>
							<div class="col-md-8">
								<select id="filetype" class="form-control" name="filetype[]">
									<?php if ($_smarty_tpl->tpl_vars['fileInfo']->value['filetype'] != '') {?>
										<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fileInfo']->value['filetype'] ));?>
" selected="selected"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_truncate($_smarty_tpl->tpl_vars['fileInfo']->value['filetype'],60) ));?>
</option>
									<?php }?>
									<option value="" > No type </option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mimetypes']->value, 'type');
$_smarty_tpl->tpl_vars['type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->do_else = false;
$__foreach_type_0_saved = $_smarty_tpl->tpl_vars['type'];
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['type']->value,60);?>
 (*.<?php echo $_smarty_tpl->tpl_vars['type']->key;?>
)</option>
									<?php
$_smarty_tpl->tpl_vars['type'] = $__foreach_type_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
						</div>
					<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['ocr_enable'] == 'y') {?>
					<?php if ((isset($_smarty_tpl->tpl_vars['selectedLanguages']->value)) || (isset($_smarty_tpl->tpl_vars['languages']->value))) {?>
						<div class="form-group row">
							<label for="ocr_lang" class="col-md-4 col-form-label">Override Default Languages</label>
							<div class="col-md-8">
								<select multiple id="ocr_lang" class="form-control" name="ocr_lang[]">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selectedLanguages']->value, 'language', false, 'code');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
										<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['code']->value ));?>
" selected="selected"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_truncate($_smarty_tpl->tpl_vars['language']->value,60) ));?>
</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'code');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['language']->value,60);?>
</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['editFileId']->value || $_smarty_tpl->tpl_vars['prefs']->value['ocr_every_file'] !== 'y' && !$_smarty_tpl->tpl_vars['editFileId']->value) {?>
						<div class="form-check">
							<label for="imagesize" class="form-check-label">
								<input type="checkbox" value='3' <?php if ($_smarty_tpl->tpl_vars['ocr_state']->value) {?>checked="checked"<?php }?> id="ocr_state" class="form-check-input" name="ocr_state" title="Attempt to OCR this file."> OCR this file
							</label>
						</div>
					<?php }?>
				<?php }?>
				</div>
				<div class="fgal_file_c3">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_limit_hits_per_file'] == 'y') {?>
						<div class="form-group row">
							<label for="hit_limit" class="col-md-4 form-label">Maximum number of downloads</label>
							<div class="col-md-8">
								<input type="text" id="hit_limit" name="hit_limit[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['hit_limit']->value)===null||$tmp==='' ? 0 : $tmp);?>
">
								<br><em>Use -1 for no limit.</em>
							</div>
						</div>
					<?php } else { ?>
						<input type="hidden" id="hit_limit" name="hit_limit[]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['hit_limit']->value)===null||$tmp==='' ? -1 : $tmp);?>
">
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] != 'y' && $_smarty_tpl->tpl_vars['editFileId']->value) {?>
						<div class="form-group row">
							<label for="comment" class="col-md-4 form-label">Comment</label>
							<div class="col-md-8">
								<input type="text" id="comment" name="comment[]" value="" size="40">
							</div>
						</div>
					<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y' && !$_smarty_tpl->tpl_vars['editFileId']->value) {?>
					<?php $_smarty_tpl->_subTemplateRender('file:categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><br/>
				<?php }?>
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y' && !$_smarty_tpl->tpl_vars['editFileId']->value && $_smarty_tpl->tpl_vars['category_jail']->value) {?>
					<?php $_smarty_tpl->_subTemplateRender('file:categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><br/>
				<?php }?>
				<input type="hidden" name="galleryId[]" value="<?php echo $_smarty_tpl->tpl_vars['galleryId']->value;?>
">
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y' && !$_smarty_tpl->tpl_vars['editFileId']->value) {?>
				<input type="hidden" name="upload">
			<?php }?>
		</div>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<div id="form">
		<form method="post"
			action='tiki-upload_file.php'
			enctype='multipart/form-data'
			class="form-horizontal"
			id="file_0"
		>
			<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

			<input type="hidden" name="simpleMode" value="<?php echo $_smarty_tpl->tpl_vars['simpleMode']->value;?>
">
			<input type="hidden" name="submission" value="1">
			<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>
				<input type="hidden" name="filegals_manager" value="<?php echo $_smarty_tpl->tpl_vars['filegals_manager']->value;?>
">
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['insertion_syntax']->value)) {?>
				<input type="hidden" name="insertion_syntax" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['insertion_syntax']->value ));?>
">
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['token_id']->value)) && $_smarty_tpl->tpl_vars['token_id']->value != '') {?>
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['token_id']->value;?>
" name="TOKEN">
			<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['upload_str']->value;?>

			<?php if ($_smarty_tpl->tpl_vars['editFileId']->value) {?>
				<?php $_smarty_tpl->_subTemplateRender('file:categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><br>
				<div id="page_bar" class="form-group row">
					<div class="col-md-8 offset-md-4">
						<input name="upload" type="submit" class="btn btn-primary" value="Save">
					</div>
				</div>
			<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] != 'y') {?>
				<?php echo $_smarty_tpl->tpl_vars['upload_str']->value;?>

				<?php echo $_smarty_tpl->tpl_vars['upload_str']->value;?>

				<?php $_smarty_tpl->_subTemplateRender('file:categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><br>
				<div id="page_bar" class="form-group row">
					<div class="col-md-8 offset-md-4">
						<input type="submit" class="btn btn-primary" name="upload" value="Upload">
					</div>
				</div>
			<?php }?>
			<?php if (!$_smarty_tpl->tpl_vars['editFileId']->value && $_smarty_tpl->tpl_vars['prefs']->value['file_galleries_use_jquery_upload'] != 'y' && $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] === 'y') {?>
				<div id="page_bar" class="form-group row">
					<div class="col-md-8 offset-md-4">
						<input type="submit" class="btn btn-primary"
							onclick="upload_files(); return false;"
							id="btnUpload"
							name="upload"
							value="Upload File(s)"
						>
						<input type="submit" class="btn btn-primary btn-sm" onclick="javascript:add_upload_file('multiple_upload'); return false" value="Add Another File">
					</div>
				</div>
			<?php }?>
		</form>
	</div>
	<?php if (!empty($_smarty_tpl->tpl_vars['fileInfo']->value['lockedby']) && $_smarty_tpl->tpl_vars['user']->value != $_smarty_tpl->tpl_vars['fileInfo']->value['lockedby']) {?>
		<?php echo smarty_function_icon(array('name'=>"lock"),$_smarty_tpl);?>

		<span class="attention"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>The file has been locked by <?php echo $_smarty_tpl->tpl_vars['fileInfo']->value['lockedby'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></span>
	<?php }?>
	<br>
	<?php if (!$_smarty_tpl->tpl_vars['editFileId']->value) {?>
		<div class="col-md-12">
			<input type="hidden" id="max_file_uploads" value="<?php echo $_smarty_tpl->tpl_vars['max_file_uploads']->value;?>
">
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"Information"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Information"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				Maximum file size is around:
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?><a title="|<?php echo $_smarty_tpl->tpl_vars['max_upload_size_comment']->value;?>
" class="btn btn-link tips"><?php }?>
					<?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['max_upload_size']->value,true,0);?>

				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?></a>
					<?php if ($_smarty_tpl->tpl_vars['is_iis']->value) {?><br>Note: You are running IIS. maxAllowedContentLength also limits upload size. Please check web.config in the Tiki root folder<?php }?>
				<?php }?>
			<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Information"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		</div>
	<?php }?>
</div>
<?php if (!empty($_smarty_tpl->tpl_vars['metarray']->value) && count($_smarty_tpl->tpl_vars['metarray']->value) > 0) {?>
	<?php $_smarty_tpl->_subTemplateRender('file:metadata/meta_view_tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
if (!$_smarty_tpl->tpl_vars['editFileId']->value && $_smarty_tpl->tpl_vars['prefs']->value['file_galleries_use_jquery_upload'] != 'y') {?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui'] == 'y') {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$('.datePicker').datepicker({minDate: 0, maxDate: '+1m', dateFormat: 'dd/mm/yy'});<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array('notonready'=>true));
$_block_repeat=true;
echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		$('#file_0').ajaxForm({target: '#progress_0', forceSync: true});
		var nb_upload = 1;
		function add_upload_file() {
			var clone = $('#form form').eq(0).clone().resetForm().attr('id', 'file_' + nb_upload).ajaxForm({target: '#progress_' + nb_upload, forceSync: true});
			$(clone[0].submission).val(parseInt($(clone[0].submission).val(), 10) + parseInt(nb_upload, 10));
			clone.insertAfter($('#form form').eq(-1));
			document.getElementById('progress').innerHTML += "<div id='progress_"+nb_upload+"'></div>";
			nb_upload += 1;
		}
		function upload_files(){
			var totalSubmissions = $("#form form").length;
			$("#form form").append($('<input />', {type: 'hidden', name: 'totalSubmissions', value: totalSubmissions}));
			$("#form form").each(function(n) {
				if ($(this).find('input[name="userfile\\[\\]"]').val() != '') {
					var $progress = $('#progress_'+n).html("<img src='img/spinner.gif'>Uploading file...");
					$( document ).ajaxError(function(event, jqxhr, ajaxSettings, thrownError ) {
						$progress.hide();
						show('form');
						$("#form").showError(tr("File upload error:") + " " + thrownError)
					});
					$(this).submit();
					this.reset();
				} else {
					$('#progress_'+n).html("No File to Upload... <span class='button'><a href='#' onclick='location.replace(location.href);return false;'>Retry</a></span>");
				}
			});
			hide('form');
		}
	<?php $_block_repeat=false;
echo smarty_block_jq(array('notonready'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if (!$_smarty_tpl->tpl_vars['editFileId']->value && $_smarty_tpl->tpl_vars['prefs']->value['fgal_upload_from_source'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_upload_files']->value == 'y') {?>
	<form class="remote-upload form-horizontal" method="post" action="<?php echo smarty_function_service(array('controller'=>'file','action'=>'remote'),$_smarty_tpl);?>
">
		<h3>Upload from URL</h3>
		<div class="form-group row">
			<input type="hidden" name="galleryId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['galleryId']->value ));?>
">
			<label class="col-md-4 col-form-label">URL:</label>
			<div class="col-md-8">
				<input type="url" name="url" placeholder="http://" class="form-control">
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['vimeo_upload'] == 'y') {?>
				<label class="col-md-8 offset-md-4">
					<input type="checkbox" name="reference" value="1" class="tips" title="Upload from URL|Keeps a reference to the remote file">
					Reference
				</label>
			<?php }?>
			<div class="col-md-8 offset-md-4">
				<input type="submit" class="btn btn-primary btn-sm" value="Add">
			</div>
			<div class="result col-md-8 offset-md-4"></div>
		</div>
	</form>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		$('.remote-upload').submit(function () {
			var form = this;
			// use the current value of the galleryId selector
			$('input[name=galleryId]', form).val($('#galleryId').val());
			$.ajax({
				method: 'POST',
				url: $(form).attr('action'),
				data: $(form).serialize(),
				dataType: 'html',
				success: function (data) {
					$('.result', form).html(data);
					$(form.url).val('');
				},
				complete: function () {
					$('input', form).prop('disabled', false);
				},
				error: function (e) {
					alert(tr("A remote file upload error occurred:") + "\n\"" + e.statusText + "\" (" + e.status + ")");
				}
			});
			$('input', this).prop('disabled', true);
			return false;
		});
	<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['vimeo_upload'] == 'y') {?>
		<fieldset>
			<h3>Upload Video</h3>
			<div class="col-md-8 offset-md-4">
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('wikiplugin', array('_name'=>'vimeo'));
$_block_repeat=true;
echo smarty_block_wikiplugin(array('_name'=>'vimeo'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_wikiplugin(array('_name'=>'vimeo'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			</div>
		</fieldset>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			var handleVimeoFile = function (link, data) {
				if (data != undefined) {
				$("#form").hide();
				$("#progress").append(
					$("<p> Video file uploaded: " + data.file + "</p>")
						.prepend($("<img src='img/icons/vimeo.png' width='16' height='16'>"))
					);
				}
			}
		<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
var defaultx= $("#image_max_size_x").attr('value');
var defaulty= $("#image_max_size_y").attr('value');

$("#imagesize").click(function () {
	if ($(this).prop("checked")) {
		$("#customsize").css("display", "none");
		//resetting size to default
		$("#image_max_size_x").attr('value',defaultx);
		$("#image_max_size_y").attr('value',defaulty);
	} else {
		$("#customsize").css("display", "");
	}
});

$("#galleryId").change(function(){
	$("#image_max_size_x").attr('value','');
	$("#image_max_size_y").attr('value',"");
	$("#imageResizeInfo").html('');
	defaultx='';
	defaulty='';
});
<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
