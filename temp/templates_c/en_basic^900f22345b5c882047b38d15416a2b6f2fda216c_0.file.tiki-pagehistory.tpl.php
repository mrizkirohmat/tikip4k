<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:06:31
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-pagehistory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264e6783d9d7_86186943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '900f22345b5c882047b38d15416a2b6f2fda216c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-pagehistory.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pagehistory.tpl' => 1,
  ),
),false)) {
function content_61264e6783d9d7_86186943 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.self_link.php','function'=>'smarty_block_self_link',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.pagination_links.php','function'=>'smarty_block_pagination_links',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.select_all.php','function'=>'smarty_function_select_all',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_datetime.php','function'=>'smarty_modifier_tiki_short_datetime',),9=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.userlink.php','function'=>'smarty_modifier_userlink',),10=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),11=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.username.php','function'=>'smarty_modifier_username',),12=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.actions.php','function'=>'smarty_block_actions',),13=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.bootstrap_modal.php','function'=>'smarty_function_bootstrap_modal',),));
?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('admpage'=>"wiki",'url'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ('tiki-pagehistory.php?page=').($_smarty_tpl->tpl_vars['page']->value) ))));
$_block_repeat=true;
echo smarty_block_title(array('admpage'=>"wiki",'url'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ('tiki-pagehistory.php?page=').($_smarty_tpl->tpl_vars['page']->value) ))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>History: <?php echo $_smarty_tpl->tpl_vars['page']->value;
$_block_repeat=false;
echo smarty_block_title(array('admpage'=>"wiki",'url'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ('tiki-pagehistory.php?page=').($_smarty_tpl->tpl_vars['page']->value) ))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="t_navbar mb-4">
	<?php $_smarty_tpl->_assignInScope('thispage', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,'url' )));?>
	<?php echo smarty_function_button(array('href'=>"tiki-index.php?page=".((string)$_smarty_tpl->tpl_vars['thispage']->value),'_class'=>"btn-info",'_text'=>"View page",'_icon_name'=>"view"),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['editable']->value) {?>
		<?php echo smarty_function_button(array('href'=>"tiki-editpage.php?page=".((string)$_smarty_tpl->tpl_vars['thispage']->value),'class'=>"btn btn-primary",'_text'=>"Edit page",'_icon_name'=>"edit"),$_smarty_tpl);?>

	<?php }?>
	<?php if (!(isset($_smarty_tpl->tpl_vars['noHistory']->value))) {?>
		<?php if ($_smarty_tpl->tpl_vars['show_all_versions']->value == "y") {?>
			<?php echo smarty_function_button(array('_text'=>"Collapse Into Edit Sessions",'href'=>"?clear_versions=1&show_all_versions=n",'_auto_args'=>"*",'_class'=>"btn-info",'_icon_name'=>"expanded"),$_smarty_tpl);?>

		<?php } else { ?>
			<?php echo smarty_function_button(array('_text'=>"Show All Versions",'href'=>"?clear_versions=1&show_all_versions=y",'_auto_args'=>"*",'_class'=>"btn-info",'_icon_name'=>"collapsed"),$_smarty_tpl);?>

		<?php }?>
	<?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
	<h2>Preview of version: <?php echo $_smarty_tpl->tpl_vars['preview']->value;?>

		<?php if ($_smarty_tpl->tpl_vars['info']->value['version'] == $_smarty_tpl->tpl_vars['preview']->value) {?><small><small>(current)</small></small><?php }?>
	</h2>
	<?php if ($_smarty_tpl->tpl_vars['info']->value['version'] != $_smarty_tpl->tpl_vars['preview']->value && $_smarty_tpl->tpl_vars['tiki_p_rollback']->value == 'y') {?>
		<div class="navbar">
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['preview']->value,'_title'=>"Roll back"));
$_block_repeat=true;
echo smarty_block_self_link(array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['preview']->value,'_title'=>"Roll back"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Roll back to this version<?php $_block_repeat=false;
echo smarty_block_self_link(array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['preview']->value,'_title'=>"Roll back"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		</div>
	<?php }?>
	<div>
		<?php if (!(isset($_smarty_tpl->tpl_vars['noHistory']->value))) {?>
			<?php if ((isset($_smarty_tpl->tpl_vars['show_all_versions']->value)) && $_smarty_tpl->tpl_vars['show_all_versions']->value == "n") {?>
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['preview_idx'],'offset_arg'=>"preview_idx",'itemname'=>"Session",'show_numbers'=>"n"));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['preview_idx'],'offset_arg'=>"preview_idx",'itemname'=>"Session",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['preview_idx'],'offset_arg'=>"preview_idx",'itemname'=>"Session",'show_numbers'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php } else { ?>
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['preview_idx'],'offset_arg'=>"preview_idx",'itemname'=>"Version",'show_numbers'=>"n"));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['preview_idx'],'offset_arg'=>"preview_idx",'itemname'=>"Version",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['preview_idx'],'offset_arg'=>"preview_idx",'itemname'=>"Version",'show_numbers'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php }?>
		<?php }?>
	</div>
	<?php if (((isset($_smarty_tpl->tpl_vars['flaggedrev_approval']->value)) && $_smarty_tpl->tpl_vars['flaggedrev_approval']->value) && $_smarty_tpl->tpl_vars['tiki_p_wiki_approve']->value == 'y' && !$_smarty_tpl->tpl_vars['flaggedrev_preview_rejected']->value) {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'comment','title'=>"Content Approval"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content Approval"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<form method="post" action="tiki-pagehistory.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,'url' ));?>
