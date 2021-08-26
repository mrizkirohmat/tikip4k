<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:37:21
  from 'C:\xampp\htdocs\tikip4k\templates\wizard\admin_language.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612663b1327310_41389810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1716c96614af09cd9f3cdd2ee0e5785d925d8b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\wizard\\admin_language.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612663b1327310_41389810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.preference.php','function'=>'smarty_function_preference',),));
?>


<div class="media">
	<div class="mr-4">
		<span class="fa-stack fa-lg" style="width: 100px;" title="Configuration Wizard">
			<i class="fas fa-cog fa-stack-2x"></i>
			<i class="fas fa-flip-horizontal fa-magic fa-stack-1x ml-4 mt-4"></i>
		</span>
	</div>
	<div class="media-body">
		<?php echo smarty_function_icon(array('name'=>"admin_i18n",'size'=>3,'iclass'=>"adminWizardIconright"),$_smarty_tpl);?>

		<h4 class="mt-0 mb-4">Select the site language</h4>
		<fieldset>
			<legend>Language options</legend>

			<?php echo smarty_function_preference(array('name'=>'language'),$_smarty_tpl);?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'feature_multilingual','visible'=>"always"),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'lang_use_db'),$_smarty_tpl);?>

		</fieldset>
	</div>
</div>
<?php }
}
