<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:09:37
  from 'C:\xampp\htdocs\tikip4k\templates\wiki_authors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264f21097e74_27256814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18088f3203ae166211ed79d17d7854a105f48a3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\wiki_authors.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61264f21097e74_27256814 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.userlink.php','function'=>'smarty_modifier_userlink',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_long_datetime.php','function'=>'smarty_modifier_tiki_long_datetime',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),));
?>
<div class="wiki-authors">
<hr>
<?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value == 'business') {?>
	Last edited by <?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value);?>

	<?php
$__section_author_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['contributors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_author_0_total = $__section_author_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_author'] = new Smarty_Variable(array());
if ($__section_author_0_total !== 0) {
for ($__section_author_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_author']->value['index'] = 0; $__section_author_0_iteration <= $__section_author_0_total; $__section_author_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_author']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_author']->value['first'] = ($__section_author_0_iteration === 1);
$_smarty_tpl->tpl_vars['__smarty_section_author']->value['last'] = ($__section_author_0_iteration === $__section_author_0_total);
?>
		<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_author']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_author']->value['first'] : null)) {?>
			, based on work by
		<?php } else { ?>
			<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_author']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_author']->value['last'] : null)) {?>
				,
			<?php } else { ?>
				and
			<?php }?>
		<?php }?>
		<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['contributors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_author']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_author']->value['index'] : null)]);?>

	<?php
}
}
?>.
	<br>
	Page last modified on <?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value);?>
. <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_show_version'] == 'y') {?>(Version <?php echo $_smarty_tpl->tpl_vars['lastVersion']->value;?>
)<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['revision_approval_info']->value) {?>
		<br>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Page approved by %0 on %1<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }
} elseif ($_smarty_tpl->tpl_vars['wiki_authors_style']->value == 'collaborative') {?>
	Contributors to this page: <?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value);?>

	<?php
$__section_author_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['contributors']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_author_1_total = $__section_author_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_author'] = new Smarty_Variable(array());
if ($__section_author_1_total !== 0) {
for ($__section_author_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_author']->value['index'] = 0; $__section_author_1_iteration <= $__section_author_1_total; $__section_author_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_author']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_author']->value['first'] = ($__section_author_1_iteration === 1);
$_smarty_tpl->tpl_vars['__smarty_section_author']->value['last'] = ($__section_author_1_iteration === $__section_author_1_total);
?>
		<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_author']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_author']->value['last'] : null)) {?>
			,
		<?php } else { ?>
			and
		<?php }?>
		<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['contributors']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_author']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_author']->value['index'] : null)]);?>

	<?php
}
}
?>.
	<br>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value),'_1'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value)));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value),'_1'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Page last modified on %0 by %1<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value),'_1'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>.
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_show_version'] == 'y') {?>
		(Version <?php echo $_smarty_tpl->tpl_vars['lastVersion']->value;?>
)
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['revision_approval_info']->value) {?>
		<br>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Page approved by %0 on %1<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>

<?php } elseif ($_smarty_tpl->tpl_vars['wiki_authors_style']->value == 'lastmodif') {?>
	Page last modified on <?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value);?>

<?php } else { ?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['creator']->value)));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['creator']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Created by %0<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['creator']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>.
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value),'_1'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value)));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value),'_1'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value)), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Last Modification: %0 by %1<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value),'_1'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value)), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>.
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_show_version'] == 'y') {?>
		(Version <?php echo $_smarty_tpl->tpl_vars['lastVersion']->value;?>
)
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['revision_approval_info']->value) {?>
		<br>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Page approved by %0 on %1<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }
}?>
</div><?php }
}