&amp;preview=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['preview']->value,'url' ));?>
">
				<?php if ($_smarty_tpl->tpl_vars['flaggedrev_preview_approved']->value) {?>
					<p>This revision is currently marked as approved.<p>
					<div class="submit">
						<input type="hidden" name="unapprove" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['preview']->value ));?>
">
						<input type="submit" class="btn btn-primary btn-sm" name="flaggedrev" value="Remove Approval">
					</div>
				<?php } else { ?>
					<p>This revision has not been approved.<p>
					<div class="submit">
						<input type="hidden" name="approve" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['preview']->value ));?>
">
						<input type="submit" class="btn btn-primary btn-sm" name="flaggedrev" value="Approve Revision">
					</div>
				<?php }?>
			</form>
		<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content Approval"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>

	<?php if (((isset($_smarty_tpl->tpl_vars['flaggedrev_approval']->value)) && $_smarty_tpl->tpl_vars['flaggedrev_approval']->value)) {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'warning','title'=>"History view"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'warning','title'=>"History view"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<p>
				<?php if ($_smarty_tpl->tpl_vars['flaggedrev_preview_approved']->value) {?>
						This revision may not be the latest approved revision!
				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['flaggedrev_preview_rejected']->value) {?>
						This revision has been rejected.
					<?php } else { ?>
						This revision has not been approved.
					<?php }?>
				<?php }?>
			</p>
		<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'warning','title'=>"History view"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>

	<div class="wikitext" id="page-data">
		<?php echo $_smarty_tpl->tpl_vars['previewd']->value;?>

	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['source']->value) {?>
	<h2>
		Source of version: <?php echo $_smarty_tpl->tpl_vars['source']->value;?>

		<?php if ($_smarty_tpl->tpl_vars['info']->value['version'] == $_smarty_tpl->tpl_vars['source']->value) {?><small><small>(current)</small></small><?php }?>
	</h2>
	<?php if ($_smarty_tpl->tpl_vars['info']->value['version'] != $_smarty_tpl->tpl_vars['source']->value && $_smarty_tpl->tpl_vars['tiki_p_rollback']->value == 'y') {?>
		<div class="navbar"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['source']->value,'_title'=>"Roll back"));
$_block_repeat=true;
echo smarty_block_self_link(array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['source']->value,'_title'=>"Roll back"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Roll back to this version<?php $_block_repeat=false;
echo smarty_block_self_link(array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['source']->value,'_title'=>"Roll back"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div>
	<?php }?>
	<div>
		<?php if (!(isset($_smarty_tpl->tpl_vars['noHistory']->value))) {?>
			<?php if ((isset($_smarty_tpl->tpl_vars['show_all_versions']->value)) && $_smarty_tpl->tpl_vars['show_all_versions']->value == "n") {?>
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['source_idx'],'offset_arg'=>"source_idx",'itemname'=>"Session",'show_numbers'=>"n"));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['source_idx'],'offset_arg'=>"source_idx",'itemname'=>"Session",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['source_idx'],'offset_arg'=>"source_idx",'itemname'=>"Session",'show_numbers'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php } else { ?>
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['source_idx'],'offset_arg'=>"source_idx",'itemname'=>"Version",'show_numbers'=>"n"));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['source_idx'],'offset_arg'=>"source_idx",'itemname'=>"Version",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['source_idx'],'offset_arg'=>"source_idx",'itemname'=>"Version",'show_numbers'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php }?>
		<?php }?>
	</div>
	<textarea data-codemirror="true" data-syntax='tiki' class="wikiedit readonly form-control" style="width:100%;height:400px" readonly="readonly" id="page_source"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sourced']->value ));?>
</textarea>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui'] == "y" && $_smarty_tpl->tpl_vars['prefs']->value['feature_syntax_highlighter'] != "y") {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$("#page_source").resizable();<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}?>

