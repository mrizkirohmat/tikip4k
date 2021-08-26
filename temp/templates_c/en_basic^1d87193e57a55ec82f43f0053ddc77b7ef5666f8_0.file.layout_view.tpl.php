<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:31:05
  from 'C:\xampp\htdocs\tikip4k\templates\layouts\basic\layout_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264619e7b5d4_84388918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d87193e57a55ec82f43f0053ddc77b7ef5666f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\layouts\\basic\\layout_view.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:layout_fullscreen_check.tpl' => 1,
    'file:tiki-ajax_header.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:../../../templates/pwa/pwa.tpl' => 1,
  ),
),false)) {
function content_61264619e7b5d4_84388918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.html_body_attributes.php','function'=>'smarty_function_html_body_attributes',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.modulelist.php','function'=>'smarty_function_modulelist',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.feedback.php','function'=>'smarty_function_feedback',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="<?php if (!empty($_smarty_tpl->tpl_vars['pageLang']->value)) {
echo $_smarty_tpl->tpl_vars['pageLang']->value;
} else {
echo $_smarty_tpl->tpl_vars['prefs']->value['language'];
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['page_id']->value)) {?> id="page_<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
"<?php }?>>
<head>
	<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body<?php echo smarty_function_html_body_attributes(array(),$_smarty_tpl);?>
>
<?php echo $_smarty_tpl->tpl_vars['cookie_consent_html']->value;?>


<?php $_smarty_tpl->_subTemplateRender("file:layout_fullscreen_check.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax'] == 'y') {?>
	<?php $_smarty_tpl->_subTemplateRender('file:tiki-ajax_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<div class="container<?php if ((isset($_SESSION['fullscreen'])) && $_SESSION['fullscreen'] == 'y') {?>-fluid<?php }?> container-std">
<?php if (!(isset($_SESSION['fullscreen'])) || $_SESSION['fullscreen'] != 'y') {?>
	<div class="row">
	<header class="page-header w-100" id="page-header">
		<?php ob_start();
if ($_smarty_tpl->tpl_vars['prefs']->value['theme_navbar_color_variant'] == 'dark') {
echo "navbar-dark-parent bg-dark-parent";
} else {
echo "navbar-light-parent bg-light-parent";
}
$_prefixVariable2=ob_get_clean();
echo smarty_function_modulelist(array('zone'=>'top','class'=>"top_modules d-flex justify-content-between ".$_prefixVariable2),$_smarty_tpl);?>

	</header>
	</div>
<?php }?>

	<div class="row row-middle" id="row-middle">

		<?php ob_start();
if ($_smarty_tpl->tpl_vars['prefs']->value['theme_navbar_color_variant'] == 'dark') {
echo "navbar-dark bg-dark";
} else {
echo "navbar-light bg-light";
}
$_prefixVariable3=ob_get_clean();
echo smarty_function_modulelist(array('zone'=>'topbar','class'=>"topbar_modules d-flex justify-content-between topbar ".$_prefixVariable3." w-100 mb-sm"),$_smarty_tpl);?>


		<?php if ((zone_is_empty('left') || $_smarty_tpl->tpl_vars['prefs']->value['feature_left_column'] == 'n') && (zone_is_empty('right') || $_smarty_tpl->tpl_vars['prefs']->value['feature_right_column'] == 'n')) {?>
			<div class="col col1 col-md-12 pb-4" id="col1">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop'] == 'fixed' || ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop'] != 'n' && !zone_is_empty('pagetop'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

				<?php }?>
				<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154979390861264619e499b1_09687055', 'quicknav');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213312039061264619e4a1b9_00661550', 'title');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47593525061264619e4a800_38050307', 'navigation');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196452493961264619e4ae21_81903415', 'content');
?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom'] == 'fixed' || ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom'] != 'n' && !zone_is_empty('pagebottom'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagebottom','class'=>'mt-3'),$_smarty_tpl);?>

				<?php }?>
			</div>
		<?php } elseif (zone_is_empty('left') || $_smarty_tpl->tpl_vars['prefs']->value['feature_left_column'] == 'n') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_right_column'] == 'user') {?>
				<div class="col-md-12 side-col-toggle-container justify-content-end">
					<?php $_smarty_tpl->_assignInScope('icon_name', !empty($_COOKIE['hide_zone_right']) ? 'toggle-left' : 'toggle-right');?>
					<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone right','href'=>'#','title'=>'Toggle right modules'),$_smarty_tpl);?>

				</div>
			<?php }?>
		<div class="d-flex w-100 flex-row flex-wrap">
			<div class="col col1 col-md-12 col-lg-9 pb-4" id="col1">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop'] == 'fixed' || ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop'] != 'n' && !zone_is_empty('pagetop'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

				<?php }?>
				<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54907340361264619e5a520_80549600', 'quicknav');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6825806961264619e5c435_51991438', 'title');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78394022261264619e5d5d9_53021109', 'navigation');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211270194961264619e5df07_36906653', 'content');
