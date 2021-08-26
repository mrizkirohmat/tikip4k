<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:44:40
  from 'C:\xampp\htdocs\tikip4k\templates\permission_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264948ce9070_21244153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f70eb705cd748a7e98b19f2bd16feb4db40f8e82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\permission_link.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61264948ce9070_21244153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),));
if ($_smarty_tpl->tpl_vars['permission_link']->value['mode'] == 'text') {?>
	<a class="tips <?php if ($_smarty_tpl->tpl_vars['permission_link']->value['active']) {?>tips bg-warning<?php }
if (!empty($_smarty_tpl->tpl_vars['permission_link']->value['addclass'])) {?> <?php echo $_smarty_tpl->tpl_vars['permission_link']->value['addclass'];
}?>" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permission_link']->value['url'] ));?>
"<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['active']) {?> title=":Individual permissions"<?php }?>>
		<?php echo smarty_function_icon(array('name'=>"permission"),$_smarty_tpl);?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permission_link']->value['label'] ));?>

		<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['count']) {?>
			<span class="badge badge-secondary"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permission_link']->value['count'] ));?>
</span>
		<?php }?>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['permission_link']->value['mode'] == 'button') {?>
	<a class="<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['active'] && $_smarty_tpl->tpl_vars['permission_link']->value['type'] != 'file gallery') {?>btn btn-warning<?php } else { ?>btn btn-primary<?php }
if (!empty($_smarty_tpl->tpl_vars['permission_link']->value['addclass'])) {?> <?php echo $_smarty_tpl->tpl_vars['permission_link']->value['addclass'];
}?>" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permission_link']->value['url'] ));?>
">
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permission_link']->value['label'] ));?>

		<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['count']) {?>
			<span class="badge badge-secondary"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permission_link']->value['count'] ));?>
</span>
		<?php }?>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['permission_link']->value['mode'] == 'button_link') {?>
	<a class="tips btn btn-link<?php if (!empty($_smarty_tpl->tpl_vars['permission_link']->value['addclass'])) {?> <?php echo $_smarty_tpl->tpl_vars['permission_link']->value['addclass'];
}?>" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permission_link']->value['url'] ));?>
">
		<?php echo smarty_function_icon(array('name'=>"permission"),$_smarty_tpl);?>

		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permission_link']->value['label'] ));?>

		<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['count']) {?>
			<span class="badge badge-secondary"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permission_link']->value['count'] ));?>
</span>
		<?php }?>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['permission_link']->value['mode'] == 'link') {?>
	<a class="btn btn-link<?php if (!empty($_smarty_tpl->tpl_vars['permission_link']->value['addclass'])) {?> <?php echo $_smarty_tpl->tpl_vars['permission_link']->value['addclass'];
}?>" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permission_link']->value['url'] ));?>
">
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permission_link']->value['label'] ));?>

		<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['count']) {?>
			<span class="badge badge-secondary"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permission_link']->value['count'] ));?>
</span>
		<?php }?>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['permission_link']->value['mode'] == 'icon') {?>
	<a class="tips btn <?php if ($_smarty_tpl->tpl_vars['permission_link']->value['active']) {?>btn-warning <?php } else { ?> btn-link<?php }?> btn-sm<?php if (!empty($_smarty_tpl->tpl_vars['permission_link']->value['addclass'])) {?> <?php echo $_smarty_tpl->tpl_vars['permission_link']->value['addclass'];
}?>" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permission_link']->value['url'] ));?>
" title=":<?php echo $_smarty_tpl->tpl_vars['permission_link']->value['label'];?>
"><?php echo smarty_function_icon(array('name'=>"permission"),$_smarty_tpl);?>
<span class="sr-only"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permission_link']->value['label'] ));?>
</span><?php if ($_smarty_tpl->tpl_vars['permission_link']->value['count']) {?><span class="badge badge-secondary"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permission_link']->value['count'] ));?>
</span><?php }?></a>
<?php } else { ?>
	<a class="tips <?php if ($_smarty_tpl->tpl_vars['permission_link']->value['active']) {?>text-success<?php } else { ?>text-warning<?php }
if (!empty($_smarty_tpl->tpl_vars['permission_link']->value['addclass'])) {?> <?php echo $_smarty_tpl->tpl_vars['permission_link']->value['addclass'];
}?>" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permission_link']->value['url'] ));?>
" title=":<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permission_link']->value['label'] ));?>
">
		<?php echo smarty_function_icon(array('name'=>"permission"),$_smarty_tpl);?>

		<span class="sr-only"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permission_link']->value['label'] ));?>
</span>
		<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['count']) {?>
			<span class="badge badge-secondary"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['permission_link']->value['count'] ));?>
</span>
		<?php }?>
	</a>
<?php }
}
}
