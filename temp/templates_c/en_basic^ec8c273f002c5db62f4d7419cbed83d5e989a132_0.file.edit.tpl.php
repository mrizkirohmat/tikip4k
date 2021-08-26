<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:28:27
  from 'C:\xampp\htdocs\tikip4k\templates\plugin\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126457b5b3944_28064542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec8c273f002c5db62f4d7419cbed83d5e989a132' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\plugin\\edit.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:plugin/quick_add_references.tpl' => 1,
  ),
),false)) {
function content_6126457b5b3944_28064542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'plugin_edit_row' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\tikip4k\\temp\\templates_c\\en_basic^ec8c273f002c5db62f4d7419cbed83d5e989a132_0.file.edit.tpl.php',
    'uid' => 'ec8c273f002c5db62f4d7419cbed83d5e989a132',
    'call_name' => 'smarty_template_function_plugin_edit_row_11719183886126457b4ba6e6_60981714',
  ),
));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8942714166126457b4e4ea2_92842585', "subtitle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7965582846126457b4e7899_47624990', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13253203266126457b4e8a71_71483190', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout_view.tpl');
}
/* {block "subtitle"} */
class Block_8942714166126457b4e4ea2_92842585 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'subtitle' => 
  array (
    0 => 'Block_8942714166126457b4e4ea2_92842585',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.help.php','function'=>'smarty_function_help',),));
?>

	<?php echo smarty_function_help(array('url'=>$_smarty_tpl->tpl_vars['info']->value['documentation']),$_smarty_tpl);?>

<?php
}
}
/* {/block "subtitle"} */
/* {block 'subtitle'} */
class Block_10801012096126457b4e7f90_70816604 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'subtitle'} */
/* {block "title"} */
class Block_7965582846126457b4e7899_47624990 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7965582846126457b4e7899_47624990',
  ),
  'subtitle' => 
  array (
    0 => 'Block_10801012096126457b4e7f90_70816604',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10801012096126457b4e7f90_70816604', 'subtitle', $this->tplIndex);
?>
</h3>
<?php
}
}
/* {/block "title"} */
/* smarty_template_function_plugin_edit_row_11719183886126457b4ba6e6_60981714 */
if (!function_exists('smarty_template_function_plugin_edit_row_11719183886126457b4ba6e6_60981714')) {
function smarty_template_function_plugin_edit_row_11719183886126457b4ba6e6_60981714(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.object_selector.php','function'=>'smarty_function_object_selector',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.object_selector_multi.php','function'=>'smarty_function_object_selector_multi',),));
?>

		<?php if ($_smarty_tpl->tpl_vars['param']->value['area']) {
$_smarty_tpl->_assignInScope('inputId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['param']->value['area'] )));
} else {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('inputId', "param_".$_prefixVariable1."_input");
}?>
		<div class="col-sm-3">
			<label for="<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['param']->value['name'] ));?>
</label>
			<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['required'])) {?>
				<strong class="mandatory_star text-danger tips" title="|Required">*</strong>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['type'])) {?>
				<?php ob_start();
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['prefs']->value['home_file_gallery'],'file gallery',true);
$_prefixVariable2=ob_get_clean();
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['param']->value['area'] ));
$_prefixVariable3=ob_get_clean();
$_smarty_tpl->_assignInScope('onclick', "openFgalsWindow('".$_prefixVariable2."filegals_manager=".$_prefixVariable3."&id=1', true);return false;");?>
				<?php if ($_smarty_tpl->tpl_vars['param']->value['type'] == 'image') {?>
					<br><?php echo smarty_function_icon(array('name'=>'image','title'=>'Select image','onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'class'=>'btn btn-sm btn-primary'),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['param']->value['type'] == 'fileId') {?>
					<br><?php echo smarty_function_icon(array('name'=>'file','title'=>'Pick a file','onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'class'=>'btn btn-sm btn-primary'),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['param']->value['type'] == 'kaltura') {?>
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
$("#picker_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
").parent().click(function () {
	$(this).serviceDialog({
		title: tr("Upload or record media"),
		width: 710,
		height: 450,
		hideButtons: true,
		success: function (data) {
			if (data.entries) {
				input.value = data.entries[0];
			}
		}
	});
	return false;
});
					<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<br><?php ob_start();
echo smarty_function_service(array('controller'=>'kaltura','action'=>'upload'),$_smarty_tpl);
$_prefixVariable4 = ob_get_clean();
echo smarty_function_icon(array('name'=>'video','title'=>'Upload or record media','href'=>$_prefixVariable4,'id'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ('picker_').($_smarty_tpl->tpl_vars['name']->value) )),'class'=>'btn btn-sm btn-primary'),$_smarty_tpl);?>

				<?php }?>
			<?php }?>
		</div>
		<div class="col-sm-9">
			<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['parentparam']['name'])) {?>
				<?php $_smarty_tpl->_assignInScope('groupClass', " group-".((string)$_smarty_tpl->tpl_vars['param']->value['parentparam']['name']));?>
				<?php $_smarty_tpl->_assignInScope('dataAttribute', " data-parent_name='".((string)$_smarty_tpl->tpl_vars['param']->value['parentparam']['name'])."' data-parent_value='".((string)$_smarty_tpl->tpl_vars['param']->value['parentparam']['value'])."'");?>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('groupClass', '');?>
				<?php $_smarty_tpl->_assignInScope('dataAttribute', '');?>
			<?php }?>
			<?php if (empty($_smarty_tpl->tpl_vars['param']->value['options'])) {?>
				<?php if ((isset($_smarty_tpl->tpl_vars['pluginArgs']->value[$_smarty_tpl->tpl_vars['name']->value]))) {
$_smarty_tpl->_assignInScope('val', $_smarty_tpl->tpl_vars['pluginArgs']->value[$_smarty_tpl->tpl_vars['name']->value]);
} else {
$_smarty_tpl->_assignInScope('val', '');
}?>
				<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['selector_type'])) {?>
					<?php if (empty($_smarty_tpl->tpl_vars['param']->value['separator'])) {?>
						<?php echo smarty_function_object_selector(array('type'=>$_smarty_tpl->tpl_vars['param']->value['selector_type'],'_simplevalue'=>$_smarty_tpl->tpl_vars['val']->value,'_simplename'=>(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ('params[').($_smarty_tpl->tpl_vars['name']->value) ))).(']'),'_simpleid'=>$_smarty_tpl->tpl_vars['inputId']->value,'_parent'=>$_smarty_tpl->tpl_vars['param']->value['parent'],'_parentkey'=>$_smarty_tpl->tpl_vars['param']->value['parentkey'],'_class'=>$_smarty_tpl->tpl_vars['groupClass']->value),$_smarty_tpl);?>

					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['param']->value['selector_type'] == 'extra') {?>
							<?php echo smarty_function_object_selector_multi(array('type'=>$_smarty_tpl->tpl_vars['param']->value['selector_type_reference'],'_extra_type'=>$_smarty_tpl->tpl_vars['param']->value['profile_reference_extra_values'],'_simplevalue'=>$_smarty_tpl->tpl_vars['val']->value,'_simplename'=>(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ('params[').($_smarty_tpl->tpl_vars['name']->value) ))).(']'),'_simpleid'=>$_smarty_tpl->tpl_vars['inputId']->value,'_separator'=>$_smarty_tpl->tpl_vars['param']->value['separator'],'_parent'=>$_smarty_tpl->tpl_vars['param']->value['parent'],'_parentkey'=>$_smarty_tpl->tpl_vars['param']->value['parentkey'],'_sort'=>$_smarty_tpl->tpl_vars['param']->value['sort_order'],'_class'=>$_smarty_tpl->tpl_vars['groupClass']->value),$_smarty_tpl);?>

						<?php } else { ?>
							<?php echo smarty_function_object_selector_multi(array('type'=>$_smarty_tpl->tpl_vars['param']->value['selector_type'],'_simplevalue'=>$_smarty_tpl->tpl_vars['val']->value,'_simplename'=>(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ('params[').($_smarty_tpl->tpl_vars['name']->value) ))).(']'),'_simpleid'=>$_smarty_tpl->tpl_vars['inputId']->value,'_separator'=>$_smarty_tpl->tpl_vars['param']->value['separator'],'_parent'=>$_smarty_tpl->tpl_vars['param']->value['parent'],'_parentkey'=>$_smarty_tpl->tpl_vars['param']->value['parentkey'],'_sort'=>$_smarty_tpl->tpl_vars['param']->value['sort_order'],'_class'=>$_smarty_tpl->tpl_vars['groupClass']->value),$_smarty_tpl);?>

						<?php }?>
					<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['parentparam']['name'])) {?>
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array('notonready'=>true));
$_block_repeat=true;
echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$("#<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
").attr("data-parent_name", "<?php echo $_smarty_tpl->tpl_vars['param']->value['parentparam']['name'];?>
").attr("data-parent_value", "<?php echo $_smarty_tpl->tpl_vars['param']->value['parentparam']['value'];?>
");<?php $_block_repeat=false;
echo smarty_block_jq(array('notonready'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php }?>
				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['param']->value['filter'] == "password") {?>
						<input value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value ));?>