?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom'] == 'fixed' || ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom'] != 'n' && !zone_is_empty('pagebottom'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagebottom','class'=>'mt-3'),$_smarty_tpl);?>

				<?php }?>
			</div>
			<div class="col col3 col-md-12 col-lg-3" id="col3">
				<?php echo smarty_function_modulelist(array('zone'=>'right'),$_smarty_tpl);?>

			</div>
		</div>
		<?php } elseif (zone_is_empty('right') || $_smarty_tpl->tpl_vars['prefs']->value['feature_right_column'] == 'n') {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_left_column'] == 'user') {?>
				<div class="col-md-12 side-col-toggle-container justify-content-start">
					<?php $_smarty_tpl->_assignInScope('icon_name', !empty($_COOKIE['hide_zone_left']) ? 'toggle-right' : 'toggle-left');?>
					<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone left','href'=>'#','title'=>'Toggle left modules'),$_smarty_tpl);?>

				</div>
			<?php }?>
			<div class="col col1 col-md-12 col-lg-9 order-md-1 order-lg-2 pb-4" id="col1">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop'] == 'fixed' || ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop'] != 'n' && !zone_is_empty('pagetop'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

				<?php }?>
				<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33457776861264619e65b98_89950164', 'quicknav');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71729993661264619e662b1_46803404', 'title');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153715146661264619e668d4_37754263', 'navigation');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186008750261264619e66ec7_92363152', 'content');
?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom'] == 'fixed' || ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom'] != 'n' && !zone_is_empty('pagebottom'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagebottom','class'=>'mt-3'),$_smarty_tpl);?>

				<?php }?>
			</div>
			<div class="col col2 col-md-12 col-lg-3 order-sm-2 order-md-2 order-lg-1" id="col2">
				<?php echo smarty_function_modulelist(array('zone'=>'left'),$_smarty_tpl);?>

			</div>
		<?php } else { ?>
			<div class="col-sm-12 side-col-toggle-container d-flex">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_left_column'] == 'user') {?>
				<div class="text-left side-col-toggle flex-fill">
					<?php $_smarty_tpl->_assignInScope('icon_name', !empty($_COOKIE['hide_zone_left']) ? 'toggle-right' : 'toggle-left');?>
					<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone left','href'=>'#','title'=>'Toggle left modules'),$_smarty_tpl);?>

				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_right_column'] == 'user') {?>
				<div class="text-right side-col-toggle flex-fill">
					<?php $_smarty_tpl->_assignInScope('icon_name', !empty($_COOKIE['hide_zone_right']) ? 'toggle-left' : 'toggle-right');?>
					<?php echo smarty_function_icon(array('name'=>$_smarty_tpl->tpl_vars['icon_name']->value,'class'=>'toggle_zone right','href'=>'#','title'=>'Toggle right modules'),$_smarty_tpl);?>

				</div>
			<?php }?>
			</div>

			<div class="col col1 col-sm-12 col-lg-8 order-xs-1 order-lg-2 pb-4" id="col1">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop'] == 'fixed' || ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagetop'] != 'n' && !zone_is_empty('pagetop'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagetop'),$_smarty_tpl);?>

				<?php }?>
				<?php echo smarty_function_feedback(array(),$_smarty_tpl);?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153412771861264619e6e977_57977469', 'quicknav');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74718474161264619e6f018_90058849', 'title');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176746809761264619e6f623_96397268', 'navigation');
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35026546361264619e6fc01_49461762', 'content');
?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom'] == 'fixed' || ($_smarty_tpl->tpl_vars['prefs']->value['module_zones_pagebottom'] != 'n' && !zone_is_empty('pagebottom'))) {?>
					<?php echo smarty_function_modulelist(array('zone'=>'pagebottom','class'=>'mt-3'),$_smarty_tpl);?>

				<?php }?>
			</div>
			<div class="col col2 col-sm-6 col-lg-2 order-md-2 order-lg-1" id="col2">
				<?php echo smarty_function_modulelist(array('zone'=>'left'),$_smarty_tpl);?>

			</div>
			<div class="col col3 col-sm-6 col-lg-2 order-md-3" id="col3">
				<?php echo smarty_function_modulelist(array('zone'=>'right'),$_smarty_tpl);?>

			</div>
		<?php }?>
	</div>

