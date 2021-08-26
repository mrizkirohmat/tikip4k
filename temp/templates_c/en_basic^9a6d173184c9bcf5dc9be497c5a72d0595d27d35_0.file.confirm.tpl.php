<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:14:49
  from 'C:\xampp\htdocs\tikip4k\templates\confirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61265059985dd8_45998376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a6d173184c9bcf5dc9be497c5a72d0595d27d35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\confirm.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61265059985dd8_45998376 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18304741406126505995c1c8_55499906', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1949671805612650599641b7_43907154', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'internal/ajax.tpl');
}
/* {block "title"} */
class Block_18304741406126505995c1c8_55499906 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18304741406126505995c1c8_55499906',
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
class Block_1949671805612650599641b7_43907154 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1949671805612650599641b7_43907154',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.query.php','function'=>'smarty_function_query',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),));
?>

	<div class="card">
		<?php if (!empty($_smarty_tpl->tpl_vars['confirmation_text']->value)) {?>
			<div class="card-header">
				<?php echo smarty_function_icon(array('name'=>'information','style'=>"vertical-align:middle"),$_smarty_tpl);?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['confirmation_text']->value ));?>

			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['confirm_detail']->value)) {?>
			<?php if (is_array($_smarty_tpl->tpl_vars['confirm_detail']->value)) {?>
				<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirm_detail']->value, 'detail');
$_smarty_tpl->tpl_vars['detail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['detail']->value) {
$_smarty_tpl->tpl_vars['detail']->do_else = false;
?>
						<li>
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['detail']->value ));?>

						</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			<?php } else { ?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['confirm_detail']->value ));?>

			<?php }?>
		<?php }?>
		<div class="card-body">
			<form id='confirm' action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['confirmaction']->value ));?>
" method="post">
				<?php echo smarty_function_query(array('_type'=>'form_input','_keepall'=>'y'),$_smarty_tpl);?>

				<?php echo smarty_function_ticket(array('mode'=>'confirm'),$_smarty_tpl);?>

				
				<button
					type="submit"
					class="btn btn-success"
					<?php if ((isset($_smarty_tpl->tpl_vars['confirmSubmitName']->value))) {?>name="<?php echo $_smarty_tpl->tpl_vars['confirmSubmitName']->value;?>
"<?php }?>
					<?php if ((isset($_smarty_tpl->tpl_vars['confirmSubmitValue']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['confirmSubmitValue']->value;?>
"<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['ajax']->value)) {?>onclick="confirmAction(event)"<?php }?>
				>
					Confirm action
				</button>
				<?php echo smarty_function_button(array('href'=>((string)$_SERVER['HTTP_REFERER']),'_class'=>"btn-link",'_icon_name'=>"reply",'_text'=>"Go back"),$_smarty_tpl);?>

				<?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['tikiIndex'] ));
$_prefixVariable1=ob_get_clean();
echo smarty_function_button(array('href'=>$_prefixVariable1,'_class'=>"btn-link",'_icon_name'=>"home",'_text'=>"Return to home page"),$_smarty_tpl);?>

			</form>
		</div>
	</div>
<?php
}
}
/* {/block "content"} */
}
