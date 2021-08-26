<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:26:31
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-view_articles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264507735aa6_70867884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '173852b55e6a7fe5b3c958354992d8c274537d4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-view_articles.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:translated-lang.tpl' => 1,
  ),
),false)) {
function content_61264507735aa6_70867884 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.self_link.php','function'=>'smarty_block_self_link',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.avatarize.php','function'=>'smarty_modifier_avatarize',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.object_link.php','function'=>'smarty_function_object_link',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.username.php','function'=>'smarty_modifier_username',),9=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_datetime.php','function'=>'smarty_modifier_tiki_short_datetime',),10=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.rating_result_avg.php','function'=>'smarty_function_rating_result_avg',),11=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.rating.php','function'=>'smarty_function_rating',),12=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.rating_result.php','function'=>'smarty_function_rating_result',),13=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.repeat.php','function'=>'smarty_block_repeat',),14=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),15=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.pagination_links.php','function'=>'smarty_block_pagination_links',),));
if (!(isset($_smarty_tpl->tpl_vars['actions']->value)) || $_smarty_tpl->tpl_vars['actions']->value == "y") {?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_home_title'] != '') {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"Articles",'admpage'=>"articles"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"Articles",'admpage'=>"articles"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['art_home_title'] == 'topic' && !empty($_smarty_tpl->tpl_vars['topic']->value)) {?>
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['topic']->value ));
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['art_home_title'] == 'type' && !empty($_smarty_tpl->tpl_vars['type']->value)) {?>
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['type']->value ));
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php } else { ?>Articles<?php }?>
		<?php $_block_repeat=false;
