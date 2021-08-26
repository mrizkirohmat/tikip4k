<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:13:07
  from 'C:\xampp\htdocs\tikip4k\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264ff32b2093_83969288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3c34445c65f35b3439ee699092954b629baa3be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\error.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tiki-login.tpl' => 2,
    'file:tiki-searchresults.tpl' => 1,
    'file:tiki-searchindex_form.tpl' => 1,
    'file:tiki.tpl' => 1,
  ),
),false)) {
function content_61264ff32b2093_83969288 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.redirect.php','function'=>'smarty_function_redirect',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.preference.php','function'=>'smarty_function_preference',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.button.php','function'=>'smarty_function_button',),));
if ((isset($_smarty_tpl->tpl_vars['close_window']->value)) && $_smarty_tpl->tpl_vars['close_window']->value == 'y') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
close();
<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if (!(isset($_smarty_tpl->tpl_vars['errortype']->value))) {
$_smarty_tpl->_assignInScope('errortype', '');
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'mid_data', null);
if (($_smarty_tpl->tpl_vars['errortype']->value == "402")) {
$_smarty_tpl->_subTemplateRender('file:tiki-login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif (($_smarty_tpl->tpl_vars['errortype']->value == 401 || $_smarty_tpl->tpl_vars['errortype']->value == 403) && !empty($_smarty_tpl->tpl_vars['prefs']->value['permission_denied_url']) && $_smarty_tpl->tpl_vars['prefs']->value['permission_denied_login_box'] != 'y') {
echo smarty_function_redirect(array('url'=>$_smarty_tpl->tpl_vars['prefs']->value['permission_denied_url']),$_smarty_tpl);
} else {
if (($_smarty_tpl->tpl_vars['errortype']->value == 401 || $_smarty_tpl->tpl_vars['errortype']->value == 403) && empty($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['prefs']->value['permission_denied_login_box'] == 'y') {
$_smarty_tpl->_assignInScope('errortitle', "Please log in");
} else {
$_smarty_tpl->_assignInScope('errortitle', "Error");
}
if ($_smarty_tpl->tpl_vars['errortype']->value == "404" && (isset($_smarty_tpl->tpl_vars['file_error']->value))) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'errors','title'=>"File error"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>"File error"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['file_error']->value;
$_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>"File error"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} elseif ($_smarty_tpl->tpl_vars['errortype']->value == "404" && (isset($_smarty_tpl->tpl_vars['page']->value))) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Page not found<br><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value ));
$_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_likePages'] == 'y') {
if ($_smarty_tpl->tpl_vars['likepages']->value) {?><p>Perhaps you are looking for:</p><ul><?php
$__section_back_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['likepages']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_back_0_total = $__section_back_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_back'] = new Smarty_Variable(array());
if ($__section_back_0_total !== 0) {
for ($__section_back_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_back']->value['index'] = 0; $__section_back_0_iteration <= $__section_back_0_total; $__section_back_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_back']->value['index']++){
?><li><a href="tiki-index.php?page=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['likepages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_back']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_back']->value['index'] : null)],"url" ));?>
" class="wiki"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['likepages']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_back']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_back']->value['index'] : null)] ));?>
</a></li><?php
}
}
?></ul><?php } else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"tip",'title'=>"Information"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Information"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>There are no wiki pages similar to '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value ));?>
'<?php $_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Information"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
if (($_smarty_tpl->tpl_vars['prefs']->value['feature_search'] == 'y' || $_smarty_tpl->tpl_vars['prefs']->value['feature_search_fulltext'] == 'y') && $_smarty_tpl->tpl_vars['tiki_p_search']->value == 'y') {
if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_fulltext'] == 'y') {
$_smarty_tpl->_subTemplateRender('file:tiki-searchresults.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('searchNoResults'=>"false",'searchStyle'=>"menu",'searchOrientation'=>"horiz",'words'=>((string)$_smarty_tpl->tpl_vars['page']->value)), 0, false);
} else {
$_smarty_tpl->_subTemplateRender('file:tiki-searchindex_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('searchNoResults'=>"true",'searchStyle'=>"menu",'searchOrientation'=>"horiz",'words'=>((string)$_smarty_tpl->tpl_vars['page']->value),'filter'=>$_smarty_tpl->tpl_vars['filter']->value), 0, false);
}
}
} elseif ($_smarty_tpl->tpl_vars['commenttype']->value == "note" && (isset($_smarty_tpl->tpl_vars['msg']->value))) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'note','title'=>$_smarty_tpl->tpl_vars['title']->value));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'note','title'=>$_smarty_tpl->tpl_vars['title']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['msg']->value;
$_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'note','title'=>$_smarty_tpl->tpl_vars['title']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
if ((isset($_smarty_tpl->tpl_vars['token_error']->value))) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'errors','title'=>"Token Error"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Token Error"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['token_error']->value;
$_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Token Error"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} elseif (($_smarty_tpl->tpl_vars['errortype']->value == 401 || $_smarty_tpl->tpl_vars['errortype']->value == 403) && empty($_smarty_tpl->tpl_vars['user']->value) && $_smarty_tpl->tpl_vars['prefs']->value['permission_denied_login_box'] == 'y') {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Permission denied<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->_subTemplateRender('file:tiki-login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} elseif (!(isset($_smarty_tpl->tpl_vars['user']->value)) && $_smarty_tpl->tpl_vars['errortype']->value != 'no_redirect_login' && $_smarty_tpl->tpl_vars['errortype']->value != 'login' && empty($_smarty_tpl->tpl_vars['msg']->value)) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>You are not logged in. <a href="tiki-login_scr.php" class="alert-link">Go to Log in Page</a><?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['msg']->value;
if (!empty($_smarty_tpl->tpl_vars['required_preferences']->value)) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'note','title'=>"Settings",'close'=>"n"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'note','title'=>"Settings",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><form method="post" action="tiki-admin.php" role="form" class="form"><?php echo smarty_function_ticket(array(),$_smarty_tpl);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['required_preferences']->value, 'pref');
$_smarty_tpl->tpl_vars['pref']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pref']->value) {
$_smarty_tpl->tpl_vars['pref']->do_else = false;
echo smarty_function_preference(array('name'=>$_smarty_tpl->tpl_vars['pref']->value),$_smarty_tpl);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="text-center"><input type="submit" class="btn btn-primary" value="Apply"></div></form><?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'note','title'=>"Settings",'close'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
if ((isset($_smarty_tpl->tpl_vars['extraButton']->value))) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['extraButton']->value['comment'];
echo smarty_function_button(array('href'=>$_smarty_tpl->tpl_vars['extraButton']->value['href'],'_text'=>$_smarty_tpl->tpl_vars['extraButton']->value['text']),$_smarty_tpl);
$_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['page']->value)) && $_smarty_tpl->tpl_vars['page']->value && $_smarty_tpl->tpl_vars['create']->value == 'y' && ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value == 'y' || $_smarty_tpl->tpl_vars['tiki_p_edit']->value == 'y')) {
echo smarty_function_button(array('href'=>"tiki-editpage.php?page=".((string)$_smarty_tpl->tpl_vars['page']->value),'_text'=>"Create this page"),$_smarty_tpl);?>
 <span class="ml-3">(page will be orphaned)</span><br><br><?php }
if (!(isset($_smarty_tpl->tpl_vars['page']->value)) || $_smarty_tpl->tpl_vars['prefs']->value['site_wikiHomePage'] != $_smarty_tpl->tpl_vars['page']->value) {
if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled'] == 'y') {
echo smarty_function_button(array('_type'=>"link",'_icon_name'=>"arrow-left",'_onclick'=>"javascript:history.back();return false;",'_text'=>"Go back",'_ajax'=>"n"),$_smarty_tpl);?>
<br><br><?php }
echo smarty_function_button(array('href'=>$_smarty_tpl->tpl_vars['prefs']->value['tikiIndex'],'_type'=>"link",'_icon_name'=>"home",'_text'=>"Return to home page"),$_smarty_tpl);
}
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender('file:tiki.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
