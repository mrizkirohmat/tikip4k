<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:42:52
  from 'C:\xampp\htdocs\tikip4k\templates\fgal_attachments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612648dcdecd39_48225654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1879d7ef5c73f17072f56d5ed66620bffefb7589' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\fgal_attachments.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:list_file_gallery_content.tpl' => 1,
  ),
),false)) {
function content_612648dcdecd39_48225654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),));
?>


<a id="attachments"></a>
<?php if ($_smarty_tpl->tpl_vars['tiki_p_wiki_view_attachments']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_wiki_admin_attachments']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_wiki_attach_files']->value == 'y') {?>

	<div
		<?php if ((isset($_smarty_tpl->tpl_vars['pagemd5']->value)) && $_smarty_tpl->tpl_vars['pagemd5']->value) {?>
			<?php $_smarty_tpl->_assignInScope('cookie_key', "show_attzone".((string)$_smarty_tpl->tpl_vars['pagemd5']->value));?>
			id="attzone<?php echo $_smarty_tpl->tpl_vars['pagemd5']->value;?>
"
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('cookie_key', "show_attzone");?>
			id="attzone"
		<?php }?>
		<?php if (((isset($_SESSION['tiki_cookie_jar'][$_smarty_tpl->tpl_vars['cookie_key']->value])) && $_SESSION['tiki_cookie_jar'][$_smarty_tpl->tpl_vars['cookie_key']->value] == 'y') || (!(isset($_SESSION['tiki_cookie_jar'][$_smarty_tpl->tpl_vars['cookie_key']->value])) && $_smarty_tpl->tpl_vars['prefs']->value['w_displayed_default'] == 'y')) {?>
			style="display:block;"
		<?php } else { ?>
			style="display:none;"
		<?php }?>
	>

	
	<?php if (($_smarty_tpl->tpl_vars['tiki_p_wiki_view_attachments']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_wiki_admin_attachments']->value == 'y') && count($_smarty_tpl->tpl_vars['files']->value) > 0) {?>
		<fieldset>
			<legend>Attached files</legend>
			<?php $_smarty_tpl->_subTemplateRender('file:list_file_gallery_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</fieldset>
	<?php }?>

	<?php if (($_smarty_tpl->tpl_vars['tiki_p_wiki_attach_files']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_wiki_admin_attachments']->value == 'y') && (empty($_smarty_tpl->tpl_vars['attach_box']->value) || $_smarty_tpl->tpl_vars['attach_box']->value != 'n')) {?>
		<form class="form-horizontal" role="form" enctype="multipart/form-data" action="tiki-index.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));?>
" method="post">
			<?php if ($_smarty_tpl->tpl_vars['page_ref_id']->value) {?>
				<input type="hidden" name="page_ref_id" value="<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;?>
">
			<?php }?>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="attach-upload">Upload file</label>
				<div class="col-sm-10">
					<input size="16" name="userfile[0]" type="file" class="form-control" id="attach-upload">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="attach-comment">Comment</label>
				<div class="col-sm-10">
					<input type="text" name="s_f_attachments-comment" maxlength="250" id="attach-comment">
				</div>
			</div>
			<div class="form-group float-sm-right">
				<input
					type="submit"
					class="btn btn-primary btn-sm"
					name="s_f_attachments-upload"
					value="Attach"
				>
				<input type="hidden" name="s_f_attachments-page" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value ));?>
">
				<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

			</div>
		</form>
	<?php }?>
</div>
<?php }
}
}