echo smarty_block_title(array('help'=>"Articles",'admpage'=>"articles"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['headerLinks']->value == "y") {?>
		<div class="t_navbar mb-4">
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_article']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value == 'y') {?>
				<?php echo smarty_function_button(array('href'=>"tiki-edit_article.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"create",'_text'=>"New Article"),$_smarty_tpl);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_submissions'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_edit_submission']->value == "y" && $_smarty_tpl->tpl_vars['tiki_p_edit_article']->value != 'y' && $_smarty_tpl->tpl_vars['tiki_p_admin']->value != 'y' && $_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value != 'y') {?>
				<?php echo smarty_function_button(array('href'=>"tiki-edit_submission.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"create",'_text'=>"New Submission"),$_smarty_tpl);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_read_article']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_articles_read_heading']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value == 'y') {?>
				<?php echo smarty_function_button(array('href'=>"tiki-list_articles.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"list",'_text'=>"List Articles"),$_smarty_tpl);?>

			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_submissions'] == 'y' && ($_smarty_tpl->tpl_vars['tiki_p_approve_submission']->value == "y" || $_smarty_tpl->tpl_vars['tiki_p_remove_submission']->value == "y" || $_smarty_tpl->tpl_vars['tiki_p_edit_submission']->value == "y")) {?>
				<?php echo smarty_function_button(array('href'=>"tiki-list_submissions.php",'_type'=>"link",'class'=>"btn btn-link",'_icon_name'=>"view",'_text'=>"View Submissions"),$_smarty_tpl);?>

			<?php }?>
			<div class="btn-group float-right">
				<?php if (!$_smarty_tpl->tpl_vars['js']->value) {?><ul class="cssmenu_horiz"><li><?php }?>
				<a class="btn btn-link" data-toggle="dropdown" data-hover="dropdown" href="#">
					<?php echo smarty_function_icon(array('name'=>'menu-extra'),$_smarty_tpl);?>

				</a>
				<div class="dropdown-menu dropdown-menu-right">
					<h6 class="dropdown-header">
						Monitoring
					</h6>
					<div class="dropdown-divider"></div>
					<?php if ($_smarty_tpl->tpl_vars['user_watching_articles']->value == 'n') {?>
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('watch_event'=>'article_*','watch_object'=>'*','watch_action'=>'add','_icon_name'=>'watch','_class'=>'dropdown-item','_text'=>"Monitor articles"));
$_block_repeat=true;
echo smarty_block_self_link(array('watch_event'=>'article_*','watch_object'=>'*','watch_action'=>'add','_icon_name'=>'watch','_class'=>'dropdown-item','_text'=>"Monitor articles"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php $_block_repeat=false;
echo smarty_block_self_link(array('watch_event'=>'article_*','watch_object'=>'*','watch_action'=>'add','_icon_name'=>'watch','_class'=>'dropdown-item','_text'=>"Monitor articles"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php } else { ?>
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('watch_event'=>'article_*','watch_object'=>'*','watch_action'=>'remove','_icon_name'=>'stop-watching','_class'=>'dropdown-item','_text'=>"Stop monitoring articles"));
$_block_repeat=true;
echo smarty_block_self_link(array('watch_event'=>'article_*','watch_object'=>'*','watch_action'=>'remove','_icon_name'=>'stop-watching','_class'=>'dropdown-item','_text'=>"Stop monitoring articles"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php $_block_repeat=false;
echo smarty_block_self_link(array('watch_event'=>'article_*','watch_object'=>'*','watch_action'=>'remove','_icon_name'=>'stop-watching','_class'=>'dropdown-item','_text'=>"Stop monitoring articles"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_group_watches'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_admin_users']->value == 'y') {?>
						<a class="dropdown-item" href="tiki-object_watches.php?watch_event=article_*&amp;objectId=*">
							<?php echo smarty_function_icon(array('name'=>'watch-group'),$_smarty_tpl);?>
 Group monitor
						</a>
					<?php }?>
				</div>
				<?php if (!$_smarty_tpl->tpl_vars['js']->value) {?></li></ul><?php }?>
			</div>
		</div>
	<?php }
}?>

<?php
$__section_ix_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['listpages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_0_total = $__section_ix_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_0_total !== 0) {
for ($__section_ix_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_0_iteration <= $__section_ix_0_total; $__section_ix_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first'] = ($__section_ix_0_iteration === 1);
?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'href', null, null);
if (empty($_smarty_tpl->tpl_vars['urlparam']->value)) {
if ($_smarty_tpl->tpl_vars['useLinktoURL']->value == 'n' || empty($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['linkto'])) {
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['articleId'],'article');
} else {
echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['linkto'];
}
} else {
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['articleId'],'article','with_next');
echo $_smarty_tpl->tpl_vars['urlparam']->value;
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['disp_article'] == 'y') {?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_view_freetags']->value == 'y' && count($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['freetags']['data']) > 0) {?>
			<div class="freetaglist">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['freetags']['data'], 'taginfo');
$_smarty_tpl->tpl_vars['taginfo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['taginfo']->value) {
$_smarty_tpl->tpl_vars['taginfo']->do_else = false;
?>
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'tagurl', null, null);?>
						<?php if ((strstr($_smarty_tpl->tpl_vars['taginfo']->value['tag'],' '))) {?>"<?php echo $_smarty_tpl->tpl_vars['taginfo']->value['tag'];?>
"<?php } else {
echo $_smarty_tpl->tpl_vars['taginfo']->value['tag'];
}?>
					<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<a class="freetag" href="tiki-browse_freetags.php?tag=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tagurl'),'url' ));?>
">
						<?php echo $_smarty_tpl->tpl_vars['taginfo']->value['tag'];?>

					</a>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php }?>
		<article class="clearfix article <?php if (!empty($_smarty_tpl->tpl_vars['container_class']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['container_class']->value;
}?> article<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null);?>
 mt-1 mb-5">
			<?php if (($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_avatar'] == 'y')) {?>
				<div class="avatar float-left mr-3">
					<?php echo smarty_modifier_avatarize($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['author']);?>

				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_topline'] == 'y' && $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['topline']) {?>
				<div class="articletopline">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['topline'] ));?>

				</div>
			<?php }?>

			<header class="articletitle mt-0 mx-0 mb-1">
				<h2>
					<?php echo smarty_function_object_link(array('type'=>'article','id'=>$_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['articleId'],'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'href'),'title'=>$_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['title']),$_smarty_tpl);?>

				</h2>
				<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_subtitle'] == 'y' && $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['subtitle']) {?><div class="articlesubtitle"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['subtitle'] ));?>
</div><?php }?>
				<?php if (($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_author'] == 'y') || ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_pubdate'] == 'y') || ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_expdate'] == 'y') || ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_reads'] == 'y')) {?>
					<span class="titleb">
						<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_author'] == 'y') {?>
							<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['authorName']) {?>
								<span class="author">
									Author: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['authorName'] ));?>

								</span>
							<?php } else { ?>
								<span class="author">
									Author: <?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['author']);?>

								</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_pubdate'] == 'y' || $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_expdate'] == 'y' || $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_reads'] == 'y') {?>
								-
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_pubdate'] == 'y') {?>
							<span class="pubdate">
								Published <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['publishDate']);?>

							</span>
							<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_expdate'] == 'y' || $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_reads'] == 'y') {?>
								-
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_expdate'] == 'y') {?>
							<span class="expdate">
								Expires <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['expireDate']);?>

							</span>
							<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_reads'] == 'y') {?>
								-
							<?php }?>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_reads'] == 'y') {?>
							<span class="reads">
								(<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['nbreads'];?>
 Reads)
							</span>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['comment_can_rate_article'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['article_user_rating'] == 'y' && ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['perms']['tiki_p_ratings_view_results'] == 'y' || $_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y')) {?>
							- <span class="ratingResultAvg">
								Users rating: 
							</span><?php echo smarty_function_rating_result_avg(array('id'=>$_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['articleId'],'type'=>'article'),$_smarty_tpl);?>

						<?php }?>
					</span><br>
				<?php }?>
				<?php ob_start();
echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['body'];
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['author']->value != $_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['comment_can_rate_article'] == 'y' && empty($_prefixVariable1) && !(isset($_smarty_tpl->tpl_vars['preview']->value)) && $_smarty_tpl->tpl_vars['prefs']->value['article_user_rating'] == 'y' && ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['perms']['tiki_p_rate_article'] == 'y' || $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['perms']['tiki_p_admin_cms'] == 'y')) {?>
					<div class="articleheading">
						<form method="post" action="">
							<?php echo smarty_function_rating(array('type'=>'article','id'=>$_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['articleId']),$_smarty_tpl);?>

						</form>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['comment_can_rate_article'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['article_user_rating'] == 'y' && ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['perms']['tiki_p_ratings_view_results'] == 'y' || $_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y')) {?>
					<div class="articleheading">
						<?php echo smarty_function_rating_result(array('id'=>$_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['articleId'],'type'=>'article'),$_smarty_tpl);?>

					</div>
				<?php }?>
			</header>

			<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['use_ratings'] == 'y') {?>
				<div class="articleheading">
					Rating:
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('repeat', array('count'=>$_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['rating']));
$_block_repeat=true;
echo smarty_block_repeat(array('count'=>$_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['rating']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php echo smarty_function_icon(array('name'=>'star'),$_smarty_tpl);?>

					<?php $_block_repeat=false;
echo smarty_block_repeat(array('count'=>$_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['rating']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['rating'] > $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['entrating']) {?>
						<?php echo smarty_function_icon(array('name'=>'star-half'),$_smarty_tpl);?>

					<?php }?>
					(<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['rating'];?>
/10)
				</div>
			<?php }?>

			<div class="articleheading media">
				<div <?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['isfloat'] == 'n') {?>class="media-left"<?php }?>>
					<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_image'] == 'y') {?>
						<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['useImage'] == 'y') {?>
							<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['hasImage'] == 'y') {?>
								<a
									href="<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'href');?>
" <?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['isfloat'] == 'y') {?> style="margin-right:20px; float:left;"<?php }?>
									title="<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_image_caption'] && $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['image_caption']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['image_caption'] ));
} elseif ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['topicName']) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['topicName'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else { ?>Read More<?php }?>">
									<?php $_smarty_tpl->_assignInScope('style', '');?>
									<img class="img-thumbnail media-object article-image custom-image"
										alt="<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_image_caption'] && $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['image_caption']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['image_caption'] ));
} elseif ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['topicName']) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['topicName'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>"
										src="article_image.php?image_type=article&amp;id=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['articleId'];
if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['list_image_x'] > 0 && ($_smarty_tpl->tpl_vars['largefirstimage']->value != 'y' || !(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first'] : null))) {?>&amp;width=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['list_image_x'];
} elseif ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['image_x'] > 0) {?>&amp;width=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['image_x'];
}?>&amp;cache=y"<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['list_image_y'] > 0 && ($_smarty_tpl->tpl_vars['largefirstimage']->value != 'y' || !(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['first'] : null))) {
$_smarty_tpl->_assignInScope('style', ((($_smarty_tpl->tpl_vars['style']->value).("max-height:")).($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['list_image_y'])).("px;"));
} elseif ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['image_y'] > 0) {
$_smarty_tpl->_assignInScope('style', ((($_smarty_tpl->tpl_vars['style']->value).("max-height:")).($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['image_y'])).("px;"));
}?>style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
">
								</a>
							<?php } else { ?>
								
							<?php }?>
						<?php } else { ?>
							<?php if ((isset($_smarty_tpl->tpl_vars['topics']->value[$_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['topicId']]['image_size'])) && $_smarty_tpl->tpl_vars['topics']->value[$_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['topicId']]['image_size'] > 0) {?>
								<a href="<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'href');?>
" class="thumbnail"<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['isfloat'] == 'y') {?> style="margin-right:20px; float:left;"<?php }?>
										title="<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_image_caption'] && $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['image_caption']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['image_caption'] ));
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['topicName'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>">
									<img class="media-object img-thumbnail article-image topic-image"
											alt="<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_image_caption'] && $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['image_caption']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['image_caption'] ));
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['topicName'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>"
											src="article_image.php?image_type=topic&amp;id=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['topicId'];?>
">
								</a>
							<?php }?>
						<?php }?>
					<?php }?>
				</div>
				<div class="articleheadingtext<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['isfloat'] == 'n') {?> media-body<?php }?>"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['parsed_heading'];?>
</div>
			</div>
					<?php if ((isset($_smarty_tpl->tpl_vars['fullbody']->value)) && $_smarty_tpl->tpl_vars['fullbody']->value == "y") {?>
			<div class="articlebody py-3"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['parsed_body'];?>
</div>
					<?php }?>

			<div class="articletrailer clearfix">
				<?php if (($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['size'] > 0) || (($_smarty_tpl->tpl_vars['prefs']->value['feature_article_comments'] == 'y') && ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['perms']['tiki_p_read_comments'] == 'y'))) {?>
				<ul class="list-inline float-left">
					<?php if (($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['perms']['tiki_p_read_article'] == 'y' && $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['heading_only'] != 'y' && (!(isset($_smarty_tpl->tpl_vars['fullbody']->value)) || $_smarty_tpl->tpl_vars['fullbody']->value != "y"))) {?>
						<?php if (($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['size'] > 0 && !empty($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['body']))) {?>

							<li class="list-inline-item status"> 
								<a href="<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'href');?>
" class="more"><?php echo smarty_function_icon(array('name'=>"book-reader"),$_smarty_tpl);?>
 Read More</a>
							</li>
							<?php if (($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['show_size'] == 'y')) {?>
								<li class="list-inline-item">
									(<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['size'];?>
 bytes)
								</li>
							<?php }?>
						<?php }?>
					<?php }?>
					<?php if (($_smarty_tpl->tpl_vars['prefs']->value['feature_article_comments'] == 'y') && ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['perms']['tiki_p_read_comments'] == 'y') && ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['allow_comments'] == 'y')) {?>
						<li class="list-inline-item">
							<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['articleId'],'article','with_next');
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl'] != 'y') {?>&amp;<?php }?>show_comzone=y<?php if (!empty($_smarty_tpl->tpl_vars['urlparam']->value)) {?>&amp;<?php echo $_smarty_tpl->tpl_vars['urlparam']->value;
}?>#comments"<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['comments_cant'] > 0) {?> class="mark"<?php }?>>
								<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['comments_cant'] == 0 && $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['perms']['tiki_p_post_comments'] == 'y') {?>
									<?php if (!(isset($_smarty_tpl->tpl_vars['actions']->value)) || $_smarty_tpl->tpl_vars['actions']->value == "y") {?>
										<?php echo smarty_function_icon(array('name'=>"comment"),$_smarty_tpl);?>
 Add Comment
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['perms']['tiki_p_read_comments'] == 'y') {?>
									<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['comments_cant'] == 1) {?>
                                        <?php echo smarty_function_icon(array('name'=>"comment"),$_smarty_tpl);?>
 1 comment
									<?php } else { ?>
                                        <?php echo smarty_function_icon(array('name'=>"comments"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['comments_cant'];?>
&nbsp;comments
									<?php }?>
								<?php }?>
							</a>
						</li>
					<?php }?>
					</ul>
				<?php }?>
				<?php if (!(isset($_smarty_tpl->tpl_vars['actions']->value)) || $_smarty_tpl->tpl_vars['actions']->value == "y") {?>
					<div class="btn-group actions float-right dropup">
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual'] == 'y' && $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['perms']['tiki_p_edit_article'] == 'y') {?>
							<?php $_smarty_tpl->_subTemplateRender('file:translated-lang.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>'article','trads'=>$_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['translations'],'articleId'=>$_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['articleId']), 0, true);
?>
						<?php }?>
						<div class="btn-group">
							<a class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#">
								<?php echo smarty_function_icon(array('name'=>"wrench"),$_smarty_tpl);?>

							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<h6 class="dropdown-header">
									<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>((string)$_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['title'])));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>((string)$_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['title'])), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Actions for %0<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>((string)$_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['title'])), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
								</h6>
								<div class="dropdown-divider"></div>
								<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['perms']['tiki_p_edit_article'] == 'y' || (!empty($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['author'] == $_smarty_tpl->tpl_vars['user']->value && $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['creator_edit'] == 'y')) {?>
									<a class="dropdown-item" href="tiki-edit_article.php?articleId=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['articleId'];?>
">
										<?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>
 Edit
									</a>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_cms_print'] == 'y') {?>
									<a class="dropdown-item" href="tiki-print_article.php?articleId=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['articleId'];?>
">
										<?php echo smarty_function_icon(array('name'=>'print'),$_smarty_tpl);?>
 Print
									</a>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['perms']['tiki_p_remove_article'] == 'y') {?>
									<a class="dropdown-item" href="tiki-list_articles.php?remove=<?php echo $_smarty_tpl->tpl_vars['listpages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['articleId'];?>
">
										<?php echo smarty_function_icon(array('name'=>'remove'),$_smarty_tpl);?>
 Remove
									</a>
								<?php }?>
							</div>
						</div>
					</div>
				<?php }?>
			</div>

		</article>
	<?php }
}} else {
 ?>
	<?php if ($_smarty_tpl->tpl_vars['quiet']->value != 'y') {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'info','title'=>"No articles yet.",'close'=>"n"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'info','title'=>"No articles yet.",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'info','title'=>"No articles yet.",'close'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }
}
?>

