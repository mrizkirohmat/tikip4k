<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:06:32
  from 'C:\xampp\htdocs\tikip4k\templates\pagehistory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264e680f7487_11927078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de70a80b7b1d9c9eb45817c668e24b31925af532' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\pagehistory.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61264e680f7487_11927078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.userlink.php','function'=>'smarty_modifier_userlink',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_datetime.php','function'=>'smarty_modifier_tiki_short_datetime',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.pagination_links.php','function'=>'smarty_block_pagination_links',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),));
if (!empty($_smarty_tpl->tpl_vars['diff_style']->value) && (($_smarty_tpl->tpl_vars['old']->value && $_smarty_tpl->tpl_vars['new']->value && $_smarty_tpl->tpl_vars['old']->value['version'] !== $_smarty_tpl->tpl_vars['new']->value['version']) || !empty($_smarty_tpl->tpl_vars['diffdata']->value))) {?>
	<?php if ((!(isset($_smarty_tpl->tpl_vars['translation_mode']->value)) || $_smarty_tpl->tpl_vars['translation_mode']->value != 'y') && empty($_smarty_tpl->tpl_vars['hide_version_info']->value)) {?>
		<h2><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Comparing version <?php echo $_smarty_tpl->tpl_vars['old']->value['version'];?>
 with version <?php echo $_smarty_tpl->tpl_vars['new']->value['version'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></h2>
	<?php }?>
	<div class="table-responsive">
		<table class="table diff">
			<?php if ((isset($_smarty_tpl->tpl_vars['translation_mode']->value)) && $_smarty_tpl->tpl_vars['translation_mode']->value == 'n') {?>
				<tr>
					<th colspan="2"><b>Version: <a href="tiki-pagehistory.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));?>
&amp;preview=<?php echo $_smarty_tpl->tpl_vars['old']->value['version'];?>
" title="View"><?php echo $_smarty_tpl->tpl_vars['old']->value['version'];?>
</a><?php if ($_smarty_tpl->tpl_vars['old']->value['version'] == $_smarty_tpl->tpl_vars['info']->value['version']) {?> (Current)<?php }?></b></th>
					<th colspan="2"><b>Version: <a href="tiki-pagehistory.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value,"url" ));?>
&amp;preview=<?php echo $_smarty_tpl->tpl_vars['new']->value['version'];?>
" title="View"><?php echo $_smarty_tpl->tpl_vars['new']->value['version'];?>
</a><?php if ($_smarty_tpl->tpl_vars['new']->value['version'] == $_smarty_tpl->tpl_vars['info']->value['version']) {?> (Current)<?php }?></b></th>
				</tr>
				<tr>
					<td colspan="2"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['old']->value['user']);?>
 - <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['old']->value['lastModif']);?>
</td>
					<td colspan="2"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['new']->value['user']);?>
 - <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['new']->value['lastModif']);?>
