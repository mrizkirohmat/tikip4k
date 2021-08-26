<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:36:47
  from 'C:\xampp\htdocs\tikip4k\templates\freetag_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126638fd4ff22_75354405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbc60e3c0a33e8709344beb7afd0418d115da663' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\freetag_list.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126638fd4ff22_75354405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),));
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_view_freetags']->value == 'y' && (isset($_smarty_tpl->tpl_vars['freetags']->value['data'][0]))) {?>
	<div class="freetaglist"><?php echo smarty_function_icon(array('name'=>"tags",'class'=>"tips btn btn-link btn-sm",'title'=>":Browse Tags",'href'=>"tiki-browse_freetags.php"),$_smarty_tpl);?>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['freetags']->value['data'], 'taginfo');
$_smarty_tpl->tpl_vars['taginfo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['taginfo']->value) {
$_smarty_tpl->tpl_vars['taginfo']->do_else = false;
?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'tagurl', null, null);
if ((strstr($_smarty_tpl->tpl_vars['taginfo']->value['tag'],' '))) {?>"<?php echo $_smarty_tpl->tpl_vars['taginfo']->value['tag'];?>
"<?php } else {
echo $_smarty_tpl->tpl_vars['taginfo']->value['tag'];
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php if ((isset($_smarty_tpl->tpl_vars['links_inactive']->value)) && $_smarty_tpl->tpl_vars['links_inactive']->value == 'y') {?>
				<a class="btn-primary btn-sm" href="#"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['taginfo']->value['tag'] ));?>
</a>
			<?php } else { ?>
				<a class="label label-default" href="tiki-browse_freetags.php?tag=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tagurl'),'url' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['taginfo']->value['tag'] ));?>
</a>
				<?php if ((isset($_smarty_tpl->tpl_vars['deleteTag']->value)) && $_smarty_tpl->tpl_vars['tiki_p_unassign_freetags']->value == 'y') {?>
					<a class="tips" title=":Untag <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['taginfo']->value['tag'] ));?>
" href="<?php echo $_SERVER['REQUEST_URI'];
if (strstr($_SERVER['REQUEST_URI'],'?')) {?>&amp;<?php } else { ?>?<?php }?>delTag=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['taginfo']->value['tag'],'url' ));?>
">
						<?php echo smarty_function_icon(array('name'=>'remove','alt'=>"Untag"),$_smarty_tpl);?>

					</a>&nbsp;
				<?php }?>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php if ((isset($_smarty_tpl->tpl_vars['freetags_mixed_lang']->value)) && $_smarty_tpl->tpl_vars['freetags_mixed_lang']->value) {?>
			(<a href="<?php echo $_smarty_tpl->tpl_vars['freetags_mixed_lang']->value;?>
">Translate tags</a>)
		<?php }?>
	</div>
<?php }
}
}
