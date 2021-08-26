<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:57:38
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-copypage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264c5201c247_42989856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84b37340f2b327a13ec04b2e4a9e45b526d0e8ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-copypage.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61264c5201c247_42989856 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array());
$_block_repeat=true;
echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Copy page: <?php echo $_smarty_tpl->tpl_vars['page']->value;
$_block_repeat=false;
echo smarty_block_title(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="t_navbar">
	<?php $_smarty_tpl->_assignInScope('thispage', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,'url' )));?>
	<?php echo smarty_function_button(array('href'=>"tiki-index.php?page=".((string)$_smarty_tpl->tpl_vars['thispage']->value),'_text'=>"View page"),$_smarty_tpl);?>

</div>

<form action="tiki-copypage.php" method="post" class="form-horizontal">
	<input type="hidden" name="page" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value ));?>
">
	<?php if ((isset($_smarty_tpl->tpl_vars['page_badchars_display']->value))) {?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_badchar_prevent'] == 'y') {?>
			<div class="form-group row">
				<div class="col-sm-10"><br>
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'errors','title'=>"Invalid page name"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Invalid page name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page_badchars_display']->value ))));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page_badchars_display']->value ))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>The page name specified contains unallowed characters. It will not be possible to save the page until those are removed: <strong>%0</strong><?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page_badchars_display']->value ))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Invalid page name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				</div>
			</div>
		<?php } else { ?>
			<div class="form-group row">
				<div class="col-sm-12">
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'tip','title'=>"Tip"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page_badchars_display']->value ))));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page_badchars_display']->value ))), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>The page name specified contains characters that may render the page hard to access. You may want to consider removing those: <strong>%0</strong><?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page_badchars_display']->value ))), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				</div>
			</div>
			<input type="hidden" name="badname" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['newname']->value ));?>
">
			<input type="submit" class="btn btn-primary btn-sm" name="confirm" value="Use this name anyway">
		<?php }?>
	<?php } elseif ((isset($_smarty_tpl->tpl_vars['msg']->value))) {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'errors'));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'errors'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

		<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'errors'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>

	<div class="form-group row">
		<label class="col-sm-3 col-form-label">New name</label>
		<div class="col-sm-7">
			<input type='text' id='newpage' name='newpage' size='40' value='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['newname']->value ));?>
' class="form-control">
		</div>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_add_object']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_categories'] == 'y') {?>
		<div class="form-group row">
			<label class="col-sm-3 form-check-label" for="duplicate_categories">Duplicate categories</label>
			<div class="col-sm-7">
				<div class="form-check">
					<input type="checkbox" name="dupCateg" class="form-check-input" id="duplicate_categories" value="y" checked="checked">
				</div>
			</div>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_freetags'] == 'y') {?>
		<div class="form-group row">
			<label class="col-sm-3 form-check-label" for="duplicate_freetags">Duplicate tags</label>
			<div class="col-sm-7">
				<div class="form-check">
					<input type="checkbox" class="form-check-input" name="dupTags" id="duplicate_freetags" value="y" checked="checked">
				</div>
			</div>
		</div>
	<?php }?>

	<div class="form-group row">
		<label class="col-sm-3 col-form-label"></label>
		<div class="col-sm-7">
			<input type="submit" class="btn btn-primary btn-sm" name="copy" value="Copy">
		</div>
	</div>
</form>
<?php }
}
