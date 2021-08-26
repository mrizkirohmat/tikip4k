<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:41:46
  from 'C:\xampp\htdocs\tikip4k\templates\find.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126489a188591_21285526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7abe69464b49527e6311af2706fa7901a5f07fd5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\find.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126489a188591_21285526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.query.php','function'=>'smarty_function_query',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tr_if.php','function'=>'smarty_modifier_tr_if',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.select_all.php','function'=>'smarty_function_select_all',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.html_select_duration.php','function'=>'smarty_function_html_select_duration',),));
?>




<div class="find mb-2">
	<form method="post" role="form" class="form">
		<?php if (!(isset($_smarty_tpl->tpl_vars['map_only']->value)) || $_smarty_tpl->tpl_vars['map_only']->value != 'y') {?>
			<div class="form-group row mx-0">
			<?php if (!empty($_smarty_tpl->tpl_vars['filegals_manager']->value)) {?><input type="hidden" name="filegals_manager"
												 value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filegals_manager']->value ));?>
"><?php }?>
			<?php echo smarty_function_query(array('_type'=>'form_input','maxRecords'=>'NULL','type'=>'NULL','types'=>'NULL','find'=>'NULL','topic'=>'NULL','lang'=>'NULL','exact_match'=>'NULL','categId'=>'NULL','cat_categories'=>'NULL','filegals_manager'=>'NULL','save'=>'NULL','offset'=>0,'searchlist'=>'NULL','searchmap'=>'NULL'),$_smarty_tpl);?>

			<div class="input-group">
				<input class="form-control" type="text" name="find" id="find" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['find']->value ));?>
"
					   placeholder="<?php if (empty($_smarty_tpl->tpl_vars['whatlabel']->value)) {?>Find...<?php } else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['whatlabel']->value;
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>"
					   title="<?php if (!empty($_smarty_tpl->tpl_vars['find_in']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['find_in']->value ));
}?>" data-html="true" data-toggle="focus">
				<?php if ((isset($_smarty_tpl->tpl_vars['autocomplete']->value))) {?>
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>$("#find").tiki("autocomplete", "<?php echo $_smarty_tpl->tpl_vars['autocomplete']->value;?>
");<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php }?>
				<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					jQuery("#find").tooltip();
				<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			</div>
			<?php if (!empty($_smarty_tpl->tpl_vars['find_show_sub']->value) && $_smarty_tpl->tpl_vars['find_show_sub']->value == 'y') {?>
				<div class="input-group">
					<label class="control-label col-sm-8 findsub" for="find_sub" >
						Search child file galleries
					</label>
					<div class="col-sm-4" >
						<input type="checkbox" name="find_sub" id="find_sub" <?php if ($_smarty_tpl->tpl_vars['find_sub']->value == 'y') {?>checked="checked"<?php }?>/>
					</div>
				</div>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['find']->value) || !empty($_smarty_tpl->tpl_vars['find_type']->value) || !empty($_smarty_tpl->tpl_vars['find_topic']->value) || !empty($_smarty_tpl->tpl_vars['find_lang']->value) || !empty($_smarty_tpl->tpl_vars['find_langOrphan']->value) || !empty($_smarty_tpl->tpl_vars['find_categId']->value) || !empty($_smarty_tpl->tpl_vars['find_orphans']->value) || !empty($_smarty_tpl->tpl_vars['find_other_val']->value) || $_smarty_tpl->tpl_vars['maxRecords']->value != $_smarty_tpl->tpl_vars['prefs']->value['maxRecords']) {?>
				<div class="find-clear-filter text-center">
					<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_SERVER['SCRIPT_NAME'] ));?>
