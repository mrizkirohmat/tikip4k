<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:05:00
  from 'C:\xampp\htdocs\tikip4k\templates\comment\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61263ffcec2255_94399796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b65dc6bd0faa6b6aac030cc48165b8b979515fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\comment\\list.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comment/list_inner.tpl' => 1,
  ),
),false)) {
function content_61263ffcec2255_94399796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188984184461263ffce90b67_42002834', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165169096161263ffce9d136_54692047', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout_view.tpl');
}
/* {block "title"} */
class Block_188984184461263ffce90b67_42002834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_188984184461263ffce90b67_42002834',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.bootstrap_modal.php','function'=>'smarty_function_bootstrap_modal',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),));
?>

	<h3>Comments
		<span class="lock">
			<?php if (!$_smarty_tpl->tpl_vars['parentId']->value && $_smarty_tpl->tpl_vars['allow_lock']->value) {?>
				<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'comment','action'=>'lock','type'=>$_smarty_tpl->tpl_vars['type']->value,'objectId'=>$_smarty_tpl->tpl_vars['objectId']->value),$_smarty_tpl);?>
" class="btn btn-link btn-sm tips" title="Comments unlocked:Lock comments">
					<?php echo smarty_function_icon(array('name'=>"unlock"),$_smarty_tpl);?>

				</a>
			<?php }?>
			<?php if (!$_smarty_tpl->tpl_vars['parentId']->value && $_smarty_tpl->tpl_vars['allow_unlock']->value) {?>
				<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'comment','action'=>'unlock','type'=>$_smarty_tpl->tpl_vars['type']->value,'objectId'=>$_smarty_tpl->tpl_vars['objectId']->value),$_smarty_tpl);?>
" class="btn btn-link btn-sm tips" title="Comments locked:Unlock comments">
					<?php echo smarty_function_icon(array('name'=>"lock"),$_smarty_tpl);?>

				</a>
			<?php }?>
		</span>
	</h3>
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_165169096161263ffce9d136_54692047 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_165169096161263ffce9d136_54692047',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),));
?>

	<?php if ($_smarty_tpl->tpl_vars['allow_post']->value && $_smarty_tpl->tpl_vars['prefs']->value['comments_sort_mode'] == 'commentDate_desc') {?>
		<div class="submit">
			<div class="buttons comment-form <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_comments_form_displayed_default'] == 'y') {?>autoshow<?php }?>">
				<a class="btn btn-secondary custom-handling" href="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'post','type'=>$_smarty_tpl->tpl_vars['type']->value,'objectId'=>$_smarty_tpl->tpl_vars['objectId']->value),$_smarty_tpl);?>
" data-target="#add-comment-zone-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['objectId']->value,' ',''),',',''),'attr' ));?>
">Post new comment</a>
			</div>
		</div>
		<div id="add-comment-zone-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['objectId']->value,' ',''),',',''),'attr' ));?>
" class="add-comment-zone"></div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['cant']->value > 0) {?>
		<?php $_smarty_tpl->_subTemplateRender("file:comment/list_inner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php echo '<script'; ?>
 type="text/javascript">
			$(function() {
				$('#comment-container').applyColorbox();
			})
		<?php echo '</script'; ?>
>
	<?php } else { ?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'info'));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'info'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			There are no comments at this time.
		<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'info'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['allow_post']->value && $_smarty_tpl->tpl_vars['prefs']->value['comments_sort_mode'] != 'commentDate_desc') {?>
		<div class="submit">
			<div class="buttons comment-form <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_comments_form_displayed_default'] == 'y') {?>autoshow<?php }?>">
				<a class="btn btn-secondary custom-handling" href="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'post','type'=>$_smarty_tpl->tpl_vars['type']->value,'objectId'=>$_smarty_tpl->tpl_vars['objectId']->value),$_smarty_tpl);?>
" data-target="#add-comment-zone-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['objectId']->value,' ',''),',',''),'attr' ));?>
">Post new comment</a>
			</div>
		</div>
		<div id="add-comment-zone-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['objectId']->value,' ',''),',',''),'attr' ));?>
" class="add-comment-zone"></div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_inline_comments'] == 'y') {?>
		<a id="note-editor-comment" class="alert alert-info" style="display:none;" href="#">Add Comment</a>
	<?php }?>

	<?php echo '<script'; ?>
 type="text/javascript">
		var ajax_url = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
';
		var objectId = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['objectId']->value,'javascript' ));?>
';
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
