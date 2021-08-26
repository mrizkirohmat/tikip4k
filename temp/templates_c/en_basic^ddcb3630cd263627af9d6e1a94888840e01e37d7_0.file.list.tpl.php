<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:44:13
  from 'C:\xampp\htdocs\tikip4k\templates\managestream\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126654dbc1cc6_07342393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddcb3630cd263627af9d6e1a94888840e01e37d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\managestream\\list.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126654dbc1cc6_07342393 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17353118636126654db86c87_98392282', "navigation");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11640763186126654db9d431_16791770', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16196906106126654dba1674_61962652', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout_view.tpl');
}
/* {block "navigation"} */
class Block_17353118636126654db86c87_98392282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_17353118636126654db86c87_98392282',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.bootstrap_modal.php','function'=>'smarty_function_bootstrap_modal',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),));
?>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>
		<div class="t_navbar mb-4">
			<div class="btn-group">
				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php echo smarty_function_icon(array('name'=>"create"),$_smarty_tpl);?>
 Create
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'managestream','action'=>'sample'),$_smarty_tpl);?>
">
						Sample Rule
					</a>
					<a class="dropdown-item" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'managestream','action'=>'record'),$_smarty_tpl);?>
">
						Basic Rule (Record Event)
					</a>
					<a class="dropdown-item" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'managestream','action'=>'tracker_filter'),$_smarty_tpl);?>
">
						Tracker Rule
					</a>
					<a class="dropdown-item" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'managestream','action'=>'advanced'),$_smarty_tpl);?>
">
						Advanced Rule
					</a>
				</div>
			</div>
			<?php echo smarty_function_button(array('href'=>"tiki-admin.php?page=community",'_icon_name'=>"settings",'_text'=>"Community",'_class'=>"tips",'_title'=>":Community Control Panel"),$_smarty_tpl);?>

			
			<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_jsfile('lib/dracula/raphael-min.js',true);?>

			<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_jsfile('lib/dracula/graffle.js',true);?>

			<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_jsfile('lib/dracula/graph.js',true);?>

			<button href="#" id="graph-draw" class="btn btn-primary"><?php echo smarty_function_icon(array('name'=>"image"),$_smarty_tpl);?>
 Event Chain Diagram</button>
			<div id="graph-canvas" class="graph-canvas" data-graph-nodes="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( json_encode($_smarty_tpl->tpl_vars['event_graph']->value['nodes']) ));?>
" data-graph-edges="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( json_encode($_smarty_tpl->tpl_vars['event_graph']->value['edges']) ));?>
"></div>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		$('#graph-draw').click(function(e) {
			var width = $window.width() - 50;
			var height = $window.height() - 130;
			if (screen.width < 768) width = 1400;
			$('#graph-canvas')
				.empty()
				.css('width', width)
				.css('height', height)
				.dialog({
					title: "Events",
					width: width + 30,
					height: height + 30
				})
				.drawGraph();
			return false;
		});
	<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		</div>
	<?php }
}
}
/* {/block "navigation"} */
/* {block "title"} */
class Block_11640763186126654db9d431_16791770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11640763186126654db9d431_16791770',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),));
?>

	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array());
$_block_repeat=true;
echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Activity Rules<?php $_block_repeat=false;
echo smarty_block_title(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_16196906106126654dba1674_61962652 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16196906106126654dba1674_61962652',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.actions.php','function'=>'smarty_block_actions',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.bootstrap_modal.php','function'=>'smarty_function_bootstrap_modal',),));
?>

	<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value) {?>table-responsive<?php }?>"> 
		<table class="table table-hover">
			<tr>
				<th>ID</th>
				<th>Status</th>
				<th>Event Type</th>
				<th>Rule Type</th>
				<th>Description</th>
				<th></th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rules']->value, 'rule');
$_smarty_tpl->tpl_vars['rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rule']->value) {
$_smarty_tpl->tpl_vars['rule']->do_else = false;
?>
				<tr>
					<td class="id">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rule']->value['ruleId'] ));?>

					</td>
					<td class="text">
						<?php if ($_smarty_tpl->tpl_vars['rule']->value['status'] == 'enabled') {?>
							<span class="text-success tips" title=":Enabled"><?php echo smarty_function_icon(array('name'=>"toggle-on"),$_smarty_tpl);?>
</span>
						<?php } elseif ($_smarty_tpl->tpl_vars['rule']->value['status'] == 'disabled') {?>
							<span class="tips" title=":Disabled"><?php echo smarty_function_icon(array('name'=>"toggle-off"),$_smarty_tpl);?>
</span>
						<?php } else { ?>
							<span class="text-warning tips" title=":Unknown"><?php echo smarty_function_icon(array('name'=>"warning"),$_smarty_tpl);?>
</span>
						<?php }?>						
					</td>
					<td class="text">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rule']->value['eventType'] ));?>

					</td>
					<td class="text">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ruleTypes']->value[$_smarty_tpl->tpl_vars['rule']->value['ruleType']] ));?>

					</td>
					<td class="text">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rule']->value['notes'] ));?>

					</td>
					<td class="action">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('actions', array());
$_block_repeat=true;
echo smarty_block_actions(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
							<action><a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['rule']->value['ruleType'] == "sample") {
echo "sample";
} elseif ($_smarty_tpl->tpl_vars['rule']->value['ruleType'] == "record") {
echo "record";
} elseif ($_smarty_tpl->tpl_vars['rule']->value['ruleType'] == "tracker_filter") {
echo "tracker_filter";
} elseif ($_smarty_tpl->tpl_vars['rule']->value['ruleType'] == "advanced") {
echo "advanced";
}
$_prefixVariable1=ob_get_clean();
echo smarty_function_bootstrap_modal(array('controller'=>'managestream','action'=>$_prefixVariable1,'ruleId'=>$_smarty_tpl->tpl_vars['rule']->value['ruleId']),$_smarty_tpl);?>
" data-rule-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rule']->value['ruleId'] ));?>
"><?php echo smarty_function_icon(array('name'=>"edit",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a></action><?php if ($_smarty_tpl->tpl_vars['rule']->value['ruleType'] == "record") {?><action><a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'managestream','action'=>'change_rule_status','ruleId'=>$_smarty_tpl->tpl_vars['rule']->value['ruleId']),$_smarty_tpl);?>
"><?php if ($_smarty_tpl->tpl_vars['rule']->value['status'] == "disabled") {
echo smarty_function_icon(array('name'=>"toggle-on",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Enable"),$_smarty_tpl);
} elseif ($_smarty_tpl->tpl_vars['rule']->value['status'] == "enabled") {
echo smarty_function_icon(array('name'=>"toggle-off",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Disable"),$_smarty_tpl);
}?></a></action><?php }
if ($_smarty_tpl->tpl_vars['rule']->value['ruleType'] == "sample" || $_smarty_tpl->tpl_vars['rule']->value['ruleType'] == "record") {?><action><a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'managestream','action'=>'change_rule_type','ruleId'=>$_smarty_tpl->tpl_vars['rule']->value['ruleId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"exchange",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Change Rule Type"),$_smarty_tpl);?>
</a></action><?php }?><action><a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'managestream','action'=>'delete','ruleId'=>$_smarty_tpl->tpl_vars['rule']->value['ruleId']),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>"delete",'_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Delete"),$_smarty_tpl);?>
</a></action>
						<?php $_block_repeat=false;
echo smarty_block_actions(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
	</div>
<?php
}
}
/* {/block "content"} */
}
