<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:36:18
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-admingroups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61265562cc1f38_61336397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c35e4d5e02f5f04e1dca50970ebcc3cb59c018a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-admingroups.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:find.tpl' => 1,
  ),
),false)) {
function content_61265562cc1f38_61336397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tabset.php','function'=>'smarty_block_tabset',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tab.php','function'=>'smarty_block_tab',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.initials_filter_links.php','function'=>'smarty_function_initials_filter_links',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.select_all.php','function'=>'smarty_function_select_all',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.self_link.php','function'=>'smarty_block_self_link',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),9=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.actions.php','function'=>'smarty_block_actions',),10=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),11=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.permission_link.php','function'=>'smarty_function_permission_link',),12=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.bootstrap_modal.php','function'=>'smarty_function_bootstrap_modal',),13=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.pagination_links.php','function'=>'smarty_block_pagination_links',),14=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),15=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.autocomplete.php','function'=>'smarty_function_autocomplete',),16=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),17=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.userlink.php','function'=>'smarty_modifier_userlink',),18=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_datetime.php','function'=>'smarty_modifier_tiki_short_datetime',),19=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.popup.php','function'=>'smarty_function_popup',),));
?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"Groups Management",'admpage'=>"login"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"Groups Management",'admpage'=>"login"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Admin groups<?php $_block_repeat=false;
echo smarty_block_title(array('help'=>"Groups Management",'admpage'=>"login"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
	<div class="t_navbar mb-4">
		<?php echo smarty_function_button(array('href'=>"tiki-adminusers.php",'class'=>"btn btn-primary",'_type'=>"link",'_icon_name'=>"user",'_text'=>"Admin Users"),$_smarty_tpl);?>

		<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php?clean=y",'class'=>"btn btn-link",'_type'=>"link",'_icon_name'=>"trash",'_text'=>"Clear cache"),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['groupname']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs'] != 'y') {?>
				<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php?add=1&amp;cookietab=2#tab2",'class'=>"btn btn-primary",'_icon_name'=>"create",'_text'=>"Add New Group"),$_smarty_tpl);?>

			<?php } else { ?>
				<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php?add=1&amp;cookietab=2",'class'=>"btn btn-primary",'_icon_name'=>"create",'_text'=>"Add New Group"),$_smarty_tpl);?>

			<?php }?>
		<?php }?>
		<?php echo smarty_function_button(array('href'=>"tiki-objectpermissions.php",'class'=>"btn btn-link",'_type'=>"link",'_icon_name'=>"permission",'_text'=>"Permissions"),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_invite'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_invite']->value == 'y') {?>
			<?php echo smarty_function_button(array('href'=>"tiki-list_invite.php",'class'=>"btn btn-primary",'_type'=>"link",'_icon_name'=>"thumbs-up",'_text'=>"Invitation List"),$_smarty_tpl);?>

		<?php }?>
	</div>
<?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>'tabs_admingroups'));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>'tabs_admingroups'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"List"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"List"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

	<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
		<h2>List of existing groups</h2>
		<?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
			<?php $_smarty_tpl->_subTemplateRender('file:find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('find_show_num_rows'=>'y'), 0, false);
?>
			<?php if ($_smarty_tpl->tpl_vars['cant_pages']->value > $_smarty_tpl->tpl_vars['maxRecords']->value || !empty($_smarty_tpl->tpl_vars['initial']->value) || !empty($_smarty_tpl->tpl_vars['find']->value)) {?>
				<?php echo smarty_function_initials_filter_links(array(),$_smarty_tpl);?>

			<?php }?>
		<?php }?>
		<form id="checkform1" method="post">
		<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value) {?>table-responsive <?php }?>ts-wrapperdiv"> 
	<?php }?>
		<table id="<?php echo $_smarty_tpl->tpl_vars['ts']->value['tableid'];?>
" class="table normal table-striped table-hover" data-count="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cant_pages']->value ));?>
">
			<thead>
			<tr>
				<th id="checkbox"><?php echo smarty_function_select_all(array('checkbox_names'=>'checked[]','tablesorter'=>((string)$_smarty_tpl->tpl_vars['ts']->value['enabled'])),$_smarty_tpl);?>
</th>
				<th id="id"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'id'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'id'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>ID<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'id'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
				<th id="group"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'groupName'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'groupName'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Name<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'groupName'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
				<th id="inherits">Inherits Permissions from</th>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['useGroupHome'] == 'y') {?>
					<th id="home"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'groupHome'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'groupHome'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Homepage<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'groupHome'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
				<?php }?>
				<th id="choice"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'userChoice'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'userChoice'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>User Choice<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'userChoice'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
				<th id="actions"></th>
			</tr>
			</thead>
			<tbody>
			<?php
$__section_user_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_user_0_total = $__section_user_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_user'] = new Smarty_Variable(array());
if ($__section_user_0_total !== 0) {
for ($__section_user_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] = 0; $__section_user_0_iteration <= $__section_user_0_total; $__section_user_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']++){
?>
				<?php if ($_smarty_tpl->tpl_vars['groupname']->value == $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName']) {?>
					<?php $_smarty_tpl->_assignInScope('href', '#');?>
					<?php $_smarty_tpl->_assignInScope('onclick', "onclick='showTab(2); return false;'");?>
				<?php } else { ?>
					<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName'],'url' ));
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('href', "tiki-admingroups.php?group=".$_prefixVariable1);?>
					<?php $_smarty_tpl->_assignInScope('onclick', '');?>
				<?php }?>
				<tr>
					<td class="checkbox-cell">
						<div class="form-check">
							<?php if ($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName'] != 'Admins' && $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName'] != 'Anonymous' && $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName'] != 'Registered') {?>
								<input type="checkbox" name="checked[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName'] ));?>
">
							<?php }?>
						</div>
					</td>
					<td class="id"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['id'] ));?>
