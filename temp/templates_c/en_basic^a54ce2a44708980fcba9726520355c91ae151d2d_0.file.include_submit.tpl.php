<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:33:06
  from 'C:\xampp\htdocs\tikip4k\templates\access\include_submit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612654a27078b4_82918205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a54ce2a44708980fcba9726520355c91ae151d2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\access\\include_submit.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612654a27078b4_82918205 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] !== 'y') {?>
	<div class="modal-footer">
		<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['extra']->value['referer'];?>
">
			Back
		</a>
<?php }?>
		<div<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] === 'y') {?> class="submit offset-md-3 col-md-9"<?php }?>>
			<input
				type="submit"
				class="btn <?php if (!empty($_smarty_tpl->tpl_vars['confirmButtonClass']->value)) {
echo $_smarty_tpl->tpl_vars['confirmButtonClass']->value;
} else { ?>btn-primary<?php }?>"
				value="<?php if (!empty($_smarty_tpl->tpl_vars['confirmButton']->value)) {
echo $_smarty_tpl->tpl_vars['confirmButton']->value;
} else { ?>OK<?php }?>"
				onclick="confirmAction(event)"
			>
		</div>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] !== 'y') {?>
	</div>
<?php }
}
}