<?php if (!(isset($_SESSION['fullscreen'])) || $_SESSION['fullscreen'] != 'y') {?>
	<footer class="row footer main-footer" id="footer">
		<div class="footer_liner w-100">
			<?php echo smarty_function_modulelist(array('zone'=>'bottom','class'=>'bottom_modules p-3 mx-0'),$_smarty_tpl);?>

		</div>
	</footer>
<?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (((isset($_smarty_tpl->tpl_vars['pagespwa']->value)))) {?>
	<?php $_smarty_tpl->_subTemplateRender('file:../../../templates/pwa/pwa.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
</body>
</html>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console'] == 'y' && !empty($_REQUEST['show_smarty_debug'])) {?>
	<?php $_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
}
}
/* {block 'quicknav'} */
class Block_154979390861264619e499b1_09687055 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'quicknav' => 
  array (
    0 => 'Block_154979390861264619e499b1_09687055',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'quicknav'} */
/* {block 'title'} */
class Block_213312039061264619e4a1b9_00661550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_213312039061264619e4a1b9_00661550',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'navigation'} */
class Block_47593525061264619e4a800_38050307 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_47593525061264619e4a800_38050307',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'navigation'} */
/* {block 'content'} */
class Block_196452493961264619e4ae21_81903415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_196452493961264619e4ae21_81903415',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'quicknav'} */
class Block_54907340361264619e5a520_80549600 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'quicknav' => 
  array (
    0 => 'Block_54907340361264619e5a520_80549600',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'quicknav'} */
/* {block 'title'} */
class Block_6825806961264619e5c435_51991438 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6825806961264619e5c435_51991438',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'navigation'} */
class Block_78394022261264619e5d5d9_53021109 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_78394022261264619e5d5d9_53021109',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'navigation'} */
/* {block 'content'} */
class Block_211270194961264619e5df07_36906653 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_211270194961264619e5df07_36906653',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'quicknav'} */
class Block_33457776861264619e65b98_89950164 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'quicknav' => 
  array (
    0 => 'Block_33457776861264619e65b98_89950164',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'quicknav'} */
/* {block 'title'} */
class Block_71729993661264619e662b1_46803404 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_71729993661264619e662b1_46803404',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'navigation'} */
class Block_153715146661264619e668d4_37754263 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_153715146661264619e668d4_37754263',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'navigation'} */
/* {block 'content'} */
class Block_186008750261264619e66ec7_92363152 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_186008750261264619e66ec7_92363152',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'quicknav'} */
class Block_153412771861264619e6e977_57977469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'quicknav' => 
  array (
    0 => 'Block_153412771861264619e6e977_57977469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'quicknav'} */
/* {block 'title'} */
class Block_74718474161264619e6f018_90058849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_74718474161264619e6f018_90058849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'navigation'} */
class Block_176746809761264619e6f623_96397268 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navigation' => 
  array (
    0 => 'Block_176746809761264619e6f623_96397268',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'navigation'} */
/* {block 'content'} */
class Block_35026546361264619e6fc01_49461762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_35026546361264619e6fc01_49461762',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