</td>
					<td class="text">
						<a class="link tips" href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
"<?php echo $_smarty_tpl->tpl_vars['onclick']->value;?>
 title="Edit group:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName'] ));?>
">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName'] ));?>

						</a>
						<?php if ($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['isTplGroup'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_templated_groups'] == 'y') {?>
							<sup class="tikihelp" title="Templated Groups Container"> T </sup>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['isRole'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_templated_groups'] == 'y') {?>
							<sup class="tikihelp" title="Role Group"> R </sup>
						<?php }?>
						<div class="text"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupDesc'] )));
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div>
					</td>
					<td class="text">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['included'], 'incl');
$_smarty_tpl->tpl_vars['incl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['incl']->value) {
$_smarty_tpl->tpl_vars['incl']->do_else = false;
?>
							<div>
								<?php if (in_array($_smarty_tpl->tpl_vars['incl']->value,$_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['included_direct'])) {?>
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['incl']->value ));?>

								<?php } else { ?>
									<i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['incl']->value ));?>
</i>
								<?php }?>
							</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</td>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['useGroupHome'] == 'y') {?>
						<td class="text">
							<a class="link" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupHome']);?>
" title="Group Homepage"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupHome'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></a>
						</td>
					<?php }?>

					<td class="text"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['userChoice'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
					<td class="action">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('actions', array());
$_block_repeat=true;
echo smarty_block_actions(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<action><a href="tiki-admingroups.php?group=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName'],"url" ));
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs'] != 'y') {?>#tab2<?php }?>"><?php echo smarty_function_icon(array('name'=>"edit",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a></action><action><?php echo smarty_function_permission_link(array('mode'=>'text','group'=>$_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName'],'count'=>$_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['permcant']),$_smarty_tpl);?>
</action><?php if ($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName'] != 'Anonymous' && $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName'] != 'Registered' && $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName'] != 'Admins') {?><action><a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'group','action'=>'remove_groups','checked'=>$_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"remove",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>
</a></action><?php }?>
						<?php $_block_repeat=false;
echo smarty_block_actions(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</td>
				</tr>
			<?php
}
}
?>
			</tbody>
		</table>
	<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
		</div>
		<div class="input-group col-sm-8">
			<label for="submit_mult" class="col-form-label sr-only">Select action to perform with checked</label>
			<select name="action" class="form-control">
				<option value="no_action" selected="selected">Select action to perform with checked...</option>
				<option value="remove_groups">Remove</option>
			</select>
			<div class="input-group-append">
				<input type="submit" form="checkform1" formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'group'),$_smarty_tpl);?>
" class="btn btn-secondary" value="OK" onclick="confirmAjax(event)">
			</div>
		</div>
		</form>
		<?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>
	<?php }
