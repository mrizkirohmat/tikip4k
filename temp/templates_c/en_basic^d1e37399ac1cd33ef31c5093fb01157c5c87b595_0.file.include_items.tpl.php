<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:33:06
  from 'C:\xampp\htdocs\tikip4k\templates\access\include_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612654a24e4cf5_87837720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1e37399ac1cd33ef31c5093fb01157c5c87b595' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\access\\include_items.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612654a24e4cf5_87837720 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group row mx-0">
	<h5 class="w-100"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customMsg']->value ));?>
</h5>
	<?php if ((isset($_smarty_tpl->tpl_vars['extra']->value["warning"]))) {?>
		<div class="alert alert-warning" role="alert">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['extra']->value["warning"] ));?>

		</div>
	<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['items']->value)) && count($_smarty_tpl->tpl_vars['items']->value) > 0) {?>
		<?php if (count($_smarty_tpl->tpl_vars['items']->value) < 16) {?>
			<ul id="list-items">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'name', true);
$_smarty_tpl->tpl_vars['name']->iteration = 0;
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
$_smarty_tpl->tpl_vars['name']->iteration++;
$_smarty_tpl->tpl_vars['name']->last = $_smarty_tpl->tpl_vars['name']->iteration === $_smarty_tpl->tpl_vars['name']->total;
$__foreach_name_1_saved = $_smarty_tpl->tpl_vars['name'];
?>
					<li>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>

					</li>
				<?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		<?php } else { ?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'name', true);
$_smarty_tpl->tpl_vars['name']->iteration = 0;
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
$_smarty_tpl->tpl_vars['name']->iteration++;
$_smarty_tpl->tpl_vars['name']->last = $_smarty_tpl->tpl_vars['name']->iteration === $_smarty_tpl->tpl_vars['name']->total;
$__foreach_name_2_saved = $_smarty_tpl->tpl_vars['name'];
?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));
if (!$_smarty_tpl->tpl_vars['name']->last) {?>, <?php }?>
			<?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
	<?php }?>
</div>
<?php }
}
