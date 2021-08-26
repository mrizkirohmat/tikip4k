<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:07:52
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-listpages_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612640a8810304_82254882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '406eb04390c1dea42ed5d193cafaf15b327a317d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-listpages_content.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612640a8810304_82254882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.initials_filter_links.php','function'=>'smarty_function_initials_filter_links',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.select_all.php','function'=>'smarty_function_select_all',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.self_link.php','function'=>'smarty_block_self_link',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.object_link.php','function'=>'smarty_function_object_link',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_datetime.php','function'=>'smarty_modifier_tiki_short_datetime',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.userlink.php','function'=>'smarty_modifier_userlink',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),9=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.kbsize.php','function'=>'smarty_modifier_kbsize',),10=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.actions.php','function'=>'smarty_block_actions',),11=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.permission_link.php','function'=>'smarty_function_permission_link',),12=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.bootstrap_modal.php','function'=>'smarty_function_bootstrap_modal',),13=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.norecords.php','function'=>'smarty_function_norecords',),14=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),15=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),16=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.pagination_links.php','function'=>'smarty_block_pagination_links',),));
?>


<?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled'] && ($_smarty_tpl->tpl_vars['cant_pages']->value > 1 || $_smarty_tpl->tpl_vars['initial']->value || $_smarty_tpl->tpl_vars['find']->value)) {?>
	<?php echo smarty_function_initials_filter_links(array(),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove']->value == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_multiprint'] == 'y') {?>
	<?php if ((isset($_smarty_tpl->tpl_vars['checkboxes_on']->value)) && $_smarty_tpl->tpl_vars['checkboxes_on']->value == 'n') {?>
		<?php $_smarty_tpl->_assignInScope('checkboxes_on', 'n');?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('checkboxes_on', 'y');?>
	<?php }
} else { ?>
	<?php $_smarty_tpl->_assignInScope('checkboxes_on', 'n');
}?>

<?php if ($_smarty_tpl->tpl_vars['find']->value != '' && count($_smarty_tpl->tpl_vars['listpages']->value) != '0') {?>
	<p>Found &quot;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['find']->value ));?>
&quot; in <?php echo count($_smarty_tpl->tpl_vars['listpages']->value);?>
 pages.</p>
<?php }?>

	
<?php if ((isset($_smarty_tpl->tpl_vars['checkboxes_on']->value)) && $_smarty_tpl->tpl_vars['checkboxes_on']->value == 'y') {?>
	<form name="checkboxes_on" id="checkboxes_on" method="post" action="tiki-listpages.php">
<?php }?>

<?php $_smarty_tpl->_assignInScope('pagefound', 'n');?>
<div id="<?php echo $_smarty_tpl->tpl_vars['ts']->value['tableid'];?>
-div" class="<?php if ($_smarty_tpl->tpl_vars['js']->value) {?>table-responsive<?php }?> ts-wrapperdiv" <?php if ($_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>style="visibility:hidden;"<?php }?>> 
	<table id="<?php echo $_smarty_tpl->tpl_vars['ts']->value['tableid'];?>
" class="table normal table-striped table-hover" data-count="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cant']->value ));?>
">
		<thead>
			<tr>
				<?php if ((isset($_smarty_tpl->tpl_vars['checkboxes_on']->value)) && $_smarty_tpl->tpl_vars['checkboxes_on']->value == 'y') {?>
					<th id="checkbox">
						<?php echo smarty_function_select_all(array('checkbox_names'=>'checked[]','tablesorter'=>((string)$_smarty_tpl->tpl_vars['ts']->value['enabled'])),$_smarty_tpl);?>

					</th>
					<?php $_smarty_tpl->_assignInScope('cntcol', '1');?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('cntcol', '0');?>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_id'] == 'y') {?>
					<?php $_smarty_tpl->_assignInScope('cntcol', $_smarty_tpl->tpl_vars['cntcol']->value+1);?>
					<th id="pageid">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'page_id'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'page_id'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Id<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'page_id'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_name'] == 'y') {?>
					<?php $_smarty_tpl->_assignInScope('cntcol', $_smarty_tpl->tpl_vars['cntcol']->value+1);?>
					<th id="pagename">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'pageName'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'pageName'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Page<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'pageName'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</th>
				<?php }?>

				<?php if ((isset($_smarty_tpl->tpl_vars['wplp_used']->value))) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wplp_used']->value, 'ln', false, 'lc');
