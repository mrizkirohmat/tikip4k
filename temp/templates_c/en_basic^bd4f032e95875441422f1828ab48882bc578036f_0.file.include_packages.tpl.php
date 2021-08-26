<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:37:48
  from 'C:\xampp\htdocs\tikip4k\templates\admin\include_packages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612647aca46ec3_95886990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd4f032e95875441422f1828ab48882bc578036f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\admin\\include_packages.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612647aca46ec3_95886990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.remarksbox.php','function'=>'smarty_block_remarksbox',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tr.php','function'=>'smarty_block_tr',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tabset.php','function'=>'smarty_block_tabset',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tab.php','function'=>'smarty_block_tab',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),6=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.preference.php','function'=>'smarty_function_preference',),7=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),));
?>


<?php if (!$_smarty_tpl->tpl_vars['composer_available']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Composer not found"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Composer not found"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    Composer could not be executed, so the automated check on the packages cannot be performed.
    <br/>
    In <a href="javascript:void(0)" class="install-composer alert-link">Diagnose</a> tab you can install composer.
    <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Composer not found"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['composer_output']->value))) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"Note"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

    Result of executing the changes to the packages:<br />
        <pre><?php echo $_smarty_tpl->tpl_vars['composer_output']->value;?>
</pre>
    <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['composer_installed_errors']->value))) {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Composer errors"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Composer errors"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

	Composer returned some errors:<br />
        <pre><?php echo $_smarty_tpl->tpl_vars['composer_installed_errors']->value;?>
</pre>
	<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Composer errors"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if (!empty($_smarty_tpl->tpl_vars['composer_environment_warning']->value)) {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"warning",'title'=>"Issues with composer environment"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Issues with composer environment"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

        <p>Issues with composer environment:</p>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['composer_environment_warning']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <p><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array('_0'=>'<code>sh setup.sh fix</code>','_1'=>'<a href="https://doc.tiki.org/Packages" class="alert-link">doc.tiki.org/Packages</a>'));