?<?php echo smarty_function_query(array('find'=>'','type'=>'','types'=>'','topic'=>'','lang'=>'','langOrphan'=>'','categId'=>'','maxRecords'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'find_from_Month'=>'','find_from_Day'=>'','find_from_Year'=>'','find_to_Month'=>'','find_to_Day'=>'','find_to_Year'=>''),$_smarty_tpl);?>
"
					   title="Clear Filter" class="btn btn-link">Clear Filter</a>
				</div>
			<?php }?>
		</div>
		<?php if (!empty($_smarty_tpl->tpl_vars['types']->value) && (!(isset($_smarty_tpl->tpl_vars['types_tag']->value)) || $_smarty_tpl->tpl_vars['types_tag']->value == 'select')) {?>
			<div class="form-group row mx-0">
				<label class="col-form-label col-sm-5">
					Article Type
				</label>
				<div class="col-sm-7">
					<select name="type" class="findtypes form-control form-control-sm">
						<option value='' <?php if ($_smarty_tpl->tpl_vars['find_type']->value == '') {?>selected="selected"<?php }?>>any type</option>
						<?php
$__section_t_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['types']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_t_1_total = $__section_t_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_t'] = new Smarty_Variable(array());
if ($__section_t_1_total !== 0) {
for ($__section_t_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_t']->value['index'] = 0; $__section_t_1_iteration <= $__section_t_1_total; $__section_t_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_t']->value['index']++){
?>
							<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_t']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_t']->value['index'] : null)]['type'] ));?>
"
									<?php if ($_smarty_tpl->tpl_vars['find_type']->value == $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_t']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_t']->value['index'] : null)]['type']) {?>selected="selected"<?php }?>>
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_t']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_t']->value['index'] : null)]['type']) ));?>

							</option>
						<?php
}
}
?>
					</select>
				</div>
			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['topics']->value)) {?>
			<div class="form-group row mx-0">
				<label class="col-form-label col-sm-5">
					Article Topic
				</label>
				<div class="col-sm-7">
					<select name="topic" class="findtopics form-control form-control-sm">
						<option value='' <?php if ($_smarty_tpl->tpl_vars['find_topic']->value == '') {?>selected="selected"<?php }?>>any topic</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['topics']->value, 'topic');
$_smarty_tpl->tpl_vars['topic']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['topic']->value) {
$_smarty_tpl->tpl_vars['topic']->do_else = false;
?>
							<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['topic']->value['topicId'] ));?>
"
									<?php if ($_smarty_tpl->tpl_vars['find_topic']->value == $_smarty_tpl->tpl_vars['topic']->value['topicId']) {?>selected="selected"<?php }?>>
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['topic']->value['name']) ));?>

							</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
		<?php }?>
		<?php if (((isset($_smarty_tpl->tpl_vars['find_show_languages']->value)) && $_smarty_tpl->tpl_vars['find_show_languages']->value == 'y') && $_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual'] == 'y') {?>
			<div class="form-group row mx-0">
				<label class="col-form-label col-sm-5">
					Language
				</label>
				<div class="col-sm-7">
					<span class="findlang">
						<select name="lang" class="in form-control form-control-sm">
							<option value=''
									<?php if ($_smarty_tpl->tpl_vars['find_lang']->value == '') {?>selected="selected"<?php }?>>any language</option>
							<?php
$__section_ix_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_2_total = $__section_ix_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_2_total !== 0) {
for ($__section_ix_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_2_iteration <= $__section_ix_2_total; $__section_ix_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
								<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['value'] ));?>
"
										<?php if ($_smarty_tpl->tpl_vars['find_lang']->value == $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['value']) {?>selected="selected"<?php }?>>
									<?php echo $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'];?>

								</option>
							<?php
}
}
?>
						</select>
						<?php if ((isset($_smarty_tpl->tpl_vars['find_show_languages_excluded']->value)) && $_smarty_tpl->tpl_vars['find_show_languages_excluded']->value == 'y') {?>
							<span>
								<label class="col-form-label">
									not in
								</label>
							</span>
							<span>
								<select name="langOrphan" class="notin form-control form-control-sm">
									<option value='' <?php if ($_smarty_tpl->tpl_vars['find_langOrphan']->value == '') {?>selected="selected"<?php }?>></option>
									<?php
$__section_ix_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ix_3_total = $__section_ix_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ix'] = new Smarty_Variable(array());
if ($__section_ix_3_total !== 0) {
for ($__section_ix_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] = 0; $__section_ix_3_iteration <= $__section_ix_3_total; $__section_ix_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']++){
?>
										<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['value'] ));?>
