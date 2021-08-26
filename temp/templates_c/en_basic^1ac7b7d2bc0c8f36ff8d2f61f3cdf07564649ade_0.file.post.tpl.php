<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:49:21
  from 'C:\xampp\htdocs\tikip4k\templates\comment\post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61265871a8da86_46193914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ac7b7d2bc0c8f36ff8d2f61f3cdf07564649ade' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\comment\\post.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:antibot.tpl' => 1,
  ),
),false)) {
function content_61265871a8da86_46193914 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152154041461265871a53e64_59219702', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113679882161265871a5d129_98301935', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout_view.tpl');
}
/* {block "title"} */
class Block_152154041461265871a53e64_59219702 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_152154041461265871a53e64_59219702',
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
class Block_113679882161265871a5d129_98301935 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_113679882161265871a5d129_98301935',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.object_link.php','function'=>'smarty_function_object_link',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.textarea.php','function'=>'smarty_block_textarea',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.trackeroutput.php','function'=>'smarty_function_trackeroutput',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),));
?>

	<?php if ($_smarty_tpl->tpl_vars['threadId']->value) {?>
		<div class="alert alert-success">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_comments_moderation'] == 'y') {?>
				<p>Your message has been queued for approval and will be posted after a moderator approves it.</p>
			<?php } else { ?>
				<p>Your comment was posted.</p>
			<?php }?>
			<p>Go back to: <?php echo smarty_function_object_link(array('type'=>$_smarty_tpl->tpl_vars['type']->value,'objectId'=>$_smarty_tpl->tpl_vars['objectId']->value),$_smarty_tpl);?>
</p>
		</div>
	<?php } else { ?>
		<form method="post" action="<?php echo smarty_function_service(array('controller'=>'comment','action'=>'post'),$_smarty_tpl);?>
" role="form">
			<div class="card">
				<?php if (!$_smarty_tpl->tpl_vars['user']->value || $_smarty_tpl->tpl_vars['prefs']->value['feature_comments_post_as_anonymous'] == 'y') {?>
					<div class="card-header">
						<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'warning','title'=>"Anonymous posting"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Anonymous posting"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
								You are currently registered on this site. This section is optional. By filling it, you will not link this post to your account and preserve your anonymity.
							<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Anonymous posting"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php }?>
						<div class="form-inline">
							<div class="form-group row">
								<label class="clearfix" for="comment-anonymous_name">Name</label>
								<input type="text" name="anonymous_name" id="comment-anonymous_name" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['anonymous_name']->value ));?>
"/>
							</div>
							<div class="form-group row">
								<label class="clearfix" for="comment-anonymous_email">Email</label>
								<input type="email" id="comment-anonymous_email" name="anonymous_email" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['anonymous_email']->value ));?>
"/>
							</div>
							<div class="form-group row">
								<label class="clearfix" for="comment-anonymous_website">Website</label>
								<input type="url" id="comment-anonymous_website" name="anonymous_website" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['anonymous_website']->value ));?>
"/>
							</div>
						</div>
					</div>
				<?php }?>
				<div class="card-body">
					<input type="hidden" name="type" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['type']->value ));?>
"/>
					<input type="hidden" name="objectId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['objectId']->value ));?>
"/>
					<input type="hidden" name="parentId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['parentId']->value ));?>
"/>
					<input type="hidden" name="post" value="1"/>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['comments_notitle'] != 'y') {?>
						<div class="form-group row">
							<label for="comment-title" class="clearfix comment-title">Title</label>
							<input type="text" id="comment-title" name="title" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value ));?>
" class="form-control" placeholder="Comment title"/>
						</div>
					<?php }?>
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'rows', null, null);
if ($_smarty_tpl->tpl_vars['type']->value == 'forum') {
echo $_smarty_tpl->tpl_vars['prefs']->value['default_rows_textarea_forum'];
} else {
echo $_smarty_tpl->tpl_vars['prefs']->value['default_rows_textarea_comment'];
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('textarea', array('codemirror'=>'true','syntax'=>'tiki','name'=>"data",'comments'=>"y",'_wysiwyg'=>"n",'rows'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'rows'),'class'=>"form-control wikiedit",'placeholder'=>"Post new comment..."));
$_block_repeat=true;
echo smarty_block_textarea(array('codemirror'=>'true','syntax'=>'tiki','name'=>"data",'comments'=>"y",'_wysiwyg'=>"n",'rows'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'rows'),'class'=>"form-control wikiedit",'placeholder'=>"Post new comment..."), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value ));
$_block_repeat=false;
echo smarty_block_textarea(array('codemirror'=>'true','syntax'=>'tiki','name'=>"data",'comments'=>"y",'_wysiwyg'=>"n",'rows'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'rows'),'class'=>"form-control wikiedit",'placeholder'=>"Post new comment..."), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches'] == 'y') {?>
						<div id="watch_thread_on_reply">
							<input id="watch_thread" type="checkbox" name="watch" value="y"<?php if ($_REQUEST['watch'] == 'y') {?> checked="checked"<?php }?>> <label for="watch_thread">Send me an email when someone replies</label>
						</div>
					<?php }?>
				</div>
				<div class="card-footer">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_antibot'] == 'y') {?>
						<?php $_smarty_tpl->_assignInScope('showmandatory', 'y');?>
						<?php $_smarty_tpl->_subTemplateRender('file:antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					<?php }?>
					<input type="hidden"  name="return_url" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['return_url']->value ));?>
">
					<?php if (empty($_smarty_tpl->tpl_vars['version']->value)) {?>
						<div class="form-group comment-post">
							<input type="submit" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_antibot'] == 'y' && $_smarty_tpl->tpl_vars['user']->value == '' && $_smarty_tpl->tpl_vars['prefs']->value['recaptcha_enabled'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['recaptcha_version'] == '3') {?>onclick="genToken();"<?php }?> class="comment-post btn btn-primary" value="Post"/>
							<div class="btn btn-link">
								<a href="#" onclick="$(this).closest('.comment-container').reload(); $(this).closest('.ui-dialog').remove(); return false;">Cancel</a>
							</div>
						</div>
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['diffInfo']->value) {?>
							<div class="card bg-light">
								<div class="card-body">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['diffInfo']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
										<label><?php echo $_smarty_tpl->tpl_vars['info']->value['fieldName'];?>
</label> 
										<?php echo smarty_function_trackeroutput(array('fieldId'=>$_smarty_tpl->tpl_vars['info']->value['fieldId'],'list_mode'=>'y','history'=>'y','process'=>'y','oldValue'=>$_smarty_tpl->tpl_vars['info']->value['value'],'value'=>$_smarty_tpl->tpl_vars['info']->value['new'],'diff_style'=>'sidediff'),$_smarty_tpl);?>

									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
							</div>
						<?php }?>
						<div class="submit">
							<input type="hidden" name="version" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['version']->value ));?>
"/>
							<input type="submit" class="comment-post btn btn-secondary" value="Post"/>
						</div>
					<?php }?>
				</div>
			</div>
		</form>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_syntax_highlighter'] == 'y') {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			//Synchronize textarea and codemirror before comment is posted
			$(".comment-form>form, .add-comment-zone>form").submit(function(event){
				var $textarea = $(event.target).find("textarea.wikiedit"); //retrieve the text area from the form that is submitted
				if (typeof syntaxHighlighter.sync === 'function') {
					syntaxHighlighter.sync($textarea);
				}
			});
		<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }
}
}
/* {/block "content"} */
}