$_block_repeat=true;
echo smarty_block_tr(array('_0'=>'<code>sh setup.sh fix</code>','_1'=>'<a href="https://doc.tiki.org/Packages" class="alert-link">doc.tiki.org/Packages</a>'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>Run %0 from a shell to try to fix this, see %1 for more info.<?php $_block_repeat=false;
echo smarty_block_tr(array('_0'=>'<code>sh setup.sh fix</code>','_1'=>'<a href="https://doc.tiki.org/Packages" class="alert-link">doc.tiki.org/Packages</a>'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></p>
	<?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Issues with composer environment"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['extensions_output']->value))) {?>
    <?php if ($_smarty_tpl->tpl_vars['extensions_status']->value) {?>
        <?php $_smarty_tpl->_assignInScope('type', 'success');?>
        <?php $_smarty_tpl->_assignInScope('title', "Success");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('type', 'error');?>
        <?php $_smarty_tpl->_assignInScope('title', "Error");?>
    <?php }?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>$_smarty_tpl->tpl_vars['type']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value,'close'=>"y"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>$_smarty_tpl->tpl_vars['type']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value,'close'=>"y"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <pre><?php echo $_smarty_tpl->tpl_vars['extensions_output']->value;?>
</pre>
    <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>$_smarty_tpl->tpl_vars['type']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value,'close'=>"y"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tabset', array('name'=>'tabs_admin-packages'));
$_block_repeat=true;
echo smarty_block_tabset(array('name'=>'tabs_admin-packages'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Packages"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Packages"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if (!$_smarty_tpl->tpl_vars['composer_phar_exists']->value) {?>
            <div class="clearfix"></div>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"note",'title'=>"Note"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            Packages check could not be performed at the moment due to missing <code>temp/composer.phar</code><br />
            You can try to install composer from the <a href="javascript:void(0)" class="install-composer alert-link">Diagnose</a> tab or look at the manual instructions bellow.
            <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
        <?php if (count($_smarty_tpl->tpl_vars['composer_packages_installed']->value)) {?>
        <br />
        <h4>Installed Packages <small>Status of the packages registered in the composer.json file</small></h4>
        <table class="table">
            <tr>
                <th>Package Name</th>
                <th>Version Required</th>
                <th>Status
                <th>Version Installed</th>
                <th>Action</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['composer_packages_installed']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['required'];?>
 <?php if ($_smarty_tpl->tpl_vars['entry']->value['upgradeVersion']) {?><span class="label label-warning">Update: <?php echo $_smarty_tpl->tpl_vars['entry']->value['requiredVersion'];?>
</span><?php }?></td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['composer_phar_exists']->value) {?>
                            <?php if ($_smarty_tpl->tpl_vars['entry']->value['status'] == 'installed') {?>
                                <?php echo smarty_function_icon(array('name'=>'success','iclass'=>'tips','ititle'=>"Status:Installed"),$_smarty_tpl);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status'] == 'missing') {?>
                                <?php echo smarty_function_icon(array('name'=>'warning','iclass'=>'tips','ititle'=>"Status:Missing"),$_smarty_tpl);?>

                            <?php } else { ?>
                                &nbsp;
                            <?php }?>
                        <?php }?>
                    </td>
                    <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['entry']->value['installed'])===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['entry']->value['extension']) {?>
                            <form action="tiki-admin.php?page=packages&cookietab=1" method="post">
                                <input type="hidden" name="redirect" value="0">
                                <input type="hidden" name="enabled" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['enabled'];?>
">
                                <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                                <?php if (!$_smarty_tpl->tpl_vars['entry']->value['extensionEnabled']) {?>
                                    <button class="btn btn-primary" name="enable-extension-package" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
">Enable extension</button>
                                <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['extensionUpdate']) {?>
                                    <button class="btn btn-secondary" name="enable-extension-package" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
">Update extension</button>
                                <?php } else { ?>
                                    <button class="btn btn-danger" name="disable-extension-package" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
">Disable extension</button>
                                <?php }?>
                            </form>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['entry']->value['key']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['composer_phar_exists']->value) {?>
                                <form action="tiki-admin.php?page=packages&cookietab=1" method="post">
                                    <input type="hidden" name="redirect" value="0">
                                    <input type="hidden" name="installed" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['installed'];?>
">
                                    <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                                    <?php if ($_smarty_tpl->tpl_vars['entry']->value['installed'] && $_smarty_tpl->tpl_vars['entry']->value['upgradeVersion']) {?>
                                        <button class="btn btn-primary" name="auto-update-package" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['key'];?>
">Update</button>
                                    <?php }?>
                                    <button class="btn btn-danger" name="auto-remove-package" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['key'];?>
">Remove</button>
                                </form>
                            <?php }?>
                        <?php } else { ?>
                            Removal not available
                            <?php echo smarty_function_icon(array('name'=>'info','iclass'=>'tips','ititle'=>"Removal not available:This package is not managed by Tiki and likely was installed manually."),$_smarty_tpl);?>

                        <?php }?>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['composer_packages_missing']->value) {?>
                <tr>
                    <td colspan="5">
                        <?php if ($_smarty_tpl->tpl_vars['composer_available']->value) {?>
                            <h4>One or more packages appear to be missing</h4>
                            In the list above, some packages could not be found. They are defined in the composer.json file, but do not seem to be installed.
                        <?php } else { ?>
                            <h4>Could not validate the status of one or more packages</h4>
                            In the list above, some packages status could not be validated, since composer was not found, you can try to install composer and try again or install the packages manually.
                        <?php }?>
                        <br><br>
                        <?php if ($_smarty_tpl->tpl_vars['composer_available']->value) {?>
                            <h4>Install packages from the administrator interface</h4>
                            <p>
                            The administrator interface can be used to install the packages marked as missing in the list above.
                            Click the "Fix Missing Packages" button below, and Tiki will try to install them:
                            </p>
                            <form action="tiki-admin.php?page=packages&cookietab=1" method="post">
                                <input type="hidden" name="redirect" value="0">
                                <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                                <button class="btn btn-primary" name="auto-fix-missing-packages" value="auto-fix-missing-packages">Fix Missing Packages</button>
                            </form>
                            <br />
                            <p>
                            The results of the execution of the commands will be displayed after the process finishes.
                            </p>
                        <?php }?>
                            <h4>Install packages manually</h4>
                        <?php if (!$_smarty_tpl->tpl_vars['composer_available']->value) {?>
                            <p><strong>Make sure <code>composer</code> is installed.</strong></p>
                            <p>
                                Composer can be installed manually, in the host machine, by following the instructions from the
                                <a href="https://doc.tiki.org/Composer">Composer</a> website.
                            </p>
                            <p>
                                The script <code>setup.sh</code> that is included in the Tiki distribution can be run to make sure composer is installed and the file permissions are correctly applied. In this case, composer will be installed as <code>temp/composer.phar</code>.
                                Below is an example of how to do this in a Linux-like operating system:<br>
                                <code>bash ./setup.sh composer</code>
                            </p>
                            <p><strong>Install the missing packages.</strong></p>
                        <?php }?>
                        <p>You can install the missing packages by issuing the command
                        <code>composer --no-dev --prefer-dist update nothing</code>.
                        Below is an example of how to do this in a Linux-like operating system: <br>
                        <code>php temp/composer.phar --no-dev --prefer-dist update nothing</code></p>
                    </td>
                </tr>
            <?php }?>
        </table>
        <?php }?>
        <?php if (count($_smarty_tpl->tpl_vars['composer_packages_available']->value)) {?>
        <br />
        <h4>Available Packages <small>These packages have been identified as required by one or more features.</small></h4>
        <table class="table">
            <tr>
                <th>Package Name</th>
                <th>Version</th>
                <th>Licence</th>
                <th>Required by</th>
                <th>Action</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['composer_packages_available']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['requiredVersion'];?>
</td>
                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['licenceUrl'];?>
"><?php if (empty($_smarty_tpl->tpl_vars['entry']->value['licence'])) {?>Not Available<?php } else {
echo $_smarty_tpl->tpl_vars['entry']->value['licence'];
}?></a></td>
                    <td><?php echo implode(', ',$_smarty_tpl->tpl_vars['entry']->value['requiredBy']);?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['composer_phar_exists']->value) {?>
                        <form action="tiki-admin.php?page=packages&cookietab=1" method="post">
                            <input type="hidden" name="redirect" value="0">
                            <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                            <button class="btn btn-primary" name="auto-install-package" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['key'];?>
">Install</button>
                        </form>
                        <?php }?>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <tr>
                    <td colspan="5">
                        <h4>There appear to be some optional packages that can be installed</h4>
                        In the list above, there are optional packages that may be installed in order to use the Tiki features that require the package.

                        <br><br>

                        <?php if ($_smarty_tpl->tpl_vars['composer_available']->value) {?>
                            <h4>Install packages from the administrator interface</h4>
                            <p>
                                The administrator interface can be used to install the optional packages in the list above.
                                Click the "Install Package" button, and Tiki will try to install them.
                            </p>
                        <?php }?>

                        <h4>Install packages manually</h4>
                        <?php if (!$_smarty_tpl->tpl_vars['composer_available']->value) {?>
                            <p><strong>Make sure <code>composer</code> is installed.</strong></p>
                            <p>
                                Composer can be installed manually, in the host machine, by following the instructions from the
                                <a href="https://doc.tiki.org/Composer">Composer</a> website.
                            </p>
                            <p>
                                The script <code>setup.sh</code> that is included in the Tiki distribution can be run to make sure composer is installed and the file permissions are correctly applied. In this case, composer will be installed as <code>temp/composer.phar</code>.
                                Below is an example of how to do this in a Linux-like operating system:<br>
                                <code>bash ./setup.sh composer</code>
                            </p>
                        <?php }?>
                        <p><strong>Make sure there is a <code>composer.json</code> file in the root of the website.</strong></p>
                        <p>
                            If there is not already a <code>composer.json</code> file, then create one.
                            The sample <code>composer.json.dist</code> that comes with Tiki can be used as a starting point.
                            Below is an example of how to do this in a Linux-like operating system: <br>
                            <code>cp composer.json.dist composer.json</code>
                        </p>
                        <p><strong>Install the package.</strong></p>
                        <p>
                            Packages can be installed by issuing a command
                            <code>composer require package:version</code> for each package that is to be installed.
                            Below is an example of how to do this in a Linux-like operating system: <br>
                            <code>php temp/composer.phar require --update-no-dev --prefer-dist psr/log:^1.0</code>
                        </p>
                    </td>
                </tr>
        </table>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Packages"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Packages Custom"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Packages Custom"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if (!$_smarty_tpl->tpl_vars['composer_custom_packages_installed']->value) {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"info",'title'=>"There are no manual managed packages installed in the folder vendor_custom"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"There are no manual managed packages installed in the folder vendor_custom"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            Please check <a href="https://packages.tiki.org/">Tiki Packages</a> website for information on how to download and use these manual packages. <br/>
            Note that this in place for when you can not use composer to manage your packages, example when there is restricted access to internet and composer will not be able to download the packages, for most users the most convenient way is to install directly from the "Packages" tab.
            <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"There are no manual managed packages installed in the folder vendor_custom"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['composer_custom_packages_installed']->value) {?>
            <?php if (!$_smarty_tpl->tpl_vars['composer_phar_exists']->value) {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"info",'title'=>"Note"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                Packages check could not be performed at the moment due to missing <code>temp/composer.phar</code><br />
                You can try to install composer from the <a href="javascript:void(0)" class="install-composer alert-link">Diagnose</a> tab or look at the manual instructions bellow.
                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Note"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
            <br>
            <h4>Composer Packages Custom <small>Status of the packages registered in the vendor_custom folder</small></h4>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"info",'title'=>"For information only"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"For information only"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            These packages are managed manually and displayed here for informational purposes.
            <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"For information only"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <table class="table">
                <tr>
                    <th>Package Name</th>
                    <th>Version Required</th>
                    <th>Status
                    <th>Version Installed</th>
                    <th>Actions</th>
                </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['composer_custom_packages_installed']->value, 'packages', false, 'folderName');
$_smarty_tpl->tpl_vars['packages']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['folderName']->value => $_smarty_tpl->tpl_vars['packages']->value) {
$_smarty_tpl->tpl_vars['packages']->do_else = false;
?>
                <tr><td colspan="5" style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['folderName']->value;?>
</td></tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packages']->value, 'package');
$_smarty_tpl->tpl_vars['package']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->do_else = false;
?>
                    <tr>
                        <td width="45%">
                            <?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>

                        </td>
                        <td width="15%"><?php echo $_smarty_tpl->tpl_vars['package']->value['required'];?>
</td>
                        <td width="10%">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['status'] == 'installed') {?>
                                <?php echo smarty_function_icon(array('name'=>'success','iclass'=>'tips','ititle'=>"Status:Installed"),$_smarty_tpl);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['package']->value['status'] == 'missing') {?>
                                <?php echo smarty_function_icon(array('name'=>'warning','iclass'=>'tips','ititle'=>"Status:Missing"),$_smarty_tpl);?>

                            <?php }?>
                        </td>
                        <td width="15%"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['package']->value['installed'])===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</td>
                        <td width="15%">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['extension']) {?>
                                <form action="tiki-admin.php?page=packages&cookietab=2" method="post" style="display:inline">
                                    <input type="hidden" name="redirect" value="0">
                                    <input type="hidden" name="enabled" value="<?php echo $_smarty_tpl->tpl_vars['package']->value['enabled'];?>
">
                                    <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                                    <?php if (!$_smarty_tpl->tpl_vars['package']->value['extensionEnabled']) {?>
                                        <button class="btn btn-primary btn-sm" name="enable-extension-package" value="<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
">Enable extension</button>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['package']->value['extensionUpdate']) {?>
                                        <button class="btn btn-danger btn-sm" name="enable-extension-package" value="<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
">Update extension</button>
                                    <?php } else { ?>
                                        <button class="btn btn-danger btn-sm" name="disable-extension-package" value="<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
">Disable extension</button>
                                    <?php }?>
                                </form>
                            <?php }?>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Packages Custom"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Packages Bundled"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Packages Bundled"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['composer_available']->value) {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"info",'title'=>"For information only"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"For information only"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            These packages are bundled with Tiki, and displayed here for informational purposes.
            <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"For information only"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['composer_phar_exists']->value) {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"info",'title'=>"Note"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            Packages check could not be performed at the moment due to missing <code>temp/composer.phar</code><br />
            You can try to install composer from the <a href="javascript:void(0)" class="install-composer alert-link">Diagnose</a> tab or look at the manual instructions bellow.
            <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Note"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php }?>
        <br>
        <h4>Composer Packages Bundled <small>status of the packages registered in the vendor_bundled/composer.json file</small></h4>
        <table class="table">
            <tr>
                <th>Package Name</th>
                <th>Version Required</th>
                <th>Status
                <th>Version Installed</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['composer_bundled_packages_installed']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['required'];?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['composer_phar_exists']->value) {?>
                            <?php if ($_smarty_tpl->tpl_vars['entry']->value['status'] == 'installed') {?>
                                <?php echo smarty_function_icon(array('name'=>'success','iclass'=>'tips','ititle'=>"Status:Installed"),$_smarty_tpl);?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['status'] == 'missing') {?>
                                <?php echo smarty_function_icon(array('name'=>'warning','iclass'=>'tips','ititle'=>"Status:Missing"),$_smarty_tpl);?>

                            <?php } else { ?>
                                &nbsp;
                            <?php }?>
                        <?php }?>
                    </td>
                    <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['entry']->value['installed'])===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Packages Bundled"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Diagnose"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Diagnose"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <br>
        <h4>Diagnose Composer Installation <small>Use the button below to test your composer installation.</small></h4>
        <form action="tiki-admin.php?page=packages&cookietab=4" method="post">
            <input type="hidden" name="redirect" value="0">
            <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

            <button class="btn btn-primary" name="auto-run-diagnostics" value="run">Diagnose Composer</button>
        </form>
        <br />
        <h4>Composer management</h4>
        <form action="tiki-admin.php?page=packages&cookietab=4" method="post">
            <input type="hidden" name="redirect" value="0">
            <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

            <?php if (!$_smarty_tpl->tpl_vars['composer_available']->value) {?>
                <button class="btn btn-primary" name="install-composer" value="run">Install Composer</button>
            <?php } else { ?>
                <button class="btn btn-primary" name="update-composer" value="run">Update Composer</button>
            <?php }?>
            <button class="btn btn-primary" name="remove-composer-locker" value="run">Remove composer.lock</button>
            <button class="btn btn-primary" name="clean-vendor-folder" value="run">Clean vendor folder</button>
        </form>
        <br />

        <?php if ((isset($_smarty_tpl->tpl_vars['diagnostic_composer_location']->value)) || $_smarty_tpl->tpl_vars['diagnostic_composer_output']->value || $_smarty_tpl->tpl_vars['composer_management_success']->value || $_smarty_tpl->tpl_vars['composer_management_error']->value) {?>
            <br />
            <h4>Results</h4>
            <?php if ((isset($_smarty_tpl->tpl_vars['diagnostic_composer_location']->value))) {?>
                <p><strong>Composer:</strong> <?php if ($_smarty_tpl->tpl_vars['diagnostic_composer_location']->value) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tr', array());
$_block_repeat=true;
echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['diagnostic_composer_location']->value;
$_block_repeat=false;
echo smarty_block_tr(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} else { ?>Composer not found<?php }?></p>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['diagnostic_composer_output']->value) {?>
                <p><strong>Composer diagnose output</strong></p>
                <pre><?php echo $_smarty_tpl->tpl_vars['diagnostic_composer_output']->value;?>
</pre>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['composer_management_success']->value) {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"success",'title'=>"Success",'close'=>"n"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"success",'title'=>"Success",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php echo $_smarty_tpl->tpl_vars['composer_management_success']->value;?>

                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"success",'title'=>"Success",'close'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['composer_management_error']->value) {?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('remarksbox', array('type'=>"error",'title'=>"Error",'close'=>"n"));
$_block_repeat=true;
echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Error",'close'=>"n"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php echo $_smarty_tpl->tpl_vars['composer_management_error']->value;?>

                <?php $_block_repeat=false;
echo smarty_block_remarksbox(array('type'=>"error",'title'=>"Error",'close'=>"n"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
            <br>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Diagnose"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php if (count($_smarty_tpl->tpl_vars['packageprefs']->value)) {?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tab', array('name'=>"Extensions Preferences"));
$_block_repeat=true;
echo smarty_block_tab(array('name'=>"Extensions Preferences"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <form action="tiki-admin.php?page=packages&cookietab=5" method="post">
                <?php echo smarty_function_ticket(array(),$_smarty_tpl);?>

                <input type="hidden" name="redirect" value="0">
                <fieldset>
                    <legend>Activate Extension Package</legend>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packageprefs']->value, 'package');
$_smarty_tpl->tpl_vars['package']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->do_else = false;
?>
                        <?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['package']->value ));
$_prefixVariable1=ob_get_clean();
echo smarty_function_preference(array('name'=>$_prefixVariable1),$_smarty_tpl);?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </fieldset>
                <button class="btn btn-primary" name="apply-packages-preferences" value="run">Apply</button>
            </form>
            <br>
        <?php $_block_repeat=false;
echo smarty_block_tab(array('name'=>"Extensions Preferences"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
$_block_repeat=false;
echo smarty_block_tabset(array('name'=>'tabs_admin-packages'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    $(document).ready(function(){
        $(".install-composer").click(function(){
            $('.nav-tabs a[href="#contenttabs_admin_packages-4"]').tab('show');
        });
    });
<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