$_block_repeat=false;
echo smarty_block_tab(array('name'=>"List"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['groupname']->value) {?>
	<?php $_smarty_tpl->_assignInScope('tabaddeditgroup_admgrp', "Edit");?>
	<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groupname']->value ));
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('gname', "<i>".$_prefixVariable2."</i>");
} else { ?>
	<?php $_smarty_tpl->_assignInScope('tabaddeditgroup_admgrp', "Create group");?>
	<?php $_smarty_tpl->_assignInScope('gname', '');
}?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>((string)$_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp']->value)." ".((string)$_smarty_tpl->tpl_vars['gname']->value)));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>((string)$_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp']->value)." ".((string)$_smarty_tpl->tpl_vars['gname']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

	<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
		<?php if (!empty($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches'] == 'y' && !empty($_smarty_tpl->tpl_vars['groupname']->value)) {?>
			<div class="float-sm-right">
				<?php if (!$_smarty_tpl->tpl_vars['group_info']->value['isWatching']) {?>
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('watch'=>$_smarty_tpl->tpl_vars['groupname']->value,'_class'=>"tips",'_title'=>((string)$_smarty_tpl->tpl_vars['groupname']->value).":Group is NOT being monitored. Click icon to START monitoring."));
$_block_repeat=true;
echo smarty_block_self_link(array('watch'=>$_smarty_tpl->tpl_vars['groupname']->value,'_class'=>"tips",'_title'=>((string)$_smarty_tpl->tpl_vars['groupname']->value).":Group is NOT being monitored. Click icon to START monitoring."), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo smarty_function_icon(array('name'=>'watch','alt'=>"Group is NOT being monitored. Click icon to START monitoring."),$_smarty_tpl);?>

					<?php $_block_repeat=false;
echo smarty_block_self_link(array('watch'=>$_smarty_tpl->tpl_vars['groupname']->value,'_class'=>"tips",'_title'=>((string)$_smarty_tpl->tpl_vars['groupname']->value).":Group is NOT being monitored. Click icon to START monitoring."), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php } else { ?>
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('unwatch'=>$_smarty_tpl->tpl_vars['groupname']->value,'_class'=>"tips",'_title'=>((string)$_smarty_tpl->tpl_vars['groupname']->value).":Group IS being monitored. Click icon to STOP monitoring."));
$_block_repeat=true;
echo smarty_block_self_link(array('unwatch'=>$_smarty_tpl->tpl_vars['groupname']->value,'_class'=>"tips",'_title'=>((string)$_smarty_tpl->tpl_vars['groupname']->value).":Group IS being monitored. Click icon to STOP monitoring."), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo smarty_function_icon(array('name'=>'stop-watching','alt'=>"Group IS being monitored. Click icon to STOP monitoring."),$_smarty_tpl);?>

					<?php $_block_repeat=false;
echo smarty_block_self_link(array('unwatch'=>$_smarty_tpl->tpl_vars['groupname']->value,'_class'=>"tips",'_title'=>((string)$_smarty_tpl->tpl_vars['groupname']->value).":Group IS being monitored. Click icon to STOP monitoring."), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php }?>
			</div>
		<?php }?>
		<h2><?php echo $_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp']->value;?>
</h2>
		<form class="form-horizontal" action="tiki-admingroups.php" id="groupEdit" method="post">
			<div class="form-group row">
				<label for="groups_group" class="col-form-label col-md-3">Group</label>
				<div class="col-md-9">
					<?php if ($_smarty_tpl->tpl_vars['groupname']->value != 'Anonymous' && $_smarty_tpl->tpl_vars['groupname']->value != 'Registered' && $_smarty_tpl->tpl_vars['groupname']->value != 'Admins') {?>
						<input type="text" name="name" id="groups_group" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groupname']->value ));?>
" class="form-control">
					<?php } else { ?>
						<input type="hidden" name="name" id="groups_group" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groupname']->value ));?>
">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groupname']->value ));?>

					<?php }?>
				</div>
			</div>
			<div class="form-group row">
				<label for="groups_desc" class="col-form-label col-md-3">Description</label>
				<div class="col-md-9">
					<textarea rows="5" name="desc" id="groups_desc" class="form-control"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groupdesc']->value ));?>
</textarea>
				</div>
			</div>
			<div class="form-group row">
				<label for="groups_inc" class="col-form-label col-md-3">Inheritance</label>
				<div class="col-md-9">
					<?php if (count($_smarty_tpl->tpl_vars['inc']->value) > 20 && $_smarty_tpl->tpl_vars['hasOneIncludedGroup']->value == "y") {?>
						<ul>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inc']->value, 'yn', false, 'gr');
$_smarty_tpl->tpl_vars['yn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gr']->value => $_smarty_tpl->tpl_vars['yn']->value) {
$_smarty_tpl->tpl_vars['yn']->do_else = false;
?>
								<?php if ($_smarty_tpl->tpl_vars['yn']->value == 'y') {?>
									<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gr']->value ));?>
</li>
								<?php }?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					<?php }?>
					<select name="include_groups[]" id="groups_inc" multiple="multiple" size="8" class="form-control">
						<?php if (!empty($_smarty_tpl->tpl_vars['groupname']->value)) {?>
							<option value="">None</option><?php }?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inc']->value, 'yn', false, 'gr');
$_smarty_tpl->tpl_vars['yn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gr']->value => $_smarty_tpl->tpl_vars['yn']->value) {
$_smarty_tpl->tpl_vars['yn']->do_else = false;
?>
							<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gr']->value ));?>
" <?php if ($_smarty_tpl->tpl_vars['yn']->value == 'y') {?> selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_truncate($_smarty_tpl->tpl_vars['gr']->value,"52") ));?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
					<div class="form-text">
						<p>Permissions will be inherited from these groups. <?php if ($_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen'] != 'y') {?>Use Ctrl+Click to select multiple options</p><?php }?>
					</div>
					<?php if (count($_smarty_tpl->tpl_vars['indirectly_inherited_groups']->value) > 0) {?>
						<p>Indirectly included groups:</p>
						<ul>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['indirectly_inherited_groups']->value, 'gr');
$_smarty_tpl->tpl_vars['gr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gr']->value) {
$_smarty_tpl->tpl_vars['gr']->do_else = false;
?>
								<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gr']->value ));?>
</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					<?php }?>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['useGroupHome'] == 'y') {?>
				<div class="form-group row">
					<label for="groups_home" class="col-form-label col-md-3">Group Home</label>
					<div class="col-md-9">
						<input type="text" class="form-control" name="home" id="groups_home" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['grouphome']->value ));?>
">
						<?php echo smarty_function_autocomplete(array('element'=>'#groups_home','type'=>'pagename'),$_smarty_tpl);?>

						<div class="form-text">
							Use wiki page name or full URL.
							For other Tiki features, use links relative to the Tiki root (such as
								<em>/tiki-forums.php</em>
								).
						</div>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories'] == 'y') {?>
				<div class="form-group row">
					<label for="groups_defcat" class="col-form-label col-md-3">Default Category</label>
					<div class="col-md-9">
						<select name="defcat" id="groups_defcat" class="form-control">
							<option value="" <?php if (($_smarty_tpl->tpl_vars['groupdefcat']->value == '') || ($_smarty_tpl->tpl_vars['groupdefcat']->value == 0)) {?> selected="selected"<?php }?>>none</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, 'id');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
								<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value ));?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value == $_smarty_tpl->tpl_vars['groupdefcat']->value) {?>selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['categpath'] ));?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
						<div class="form-text">
							Default category assigned to uncategorized objects edited by a user with this default group.
						</div>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['useGroupTheme'] == 'y') {?>
				<div class="form-group row">
					<label for="groups_theme" class="col-form-label col-md-3">Group theme</label>
					<div class="col-md-9">
						<select name="theme" id="groups_theme" class="form-control">
							<option value="" <?php if ($_smarty_tpl->tpl_vars['grouptheme']->value == '') {?> selected="selected"<?php }?>>none
								(Use site default)
							</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_themes']->value, 'theme_name', false, 'theme');
$_smarty_tpl->tpl_vars['theme_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value => $_smarty_tpl->tpl_vars['theme_name']->value) {
$_smarty_tpl->tpl_vars['theme_name']->do_else = false;
?>
								<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['theme']->value ));?>
