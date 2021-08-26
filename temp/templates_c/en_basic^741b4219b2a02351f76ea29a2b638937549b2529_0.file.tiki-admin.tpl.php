<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:00:54
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61263f062ffa71_66589219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '741b4219b2a02351f76ea29a2b638937549b2529' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-admin.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/admin_navbar.tpl' => 1,
    'file:admin/include_".((string)$_smarty_tpl->tpl_vars[\'include\']->value).".tpl' => 1,
  ),
),false)) {
function content_61263f062ffa71_66589219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>


<?php $_smarty_tpl->_subTemplateRender("file:admin/admin_navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['sender_email'] == '') {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'warning','title'=>"Warning",'close'=>"y"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Warning",'close'=>"y"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>"tiki-admin.php?page=general&highlight=sender_email"));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>"tiki-admin.php?page=general&highlight=sender_email"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Your sender email is not set. You can set it <a href="%0" class="alert-link">in the general admin panel.</a><?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>"tiki-admin.php?page=general&highlight=sender_email"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Warning",'close'=>"y"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>
<div class="page-header">
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>((string)$_smarty_tpl->tpl_vars['helpUrl']->value)));
$_block_repeat=true;
echo smarty_block_title(array('help'=>((string)$_smarty_tpl->tpl_vars['helpUrl']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['admintitle']->value;
$_block_repeat=false;
echo smarty_block_title(array('help'=>((string)$_smarty_tpl->tpl_vars['helpUrl']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<span class="form-text"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</span>
</div>

<div id="pageheader">
	
	
	<?php if ($_smarty_tpl->tpl_vars['db_requires_update']->value) {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"error",'title'=>"Database Version Problem"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Database Version Problem"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			Your database requires an update to match the current Tiki version. Please proceed to <a class="alert-link" href="tiki-install.php">the installer</a>. Using Tiki with an incorrect database version usually provokes errors.
			If you have shell (SSH) access, you can also use the following, on the command line, from the root of your Tiki installation:
			<kbd>php console.php<?php if (!empty($_smarty_tpl->tpl_vars['tikidomain']->value)) {?> --site=<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['tikidomain']->value,'/','');
}?> database:update</kbd>
		<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Database Version Problem"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['vendor_autoload_ignored']->value || $_smarty_tpl->tpl_vars['vendor_autoload_disabled']->value) {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"error",'title'=>"Vendor folder issues"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Vendor folder issues"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			Your vendor folder contains multiple packages that were normally bundled with Tiki. Since version 17 those libraries were migrated from the folder <strong>vendor</strong> to the folder <strong>vendor_bundled</strong>.<br />
			<?php if ($_smarty_tpl->tpl_vars['vendor_autoload_ignored']->value) {?>
				To avoid issues your <strong>vendor/autoload.php</strong> was not loaded.<br />
				We recommend that you remove/clean the <strong>vendor/</strong> folder content unless you really want to load these libraries, that are not bundled with tiki, and in such case add a file called <strong>vendor/do_not_clean.txt</strong> to force the load of these libraries.
			<?php } elseif ($_smarty_tpl->tpl_vars['vendor_autoload_disabled']->value) {?>
				To avoid issues your <strong>vendor/autoload.php</strong> was renamed to <strong>vendor/autoload-disabled.php</strong>.<br />
				For more information check <strong>vendor/autoload-disabled-README.txt</strong> file.
			<?php }?>
		<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Vendor folder issues"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['installer_not_locked']->value) {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"error",'title'=>"Installer not locked"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Installer not locked"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			 The installer allows a user to change or destroy the site's database through the browser so it is very important to keep it locked. 
			<br />You can re-run the installer (tiki-install.php), skip to the last step and select <strong>LOCK THE INSTALLER</strong>. Alternatively, you can simply <strong>add a lock file</strong> (file without any extension) in your db/ folder.
			You can also use the following, on the command line, from the root of your Tiki installation:
			<kbd>php console.php installer:lock</kbd>
		<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Installer not locked"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['search_index_outdated']->value) {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"error",'title'=>"Search Index outdated"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Search Index outdated"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		The search index might be outdated. It is recommended to rebuild the search index.
		<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Search Index outdated"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['fgal_web_accessible']->value) {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"File gallery directory web accessable"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"File gallery directory web accessable"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		This is a potential security risk. You may deny access to this directory with server access rules, move your gallery directory into a space outside of your web root, or transfer file gallery storage into the database.
		<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"File gallery directory web accessable"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>

	
</div>

<?php if (count($_smarty_tpl->tpl_vars['upgrade_messages']->value)) {?>
	<?php if (count($_smarty_tpl->tpl_vars['upgrade_messages']->value) == 1) {?>
		<?php $_smarty_tpl->_assignInScope('title', "Upgrade Available");?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('title', "Upgrades Available");?>
	<?php }?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>$_smarty_tpl->tpl_vars['title']->value,'icon'=>"announce"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>$_smarty_tpl->tpl_vars['title']->value,'icon'=>"announce"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['upgrade_messages']->value, 'um');
$_smarty_tpl->tpl_vars['um']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['um']->value) {
$_smarty_tpl->tpl_vars['um']->do_else = false;
?>
			<p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['um']->value ));?>
</p>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>$_smarty_tpl->tpl_vars['title']->value,'icon'=>"announce"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if ($_smarty_tpl->tpl_vars['template_not_found']->value == 'y') {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"error",'title'=>"Error"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Error"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['include']->value ));
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>"page",'_1'=>$_prefixVariable1));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>"page",'_1'=>$_prefixVariable1), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>The <strong>%0</strong> parameter has an invalid value: <strong>%1</strong>.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>"page",'_1'=>$_prefixVariable1), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Error"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else { ?>
	<?php $_smarty_tpl->_subTemplateRender("file:admin/include_".((string)$_smarty_tpl->tpl_vars['include']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
