<?php
/* Smarty version 3.1.38, created on 2021-08-25 17:35:32
  from 'C:\xampp\htdocs\tikip4k\templates\tiki-register_site.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612663442f6734_65154157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b4e8ea0e54a790b19c00cd6f9694673dd30dc6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\tiki-register_site.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612663442f6734_65154157 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['save']->value == 'y') {?>
	<h2>Tiki site registered</h2>
	The following site was added and validation by admin may be needed before appearing on the lists
	<div class="table-responsive">
		<table class="table">
			<tr>
				<td>Name:</td>
				<td><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
</td>
			</tr>
			<tr>
				<td>Description:</td>
				<td><?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
</td>
			</tr>
			<tr>
				<td>URL:</td>
				<td><?php echo $_smarty_tpl->tpl_vars['info']->value['url'];?>
</td>
			</tr>
			<tr>
				<td>Country:</td>
				<td><?php echo $_smarty_tpl->tpl_vars['info']->value['country'];?>
</td>
			</tr>
		</table>
	</div>
<?php } else { ?>
	<div class="card">
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value != 'y') {?>
			<div class="card-header">
				Error
			</div>
			<div class="card-body">
				You don't have permission to use this feature.
				Please register.
			</div>
		<?php } else { ?>
			<div class="card-header">
				Register this site at Tiki.org
			</div>
			<div class="card-body">
				<table>
					<tr>
						<td>
							<div class="card">
								<div class="card-body">
									<b>Read this first!</b>
									<br><br>
									On this page you can make your tiki site known to Tiki.org. It will get shown there in a list of known tiki sites.
									<ul>
										<li>Registering is voluntary.</li>
										<li>Registering does not give you any benefits except one more link to your site.</li>
										<li>You don't get any emails, we don't sell the data about your site.</li>
										<li>Registering is just for us to get an overview of Tiki's usage.</li>
									</ul>
									<b>If your site is private or inside your intranet, you should not register!</b>
									<br><br>
								</div>
							</div>
						</td>
						<td align="center" width="30%">
							<br><br><br>
							<a href="http://tiki.org/" target="_tikiwiki"><img src="img/tiki/Tiki_WCG.png"></a><br>
							<br>
							tiki.org
						</td>
					</tr>
				</table>

				<br><br>
				<b>Information about your site:</b>
				<br><br>
				<form action="http://tiki.org/tiki-directory_add_tiki_site.php" method="post">
					<input type="hidden" name="registertiki" value="true">
					<div class="form-group row">
						<label class="col-form-label col-sm-3">Name:</label>
						<div class="col-sm-7">
							<input type="text" name="name" class="form-control" size="60" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['name'] ));?>
">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label col-sm-3">Description:</label>
						<div class="col-sm-7">
							<textarea rows="5" cols="60" name="description" class="form-control"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['description'] ));?>
</textarea>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label col-sm-3">URL:</label>
						<div class="col-sm-7 form-control-plaintext">
							<input type="hidden" name="url" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['url'] ));?>
" class="form-control"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['url'] ));?>

						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label col-sm-3">Country:</label>
						<div class="col-sm-7">
							<select name="country" class="form-control">
								<?php
$__section_ux_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['countries']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ux_0_total = $__section_ux_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ux'] = new Smarty_Variable(array());
if ($__section_ux_0_total !== 0) {
for ($__section_ux_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ux']->value['index'] = 0; $__section_ux_0_iteration <= $__section_ux_0_total; $__section_ux_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ux']->value['index']++){
?>
									<option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['countries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ux']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ux']->value['index'] : null)] ));?>
" <?php if ($_smarty_tpl->tpl_vars['info']->value['country'] == $_smarty_tpl->tpl_vars['countries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ux']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ux']->value['index'] : null)]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['countries']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ux']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ux']->value['index'] : null)];?>
</option>
								<?php
}
}
?>
							</select>
						</div>
					</div>
					<input name="isValid" type="hidden" value="">
					<div class="form-group row">
						<label class="col-form-label col-sm-3"></label>
						<div class="col-sm-7">
							<input type="submit" class="btn btn-primary" name="save" value="Save">
						</div>
					</div>
				</form>
			</div>
		<?php }?>
	</div>
<?php }
}
}