" class="form-control<?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
" type="password" name="params[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
]"<?php echo $_smarty_tpl->tpl_vars['dataAttribute']->value;?>
>
					<?php } else { ?>
						<input value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value ));?>
" class="form-control<?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
" type="text" name="params[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
]"<?php echo $_smarty_tpl->tpl_vars['dataAttribute']->value;?>
>
					<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['filter'])) {?>
						<?php if ($_smarty_tpl->tpl_vars['param']->value['filter'] == "pagename") {?>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
).tiki("autocomplete", "pagename");<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php } elseif ($_smarty_tpl->tpl_vars['param']->value['filter'] == "groupname") {?>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
).tiki("autocomplete", "groupname", {multiple: true, multipleSeparator: "|"});<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php } elseif ($_smarty_tpl->tpl_vars['param']->value['filter'] == "username") {?>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
).tiki("autocomplete", "username", {multiple: true, multipleSeparator: "|"});<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php } elseif ($_smarty_tpl->tpl_vars['name']->value == "biblio_code") {?>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$(<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
).tiki("autocomplete", "reference", {multiple: true, multipleSeparator: ":"});<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php } elseif ($_smarty_tpl->tpl_vars['param']->value['filter'] == "date") {?>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
								$(<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
).tiki("datepicker");
								$(".ui-datepicker-trigger").remove();
							<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php } elseif ($_smarty_tpl->tpl_vars['param']->value['filter'] == "datetime") {?>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
								$(<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
).tiki("datetimepicker");
								$(".ui-datepicker-trigger").remove();
							<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php }?>
					<?php }?>
				<?php }?>
			<?php } else { ?>
				<select class="form-control<?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
" type="text" name="params[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
]" id="<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
"<?php echo $_smarty_tpl->tpl_vars['dataAttribute']->value;?>
>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['param']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
						<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['value'] ));?>
