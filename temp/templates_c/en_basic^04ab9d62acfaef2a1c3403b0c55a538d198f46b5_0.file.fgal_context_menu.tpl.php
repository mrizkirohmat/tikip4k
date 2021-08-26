<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:41:47
  from 'C:\xampp\htdocs\tikip4k\templates\fgal_context_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126489b61a8f2_46252082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04ab9d62acfaef2a1c3403b0c55a538d198f46b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\fgal_context_menu.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126489b61a8f2_46252082 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.self_link.php','function'=>'smarty_block_self_link',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.permission_link.php','function'=>'smarty_function_permission_link',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.virtual_path.php','function'=>'smarty_modifier_virtual_path',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.file_diagram.php','function'=>'smarty_modifier_file_diagram',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),9=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.file_can_convert_to_pdf.php','function'=>'smarty_modifier_file_can_convert_to_pdf',),10=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),));
?>

<?php if ($_smarty_tpl->tpl_vars['file']->value['isgal'] == 1) {
if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_view_file_gallery'] == 'y') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>'file-archive-open','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['id']));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>'file-archive-open','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['id']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Browse<?php $_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>'file-archive-open','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['id']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_create_file_galleries'] == 'y') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>'edit','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'edit_mode'=>1,'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['id']));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>'edit','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'edit_mode'=>1,'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['id']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Properties<?php $_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>'edit','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'edit_mode'=>1,'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['id']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_upload_files'] == 'y' && ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_admin_file_galleries'] == 'y' || ($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['file']->value['user'] == $_smarty_tpl->tpl_vars['user']->value) || $_smarty_tpl->tpl_vars['file']->value['public'] == 'y')) {?><a href="tiki-upload_file.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];
if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>&amp;filegals_manager=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filegals_manager']->value ));
}?>"><div class="iconmenu"><?php echo smarty_function_icon(array('name'=>'upload'),$_smarty_tpl);?>
 Upload</div></a><?php }
