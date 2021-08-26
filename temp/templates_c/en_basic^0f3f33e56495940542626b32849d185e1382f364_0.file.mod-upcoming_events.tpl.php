<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:41:24
  from 'C:\xampp\htdocs\tikip4k\templates\modules\mod-upcoming_events.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612648848752d6_31838488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f3f33e56495940542626b32849d185e1382f364' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\modules\\mod-upcoming_events.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612648848752d6_31838488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tikimodule.php','function'=>'smarty_block_tikimodule',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_date_format.php','function'=>'smarty_modifier_tiki_date_format',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.isodate.php','function'=>'smarty_modifier_isodate',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_date.php','function'=>'smarty_modifier_tiki_short_date',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_datetime.php','function'=>'smarty_modifier_tiki_short_datetime',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_time.php','function'=>'smarty_modifier_tiki_short_time',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.username.php','function'=>'smarty_modifier_username',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"upcoming_events",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']));
$_block_repeat=true;
echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"upcoming_events",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php if (count($_smarty_tpl->tpl_vars['modUpcomingEvents']->value)) {?>
	<?php if ((isset($_smarty_tpl->tpl_vars['module_params']->value['date_format']))) {?>
		<?php $_smarty_tpl->_assignInScope('date_format', $_smarty_tpl->tpl_vars['module_params']->value['date_format']);?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('date_format', (($_smarty_tpl->tpl_vars['prefs']->value['short_date_format']).(' ')).($_smarty_tpl->tpl_vars['prefs']->value['short_time_format']));?>
	<?php }?>
<table border="0" cellpadding="<?php if ((isset($_smarty_tpl->tpl_vars['module_params']->value['cellpadding']))) {
echo $_smarty_tpl->tpl_vars['module_params']->value['cellpadding'];
} else { ?>0<?php }?>" cellspacing="<?php if ((isset($_smarty_tpl->tpl_vars['module_params']->value['cellspacing']))) {
echo $_smarty_tpl->tpl_vars['module_params']->value['cellspacing'];
} else { ?>0<?php }?>">
		<?php
$__section_ix_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['modUpcomingEvents']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_8_total = $__section_ix_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_8_total !== 0) {
for ($__section_ix_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_8_iteration <= $__section_ix_8_total; $__section_ix_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index_next'] = $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] + 1;
$_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first'] = ($__section_ix_8_iteration === 1);
$_smarty_tpl->tpl_vars['__smarty_section_ix']->value['last'] = ($__section_ix_8_iteration === $__section_ix_8_total);
?>
			<?php $_smarty_tpl->_assignInScope('date_value', smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['start'],$_smarty_tpl->tpl_vars['date_format']->value));?>
			<?php $_smarty_tpl->_assignInScope('calendarId', $_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['calendarId']);?>

			<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first'] : null)) {?>
		</td>
	</tr>
			<?php }?>

	<tr>

			<?php if ($_smarty_tpl->tpl_vars['nonums']->value != 'y') {?>
		<td class="module"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index_next'] : null);?>
)&nbsp;</td>
			<?php }?>

		<td class="module vevent"<?php if ($_smarty_tpl->tpl_vars['showColor']->value == 'y' && $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['calendarId']->value]['custombgcolor'] != '') {?> style="background-color:#<?php echo $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['calendarId']->value]['custombgcolor'];?>
"<?php }?>>

			<?php if ($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['allday']) {?>
			<abbr class="dtstart" title="<?php echo smarty_modifier_isodate($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['start']);?>
"><?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['start']);?>
</abbr>
			<?php } else { ?>
			<abbr class="dtstart" title="<?php echo smarty_modifier_isodate($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['start']);?>
"><?php echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['start'],$_smarty_tpl->tpl_vars['date_format']->value);?>
</abbr>
				<?php if ($_smarty_tpl->tpl_vars['showEnd']->value == 'y') {?>
				-
				<abbr class="dtend" title="<?php echo smarty_modifier_isodate($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['end']);?>
"><?php if ($_smarty_tpl->tpl_vars['module_params']->value['date_format']) {
echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['end'],$_smarty_tpl->tpl_vars['date_format']->value);
} elseif (smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['start']) != smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['end'])) {
echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['end']);
} else {
echo smarty_modifier_tiki_short_time($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['end']);
}?></abbr>
				<?php }?>
			<?php }?>
			<br>

			<a class="linkmodule summary"
				href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl'] == 'y') {?>event<?php echo $_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['calitemId'];
} else { ?>tiki-calendar_edit_item.php?viewcalitemId=<?php echo $_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['calitemId'];
}?>"
				title="<?php if ($_smarty_tpl->tpl_vars['tooltip_infos']->value != 'n') {
echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['lastModif'],'','n');?>
, by <?php if ($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['user'] != '') {
echo smarty_modifier_username($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['user']);
} else { ?>Anonymous<?php }
} else { ?>click to view<?php }?>"
				<?php if ($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['status'] == '2') {?>style="text-decoration: line-through;"<?php }?>
			>
				<?php if ($_smarty_tpl->tpl_vars['maxlen']->value > 0) {?>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_truncate($_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'],$_smarty_tpl->tpl_vars['maxlen']->value,"...",true) ));?>

				<?php } else { ?>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'] ));?>

				<?php }?>
			</a>

			<?php if ($_smarty_tpl->tpl_vars['showDescription']->value == 'y') {?>
			<div class="description form-text"><?php echo $_smarty_tpl->tpl_vars['modUpcomingEvents']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['parsed'];?>
</div>
			<?php }?>

			<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['last'] : null)) {?>
		</td>
	</tr>
			<?php }?>

		<?php
}
}
?>
</table>
<?php } else { ?>
<em>No records to display</em>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tiki_p_add_events']->value == 'y' && (empty($_smarty_tpl->tpl_vars['module_params']->value['showaction']) || $_smarty_tpl->tpl_vars['module_params']->value['showaction'] != 'n')) {?>
	<p><a href="tiki-calendar_edit_item.php"><?php echo smarty_function_icon(array('name'=>"add"),$_smarty_tpl);?>
 Add Event</a></p>
<?php }
$_block_repeat=false;
echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"upcoming_events",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
