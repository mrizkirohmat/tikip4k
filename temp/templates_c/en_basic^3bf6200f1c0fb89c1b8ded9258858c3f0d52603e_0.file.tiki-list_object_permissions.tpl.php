<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:40:11
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-list_object_permissions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126564b6a6a39_09558109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bf6200f1c0fb89c1b8ded9258858c3f0d52603e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-list_object_permissions.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126564b6a6a39_09558109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.select_all.php','function'=>'smarty_function_select_all',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.object_link.php','function'=>'smarty_function_object_link',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.permission_link.php','function'=>'smarty_function_permission_link',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array());
$_block_repeat=true;
echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Object Permissions List<?php $_block_repeat=false;
echo smarty_block_title(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="t_navbar">
	<?php echo smarty_function_button(array('href'=>"tiki-objectpermissions.php",'class'=>"btn btn-link",'_type'=>"link",'_icon_name'=>"permission",'_text'=>"Manage permissions"),$_smarty_tpl);?>

</div>

<br>
<?php if (count($_smarty_tpl->tpl_vars['all_groups']->value) >= 5) {?>
	<?php $_smarty_tpl->_assignInScope('size', 6);
} else { ?>
	<?php $_smarty_tpl->_assignInScope('size', count($_smarty_tpl->tpl_vars['all_groups']->value)+1);
}?>
<form method="post">
	<div class="clearfix">
		<legend>Group Filter</legend>
		<fieldset>
			<div class="form-group row">
				<div class="col-lg-6">
					<select class='form-control' multiple="multiple" id="filterGroup" name="filterGroup[]" size="<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
">
						<option value=""<?php if (empty($_smarty_tpl->tpl_vars['filterGroup']->value)) {?>selected="selected"<?php }?>></option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_groups']->value, 'gr');
$_smarty_tpl->tpl_vars['gr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gr']->value) {
$_smarty_tpl->tpl_vars['gr']->do_else = false;
?>
							<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gr']->value ));?>
" <?php if (in_array($_smarty_tpl->tpl_vars['gr']->value,$_smarty_tpl->tpl_vars['filterGroup']->value)) {?>selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gr']->value ));?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
				<div class="col-lg-6">
					<input type="submit" class="btn btn-primary" name="filter" value="Filter">
				</div>
			</div>
		</fieldset>
	</div>
</form>
<br>
<legend>Object Permissions</legend>
<ul class="nav nav-tabs" id="allperms">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'content', false, 'type');
$_smarty_tpl->tpl_vars['content']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->do_else = false;
?>
		<li class="nav-item">
			<a href="#<?php echo preg_replace('!\s+!u', '_',$_smarty_tpl->tpl_vars['type']->value);?>
" data-toggle="tab" class="nav-link"><?php echo ucwords($_smarty_tpl->tpl_vars['type']->value);?>
</a>
		</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<div class="tab-content">
	<br>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'content', false, 'type');
$_smarty_tpl->tpl_vars['content']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->do_else = false;
?>
		<div id="<?php echo preg_replace('!\s+!u', '_',$_smarty_tpl->tpl_vars['type']->value);?>
" class="tab-pane">
			<ul class="nav nav-tabs" id="allperms">
				<li class="nav-item"><a href="#<?php echo preg_replace('!\s+!u', '_',$_smarty_tpl->tpl_vars['type']->value);?>
-global" data-toggle="tab" class="nav-link active">Global permissions (<?php echo count($_smarty_tpl->tpl_vars['content']->value['default']);?>
)</a></li>
				<li class="nav-item"><a href="#<?php echo preg_replace('!\s+!u', '_',$_smarty_tpl->tpl_vars['type']->value);?>
-object" data-toggle="tab" class="nav-link">Object permissions (<?php echo count($_smarty_tpl->tpl_vars['content']->value['objects']);?>
)</a></li>
				<li class="nav-item"><a href="#<?php echo preg_replace('!\s+!u', '_',$_smarty_tpl->tpl_vars['type']->value);?>
-category" data-toggle="tab" class="nav-link">Category permissions (<?php echo count($_smarty_tpl->tpl_vars['content']->value['category']);?>
)</a></li>
			</ul>
			
			<div class="tab-content">
					<div id="<?php echo preg_replace('!\s+!u', '_',$_smarty_tpl->tpl_vars['type']->value);?>