</td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['old']->value['comment'] || $_smarty_tpl->tpl_vars['new']->value['comment']) {?>
					<tr>
						<td colspan="2" class="editdate"><?php if ($_smarty_tpl->tpl_vars['old']->value['comment']) {
echo $_smarty_tpl->tpl_vars['old']->value['comment'];
} else { ?>&nbsp;<?php }?></td>
						<td colspan="2" class="editdate"><?php if ($_smarty_tpl->tpl_vars['new']->value['comment']) {
echo $_smarty_tpl->tpl_vars['new']->value['comment'];
} else { ?>&nbsp;<?php }?></td>
					</tr>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['old']->value['description'] != $_smarty_tpl->tpl_vars['new']->value['description']) {?>
					<tr>
						<td colspan="2" class="diffdeleted"><?php if ($_smarty_tpl->tpl_vars['old']->value['description']) {
echo $_smarty_tpl->tpl_vars['old']->value['description'];
} else { ?>&nbsp;<?php }?></td>
						<td colspan="2" class="diffadded"><?php if ($_smarty_tpl->tpl_vars['new']->value['description']) {
echo $_smarty_tpl->tpl_vars['new']->value['description'];
} else { ?>&nbsp;<?php }?></td>
					</tr>
				<?php }?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['diff_style']->value == "sideview") {?>
				<tr>
					<td colspan="2"><div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['old']->value['data'];?>
</div></td>
					<td colspan="2"><div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['new']->value['data'];?>
</div></td>
				</tr>
			<?php }?>
			<tr>
				<?php if ($_REQUEST['oldver_idx']+1 == $_REQUEST['newver_idx'] || $_REQUEST['oldver_idx'] == $_REQUEST['newver_idx']) {?>
					<td colspan="4">
						<?php if ((isset($_smarty_tpl->tpl_vars['show_all_versions']->value)) && $_smarty_tpl->tpl_vars['show_all_versions']->value == "n") {?>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Session",'show_numbers'=>"n"));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Session",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Session",'show_numbers'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php } else { ?>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Version",'show_numbers'=>"n"));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Version",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Version",'show_numbers'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php }?>
					</td>
				<?php } else { ?>
					<td colspan="2">
						<?php if ((isset($_smarty_tpl->tpl_vars['show_all_versions']->value)) && $_smarty_tpl->tpl_vars['show_all_versions']->value == "n") {?>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Session",'show_numbers'=>"n"));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Session",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Session",'show_numbers'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php } else { ?>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Version",'show_numbers'=>"n"));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Version",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Version",'show_numbers'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php }?>
					</td>
					<td colspan="2">
						<?php if ((isset($_smarty_tpl->tpl_vars['show_all_versions']->value)) && $_smarty_tpl->tpl_vars['show_all_versions']->value == "n") {?>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Session",'show_numbers'=>"n"));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Session",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Session",'show_numbers'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php } else { ?>
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Version",'show_numbers'=>"n"));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Version",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Version",'show_numbers'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						<?php }?>
					</td>
				<?php }?>
			</tr>
			<?php if ($_smarty_tpl->tpl_vars['diff_style']->value == 'unidiff') {?>
				<tr>
					<td colspan="4">
						<?php if ($_smarty_tpl->tpl_vars['diffdata']->value) {?>
							<?php
$__section_ix_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['diffdata']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_5_total = $__section_ix_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_5_total !== 0) {
for ($__section_ix_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_5_iteration <= $__section_ix_5_total; $__section_ix_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
								<?php if ($_smarty_tpl->tpl_vars['diffdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['type'] == "diffheader") {?>
									<?php $_smarty_tpl->_assignInScope('oldd', $_smarty_tpl->tpl_vars['diffdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['old']);?>
									<?php $_smarty_tpl->_assignInScope('newd', $_smarty_tpl->tpl_vars['diffdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['new']);?>
									<br><div class="diffheader">@@ <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>-Lines: <?php echo $_smarty_tpl->tpl_vars['oldd']->value;?>
 changed to +Lines: <?php echo $_smarty_tpl->tpl_vars['newd']->value;
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> @@</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['diffdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['type'] == "diffdeleted") {?>
									<div class="diffdeleted">
									<?php
$__section_iy_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['diffdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['data']) ? count($_loop) : max(0, (int) $_loop));
$__section_iy_6_total = $__section_iy_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_iy'] = new Smarty_Variable(array());
if ($__section_iy_6_total !== 0) {
for ($__section_iy_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_iy']->value['index'] = 0; $__section_iy_6_iteration <= $__section_iy_6_total; $__section_iy_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_iy']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_iy']->value['first'] = ($__section_iy_6_iteration === 1);
?>
										<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_iy']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_iy']->value['first'] : null)) {?><br><?php }?>
										- <?php echo $_smarty_tpl->tpl_vars['diffdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['data'][(isset($_smarty_tpl->tpl_vars['__smarty_section_iy']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_iy']->value['index'] : null)];?>

									<?php
}
}
?>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['diffdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['type'] == "diffadded") {?>
									<div class="diffadded">
										<?php
$__section_iy_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['diffdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['data']) ? count($_loop) : max(0, (int) $_loop));
$__section_iy_7_total = $__section_iy_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_iy'] = new Smarty_Variable(array());
if ($__section_iy_7_total !== 0) {
for ($__section_iy_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_iy']->value['index'] = 0; $__section_iy_7_iteration <= $__section_iy_7_total; $__section_iy_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_iy']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_iy']->value['first'] = ($__section_iy_7_iteration === 1);
?>
											<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_iy']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_iy']->value['first'] : null)) {?><br><?php }?>
											+ <?php echo $_smarty_tpl->tpl_vars['diffdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['data'][(isset($_smarty_tpl->tpl_vars['__smarty_section_iy']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_iy']->value['index'] : null)];?>

										<?php
}
}
?>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['diffdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['type'] == "diffbody") {?>
									<div class="diffbody">
									<?php
$__section_iy_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['diffdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['data']) ? count($_loop) : max(0, (int) $_loop));
$__section_iy_8_total = $__section_iy_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_iy'] = new Smarty_Variable(array());
if ($__section_iy_8_total !== 0) {
for ($__section_iy_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_iy']->value['index'] = 0; $__section_iy_8_iteration <= $__section_iy_8_total; $__section_iy_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_iy']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_iy']->value['first'] = ($__section_iy_8_iteration === 1);
?>
										<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_iy']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_iy']->value['first'] : null)) {?><br><?php }?>
										<?php echo $_smarty_tpl->tpl_vars['diffdata']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['data'][(isset($_smarty_tpl->tpl_vars['__smarty_section_iy']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_iy']->value['index'] : null)];?>

									<?php
}
}
?>
								</div>
								<?php }?>
							<?php
}
}
?>
						<?php } else { ?>
							<div class="diffheader">Versions are identical</div>
						<?php }?>
					</td>
				</tr>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['diff_style']->value != 'unidiff' && $_smarty_tpl->tpl_vars['diff_style']->value != 'sideview') {?>
				<?php if ($_smarty_tpl->tpl_vars['diffdata']->value) {
echo $_smarty_tpl->tpl_vars['diffdata']->value;
} else { ?><tr><td colspan="4">Versions are identical</td></tr><?php }?>
			<?php }?>
		</table>
	</div>
	<?php if (!$_smarty_tpl->tpl_vars['hide_example_wikidiff_plugin_syntax']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiplugin_wikidiff'] == 'y' && $_smarty_tpl->tpl_vars['old']->value) {?>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'tip','title'=>'Example wikidiff plugin syntax'));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'tip','title'=>'Example wikidiff plugin syntax'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<code>{wikidiff object_id="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" oldver="<?php echo $_smarty_tpl->tpl_vars['old']->value['version'];?>
" newver="<?php echo $_smarty_tpl->tpl_vars['new']->value['version'];?>
" diff_style="<?php echo $_smarty_tpl->tpl_vars['diff_style']->value;?>
" show_version_info="<?php if (empty($_smarty_tpl->tpl_vars['hide_version_info']->value)) {?>y<?php } else { ?>n<?php }?>"}</code>
			<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'tip','title'=>'Example wikidiff plugin syntax'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>
	<?php }
}
}
}