" <?php if ($_smarty_tpl->tpl_vars['grouptheme']->value == $_smarty_tpl->tpl_vars['theme']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_conditional_formatting'] == 'y') {?>
				<div class="form-group row">
					<label for="groups_color" class="col-form-label col-md-3">Group color</label>
					<div class="col-md-9">
						<input type="text" class="form-control" name="color" id="groups_color" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groupcolor']->value ));?>
">
						<div class="form-text">
							Default color to use when plotting values for this group in charts. Use HEX notation, e.g. #FF0000 for red color.
						</div>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['groupTracker'] == 'y') {?>
				<div class="form-group row">
					<label for="groupstracker" class="col-form-label col-md-3">Group Information Tracker</label>
					<div class="col-md-9">
						<select name="groupstracker" id="groupstracker" class="form-control">
							<option value="0">choose a group tracker ...</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trackers']->value, 'tit', false, 'tid');
$_smarty_tpl->tpl_vars['tit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tid']->value => $_smarty_tpl->tpl_vars['tit']->value) {
$_smarty_tpl->tpl_vars['tit']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['grouptrackerid']->value)) && $_smarty_tpl->tpl_vars['tid']->value == $_smarty_tpl->tpl_vars['grouptrackerid']->value) {?> <?php $_smarty_tpl->_assignInScope('ggr', ((string)$_smarty_tpl->tpl_vars['tit']->value));?>selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tit']->value ));?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
						<div class="form-text">
							Choose a group tracker which can be used to add user registration fields or allow group permissions on a tracker. The tracker must have one user selector field that is set to auto-assign.
						</div>
						<?php if ((isset($_smarty_tpl->tpl_vars['grouptrackerid']->value)) || $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y') {?>
							<div id="groupfielddiv"<?php if (empty($_smarty_tpl->tpl_vars['grouptrackerid']->value) && $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen'] != 'y') {?> style="display: none;"<?php }?>>
								<select name="groupfield" class="form-control">
									<option value="0">choose a field ...</option>
									<?php if ((isset($_smarty_tpl->tpl_vars['groupFields']->value))) {?>
										<?php
$__section_ix_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['groupFields']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_1_total = $__section_ix_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_1_total !== 0) {
for ($__section_ix_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_1_iteration <= $__section_ix_1_total; $__section_ix_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['groupFields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['fieldId'];?>
"<?php if ($_smarty_tpl->tpl_vars['groupFields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['fieldId'] == $_smarty_tpl->tpl_vars['groupfieldid']->value) {?> selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groupFields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'] ));?>
</option>
										<?php
}
}
?>
									<?php }?>
								</select>
								<div class="form-text">
									Select the user selector field from the above tracker.
								</div>
							</div>
						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['grouptrackerid']->value))) {?>
							<?php echo smarty_function_button(array('href'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['grouptrackerid']->value),'_text'=>"Admin ".((string)$_smarty_tpl->tpl_vars['ggr']->value)),$_smarty_tpl);?>

						<?php } else { ?>
							<?php echo smarty_function_button(array('href'=>"tiki-list_trackers.php",'_text'=>"Go to trackers list"),$_smarty_tpl);?>

						<?php }?>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['userTracker'] == 'y') {?>
				<div class="form-group row">
					<label for="userstracker" class="col-form-label col-md-3">User Registration Tracker</label>
					<div class="col-md-9">
						<select name="userstracker" id="userstracker" class="form-control">
							<option value="0">choose a user tracker ...</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trackers']->value, 'tit', false, 'tid');
$_smarty_tpl->tpl_vars['tit']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tid']->value => $_smarty_tpl->tpl_vars['tit']->value) {
$_smarty_tpl->tpl_vars['tit']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['userstrackerid']->value)) && $_smarty_tpl->tpl_vars['tid']->value == $_smarty_tpl->tpl_vars['userstrackerid']->value) {?> <?php $_smarty_tpl->_assignInScope('ugr', ((string)$_smarty_tpl->tpl_vars['tit']->value));?>selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tit']->value ));?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
						<div class="form-text">
							Choose a user tracker to provide fields for a new user to complete upon registration. The tracker must have one user selector field that is set to auto-assign.
						</div>
						<?php if (((isset($_smarty_tpl->tpl_vars['userstrackerid']->value)) || $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y')) {?>
							<div id="usersfielddiv"<?php if (empty($_smarty_tpl->tpl_vars['userstrackerid']->value) && $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen'] != 'y') {?> style="display: none;"<?php }?>>
								<label>Select user field</label> <select name="usersfield" class="form-control">
									<?php if (!empty($_smarty_tpl->tpl_vars['usersFields']->value)) {?>
										<option value="0">Choose a field ...</option>
										<?php
$__section_ix_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['usersFields']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_2_total = $__section_ix_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_2_total !== 0) {
for ($__section_ix_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_2_iteration <= $__section_ix_2_total; $__section_ix_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['usersFields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['fieldId'];?>
"<?php if ($_smarty_tpl->tpl_vars['usersFields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['fieldId'] == $_smarty_tpl->tpl_vars['usersfieldid']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['usersFields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['fieldId'];?>

												- <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['usersFields']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'] ));?>
</option>
										<?php
}
}
?>
									<?php } else { ?>
										<option value="0">No fields in tracker ...</option>
									<?php }?>
								</select>
								<div class="form-text">
									Select the user selector field from the above tracker to link a tracker item to the user upon registration.
								</div>
							</div>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	$("#userstracker, #groupstracker").change(function () {
		var $element = this.id,
			$fields = $element == 'userstracker' ? $('select[name=usersfield]') : $('select[name=groupfield]'),
			$showid = $element == 'userstracker' ? '#usersfielddiv' : '#groupfielddiv';
		if ($(this).val() > 0) {
			$.getJSON($.service('tracker', 'list_fields'), {trackerId: $(this).val()}, function (data) {
				if (data && data.fields) {
					if (data.fields.length > 0) {
						$fields.empty().append('<option value="0">choose a field ...</option>');
						var sel = '';
						$(data.fields).each(function () {
							if (this.type === 'u' && this.options_array[0] == 1) {
								sel = ' selected="selected"';
							} else {
								sel = '';
							}
							$fields.append('<option value="' + this.fieldId + '"' + sel + '>' + this.fieldId + ' - ' + this.name + '</option>');
						});
					} else {
						$fields.empty().append('<option value="0">No fields in this tracker</option>');
					}
					$($showid).show();
					$('#registerfields').show();
					if (jqueryTiki.chosen) {
						$fields.trigger("chosen:updated");
					}
				}
			});
		} else {
			$fields.empty();
			$($showid).hide();
		}
	});
<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['userstrackerid']->value))) {?>
							<?php echo smarty_function_button(array('href'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['userstrackerid']->value),'_text'=>"Admin ".((string)$_smarty_tpl->tpl_vars['ugr']->value)),$_smarty_tpl);?>

						<?php } else { ?>
							<?php echo smarty_function_button(array('href'=>"tiki-list_trackers.php",'_text'=>"Go to tracker list"),$_smarty_tpl);?>

						<?php }?>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wizard_user'] == 'y' && $_smarty_tpl->tpl_vars['groupname']->value == 'Registered') {?>
					<div class="form-group row">
						<label class="col-form-label col-md-3">User Wizard Fields</label>
						<div class="col-md-9">
							By default, the same fields as in registration are used. <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>"tiki-admin.php?page=login"));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>"tiki-admin.php?page=login"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>You can choose in the
							<a href="%0">Login admin
								panel</a> to show different fields in User Wizard than the ones asked at Registration Time<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>"tiki-admin.php?page=login"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
							.</td>
						</div>
					</div>
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['userTracker'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['useGroupTheme'] == 'y') {?>
				<div id="registerfields" class="form-group row"<?php if (empty($_smarty_tpl->tpl_vars['userstrackerid']->value) && empty($_smarty_tpl->tpl_vars['grouptrackerid']->value) && $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen'] != 'y') {?> style="display: none;"<?php }?>>
					<label for="registrationUserFieldIds" class="col-form-label col-md-3">Group or User Tracker Registration Fields</label>
					<div class="col-md-9">
						<input type="text" class="form-control" name="registrationUsersFieldIds" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['registrationUsersFieldIds']->value ));?>