if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_assign_perm_file_gallery'] == 'y') {?><div class="iconmenu"><?php if ($_smarty_tpl->tpl_vars['file']->value['public'] != 'y') {
echo smarty_function_permission_link(array('mode'=>'text','type'=>"file gallery",'permType'=>"file galleries",'id'=>$_smarty_tpl->tpl_vars['file']->value['id'],'title'=>$_smarty_tpl->tpl_vars['file']->value['name']),$_smarty_tpl);
} else {
echo smarty_function_permission_link(array('mode'=>'text','type'=>"file gallery",'permType'=>"file galleries",'id'=>$_smarty_tpl->tpl_vars['file']->value['id'],'title'=>$_smarty_tpl->tpl_vars['file']->value['name']),$_smarty_tpl);
}?></div><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_webdav'] == 'y') {
$_smarty_tpl->_assignInScope('virtual_path', smarty_modifier_virtual_path($_smarty_tpl->tpl_vars['file']->value['id'],'filegal'));?><a style="behavior: url(#default#AnchorClick);" href="<?php echo $_smarty_tpl->tpl_vars['virtual_path']->value;?>
" folder="<?php echo $_smarty_tpl->tpl_vars['virtual_path']->value;?>
"><?php echo smarty_function_icon(array('name'=>"file-archive-open"),$_smarty_tpl);?>
Open as WebFolder</a><?php }
if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_create_file_galleries'] == 'y') {
ob_start();
echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>'remove','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'removegal'=>$_smarty_tpl->tpl_vars['file']->value['id'],'_onclick'=>"confirmSimple(event, 'Delete gallery?', '".$_prefixVariable1."')"));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>'remove','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'removegal'=>$_smarty_tpl->tpl_vars['file']->value['id'],'_onclick'=>"confirmSimple(event, 'Delete gallery?', '".$_prefixVariable1."')"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Delete<?php $_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>'remove','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'removegal'=>$_smarty_tpl->tpl_vars['file']->value['id'],'_onclick'=>"confirmSimple(event, 'Delete gallery?', '".$_prefixVariable1."')"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
} else {
if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y') {
if ($_smarty_tpl->tpl_vars['menu_text']->value != 'y') {?><div style="float:left"><?php }
}
if (smarty_modifier_truncate($_smarty_tpl->tpl_vars['file']->value['type'],6,'',true) == 'image/' && $_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_download_files'] == 'y') {?><a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['id'],'display');?>
"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'alt'=>"Display"),$_smarty_tpl);?>
</a><?php if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_upload_files'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_draw'] == 'y') {
if ($_smarty_tpl->tpl_vars['file']->value['type'] == 'image/svg+xml' || $_smarty_tpl->tpl_vars['file']->value['type'] == 'image/jpeg' || $_smarty_tpl->tpl_vars['file']->value['type'] == 'image/gif' || $_smarty_tpl->tpl_vars['file']->value['type'] == 'image/png' || $_smarty_tpl->tpl_vars['file']->value['type'] == 'image/tiff') {?><a class="draw dialog" data-name="<?php echo $_smarty_tpl->tpl_vars['file']->value['filename'];?>
" title="Edit: <?php echo $_smarty_tpl->tpl_vars['file']->value['filename'];?>
" href="tiki-edit_draw.php?fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
&galleryId=<?php echo $_smarty_tpl->tpl_vars['file']->value['galleryId'];?>
" data-fileid='<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
' data-galleryid='<?php echo $_smarty_tpl->tpl_vars['file']->value['galleryId'];?>
' onclick='$(document).trigger("hideCluetip"); return $(this).ajaxEditDraw();'><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'alt'=>"Edit"),$_smarty_tpl);?>
</a><?php }
}
} elseif ($_smarty_tpl->tpl_vars['tiki_p_upload_files']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['wikiplugin_diagram'] == 'y' && smarty_modifier_file_diagram($_smarty_tpl->tpl_vars['file']->value['id'])) {?><a href="tiki-display.php?fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'alt'=>"Display"),$_smarty_tpl);?>
</a><form id="edit-diagram-1" target="_blank" action="tiki-editdiagram.php" method="post"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
" name="fileId"><a href="javascript:void(0)" onclick="$('#edit-diagram-1').submit()"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'alt'=>"Edit"),$_smarty_tpl);?>
</a></form><?php } elseif ($_smarty_tpl->tpl_vars['file']->value['type'] == 'text/csv' && $_smarty_tpl->tpl_vars['prefs']->value['feature_sheet'] == 'y') {?><a href="tiki-view_sheets.php?fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'alt'=>"Display"),$_smarty_tpl);?>
</a><?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['fgal_pdfjs_feature'] == 'y' && $_smarty_tpl->tpl_vars['file']->value['type'] == 'application/pdf') {?><a href="tiki-display.php?fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'alt'=>"Display"),$_smarty_tpl);?>
</a><?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['fgal_viewerjs_feature'] == 'y' && ($_smarty_tpl->tpl_vars['file']->value['type'] == 'application/pdf' || strpos($_smarty_tpl->tpl_vars['file']->value['type'],'application/vnd.oasis.opendocument.') !== false)) {?><a href="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['fgal_viewerjs_uri'];?>
#<?php echo $_smarty_tpl->tpl_vars['base_url']->value;
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['id'],'display');?>
"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'alt'=>"Display"),$_smarty_tpl);?>
</a><?php } elseif (($_smarty_tpl->tpl_vars['file']->value['type'] == 'application/vnd.oasis.opendocument.text' || $_smarty_tpl->tpl_vars['file']->value['type'] == 'application/octet-stream') && $_smarty_tpl->tpl_vars['prefs']->value['feature_docs'] == 'y') {?><a href="tiki-edit_docs.php?fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'alt'=>"Display"),$_smarty_tpl);?>
</a><?php if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_upload_files'] == 'y') {?><a href="tiki-edit_docs.php?fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
&edit"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'alt'=>"Edit"),$_smarty_tpl);?>
</a><?php }
} elseif ($_smarty_tpl->tpl_vars['prefs']->value['h5p_enabled'] == 'y' && $_smarty_tpl->tpl_vars['file']->value['type'] == 'application/zip' && preg_match('/\.h5p$/i',$_smarty_tpl->tpl_vars['file']->value['filename'])) {?><a href="<?php echo smarty_function_service(array('controller'=>'h5p','action'=>'embed','fileId'=>$_smarty_tpl->tpl_vars['file']->value['id']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'alt'=>"Display"),$_smarty_tpl);?>
</a><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_pdfjs_feature'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['fgal_convert_documents_pdf'] == 'y' && (smarty_modifier_file_can_convert_to_pdf($_smarty_tpl->tpl_vars['file']->value['type']))) {?><a href="tiki-display.php?fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
"><?php echo smarty_function_icon(array('name'=>'view','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'alt'=>"Display as PDF"),$_smarty_tpl);?>
</a><?php }
if (((isset($_smarty_tpl->tpl_vars['file']->value['p_download_files'])) && $_smarty_tpl->tpl_vars['file']->value['p_download_files'] == 'y') || (!(isset($_smarty_tpl->tpl_vars['file']->value['p_download_files'])) && $_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_download_files'] == 'y')) {
if ($_smarty_tpl->tpl_vars['gal_info']->value['type'] == 'podcast' || $_smarty_tpl->tpl_vars['gal_info']->value['type'] == 'vidcast') {?><a href="<?php echo $_smarty_tpl->tpl_vars['download_path']->value;
echo $_smarty_tpl->tpl_vars['file']->value['path'];?>
"><?php } else { ?><a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['id'],'file');?>
"><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_save_draft'] == 'y' && $_smarty_tpl->tpl_vars['file']->value['nbDraft'] > 0) {
$_smarty_tpl->_assignInScope('download_action_title', "Download current version");
} else {
$_smarty_tpl->_assignInScope('download_action_title', "Download");
}
echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'floppy','alt'=>((string)$_smarty_tpl->tpl_vars['download_action_title']->value)),$_smarty_tpl);?>
</a><?php }?><a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['id'],'display');?>
"><?php echo smarty_function_icon(array('name'=>'eye','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'alt'=>"Browser display (Raw / Download)"),$_smarty_tpl);?>
</a><?php if ($_smarty_tpl->tpl_vars['gal_info']->value['archives'] > -1) {
if ((isset($_smarty_tpl->tpl_vars['file']->value['nbArchives'])) && $_smarty_tpl->tpl_vars['file']->value['nbArchives'] > 0) {
$_smarty_tpl->_assignInScope('nb_archives', $_smarty_tpl->tpl_vars['file']->value['nbArchives']);?><a href="tiki-file_archives.php?fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['fileId'];
if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>&amp;filegals_manager=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filegals_manager']->value ));
}?>"><?php echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'file-archive','alt'=>"Archives (".((string)$_smarty_tpl->tpl_vars['nb_archives']->value).")"),$_smarty_tpl);?>
</a><?php } else {
echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'file-archive','alt'=>"Archives"),$_smarty_tpl);
}
$_smarty_tpl->_assignInScope('replace_action_title', "Upload new version");
} else {
$_smarty_tpl->_assignInScope('replace_action_title', "Replace");
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_save_draft'] == 'y') {
if ($_smarty_tpl->tpl_vars['file']->value['nbDraft'] > 0) {
$_smarty_tpl->_assignInScope('replace_action_title', "Replace draft");
} else {
$_smarty_tpl->_assignInScope('replace_action_title', "Upload draft");
}
}
if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_admin_file_galleries'] == 'y' || ($_smarty_tpl->tpl_vars['file']->value['lockedby'] && $_smarty_tpl->tpl_vars['file']->value['lockedby'] == $_smarty_tpl->tpl_vars['user']->value) || (!$_smarty_tpl->tpl_vars['file']->value['lockedby'] && (($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['user']->value == $_smarty_tpl->tpl_vars['file']->value['user']) || $_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_edit_gallery_file'] == 'y'))) {
if ($_smarty_tpl->tpl_vars['file']->value['archiveId'] == 0) {
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_save_draft'] == 'y' && $_smarty_tpl->tpl_vars['file']->value['nbDraft'] > 0) {
ob_start();
echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>'ok','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'validate'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId'],'_onclick'=>"confirmSimple(event, 'Validate draft?', '".$_prefixVariable2."')"));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>'ok','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'validate'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId'],'_onclick'=>"confirmSimple(event, 'Validate draft?', '".$_prefixVariable2."')"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Validate your draft<?php $_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>'ok','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'validate'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId'],'_onclick'=>"confirmSimple(event, 'Validate draft?', '".$_prefixVariable2."')"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
ob_start();
echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>'remove','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'draft'=>'remove','remove'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId'],'_onclick'=>"confirmSimple(event, 'Delete draft?', '".$_prefixVariable3."')"));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>'remove','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'draft'=>'remove','remove'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId'],'_onclick'=>"confirmSimple(event, 'Delete draft?', '".$_prefixVariable3."')"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Delete your draft<?php $_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>'remove','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'draft'=>'remove','remove'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId'],'_onclick'=>"confirmSimple(event, 'Delete draft?', '".$_prefixVariable3."')"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_admin_file_galleries'] == 'y' || empty($_smarty_tpl->tpl_vars['file']->value['locked']) || ((isset($_smarty_tpl->tpl_vars['file']->value['locked'])) && $_smarty_tpl->tpl_vars['file']->value['locked'] && $_smarty_tpl->tpl_vars['file']->value['lockedby'] == $_smarty_tpl->tpl_vars['user']->value) || $_smarty_tpl->tpl_vars['gal_info']->value['lockable'] != 'y') {?><a href="tiki-upload_file.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['file']->value['galleryId'];?>
&amp;fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];
if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>&amp;filegals_manager=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filegals_manager']->value ));
}?>"><?php echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'upload','alt'=>((string)$_smarty_tpl->tpl_vars['replace_action_title']->value)),$_smarty_tpl);?>
</a><?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_display_properties'] == 'y') {?><a href="tiki-upload_file.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['file']->value['galleryId'];?>
&amp;fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];
if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?>&amp;filegals_manager=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filegals_manager']->value ));
}?>"><?php echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'edit','alt'=>"Edit properties"),$_smarty_tpl);?>
</a><a href="tiki-list_file_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['file']->value['galleryId'];?>
&fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
&action=refresh_metadata<?php if ((isset($_smarty_tpl->tpl_vars['view']->value))) {?>&view=<?php echo $_smarty_tpl->tpl_vars['view']->value;
}?>" onclick="confirmSimple(event, 'Refresh metadata?', '<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
')"><?php echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'tag','alt'=>"Refresh metadata"),$_smarty_tpl);?>
</a><?php if ($_smarty_tpl->tpl_vars['view']->value != 'page') {?><a href="tiki-list_file_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['file']->value['galleryId'];?>
&fileId=<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
&view=page"><?php echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'textfile','alt'=>"Page view"),$_smarty_tpl);?>
</a><?php }
}
}
if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_assign_perm_file_gallery'] == 'y') {?><div class="iconmenu"><?php echo smarty_function_permission_link(array('mode'=>'text','type'=>"file",'permType'=>"file galleries",'id'=>$_smarty_tpl->tpl_vars['file']->value['id'],'title'=>$_smarty_tpl->tpl_vars['file']->value['name'],'parentId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId']),$_smarty_tpl);?>
</div><?php }
if ($_smarty_tpl->tpl_vars['gal_info']->value['lockable'] == 'y' && $_smarty_tpl->tpl_vars['file']->value['isgal'] != 1) {
if ($_smarty_tpl->tpl_vars['file']->value['lockedby']) {
if ($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['user']->value !== $_smarty_tpl->tpl_vars['file']->value['user']) {
ob_start();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>((string)$_smarty_tpl->tpl_vars['file']->value).".user"));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>((string)$_smarty_tpl->tpl_vars['file']->value).".user"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo "File already locked by %0";
$_block_repeat=false;
echo smarty_block_tr(array('_0'=>((string)$_smarty_tpl->tpl_vars['file']->value).".user"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_prefixVariable4=ob_get_clean();
ob_start();
echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>'unlock','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'lock'=>'n','fileId'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId'],'_onclick'=>"confirmSimple(event, '".$_prefixVariable4."', '".$_prefixVariable5."')"));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>'unlock','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'lock'=>'n','fileId'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId'],'_onclick'=>"confirmSimple(event, '".$_prefixVariable4."', '".$_prefixVariable5."')"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Unlock<?php $_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>'unlock','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'lock'=>'n','fileId'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId'],'_onclick'=>"confirmSimple(event, '".$_prefixVariable4."', '".$_prefixVariable5."')"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else { ?><form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post"><?php echo smarty_function_ticket(array(),$_smarty_tpl);?>
<input type="hidden" name="lock" value="n"><input type="hidden" name="fileId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value['fileId'],'attr' ));?>
"><input type="hidden" name="galleryId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value['galleryId'],'attr' ));?>
"><button type="submit" class="btn btn-link link-list" onclick="checkTimeout()"><?php echo smarty_function_icon(array('name'=>'unlock'),$_smarty_tpl);?>
 Unlock</button></form><?php }
} else {
if (((isset($_smarty_tpl->tpl_vars['file']->value['p_download_files'])) && $_smarty_tpl->tpl_vars['file']->value['p_download_files'] == 'y') || (!(isset($_smarty_tpl->tpl_vars['file']->value['p_download_files'])) && $_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_download_files'] == 'y')) {
if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y') {
ob_start();
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['fileId'],'file','with_next');
$_prefixVariable6=ob_get_clean();
ob_start();
echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>'download','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'lock'=>'y','fileId'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId'],'_onclick'=>"window.open('".$_prefixVariable6."'); confirmSimple(event, 'Lock file?', '".$_prefixVariable7."')"));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>'download','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'lock'=>'y','fileId'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId'],'_onclick'=>"window.open('".$_prefixVariable6."'); confirmSimple(event, 'Lock file?', '".$_prefixVariable7."')"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Download and lock<?php $_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>'download','_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'lock'=>'y','fileId'=>$_smarty_tpl->tpl_vars['file']->value['fileId'],'galleryId'=>$_smarty_tpl->tpl_vars['file']->value['galleryId'],'_onclick'=>"window.open('".$_prefixVariable6."'); confirmSimple(event, 'Lock file?', '".$_prefixVariable7."')"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else { ?><a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['fileId'],'file','with_next');?>
lock=y"><?php echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'download','alt'=>"Download and lock"),$_smarty_tpl);?>
</a><?php }
}?><form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post"><?php echo smarty_function_ticket(array(),$_smarty_tpl);?>
<input type="hidden" name="lock" value="y"><input type="hidden" name="fileId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value['fileId'],'attr' ));?>
"><input type="hidden" name="galleryId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value['galleryId'],'attr' ));?>
"><button type="submit" class="btn btn-link link-list" onclick="checkTimeout()"><?php echo smarty_function_icon(array('name'=>'lock'),$_smarty_tpl);?>
 Lock</button></form><?php }
}
}
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_webdav'] == 'y') {
$_smarty_tpl->_assignInScope('virtual_path', smarty_modifier_virtual_path($_smarty_tpl->tpl_vars['file']->value['fileId']));
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries_save_draft'] == 'y') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>"file-archive-open",'_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'_script'=>"javascript:open_webdav('".((string)$_smarty_tpl->tpl_vars['virtual_path']->value)."')",'_noauto'=>"y",'_ajax'=>"n"));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>"file-archive-open",'_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'_script'=>"javascript:open_webdav('".((string)$_smarty_tpl->tpl_vars['virtual_path']->value)."')",'_noauto'=>"y",'_ajax'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Open your draft in WebDAV<?php $_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>"file-archive-open",'_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'_script'=>"javascript:open_webdav('".((string)$_smarty_tpl->tpl_vars['virtual_path']->value)."')",'_noauto'=>"y",'_ajax'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>"file-archive-open",'_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'_script'=>"javascript:open_webdav('".((string)$_smarty_tpl->tpl_vars['virtual_path']->value)."')",'_noauto'=>"y",'_ajax'=>"n"));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>"file-archive-open",'_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'_script'=>"javascript:open_webdav('".((string)$_smarty_tpl->tpl_vars['virtual_path']->value)."')",'_noauto'=>"y",'_ajax'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Open in WebDAV<?php $_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>"file-archive-open",'_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'_script'=>"javascript:open_webdav('".((string)$_smarty_tpl->tpl_vars['virtual_path']->value)."')",'_noauto'=>"y",'_ajax'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_share'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_share']->value == 'y') {?><a href="tiki-share.php?url=<?php echo $_smarty_tpl->tpl_vars['tikiroot']->value;
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_sefurl($_smarty_tpl->tpl_vars['file']->value['id'],'file'),'url' ));?>
"><?php echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'share','alt'=>"Share a link to this file"),$_smarty_tpl);?>
</a><?php }
if ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_admin_file_galleries'] == 'y' || (!$_smarty_tpl->tpl_vars['file']->value['lockedby'] && (($_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['user']->value == $_smarty_tpl->tpl_vars['file']->value['user']) || ($_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_edit_gallery_file'] == 'y' && $_smarty_tpl->tpl_vars['file']->value['perms']['tiki_p_remove_files'] == 'y')))) {?><a href="tiki-list_file_gallery.php?remove=<?php echo $_smarty_tpl->tpl_vars['file']->value['fileId'];?>
&galleryId=<?php echo $_smarty_tpl->tpl_vars['file']->value['galleryId'];?>
" onclick="confirmSimple(event, 'Delete file?', '<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
')"><?php echo smarty_function_icon(array('_menu_text'=>$_smarty_tpl->tpl_vars['menu_text']->value,'_menu_icon'=>$_smarty_tpl->tpl_vars['menu_icon']->value,'name'=>'remove','alt'=>"Delete"),$_smarty_tpl);?>
</a><?php }
}
}
}
