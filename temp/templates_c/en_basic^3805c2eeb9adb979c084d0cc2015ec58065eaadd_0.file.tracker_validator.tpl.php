<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:00:42
  from 'C:\xampp\htdocs\tikip4k\templates\tracker_validator.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61263efad5d002_54688428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3805c2eeb9adb979c084d0cc2015ec58065eaadd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tracker_validator.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61263efad5d002_54688428 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),));
?>

<?php if ((isset($_smarty_tpl->tpl_vars['validationjs']->value))) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
$("#editItemForm<?php echo $_smarty_tpl->tpl_vars['trackerEditFormId']->value;?>
").validate({
	<?php echo $_smarty_tpl->tpl_vars['validationjs']->value;?>
,
	submitHandler: function(form, event){
		if( typeof nosubmitItemForm<?php echo $_smarty_tpl->tpl_vars['trackerEditFormId']->value;?>
 !== "undefined" && nosubmitItemForm<?php echo $_smarty_tpl->tpl_vars['trackerEditFormId']->value;?>
 == true ) {
			return false;
		} else {
			return process_submit(form, event);
		}
	}
});
<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