">
						<div class="form-text">
							<p>If either a group information tracker or user registration tracker has been selected above, enter colon-separated field ID numbers for the tracker fields in the above tracker to include on the registration form for a new user to complete.</p>
						</div>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['groupname']->value != 'Anonymous' && $_smarty_tpl->tpl_vars['groupname']->value != 'Registered' && $_smarty_tpl->tpl_vars['groupname']->value != 'Admins') {?>
				<div class="form-group row">
					<label class="col-form-label col-md-3">User Choice</label>
					<div class="col-md-9">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="userChoice"<?php if ($_smarty_tpl->tpl_vars['userChoice']->value == 'y') {?> checked="checked"<?php }?>>
								User can assign himself or herself to the group
							</label>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-form-label col-md-3">Membership expiry</label>
					<div class="col-md-9">
						<label>Anniversary</label>
						<input type="text" name="anniversary" class="form-control" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_info']->value['anniversary'] ));?>
">
						<div class="form-text">Use MMDD to specify an annual date as of which all users will be unassigned from the group, or DD to specify a monthly date.</div>
						<label>Or</label><br> <label>Number of Days</label>
						<input type="text" class="form-control" name="expireAfter" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_info']->value['expireAfter'] ));?>
">
						<div class="form-text">
							Number of days after which all users will be unassigned from the group.
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="prorateInterval" class="col-form-label col-md-3">Pro-Rate Membership</label>
					<div class="col-md-9">
						<select name="prorateInterval" class="form-control">
							<option value="day" <?php if ($_smarty_tpl->tpl_vars['group_info']->value['prorateInterval'] == 'day') {?>selected="selected"<?php }?>>Day</option>
							<option value="month" <?php if ($_smarty_tpl->tpl_vars['group_info']->value['prorateInterval'] == 'month') {?>selected="selected"<?php }?>>Month</option>
							<option value="year" <?php if ($_smarty_tpl->tpl_vars['group_info']->value['prorateInterval'] == 'year') {?>selected="selected"<?php }?>>Year</option>
						</select>
						<div class="form-text">
							Payment for membership extension is prorated at a minimum interval.
						</div>
					</div>
				</div>
			<?php }?>
			<div class="form-group row">
				<label class="col-form-label col-md-3">Group</label>
				<div class="col-md-9">
					<input class="form-control" type="text" size="40" name="emailPattern" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group_info']->value['emailPattern'] ));?>
