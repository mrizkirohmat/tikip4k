<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:19:40
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-my_tiki.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126436cdb0e59_69105880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66027d3516eaa490e3a7471fb2c91586c7da1306' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-my_tiki.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tiki-mytiki_bar.tpl' => 1,
  ),
),false)) {
function content_6126436cdb0e59_69105880 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_datetime.php','function'=>'smarty_modifier_tiki_short_datetime',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),));
?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"My Account"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"My Account"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>My Account<?php $_block_repeat=false;
echo smarty_block_title(array('help'=>"My Account"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->_subTemplateRender('file:tiki-mytiki_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'my', null, null);?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki'] == 'y' && $_smarty_tpl->tpl_vars['mytiki_pages']->value == 'y') {?>
		<div id="content1" class="content clearfix mb-4">
			<h4><?php if ($_smarty_tpl->tpl_vars['userwatch']->value == $_smarty_tpl->tpl_vars['user']->value) {?>My pages<?php } else { ?>User Pages<?php }?></h4>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>
							<a href="tiki-my_tiki.php?sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'pageName_desc') {?>pageName_asc<?php } else { ?>pageName_desc<?php }?>">Page</a>
						</th>
						<th>Creator</th>
						<th>Last editor</th>
						<th>
							<a href="tiki-my_tiki.php?sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value == 'date_desc') {?>date_asc<?php } else { ?>date_desc<?php }?>">Last modification</a>
						</th>
						<th></th>
					</tr>

					<?php
$__section_ix_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['user_pages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_0_total = $__section_ix_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_0_total !== 0) {
for ($__section_ix_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_0_iteration <= $__section_ix_0_total; $__section_ix_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
						<tr>
							<td class="text">
								<a class="tips" title=":View" href="tiki-index.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['pageName'],"url" ));?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['user_pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['pageName'],40,"(...)");?>
</a>
							</td>
							<td class="username">
								<?php if ($_smarty_tpl->tpl_vars['userwatch']->value == $_smarty_tpl->tpl_vars['user_pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['creator']) {?>y<?php } else { ?>&nbsp;<?php }?>
							</td>
							<td class="username">
								<?php if ($_smarty_tpl->tpl_vars['userwatch']->value == $_smarty_tpl->tpl_vars['user_pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['lastEditor']) {?>y<?php } else { ?>&nbsp;<?php }?>
							</td>
							<td class="date">
								<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['user_pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['date']);?>

							</td>
							<td class="action">
								<a class="tips" href="tiki-editpage.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_pages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['pageName'],"url" ));?>
" title=":Edit">
									<?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>

								</a>
							</td>
						</tr>
					<?php
}
}
?>
				</table>
			</div>
				<ul class="nav nav-pills float-right">
					<li><a href="#">Records <span class="badge badge-secondary"><?php echo count($_smarty_tpl->tpl_vars['user_pages']->value);?>
</span></a></li>
				</ul>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_galleries'] == 'y' && $_smarty_tpl->tpl_vars['mytiki_gals']->value == 'y') {?>
		<div id="content2" class="content clearfix mb-4">
			<h4><?php if ($_smarty_tpl->tpl_vars['userwatch']->value == $_smarty_tpl->tpl_vars['user']->value) {?>My galleries<?php } else { ?>User Galleries<?php }?></h4>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>Gallery</th>
						<th style="width:50px"></th>
					</tr>

					<?php
$__section_ix_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['user_galleries']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_1_total = $__section_ix_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_1_total !== 0) {
for ($__section_ix_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_1_iteration <= $__section_ix_1_total; $__section_ix_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
						<tr>
							<td class="text">
								<a class="tips" title=":View" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['user_galleries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['galleryId'],'gallery');?>
">
									<?php echo $_smarty_tpl->tpl_vars['user_galleries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'];?>

								</a>
							</td>
							<td class="action">
								<a class="tips" href="tiki-galleries.php?editgal=<?php echo $_smarty_tpl->tpl_vars['user_galleries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['galleryId'];?>
" title=":Edit">
									<?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>

								</a>
							</td>
						</tr>
					<?php
}
}
?>
				</table>
			</div>
			<ul class="nav nav-pills float-right">
				<li><a href="#">Records <span class="badge badge-secondary"><?php echo count($_smarty_tpl->tpl_vars['user_galleries']->value);?>
</span></a></li>
			</ul>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles'] == 'y' && $_smarty_tpl->tpl_vars['mytiki_articles']->value == 'y') {?>
		<div id="content3" class="content clearfix mb-4">
			<h4><?php if ($_smarty_tpl->tpl_vars['userwatch']->value == $_smarty_tpl->tpl_vars['user']->value) {?>My Articles<?php } else { ?>User Articles<?php }?></h4>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>Article</th>
						<th style="width:50px"></th>
					</tr>

					<?php
$__section_ix_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['user_articles']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_2_total = $__section_ix_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_2_total !== 0) {
for ($__section_ix_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_2_iteration <= $__section_ix_2_total; $__section_ix_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
						<tr>
							<td class="text">
								<a class="tips" title=":Edit" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['user_articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['articleId'],'article');?>
">
									<?php echo $_smarty_tpl->tpl_vars['user_articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['title'];?>

								</a>
							</td>
							<td class="action">
								<a class="tips" href="tiki-edit_article.php?articleId=<?php echo $_smarty_tpl->tpl_vars['user_articles']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['articleId'];?>
" title=":Edit">
									<?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>

								</a>
							</td>
						</tr>
					<?php
}
}
?>
				</table>
			</div>
			<ul class="nav nav-pills float-right">
				<li><a href="#">Records <span class="badge badge-secondary"><?php echo count($_smarty_tpl->tpl_vars['user_articles']->value);?>
</span></a></li>
			</ul>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers'] == 'y' && $_smarty_tpl->tpl_vars['mytiki_user_items']->value == 'y') {?>
		<div id="content4" class="content clearfix mb-4">
			<h4><?php if ($_smarty_tpl->tpl_vars['userwatch']->value == $_smarty_tpl->tpl_vars['user']->value) {?>My User Items<?php } else { ?>User Items<?php }?></h4>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>Item</th>
						<th>Tracker</th>
					</tr>

					<?php
$__section_ix_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['user_items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_3_total = $__section_ix_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_3_total !== 0) {
for ($__section_ix_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_3_iteration <= $__section_ix_3_total; $__section_ix_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
						<tr>
							<td class="text">
								<a class="tips" title=":View" href="tiki-view_tracker_item.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['user_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['trackerId'];?>
&amp;itemId=<?php echo $_smarty_tpl->tpl_vars['user_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['itemId'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['user_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['value'];?>

								</a>
							</td>
							<td class="text">
								<a class="tips" title=":View" href="tiki-view_tracker.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['user_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['trackerId'];?>
">
									<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['user_items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
								</a>
							</td>
						</tr>
					<?php
}
}
?>
				</table>
			</div>
			<ul class="nav nav-pills float-right">
				<li><a href="#">Records <span class="badge badge-secondary"><?php echo count($_smarty_tpl->tpl_vars['user_items']->value);?>
</span></a>&nbsp;</li>
				<li><a href="#">Comments <span class="badge badge-secondary"><?php echo $_smarty_tpl->tpl_vars['nb_item_comments']->value;?>
</span></a></li>
			</ul>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_messages'] == 'y' && $_smarty_tpl->tpl_vars['mytiki_msgs']->value == 'y') {?>
		<div id="content5" class="content clearfix mb-4">
			<h4>Unread Messages</h4>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>Subject</th>
						<th>From</th>
						<th>Date</th>
					</tr>

					<?php
$__section_ix_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['msgs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_4_total = $__section_ix_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_4_total !== 0) {
for ($__section_ix_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_4_iteration <= $__section_ix_4_total; $__section_ix_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
						<tr>
							<td class="text">
								<a class="tips" title=":View" href="messu-read.php?offset=0&amp;flag=&amp;flagval=&amp;find=&amp;sort_mode=date_desc&amp;priority=&amp;msgId=<?php echo $_smarty_tpl->tpl_vars['msgs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['msgId'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['msgs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['subject'];?>

								</a>
							</td>
							<td class="text">
								<?php echo $_smarty_tpl->tpl_vars['msgs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['user_from'];?>

							</td>
							<td class="date">
								<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['msgs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['date']);?>

							</td>
						</tr>
					<?php
}
}
?>
				</table>
			</div>
			<ul class="nav nav-pills float-right">
				<li><a href="#">Records <span class="badge badge-secondary"><?php echo count($_smarty_tpl->tpl_vars['msgs']->value);?>
</span></a></li>
			</ul>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tasks'] == 'y' && $_smarty_tpl->tpl_vars['mytiki_tasks']->value == 'y') {?>
		<div id="content6" class="content clearfix mb-4">
			<h4><?php if ($_smarty_tpl->tpl_vars['userwatch']->value == $_smarty_tpl->tpl_vars['user']->value) {?>My tasks<?php } else { ?>My Tasks<?php }?></h4>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
				<tr>
					<th>Tasks</th>
				</tr>

				<?php
$__section_ix_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tasks']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_5_total = $__section_ix_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_5_total !== 0) {
for ($__section_ix_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_5_iteration <= $__section_ix_5_total; $__section_ix_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
					<tr>
						<td class="text">
							<a href="tiki-user_tasks.php?taskId=<?php echo $_smarty_tpl->tpl_vars['tasks']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['taskId'];?>
">
								<?php echo $_smarty_tpl->tpl_vars['tasks']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['title'];?>

							</a>
						</td>
					</tr>
				<?php
}
}
?>
			</table>
			</div>
			<ul class="nav nav-pills float-right">
				<li><a href="#">Records <span class="badge badge-secondary"><?php echo count($_smarty_tpl->tpl_vars['tasks']->value);?>
</span></a></li>
			</ul>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums'] == 'y' && $_smarty_tpl->tpl_vars['mytiki_forum_topics']->value == 'y') {?>
		<div id="content7" class="content clearfix mb-4">
			<h4><?php if ($_smarty_tpl->tpl_vars['userwatch']->value == $_smarty_tpl->tpl_vars['user']->value) {?>My forum topics<?php } else { ?>User forum topics<?php }?></h4>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>Forum topic</th>
						<th>Date of post</th>
					</tr>

					<?php
$__section_ix_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['user_forum_topics']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_6_total = $__section_ix_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_6_total !== 0) {
for ($__section_ix_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_6_iteration <= $__section_ix_6_total; $__section_ix_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
						<tr>
							<td class="text">
								<a class="tips" title=":View" href="tiki-view_forum_thread.php?comments_parentId=<?php echo $_smarty_tpl->tpl_vars['user_forum_topics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['threadId'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['user_forum_topics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['title'];?>

								</a>
							</td>
							<td class="date">
								<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['user_forum_topics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['commentDate']);?>

							</td>
						</tr>
					<?php
}
}
?>
				</table>
			</div>
			<ul class="nav nav-pills float-right">
				<li><a href="#">Records <span class="badge badge-secondary"><?php echo count($_smarty_tpl->tpl_vars['user_forum_topics']->value);?>
</span></a></li>
			</ul>
		</div>
	<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums'] == 'y' && $_smarty_tpl->tpl_vars['mytiki_forum_replies']->value == 'y') {?>
		<div id="content8" class="content clearfix mb-4">
			<h4><?php if ($_smarty_tpl->tpl_vars['userwatch']->value == $_smarty_tpl->tpl_vars['user']->value) {?>My forum replies<?php } else { ?>User forum replies<?php }?></h4>
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>Forum reply</th>
						<th>Date of post</th>
					</tr>

					<?php
$__section_ix_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['user_forum_replies']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_7_total = $__section_ix_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_7_total !== 0) {
for ($__section_ix_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_7_iteration <= $__section_ix_7_total; $__section_ix_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
						<tr>
							<td class="text">
								<a class="tips" title=":View" href="tiki-view_forum_thread.php?comments_parentId=<?php echo $_smarty_tpl->tpl_vars['user_forum_replies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['threadId'];?>
&amp;forumId=<?php echo $_smarty_tpl->tpl_vars['user_forum_replies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['object'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['user_forum_replies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['title'];?>

								</a>
							</td>
							<td class="date">
								<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['user_forum_replies']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['commentDate']);?>

							</td>
						</tr>
					<?php
}
}
?>
				</table>
			</div>
			<ul class="nav nav-pills float-right">
				<li><a href="#">Records <span class="badge badge-secondary"><?php echo count($_smarty_tpl->tpl_vars['user_forum_replies']->value);?>
</span></a></li>
			</ul>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs'] == 'y' && $_smarty_tpl->tpl_vars['mytiki_blogs']->value == 'y') {?>
		<div id="content9" class="content clearfix mb-4">
			<h4><?php if ($_smarty_tpl->tpl_vars['userwatch']->value == $_smarty_tpl->tpl_vars['user']->value) {?>My blogs<?php } else { ?>User Blogs<?php }?></h4>
			<div class="clearfix mb-4">
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<tr>
							<th>Blog</th>
							<th style="width:50px"></th>
						</tr>

						<?php
$__section_ix_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['user_blogs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_8_total = $__section_ix_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_8_total !== 0) {
for ($__section_ix_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_8_iteration <= $__section_ix_8_total; $__section_ix_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
							<tr>
								<td class="text">
									<a class="tips" title=":View" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['user_blogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['blogId'],'blog');?>
"><?php echo $_smarty_tpl->tpl_vars['user_blogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['title'];?>
</a>
								</td>
								<td class="action">
									<a class="tips" href="tiki-edit_blog.php?blogId=<?php echo $_smarty_tpl->tpl_vars['user_blogs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['blogId'];?>
" title=":Edit">
										<?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>

									</a>
								</td>
							</tr>
						<?php
}
}
?>
					</table>
				</div>
				<ul class="nav nav-pills float-right">
					<li><a href="#">Records <span class="badge badge-secondary"><?php echo count($_smarty_tpl->tpl_vars['user_blogs']->value);?>
</span></a></li>
				</ul>
			</div>
			<div class="clearfix">
				<h4><?php if ($_smarty_tpl->tpl_vars['userwatch']->value == $_smarty_tpl->tpl_vars['user']->value) {?>My blog Posts<?php } else { ?>User Blog Posts<?php }?></h4>
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<tr>
							<th>Blog post</th>
							<th style="width:50px"></th>
						</tr>

						<?php
$__section_ix_9_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['user_blog_posts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_9_total = $__section_ix_9_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_9_total !== 0) {
for ($__section_ix_9_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_9_iteration <= $__section_ix_9_total; $__section_ix_9_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
							<tr>
								<td class="text">
									<a class="tips" title=":View" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['user_blog_posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['postId'],'blogpost');?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user_blog_posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['title'] ));?>
</a>
								</td>
								<td class="action">
									<a class="tips" href="tiki-blog_post.php?postId=<?php echo $_smarty_tpl->tpl_vars['user_blog_posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['postId'];?>
" title=":Edit">
										<?php echo smarty_function_icon(array('name'=>'edit'),$_smarty_tpl);?>

									</a>
								</td>
							</tr>
						<?php
}
}
?>
					</table>
				</div>
				<ul class="nav nav-pills float-right">
					<li><a href="#">Records <span class="badge badge-secondary"><?php echo count($_smarty_tpl->tpl_vars['user_blog_posts']->value);?>
</span></a></li>
				</ul>
			</div>
		</div>
	<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'my');?>

<?php if (preg_replace('!\s+!u', '',$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'my')) == '') {?>
	To display the objects you created or contributed to: <a href="tiki-user_information.php#contentuser_information-2">My Items</a>
<?php }
}
}