<?php if (((isset($_smarty_tpl->tpl_vars['flaggedrev_approval']->value)) && $_smarty_tpl->tpl_vars['flaggedrev_approval']->value) && $_smarty_tpl->tpl_vars['tiki_p_wiki_approve']->value == 'y' && $_smarty_tpl->tpl_vars['flaggedrev_compare_approve']->value) {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'comment','title'=>"Content Approval"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content Approval"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<form method="post" action="tiki-pagehistory.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,'url' ));?>
&amp;preview=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['new']->value['version'],'url' ));?>
">
			<p>This revision has not been approved.<p>
			<div class="submit">
				<input type="hidden" name="approve" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['new']->value['version'] ));?>
">
				<input type="submit" class="btn btn-primary btn-sm" name="flaggedrev" value="Approve Revision">
			</div>
		</form>
	<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content Approval"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php $_smarty_tpl->_subTemplateRender('file:pagehistory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (!(isset($_smarty_tpl->tpl_vars['noHistory']->value))) {?>
	<?php if ($_smarty_tpl->tpl_vars['preview']->value || $_smarty_tpl->tpl_vars['source']->value || $_smarty_tpl->tpl_vars['diff_style']->value) {?>
		<h2>
			History
		</h2>
	<?php }?>
	<form id="pagehistory" action="tiki-pagehistory.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
		<input type="hidden" name="page" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value ));?>
">
		<input type="hidden" name="history_offset" value="<?php echo $_smarty_tpl->tpl_vars['history_offset']->value;?>
">

		<div class="multi mb-4">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_edit']->value == 'y') {?>

					<div class="input-group">
						<div class="input-group-prepend bg-info">
							<div class="input-group-text bg-info">
								<?php echo smarty_function_icon(array('name'=>'admin_i18n','class'=>'tips','title'=>":Translation"),$_smarty_tpl);?>

							</div>
						</div>
						<select name="tra_lang" class="form-control">
							<?php
$__section_ix_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_0_total = $__section_ix_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_0_total !== 0) {
for ($__section_ix_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_0_iteration <= $__section_ix_0_total; $__section_ix_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first'] = ($__section_ix_0_iteration === 1);
?>
								<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['value'] ));?>
