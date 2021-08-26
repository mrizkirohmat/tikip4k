<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:56:19
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-admin_newsletters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612668233a8c43_03493480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ffae54cf4a22eadcbcb6657b6ae9f64a1076537' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-admin_newsletters.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:find.tpl' => 1,
  ),
),false)) {
function content_612668233a8c43_03493480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tabset.php','function'=>'smarty_block_tabset',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tab.php','function'=>'smarty_block_tab',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.self_link.php','function'=>'smarty_block_self_link',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_datetime.php','function'=>'smarty_modifier_tiki_short_datetime',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.actions.php','function'=>'smarty_block_actions',),8=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.permission_link.php','function'=>'smarty_function_permission_link',),9=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),10=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.norecords.php','function'=>'smarty_function_norecords',),11=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.pagination_links.php','function'=>'smarty_block_pagination_links',),));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('help'=>"Newsletters"));
$_block_repeat=true;
echo smarty_block_title(array('help'=>"Newsletters"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Admin newsletters<?php $_block_repeat=false;
echo smarty_block_title(array('help'=>"Newsletters"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="t_navbar form-group row mb-4">
	<?php echo smarty_function_button(array('href'=>"tiki-admin_newsletters.php?cookietab=2",'_icon_name'=>"create",'_text'=>"Create"),$_smarty_tpl);?>

	<a role="link" href="tiki-newsletters.php" class="btn btn-link" title="List"><?php echo smarty_function_icon(array('name'=>"list"),$_smarty_tpl);?>
 List Newsletters</a>
	<a role="link" href="tiki-send_newsletters.php" class="btn btn-link" title="Send"><?php echo smarty_function_icon(array('name'=>"envelope"),$_smarty_tpl);?>
 Send Newsletters</a>

</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array());
$_block_repeat=true;
echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Newsletters"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Newsletters"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<h2>Newsletters</h2>

		<?php if ($_smarty_tpl->tpl_vars['channels']->value || ($_smarty_tpl->tpl_vars['find']->value != '')) {?>
			<?php $_smarty_tpl->_subTemplateRender('file:find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php }?>

		<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value) {?>table-responsive<?php }?>"> 
			<table class="table table-striped table-hover">
				<tr>
					<th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'nlId'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'nlId'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>ID<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'nlId'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
					<th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'name'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Newsletter<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'name'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
					<th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'author'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'author'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Author<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'author'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
					<th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'users'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'users'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Users<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'users'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
					<th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'editions'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'editions'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Editions<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'editions'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
					<th>Drafts</th>
					<th><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'lastSent'));
$_block_repeat=true;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastSent'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Last Sent<?php $_block_repeat=false;
echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lastSent'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></th>
					<th></th>
				</tr>

				<?php
$__section_user_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['channels']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_user_0_total = $__section_user_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_user'] = new Smarty_Variable(array());
if ($__section_user_0_total !== 0) {
for ($__section_user_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] = 0; $__section_user_0_iteration <= $__section_user_0_total; $__section_user_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']++){
?>
					<tr>
						<td class="id"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('cookietab'=>'2','_anchor'=>'anchor2','nlId'=>$_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['nlId'],'_title'=>"Edit"));
$_block_repeat=true;
echo smarty_block_self_link(array('cookietab'=>'2','_anchor'=>'anchor2','nlId'=>$_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['nlId'],'_title'=>"Edit"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['nlId'];
$_block_repeat=false;
echo smarty_block_self_link(array('cookietab'=>'2','_anchor'=>'anchor2','nlId'=>$_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['nlId'],'_title'=>"Edit"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
						<td class="text">
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('cookietab'=>'2','_anchor'=>'anchor2','nlId'=>$_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['nlId'],'_title'=>"Edit"));
$_block_repeat=true;
echo smarty_block_self_link(array('cookietab'=>'2','_anchor'=>'anchor2','nlId'=>$_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['nlId'],'_title'=>"Edit"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['name'] ));
$_block_repeat=false;
echo smarty_block_self_link(array('cookietab'=>'2','_anchor'=>'anchor2','nlId'=>$_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['nlId'],'_title'=>"Edit"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
							<div class="subcomment"><?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['description'] )));?>
</div>
						</td>
						<td class="username"><?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['author'];?>
</td>
						<td class="integer"><?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['users'];?>
 (<?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['confirmed'];?>
)</td>
						<td class="integer"><?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['editions'];?>
</td>
						<td class="integer"><?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['drafts'];?>
</td>
						<td class="date"><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['lastSent']);?>
</td>
						<td class="action">
							<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('actions', array());
$_block_repeat=true;
echo smarty_block_actions(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
								<action><?php echo smarty_function_permission_link(array('mode'=>'text','type'=>'newsletter','permType'=>'newsletters','id'=>$_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['nlId'],'title'=>$_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['name']),$_smarty_tpl);?>
</action><action><a href="tiki-admin_newsletter_subscriptions.php?nlId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['nlId'];?>
"><?php echo smarty_function_icon(array('name'=>'group','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Subscriptions"),$_smarty_tpl);?>
</a></action><action><a href="tiki-send_newsletters.php?nlId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['nlId'];?>
"><?php echo smarty_function_icon(array('name'=>'envelope','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Send newsletter"),$_smarty_tpl);?>
</a></action><action><a href="tiki-newsletter_archives.php?nlId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['nlId'];?>
"><?php echo smarty_function_icon(array('name'=>'file-archive','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Archives"),$_smarty_tpl);?>
</a></action><action><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','cookietab'=>'2','_anchor'=>'anchor2','nlId'=>$_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['nlId']));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','cookietab'=>'2','_anchor'=>'anchor2','nlId'=>$_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['nlId']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Edit<?php $_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','cookietab'=>'2','_anchor'=>'anchor2','nlId'=>$_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['nlId']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></action><action><?php ob_start();
echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('self_link', array('_icon_name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','remove'=>$_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['nlId'],'_onclick'=>"confirmSimple(event, 'Remove newsletter?', '".$_prefixVariable1."')"));
$_block_repeat=true;
echo smarty_block_self_link(array('_icon_name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','remove'=>$_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['nlId'],'_onclick'=>"confirmSimple(event, 'Remove newsletter?', '".$_prefixVariable1."')"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Remove<?php $_block_repeat=false;
echo smarty_block_self_link(array('_icon_name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','remove'=>$_smarty_tpl->tpl_vars['channels']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['nlId'],'_onclick'=>"confirmSimple(event, 'Remove newsletter?', '".$_prefixVariable1."')"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></action>
							<?php $_block_repeat=false;
echo smarty_block_actions(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						</td>
					</tr>
				<?php }} else {
 ?>
					<?php echo smarty_function_norecords(array('_colspan'=>8),$_smarty_tpl);?>

				<?php
}
?>
			</table>
		</div>

		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Newsletters"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Create/Edit Newsletters"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Create/Edit Newsletters"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<h2>Create/Edit Newsletters</h2>
		<?php if ((isset($_smarty_tpl->tpl_vars['individual']->value)) && $_smarty_tpl->tpl_vars['individual']->value == 'y') {?>
			<?php echo smarty_function_permission_link(array('mode'=>'link','type'=>'newsletter','permType'=>'newsletters','id'=>$_smarty_tpl->tpl_vars['info']->value['nlId'],'title'=>$_smarty_tpl->tpl_vars['info']->value['name'],'label'=>"There are individual permissions set for this newsletter"),$_smarty_tpl);?>

		<?php }?>

		<form action="tiki-admin_newsletters.php" method="post">
			<?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

			<input type="hidden" name="nlId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['nlId'] ));?>
">
			<input type="hidden" name="author" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user']->value ));?>
">
			<div class="form-group row">
				<label class="col-sm-3 col-form-label"> Name: </label>
				<div class="col-sm-9">
						<input class="form-control" type="text" name="name" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['name'] ));?>
">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-3 col-form-label" for="description">Description:</label>
				<div class="col-sm-9">
					<textarea class="form-control" name="description" id="description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['description'] ));?>
</textarea>
				</div>
			</div>
			<div class="col-sm-12 offset-sm-3">
				<div class="form-check">
					<label>
						<input type="checkbox" class="form-check-input" name="allowUserSub" <?php if ($_smarty_tpl->tpl_vars['info']->value['allowUserSub'] == 'y') {?>checked="checked"<?php }?>>
							Users can subscribe/unsubscribe to this list
					</label>
				</div>
			</div>
			<div class="col-sm-12 offset-sm-3">
				<div class="form-check">
					<label>
						<input type="checkbox" class="form-check-input" name="allowAnySub" <?php if ($_smarty_tpl->tpl_vars['info']->value['allowAnySub'] == 'y') {?>checked="checked"<?php }?>>
						Users can subscribe any email address
					</label>
				</div>
			</div>
			<div class="col-sm-12 offset-sm-3">
				<div class="form-check">
					<label>
						<input type="checkbox" class="form-check-input" name="unsubMsg" <?php if ($_smarty_tpl->tpl_vars['info']->value['unsubMsg'] == 'y') {?>checked="checked"<?php }?>>
						Add unsubscribe instructions to each newsletter
					</label>
				</div>
			</div>
			<div class="col-sm-12 offset-sm-3">
				<div class="form-check">
					<label>
						<input type="checkbox" class="form-check-input" name="validateAddr" <?php if ($_smarty_tpl->tpl_vars['info']->value['validateAddr'] == 'y') {?>checked="checked"<?php }?>>
						Validate email addresses
					</label>
				</div>
			</div>
			<div class="col-sm-12 offset-sm-3">
				<div class="form-check">
					<label>
						<input type="checkbox" class="form-check-input" name="allowTxt" <?php if ($_smarty_tpl->tpl_vars['info']->value['allowTxt'] == 'y') {?>checked="checked"<?php }?>>
						Allow customized text message to be sent with the HTML version
					</label>
				</div>
			</div>
			<div class="col-sm-12 offset-sm-3">
				<div class="form-check">
					<label>
						<input type="checkbox" class="form-check-input" name="allowArticleClip" <?php if ($_smarty_tpl->tpl_vars['info']->value['allowArticleClip'] == 'y') {?>checked="checked"<?php }?>>
						Allow clipping of articles into newsletter
					</label>
				</div>
			</div>
			<div class="col-sm-12 offset-sm-3">
				<div class="form-check">
					<label>
						<input type="checkbox" class="form-check-input" name="autoArticleClip" <?php if ($_smarty_tpl->tpl_vars['info']->value['autoArticleClip'] == 'y') {?>checked="checked"<?php }?>>
						Automatically clip articles into newsletter
					</label>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-12 offset-sm-3">
					<div class="form-check">
						<label>
							<input type="checkbox" class="form-check-input" name="emptyClipBlocksSend" <?php if ($_smarty_tpl->tpl_vars['info']->value['emptyClipBlocksSend'] == 'y') {?>checked="checked"<?php }?>>
							Do not send newsletter if clip is empty
						</label>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-3 col-form-label" for="articleClipRangeDays">Clip articles published in the past number of days</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="articleClipRangeDays" id="articleClipRangeDays" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['articleClipRangeDays'] ));?>
">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-3 col-form-label" for="articleClipTypes">Article types to clip</label>
				<div class="col-sm-9">
					<select id="articleClipTypes" name="articleClipTypes[]" class="form-control" multiple="multiple">
						<?php
$__section_type_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['articleTypes']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_type_1_total = $__section_type_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_type'] = new Smarty_Variable(array());
if ($__section_type_1_total !== 0) {
for ($__section_type_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_type']->value['index'] = 0; $__section_type_1_iteration <= $__section_type_1_total; $__section_type_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_type']->value['index']++){
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['articleTypes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_type']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_type']->value['index'] : null)];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['articleTypes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_type']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_type']->value['index'] : null)],$_smarty_tpl->tpl_vars['info']->value['articleClipTypes'])) {?>selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['articleTypes']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_type']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_type']->value['index'] : null)] ));?>
</option>
						<?php
}
}
?>
					</select>
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" name="save" value="Save">
			</div>
		</form>
	<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Create/Edit Newsletters"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_block_repeat=false;
echo smarty_block_tabset(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