"
												<?php if ($_smarty_tpl->tpl_vars['find_langOrphan']->value == $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['value']) {?>selected="selected"<?php }?>>
											<?php echo $_smarty_tpl->tpl_vars['languages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ix']->value['index'] : null)]['name'];?>

										</option>
									<?php
}
}
?>
								</select>
							</span>
						<?php }?>
					</span>
				</div>
			</div>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['find_show_date_range']->value)) && $_smarty_tpl->tpl_vars['find_show_date_range']->value == 'y') {?>
			<div class="form-group row mx-0 findDateFrom">
				<label class="col-form-label col-sm-5">
					Date From
				</label>
				<div class="col-sm-7">
					<?php echo smarty_function_html_select_date(array('time'=>$_smarty_tpl->tpl_vars['find_date_from']->value,'prefix'=>"find_from_",'month_format'=>"%m"),$_smarty_tpl);?>

				</div>
			</div>
			<div class="form-group row mx-0 findDateTo">
				<label class="col-form-label col-sm-5">
					Date To
				</label>
				<div class="col-sm-7">
					<?php echo smarty_function_html_select_date(array('time'=>$_smarty_tpl->tpl_vars['find_date_to']->value,'prefix'=>"find_to_",'month_format'=>"%m"),$_smarty_tpl);?>

				</div>
			</div>
		<?php }?>
		<?php if ((((isset($_smarty_tpl->tpl_vars['find_show_categories']->value)) && $_smarty_tpl->tpl_vars['find_show_categories']->value == 'y') || ((isset($_smarty_tpl->tpl_vars['find_show_categories_multi']->value)) && $_smarty_tpl->tpl_vars['find_show_categories_multi']->value == 'y')) && $_smarty_tpl->tpl_vars['prefs']->value['feature_categories'] == 'y' && !empty($_smarty_tpl->tpl_vars['categories']->value)) {?>
			<div class="form-group row mx-0 category_find">
				<?php if ($_smarty_tpl->tpl_vars['find_show_categories_multi']->value == 'n' || $_smarty_tpl->tpl_vars['findSelectedCategoriesNumber']->value <= 1) {?>
					<label class="col-sm-5 col-form-label">
						Category
					</label>
					<div id="category_singleselect_find" class="col-sm-7">
						<select name="categId" class="findcateg form-control form-control-sm">
							<option value=''
									<?php if ($_smarty_tpl->tpl_vars['find_categId']->value == '') {?>selected="selected"<?php }?>>any category</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, 'identifier');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['identifier']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['find_categId']->value == $_smarty_tpl->tpl_vars['identifier']->value) {?>selected="selected"<?php }?>>
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_tr_if($_smarty_tpl->tpl_vars['category']->value['categpath']) ));?>

								</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y' && $_smarty_tpl->tpl_vars['find_show_categories_multi']->value == 'y') {?>
							<a href="#category_select_find_type"
							   onclick="show('category_multiselect_find');hide('category_singleselect_find');javascript:document.getElementById('category_select_find_type').value='y';">
								Multiple select
							</a>
						<?php }?>
						<input id="category_select_find_type" name="find_show_categories_multi" value="n" type="hidden">
					</div>
				<?php }?>
				<div id="category_multiselect_find" class="col-sm-12"
					 style="display: <?php if ($_smarty_tpl->tpl_vars['find_show_categories_multi']->value == 'y' && $_smarty_tpl->tpl_vars['findSelectedCategoriesNumber']->value > 1) {?>block<?php } else { ?>none<?php }?>;">
					<div class="multiselect">
						<?php if (count($_smarty_tpl->tpl_vars['categories']->value) > 0) {?>
							<?php echo $_smarty_tpl->tpl_vars['cat_tree']->value;?>

							<div class="clearfix">
								<?php echo smarty_function_select_all(array('checkbox_names'=>'cat_categories[]','label'=>"Select/deselect all categories"),$_smarty_tpl);?>

							</div>
						<?php } else { ?>
							<div class="clearfix">
								No categories defined
							</div>
							
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value == 'y') {?>
							<div class="">
								<a href="tiki-admin_categories.php" class="link">
									<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>
 Admin Categories
								</a>
							</div>
						<?php }?>

					</div> 
				</div> 
			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['types']->value) && (isset($_smarty_tpl->tpl_vars['types_tag']->value)) && $_smarty_tpl->tpl_vars['types_tag']->value == 'checkbox') {?>
			<div class="form-group findtypes text-center">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
					<div class="form-check form-check-inline">
						<label class="col-form-label mr-3">
							<input type="checkbox" class="form-check-inline" name="types[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value ));?>
"
								   <?php if (is_array($_smarty_tpl->tpl_vars['find_type']->value) && in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['find_type']->value)) {?>checked="checked"<?php }?>> <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['value']->value;
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
						</label>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['filters']->value)) {?>
			<div class="form-group row mx-0 findfilter">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filters']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
					<label class="col-form-label col-sm-5">
						<?php echo $_smarty_tpl->tpl_vars['filter_names']->value[$_smarty_tpl->tpl_vars['key']->value];?>

					</label>
					<div class="col-sm-7">
						<select name="findfilter_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="form-control form-control-sm">
							<option value='' <?php if ($_smarty_tpl->tpl_vars['filter_values']->value[$_smarty_tpl->tpl_vars['key']->value] == '') {?>selected="selected"<?php }?>>--</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value, 'value', false, 'key2');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key2']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['key2']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['filter_values']->value[$_smarty_tpl->tpl_vars['key']->value] == $_smarty_tpl->tpl_vars['key2']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['find_durations']->value)) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['find_durations']->value, 'duration', false, 'key');
