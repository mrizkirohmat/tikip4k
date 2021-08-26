<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:05:34
  from 'C:\xampp\htdocs\tikip4k\templates\menu\clone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126401ece1dc9_93638682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be4dc36e272e56db4f1674f28226e38353fe9be9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\menu\\clone.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126401ece1dc9_93638682 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21014214726126401ecc2986_32134760', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6314741856126401eccc1c6_60425932', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout_view.tpl');
}
/* {block "title"} */
class Block_21014214726126401ecc2986_32134760 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_21014214726126401ecc2986_32134760',
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
class Block_6314741856126401eccc1c6_60425932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6314741856126401eccc1c6_60425932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),));
?>

	<form action="<?php echo smarty_function_service(array('controller'=>'menu','action'=>'clone'),$_smarty_tpl);?>
" method="post" role="form">
		<div class="form-group row mx-2">
			<label for="name" class="col-form-label">
				Name
			</label>
			<input class="form-control" name="name" id="name" value="<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['name'] ))));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['name'] ))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>%0 Copy<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['name'] ))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>">
			<div class="small">
				<?php if ($_smarty_tpl->tpl_vars['info']->value['menuId']) {?>
					Clone of Menu Id: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['menuId'] ));?>

				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['symbol']->value) {?>
					<a class="btn btn-link btn-sm tips" title="Symbol Information|Symbol: <strong><?php echo $_smarty_tpl->tpl_vars['symbol']->value['object'];?>
</strong><br>Profile Name: <strong><?php echo $_smarty_tpl->tpl_vars['symbol']->value['profile'];?>
</strong><br>Profile Source: <strong><?php echo $_smarty_tpl->tpl_vars['symbol']->value['domain'];?>
</strong>">
						<?php echo smarty_function_icon(array('name'=>"information"),$_smarty_tpl);?>

					</a>
				<?php }?>
			</div>
		</div>
		<div class="form-group row mx-2">
			<label for="description" class="col-form-label">
				Description
			</label>
			<textarea name="description" id="description" class="form-control"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['description'] ));?>
</textarea>
		</div>

		<div class="submit">
			<?php echo smarty_function_ticket(array('mode'=>'confirm'),$_smarty_tpl);?>

			<input type="hidden" name="menuId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['menuId'] ));?>
">
			<input type="submit" class="btn btn-primary" name="clone" value="Clone">
		</div>
	</form>
<?php
}
}
/* {/block "content"} */
}
