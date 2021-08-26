<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:34:41
  from 'C:\xampp\htdocs\tikip4k\templates\feedback\action.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61265501b57298_39836716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcdb0fadd98627cca4c8cf68e13bc38b2a216ae2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\feedback\\action.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61265501b57298_39836716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),));
?>


<div id="alert-wrapper">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fb']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>((string)$_smarty_tpl->tpl_vars['item']->value['type']),'title'=>((string)$_smarty_tpl->tpl_vars['item']->value['title'])));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>((string)$_smarty_tpl->tpl_vars['item']->value['type']),'title'=>((string)$_smarty_tpl->tpl_vars['item']->value['title'])), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['mes'])) {?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['mes'] ));?>

			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items'])) && count($_smarty_tpl->tpl_vars['item']->value['items']) > 0) {?>
				<ul>
					<li>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'name', true);
$_smarty_tpl->tpl_vars['name']->iteration = 0;
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
$_smarty_tpl->tpl_vars['name']->iteration++;
$_smarty_tpl->tpl_vars['name']->last = $_smarty_tpl->tpl_vars['name']->iteration === $_smarty_tpl->tpl_vars['name']->total;
$__foreach_name_1_saved = $_smarty_tpl->tpl_vars['name'];
?>
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));
if (!$_smarty_tpl->tpl_vars['name']->last) {?>, <?php }?>
						<?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</li>
				</ul>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['toMsg'])) {?>
				<br>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['toMsg'] ));?>

			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['toList'])) && count($_smarty_tpl->tpl_vars['item']->value['toList']) > 0) {?>
				<ul>
					<li>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['toList'], 'toName', true);
$_smarty_tpl->tpl_vars['toName']->iteration = 0;
$_smarty_tpl->tpl_vars['toName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['toName']->value) {
$_smarty_tpl->tpl_vars['toName']->do_else = false;
$_smarty_tpl->tpl_vars['toName']->iteration++;
$_smarty_tpl->tpl_vars['toName']->last = $_smarty_tpl->tpl_vars['toName']->iteration === $_smarty_tpl->tpl_vars['toName']->total;
$__foreach_toName_2_saved = $_smarty_tpl->tpl_vars['toName'];
?>
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['toName']->value ));
if (!$_smarty_tpl->tpl_vars['toName']->last) {?>, <?php }?>
						<?php
$_smarty_tpl->tpl_vars['toName'] = $__foreach_toName_2_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</li>
				</ul>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['timeoutMsg'])) {?>
				<h5>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['timeoutMsg'] ));?>

				</h5>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['timer'])) {?>
				<div style="text-align: center">
					<em><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>(('<span id="timer-seconds">').($_smarty_tpl->tpl_vars['item']->value['timer'])).('</span>')));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>(('<span id="timer-seconds">').($_smarty_tpl->tpl_vars['item']->value['timer'])).('</span>')), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Redirecting in %0 seconds<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>(('<span id="timer-seconds">').($_smarty_tpl->tpl_vars['item']->value['timer'])).('</span>')), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></em>
				</div>
			<?php }?>
		<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>((string)$_smarty_tpl->tpl_vars['item']->value['type']),'title'=>((string)$_smarty_tpl->tpl_vars['item']->value['title'])), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