" <?php if ((isset($_smarty_tpl->tpl_vars['pluginArgs']->value[$_smarty_tpl->tpl_vars['name']->value])) && $_smarty_tpl->tpl_vars['pluginArgs']->value[$_smarty_tpl->tpl_vars['name']->value] == $_smarty_tpl->tpl_vars['option']->value['value']) {?> selected="selected"<?php }?>>
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['text'] ));?>

						</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			<?php }?>
			<div class="description"><?php echo $_smarty_tpl->tpl_vars['param']->value['description'];?>
</div>
		</div>
	<?php
}}
/*/ smarty_template_function_plugin_edit_row_11719183886126457b4ba6e6_60981714 */
/* {block "content"} */
class Block_13253203266126457b4e8a71_71483190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13253203266126457b4e8a71_71483190',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),));
?>

	
	<div id="plugin_params">
		<form action="<?php echo smarty_function_service(array('controller'=>'plugin','action'=>'edit'),$_smarty_tpl);?>
" method="post">
			<?php echo smarty_function_ticket(array('mode'=>'confirm'),$_smarty_tpl);?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value['params'], 'param', false, 'name');
$_smarty_tpl->tpl_vars['param']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->do_else = false;
?>
				<div class="form-group row <?php if ($_smarty_tpl->tpl_vars['param']->value['advanced']) {?> advanced<?php }?>" id="param_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