"<?php if ($_smarty_tpl->tpl_vars['lang']->value == $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['value']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'];?>
</option>
							<?php
}
}
?>
						</select>
						<div class="input-group-append ml-4">
							<input type="submit" class="btn btn-primary" name="update_translation" value="Update Translation"/>
							<?php if ($_smarty_tpl->tpl_vars['show_translation_history']->value) {?>
								<input type="hidden" name="show_translation_history" value="1">
								<?php echo smarty_function_button(array('show_translation_history'=>0,'_text'=>"Hide translation history",'_auto_args'=>"*",'_class'=>"btn btn-info"),$_smarty_tpl);?>

							<?php } else { ?>
								<?php echo smarty_function_button(array('show_translation_history'=>1,'_text'=>"Show translation history",'_auto_args'=>"*",'_class'=>"btn btn-info"),$_smarty_tpl);?>

							<?php }?>
						</div>
					</div>

			<?php }?>
		</div>

		<div class="row mb-4">
			<div class="col-sm-6">
				<input type="checkbox" name="paginate" id="paginate"<?php if ($_smarty_tpl->tpl_vars['paginate']->value) {?> checked="checked"<?php }?>>
				<label for="paginate">Enable pagination</label>
				<?php if ($_smarty_tpl->tpl_vars['paginate']->value) {?>
					<input type="text" name="history_pagesize" id="history_pagesize" value="<?php echo $_smarty_tpl->tpl_vars['history_pagesize']->value;?>
" class="form-control form-control-sm" style="width: 5em; display: inline-block">
					<label for="history_pagesize">rows per page</label>
				<?php }?>
			</div>
			<div class="col-sm-6">
			<?php if (($_smarty_tpl->tpl_vars['prefs']->value['default_wiki_diff_style'] != "old") && $_smarty_tpl->tpl_vars['history']->value) {?>
				<div class="input-group">
					<select class="form-control" name="diff_style" id="diff_style_all"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == "y") {?> style="display: none"<?php }?>>
						<option value="htmldiff" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value == "htmldiff") {?>selected="selected"<?php }?>>
							HTML diff
						</option>
						<option value="sidediff" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value == "sidediff") {?>selected="selected"<?php }?>>
							Side-by-side diff
						</option>
						<option value="sidediff-char" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value == "sidediff-char") {?>selected="selected"<?php }?>>
							Side-by-side diff by characters
						</option>
						<option value="inlinediff" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value == "inlinediff") {?>selected="selected"<?php }?>>
							Inline diff
						</option>
						<option value="inlinediff-char" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value == "inlinediff-char") {?>selected="selected"<?php }?>>
							Inline diff by characters
						</option>
						<option value="sidediff-full" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value == "sidediff-full") {?>selected="selected"<?php }?>>
							Full side-by-side diff
						</option>
						<option value="sidediff-full-char" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value == "sidediff-full-char") {?>selected="selected"<?php }?>>
							Full side-by-side diff by characters
						</option>
						<option value="inlinediff-full" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value == "inlinediff-full") {?>selected="selected"<?php }?>>
							Full inline diff
						</option>
						<option value="inlinediff-full-char" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value == "inlinediff-full-char") {?>selected="selected"<?php }?>>
							Full inline diff by characters
						</option>
						<option value="unidiff" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value == "unidiff") {?>selected="selected"<?php }?>>
							Unified diff
						</option>
						<option value="sideview" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value == "sideview") {?>selected="selected"<?php }?>>
							Side-by-side view
						</option>
					</select>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == "y") {?>
						<select class="form-control" name="diff_style" id="diff_style_simple">
							<option value="htmldiff" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value == "htmldiff") {?>selected="selected"<?php }?>>
								HTML diff
							</option>
							<option value="sidediff" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value == "sidediff") {?>selected="selected"<?php }?>>
								Side-by-side diff
							</option>
						</select>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == "y") {?>
						<span class="input-group-append">
							<?php echo smarty_function_button(array('_text'=>"Advanced",'_id'=>"toggle_diffs",'_ajax'=>"n",'_class'=>"btn btn-secondary"),$_smarty_tpl);?>

						</span>
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	$("form#pagehistory")
		.each(function store_original_values(i, form){
			form.originals = {};

			$(form).find(':input').each(function(i, input){
				var name = $(input).attr('name');
				var value = $(input).val();
				form.originals[name] = value;
			});
		})
		.submit(function submit_changed_values(evt){
			var always = ['page', 'oldver'];
			var originals = this.originals || {};

			$(this).find(':input:enabled').each(function(i, input){
				var name = $(input).attr('name');
				var value = $(input).val();

				if(always.indexOf(name) === -1 && originals[name] === value) {
					$(input).attr('disabled', 'disabled')
							.prop('disabled', 'disabled');
				}
			});
		});

	$("a#toggle_diffs").click(function(e){
		if ($(this).text() == "Advanced") {
			$(this).text("Simple");
			if (jqueryTiki.chosen) {
				$("#diff_style_all").next(".chosen-container").show();
				$("#diff_style_simple").next(".chosen-container").hide();
				$("#diff_style_all").attr("name", "diff_style");
				$("#diff_style_simple").attr("name", "");
			} else {
				$("#diff_style_all").show().attr("name", "diff_style");
				$("#diff_style_simple").hide().attr("name", "");
			}
		} else {
			$(this).text("Advanced");
			if (jqueryTiki.chosen) {
				$("#diff_style_all").next(".chosen-container").hide();
				$("#diff_style_simple").next(".chosen-container").show();
				$("#diff_style_all").attr("name", "");
				$("#diff_style_simple").attr("name", "diff_style");
			} else {
				$("#diff_style_all").hide().attr("name", "");
				$("#diff_style_simple").show().attr("name", "diff_style");
			}
		}
		return false;
	});
	if (jqueryTiki.chosen) {
		if ($("#diff_style_simple").html().indexOf("<?php echo $_smarty_tpl->tpl_vars['diff_style']->value;?>
") > -1) {
			$("#diff_style_all").next(".chosen-container").hide().attr("name", "");
		} else {
			$("#diff_style_simple").next(".chosen-container").hide();
		}
	}
	<?php if ($_smarty_tpl->tpl_vars['diff_style']->value != "htmldiff" && $_smarty_tpl->tpl_vars['diff_style']->value != "sidediff") {?>$("#toggle_diffs a").click();<?php }?>
						<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php }?>
				</div>
				<input type="hidden" name="show_all_versions" value="<?php echo $_smarty_tpl->tpl_vars['show_all_versions']->value;?>
">
			<?php }?>
			</div>
		</div>
			<div>
			<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value) {?>table-responsive<?php }?>"> 
				<table class="table table-condensed table-hover table-striped">
					<tr>
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove']->value == 'y') {?>
							<th>
								<?php echo smarty_function_select_all(array('checkbox_names'=>'checked[]'),$_smarty_tpl);?>

							</th>
						<?php }?>
						<th>
							Information
						</th>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution'] == 'y') {?>
							<th>
								Contribution
							</th>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_contributor_wiki'] == 'y') {?>
							<th>
								Contributors
							</th>
						<?php }?>
						<th>
							Version
						</th>
						<th>
							<?php echo smarty_function_icon(array('name'=>'html','iclass'=>'tips','ititle'=>'HTML allowed:HTML syntax is allowed either by page setting or use of the WYSIWIG editor'),$_smarty_tpl);?>

						</th>
						<th></th>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['default_wiki_diff_style'] != "old" && $_smarty_tpl->tpl_vars['history']->value) {?>
							<th colspan="2">
								<input type="submit" class="btn btn-info btn-sm" name="compare" value="Compare">
							</th>
						<?php }?>
					</tr>
					<tr class="active">
						<?php if ($_smarty_tpl->tpl_vars['history_offset']->value == 1) {?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove']->value == 'y') {?>
								<td>&nbsp;</td>
							<?php }?>
							<td class="text-left">
								<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['info']->value['lastModif']);?>

								<?php echo smarty_function_icon(array('name'=>"user"),$_smarty_tpl);?>
 <?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['info']->value['user']);?>

								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_history_ip'] != 'n') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['info']->value['ip']));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['ip']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>from %0<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['ip']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

								<?php if (((isset($_smarty_tpl->tpl_vars['flaggedrev_approval']->value)) && $_smarty_tpl->tpl_vars['flaggedrev_approval']->value) && $_smarty_tpl->tpl_vars['tiki_p_wiki_view_latest']->value == 'y' && $_smarty_tpl->tpl_vars['info']->value['approved']) {?><strong>(approved)</strong><?php }?>

								<?php if ($_smarty_tpl->tpl_vars['info']->value['comment']) {?><div><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['comment'] ));?>
