<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:27:56
  from 'C:\xampp\htdocs\tikip4k\templates\modules\mod-shoutbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126455c73b556_14246449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a810bc3865484cdc99048b6996566cf42fc7d50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\modules\\mod-shoutbox.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:antibot.tpl' => 1,
  ),
),false)) {
function content_6126455c73b556_14246449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tikimodule.php','function'=>'smarty_block_tikimodule',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.js_maxlength.php','function'=>'smarty_function_js_maxlength',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.userlink.php','function'=>'smarty_modifier_userlink',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_time.php','function'=>'smarty_modifier_tiki_short_time',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_date.php','function'=>'smarty_modifier_tiki_short_date',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php if ($_smarty_tpl->tpl_vars['tiki_p_view_shoutbox']->value == 'y') {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tikimodule', array('title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"shoutbox",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']));
$_block_repeat=true;
echo smarty_block_tikimodule(array('title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"shoutbox",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

		<?php if ($_smarty_tpl->tpl_vars['tiki_p_post_shoutbox']->value == 'y') {?>
			<?php echo smarty_function_js_maxlength(array('textarea'=>'shout_msg','maxlength'=>255),$_smarty_tpl);?>

			<form action="#" method="post" onsubmit="return verifyForm(this);" id="shout_form">
				<?php if (!empty($_smarty_tpl->tpl_vars['shout_error']->value)) {?><div class="highlight"><?php echo $_smarty_tpl->tpl_vars['shout_error']->value;?>
</div><?php }?>
				<div class="text-center">
					<textarea rows="3" class="form-control form-group tshoutbox" id="shout_msg" name="shout_msg"></textarea>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_antibot'] == 'y' && $_smarty_tpl->tpl_vars['user']->value == '') {?>
						<table><?php $_smarty_tpl->_subTemplateRender("file:antibot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></table>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_socialnetworks'] == 'y' && $_smarty_tpl->tpl_vars['user']->value != '') {?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_twitter_consumer_key'] != '' && $_smarty_tpl->tpl_vars['tweet']->value) {?>
							<div class="form-check"><input type="hidden" name="tweet" value="-1" /><input type="checkbox" class="form-check-input" name="shout_tweet" value='1' /> Tweet with Twitter</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_facebook_application_id'] != '' && $_smarty_tpl->tpl_vars['facebook']->value) {?>
							<div class="form-check"><input type="hidden" name="facebook" value="-1" /><input type="checkbox" class="form-check-input" name="shout_facebook" value='1' /> Post on my Facebook wall</div>
						<?php }?>
					<?php }?>
					<input type="submit" class="btn btn-primary btn-sm" id="shout_send" name="shout_send" value="<?php echo $_smarty_tpl->tpl_vars['buttontext']->value;?>
" />
				</div>
			</form>
		<?php }?>

		<?php
$__section_ix_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['shout_msgs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_7_total = $__section_ix_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_7_total !== 0) {
for ($__section_ix_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_7_iteration <= $__section_ix_7_total; $__section_ix_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
			<div class="shoutboxmodmsg">
				<?php $_smarty_tpl->_assignInScope('userlink', smarty_modifier_userlink($_smarty_tpl->tpl_vars['shout_msgs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['user'],"linkmodule"));?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'date', null, null);
echo smarty_modifier_tiki_short_time($_smarty_tpl->tpl_vars['shout_msgs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['timestamp']);?>
, <?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['shout_msgs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['timestamp']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				
				<?php $_smarty_tpl->_assignInScope('cdate', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'date'));?>
				<?php if ($_smarty_tpl->tpl_vars['tooltip']->value == 1) {?>
					<b><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['userlink']->value,"\" href=","&lt;br /&gt;&lt;em&gt;Shout date: ".((string)$_smarty_tpl->tpl_vars['cdate']->value)."&lt;/em&gt;\" href=");?>
</b>:
				<?php } else { ?>
					<b><?php echo $_smarty_tpl->tpl_vars['userlink']->value;?>
</b>, <?php echo $_smarty_tpl->tpl_vars['cdate']->value;?>
:
				<?php }?>
				<?php echo $_smarty_tpl->tpl_vars['shout_msgs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['message'];?>

				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_shoutbox']->value == 'y' || $_smarty_tpl->tpl_vars['user']->value == $_smarty_tpl->tpl_vars['shout_msgs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['user']) {?>
					<?php if (0 && $_smarty_tpl->tpl_vars['prefs']->value['feature_ajax'] == 'y') {?>
						[<a onclick="removeShout(<?php echo $_smarty_tpl->tpl_vars['shout_msgs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['msgId'];?>
);return false" href="#" class="linkmodule tips" title="|Delete this shout">x</a>|<a href="tiki-shoutbox.php?msgId=<?php echo $_smarty_tpl->tpl_vars['shout_msgs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['msgId'];?>
" class="linkmodule tips" title="|Edit this shout">e</a>]
					<?php } else { ?>
						[<a href="tiki-shoutbox.php?remove=<?php echo $_smarty_tpl->tpl_vars['shout_msgs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['msgId'];?>
" class="linkmodule">x</a>|<a href="tiki-shoutbox.php?msgId=<?php echo $_smarty_tpl->tpl_vars['shout_msgs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['msgId'];?>
" class="linkmodule">e</a>]
					<?php }?>
				<?php }?>
			</div>
		<?php
}
}
?>

		<div style="text-align: center">
			<a href="tiki-shoutbox.php" class="linkmodule more">Read More…</a>
		</div>
	<?php $_block_repeat=false;
echo smarty_block_tikimodule(array('title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"shoutbox",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
