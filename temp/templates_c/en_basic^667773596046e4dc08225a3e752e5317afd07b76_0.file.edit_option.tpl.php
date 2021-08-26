<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:55:14
  from 'C:\xampp\htdocs\tikip4k\templates\menu\edit_option.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612659d2ba4068_86968105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '667773596046e4dc08225a3e752e5317afd07b76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\menu\\edit_option.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/menu/quicklinks.tpl' => 1,
  ),
),false)) {
function content_612659d2ba4068_86968105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2043996425612659d2b64650_03461575', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1945530157612659d2b6d9f2_19237362', "subtitle");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1875486411612659d2b6e293_74188368', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout_view.tpl');
}
/* {block "title"} */
class Block_2043996425612659d2b64650_03461575 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2043996425612659d2b64650_03461575',
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
class Block_1945530157612659d2b6d9f2_19237362 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subtitle' => 
  array (
    0 => 'Block_1945530157612659d2b6d9f2_19237362',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "subtitle"} */
/* {block "content"} */
class Block_1875486411612659d2b6e293_74188368 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1875486411612659d2b6e293_74188368',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.autocomplete.php','function'=>'smarty_function_autocomplete',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),));
?>

	<?php $_smarty_tpl->_subTemplateRender('file:templates/menu/quicklinks.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<form action="<?php echo smarty_function_service(array('controller'=>'menu','action'=>'edit_option'),$_smarty_tpl);?>
" method="post" role="form" class="form">
		<div class="form form-horizontal">
			<div class="form-group row">
				<label class="col-form-label col-md-3" for="menu_name">Name:</label>

				<div class="col-md-9">
					<input id="menu_name" class="form-control" type="text" name="name" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['name'] ));?>
">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-md-3" for="menu_url">URL:</label>

				<div class="col-md-9">
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'options', null, null);?>select:function(event,ui){ui.item.value='(('+ui.item.value+'))';}<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo smarty_function_autocomplete(array('element'=>"#menu_url",'type'=>'pagename','options'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'options')),$_smarty_tpl);?>

					<input id="menu_url" type="text" name="url" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['url'] ));?>
" class="form-control">

					<div class="form-text">For wiki page, use ((PageName)).</div>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-md-3" for="type">Type:</label>

				<div class="col-md-9">
					<select name="type" class="form-control">
						<option value="o" <?php if ($_smarty_tpl->tpl_vars['info']->value['type'] == 'o') {?>selected="selected"<?php }?>>option</option>
						<option value="s" <?php if ($_smarty_tpl->tpl_vars['info']->value['type'] == 's') {?>selected="selected"<?php }?>>section level 0</option>
						<option value='1' <?php if ($_smarty_tpl->tpl_vars['info']->value['type'] == '1') {?>selected="selected"<?php }?>>section level 1</option>
						<option value='2' <?php if ($_smarty_tpl->tpl_vars['info']->value['type'] == '2') {?>selected="selected"<?php }?>>section level 2</option>
						<option value='3' <?php if ($_smarty_tpl->tpl_vars['info']->value['type'] == '3') {?>selected="selected"<?php }?>>section level 3</option>
						<option value="r" <?php if ($_smarty_tpl->tpl_vars['info']->value['type'] == 'r') {?>selected="selected"<?php }?>>sorted section level 0</option>
						<option value="-" <?php if ($_smarty_tpl->tpl_vars['info']->value['type'] == '-') {?>selected="selected"<?php }?>>separator</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-md-3" for="position">Position:</label>

				<div class="col-md-9">
					<input type="text" name="position" id="position" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['position'] ));?>
" class="form-control">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-md-3" for="menu_groupname">Group:</label>

				<div class="col-md-9">
					<select id="menu_groupname" name="groupname[]" class="form-control mb-4" multiple="multiple">
						<option value=""></option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option_groups']->value, 'selected', false, 'groupname');