</div><?php }?>

								<?php if ((isset($_smarty_tpl->tpl_vars['translation_sources']->value[$_smarty_tpl->tpl_vars['info']->value['version']])) && $_smarty_tpl->tpl_vars['translation_sources']->value[$_smarty_tpl->tpl_vars['info']->value['version']]) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['translation_sources']->value[$_smarty_tpl->tpl_vars['info']->value['version']], 'source');
$_smarty_tpl->tpl_vars['source']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['source']->value) {
$_smarty_tpl->tpl_vars['source']->do_else = false;
?>
										<div>
											Updated from: <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_script'=>"tiki-index.php",'page'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['source']->value['page'] ))));
$_block_repeat=true;
echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['source']->value['page'] ))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['source']->value['page'];
$_block_repeat=false;
echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['source']->value['page'] ))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> at version <?php echo $_smarty_tpl->tpl_vars['source']->value['version'];?>

										</div>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php }?>
								<?php if ((isset($_smarty_tpl->tpl_vars['translation_targets']->value[$_smarty_tpl->tpl_vars['info']->value['version']])) && $_smarty_tpl->tpl_vars['translation_targets']->value[$_smarty_tpl->tpl_vars['info']->value['version']]) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['translation_targets']->value[$_smarty_tpl->tpl_vars['info']->value['version']], 'target');
$_smarty_tpl->tpl_vars['target']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['target']->value) {
$_smarty_tpl->tpl_vars['target']->do_else = false;
?>
									<div>
										Used to update: <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_script'=>"tiki-index.php",'page'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['target']->value['page'] ))));
$_block_repeat=true;
echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['target']->value['page'] ))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['target']->value['page'];
$_block_repeat=false;
echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['target']->value['page'] ))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> to version <?php echo $_smarty_tpl->tpl_vars['target']->value['version'];?>

									</div>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php }?>
							</td>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution'] == 'y') {?>
								<td><?php
$__section_ix_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['contributions']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_1_total = $__section_ix_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_1_total !== 0) {
for ($__section_ix_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_1_iteration <= $__section_ix_1_total; $__section_ix_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first'] = ($__section_ix_1_iteration === 1);
if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first'] : null)) {?>,<?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['contributions']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'] ));
}
}
?></td>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_contributor_wiki'] == 'y') {?>
								<td>
									<?php
$__section_ix_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['contributors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_2_total = $__section_ix_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_2_total !== 0) {
for ($__section_ix_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_2_iteration <= $__section_ix_2_total; $__section_ix_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first'] = ($__section_ix_2_iteration === 1);
if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first'] : null)) {?>,<?php }
echo smarty_modifier_username($_smarty_tpl->tpl_vars['contributors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['login']);
}
}
?>
								</td>
							<?php }?>
							<td class="button_container">
								<?php if ($_smarty_tpl->tpl_vars['current']->value == $_smarty_tpl->tpl_vars['info']->value['version']) {?>
									<strong><?php }
echo $_smarty_tpl->tpl_vars['info']->value['version'];?>
<br>Current<?php if ($_smarty_tpl->tpl_vars['current']->value == $_smarty_tpl->tpl_vars['info']->value['version']) {?></strong>
								<?php }?>
							</td>
							<td class="button_container">
								<?php if ($_smarty_tpl->tpl_vars['info']->value['is_html'] || $_smarty_tpl->tpl_vars['info']->value['wysiwyg'] == "y") {?>
									<?php echo smarty_function_icon(array('name'=>'html','iclass'=>'tips','ititle'=>':HTML allowed'),$_smarty_tpl);?>

								<?php }?>
							</td>
							<td class="button_container" style="white-space: nowrap">
								<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('actions', array());
$_block_repeat=true;
echo smarty_block_actions(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
									<action><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'preview'=>$_smarty_tpl->tpl_vars['info']->value['version'],'_icon_name'=>"view",'_menu_text'=>'y','_menu_icon'=>'y'));