">
					<div class="form-text">
						<p>Users are automatically assigned at registration in the group if their emails match the pattern.</p>
						<p>Example: /@(tw.org$)|(tw\.com$)/</p>
					</div>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_templated_groups'] == 'y') {?>
				<div class="form-group row">
					<label class="col-form-label col-md-3">Role Group</label>
					<div class="col-md-9">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="isRole"<?php if ($_smarty_tpl->tpl_vars['isRole']->value == 'y') {?> checked="checked"<?php }?>>
								This group is used as a role
							</label>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-form-label col-md-3">Templated Groups</label>
					<div class="col-md-9">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="isTplGroup"<?php if ($_smarty_tpl->tpl_vars['isTplGroup']->value == 'y') {?> checked="checked"<?php }?>>
								This group is a container for templated groups
							</label>
						</div>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['group']->value != '' && $_smarty_tpl->tpl_vars['groupname']->value != 'Anonymous') {?>
				<div class="form-group row">
					<label class="col-form-label col-md-3">Assign group<em>management</em>permissions</label>
					<div class="col-md-9">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_script'=>"tiki-objectpermissions.php",'objectType'=>"group",'objectId'=>$_smarty_tpl->tpl_vars['groupname']->value,'objectName'=>$_smarty_tpl->tpl_vars['groupname']->value,'permType'=>"group"));
$_block_repeat=true;
echo smarty_block_self_link(array('_script'=>"tiki-objectpermissions.php",'objectType'=>"group",'objectId'=>$_smarty_tpl->tpl_vars['groupname']->value,'objectName'=>$_smarty_tpl->tpl_vars['groupname']->value,'permType'=>"group"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php echo smarty_function_icon(array('_text'=>"Assign Permissions",'name'=>"key"),$_smarty_tpl);?>

						<?php $_block_repeat=false;
echo smarty_block_self_link(array('_script'=>"tiki-objectpermissions.php",'objectType'=>"group",'objectId'=>$_smarty_tpl->tpl_vars['groupname']->value,'objectName'=>$_smarty_tpl->tpl_vars['groupname']->value,'permType'=>"group"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</div>
				</div>
			<?php }?>

			<div class="submit form-group row">
				<div class="col-md-9 offset-md-3">
					<?php if ($_smarty_tpl->tpl_vars['group']->value != '') {?>
						<input type="hidden" name="olgroup" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value ));?>
">
						<button type="submit" class="btn btn-secondary" form="groupEdit" formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'group','action'=>'modify_group'),$_smarty_tpl);?>
" onclick="confirmAjax(event)">
							Save
						</button>
					<?php } else { ?>
						<button type="submit" class="btn btn-secondary" form="groupEdit" formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'group','action'=>'new_group'),$_smarty_tpl);?>
" onclick="confirmAjax(event)">
							Add
						</button>
					<?php }?>
				</div>
			</div>
			<br><br>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['groupTracker'] == 'y') {?>
				<div class="form-group row">
					<div class="col-md-9 offset-md-3">
						<?php if (!empty($_smarty_tpl->tpl_vars['grouptrackerid']->value) && $_smarty_tpl->tpl_vars['groupitemid']->value) {?>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Group tracker item : <?php echo $_smarty_tpl->tpl_vars['groupitemid']->value;
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
							<?php echo smarty_function_button(array('href'=>"tiki-view_tracker_item.php?trackerId=".((string)$_smarty_tpl->tpl_vars['grouptrackerid']->value)."&amp;itemId=".((string)$_smarty_tpl->tpl_vars['groupitemid']->value)."&amp;show=mod",'_text'=>"Edit Item"),$_smarty_tpl);?>

						<?php } elseif (!empty($_smarty_tpl->tpl_vars['grouptrackerid']->value)) {?>
							<?php if ($_smarty_tpl->tpl_vars['groupfieldid']->value) {?>
								Group tracker item not found
								<?php echo smarty_function_button(array('href'=>"tiki-view_tracker.php?trackerId=".((string)$_smarty_tpl->tpl_vars['grouptrackerid']->value),'_text'=>"Create Item"),$_smarty_tpl);?>

							<?php } else { ?>
								Choose a field ...
							<?php }?>
						<?php }?>
						<br><br>
					</div>
				</div>
			<?php }?>
		</form>
	<?php }
$_block_repeat=false;
echo smarty_block_tab(array('name'=>((string)$_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp']->value)." ".((string)$_smarty_tpl->tpl_vars['gname']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['groupname']->value) {?>
	<?php $_smarty_tpl->_assignInScope('tabgroup_memberstabgroup', "Members");?>
	<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groupname']->value ));
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('gname', $_prefixVariable3);?>

	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>((string)$_smarty_tpl->tpl_vars['tabgroup_memberstabgroup']->value)." ".((string)$_smarty_tpl->tpl_vars['gname']->value)));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>((string)$_smarty_tpl->tpl_vars['tabgroup_memberstabgroup']->value)." ".((string)$_smarty_tpl->tpl_vars['gname']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	
		<div class="form-group row">
			<?php if ($_smarty_tpl->tpl_vars['membersCount']->value > 0) {?>
				<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
					<div class="col-lg-8">
					<h2>Members <span class="badge badge-secondary"><?php echo $_smarty_tpl->tpl_vars['membersCount']->value;?>
</span></h2>
					<form id="checkform2" method="post">
					<input type="hidden" name="group" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value ));?>
"/>
					<div class="ts-wrapperdiv">
				<?php }?>
				<table id="groupsMembers" class="table normal table-striped table-hover" data-count="<?php echo $_smarty_tpl->tpl_vars['membersCount']->value;?>