$_smarty_tpl->tpl_vars['duration']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['duration']->value) {
$_smarty_tpl->tpl_vars['duration']->do_else = false;
?>
				<div class="form-group row">
					<label class="find_duration col-form-label col-sm-6">
						<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['duration']->value['label'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
					</label>
					<div class="col-sm-6">
						<?php echo smarty_function_html_select_duration(array('prefix'=>$_smarty_tpl->tpl_vars['duration']->value['prefix'],'default'=>$_smarty_tpl->tpl_vars['duration']->value['default'],'default_unit'=>$_smarty_tpl->tpl_vars['duration']->value['default_unit']),$_smarty_tpl);?>

					</div>
				</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['show_find_orphans']->value) && $_smarty_tpl->tpl_vars['show_find_orphans']->value == 'y') {?>
			<div class="form-group find-orphans" style="margin-top: -15px;">
				<div class="form-check offset-sm-3">
					<label class="find_orphans col-form-label" style="padding-left: 0; font-weight: bold;" for="find_orphans">
						Orphans
						<input type="checkbox" style="margin-left: 30px;" name="find_orphans" id="find_orphans"
							<?php if ((isset($_smarty_tpl->tpl_vars['find_orphans']->value)) && $_smarty_tpl->tpl_vars['find_orphans']->value == 'y') {?>checked="checked"<?php }?>>
					</label>
				</div>
			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['find_other']->value)) {?>
			<div class="form-group find-other">
				<label class="find_other col-form-label col-sm-6" for="find_other">
					<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['find_other']->value;
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				</label>
				<div class="col-sm-6">
					<input type="text" name="find_other" id="find_other"
						   value="<?php if (!empty($_smarty_tpl->tpl_vars['find_other_val']->value)) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['find_other_val']->value ));
}?>"
						   class="form-control form-control-sm">
				</div>
			</div>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['find_show_num_rows']->value)) && $_smarty_tpl->tpl_vars['find_show_num_rows']->value == 'y') {?>
			<div class="form-group row mx-0">
				<label class="col-sm-5 col-form-label" for="findnumrows">
					Displayed rows
				</label>
				<div class="col-sm-7">
					<input type="text" name="maxRecords" id="findnumrows" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['maxRecords']->value ));?>
"
						   class="form-control">
				</div>
			</div>
		<?php }?>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['gmapbuttons']->value)) && $_smarty_tpl->tpl_vars['gmapbuttons']->value) {?>
			<div class="find-map form-group row">
				<?php if ((isset($_smarty_tpl->tpl_vars['mapview']->value)) && $_smarty_tpl->tpl_vars['mapview']->value) {?>
					<input class="btn btn-primary btn-sm" type="submit" name="searchlist" value="Hide Map">
					<input type="hidden" name="mapview" value="y">
				<?php } else { ?>
					<input type="submit" class="btn btn-primary btn-sm" name="searchmap" value="Show Map">
					<input type="hidden" name="mapview" value="n">
				<?php }?>
			</div>
		<?php }?>
		<?php if ((!(isset($_smarty_tpl->tpl_vars['map_only']->value)) || $_smarty_tpl->tpl_vars['map_only']->value != 'y') || ((isset($_smarty_tpl->tpl_vars['gmapbuttons']->value)) && $_smarty_tpl->tpl_vars['gmapbuttons']->value)) {?>
		<div class="row mx-0">
			<button type="submit" class="btn btn-info" name="search">Find</button>
		</div>
		<?php }?>
	</form>
</div>
<!-- End of find -->
<?php }
}
