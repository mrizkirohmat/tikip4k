<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:37:08
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-wizard_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612663a4bd7983_14465538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95c8be988e3e7f4eb7e94efa0cbdbe267c10ccb7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-wizard_admin.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:wizard/wizard_bar_admin.tpl' => 2,
  ),
),false)) {
function content_612663a4bd7983_14465538 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1783683738612663a4bcafa9_30992327', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_356913391612663a4bcc344_74559236', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout_plain.tpl");
}
/* {block "title"} */
class Block_1783683738612663a4bcafa9_30992327 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1783683738612663a4bcafa9_30992327',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_356913391612663a4bcc344_74559236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_356913391612663a4bcc344_74559236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="tiki-wizard_admin.php" method="post">
	<div class="col-sm-12">
		<?php $_smarty_tpl->_subTemplateRender("file:wizard/wizard_bar_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
	<hr>
	<div id="wizardBody">
		<div class="row">
		<?php if (!empty($_smarty_tpl->tpl_vars['wizard_toc']->value)) {?>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header font-weight-bold adminWizardTOCTitle"><?php if ($_smarty_tpl->tpl_vars['useDefaultPrefs']->value) {?>Profiles Wizard<?php } elseif ($_smarty_tpl->tpl_vars['useChangesWizard']->value) {?>Changes Wizard<?php } else { ?>Configuration Wizard<?php }?> - steps:</div>
					<?php echo $_smarty_tpl->tpl_vars['wizard_toc']->value;?>

				</div>
			</div>
		<?php }?>
			<div class="<?php if (!empty($_smarty_tpl->tpl_vars['wizard_toc']->value)) {?>col-sm-8<?php } else { ?>col-sm-12<?php }?>">
			<?php echo $_smarty_tpl->tpl_vars['wizardBody']->value;?>

			</div>
		</div>
	</div>
	<hr>
	<?php $_smarty_tpl->_subTemplateRender("file:wizard/wizard_bar_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</form>
<?php
}
}
/* {/block "content"} */
}