$_smarty_tpl->tpl_vars['ln']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lc']->value => $_smarty_tpl->tpl_vars['ln']->value) {
$_smarty_tpl->tpl_vars['ln']->do_else = false;
?>
						<th><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ln']->value ));?>
</th>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_hits'] == 'y') {?>
					<?php $_smarty_tpl->_assignInScope('cntcol', $_smarty_tpl->tpl_vars['cntcol']->value+1);?>
					<th id="hits"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'hits'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'hits'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Hits<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'hits'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastmodif'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['wiki_list_comment'] == 'y') {?>
					<?php $_smarty_tpl->_assignInScope('cntcol', $_smarty_tpl->tpl_vars['cntcol']->value+1);?>
					<th id="lastmodif">
						<?php $_smarty_tpl->_assignInScope('lastmod_sortfield', 'lastModif');?>
						<?php $_smarty_tpl->_assignInScope('lastmod_shorttitle', "Last modification");?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastmodif'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['wiki_list_comment'] == 'y') {?>
							<?php $_smarty_tpl->_assignInScope('lastmod_title', "Last modification / Comment");?>
						<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastmodif'] == 'y') {?>
							<?php $_smarty_tpl->_assignInScope('lastmod_title', "Last modification");?>
						<?php } else { ?>
							<?php $_smarty_tpl->_assignInScope('lastmod_title', "Comment");?>
							<?php $_smarty_tpl->_assignInScope('lastmod_sortfield', 'comment');?>
							<?php $_smarty_tpl->_assignInScope('lastmod_shorttitle', "Comment");?>
						<?php }?>
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>$_smarty_tpl->tpl_vars['lastmod_sortfield']->value,'_title'=>$_smarty_tpl->tpl_vars['lastmod_title']->value));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>$_smarty_tpl->tpl_vars['lastmod_sortfield']->value,'_title'=>$_smarty_tpl->tpl_vars['lastmod_title']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['lastmod_shorttitle']->value;
$_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>$_smarty_tpl->tpl_vars['lastmod_sortfield']->value,'_title'=>$_smarty_tpl->tpl_vars['lastmod_title']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_creator'] == 'y') {?>
					<?php $_smarty_tpl->_assignInScope('cntcol', $_smarty_tpl->tpl_vars['cntcol']->value+1);?>
					<th id="creator">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'creator','_title'=>"Page creator"));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'creator','_title'=>"Page creator"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Creator<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'creator','_title'=>"Page creator"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_user'] == 'y') {?>
					<?php $_smarty_tpl->_assignInScope('cntcol', $_smarty_tpl->tpl_vars['cntcol']->value+1);?>
					<th id="lastauthor">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'user','_title'=>"Last author"));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'user','_title'=>"Last author"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Last author<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'user','_title'=>"Last author"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastver'] == 'y') {?>
					<?php $_smarty_tpl->_assignInScope('cntcol', $_smarty_tpl->tpl_vars['cntcol']->value+1);?>
					<th id="version">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'version','_title'=>"Last version"));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'version','_title'=>"Last version"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Last version<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'version','_title'=>"Last version"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_status'] == 'y') {?>
					<?php $_smarty_tpl->_assignInScope('cntcol', $_smarty_tpl->tpl_vars['cntcol']->value+1);?>
					<th id="status" style="text-align:center;">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'flag','_icon_name'=>'lock'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'flag','_icon_name'=>'lock'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Status of the page<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'flag','_icon_name'=>'lock'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_versions'] == 'y') {?>
					<?php $_smarty_tpl->_assignInScope('cntcol', $_smarty_tpl->tpl_vars['cntcol']->value+1);?>
					<th id="versions">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'versions','_title'=>"Versions"));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'versions','_title'=>"Versions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Version<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'versions','_title'=>"Versions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_links'] == 'y') {?>
					<?php $_smarty_tpl->_assignInScope('cntcol', $_smarty_tpl->tpl_vars['cntcol']->value+1);?>
					<th id="links">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'links','_title'=>"Links to other items in page"));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'links','_title'=>"Links to other items in page"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Links<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'links','_title'=>"Links to other items in page"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_backlinks'] == 'y') {?>
					<?php $_smarty_tpl->_assignInScope('cntcol', $_smarty_tpl->tpl_vars['cntcol']->value+1);?>
					<th id="backlinks">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'backlinks','_title'=>"Links to this page in other pages"));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'backlinks','_title'=>"Links to this page in other pages"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Backl.<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'backlinks','_title'=>"Links to this page in other pages"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_size'] == 'y') {?>
					<?php $_smarty_tpl->_assignInScope('cntcol', $_smarty_tpl->tpl_vars['cntcol']->value+1);?>
					<th id="size">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'page_size','_title'=>"Page size"));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'page_size','_title'=>"Page size"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Size<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'page_size','_title'=>"Page size"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_language'] == 'y') {?>
					<?php $_smarty_tpl->_assignInScope('cntcol', $_smarty_tpl->tpl_vars['cntcol']->value+1);?>
					<th id="language">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'lang','_title'=>"Language"));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lang','_title'=>"Language"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Lang.<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lang','_title'=>"Language"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_categories'] == 'y') {?>
					<?php $_smarty_tpl->_assignInScope('cntcol', $_smarty_tpl->tpl_vars['cntcol']->value+1);?>
					<th id="categories">Categories</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_categories_path'] == 'y') {?>
					<?php $_smarty_tpl->_assignInScope('cntcol', $_smarty_tpl->tpl_vars['cntcol']->value+1);?>
					<th id="catpaths">Categories</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_rating'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_polls'] == 'y') {?>
					<?php $_smarty_tpl->_assignInScope('cntcol', $_smarty_tpl->tpl_vars['cntcol']->value+1);?>
					<th id="rating">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'rating','_title'=>"Ratings"));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'rating','_title'=>"Ratings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Ratings<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'rating','_title'=>"Ratings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</th>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['show_actions']->value == 'y') {?>
					<?php $_smarty_tpl->_assignInScope('cntcol', $_smarty_tpl->tpl_vars['cntcol']->value+1);?>
					<th id="actions"></th>
				<?php }?>
			</tr>
		</thead>

		<tbody>

			<?php