-global" class="tab-pane active">
						<?php if (count($_smarty_tpl->tpl_vars['content']->value['default'])) {?>
							<form id="<?php echo preg_replace('!\s+!u', '_',$_smarty_tpl->tpl_vars['type']->value);?>
-global" method="post">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filterGroup']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
									<input type="hidden" name="filterGroup[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['f']->value ));?>
">
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<div class="table-responsive">
									<table class="table table-striped table-hover">
										<tr>
											<th class="checkbox-cell"><?php echo smarty_function_select_all(array('checkbox_names'=>'groupPerm[]'),$_smarty_tpl);?>
</th>
											<th>Group</th>
											<th>Permission</th>
										</tr>

										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value['default'], 'default');
$_smarty_tpl->tpl_vars['default']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['default']->value) {
$_smarty_tpl->tpl_vars['default']->do_else = false;
?>
											<tr>
												<td class="checkbox-cell"><input type="checkbox" name="groupPerm[]" value='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( json_encode($_smarty_tpl->tpl_vars['default']->value) ));?>
'></td>
												<td class="text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default']->value['group'] ));?>
</td>
												<td class="text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default']->value['perm'] ));?>
</td>
											</tr>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</table>
								</div>
								<legend>Perform action with selected permissions:</legend>
								<div class="form-group row">
									<label for="delete" class="col-lg-4 col-form-label">
										Delete
									</label>
									<div class="col-lg-2">
										<button class="btn btn-danger" name="delete" value="delete">
											OK
										</button>
									</div>
									<div class="col-lg-6"></div><br>
								</div>
								<div class="form-group row">
									<label for="duplicate" class="col-lg-4 col-form-label">
										Assign to this group
									</label>
									<div class="col-lg-4">
										<div class="input-group">
											<input type="text" name="toGroup" class="form-control">
										<span class="input-group-append">
											<button class="btn btn-primary" name="duplicate" value="duplicate">
												OK
											</button>
										</span>
										</div>
									</div>
								</div>
							</form>
						<?php } else { ?><br>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('title'=>"Only default global permissions are being used."));
$_block_repeat=true;
echo smarty_block_remarksbox(array('title'=>"Only default global permissions are being used."), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_remarksbox(array('title'=>"Only default global permissions are being used."), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php }?>
					</div><br>
				
				<div id="<?php echo preg_replace('!\s+!u', '_',$_smarty_tpl->tpl_vars['type']->value);?>
-object" class="tab-pane">
					<?php if (count($_smarty_tpl->tpl_vars['content']->value['objects'])) {?>
						<form method="post">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filterGroup']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?><input type="hidden" name="filterGroup[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['f']->value ));?>
"><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<div class="table-responsive">
								<table class="table table-striped table-hover">
									<tr>
										<th class="checkbox-cell"><?php echo smarty_function_select_all(array('checkbox_names'=>'objectPerm[]'),$_smarty_tpl);?>
</th>
										<th>Object</th>
										<th>Group</th>
										<th>Permission</th>
										<th>Reason</th>
									</tr>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value['objects'], 'object');
$_smarty_tpl->tpl_vars['object']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->do_else = false;
?>
										<?php if (!empty($_smarty_tpl->tpl_vars['object']->value['special'])) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['object']->value['special'], 'special');