$_smarty_tpl->tpl_vars['selected']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['groupname']->value => $_smarty_tpl->tpl_vars['selected']->value) {
$_smarty_tpl->tpl_vars['selected']->do_else = false;
?>
							<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groupname']->value ));?>
" <?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['groupname']->value ));?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
					<?php if (count($_smarty_tpl->tpl_vars['option_groups']->value) >= '2') {?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen'] != 'y') {
$_smarty_tpl->_assignInScope('ctrlMsg', "Use Ctrl+Click to select multiple options<br>");
}?>
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['ctrlMsg']->value;?>
Selecting 2 groups means that the option will be seen if the user belongs to the 2 groups. If you want the 2 groups to see the option, create 2 options with one group each.
							<br>
						If the url is ((PageName)), you do not need to put the groups, the option will be displayed only if the page can be displayed.<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php }?>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-md-3" for="menu_section">Sections:</label>

				<div class="col-md-9">
					<input id="menu_section" type="text" name="section" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['section'] ));?>
" class="form-control"><br>
					<?php echo smarty_function_autocomplete(array('element'=>"#menu_section",'type'=>"array",'options'=>"source:prefNames,multiple:true,multipleSeparator:','"),$_smarty_tpl);?>

					<div class="form-text">Separate multiple feature/preferences with a comma ( , ) for an AND or a vertical bar ( | ) for an OR.</div>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-md-3" for="menu_perm">Permissions:</label>

				<div class="col-md-9">
					<input id="menu_perm" type="text" name="perm" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['perm'] ));?>
" class="form-control"><br>
					<?php echo smarty_function_autocomplete(array('element'=>"#menu_perm",'type'=>"array",'options'=>"source:permNames,multiple:true,multipleSeparator:','"),$_smarty_tpl);?>

					<div class="form-text">Separate multiple permissions with a comma ( , ) for an AND or a vertical bar ( | ) for an OR.</div>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-form-label col-md-3" for="menu_class">Class:</label>

				<div class="col-md-9">
					<input id="menu_class" type="text" name="class" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['class'] ));?>
" class="form-control"><br>

					<div class="form-text">Input an HTML class value for the menu option. Separate with a space for multiple classes.</div>
				</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userlevels'] == 'y') {?>
				<div class="form-group row">
					<label class="col-form-label col-md-3" for="level">Level:</label>

					<div class="col-md-9">
						<select name="level" id="level" class="form-control">
							<option value="0"<?php if ($_smarty_tpl->tpl_vars['level']->value == 0) {?> selected="selected"<?php }?>>All</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prefs']->value['userlevels'], 'lev', false, 'levn');
$_smarty_tpl->tpl_vars['lev']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['levn']->value => $_smarty_tpl->tpl_vars['lev']->value) {
$_smarty_tpl->tpl_vars['lev']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['levn']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['info']->value['userlevel'] == $_smarty_tpl->tpl_vars['levn']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lev']->value;?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons'] == 'y') {?>
				<div class="form-group row">
					<label class="col-form-label col-md-3" for="icon">Icon:</label>

					<div class="col-md-9">
						<input type="text" name="icon" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['icon'] ));?>
" class="form-control">
					</div>
				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_templated_groups'] == 'y') {?>
				<div class="form-group row">
					<div class="col-sm-12">
						<label>
							This is a dynamic menu option for a Templated Group in:
						</label>
						<select name="tplGroupContainer" id="tplGroupContainer" class="form-control">
							<option>None</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templatedGroups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
"
										<?php if ($_smarty_tpl->tpl_vars['group']->value['id'] == $_smarty_tpl->tpl_vars['tplGroupContainerId']->value) {?>selected<?php }?> >
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_truncate($_smarty_tpl->tpl_vars['group']->value['groupName'],80,"(...)",true) ));?>

								</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
				</div>
			<?php }?>
			<div class="form-group text-center submit">
				<?php echo smarty_function_ticket(array('mode'=>'confirm'),$_smarty_tpl);?>

				<input type="hidden" name="optionId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['optionId']->value ));?>
">
				<input type="hidden" name="menuId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['menuId']->value ));?>
">
				<input type="hidden" name="offset" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['offset']->value ));?>
">
				<input type="submit" class="btn btn-primary" name="save" value="Save">
			</div>
		</div>

	</form>
<?php
}
}
/* {/block "content"} */
}
