<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:37:41
  from 'C:\xampp\htdocs\tikip4k\templates\wizard\admin_files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612663c50f0210_42824308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52349e7e0d9bbefa409d51810291118a66b9940f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\wizard\\admin_files.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612663c50f0210_42824308 (Smarty_Internal_Template $_smarty_tpl) {
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
		<?php echo smarty_function_icon(array('name'=>"admin_fgal",'size'=>3,'iclass'=>"float-sm-right"),$_smarty_tpl);?>

		<h4 class="mt-0 mb-4">Set up the file gallery and attachments. Choose to store them either in the database or in files on disk, among other options.</h4>

				<fieldset class="mb-4">
					<?php echo smarty_function_icon(array('name'=>"admin_fgal",'size'=>2,'iclass'=>"adminWizardIconright"),$_smarty_tpl);?>

					<legend>File Gallery</legend>

					<?php echo smarty_function_preference(array('name'=>'fgal_elfinder_feature'),$_smarty_tpl);?>

					<div class="adminoptionboxchild">
						This setting makes the feature available, go to next wizard page to apply elFinder to File Galleries.
						This setting also activates jQuery, which is required for elFinder.
						See also <a href="http://doc.tiki.org/elFinder" target="_blank">elFinder @ doc.tiki.org</a>
					</div>
					<br>
					<?php echo smarty_function_preference(array('name'=>'fgal_use_db'),$_smarty_tpl);?>
<br>
					<em>See also <a href="tiki-admin.php?page=fgal#content1" target="_blank">File Gallery admin panel</a></em>
				</fieldset>

				<fieldset>
					<?php echo smarty_function_icon(array('name'=>"admin_wiki",'size'=>2,'iclass'=>"adminWizardIconright"),$_smarty_tpl);?>

					<legend>Wiki Attachments</legend>
					<?php echo smarty_function_preference(array('name'=>'feature_wiki_attachments'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_use_fgal_for_wiki_attachments'),$_smarty_tpl);?>

					<br>
					<em>See also <a href="tiki-admin.php?page=wiki&amp;alt=Wiki#content2" target="_blank">Wiki admin panel</a></em>
				</fieldset>

	</div>
</div>
<?php }
}
