<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:31:07
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-user_cssmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126461bba6c96_05820971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd3cbfec469f454115d56bdbd701179e571cd79c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-user_cssmenu.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126461bba6c96_05820971 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.repeat.php','function'=>'smarty_block_repeat',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),));
?>

<?php if (count($_smarty_tpl->tpl_vars['menu_channels']->value) > 0) {?>
	<?php $_smarty_tpl->_assignInScope('opensec', '0');?>
	<?php $_smarty_tpl->_assignInScope('sep', '');?>
	<?php if (!(isset($_smarty_tpl->tpl_vars['drilldownmenu']->value)) || $_smarty_tpl->tpl_vars['drilldownmenu']->value != 'y') {
$_smarty_tpl->_assignInScope('menuId', "cssmenu".((string)$_smarty_tpl->tpl_vars['idCssmenu']->value));
ob_start();
if ($_smarty_tpl->tpl_vars['menu_type']->value) {
echo "_";
echo (string)$_smarty_tpl->tpl_vars['menu_type']->value;
}
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_assignInScope('menuClass', "nav cssmenu".$_prefixVariable5." menu".((string)$_smarty_tpl->tpl_vars['menu_info']->value['menuId']));
} else {
$_smarty_tpl->_assignInScope('menuId', "drilldownmenu".((string)$_smarty_tpl->tpl_vars['idCssmenu']->value));
ob_start();
if ($_smarty_tpl->tpl_vars['menu_type']->value) {
echo "_";
echo (string)$_smarty_tpl->tpl_vars['menu_type']->value;
}
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->_assignInScope('menuClass', "nav drilldownmenu cssmenu".$_prefixVariable6." menu".((string)$_smarty_tpl->tpl_vars['menu_info']->value['menuId']));
}?><ul id="<?php echo $_smarty_tpl->tpl_vars['menuId']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['menuClass']->value;?>
"><?php if ((isset($_smarty_tpl->tpl_vars['drilldownmenu']->value)) && $_smarty_tpl->tpl_vars['drilldownmenu']->value == 'y') {?><li><a href="tiki-index.php?page=<?php echo urlencode($_smarty_tpl->tpl_vars['home_info']->value['pageName']);?>
&structure=<?php echo urlencode($_smarty_tpl->tpl_vars['home_info']->value['pageName']);?>
&page_ref_id=<?php echo $_smarty_tpl->tpl_vars['home_info']->value['page_ref_id'];?>
"><?php if ($_smarty_tpl->tpl_vars['home_info']->value['page_alias']) {
echo $_smarty_tpl->tpl_vars['home_info']->value['page_alias'];
} else {
echo $_smarty_tpl->tpl_vars['home_info']->value['pageName'];
}?></a></li><li class="divider"></li><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menu_channels']->value, 'chdata', false, 'pos');
$_smarty_tpl->tpl_vars['chdata']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pos']->value => $_smarty_tpl->tpl_vars['chdata']->value) {
$_smarty_tpl->tpl_vars['chdata']->do_else = false;
if ($_smarty_tpl->tpl_vars['chdata']->value['type'] != 'o' && $_smarty_tpl->tpl_vars['chdata']->value['type'] != '-') {
if ($_smarty_tpl->tpl_vars['opensec']->value > 0) {
if ($_smarty_tpl->tpl_vars['chdata']->value['type'] == 's' || $_smarty_tpl->tpl_vars['chdata']->value['type'] == 'r') {
$_smarty_tpl->_assignInScope('sectionType', 0);
} else {
$_smarty_tpl->_assignInScope('sectionType', $_smarty_tpl->tpl_vars['chdata']->value['type']);
}
if ($_smarty_tpl->tpl_vars['opensec']->value > $_smarty_tpl->tpl_vars['sectionType']->value) {
$_smarty_tpl->_assignInScope('nb_opensec', $_smarty_tpl->tpl_vars['opensec']->value-$_smarty_tpl->tpl_vars['sectionType']->value);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('repeat', array('count'=>$_smarty_tpl->tpl_vars['nb_opensec']->value));
$_block_repeat=true;
echo smarty_block_repeat(array('count'=>$_smarty_tpl->tpl_vars['nb_opensec']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?></ul></li><?php $_block_repeat=false;
echo smarty_block_repeat(array('count'=>$_smarty_tpl->tpl_vars['nb_opensec']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->_assignInScope('opensec', $_smarty_tpl->tpl_vars['sectionType']->value);
}
}?><li class="dropdown option<?php echo $_smarty_tpl->tpl_vars['chdata']->value['optionId'];?>
 menuSection menuSection<?php echo $_smarty_tpl->tpl_vars['opensec']->value;?>
 menuLevel<?php echo $_smarty_tpl->tpl_vars['opensec']->value;
if ((isset($_smarty_tpl->tpl_vars['chdata']->value['selected'])) && $_smarty_tpl->tpl_vars['chdata']->value['selected']) {?> selected<?php }
if ((isset($_smarty_tpl->tpl_vars['chdata']->value['selectedAscendant'])) && $_smarty_tpl->tpl_vars['chdata']->value['selectedAscendant']) {?> selectedAscendant<?php }?>"><?php if (empty($_smarty_tpl->tpl_vars['chdata']->value['block'])) {?><a <?php if (!empty($_smarty_tpl->tpl_vars['chdata']->value['url'])) {?>href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl'] == 'y' && $_smarty_tpl->tpl_vars['chdata']->value['sefurl']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['chdata']->value['sefurl'] ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['chdata']->value['url'] ));
}?>"<?php } else { ?>tabindex=0<?php }?>><?php if ($_smarty_tpl->tpl_vars['menu_type']->value == 'vert' && $_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons'] == 'y' && $_smarty_tpl->tpl_vars['menu_info']->value['use_items_icons'] == 'y' && $_smarty_tpl->tpl_vars['opensec']->value == 0) {
echo smarty_function_icon(array('_id'=>$_smarty_tpl->tpl_vars['chdata']->value['icon'],'alt'=>'','_defaultdir'=>$_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons_path']),$_smarty_tpl);
} elseif ((isset($_smarty_tpl->tpl_vars['icon']->value)) && $_smarty_tpl->tpl_vars['icon']->value) {
echo smarty_function_icon(array('name'=>'file-archive','align'=>"left"),$_smarty_tpl);
}?><span class="menuText"><?php if ($_smarty_tpl->tpl_vars['translate']->value == 'n') {
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?></span><?php if ($_smarty_tpl->tpl_vars['link_on_section']->value != 'n') {?></a><?php }
} else {
if ($_smarty_tpl->tpl_vars['translate']->value == 'n') {
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
$_smarty_tpl->_assignInScope('opensec', $_smarty_tpl->tpl_vars['opensec']->value+1);?><ul><?php } elseif ($_smarty_tpl->tpl_vars['chdata']->value['type'] == 'o') {?><li class="option<?php echo $_smarty_tpl->tpl_vars['chdata']->value['optionId'];?>
 menuOption menuLevel<?php echo $_smarty_tpl->tpl_vars['opensec']->value;
if ((isset($_smarty_tpl->tpl_vars['chdata']->value['selected'])) && $_smarty_tpl->tpl_vars['chdata']->value['selected']) {?> selected<?php }
if ((isset($_smarty_tpl->tpl_vars['chdata']->value['selectedAscendant'])) && $_smarty_tpl->tpl_vars['chdata']->value['selectedAscendant']) {?> selectedAscendant<?php }?>"><?php if (empty($_smarty_tpl->tpl_vars['chdata']->value['block'])) {?><a href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl'] == 'y' && $_smarty_tpl->tpl_vars['chdata']->value['sefurl']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['chdata']->value['sefurl'] ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['chdata']->value['url'] ));
}?>"><?php if ($_smarty_tpl->tpl_vars['menu_type']->value == 'vert' && $_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons'] == 'y' && $_smarty_tpl->tpl_vars['menu_info']->value['use_items_icons'] == 'y' && $_smarty_tpl->tpl_vars['opensec']->value == 0) {
echo smarty_function_icon(array('_id'=>$_smarty_tpl->tpl_vars['chdata']->value['icon'],'alt'=>'','_defaultdir'=>$_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons_path']),$_smarty_tpl);
}?><span class="menuText"><?php if ($_smarty_tpl->tpl_vars['translate']->value == 'n') {
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?></span></a><?php } else {
if ($_smarty_tpl->tpl_vars['translate']->value == 'n') {
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['chdata']->value['name'];
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}?></li><?php if ($_smarty_tpl->tpl_vars['sep']->value == 'line') {
$_smarty_tpl->_assignInScope('sep', '');
}
} elseif ($_smarty_tpl->tpl_vars['chdata']->value['type'] == '-') {
if ($_smarty_tpl->tpl_vars['opensec']->value > 0) {?></ul></li><?php $_smarty_tpl->_assignInScope('opensec', $_smarty_tpl->tpl_vars['opensec']->value-1);
}
$_smarty_tpl->_assignInScope('sep', "line");
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['opensec']->value > 0) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('repeat', array('count'=>$_smarty_tpl->tpl_vars['opensec']->value));
$_block_repeat=true;
echo smarty_block_repeat(array('count'=>$_smarty_tpl->tpl_vars['opensec']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?></ul></li><?php $_block_repeat=false;
echo smarty_block_repeat(array('count'=>$_smarty_tpl->tpl_vars['opensec']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->_assignInScope('opensec', 0);
}?></ul>
<?php }
}
}
