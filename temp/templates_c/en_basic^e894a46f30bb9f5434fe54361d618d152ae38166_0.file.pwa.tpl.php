<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:27:14
  from 'C:\xampp\htdocs\tikip4k\templates\pwa\pwa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264532576514_32909145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e894a46f30bb9f5434fe54361d618d152ae38166' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\pwa\\pwa.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61264532576514_32909145 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="/lib/pwa/app.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	window.pagespwa = <?php echo $_smarty_tpl->tpl_vars['pagespwa']->value;?>
;
	(function () {
		setTimeout(function () {
			$.loadCache(window.pagespwa);
		}, 500)
	})();
<?php echo '</script'; ?>
>
<div class="pwa-queue"
	 style="position: fixed;bottom: 20px;right: 20px;display: flex;flex-direction: column;align-items: flex-end;">
	<div style="display: inline-flex; justify-items: right; align-items: baseline;">
		<p style="padding: 10px"><span id="pwa-n-requests"></span> requests</p>
		<button onclick="" id="sync-pwa" class="btn btn-info" href="#">Sync</button>
	</div>
	<div class="alert alert-warning" style="display: none;" id="pwa-offline-alert" role="alert">
		<strong>Warning!</strong> You are offline. Tiki will try to handle your requests to send them later.
	</div>
</div><?php }
}
