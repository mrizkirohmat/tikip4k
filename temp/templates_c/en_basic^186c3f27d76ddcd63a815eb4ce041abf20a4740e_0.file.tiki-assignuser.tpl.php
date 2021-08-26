<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:15:59
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-assignuser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126509f2a82e6_25238042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '186c3f27d76ddcd63a815eb4ce041abf20a4740e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-assignuser.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:find.tpl' => 1,
  ),
),false)) {
function content_6126509f2a82e6_25238042 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.bootstrap_modal.php','function'=>'smarty_function_bootstrap_modal',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_datetime.php','function'=>'smarty_modifier_tiki_short_datetime',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.actions.php','function'=>'smarty_block_actions',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.pagination_links.php','function'=>'smarty_block_pagination_links',),));
?>


<?php $_smarty_tpl->_assignInScope('escuser', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['assign_user']->value,'url' )));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array());
$_block_repeat=true;
echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['assign_user']->value));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['assign_user']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Assign User %0 to Groups<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['assign_user']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo smarty_block_title(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="t_navbar btn-group form-group row">
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?> 
		<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php",'class'=>"btn btn-primary",'_text'=>"Admin groups"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_admin_users']->value == 'y') {?>
		<?php echo smarty_function_button(array('href'=>"tiki-adminusers.php",'class'=>"btn btn-primary",'_text'=>"Admin users"),$_smarty_tpl);?>

	<?php }?>

	<?php echo smarty_function_button(array('href'=>"tiki-user_preferences.php?view_user=".((string)$_smarty_tpl->tpl_vars['assign_user']->value),'class'=>"btn btn-primary",'_text'=>"User Preferences"),$_smarty_tpl);?>

	<?php echo smarty_function_button(array('href'=>"tiki-user_information.php?view_user=".((string)$_smarty_tpl->tpl_vars['assign_user']->value),'class'=>"btn btn-primary",'_text'=>"User Information"),$_smarty_tpl);?>


</div>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_import_groups'] == 'y') {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		Since this Tiki site is in slave mode and imports groups, the master groups will be automatically reimported at each login
	<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<h2>User Information</h2>
	<form class="form-horizontal">
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Login</label>
			<div class="col-sm-7">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_info']->value['login'] ));?>

			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Email</label>
			<div class="col-sm-7">
				<?php echo $_smarty_tpl->tpl_vars['user_info']->value['email'];?>

			</div>
		</div>
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Groups</label>
			<div class="col-sm-7">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_info']->value['groups'], 'what', false, 'grp', 'groups', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['what']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['grp']->value => $_smarty_tpl->tpl_vars['what']->value) {
$_smarty_tpl->tpl_vars['what']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_groups']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_groups']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_groups']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_groups']->value['total'];
?>
					<?php if ($_smarty_tpl->tpl_vars['what']->value == 'included') {?><i><?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['grp']->value ));
if ($_smarty_tpl->tpl_vars['what']->value == 'included') {?></i><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['grp']->value != "Anonymous" && $_smarty_tpl->tpl_vars['grp']->value != "Registered" && $_smarty_tpl->tpl_vars['what']->value != 'included') {?>
						<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'user','action'=>'manage_groups','checked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_info']->value['login'] )),'groupremove'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['grp']->value ))),$_smarty_tpl);?>
">
							<?php echo smarty_function_icon(array('name'=>'remove','style'=>"vertical-align:middle"),$_smarty_tpl);?>

						</a>
					<?php }
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_groups']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_groups']->value['last'] : null)) {?>,<?php }?>&nbsp;&nbsp;
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
	</form>
	<form method="post" action="tiki-assignuser.php<?php if ($_smarty_tpl->tpl_vars['assign_user']->value) {?>?assign_user=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['assign_user']->value,'url' ));
}?>" class="form-horizontal">
		<div class="form-group row">
			<label class="col-sm-3 col-form-label">Default Group</label>
			<div class="col-sm-6">
				<select name="defaultgroup" class="form-control">
					<option value=""></option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_info']->value['groups'], 'included', false, 'name');
