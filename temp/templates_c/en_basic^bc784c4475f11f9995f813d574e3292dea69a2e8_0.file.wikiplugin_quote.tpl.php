<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:24:47
  from 'C:\xampp\htdocs\tikip4k\templates\wiki-plugins\wikiplugin_quote.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612652afb43ba6_19875902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc784c4475f11f9995f813d574e3292dea69a2e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\wiki-plugins\\wikiplugin_quote.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612652afb43ba6_19875902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.username.php','function'=>'smarty_modifier_username',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_date.php','function'=>'smarty_modifier_tiki_short_date',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),));
?>
<div class='quote'>
	<div class='quoteheader'>
		<?php if ($_smarty_tpl->tpl_vars['replyto']->value) {?>
			<cite><?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['replyto']->value);?>
</cite> wrote<?php if ($_smarty_tpl->tpl_vars['date']->value) {?> on <?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['date']->value);
}?>:
		<?php } else { ?>
			<i class="fas fa-quote-left" aria-hidden="true"></i>
		<?php }?>
	</div>
	<div class='quotebody'>
		<?php echo $_smarty_tpl->tpl_vars['data']->value;?>

		<?php if ($_smarty_tpl->tpl_vars['source_url']->value) {?>
			<div class='quoteurl'>
				Source: <a target="_blank" class="wiki external" href="<?php echo $_smarty_tpl->tpl_vars['source_url']->value;?>
"><cite><?php echo $_smarty_tpl->tpl_vars['source_url']->value;?>
</cite></a><?php echo smarty_function_icon(array('name'=>'link-external'),$_smarty_tpl);?>

			</div>
		<?php }?>
	</div>
</div>
<?php }
}
