<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:56:35
  from 'C:\xampp\htdocs\tikip4k\templates\filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61265a23dbe4a2_20750982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '312365eba49978df70001f85727bce7bf66df924' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\filter.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61265a23dbe4a2_20750982 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.object_selector.php','function'=>'smarty_function_object_selector',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.service.php','function'=>'smarty_function_service',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.bootstrap_modal.php','function'=>'smarty_function_bootstrap_modal',),));
?>

<form method="get" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter_action']->value ));?>
" class="filter form-horizontal">
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">Content</label>
		<div class="col-sm-4">
			<input type="search" name="filter~content" class="form-control" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter_content']->value ));?>
">
		</div>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['search_show_sort_order'] == 'y') {?>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Sort By</label>
			<div class="col-sm-3">
				<select name="sort_mode" class="sort_mode form-control">
					<?php $_smarty_tpl->_assignInScope('sort_found', false);?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sort_modes']->value, 't', false, 'k');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
						<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['k']->value ));?>
"<?php if ($_smarty_tpl->tpl_vars['k']->value == $_smarty_tpl->tpl_vars['sort_mode']->value) {?> selected="selected"<?php $_smarty_tpl->_assignInScope('sort_found', true);
}?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value ));?>
</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
			<?php if (preg_match('/desc$/',$_smarty_tpl->tpl_vars['sort_mode']->value)) {?>
				<?php echo smarty_function_icon(array('name'=>'sort-down','class'=>'sort_invert','title'=>"Sort direction",'href'=>'#'),$_smarty_tpl);?>

			<?php } else { ?>
				<?php echo smarty_function_icon(array('name'=>'sort-up','class'=>'sort_invert','title'=>"Sort direction",'href'=>'#'),$_smarty_tpl);?>

			<?php }?>
		</div>
	<?php } else { ?>
		<input type="hidden" name="sort_mode" value="<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
">
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_object_filter'] == 'y') {?>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="filter-type">Type</label>
				<div class="col-sm-4">
					<select name="filter~type" id="filter-type" class="form-control">
						<option value="">Any</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_types']->value, 't', false, 'k');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
							<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['k']->value ));?>
"<?php if ($_smarty_tpl->tpl_vars['k']->value == $_smarty_tpl->tpl_vars['filter_type']->value) {?> selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value ));?>
</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
		<?php } else { ?>
			<?php if (is_array($_smarty_tpl->tpl_vars['filter_type']->value)) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_type']->value, 't');
$_smarty_tpl->tpl_vars['t']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->do_else = false;
?>
					<input type="hidden" name="filter~type[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['t']->value ));?>
">
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php } else { ?>
				<input type="hidden" name="filter~type" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter_type']->value ));?>
">
			<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_view_category']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['search_show_category_filter'] == 'y') {?>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="filter-categories">Categories</label>
				<div class="col-sm-4">
					<a class="category-lookup btn btn-primary mb-3" href="#">Lookup</a>
					<input type="text" name="filter~categories" id="filter-categories" class="category-wizard form-control" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter_categories']->value ));?>
">
				</div>
				<div class="col-sm-5 checkbox">
					<label for="filter-deep">
						<input type="checkbox" name="filter~deep" id="filter-deep" <?php if ($_smarty_tpl->tpl_vars['filter_deep']->value) {?> checked="checked"<?php }?>> Deep search
					</label>
				</div>
			</div>

			<div class="category-picker" title="Select Categories" style="display:none;">
				<?php echo $_smarty_tpl->tpl_vars['filter_category_picker']->value;?>

			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_view_freetags']->value == 'y' && $_smarty_tpl->tpl_vars['prefs']->value['search_show_tag_filter'] == 'y') {?>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="filter-tags">Tags</label>
				<div class="col-sm-4">
					<a class="tag-lookup btn btn-primary" href="#">Lookup</a>
					<input type="text" name="filter~tags" class="tag-wizard" id="filter-tags" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter_tags']->value ));?>
">
				</div>
				<div class="tag-picker" title="Select Tags" style="display:none;">
					<?php echo $_smarty_tpl->tpl_vars['filter_tags_picker']->value;?>

				</div>
			</div>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['filter']->value['tracker_id']))) {?>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="filter-tracker_id">Tracker</label>
				<div class="col-sm-4">
					<?php echo smarty_function_object_selector(array('type'=>'tracker','_simplevalue'=>$_smarty_tpl->tpl_vars['filter']->value['tracker_id'],'_simplename'=>"filter~tracker_id",'_simpleid'=>"filter-tracker_id"),$_smarty_tpl);?>

				</div>
			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual'] == 'y') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['search_default_interface_language'] != 'y') {?>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label" for="filter-language">Language</label>
					<div class="col-sm-4">
						<select name="filter~language" class="form-control" id="filter-language">
							<option value="">Any</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filter_languages']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
								<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['l']->value['value'] ));?>