$_smarty_tpl->tpl_vars['included']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['included']->value) {
$_smarty_tpl->tpl_vars['included']->do_else = false;
?>
						<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
" <?php if ($_smarty_tpl->tpl_vars['name']->value == $_smarty_tpl->tpl_vars['user_info']->value['default_group']) {?>selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
				<input type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_info']->value['login'] ));?>
" name="login">
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['maxRecords'];?>
" name="maxRecords">
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
" name="offset">
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
" name="sort_mode">
			</div>
			<div class="col-sm-1">
				<input type="submit" class="btn btn-primary" value="Set" name="set_default">
			</div>
		</div>
	</form>
<br>
<div align="left"><h2><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['assign_user']->value ))));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['assign_user']->value ))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Assign User %0 to Groups<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['assign_user']->value ))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></h2></div>

<?php $_smarty_tpl->_subTemplateRender('file:find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('find_show_num_rows'=>'y'), 0, false);
?>

<form method="post" action="tiki-assignuser.php<?php if ($_smarty_tpl->tpl_vars['assign_user']->value) {?>?assign_user=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['assign_user']->value,'url' ));
}?>">
	<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value) {?>table-responsive<?php }?>"> 
		<table class="table table-striped table-hover">
			<tr>
				<th><a href="tiki-assignuser.php?<?php if ($_smarty_tpl->tpl_vars['assign_user']->value) {?>assign_user=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['assign_user']->value,'url' ));?>
&amp;<?php }?>offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;maxRecords=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['maxRecords'];?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'groupName_desc') {?>groupName_asc<?php } else { ?>groupName_desc<?php }?>">Name</a></th>
				<th><a href="tiki-assignuser.php?<?php if ($_smarty_tpl->tpl_vars['assign_user']->value) {?>assign_user=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['assign_user']->value,'url' ));?>
&amp;<?php }?>offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;maxRecords=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['maxRecords'];?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'groupDesc_desc') {?>groupDesc_asc<?php } else { ?>groupDesc_desc<?php }?>">Description</a></th>
				<th>Expiration</th>
				<th></th>
			</tr>

			<?php
$__section_user_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_user_0_total = $__section_user_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_user'] = new Smarty_Variable(array());
if ($__section_user_0_total !== 0) {
for ($__section_user_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] = 0; $__section_user_0_iteration <= $__section_user_0_total; $__section_user_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']++){
?>
				<?php if ($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName'] != 'Anonymous') {?>
					<tr>
						<td class="text">
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?> 
								<a class="link" href="tiki-admingroups.php?group=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName'],"url" ));
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs'] != 'y') {?>#2<?php }?>" title="Edit">
							<?php }?>
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName'] ));?>

							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>
								</a>
							<?php }?>
						</td>
						<td class="text"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupDesc'] ));
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
						<td><?php if ((isset($_smarty_tpl->tpl_vars['dates']->value[$_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName']])) && !empty($_smarty_tpl->tpl_vars['dates']->value[$_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName']]['expire'])) {?>
							<input type="text" name="new_<?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['id'];?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['dates']->value[$_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName']]['expire'],'','n') ));?>
" />
							<input type="hidden" name="old_<?php echo $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['id'];?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['dates']->value[$_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName']]['expire'],'','n') ));?>
" />

						<?php }?></td>
						<td class="action">
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('actions', array());
$_block_repeat=true;
echo smarty_block_actions(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
								<?php if ($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['what'] != 'real') {?><action><a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'group','action'=>'add_user','group'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName'] )),'user'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['assign_user']->value ))),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'add','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Assign"),$_smarty_tpl);?>
</a></action><?php } elseif ($_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName'] != "Registered") {?><action><a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'user','action'=>'manage_groups','checked'=>$_smarty_tpl->tpl_vars['user_info']->value['login'],'groupremove'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['users']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['groupName'] ))),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Unassign"),$_smarty_tpl);?>
</a></action><?php }?>
							<?php $_block_repeat=false;
echo smarty_block_actions(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						</td>
					</tr>
				<?php }?>
			<?php
}
}
?>
		</table>
	</div>
	<input type="submit" class="btn btn-primary" name="save" value="Save" />
</form>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
