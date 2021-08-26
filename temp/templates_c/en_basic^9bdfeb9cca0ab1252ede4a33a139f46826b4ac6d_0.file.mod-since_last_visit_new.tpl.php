<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:27:56
  from 'C:\xampp\htdocs\tikip4k\templates\modules\mod-since_last_visit_new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126455cad0688_65734587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bdfeb9cca0ab1252ede4a33a139f46826b4ac6d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\modules\\mod-since_last_visit_new.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126455cad0688_65734587 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tikimodule.php','function'=>'smarty_block_tikimodule',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_date.php','function'=>'smarty_modifier_tiki_short_date',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\vendor_bundled\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"since_last_visit_new",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']));
$_block_repeat=true;
echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"since_last_visit_new",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<div style="margin-bottom: 5px; text-align:center;">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_calendar'] == 'y' && $_smarty_tpl->tpl_vars['date_as_link']->value == 'y') {?>
				<a class="linkmodule" href="tiki-calendar.php?todate=<?php echo $_smarty_tpl->tpl_vars['slvn_info']->value['lastLogin'];?>
" title="click to edit">
			<?php }?>
			<b><?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['slvn_info']->value['lastLogin']);?>
</b>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_calendar'] == 'y') {?>
				</a>
			<?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['slvn_info']->value['cant'] == 0) {?>
			<div class="separator">Nothing has changed</div>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['use_jquery_ui']->value == "y") {?>
				<?php $_smarty_tpl->_assignInScope('fragment', 1);?>
				<div class="tabs">
					<ul class="nav nav-tabs">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slvn_info']->value['items'], 'slvn_item', false, 'pos');
$_smarty_tpl->tpl_vars['slvn_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pos']->value => $_smarty_tpl->tpl_vars['slvn_item']->value) {
$_smarty_tpl->tpl_vars['slvn_item']->do_else = false;
?>
							<?php if ($_smarty_tpl->tpl_vars['slvn_item']->value['count'] > 0) {?>
								<li class="nav-item text-center">
									<a data-toggle="tab" href="#fragment-<?php echo $_smarty_tpl->tpl_vars['fragment']->value;?>
" class="nav-link">
										<?php if ($_smarty_tpl->tpl_vars['pos']->value == "blogs") {?>
											<?php echo smarty_function_icon(array('name'=>"bold",'size'=>1,'ititle'=>"Blogs"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value == "blogPosts") {?>
											<?php echo smarty_function_icon(array('name'=>"bold",'size'=>1,'ititle'=>"Blog Posts"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value == "articles") {?>
											<?php echo smarty_function_icon(array('name'=>"newspaper-o",'size'=>1,'ititle'=>"Articles"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value == "posts") {?>
											<?php echo smarty_function_icon(array('name'=>"comments",'size'=>1,'ititle'=>"Forums"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value == "fileGalleries") {?>
											<?php echo smarty_function_icon(array('name'=>"folder-open",'size'=>1,'ititle'=>"File Galleries"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value == "files") {?>
											<?php echo smarty_function_icon(array('name'=>"file-o",'size'=>1,'ititle'=>"Files"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value == "imageGalleries") {?>
											<?php echo smarty_function_icon(array('name'=>"file-image-o",'size'=>1,'ititle'=>"Image Galleries"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value == "images") {?>
											<?php echo smarty_function_icon(array('name'=>"file-image-o",'size'=>1,'ititle'=>"Images"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value == "polls") {?>
											<?php echo smarty_function_icon(array('name'=>"tasks",'size'=>1,'ititle'=>"Poll"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value == "pages") {?>
											<?php echo smarty_function_icon(array('name'=>"textfile",'size'=>1,'ititle'=>"Wiki"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value == "comments") {?>
											<?php echo smarty_function_icon(array('name'=>"comments-o",'size'=>1,'ititle'=>"Comments"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value == "forums") {?>
											<?php echo smarty_function_icon(array('name'=>"comments",'size'=>1,'ititle'=>"Forums"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value == "trackers") {?>
											<?php echo smarty_function_icon(array('name'=>"database",'size'=>1,'ititle'=>"Tracker Items (New)"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value == "utrackers") {?>
											<?php echo smarty_function_icon(array('name'=>"database",'size'=>1,'ititle'=>"Tracker Items (Updated)"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value == "users") {?>
											<?php echo smarty_function_icon(array('name'=>"group",'size'=>1,'ititle'=>"Users"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value == "calendar") {?>
											<?php echo smarty_function_icon(array('name'=>"calendar",'size'=>1,'ititle'=>"Calendars"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value == "events") {?>
											<?php echo smarty_function_icon(array('name'=>"calendar",'size'=>1,'ititle'=>"Events"),$_smarty_tpl);?>

										<?php } else { ?>
											<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>

										<?php }?>
									</a>
								</li>
								<?php $_smarty_tpl->_assignInScope('fragment', $_smarty_tpl->tpl_vars['fragment']->value+1);?>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
				<?php $_smarty_tpl->_assignInScope('fragment', 1);?>
			<?php }?>
			<div class="tab-content">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slvn_info']->value['items'], 'slvn_item', false, 'pos');
$_smarty_tpl->tpl_vars['slvn_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pos']->value => $_smarty_tpl->tpl_vars['slvn_item']->value) {
$_smarty_tpl->tpl_vars['slvn_item']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['slvn_item']->value['count'] > 0) {?>
					<?php if ($_smarty_tpl->tpl_vars['use_jquery_ui']->value == "y") {?><div id="fragment-<?php echo $_smarty_tpl->tpl_vars['fragment']->value;?>
" class="tab-pane<?php if ($_smarty_tpl->tpl_vars['fragment']->value == 1) {?> active<?php }?>"><?php }?>
					<?php $_smarty_tpl->_assignInScope('cname', $_smarty_tpl->tpl_vars['slvn_item']->value['cname']);?>
					<?php if ($_smarty_tpl->tpl_vars['slvn_item']->value['count'] == $_smarty_tpl->tpl_vars['module_rows']->value) {?>
						<div class="separator"><a class="separator" href="javascript:flip('<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
');">Multiple <?php echo $_smarty_tpl->tpl_vars['slvn_item']->value['label'];?>
, including</a></div>
					<?php } else { ?>
						<div class="separator"><a class="separator" href="javascript:flip('<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['slvn_item']->value['count'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['slvn_item']->value['label'];?>
</a></div>
					<?php }?>
					<?php $_smarty_tpl->_assignInScope('showcname', ("show_").($_smarty_tpl->tpl_vars['cname']->value));?>

					<?php if ($_smarty_tpl->tpl_vars['pos']->value == 'trackers' || $_smarty_tpl->tpl_vars['pos']->value == 'utrackers') {?>
						<div id="<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
">

							
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slvn_item']->value['tid'], 'tracker', false, 'tp');
$_smarty_tpl->tpl_vars['tracker']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tp']->value => $_smarty_tpl->tpl_vars['tracker']->value) {
$_smarty_tpl->tpl_vars['tracker']->do_else = false;
?>
								<?php $_smarty_tpl->_assignInScope('tcname', $_smarty_tpl->tpl_vars['tracker']->value['cname']);?>
								<div class="separator" style="margin-left: 10px; display:<?php if (!(isset($_smarty_tpl->tpl_vars['cookie']->value[$_smarty_tpl->tpl_vars['showcname']->value])) || $_smarty_tpl->tpl_vars['cookie']->value[$_smarty_tpl->tpl_vars['showcname']->value] == 'y') {
echo $_smarty_tpl->tpl_vars['default_folding']->value;
} else {
echo $_smarty_tpl->tpl_vars['opposite_folding']->value;
}?>;">
									<?php $_smarty_tpl->_assignInScope('showtcname', ("show_").($_smarty_tpl->tpl_vars['tcname']->value));?>
									<a class="separator" href="javascript:flip('<?php echo $_smarty_tpl->tpl_vars['tcname']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['tracker']->value['count'];?>
&nbsp;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tracker']->value['label'] ));?>
</a>
									<div id="<?php echo $_smarty_tpl->tpl_vars['tcname']->value;?>
" style="display:<?php if (!(isset($_smarty_tpl->tpl_vars['cookie']->value[$_smarty_tpl->tpl_vars['showtcname']->value])) || $_smarty_tpl->tpl_vars['cookie']->value[$_smarty_tpl->tpl_vars['showtcname']->value] == 'y') {
echo $_smarty_tpl->tpl_vars['default_folding']->value;
} else {
echo $_smarty_tpl->tpl_vars['opposite_folding']->value;
}?>;">
										<?php if ($_smarty_tpl->tpl_vars['nonums']->value != 'y') {?><ol><?php } else { ?><ul><?php }?>
										<?php
$__section_xx_9_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tracker']->value['list']) ? count($_loop) : max(0, (int) $_loop));
$__section_xx_9_total = $__section_xx_9_loop;
$_smarty_tpl->tpl_vars['__smarty_section_xx'] = new Smarty_Variable(array());
if ($__section_xx_9_total !== 0) {
for ($__section_xx_9_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_xx']->value['index'] = 0; $__section_xx_9_iteration <= $__section_xx_9_total; $__section_xx_9_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_xx']->value['index']++){
?>
											<li><a class="linkmodule"
														href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tracker']->value['list'][(isset($_smarty_tpl->tpl_vars['__smarty_section_xx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_xx']->value['index'] : null)]['href'] ));?>
"
														title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tracker']->value['list'][(isset($_smarty_tpl->tpl_vars['__smarty_section_xx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_xx']->value['index'] : null)]['title'] ));?>
"><?php if ($_smarty_tpl->tpl_vars['tracker']->value['list'][(isset($_smarty_tpl->tpl_vars['__smarty_section_xx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_xx']->value['index'] : null)]['label'] == '') {?>-<?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tracker']->value['list'][(isset($_smarty_tpl->tpl_vars['__smarty_section_xx']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_xx']->value['index'] : null)]['label'] ));
}?>
													</a>
											</li>
										<?php
}
}
?>
										<?php if ($_smarty_tpl->tpl_vars['nonums']->value != 'y') {?></ol><?php } else { ?></ul><?php }?>
									</div>
								</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							
						</div>
					<?php } else { ?>
						<div id="<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
" style="display:<?php if (!(isset($_smarty_tpl->tpl_vars['cookie']->value[$_smarty_tpl->tpl_vars['showcname']->value])) || $_smarty_tpl->tpl_vars['cookie']->value[$_smarty_tpl->tpl_vars['showcname']->value] == 'y') {
echo $_smarty_tpl->tpl_vars['default_folding']->value;
} else {
echo $_smarty_tpl->tpl_vars['opposite_folding']->value;
}?>;">
							<?php if ($_smarty_tpl->tpl_vars['nonums']->value != 'y') {?><ol><?php } else { ?><ul><?php }?>
							<?php
$__section_ix_10_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['slvn_item']->value['list']) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_10_total = $__section_ix_10_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_10_total !== 0) {
for ($__section_ix_10_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_10_iteration <= $__section_ix_10_total; $__section_ix_10_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
								<li>
									<a class="linkmodule"
										href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slvn_item']->value['list'][(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['href'] ));?>
"
										title="<?php echo smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slvn_item']->value['list'][(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['title'] )),'&amp;','&');?>
"
									>
										<?php if ($_smarty_tpl->tpl_vars['slvn_item']->value['list'][(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['label'] == '') {?>-<?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slvn_item']->value['list'][(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['label'] ));
}?>
									</a>
								</li>
							<?php
}
}
?>
							<?php if ($_smarty_tpl->tpl_vars['nonums']->value != 'y') {?></ol><?php } else { ?></ul><?php }?>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['use_jquery_ui']->value == "y") {?>
						</div>
						<?php $_smarty_tpl->_assignInScope('fragment', $_smarty_tpl->tpl_vars['fragment']->value+1);?>
					<?php }?>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php }?>
	<?php $_block_repeat=false;
echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"since_last_visit_new",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
