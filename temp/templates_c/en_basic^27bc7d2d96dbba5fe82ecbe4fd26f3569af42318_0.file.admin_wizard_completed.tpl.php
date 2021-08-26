<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:38:01
  from 'C:\xampp\htdocs\tikip4k\templates\wizard\admin_wizard_completed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612663d963b005_85289510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27bc7d2d96dbba5fe82ecbe4fd26f3569af42318' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\wizard\\admin_wizard_completed.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612663d963b005_85289510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),));
?>


<div class="media">
	<div class="mr-4">
		<?php echo smarty_function_icon(array('name'=>"check",'size'=>2),$_smarty_tpl);?>
 Congratulations. You are done with the admin wizard.<br>
	</div>
	<div class="media-body">
		<fieldset>
			<legend>Next?</legend>
			<ul>
				<li><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>"tiki-wizard_admin.php?stepNr=0&url=tiki-index.php"));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>"tiki-wizard_admin.php?stepNr=0&url=tiki-index.php"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Choose another <a href="%0">Wizard</a> to continue configuring your site as admin<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>"tiki-wizard_admin.php?stepNr=0&url=tiki-index.php"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>.</li>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wizard_user'] == 'y') {?>
					<li><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>"tiki-wizard_user.php"));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>"tiki-wizard_user.php"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Visit the <a href="%0">User Wizard</a> to set some of your user preferences as a user<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>"tiki-wizard_user.php"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>.</li>
				<?php }?>
				<li>Or click at the button <strong>Finish</strong> to end the admin wizard and go back to the where you were.</li>
			</ul>
		</fieldset>
	</div>
</div>
<?php }
}