$__section_changes_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listpages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_changes_0_total = $__section_changes_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_changes'] = new Smarty_Variable(array());
if ($__section_changes_0_total !== 0) {
for ($__section_changes_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] = 0; $__section_changes_0_iteration <= $__section_changes_0_total; $__section_changes_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']++){
?>

				<?php if ((isset($_smarty_tpl->tpl_vars['mapview']->value)) && $_smarty_tpl->tpl_vars['mapview']->value) {?>
					<div class="listpagesmap" style="display:none;"><?php echo smarty_function_object_link(array('type'=>"wiki page",'id'=>((string)(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['pageName'] ))))),$_smarty_tpl);?>
</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['find']->value == $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['pageName']) {?>
					<?php $_smarty_tpl->_assignInScope('pagefound', 'y');?>
				<?php }?>

				<tr>

					<?php if ($_smarty_tpl->tpl_vars['checkboxes_on']->value == 'y') {?>
						<td class="checkbox-cell">
							<div class="form-check">
								<input type="checkbox" name="checked[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['pageName'] ));?>
">
							</div>
						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_id'] == 'y') {?>
						<td class="integer">
							<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['pageName']);?>
" class="link tips" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['pageName'] ));?>
:View page">
								<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['page_id'];?>

							</a>
						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_name'] == 'y') {?>
						<td class="text">
							
							
							<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['pageName']);?>
" class="link tips" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['pageName'] ));?>
:View page">
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_truncate($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['pageName'],$_smarty_tpl->tpl_vars['prefs']->value['wiki_list_name_len'],"...",true) ));?>

							</a>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_description'] == 'y' && $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['description'] != '') {?>
								<div class="subcomment">
									<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['description'],$_smarty_tpl->tpl_vars['prefs']->value['wiki_list_description_len'],"...",true);?>

								</div>
							<?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['snippet'])) {?>
								<div class="subcomment"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['snippet'];?>
</div>
							<?php }?>
						</td>
					<?php }?>

					<?php if ((isset($_smarty_tpl->tpl_vars['wplp_used']->value))) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wplp_used']->value, 'ln', false, 'lc');
$_smarty_tpl->tpl_vars['ln']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['lc']->value => $_smarty_tpl->tpl_vars['ln']->value) {
$_smarty_tpl->tpl_vars['ln']->do_else = false;
?>
							<td class="text">
								<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['translations'][$_smarty_tpl->tpl_vars['lc']->value]) {?>
									<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['translations'][$_smarty_tpl->tpl_vars['lc']->value]);?>