$_block_repeat=true;
echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'preview'=>$_smarty_tpl->tpl_vars['info']->value['version'],'_icon_name'=>"view",'_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>View<?php $_block_repeat=false;
echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'preview'=>$_smarty_tpl->tpl_vars['info']->value['version'],'_icon_name'=>"view",'_menu_text'=>'y','_menu_icon'=>'y'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></action><?php if ($_smarty_tpl->tpl_vars['tiki_p_wiki_view_source']->value == "y" && $_smarty_tpl->tpl_vars['prefs']->value['feature_source'] == "y") {?><action><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>$_smarty_tpl->tpl_vars['info']->value['version'],'_icon_name'=>"code",'_menu_text'=>'y','_menu_icon'=>'y'));
$_block_repeat=true;
echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>$_smarty_tpl->tpl_vars['info']->value['version'],'_icon_name'=>"code",'_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Source<?php $_block_repeat=false;
echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>$_smarty_tpl->tpl_vars['info']->value['version'],'_icon_name'=>"code",'_menu_text'=>'y','_menu_icon'=>'y'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></action><?php }?>
								<?php $_block_repeat=false;
echo smarty_block_actions(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
							</td>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['default_wiki_diff_style'] != "old" && $_smarty_tpl->tpl_vars['history']->value) {?>
								<td class="button_container">
									<input type="radio" name="oldver" value="0" title="Compare" <?php if ((isset($_smarty_tpl->tpl_vars['old']->value['version'])) && $_smarty_tpl->tpl_vars['old']->value['version'] == $_smarty_tpl->tpl_vars['info']->value['version']) {?>checked="checked"<?php }?>>
								</td>
								<td class="button_container">
									<input type="radio" name="newver" value="0" title="Compare" <?php if (((isset($_smarty_tpl->tpl_vars['new']->value['version'])) && $_smarty_tpl->tpl_vars['new']->value['version'] == $_smarty_tpl->tpl_vars['info']->value['version']) || (!(isset($_REQUEST['diff_style'])) || !$_REQUEST['diff_style'])) {?>checked="checked"<?php }?>>
								</td>
							<?php }?>
						<?php }?>
					</tr>

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['history']->value, 'element', false, NULL, 'hist', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_hist']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_hist']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_hist']->value['index'];
?>
						<tr>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove']->value == 'y') {?>
								<td>
									<input type="checkbox" name="checked[]" value="<?php echo $_smarty_tpl->tpl_vars['element']->value['version'];?>
">
								</td>
							<?php }?>
							<td class="text-left">
								<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['element']->value['lastModif']);?>

								<?php echo smarty_function_icon(array('name'=>"user"),$_smarty_tpl);?>
 <?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['element']->value['user']);?>

								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_history_ip'] != 'n') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['element']->value['ip']));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['element']->value['ip']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>from %0<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['element']->value['ip']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

								<?php if ($_smarty_tpl->tpl_vars['element']->value['comment']) {?><span class="form-text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['element']->value['comment'] ));?>
</span><?php }?>

								<?php if (((isset($_smarty_tpl->tpl_vars['flaggedrev_approval']->value)) && $_smarty_tpl->tpl_vars['flaggedrev_approval']->value) && $_smarty_tpl->tpl_vars['tiki_p_wiki_view_latest']->value == 'y' && $_smarty_tpl->tpl_vars['element']->value['approved']) {?><strong>(approved)</strong><?php }?>
								<?php if (((isset($_smarty_tpl->tpl_vars['flaggedrev_approval']->value)) && $_smarty_tpl->tpl_vars['flaggedrev_approval']->value) && $_smarty_tpl->tpl_vars['element']->value['rejected']) {?><strong>(rejected:</strong> <?php echo $_smarty_tpl->tpl_vars['element']->value['rejection_reason'];?>
<strong>)</strong><?php }?>

								<?php if ((isset($_smarty_tpl->tpl_vars['translation_sources']->value[$_smarty_tpl->tpl_vars['element']->value['version']])) && $_smarty_tpl->tpl_vars['translation_sources']->value[$_smarty_tpl->tpl_vars['element']->value['version']]) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['translation_sources']->value[$_smarty_tpl->tpl_vars['element']->value['version']], 'source');
$_smarty_tpl->tpl_vars['source']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['source']->value) {
$_smarty_tpl->tpl_vars['source']->do_else = false;
?>
									<div>
										Updated from: <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_script'=>"tiki-index.php",'page'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['source']->value['page'] ))));
$_block_repeat=true;
echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['source']->value['page'] ))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['source']->value['page'];
$_block_repeat=false;
echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['source']->value['page'] ))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> at version <?php echo $_smarty_tpl->tpl_vars['source']->value['version'];?>

									</div>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php }?>
								<?php if ((isset($_smarty_tpl->tpl_vars['translation_targets']->value[$_smarty_tpl->tpl_vars['element']->value['version']])) && $_smarty_tpl->tpl_vars['translation_targets']->value[$_smarty_tpl->tpl_vars['element']->value['version']]) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['translation_targets']->value[$_smarty_tpl->tpl_vars['element']->value['version']], 'target');
