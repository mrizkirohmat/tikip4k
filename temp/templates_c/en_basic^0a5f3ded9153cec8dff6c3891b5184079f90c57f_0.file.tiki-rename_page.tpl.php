<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:34:19
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-rename_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612654ebeb3212_14080421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a5f3ded9153cec8dff6c3891b5184079f90c57f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-rename_page.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612654ebeb3212_14080421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array());
$_block_repeat=true;
echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Rename page: <?php echo $_smarty_tpl->tpl_vars['page']->value;
$_block_repeat=false;
echo smarty_block_title(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="navbar" role="navigation">
	<?php $_smarty_tpl->_assignInScope('thispage', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,'url' )));?>
	<?php echo smarty_function_button(array('href'=>"tiki-index.php?page=".((string)$_smarty_tpl->tpl_vars['thispage']->value),'_icon_name'=>"file",'_class'=>"btn btn-link navbar-btn",'_text'=>"View page"),$_smarty_tpl);?>

</div>

<form action="tiki-rename_page.php" method="post" role="form" class="form-inline mt-3">
	<input type="hidden" name="page" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value ));?>
">
	<?php if ((isset($_smarty_tpl->tpl_vars['page_badchars_display']->value))) {?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_badchar_prevent'] == 'y') {?>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'errors','title'=>"Error"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Error"), null, $_smarty_tpl, $_block_repeat);
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
echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Error"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php } else { ?>
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
	<label for="newpage" class="col-form-label mr-2">New name</label>
		<input type='text' id='newpage' name='newpage' class="form-control mr-3" value='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['newname']->value ));?>
'>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_pagealias'] == 'y') {?>
				<input type='checkbox' id='semantic_alias' name='semantic_alias' value='y' class="mr-2"> Redirect original page
				<a tabindex="0" target="_blank" data-toggle="popover" data-trigger="hover" title="301 Redirect - 'moved permanently' HTTP response status code" data-content="Create an SEO-friendly, automatic redirect from old page name to new page name (ex.: for search engines or users that may have bookmarked the page)">
					<?php echo smarty_function_icon(array('name'=>'information'),$_smarty_tpl);?>

				</a>
			<?php }?>

		<input type="submit" class="btn btn-primary ml-3" name="rename" value="Rename">

</form>
<?php }
}
