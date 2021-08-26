<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:04:01
  from 'C:\xampp\htdocs\tikip4k\templates\menu\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61263fc1c30a27_81948868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e9636183b90830bcb097aaadb6889ef670aacdb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\menu\\edit.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61263fc1c30a27_81948868 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92667775261263fc1c16089_93723112', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101118349461263fc1c1de78_27637245', "subtitle");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89295163561263fc1c26b23_77457053', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout_view.tpl');
}
/* {block "title"} */
class Block_92667775261263fc1c16089_93723112 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_92667775261263fc1c16089_93723112',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),));
?>

	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array());
$_block_repeat=true;
echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value ));
$_block_repeat=false;
echo smarty_block_title(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block "title"} */
/* {block "subtitle"} */
class Block_101118349461263fc1c1de78_27637245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subtitle' => 
  array (
    0 => 'Block_101118349461263fc1c1de78_27637245',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),));
?>

	<small>
		<?php if ($_smarty_tpl->tpl_vars['info']->value['menuId']) {?>
			Id:<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['menuId'] ));?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['symbol']->value) {?>
			<a class="btn btn-link btn-sm tips" title="Symbol Information|Symbol: <strong><?php echo $_smarty_tpl->tpl_vars['symbol']->value['object'];?>
</strong><br>Profile Name: <strong><?php echo $_smarty_tpl->tpl_vars['symbol']->value['profile'];?>
</strong><br>Profile Source: <strong><?php echo $_smarty_tpl->tpl_vars['symbol']->value['domain'];?>
</strong>">
				<?php echo smarty_function_icon(array('name'=>"information"),$_smarty_tpl);?>

			</a>
		<?php }?>	
	</small>
<?php
}
}
/* {/block "subtitle"} */
/* {block "content"} */
class Block_89295163561263fc1c26b23_77457053 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_89295163561263fc1c26b23_77457053',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),));
?>

	<form action="<?php echo smarty_function_service(array('controller'=>'menu','action'=>'edit'),$_smarty_tpl);?>
" method="post" role="form" class="form">
		<div class="form-group row mx-2">
			<label for="menus_name" class="col-form-label">
				Name
			</label>
			<input type="text" name="name" id="menus_name" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['name'] ));?>
" class="form-control" required="required">
		</div>
		<div class="form-group row mx-2">
			<label for="menus_desc" class="col-form-label">
				Description
			</label>
			<textarea name="description" id="menus_desc" class="form-control"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['description'] ));?>
</textarea>
		</div>
		<div class="form-group row mx-2">
			<label for="menus_type" class="col-form-label">
				Type
			</label>
			<select name="type" id="menus_type" class="form-control">
				<option value="d" <?php if ($_smarty_tpl->tpl_vars['info']->value['type'] == 'd') {?>selected="selected"<?php }?>>dynamic collapsed (d)</option>
				<option value="e" <?php if ($_smarty_tpl->tpl_vars['info']->value['type'] == 'e') {?>selected="selected"<?php }?>>dynamic extended (e)</option>
				<option value="f" <?php if ($_smarty_tpl->tpl_vars['info']->value['type'] == 'f') {?>selected="selected"<?php }?>>fixed (f)</option>
			</select>
		</div>
		<div class="form-group row mx-2">
			<label for="menus_parse" class="w-100">
				<input type="checkbox" name="parse" id="menus_parse"<?php if ($_smarty_tpl->tpl_vars['info']->value['parse'] == 'y') {?> checked="checked"<?php }?> value="1">
				Wiki Parse
			</label>
			<div class="form-text">Labels of all options will be wiki parsed.</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_menusfolderstyle'] == 'y') {?>
			<div class="form-group row mx-2">
				<label for="icon" class="col-form-label">
					Folder Icon
				</label>
				<input type="text" id="icon" name="icon" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['icon'] ));?>
" class="form-control">
				<div class="form-text">Path and filename of closed folder icon</div>
			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons'] == 'y') {?>
			<div class="form-group row mx-2">
				<label for="use_items_icons">
					<input type="checkbox" id="use_items_icons" name="use_items_icons" <?php if ($_smarty_tpl->tpl_vars['info']->value['use_items_icons'] == 'y') {?> checked="checked"<?php }?> value="1">
					Configure icons for menu entries
				</label>
			</div>
		<?php }?>
		<div class="submit">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons'] != 'y') {?>
				<input type="hidden" name="use_items_icons" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['use_items_icons'];?>
">
			<?php }?>
			<?php echo smarty_function_ticket(array('mode'=>'confirm'),$_smarty_tpl);?>

			<input type="hidden" name="menuId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['menuId'] ));?>
">
			<input type="submit" class="btn btn-primary" name="save" value="Save">
		</div>
	</form>
<?php
}
}
/* {/block "content"} */
}
