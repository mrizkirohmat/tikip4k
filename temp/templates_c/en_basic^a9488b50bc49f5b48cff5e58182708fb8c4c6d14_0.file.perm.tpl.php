<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:14:51
  from 'C:\xampp\htdocs\tikip4k\templates\feedback\perm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126505bc25639_38126667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9488b50bc49f5b48cff5e58182708fb8c4c6d14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\feedback\\perm.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126505bc25639_38126667 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fb']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
	<?php if ($_smarty_tpl->tpl_vars['info']->value['count'] > 0) {?>
		<?php if ($_smarty_tpl->tpl_vars['info']->value['count'] == 1) {?>
			<?php $_smarty_tpl->_assignInScope('poptitle', "Permission successfully changed");?>
			<?php if ($_smarty_tpl->tpl_vars['info']->value['type'] === 'global') {?>
				<?php $_smarty_tpl->_assignInScope('header', "Global permission");?>
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['info']->value['objid'] !== $_smarty_tpl->tpl_vars['info']->value['objname']) {?>
					<?php ob_start();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>",'_2'=>$_smarty_tpl->tpl_vars['info']->value['objid']));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>",'_2'=>$_smarty_tpl->tpl_vars['info']->value['objid']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo "Object permission for the %0 %1 (ID %2)";
$_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>",'_2'=>$_smarty_tpl->tpl_vars['info']->value['objid']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('header', $_prefixVariable1);?>
				<?php } else { ?>
					<?php ob_start();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>"));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo "Object permission for the %0 %1";
$_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('header', $_prefixVariable2);?>
				<?php }?>
			<?php }?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('poptitle', "Permissions successfully changed");?>
			<?php if ($_smarty_tpl->tpl_vars['info']->value['type'] === 'global') {?>
				<?php $_smarty_tpl->_assignInScope('header', "Global permissions");?>
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['info']->value['objid'] !== $_smarty_tpl->tpl_vars['info']->value['objname']) {?>
					<?php ob_start();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>",'_2'=>$_smarty_tpl->tpl_vars['info']->value['objid']));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>",'_2'=>$_smarty_tpl->tpl_vars['info']->value['objid']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo "Object permissions for the %0 %1 (ID %2)";
$_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>",'_2'=>$_smarty_tpl->tpl_vars['info']->value['objid']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('header', $_prefixVariable3);?>
				<?php } else { ?>
					<?php ob_start();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>"));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo "Object permissions for the %0 %1";
$_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['objtype'],'_1'=>"<em>".((string)$_smarty_tpl->tpl_vars['info']->value['objname'])."</em>"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_assignInScope('header', $_prefixVariable4);?>
				<?php }?>
			<?php }?>
		<?php }?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'feedback','title'=>((string)$_smarty_tpl->tpl_vars['poptitle']->value)));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'feedback','title'=>((string)$_smarty_tpl->tpl_vars['poptitle']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<h5><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
:</h5>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value['mes'], 'directionPermissionsChanged', false, 'direction');
$_smarty_tpl->tpl_vars['directionPermissionsChanged']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['direction']->value => $_smarty_tpl->tpl_vars['directionPermissionsChanged']->value) {
$_smarty_tpl->tpl_vars['directionPermissionsChanged']->do_else = false;
?>
				<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['direction']->value);?>

				<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['directionPermissionsChanged']->value, 'groupPermissionsChanged', false, 'group');
$_smarty_tpl->tpl_vars['groupPermissionsChanged']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value => $_smarty_tpl->tpl_vars['groupPermissionsChanged']->value) {
$_smarty_tpl->tpl_vars['groupPermissionsChanged']->do_else = false;
?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groupPermissionsChanged']->value, 'groupPermissionChanged');
$_smarty_tpl->tpl_vars['groupPermissionChanged']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['groupPermissionChanged']->value) {
$_smarty_tpl->tpl_vars['groupPermissionChanged']->do_else = false;
?>
							<li>
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value ));?>
: <?php echo $_smarty_tpl->tpl_vars['groupPermissionChanged']->value;?>

							</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'feedback','title'=>((string)$_smarty_tpl->tpl_vars['poptitle']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php } else { ?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'note','title'=>"No permissions were changed"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'note','title'=>"No permissions were changed"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'note','title'=>"No permissions were changed"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