" class="link" title="View page&nbsp;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['translations'][$_smarty_tpl->tpl_vars['lc']->value] ));?>
">
										<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['translations'][$_smarty_tpl->tpl_vars['lc']->value] ));?>

									</a>
								<?php }?>
							</td>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_hits'] == 'y') {?>
						<td class="integer">
							<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['hits'];?>

						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastmodif'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['wiki_list_comment'] == 'y') {?>
						<td class="date">
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastmodif'] == 'y') {?>
								<div><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['lastModif']);?>
</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_comment'] == 'y' && $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['comment'] != '') {?>
								<div>
									<i><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_truncate($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['comment'],$_smarty_tpl->tpl_vars['prefs']->value['wiki_list_comment_len'],"...",true) ));?>
</i>
								</div>
							<?php }?>
						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_creator'] == 'y') {?>
						<td class="username">
							<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['creator']);?>

						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_user'] == 'y') {?>
						<td class="username">
							<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['user']);?>

						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastver'] == 'y') {?>
						<td class="integer">
							<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['version'];?>

						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_status'] == 'y') {?>
						<td class="icon">
							<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['flag'] == 'locked') {?>
								<?php echo smarty_function_icon(array('name'=>'lock','alt'=>"Locked"),$_smarty_tpl);?>

							<?php } else { ?>
								<?php echo smarty_function_icon(array('name'=>'unlock','alt'=>"unlocked"),$_smarty_tpl);?>

							<?php }?>
						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_versions'] == 'y') {?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_history'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_wiki_view_history']->value == 'y') {?>
							<td class="integer">
								<a class="link" href="tiki-pagehistory.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['pageName'],"url" ));?>
">
									<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['version'];?>

								</a>
							</td>
						<?php } else { ?>
							<td class="integer">
								<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['version'];?>

							</td>
						<?php }?>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_links'] == 'y') {?>
						<td class="integer">
							<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['links'];?>

						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_backlinks'] == 'y') {?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_backlinks'] == 'y') {?>
							<td class="integer">
								<a class="link" href="tiki-backlinks.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['pageName'],"url" ));?>
">
									<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['backlinks'];?>

								</a>
							</td>
						<?php } else { ?>
							<td class="integer"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['backlinks'];?>
</td>
						<?php }?>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_size'] == 'y') {?>
						<td class="integer"><?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['len']);?>
</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_language'] == 'y') {?>
						<td class="text">
							<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['lang'];?>

						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_categories'] == 'y') {?>
						<td class="text">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['categname'], 'categ');
$_smarty_tpl->tpl_vars['categ']->index = -1;
$_smarty_tpl->tpl_vars['categ']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categ']->value) {
$_smarty_tpl->tpl_vars['categ']->do_else = false;
$_smarty_tpl->tpl_vars['categ']->index++;
$_smarty_tpl->tpl_vars['categ']->first = !$_smarty_tpl->tpl_vars['categ']->index;
$__foreach_categ_3_saved = $_smarty_tpl->tpl_vars['categ'];
?>
								<?php if (!$_smarty_tpl->tpl_vars['categ']->first) {?><br><?php }?>
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['categ']->value ));?>

							<?php
$_smarty_tpl->tpl_vars['categ'] = $__foreach_categ_3_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_categories_path'] == 'y') {?>
						<td class="text">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['categpath'], 'categpath');
$_smarty_tpl->tpl_vars['categpath']->index = -1;
$_smarty_tpl->tpl_vars['categpath']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categpath']->value) {
$_smarty_tpl->tpl_vars['categpath']->do_else = false;
$_smarty_tpl->tpl_vars['categpath']->index++;
$_smarty_tpl->tpl_vars['categpath']->first = !$_smarty_tpl->tpl_vars['categpath']->index;
$__foreach_categpath_4_saved = $_smarty_tpl->tpl_vars['categpath'];
?>
								<?php if (!$_smarty_tpl->tpl_vars['categpath']->first) {?><br><?php }?>
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['categpath']->value ));?>

							<?php
