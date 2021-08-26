<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:56:41
  from 'C:\xampp\htdocs\tikip4k\templates\searchresults-plain.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61265a29532d27_84736547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0785875d3074d7898dde99ace0f665355956adb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\searchresults-plain.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61265a29532d27_84736547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.object_link.php','function'=>'smarty_function_object_link',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_long_datetime.php','function'=>'smarty_modifier_tiki_long_datetime',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.pagination_links.php','function'=>'smarty_block_pagination_links',),));
?>

<?php if (count($_smarty_tpl->tpl_vars['facets']->value)) {?>
	<div class="facets" style="width: 25%; float: right;">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facets']->value, 'facet');
$_smarty_tpl->tpl_vars['facet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['facet']->value) {
$_smarty_tpl->tpl_vars['facet']->do_else = false;
?>
			<div class="form-group row facet-hide-group">
				<label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['facet']->value['name'] ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['facet']->value['label'] ));?>
</label>
				<select id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['facet']->value['name'] ));?>
" class="form-control" multiple data-for="#search-form input[name$='filter~<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['facet']->value['name'] ));?>
']" data-join="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['facet']->value['operator'] ));?>
">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['options'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
						<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['label']->value ));?>
</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<div class="form-group row">
			<button class="btn btn-primary">Filter</button>
		</div>
	</div>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		$('.facets select').registerFacet();
		$('.facets button').click(function () {
			$('#search-form').submit();
		});

		// remove empty inputs to keep the url clean
		$('#search-form').submit(function () {
		    $(this)
		        .find('input[name]')
		        .filter(function () {
		            return ! this.value && this.name !== 'filter~content';
		        })
		        .prop('name', '');
		});
	<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>
<div>
<ul class="searchresults">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'result');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
	<li>
		<strong>
		<?php echo smarty_function_object_link(array('type'=>$_smarty_tpl->tpl_vars['result']->value['object_type'],'id'=>$_smarty_tpl->tpl_vars['result']->value['object_id'],'title'=>$_smarty_tpl->tpl_vars['result']->value['title'],'url'=>$_smarty_tpl->tpl_vars['result']->value['url']),$_smarty_tpl);?>


		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_object_type'] == 'y') {?>
			(<span class="objecttype"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['result']->value['object_type'] ));
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></span>)
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_pertinence'] == 'y' && !empty($_smarty_tpl->tpl_vars['result']->value['score'])) {?>
			<span class="itemrelevance">(Relevance: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['result']->value['score'] ));?>
)</span>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_visit_count'] == 'y' && $_smarty_tpl->tpl_vars['result']->value['visits'] != null) {?>
			<span class="itemhits">(Visits: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['result']->value['visits'] ));?>
)</span>
		<?php }?>

		<?php if (!empty($_smarty_tpl->tpl_vars['result']->value['parent_object_id'])) {?> in <?php echo smarty_function_object_link(array('type'=>$_smarty_tpl->tpl_vars['result']->value['parent_object_type'],'id'=>$_smarty_tpl->tpl_vars['result']->value['parent_object_id']),$_smarty_tpl);
}?>

		<?php if ($_smarty_tpl->tpl_vars['result']->value['_external']) {?><span class="label label-info">External</span><?php }?>
		</strong>

		<blockquote>
			<p><?php echo $_smarty_tpl->tpl_vars['result']->value['highlight'];?>
</p>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_last_modification'] == 'y') {?>
				<div class="searchdate small">Last modification: <?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['result']->value['modification_date']);?>
</div>
			<?php }?>
		</blockquote>
	</li>
	<?php
}
if ($_smarty_tpl->tpl_vars['result']->do_else) {
?>
			<li>No pages matched the search criteria test </li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('pagination_links', array('resultset'=>$_smarty_tpl->tpl_vars['results']->value));
$_block_repeat=true;
echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['results']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_pagination_links(array('resultset'=>$_smarty_tpl->tpl_vars['results']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
<?php }
}