">
					<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'plugin_edit_row', array('param'=>$_smarty_tpl->tpl_vars['param']->value,'info'=>$_smarty_tpl->tpl_vars['info']->value,'pluginArgs'=>$_smarty_tpl->tpl_vars['pluginArgs']->value), true);?>

				</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php if (!empty($_smarty_tpl->tpl_vars['info']->value['advancedParams'])) {?>
				<?php echo smarty_function_button(array('_text'=>'Advanced','_onclick'=>"$"."('.form-group.advanced.default').toggle('fast'); return false;",'_class'=>'btn btn-sm mb-4'),$_smarty_tpl);?>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value['advancedParams'], 'param', false, 'name');
$_smarty_tpl->tpl_vars['param']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->do_else = false;
?>
					<div class="form-group advanced row default" style="display: none;">
						<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'plugin_edit_row', array('param'=>$_smarty_tpl->tpl_vars['param']->value,'info'=>$_smarty_tpl->tpl_vars['info']->value,'pluginArgs'=>$_smarty_tpl->tpl_vars['pluginArgs']->value), true);?>

					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>

			<div class="form-group row"<?php if (empty($_smarty_tpl->tpl_vars['info']->value['body'])) {?> style="display:none"<?php }?>>
				<label for="content" class="col-sm-3">Body</label>
				<div class="col-sm-9">
					<textarea name="content" id="content" class="form-control" rows="12"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bodyContent']->value ));?>
</textarea>
					<div class="description"><?php echo $_smarty_tpl->tpl_vars['info']->value['body'];?>
</div>
				</div>
			</div>

			<div class="submit">
				<input type="hidden" name="page" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pageName']->value ));?>
">
				<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
				<input type="hidden" name="index" value="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiplugin_list_convert_trackerlist'] == 'y' && ($_smarty_tpl->tpl_vars['type']->value == 'trackerlist' || $_smarty_tpl->tpl_vars['type']->value == 'trackerfilter')) {?>
					<input type="submit" class="btn btn-primary" value="Convert to List" data-alt_controller="plugin" data-alt_action="convert_trackerlist">
				<?php }?>
				<input type="submit" class="btn btn-primary" value="Save">
			</div>

			<?php if ($_smarty_tpl->tpl_vars['type']->value == 'module') {?>
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					$("#param_module_input").change(function () {
						var selectedMod = $(this).val();
						$(this).parents(".modal-content").load(
							$.service("plugin", "edit", {
								area_id: "<?php echo $_smarty_tpl->tpl_vars['area_id']->value;?>
",
								type: "<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
",
								index: <?php echo $_smarty_tpl->tpl_vars['index']->value;?>
,
								page: "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pageName']->value,'javascript' ));?>
",
								pluginArgs: <?php echo $_smarty_tpl->tpl_vars['pluginArgsJSON']->value;?>
,
								bodyContent: "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bodyContent']->value,'javascript' ));?>
",
								edit_icon: <?php echo $_smarty_tpl->tpl_vars['edit_icon']->value;?>
,
								selectedMod: selectedMod,
								modal: 1
							}),
							function () {
								$(this).tikiModal().parents(".modal").trigger("tiki.modal.redraw");
								if (jqueryTiki.chosen) {
									$(this).applyChosen();
								}
								popupPluginForm("<?php echo $_smarty_tpl->tpl_vars['area_id']->value;?>
","<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
",<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
,"<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pageName']->value,'javascript' ));?>
",<?php echo $_smarty_tpl->tpl_vars['pluginArgsJSON']->value;?>
,"<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bodyContent']->value,'javascript' ));?>
",<?php echo $_smarty_tpl->tpl_vars['edit_icon']->value;?>
, selectedMod);
							}
						).tikiModal(tr("Loading..."));
					});
				<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php }?>
		</form>
		<?php $_smarty_tpl->_subTemplateRender("file:plugin/quick_add_references.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
<?php
}
}
/* {/block "content"} */
}