<?php if (!(isset($_smarty_tpl->tpl_vars['actions']->value)) || $_smarty_tpl->tpl_vars['actions']->value == "y") {?>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_article']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value == 'y') {?>
		<br/><a href="tiki-edit_article.php<?php if (((isset($_smarty_tpl->tpl_vars['topicId']->value)) && !empty($_smarty_tpl->tpl_vars['topicId']->value)) || ((isset($_smarty_tpl->tpl_vars['type']->value)) && !empty($_smarty_tpl->tpl_vars['type']->value))) {?>?<?php }
if ((isset($_smarty_tpl->tpl_vars['topicId']->value)) && !empty($_smarty_tpl->tpl_vars['topicId']->value) && is_numeric($_smarty_tpl->tpl_vars['topicId']->value)) {?>topicId=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['topicId']->value ));
}
if ((isset($_smarty_tpl->tpl_vars['type']->value)) && !empty($_smarty_tpl->tpl_vars['type']->value)) {?>&type=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['type']->value ));
}?>" class="alert-link">
			<?php echo smarty_function_icon(array('name'=>"create"),$_smarty_tpl);?>
 New article
		</a>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_submissions'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_edit_submission']->value == "y" && $_smarty_tpl->tpl_vars['tiki_p_edit_article']->value != 'y' && $_smarty_tpl->tpl_vars['tiki_p_admin']->value != 'y' && $_smarty_tpl->tpl_vars['tiki_p_admin_cms']->value != 'y') {?>
		<br/><a href="tiki-edit_submission.php<?php if (((isset($_smarty_tpl->tpl_vars['topicId']->value)) && !empty($_smarty_tpl->tpl_vars['topicId']->value)) || ((isset($_smarty_tpl->tpl_vars['type']->value)) && !empty($_smarty_tpl->tpl_vars['type']->value))) {?>?<?php }
if ((isset($_smarty_tpl->tpl_vars['topicId']->value)) && !empty($_smarty_tpl->tpl_vars['topicId']->value) && is_numeric($_smarty_tpl->tpl_vars['topicId']->value)) {?>topicId=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['topicId']->value ));
}
if ((isset($_smarty_tpl->tpl_vars['type']->value)) && !empty($_smarty_tpl->tpl_vars['type']->value)) {?>&type=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['type']->value ));
}?>" class="alert-link">
			<?php echo smarty_function_icon(array('name'=>"create"),$_smarty_tpl);?>
 New Submission
		</a>
	<?php }
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['listpages']->value) && (!(isset($_smarty_tpl->tpl_vars['usePagination']->value)) || $_smarty_tpl->tpl_vars['usePagination']->value != 'n')) {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxArticles']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxArticles']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ((isset($_smarty_tpl->tpl_vars['urlnext']->value))) {
echo $_smarty_tpl->tpl_vars['urlnext']->value;
}
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxArticles']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