$_smarty_tpl->tpl_vars['target']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['target']->value) {
$_smarty_tpl->tpl_vars['target']->do_else = false;
?>
									<div>
										Used to update: <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_script'=>"tiki-index.php",'page'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['target']->value['page'] ))));
$_block_repeat=true;
echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['target']->value['page'] ))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['target']->value['page'];
$_block_repeat=false;
echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['target']->value['page'] ))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> to version <?php echo $_smarty_tpl->tpl_vars['target']->value['version'];?>

									</div>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php }?>
							</td>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution'] == 'y') {?>
								<td>
									<?php
$__section_ix_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['element']->value['contributions']) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_3_total = $__section_ix_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_3_total !== 0) {
for ($__section_ix_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_3_iteration <= $__section_ix_3_total; $__section_ix_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first'] = ($__section_ix_3_iteration === 1);
if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first'] : null)) {?>&nbsp;<?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['element']->value['contributions'][(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'] ));
}
}
?>
								</td>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_contributor_wiki'] == 'y') {?>
								<td>
									<?php
$__section_ix_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['element']->value['contributors']) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_4_total = $__section_ix_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_4_total !== 0) {
for ($__section_ix_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_4_iteration <= $__section_ix_4_total; $__section_ix_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first'] = ($__section_ix_4_iteration === 1);
if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first'] : null)) {?>,<?php }
echo smarty_modifier_username($_smarty_tpl->tpl_vars['element']->value['contributors'][(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['login']);
}
}
?>
								</td>
							<?php }?>
							<td class="button_container">
								<?php if ($_smarty_tpl->tpl_vars['current']->value == $_smarty_tpl->tpl_vars['element']->value['version']) {?><strong><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['show_all_versions']->value == "n" && !empty($_smarty_tpl->tpl_vars['element']->value['session'])) {?>
									<em><?php echo $_smarty_tpl->tpl_vars['element']->value['session'];?>
 - <?php echo $_smarty_tpl->tpl_vars['element']->value['version'];?>
</em>
								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['element']->value['version'];?>

								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['current']->value == $_smarty_tpl->tpl_vars['element']->value['version']) {?></strong><?php }?>
							</td>
							<td class="button_container">
								<?php if ($_smarty_tpl->tpl_vars['element']->value['is_html'] == "1") {?>
									<?php echo smarty_function_icon(array('name'=>'html','iclass'=>'tips','ititle'=>':HTML allowed'),$_smarty_tpl);?>

								<?php }?>
							</td>
							<td class="button_container" style="white-space: nowrap">
								<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('actions', array());
$_block_repeat=true;
echo smarty_block_actions(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
									<action><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'preview'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_icon_name'=>"view",'_menu_text'=>'y','_menu_icon'=>'y'));
$_block_repeat=true;
echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'preview'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_icon_name'=>"view",'_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>View<?php $_block_repeat=false;
echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'preview'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_icon_name'=>"view",'_menu_text'=>'y','_menu_icon'=>'y'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></action><?php if ($_smarty_tpl->tpl_vars['tiki_p_wiki_view_source']->value == "y" && $_smarty_tpl->tpl_vars['prefs']->value['feature_source'] == "y") {?><action><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_icon_name'=>"code",'_menu_text'=>'y','_menu_icon'=>'y'));
$_block_repeat=true;
echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_icon_name'=>"code",'_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Source<?php $_block_repeat=false;
echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_icon_name'=>"code",'_menu_text'=>'y','_menu_icon'=>'y'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></action><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['default_wiki_diff_style'] == "old") {?><action><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'diff2'=>$_smarty_tpl->tpl_vars['element']->value['version'],'diff_style'=>"sideview",'_icon_name'=>"copy",'_menu_text'=>'y','_menu_icon'=>'y'));
$_block_repeat=true;
echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'diff2'=>$_smarty_tpl->tpl_vars['element']->value['version'],'diff_style'=>"sideview",'_icon_name'=>"copy",'_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Compare<?php $_block_repeat=false;
echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'diff2'=>$_smarty_tpl->tpl_vars['element']->value['version'],'diff_style'=>"sideview",'_icon_name'=>"copy",'_menu_text'=>'y','_menu_icon'=>'y'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></action><action><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'diff2'=>$_smarty_tpl->tpl_vars['element']->value['version'],'diff_style'=>"unidiff",'_icon_name'=>"difference",'_menu_text'=>'y','_menu_icon'=>'y'));
$_block_repeat=true;
echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'diff2'=>$_smarty_tpl->tpl_vars['element']->value['version'],'diff_style'=>"unidiff",'_icon_name'=>"difference",'_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Difference<?php $_block_repeat=false;
echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'diff2'=>$_smarty_tpl->tpl_vars['element']->value['version'],'diff_style'=>"unidiff",'_icon_name'=>"difference",'_menu_text'=>'y','_menu_icon'=>'y'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></action><?php }
if ($_smarty_tpl->tpl_vars['tiki_p_rollback']->value == 'y' && $_smarty_tpl->tpl_vars['lock']->value != true) {?><action><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_icon_name'=>"undo",'_menu_text'=>'y','_menu_icon'=>'y'));
$_block_repeat=true;
echo smarty_block_self_link(array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_icon_name'=>"undo",'_menu_text'=>'y','_menu_icon'=>'y'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Roll back<?php $_block_repeat=false;
echo smarty_block_self_link(array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_icon_name'=>"undo",'_menu_text'=>'y','_menu_icon'=>'y'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></action><?php }?>
								<?php $_block_repeat=false;
echo smarty_block_actions(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
							</td>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['default_wiki_diff_style'] != "old") {?>
								<td class="button_container">
									<?php if ($_smarty_tpl->tpl_vars['show_all_versions']->value == 'n' && !empty($_smarty_tpl->tpl_vars['element']->value['session'])) {?>
										<input type="radio" name="oldver" value="<?php echo $_smarty_tpl->tpl_vars['element']->value['session'];?>
"
											title="Older Version" <?php if (((isset($_smarty_tpl->tpl_vars['old']->value['version'])) && (isset($_smarty_tpl->tpl_vars['element']->value['session'])) && $_smarty_tpl->tpl_vars['old']->value['version'] == $_smarty_tpl->tpl_vars['element']->value['session']) || ((!(isset($_REQUEST['diff_style'])) || !$_REQUEST['diff_style']) && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_hist']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_hist']->value['first'] : null))) {?>checked="checked"<?php }?>>
									<?php } else { ?>
										<input type="radio" name="oldver" value="<?php echo $_smarty_tpl->tpl_vars['element']->value['version'];?>
"
											title="Older Version" <?php if (((isset($_smarty_tpl->tpl_vars['old']->value['version'])) && (isset($_smarty_tpl->tpl_vars['element']->value['version'])) && $_smarty_tpl->tpl_vars['old']->value['version'] == $_smarty_tpl->tpl_vars['element']->value['version']) || ((!(isset($_REQUEST['diff_style'])) || !$_REQUEST['diff_style']) && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_hist']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_hist']->value['first'] : null))) {?>checked="checked"<?php }?>>
									<?php }?>
								</td>
								<td class="button_container">
									
									<input type="radio" name="newver" value="<?php echo $_smarty_tpl->tpl_vars['element']->value['version'];?>
