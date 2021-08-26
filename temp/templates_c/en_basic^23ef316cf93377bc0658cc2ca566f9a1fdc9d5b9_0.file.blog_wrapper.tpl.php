<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:04:59
  from 'C:\xampp\htdocs\tikip4k\templates\blog_wrapper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61263ffb7d9125_77327777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23ef316cf93377bc0658cc2ca566f9a1fdc9d5b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\blog_wrapper.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:blog_post_postbody_title.tpl' => 1,
    'file:blog_post_postbody_content.tpl' => 1,
    'file:show_copyright.tpl' => 2,
    'file:blog_post_status.tpl' => 1,
    'file:blog_post_navigation.tpl' => 1,
  ),
),false)) {
function content_61263ffb7d9125_77327777 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<a id="postId<?php echo $_smarty_tpl->tpl_vars['post_info']->value['postId'];?>
"></a>
	<?php $_smarty_tpl->_subTemplateRender('file:blog_post_postbody_title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender('file:blog_post_postbody_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php if ($_smarty_tpl->tpl_vars['blog_post_context']->value != 'excerpt' || $_smarty_tpl->tpl_vars['blog_post_context']->value != 'view_blog') {?>
		<?php if ($_smarty_tpl->tpl_vars['blog_post_context']->value != 'print') {?>
			<footer class="postfooter card-footer clearfix">
				
				<?php if ($_smarty_tpl->tpl_vars['blog_post_context']->value != 'plugin_preview') {?>
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'copyright_section', null, null);?>
						<?php $_smarty_tpl->_subTemplateRender('file:show_copyright.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('copyright_context'=>"blogpost"), 0, false);
?>
					<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					
					<?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'copyright_section') != '') {?>
						<div class="form-text">
							<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'copyright_section');?>

						</div>
					<?php }?>
				<?php }?>
				<?php $_smarty_tpl->_subTemplateRender('file:blog_post_status.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php $_smarty_tpl->_subTemplateRender('file:blog_post_navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</footer>
		<?php } else { ?>
			
			<?php if ($_smarty_tpl->tpl_vars['blog_post_context']->value != 'plugin_preview') {?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'copyright_section', null, null);?>
					<?php $_smarty_tpl->_subTemplateRender('file:show_copyright.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('copyright_context'=>"blogpost"), 0, true);
?>
				<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				
				<?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'copyright_section') != '') {?>
					<div class="form-text">
						<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'copyright_section');?>

					</div>
				<?php }?>
			<?php }?>
		<?php }?>
	<?php }
}
}
