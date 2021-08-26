<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:14:13
  from 'C:\xampp\htdocs\tikip4k\templates\wiki_edit_actions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612642259d4f70_62958418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '196d363c94158fc1f6acff9bad8e0f4e2138ec42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\wiki_edit_actions.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612642259d4f70_62958418 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="actions">
	<input type="hidden" name="no_bl" value="y">
	<input type="submit" class="wikiaction btn btn-info previewBtn" title="Preview your changes." name="preview" value="Preview" onclick="needToConfirm=false;">
	<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8') != 'sandbox' || $_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>
		<?php if (!(isset($_smarty_tpl->tpl_vars['page_badchars_display']->value)) || $_smarty_tpl->tpl_vars['prefs']->value['wiki_badchar_prevent'] != 'y') {?>
			<?php if ($_smarty_tpl->tpl_vars['translation_mode']->value == 'y') {?>
				<input type="hidden" name="source_page" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['source_page']->value ));?>
">
				<input type="hidden" name="target_page" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['target_page']->value ));?>
">
				<input type="submit" class="wikiaction tips btn btn-primary" title="Edit wiki page|Save the page as a partial translation." name="partial_save" value="Partial Translation" onclick="needToConfirm=false">
				<input type="submit" class="wikiaction tips btn btn-primary" title="Edit wiki page|Save the page as a completed translation." name="save" value="Complete Translation" onclick="needToConfirm=false">
			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_minor']->value == 'y' && mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8') != 'sandbox' && $_smarty_tpl->tpl_vars['prefs']->value['wiki_edit_minor'] != 'n') {?>
					<input type="submit" class="wikiaction tips btn btn-primary" name="minor" title="Edit wiki page|<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_watch_minor']) {?>Save the page, but do not count it as new content to be translated.<?php } else { ?>Save the page, but do not send notifications and do not count it as new content to be translated.<?php }?>" value="Save Minor Edit" onclick="needToConfirm=false;">
				<?php }?>
				<input type="submit" class="wikiaction btn btn-primary" title="Save the page." name="save" value="Save" onclick="needToConfirm=false;">
			<?php }?>
		<?php }?>
		<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8') != 'sandbox') {?>
			<input type="submit" class="wikiaction btn btn-secondary" title="Cancel the edit (changes will be lost)." name="cancel_edit" value="Cancel Edit" onclick="needToConfirm=false;">
		<?php }?>
	<?php }?>
</div>
<?php }
}