" title="Select a newer version for comparison"
										<?php if ((isset($_smarty_tpl->tpl_vars['new']->value['version'])) && $_smarty_tpl->tpl_vars['new']->value['version'] == $_smarty_tpl->tpl_vars['element']->value['version']) {?>checked="checked"<?php }?> >
								</td>
							<?php }?>
						</tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</table>
			</div>
			<div class="input-group col-sm-8 mb-4">
				<select class="form-control" name="action">
					<option value="no_action" selected="selected">
						Select action to perform with checked...
					</option>
					<option value="remove_page_versions">
						Remove
					</option>
				</select>
				<span class="input-group-append">
					<button
						type="submit"
						form="pagehistory"
						formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'wiki'),$_smarty_tpl);?>
"
						class="btn btn-warning"
						onclick="confirmAjax(event)"
					>
						OK
					</button>
				</span>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['paginate']->value) {?>
				<?php if ((isset($_REQUEST['history_offset']))) {?>
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['history_cant']->value,'offset'=>$_REQUEST['history_offset'],'offset_arg'=>"history_offset",'step'=>$_smarty_tpl->tpl_vars['history_pagesize']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['history_cant']->value,'offset'=>$_REQUEST['history_offset'],'offset_arg'=>"history_offset",'step'=>$_smarty_tpl->tpl_vars['history_pagesize']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php $_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['history_cant']->value,'offset'=>$_REQUEST['history_offset'],'offset_arg'=>"history_offset",'step'=>$_smarty_tpl->tpl_vars['history_pagesize']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php } else { ?>
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['history_cant']->value,'offset_arg'=>"history_offset",'step'=>$_smarty_tpl->tpl_vars['history_pagesize']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['history_cant']->value,'offset_arg'=>"history_offset",'step'=>$_smarty_tpl->tpl_vars['history_pagesize']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php $_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['history_cant']->value,'offset_arg'=>"history_offset",'step'=>$_smarty_tpl->tpl_vars['history_pagesize']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php }?>
			<?php }?>
		</div>
	</form>
<?php }
}
}
