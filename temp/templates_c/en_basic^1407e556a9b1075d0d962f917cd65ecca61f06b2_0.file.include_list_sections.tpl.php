<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:34:34
  from 'C:\xampp\htdocs\tikip4k\templates\admin\include_list_sections.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612646ea7567e3_02800006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1407e556a9b1075d0d962f917cd65ecca61f06b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\admin\\include_list_sections.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612646ea7567e3_02800006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),));
?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	Enable/disable Tiki features in <a class="alert-link" href="tiki-admin.php?page=features">Control Panels&nbsp;<?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_crumb_seper'];?>
&nbsp;Features</a>, but configure them elsewhere.
	<br/>
	See <strong>more options</strong> after you enable more <a class='alert-link' target='tikihelp' href='https://doc.tiki.org/Preference+Filters'>Preference Filters</a> above (<?php echo smarty_function_icon(array('name'=>"filter"),$_smarty_tpl);?>
).
<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['show_system_configuration_warning']->value) {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Warning"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	Tiki detected system configuration files with <strong>.ini</strong> extension, under the root folder of Tiki. It is recommended to change it to <strong>.ini.php</strong>.<br/>Check <strong><a href="https://doc.tiki.org/System-Configuration">https://doc.tiki.org/System-Configuration</a></strong> for examples.
	<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<div class="d-flex align-content-start flex-wrap">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_icons']->value, 'info', false, 'page');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
			<?php if ($_smarty_tpl->tpl_vars['info']->value['disabled']) {?>
				<?php $_smarty_tpl->_assignInScope('class', "admbox advanced btn btn-primary disabled");?>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('class', "admbox basic btn btn-primary");?>
			<?php }?>
				
				<a href="<?php if ($_smarty_tpl->tpl_vars['info']->value['url']) {
echo $_smarty_tpl->tpl_vars['info']->value['url'];
} else { ?>tiki-admin.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;
}?>" data-alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 tips bottom slow <?php if ($_smarty_tpl->tpl_vars['info']->value['disabled']) {?>disabled-clickable<?php }?>" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['title'] ));
if ($_smarty_tpl->tpl_vars['info']->value['disabled']) {?> (Disabled)<?php }?>|<?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
">
					<?php echo smarty_function_icon(array('name'=>"admin_".((string)$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl);?>

					<span class="title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['title'] ));?>
</span>
				</a>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