$_smarty_tpl->tpl_vars['categpath'] = $__foreach_categpath_4_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_rating'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['feature_polls'] == 'y') {?>
						<td class="integer">
							<?php if ((isset($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['rating']))) {
echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['rating'];
}?>
						</td>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['show_actions']->value == 'y') {?>
						<td class="action">
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('actions', array());
$_block_repeat=true;
echo smarty_block_actions(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
								<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['perms']['tiki_p_edit'] == 'y') {?><action><a href="tiki-editpage.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['pageName'],"url" ));?>
"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Edit"),$_smarty_tpl);?>
</a></action><action><a href="tiki-copypage.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['pageName'],"url" ));?>
&amp;version=last"><?php echo smarty_function_icon(array('name'=>'copy','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Copy"),$_smarty_tpl);?>
</a></action><?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_history'] == 'y' && $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['perms']['tiki_p_wiki_view_history'] == 'y') {?><action><a href="tiki-pagehistory.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['pageName'],"url" ));?>
"><?php echo smarty_function_icon(array('name'=>'history','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"History"),$_smarty_tpl);?>
</a></action><?php }
if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['perms']['tiki_p_assign_perm_wiki_page'] == 'y') {?><action><?php echo smarty_function_permission_link(array('mode'=>'text','type'=>"wiki page",'permType'=>'wiki','id'=>$_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['pageName']),$_smarty_tpl);?>
</action><?php }
if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['perms']['tiki_p_remove'] == 'y') {?><action><a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'wiki','action'=>'remove_pages','checked'=>$_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_changes']->value['index'] : null)]['pageName'],'version'=>'last'),$_smarty_tpl);?>
"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Remove"),$_smarty_tpl);?>
</a></action><?php }?>
							<?php $_block_repeat=false;
echo smarty_block_actions(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						</td>
					<?php }?>
				</tr>
			<?php }} else {
 ?>
				<?php $_smarty_tpl->_assignInScope('find_htmlescaped', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['find']->value )));?>
				<?php $_smarty_tpl->_assignInScope('initial_htmlescaped', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['initial']->value )));?>
				<?php if ($_smarty_tpl->tpl_vars['exact_match']->value != 'n') {
$_smarty_tpl->_assignInScope('intro', "No page:");
} else {
$_smarty_tpl->_assignInScope('intro', "No pages found with:");
}?>
				<?php if ($_smarty_tpl->tpl_vars['find']->value != '' && $_smarty_tpl->tpl_vars['aliases_were_found']->value == 'y') {?>
					<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['cntcol']->value,'_text'=>((string)$_smarty_tpl->tpl_vars['intro']->value)." &quot;".((string)$_smarty_tpl->tpl_vars['find_htmlescaped']->value)."&quot;. <br/>However, some page aliases fitting the query were found (see Aliases section above)."),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['find']->value != '' && $_smarty_tpl->tpl_vars['initial']->value != '' && $_smarty_tpl->tpl_vars['aliases_were_found']->value == 'y') {?>
					<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['cntcol']->value,'_text'=>((string)$_smarty_tpl->tpl_vars['intro']->value)." &quot;".((string)$_smarty_tpl->tpl_vars['find_htmlescaped']->value)."&quot;and starting with &quot; ".((string)$_smarty_tpl->tpl_vars['initial_htmlescaped']->value)." &quote;. <br/>However, some page aliases fitting the query were found (see Aliases section above)."),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['find']->value != '' && $_smarty_tpl->tpl_vars['initial']->value != '') {?>
					<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['cntcol']->value,'_text'=>((string)$_smarty_tpl->tpl_vars['intro']->value)." &quot;".((string)$_smarty_tpl->tpl_vars['find_htmlescaped']->value)."&quot; and starting with &quot; ".((string)$_smarty_tpl->tpl_vars['initial_htmlescaped']->value)." &quot;."),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['find']->value != '') {?>
					<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['cntcol']->value,'_text'=>((string)$_smarty_tpl->tpl_vars['intro']->value)." &quot;".((string)$_smarty_tpl->tpl_vars['find_htmlescaped']->value)."&quot;."),$_smarty_tpl);?>

				<?php } else { ?>
					<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['cntcol']->value,'_text'=>"No pages found."),$_smarty_tpl);?>

				<?php }?>

			<?php
}
?>
		</tbody>
	</table>
