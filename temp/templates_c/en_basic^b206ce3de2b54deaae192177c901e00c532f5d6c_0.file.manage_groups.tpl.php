<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:33:06
  from 'C:\xampp\htdocs\tikip4k\templates\user\manage_groups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612654a2368003_11630559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b206ce3de2b54deaae192177c901e00c532f5d6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\user\\manage_groups.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:access/include_items.tpl' => 1,
    'file:access/include_hidden.tpl' => 1,
    'file:access/include_extra_fields.tpl' => 1,
    'file:access/include_submit.tpl' => 1,
  ),
),false)) {
function content_612654a2368003_11630559 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1455916556612654a233c6e8_22974592', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_633454578612654a2344d67_39947029', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout_view.tpl');
}
/* {block "title"} */
class Block_1455916556612654a233c6e8_22974592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1455916556612654a233c6e8_22974592',
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
/* {block "content"} */
class Block_633454578612654a2344d67_39947029 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_633454578612654a2344d67_39947029',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),));
?>

	<?php $_smarty_tpl->_subTemplateRender('file:access/include_items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<form method="post" id="confirm-action" class="confirm-action" action="<?php echo smarty_function_service(array('controller'=>$_smarty_tpl->tpl_vars['confirmController']->value,'action'=>$_smarty_tpl->tpl_vars['confirmAction']->value),$_smarty_tpl);?>
">
		<?php $_smarty_tpl->_subTemplateRender('file:access/include_hidden.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<div class="form-group row mx-0">
			<label for="add_remove" class="col-form-label">
				Add to or remove from:
			</label>
			<div class="radio col-sm-12">
				<label class="col-form-label mr-3">
					<input type="radio" name="add_remove" id="add" value="add" checked="" class="mr-1">
					Add to
				</label>
				<label class="col-form-label">
					<input type="radio" name="add_remove" id="remove" value="remove" class="mr-1">
					Remove from
				</label>
			</div>
		</div>
		<div class="form-group row mx-0">
			<label for="select_groups" class="col-form-label">
				These groups:
			</label>
			<select name="checked_groups[]" multiple="multiple" size="<?php echo $_smarty_tpl->tpl_vars['countgrps']->value;?>
" class="form-control" id="select_groups" data-usergroups='<?php echo $_smarty_tpl->tpl_vars['userGroups']->value;?>
'>
				<?php
$__section_ix_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['all_groups']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_0_total = $__section_ix_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_0_total !== 0) {
for ($__section_ix_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_0_iteration <= $__section_ix_0_total; $__section_ix_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
					<?php if ($_smarty_tpl->tpl_vars['all_groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)] != 'Anonymous' && $_smarty_tpl->tpl_vars['all_groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)] != 'Registered') {?>
						<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['all_groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)] ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['all_groups']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)] ));?>
</option>
					<?php }?>
				<?php
}
}
?>
			</select>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen'] !== 'y') {?>
				<div class="form-text">
					Use Ctrl+Click or Command+Click to select multiple options
				</div>
			<?php }?>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
$("input[name=add_remove]").change(function () {
	var userGroups = $("#select_groups").data("usergroups"), mode = false;
	if ($(this).prop("checked") && userGroups) {
		if ($(this).val() === "add") {	// filter the group list to ones this user is not in
			mode = true;
		}
		$("option", "#select_groups").each(function () {
			if ($.inArray($(this).val(), userGroups) > -1) {
				$(this).prop("disabled", mode).css("opacity", mode ? .3 : 1);
			} else {
				$(this).prop("disabled", ! mode).css("opacity", ! mode ? .3 : 1);
			}
		});
		$("#select_groups").trigger("chosen:updated");
	}
}).change();
			<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		</div>
		<div class="form-group row mx-0" >
			<label for="default_group" class="col-form-label">
				Set default group:
			</label>
			<select name="default_group" size="<?php echo $_smarty_tpl->tpl_vars['countgrps']->value;?>
" class="form-control" id="default_group">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_groups']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['group']->value != 'Anonymous') {?>
						<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['group']->value ));?>
</option>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
		</div>
		<?php $_smarty_tpl->_subTemplateRender('file:access/include_extra_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender('file:access/include_submit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</form>
<?php
}
}
/* {/block "content"} */
}
