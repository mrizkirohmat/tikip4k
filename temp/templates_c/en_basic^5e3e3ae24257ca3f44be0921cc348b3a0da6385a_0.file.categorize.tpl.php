<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:22:59
  from 'C:\xampp\htdocs\tikip4k\templates\categorize.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126443368a125_88970013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e3e3ae24257ca3f44be0921cc348b3a0da6385a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\categorize.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126443368a125_88970013 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.select_all.php','function'=>'smarty_function_select_all',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),));
?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories'] == 'y' && $_smarty_tpl->tpl_vars['tiki_p_modify_object_categories']->value == 'y' && (count($_smarty_tpl->tpl_vars['categories']->value) > 0 || $_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value == 'y')) {?>
	<?php if (!(isset($_smarty_tpl->tpl_vars['labelcol']->value))) {?>
		<?php $_smarty_tpl->_assignInScope('labelcol', '4');?>
	<?php }?>
	<?php if (!(isset($_smarty_tpl->tpl_vars['inputcol']->value))) {?>
		<?php $_smarty_tpl->_assignInScope('inputcol', '8');?>
	<?php }?>
	<?php if (!(isset($_smarty_tpl->tpl_vars['notable']->value)) || $_smarty_tpl->tpl_vars['notable']->value != 'y') {?>
		<!-- div class="form-horizontal" -->
			<div class="form-group row mx-3">
				<label class="col-sm-<?php echo $_smarty_tpl->tpl_vars['labelcol']->value;?>
 text-nowrap col-form-label<?php if (!empty($_smarty_tpl->tpl_vars['labelclass']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['labelclass']->value;
}?>">
					Categorize
				</label>
				<div class="col-sm-<?php echo $_smarty_tpl->tpl_vars['inputcol']->value;?>
">
					<?php if ((isset($_smarty_tpl->tpl_vars['colsCategorize']->value))) {?> colspan="<?php echo $_smarty_tpl->tpl_vars['colsCategorize']->value;?>
"<?php }?>
				</div>

		<!--/div-->
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['mandatory_category']->value >= 0 || $_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] != 'y' || ((isset($_smarty_tpl->tpl_vars['auto']->value)) && $_smarty_tpl->tpl_vars['auto']->value == 'y')) {?>
		<div id="categorizator"><div>
	<?php } else { ?>
		<?php if (!(isset($_smarty_tpl->tpl_vars['notable']->value)) || $_smarty_tpl->tpl_vars['notable']->value != 'y') {?> <div class="col-sm-<?php echo $_smarty_tpl->tpl_vars['inputcol']->value;
if ((isset($_smarty_tpl->tpl_vars['inputgroup']->value)) && $_smarty_tpl->tpl_vars['inputgroup']->value === 'y') {?> input-group<?php }?>"><?php echo smarty_function_button(array('href'=>"#",'_flip_id'=>'categorizator','_class'=>'btn btn-primary btn-sm tips','_text'=>"Select Categories",'_flip_default_open'=>'n'),$_smarty_tpl);?>
</div><?php }?>
		<div class="clearfix"><div id="categorizator" class="col-sm-<?php echo $_smarty_tpl->tpl_vars['inputcol']->value;?>
 offset-sm-<?php echo $_smarty_tpl->tpl_vars['labelcol']->value;?>
" style="display:<?php if ((isset($_SESSION['tiki_cookie_jar']['show_categorizator'])) && $_SESSION['tiki_cookie_jar']['show_categorizator'] == 'y' || ((isset($_smarty_tpl->tpl_vars['notable']->value)) && $_smarty_tpl->tpl_vars['notable']->value == 'y')) {?>block<?php } else { ?>none<?php }?>;">
	<?php }?>
	<div class="multiselect">
		<?php if (count($_smarty_tpl->tpl_vars['categories']->value) > 0) {?>
			<?php echo $_smarty_tpl->tpl_vars['cat_tree']->value;?>

			<input type="hidden" name="cat_categorize" value="on">
			<div class="clearfix">
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value == 'y') {?>
					<div class="float-sm-right">
						<a class="btn btn-link btn-sm tips" href="tiki-admin_categories.php" title=":Admin Categories">
							<?php echo smarty_function_icon(array('name'=>"cog"),$_smarty_tpl);?>
 Categories
						</a>
					</div>
				<?php }?>
				<?php echo smarty_function_select_all(array('checkbox_names'=>'cat_categories[]','label'=>"Select/deselect all categories"),$_smarty_tpl);?>

			</div> 
		<?php } else { ?>
			<div class="clearfix">
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value == 'y') {?>
					<div class="float-sm-right">
						<a class="btn btn-link" href="tiki-admin_categories.php" title=":Admin Categories">
							<?php echo smarty_function_icon(array('name'=>"cog"),$_smarty_tpl);?>
 Categories
						</a>
					</div>
				<?php }?>
			</div> 
			No categories defined
		<?php }?>
	</div> 
		</div>
	</div>
	<?php if (!(isset($_smarty_tpl->tpl_vars['notable']->value)) || $_smarty_tpl->tpl_vars['notable']->value != 'y') {?>
		</div> 
	<?php }
}
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_theme_control_autocategorize'] == 'y') {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		if ('<?php echo $_SESSION['tc_theme_cat'];?>
') {
			if ($('.tree ul[data-id="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_theme_control_parentcategory'];?>
"] input[type=checkbox]:checked').length == 0) {
				$('#categ-<?php echo $_SESSION['tc_theme_cat'];?>
').prop("checked", true);
			}
		}
	<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
