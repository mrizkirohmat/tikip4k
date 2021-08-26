<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:51:25
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-plugin_help.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612666fd8abb96_07995834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ea9c1ecd713382a34f95dd3e3242ae7753562a0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-plugin_help.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612666fd8abb96_07995834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),));
?>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y' && $_smarty_tpl->tpl_vars['area_id']->value) {?>
	<a href="javascript:void(0);" onclick="needToConfirm=false;$.closeModal();$(document).one('hidden.bs.modal', function () {popupPluginForm('<?php echo $_smarty_tpl->tpl_vars['area_id']->value;?>
','<?php echo addslashes(mb_strtolower($_smarty_tpl->tpl_vars['plugin_name']->value, 'UTF-8'));?>
');}); return false;"><?php echo smarty_function_icon(array('name'=>(($tmp = @$_smarty_tpl->tpl_vars['plugin']->value['iconname'])===null||$tmp==='' ? "plugin" : $tmp),'_text'=>"Insert"),$_smarty_tpl);?>
</a>
<?php }?>
<strong><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value['name'] ));?>
</strong>
<em><?php echo mb_strtolower($_smarty_tpl->tpl_vars['plugin_name']->value, 'UTF-8');?>
</em>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_help'] == 'y') {?>
	<?php if (!empty($_smarty_tpl->tpl_vars['plugin']->value['documentation'])) {?>
		<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['plugin']->value['documentation'] ));?>
" onclick="needToConfirm=false;" target="tikihelp" class="tikihelp text-info">
			<?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>

		</a>
	<?php }
}?>


<div class="plugin-desc" style="margin-left:30px">
	<?php echo $_smarty_tpl->tpl_vars['plugin']->value['description'];?>

</div>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y') {
} else { ?>
<div class="plugin-sample">
	<?php if ($_smarty_tpl->tpl_vars['plugin']->value['body']) {?>
		&#123;<?php echo $_smarty_tpl->tpl_vars['plugin_name']->value;?>
(
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugin']->value['params'], 'param', false, 'name');
$_smarty_tpl->tpl_vars['param']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->do_else = false;
?>
			<div class="plugin-param">
				<?php if ($_smarty_tpl->tpl_vars['param']->value['required']) {?>
					<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<em>"<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['param']->value['description'] ));?>
"</em>
				<?php } else { ?>
					[ <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<em>"<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['param']->value['description'] ));?>
"</em> ]
				<?php }?>
			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		)&#125;
		<div class="plugin-param">
			<?php echo $_smarty_tpl->tpl_vars['plugin']->value['body'];?>

		</div>
		&#123;<?php echo $_smarty_tpl->tpl_vars['plugin_name']->value;?>
&#125;
	<?php } else { ?>
		&#123;<?php echo mb_strtolower($_smarty_tpl->tpl_vars['plugin_name']->value, 'UTF-8');?>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugin']->value['params'], 'param', false, 'name');
$_smarty_tpl->tpl_vars['param']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->do_else = false;
?>
			<div class="plugin-param">
				<?php if ($_smarty_tpl->tpl_vars['param']->value['required']) {?>
					<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<em>"<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['param']->value['description'] ));?>
"</em>
				<?php } else { ?>
					[ <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
=<em>"<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['param']->value['description'] ));?>
"</em> ]
				<?php }?>
			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		&#125;
	<?php }?>
</div>
<?php }
}
}