">
					<thead>
					<tr>
						<th id="checkbox" class="auto"><?php if ($_smarty_tpl->tpl_vars['memberslist']->value) {
echo smarty_function_select_all(array('checkbox_names'=>'checked[]','tablesorter'=>((string)$_smarty_tpl->tpl_vars['ts']->value['enabled'])),$_smarty_tpl);
}?></th>
						<th id="user"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode_member','_sort_field'=>'login'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'login'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>User<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'login'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
						<th id="assigned"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode_member','_sort_field'=>'created'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'created'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Assigned<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'created'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
						<th id="expires"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode_member','_sort_field'=>'expire'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'expire'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Expires<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'expire'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
						<th id="actions"></th>
					</tr>
					</thead>
					<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['memberslist']->value, 'member');
$_smarty_tpl->tpl_vars['member']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->do_else = false;
?>
						<tr>
							<td class="checkbox-cell">
								<div class="form-check"><input type="checkbox" name="checked[]" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['login'];?>
">
								</div>
							</td>
							<td class="username"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['member']->value['login']);?>
</td>
							<td class="date"><?php if (!empty($_smarty_tpl->tpl_vars['member']->value['created'])) {
echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['member']->value['created']);
}?></td>
							<td class="date"><?php if (!empty($_smarty_tpl->tpl_vars['member']->value['expire'])) {
echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['member']->value['expire']);
}?></td>
							<td class="action">
								<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('actions', array());
$_block_repeat=true;
echo smarty_block_actions(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
								<action><a href="tiki-adminusers.php?user=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['member']->value['userId'],"url" ));
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs'] != 'y') {?>#tab2<?php }?>"><?php echo smarty_function_icon(array('name'=>"edit",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit user"),$_smarty_tpl);?>
</a></action><?php if ($_smarty_tpl->tpl_vars['groupname']->value != 'Registered') {?><action><a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'user','action'=>'manage_groups','checked'=>$_smarty_tpl->tpl_vars['member']->value['login'],'groupremove'=>$_smarty_tpl->tpl_vars['groupname']->value,'anchor'=>'#contenttabs_admingroups-3'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"remove",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove from group"),$_smarty_tpl);?>
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
					</tbody>
				</table>
				<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
					</div>

					<?php if ($_smarty_tpl->tpl_vars['groupname']->value != 'Registered') {?>
						<div class="input-group">
							<select class="form-control" name="action">
								<option value="no_action" selected="selected">
									Select action to perform with checked...
								</option>
								<option value="manage_groups">Unassign</option>
							</select> <span class="input-group-append">
										<input type="submit" class="btn btn-primary" form="checkform2" formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'user','groupremove'=>((string)$_smarty_tpl->tpl_vars['groupname']->value),'anchor'=>'#contenttabs_admingroups-3'),$_smarty_tpl);?>
" value="OK" onclick="confirmAjax(event)">
									</span>
						</div>
					<?php }?>
					</form>
					</div>
					<?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['membersCount']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['membersOffset']->value,'offset_arg'=>'membersOffset'));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['membersCount']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['membersOffset']->value,'offset_arg'=>'membersOffset'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['membersCount']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['membersOffset']->value,'offset_arg'=>'membersOffset'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php }?>
				<?php }?>
			<?php } else { ?>
				<div class="col-lg-8">
					<h2>Members <span class="badge badge-secondary"><?php echo $_smarty_tpl->tpl_vars['membersCount']->value;?>
</span></h2>
					<em>No members</em>
				</div>
			<?php }?>
			<div class="col-lg-4">
				<form id="addorban" method="post" action="tiki-admingroups.php">
					<h2>Add or ban users</h2>
					<div>
						<select name="user[]" multiple="multiple" size="10" class="custom-select">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userslist']->value, 'iuser');
$_smarty_tpl->tpl_vars['iuser']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['iuser']->value) {
$_smarty_tpl->tpl_vars['iuser']->do_else = false;
?>
								<option><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iuser']->value ));?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
					<div class="mt-1">
						<button type="submit" class="btn btn-link tips" form="addorban" formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'group','action'=>'add_user'),$_smarty_tpl);?>
" title=":Add to group" onclick="confirmAjax(event)">
							<?php echo smarty_function_icon(array('name'=>'add'),$_smarty_tpl);?>

						</button>
						<button type="submit" class="btn btn-link tips" form="addorban" formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'group','action'=>'ban_user'),$_smarty_tpl);?>
" title=":Ban from group" onclick="confirmAjax(event)">
							<?php echo smarty_function_icon(array('name'=>'ban','iclass'=>"text-danger"),$_smarty_tpl);?>

						</button>
					</div>
					<input type="hidden" name="group" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groupname']->value ));?>
