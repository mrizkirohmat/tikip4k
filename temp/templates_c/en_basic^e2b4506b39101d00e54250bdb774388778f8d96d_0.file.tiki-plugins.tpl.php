<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:45:20
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-plugins.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612665901a4ed5_06654644',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2b4506b39101d00e54250bdb774388778f8d96d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-plugins.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612665901a4ed5_06654644 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.listfilter.php','function'=>'smarty_function_listfilter',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.select_all.php','function'=>'smarty_function_select_all',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.substring.php','function'=>'smarty_modifier_substring',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),9=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.userlink.php','function'=>'smarty_modifier_userlink',),10=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.actions.php','function'=>'smarty_block_actions',),11=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('url'=>"tiki-plugins.php",'help'=>"Wiki Plugins"));
$_block_repeat=true;
echo smarty_block_title(array('url'=>"tiki-plugins.php",'help'=>"Wiki Plugins"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Plugin Approval<?php $_block_repeat=false;
echo smarty_block_title(array('url'=>"tiki-plugins.php",'help'=>"Wiki Plugins"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	For security, grant the <strong>tiki_p_plugin_approve</strong> permission only to trusted user groups. Use the <a href="tiki-admin.php?page=textarea" class="alert-link">Admin: Text Area page</a> to deactivate potentially risky plugins.
<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<p>
This page lists the plugins that require validation, the first time they are encountered. Each plugin contains a unique <em>signature</em> that is preserved.</p>
<p>When you upgrade from an old version, you may need to reparse all the pages. <?php echo smarty_function_button(array('href'=>"tiki-plugins.php?refresh=y",'_text'=>"Refresh"),$_smarty_tpl);?>
</p>

<?php if ($_smarty_tpl->tpl_vars['plugin_list']->value) {?>
	<p>If a plugin is no longer in use (for example, it has been removed from the wiki page), use <strong>Clear</strong> to remove it from this list. The plugin will automatically be added if it is encountered.</p>
	<p>Plugins can be individually previewed, approved, or rejected from the particular location that contains the plugin. For security, you should review each plugin to ensure it is safe to approve.</p>
	<form method="post" action="#">

		<?php echo smarty_function_listfilter(array('selectors'=>'#plugins_list tr.odd,#plugins_list tr.even'),$_smarty_tpl);?>

		<div <?php if ($_smarty_tpl->tpl_vars['js']->value) {?>class="table-responsive"<?php }?>>
			<table class="table table-hover table-striped" id="plugins_list">
				<tr>
					<th><?php echo smarty_function_select_all(array('checkbox_names'=>'clear[]'),$_smarty_tpl);?>
</th>
					<th>Plugin </th>
					<th>Location </th>
					<th>Added By </th>
					<th></th>
				</tr>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugin_list']->value, 'plugin', false, NULL, 'foo', array (
));
$_smarty_tpl->tpl_vars['plugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->do_else = false;
?>
					<tr>
						<td class="checkbox-cell"><div class="form-check"><input type="checkbox" name="clear[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value['fingerprint'] ));?>
" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value['fingerprint'] ));?>
"></div></td>
						<td class="text"><label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value['fingerprint'] ));?>
"><strong><?php echo smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_substring($_smarty_tpl->tpl_vars['plugin']->value['fingerprint'],0,20) )),"-","</strong> <br>Signature: ");?>
...</label></td>
						<td class="text">
							<?php if ($_smarty_tpl->tpl_vars['plugin']->value['last_objectType'] == 'wiki page') {?>
								<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'],'wiki page'),'_1'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value['last_objectId'] )),'_2'=>$_smarty_tpl->tpl_vars['plugin']->value['fingerprint']));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'],'wiki page'),'_1'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value['last_objectId'] )),'_2'=>$_smarty_tpl->tpl_vars['plugin']->value['fingerprint']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Wiki page: <a href="%0#%2" title="View this page.">%1</a><?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'],'wiki page'),'_1'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value['last_objectId'] )),'_2'=>$_smarty_tpl->tpl_vars['plugin']->value['fingerprint']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
							<?php } else { ?>
								Unknown
							<?php }?>
						</td>
						<td class="text"><?php if ($_smarty_tpl->tpl_vars['plugin']->value['added_by']) {
echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['plugin']->value['added_by']);
} else { ?>Unknown<?php }?></td>
						<td class="action">
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('actions', array());
$_block_repeat=true;
echo smarty_block_actions(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
								<action><a href="tiki-plugins.php?approveone=<?php echo $_smarty_tpl->tpl_vars['plugin']->value['fingerprint'];?>
" title="Approve"><?php echo smarty_function_icon(array('name'=>'ok','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Approve"),$_smarty_tpl);?>
</a></action><action><a href="tiki-plugins.php?clearone=<?php echo $_smarty_tpl->tpl_vars['plugin']->value['fingerprint'];?>
" title="Clear"><?php echo smarty_function_icon(array('name'=>'trash','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Clear"),$_smarty_tpl);?>
</a></action><?php if ($_smarty_tpl->tpl_vars['plugin']->value['last_objectType'] == 'wiki page') {?><action><a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['plugin']->value['last_objectId'],'wiki page');?>
#<?php echo $_smarty_tpl->tpl_vars['plugin']->value['fingerprint'];?>
" title="View this page"><?php echo smarty_function_icon(array('name'=>'textfile','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"View this page"),$_smarty_tpl);?>
</a></action><?php }?>
							<?php $_block_repeat=false;
echo smarty_block_actions(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						</td>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</table>
		</div>

		<p>
			<label for="submit_mult">Perform action with checked:</label>
			<select name="submit_mult" id="submit_mult" onchange="this.form.submit();">
				<option value="" selected="selected">...</option>
				<option value="clear" >Clear</option>
				<option value="approve">Approve</option>
			</select>
			or
			<input type="submit" class="btn btn-primary btn-sm" name="approveall" value="Approve all pending plugins">
		</p>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			Using <strong>Approve</strong> or <strong>Approve All</strong> will approve and activate the pending plugins. Use this feature <strong>only</strong> if you have verified that all the pending plugins are safe.
		<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php echo '<script'; ?>
 type='text/javascript'>
			<!--
			// Fake js to allow the use of the <noscript> tag (so non-js-users can still submit)
			//-->
		<?php echo '</script'; ?>
>
		<noscript>
			<input type="submit" class="btn btn-primary btn-sm" value="OK">
		</noscript>
	</form>
<?php } else { ?>
	<p>No plugins pending approval.</p>
<?php }
}
}