</div>
<?php if ((isset($_smarty_tpl->tpl_vars['ts']->value['enabled']))) {?>
	<?php echo '<script'; ?>
>
		// Otherwise, All pages are displayed, whatever was searched for
		var myfilter='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['find']->value,'javascript' ));?>
';
	<?php echo '</script'; ?>
>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		if (myfilter) {
			var pageNameColumn = $('#pagename').data('column');
			$('input[data-column=' + pageNameColumn + ']').val(myfilter);

			var currentFilter = [];
			for(i = 0; i < $('#listpages1 th:last').data('column'); i++) {
				var value = i == pageNameColumn ? myfilter : '';
				currentFilter.push(value);
			}

			$('#listpages1').data('lastSearch', currentFilter);
		}
	<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if (!$_smarty_tpl->tpl_vars['ts']->value['ajax']) {?>
	<?php if ($_smarty_tpl->tpl_vars['checkboxes_on']->value == 'y' && count($_smarty_tpl->tpl_vars['listpages']->value) > 0) {?> 
		<div class="input-group col-sm-8">
			<select name="action" class="form-control" id="submit_mult">
				<option value="no_action" selected="selected">
					Select action to perform with checked...
				</option>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove']->value == 'y') {?>
					<option value="remove_pages" >Remove</option>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_multiprint'] == 'y') {?>
					<option value="print_pages" >Print</option>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['print_pdf_from_url'] != 'none') {?>
						<option value="export_pdf" >Download PDF</option>
					<?php }?>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_usrlock'] == 'y' && ($_smarty_tpl->tpl_vars['tiki_p_lock']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value == 'y')) {?>
					<option value="lock_pages" >Lock</option>
					<option value="unlock_pages" >Unlock</option>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>
					<option value="zip">Download zipped file</option>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y') {?>
					<option value="title">Add page name as page header</option>
				<?php }?>

				
			</select>
			<span class="input-group-append">
				<button
					type="submit"
					form="checkboxes_on"
					formaction="<?php echo smarty_function_bootstrap_modal(array('controller'=>'wiki','version'=>'all'),$_smarty_tpl);?>
"
					class="btn btn-primary"
					onclick="confirmAjax(event)"
				>
					OK
				</button>
			</span>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['find']->value && $_smarty_tpl->tpl_vars['tiki_p_edit']->value == 'y' && $_smarty_tpl->tpl_vars['pagefound']->value == 'n' && $_smarty_tpl->tpl_vars['alias_found']->value == 'n') {?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'find_htmlescaped', null);
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['find']->value ));
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'find_urlescaped', null);
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['find']->value,'url' ));
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<div class="t_navbar">
			<?php echo smarty_function_button(array('_text'=>"Create Page: ".((string)$_smarty_tpl->tpl_vars['find_htmlescaped']->value),'href'=>"tiki-editpage.php?page=".((string)$_smarty_tpl->tpl_vars['find_urlescaped']->value)."&lang=".((string)$_smarty_tpl->tpl_vars['find_lang']->value)."&templateId=".((string)$_smarty_tpl->tpl_vars['template_id']->value)."&template_name=".((string)$_smarty_tpl->tpl_vars['template_name']->value)."&categId=".((string)$_smarty_tpl->tpl_vars['create_page_with_categId']->value),'class'=>"btn btn-primary",'_title'=>"Create"),$_smarty_tpl);?>

		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['checkboxes_on']->value == 'y') {?>
		</form>
	<?php }?>

	<?php if (!(isset($_smarty_tpl->tpl_vars['ts']->value['enabled'])) || !$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
		<?php if ($_smarty_tpl->tpl_vars['pluginlistpages']->value == 'y' && $_smarty_tpl->tpl_vars['pagination']->value == 'y') {?>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'offset_arg'=>$_smarty_tpl->tpl_vars['offset_arg']->value,'clean'=>$_smarty_tpl->tpl_vars['clean']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'offset_arg'=>$_smarty_tpl->tpl_vars['offset_arg']->value,'clean'=>$_smarty_tpl->tpl_vars['clean']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'offset_arg'=>$_smarty_tpl->tpl_vars['offset_arg']->value,'clean'=>$_smarty_tpl->tpl_vars['clean']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php } elseif ($_smarty_tpl->tpl_vars['pluginlistpages']->value == 'y' && $_smarty_tpl->tpl_vars['pagination']->value != 'y') {?>
		<?php } else { ?>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'clean'=>$_smarty_tpl->tpl_vars['clean']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'clean'=>$_smarty_tpl->tpl_vars['clean']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'clean'=>$_smarty_tpl->tpl_vars['clean']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>
	<?php }
}
}
}