">
				</form>
			</div>
		</div>
	<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>((string)$_smarty_tpl->tpl_vars['tabgroup_memberstabgroup']->value)." ".((string)$_smarty_tpl->tpl_vars['gname']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_smarty_tpl->_assignInScope('tabgroup_bannedtabgroup', "Users banned from");?>
	<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groupname']->value ));
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_assignInScope('gname', $_prefixVariable4);?>

	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>((string)$_smarty_tpl->tpl_vars['tabgroup_bannedtabgroup']->value)." ".((string)$_smarty_tpl->tpl_vars['gname']->value)));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>((string)$_smarty_tpl->tpl_vars['tabgroup_bannedtabgroup']->value)." ".((string)$_smarty_tpl->tpl_vars['gname']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	
		<h2>Banned members <span class="badge badge-secondary"><?php echo $_smarty_tpl->tpl_vars['bannedCount']->value;?>
</span></h2>
		<?php if (count($_smarty_tpl->tpl_vars['bannedlist']->value) > 0) {?>
			<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value) {?>table-responsive <?php }?>ts-wrapperdiv"> 
				<form id="checkform3" method="post">
					<table id="bannedMembers" class="table normal table-striped table-hover" data-count="<?php echo $_smarty_tpl->tpl_vars['bannedCount']->value;?>
">
						<thead>
						<tr>
							<th id="checkbox" class="auto"><?php echo smarty_function_select_all(array('checkbox_names'=>'user[]','tablesorter'=>((string)$_smarty_tpl->tpl_vars['ts']->value['enabled'])),$_smarty_tpl);?>
</th>
							<th id="user">User</th>
							<th id="unban">Unban user</th>
						</tr>
						</thead>
						<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bannedlist']->value, 'member');
$_smarty_tpl->tpl_vars['member']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->do_else = false;
?>
							<tr>
								<td class="checkbox-cell">
									<div class="form-check"><input type="checkbox" name="user[]" value="<?php echo $_smarty_tpl->tpl_vars['member']->value;?>
"></div>
								</td>
								<td class="username"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['member']->value);?>
</td>
								<td class="action">
									<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'group','action'=>'unban_user','user'=>$_smarty_tpl->tpl_vars['member']->value,'group'=>$_smarty_tpl->tpl_vars['groupname']->value),$_smarty_tpl);?>
" class="tips" title=":<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['member']->value,'_1'=>$_smarty_tpl->tpl_vars['group']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['member']->value,'_1'=>$_smarty_tpl->tpl_vars['group']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Unban user %0 from group %1<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['member']->value,'_1'=>$_smarty_tpl->tpl_vars['group']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>">
										<?php echo smarty_function_icon(array('name'=>"ok"),$_smarty_tpl);?>

									</a>
								</td>
							</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</tbody>
					</table>
					<input type="hidden" name="group" value="<?php echo $_smarty_tpl->tpl_vars['groupname']->value;?>
">
			</div>
			<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
				<div class="input-group col-sm-8">
					<select class="form-control" name="action">
						<option value="no_action" selected="selected">
							Select action to perform with checked...
						</option>
						<option value="unban_user">Unban</option>
					</select> <span class="input-group-append">
							<input type="submit" class="btn btn-primary" form="checkform3" formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'group'),$_smarty_tpl);?>
" value="OK" onclick="confirmAjax(event)">
						</span>
				</div>
				</form>
				<br>
			<?php }?>
		<?php } else { ?>
			<div class="col-sm-12">
				<em>No banned members</em>
			</div>
			<br>
		<?php }?>
	<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>((string)$_smarty_tpl->tpl_vars['tabgroup_bannedtabgroup']->value)." ".((string)$_smarty_tpl->tpl_vars['gname']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if ($_smarty_tpl->tpl_vars['groupname']->value) {?>
	<?php $_smarty_tpl->_assignInScope('tabgroup_importexporttabgroup', "Import/export");?>
	<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groupname']->value ));
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_assignInScope('gname', $_prefixVariable5);?>

	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>((string)$_smarty_tpl->tpl_vars['tabgroup_importexporttabgroup']->value)." ".((string)$_smarty_tpl->tpl_vars['gname']->value)));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>((string)$_smarty_tpl->tpl_vars['tabgroup_importexporttabgroup']->value)." ".((string)$_smarty_tpl->tpl_vars['gname']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	

		<?php if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
			<form method="post" action="tiki-admingroups.php" enctype="multipart/form-data" class="form-horizontal">
				<input type="hidden" name="group" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groupname']->value ));?>
">

				<h2>Export group users (CSV file)</h2>				<br>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Charset encoding</label>
					<div class="col-sm-7">
						<select name="encoding" class="form-control">
							<option value="UTF-8" selected="selected">UTF-8</option>
							<option value="ISO-8859-1">ISO-8859-1</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">Fields</label>
					<div class="col-sm-7">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="username" checked="checked"> Username
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="email"> Email
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="lastLogin"> Last login
							</label>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label"></label>
					<div class="col-sm-7">
						<input type="submit" class="btn btn-primary" name="export" value="Export">
					</div>
				</div>
				<br>
				<h2>Import users to group (CSV file)</h2>				<br>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label">
						CSV File
						<a title="Help" <?php echo smarty_function_popup(array('text'=>'user<br>user1<br>user2'),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a> </label>
					<div class="col-sm-7">
						<input name="csvlist" type="file" class="form-control">
						<div class="form-text">
							Imported users must already exist. To create users and assign them to groups, go to
								<a href="tiki-adminusers.php">admin->users</a>
								.
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-3 col-form-label"></label>
					<div class="col-sm-7">
						<input type="submit" class="btn btn-primary" name="import" value="Import">
					</div>
				</div>
			</form>
		<?php }?>
	<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>((string)$_smarty_tpl->tpl_vars['tabgroup_importexporttabgroup']->value)." ".((string)$_smarty_tpl->tpl_vars['gname']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php $_block_repeat=false;
echo smarty_block_tabset(array('name'=>'tabs_admingroups'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
