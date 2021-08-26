<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:57:29
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-listpages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264c49d38554_11965880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3d94e9a96c3b78e544a724cdfc8895fe57345c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-listpages.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:find.tpl' => 2,
    'file:tiki-listpages_content.tpl' => 1,
  ),
),false)) {
function content_61264c49d38554_11965880 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.title.php','function'=>'smarty_block_title',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tabset.php','function'=>'smarty_block_tabset',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tab.php','function'=>'smarty_block_tab',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.wikiplugin.php','function'=>'smarty_block_wikiplugin',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('title', array('admpage'=>"wiki",'help'=>"Using Wiki Pages#Listing_Pages"));
$_block_repeat=true;
echo smarty_block_title(array('admpage'=>"wiki",'help'=>"Using Wiki Pages#Listing_Pages"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Pages<?php $_block_repeat=false;
echo smarty_block_title(array('admpage'=>"wiki",'help'=>"Using Wiki Pages#Listing_Pages"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>'tabs_wikipages'));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>'tabs_wikipages'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"List Wiki Pages"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"List Wiki Pages"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<h2>List Wiki Pages</h2>
		<?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
			<div class="clearfix">
				<?php $_smarty_tpl->_subTemplateRender('file:find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('autocomplete'=>'pagename','find_show_languages'=>'y','find_show_languages_excluded'=>'y','find_show_categories_multi'=>'y','find_show_num_rows'=>'y','find_in'=>"<ul><li>Page name</li></ul>"), 0, false);
?>
			</div>
		<?php } else { ?>
			<?php $_smarty_tpl->_subTemplateRender('file:find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('map_only'=>'y'), 0, true);
?>
		<?php }?>
		<form name="checkform" method="get">
			<input type="hidden" name="offset" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['offset']->value ));?>
">
			<input type="hidden" name="sort_mode" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sort_mode']->value ));?>
">
			<input type="hidden" name="find" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['find']->value ));?>
">
			<input type="hidden" name="maxRecords" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['maxRecords']->value ));?>
">
		</form>
		<?php if ((isset($_smarty_tpl->tpl_vars['mapview']->value)) && $_smarty_tpl->tpl_vars['mapview']->value) {?>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('wikiplugin', array('_name'=>"map",'scope'=>".listpagesmap .geolocated",'width'=>"400",'height'=>"400"));
$_block_repeat=true;
echo smarty_block_wikiplugin(array('_name'=>"map",'scope'=>".listpagesmap .geolocated",'width'=>"400",'height'=>"400"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_wikiplugin(array('_name'=>"map",'scope'=>".listpagesmap .geolocated",'width'=>"400",'height'=>"400"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>
		<div id="tiki-listpages-content">
			<?php if ($_smarty_tpl->tpl_vars['aliases']->value) {?>
				<div class="aliases">
					<strong>Page aliases found:</strong>
					<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aliases']->value, 'alias');
$_smarty_tpl->tpl_vars['alias']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['alias']->value) {
$_smarty_tpl->tpl_vars['alias']->do_else = false;
?>
						<li>
							<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['alias']->value['parsedAlias']);?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alias']->value['fromPage'] ));?>
" class="alias"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alias']->value['toPage'] ));?>
</a>
						</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			<?php }?>
			<?php $_smarty_tpl->_subTemplateRender('file:tiki-listpages_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('clean'=>'n'), 0, false);
?>
		</div>
	<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"List Wiki Pages"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit']->value == 'y') {?>
		<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Create a Wiki Page"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Create a Wiki Page"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<h2>Create a Wiki Page</h2><br>
			<div>
				<form method="get" action="tiki-editpage.php">
					<div class="form-group row">
						<label class="col-form-label col-sm-3">Insert name of the page you wish to create</label>
						<div class="col-sm-9">
							<input class="form-control" id="pagename" type="text" name="page">
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['namespace_enabled'] == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['namespace_default']) {?>
					<div class="form-group row">
						<label class="col-sm-3 form-check-label"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['namespace_default']));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['namespace_default']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Create page within %0<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['namespace_default']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></label>
						<div class="col-sm-9">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" name="namespace" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['prefs']->value['namespace_default'] ));?>
" checked="checked">
							</div>
						</div>
					</div>
					<?php }?>
					<div class="form-group row">
						<label class="col-form-label col-sm-3"></label>
						<div class="col-sm-9">
							<input class="btn btn-primary" type="submit" name="quickedit" value="Create Page">
						</div>
					</div>

				</form>
			</div>
		<?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Create a Wiki Page"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>

<?php $_block_repeat=false;
echo smarty_block_tabset(array('name'=>'tabs_wikipages'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