"<?php if ($_smarty_tpl->tpl_vars['filter_language']->value == $_smarty_tpl->tpl_vars['l']->value['value']) {?> selected="selected"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['l']->value['name'] ));?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
					<div class="col-sm-5">
						<label for="filter-language-unspecified-checkbox">
							<input type="checkbox" id="filter-language-unspecified-checkbox" name="filter~language_unspecified"<?php if ($_smarty_tpl->tpl_vars['filter_language_unspecified']->value) {?> checked="checked"<?php }?>>
							Include objects without a specified language
						</label>
					</div>
				</div>
			<?php } else { ?>
				<input type="hidden" name="filter~language" value="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['language'];?>
">
				<input type="hidden" name="filter~language_unspecified" value="1">
			<?php }?>
		<?php }?>

	<div class="text-center">
		<input type="submit" class="btn btn-secondary" value="Search">
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['tracker_tabular_enabled'] == 'y' && !empty($_GET['tabularId'])) {?>
			<input type="hidden" name="tabularId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_GET['tabularId'] ));?>
">
			<button class="tabular-export btn btn-primary">
				<?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
 Export
			</button>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				$(document).on('click', '.tabular-export', function (e) {
					var href = $.service('tabular', 'export_search_csv', {
						tabularId: "<?php echo $_GET['tabularId'];?>
"
					});
					e.preventDefault();
					document.location.href = href + '&' + $(this).closest('form').serialize();
				});
			<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['tracker_tabular_enabled'] == 'y' && !empty($_smarty_tpl->tpl_vars['filter']->value['tracker_id'])) {?>
			<button class="tabular-export btn btn-primary">
				<?php echo smarty_function_icon(array('name'=>'export'),$_smarty_tpl);?>
 Export
			</button>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				$(document).on('click', '.tabular-export', function (e) {
					var href = $.service('tabular', 'export_search_csv', {
						trackerId: "<?php echo $_smarty_tpl->tpl_vars['filter']->value['tracker_id'];?>
"
					});
					e.preventDefault();
					$.openModal({
						remote: href + '&' + $(this).closest('form').serialize()
					});
				});
			<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['storedsearch_enabled'] == 'y' && $_smarty_tpl->tpl_vars['user']->value) {?>
			<input type="hidden" name="storeAs" value=""/>
			<a href="<?php echo smarty_function_service(array('controller'=>'search_stored','action'=>'select','modal'=>true),$_smarty_tpl);?>
" id="store-query" class="btn btn-primary">Save Search</a>
			<a href="<?php echo smarty_function_service(array('controller'=>'search_stored','action'=>'list'),$_smarty_tpl);?>
" class="btn btn-link">View Saved Searches</a>
			<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				$('#store-query').clickModal({
					success: function (data) {
						var form = $(this).closest('form')[0];

						$(form.storeAs).val(data.queryId);
						$(form).attr('method', 'post');
						$(form).submit();
					}
				});
			<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>
		<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'search','action'=>'help'),$_smarty_tpl);?>
">Search Help <?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
	</div>
</form>
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	$('.filter:not(.init)').addClass('init').each(function () {

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories'] == 'y') {?>
		var categoryInput = $('.category-wizard', this).fancy_filter('init', {
			map: <?php echo json_encode($_smarty_tpl->tpl_vars['filter_categmap']->value);?>

		});

		var categoryPicker = $('.category-picker', this).dialog({
			maxHeight: $(window).height()-50,
			width: 'auto',
			autoOpen: false,
			modal: true,
			buttons: {
				"Add to filter": function () {
					$(':checked', this).each(function () {
						categoryInput.fancy_filter('add', {
							token: $(this).val(),
							label: $(this).parent().text(),
							join: ' or '
						});
					});
					$(this).dialog('close');
				},
				"Cancel": function () {
					$(this).dialog('close');
				}
			},
			close: function () {
				$(':checked', this).prop('checked', false);
			}
		});

		$('.category-lookup', this).click(function () {
			categoryPicker.dialog('open');
			return false;
		});
<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags'] == 'y') {?>
		var tagInput = $('.tag-wizard', this).fancy_filter('init', {
			map: <?php echo $_smarty_tpl->tpl_vars['filter_tagmap']->value;?>

		});

		$('.tag-picker a', this).click(function () {
			$(this).toggleClass('highlight');

			return false;
		});
		var tagPicker = $('.tag-picker', this).dialog({
			autoOpen: false,
			modal: true,
			maxHeight: $window.height() - 50,
			buttons: {
				"Add to filter": function () {
					$('.highlight', this).each(function () {
						tagInput.fancy_filter('add', {
							token: $(this).attr('href'),
							label: $(this).text(),
							join: ' and '
						});
					});
					$(this).dialog('close');
				},
				"Cancel": function () {
					$(this).dialog('close');
				}
			},
			close: function () {
				$(':checked', this).prop('checked', false);
			}
		});

		$('.tag-lookup', this).click(function () {
			tagPicker.dialog('open');
			return false;
		});
<?php }
if ($_smarty_tpl->tpl_vars['prefs']->value['search_show_sort_order'] == 'y') {?>
		var $invert = $(".sort_invert", this);
		var $sort_mode = $(".sort_mode", this);
<?php if (!$_smarty_tpl->tpl_vars['sort_found']->value) {?>
		var opts = $sort_mode.prop("options");
		for (var o = 0; o < opts.length; o++) {	// sort_mode not in intially rendered list, so try and find the opposite direction
			var tofind = "<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
";
			tofind = tofind.replace(/(:?asc|desc)$/, "");
			if (opts[o].value.search(tofind) === 0) {
				opts[o].value = "<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
";
				$sort_mode.prop("selectedIndex", o).trigger("chosen:updated");
				break;
			}
		}
<?php }?>

		$sort_mode.change(function () {	// update direction arrow
			$(".icon", $invert).setIcon($(this).val().search(/desc$/) > -1 ? "sort-down" : "sort-up");
		});

		$invert.click(function () {	// change the value of the option to opposite direction
			var v = $sort_mode.prop("options")[$sort_mode.prop("selectedIndex")].value;
			if (v.search(/desc$/) > -1) {
				$sort_mode.prop("options")[$sort_mode.prop("selectedIndex")].value = v.replace(/desc$/, "asc");
				$(".icon", $invert).setIcon("sort-up");
			} else {
				$sort_mode.prop("options")[$sort_mode.prop("selectedIndex")].value = v.replace(/asc$/, "desc");
				$(".icon", $invert).setIcon("sort-down");
			}
			$(this).parents("form").submit();
			return false;
		});
<?php }?>

	});
<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
