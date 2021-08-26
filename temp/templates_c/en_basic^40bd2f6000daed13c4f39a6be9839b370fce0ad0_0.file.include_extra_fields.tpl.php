<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:33:06
  from 'C:\xampp\htdocs\tikip4k\templates\access\include_extra_fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612654a266d1c7_91445941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40bd2f6000daed13c4f39a6be9839b370fce0ad0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\access\\include_extra_fields.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612654a266d1c7_91445941 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['extra']->value['fields'])) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
		<div class="form-group row">
			<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['label']))) {?>
				<label class="col-form-label"><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</label>
			<?php }?>
			<div>
				<<?php echo $_smarty_tpl->tpl_vars['field']->value['field'];?>

					class="form-control <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['class']))) {
echo $_smarty_tpl->tpl_vars['field']->value['class'];
}?>"
					type="<?php echo $_smarty_tpl->tpl_vars['field']->value['type'];?>
"
					size="<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['size']))) {
echo $_smarty_tpl->tpl_vars['field']->value['size'];
} else { ?>40<?php }?>"
					name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
"
					<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['placeholder']))) {?>placeholder="<?php echo $_smarty_tpl->tpl_vars['field']->value['placeholder'];?>
"<?php }?>
					value=""
				/>
			</div>
		</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