$_smarty_tpl->tpl_vars['special']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['special']->value) {
$_smarty_tpl->tpl_vars['special']->do_else = false;
?>
												<tr>
													<td class="checkbox-cell"><input type="checkbox" name="objectPerm[]" value='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( json_encode($_smarty_tpl->tpl_vars['special']->value) ));?>
'></td>
													<td class="text"><?php echo smarty_function_object_link(array('type'=>$_smarty_tpl->tpl_vars['special']->value['objectType'],'id'=>$_smarty_tpl->tpl_vars['special']->value['objectId'],'title'=>$_smarty_tpl->tpl_vars['special']->value['objectName']),$_smarty_tpl);?>
</td>
													<td class="text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['special']->value['group'] ));?>
</td>
													<td class="text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['special']->value['perm'] ));?>
</td>
													<td class="text">
														<?php if (!empty($_smarty_tpl->tpl_vars['special']->value['objectId'])) {?>
															
															<?php echo smarty_function_permission_link(array('mode'=>'link','type'=>$_smarty_tpl->tpl_vars['special']->value['objectType'],'id'=>$_smarty_tpl->tpl_vars['special']->value['objectId'],'title'=>$_smarty_tpl->tpl_vars['special']->value['objectName'],'label'=>$_smarty_tpl->tpl_vars['special']->value['reason']),$_smarty_tpl);?>

														<?php } else { ?>
															<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['special']->value['reason'] ));?>

														<?php }?>
														<?php if (!empty($_smarty_tpl->tpl_vars['special']->value['detail'])) {?>(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['special']->value['detail'] ));?>
)<?php }?>
													</td>
												</tr>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</table>
							</div>
							<legend>Perform action with selected permissions:</legend>
							<div class="form-group row">
								<label for="delete" class="col-lg-4 col-form-label">
									Delete
								</label>
								<div class="col-lg-2">
									<button class="btn btn-danger" name="delete" value="delete">
										OK
									</button>
								</div>
								<div class="col-lg-6"></div><br>
							</div>
							<div class="form-group row">
								<label for="duplicate" class="col-lg-4 col-form-label">
									Assign to this group
								</label>
								<div class="col-lg-4">
									<div class="input-group">
										<input type="text" name="toGroup" class="form-control">
										<span class="input-group-append">
											<button class="btn btn-primary" name="duplicate" value="duplicate">
												OK
											</button>
										</span>
									</div>
								</div>
							</div>
						</form>
					<?php } else { ?><br>
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('title'=>"No object permissions apply."));
$_block_repeat=true;
echo smarty_block_remarksbox(array('title'=>"No object permissions apply."), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_remarksbox(array('title'=>"No object permissions apply."), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php }?>
				</div>
				
				<div id="<?php echo preg_replace('!\s+!u', '_',$_smarty_tpl->tpl_vars['type']->value);?>
-category" class="tab-pane">
					<?php if (count($_smarty_tpl->tpl_vars['content']->value['category'])) {?>
						<form method="post">
							<div class="table-responsive">
								<table class="table table-striped table-hover">
									<tr>
										<th>Object</th>
										<th>Group</th>
										<th>Permission</th>
										<th>Reason</th>
									</tr>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content']->value['category'], 'object');
$_smarty_tpl->tpl_vars['object']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->do_else = false;
?>
										<?php if (!empty($_smarty_tpl->tpl_vars['object']->value['category'])) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['object']->value['category'], 'special');
$_smarty_tpl->tpl_vars['special']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['special']->value) {
$_smarty_tpl->tpl_vars['special']->do_else = false;
?>
												<tr>
													<td class="text"><?php echo smarty_function_object_link(array('type'=>$_smarty_tpl->tpl_vars['object']->value['objectType'],'objectId'=>$_smarty_tpl->tpl_vars['object']->value['objectId']),$_smarty_tpl);?>
</td>
													<td class="text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['special']->value['group'] ));?>
</td>
													<td class="text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['special']->value['perm'] ));?>
</td>
													<td class="text">
														<?php if (!empty($_smarty_tpl->tpl_vars['special']->value['objectId'])) {?>
															
															<?php echo smarty_function_permission_link(array('mode'=>'icon','type'=>$_smarty_tpl->tpl_vars['special']->value['objectType'],'id'=>$_smarty_tpl->tpl_vars['special']->value['objectId'],'title'=>$_smarty_tpl->tpl_vars['special']->value['objectName']),$_smarty_tpl);?>

															<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['special']->value['reason'] ));?>
:<?php $_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['special']->value['objectName'] ));?>

														<?php } else { ?>
															<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['special']->value['reason'] ));?>
: <?php echo $_smarty_tpl->tpl_vars['special']->value['objectName'];?>

														<?php }?>
														<?php if (!empty($_smarty_tpl->tpl_vars['special']->value['detail'])) {?>(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['special']->value['detail'] ));?>
)<?php }?>
													</td>
												</tr>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</table>
							</div>
						</form>
					<?php } else { ?><br>
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('title'=>"No category permissions apply."));
$_block_repeat=true;
echo smarty_block_remarksbox(array('title'=>"No category permissions apply."), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_remarksbox(array('title'=>"No category permissions apply."), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php }?>
				</div>
			</div>
		</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
