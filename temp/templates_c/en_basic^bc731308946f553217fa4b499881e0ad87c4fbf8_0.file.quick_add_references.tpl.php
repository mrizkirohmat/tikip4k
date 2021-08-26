<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:22:26
  from 'C:\xampp\htdocs\tikip4k\templates\plugin\quick_add_references.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61265222c65782_54239761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc731308946f553217fa4b499881e0ad87c4fbf8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\plugin\\quick_add_references.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61265222c65782_54239761 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.ticket.php','function'=>'smarty_function_ticket',),));
if ($_smarty_tpl->tpl_vars['type']->value == 'addreference' && !empty($_smarty_tpl->tpl_vars['prefs']->value['feature_library_references']) && $_smarty_tpl->tpl_vars['prefs']->value['feature_library_references'] == 'y') {?>
	
	<div><a class="btn btn-secondary" id="plugin_addreference_button">Add Reference</a></div>
	<div id="add_reference_block" style="display:none;">
		<div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="add_ref_auto_biblio_code">Auto generate Biblio Code:</label>
				<div class="col-sm-10">
					<input type="checkbox" class="form-check wikiedit" name="ref_auto_biblio_code" id="add_ref_auto_biblio_code" checked="checked" />
				</div>
			</div>
			<div class="form-group row" id="add_biblio_form" style="display: none;">
				<label class="col-sm-2 col-form-label" for="add_ref_biblio_code">Biblio Code:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="ref_biblio_code" id="add_ref_biblio_code" value="" />
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="add_ref_author">Author:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_author" id="add_ref_author" value="" />
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="add_ref_title">Title:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_title" id="add_ref_title" value="" />
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="add_ref_year">Year:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_year" id="add_ref_year" value="" />
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="add_ref_part">Part:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_part" id="add_ref_part" value="" />
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="add_ref_uri">URI:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_uri" id="add_ref_uri" value="" />
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="add_ref_biblio_code">Code:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_code" id="add_ref_code" value="" />
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="add_ref_publisher">Publisher:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_publisher" id="add_ref_publisher" value="" />
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="add_ref_location">Location:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_location" id="add_ref_location" value="" />
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="add_ref_style">Style:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_style" id="add_ref_style" value="" />
					<span class="form-text">Enter the CSS class name to be added in the 'li' tag for listing this reference.</span>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label" for="add_ref_template">Template:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control wikiedit" name="add_ref_template" id="add_ref_template" value="" />
					<span class="form-text">
											Enter template format in which you want to display the reference details in the bibliography listing. For example: ~title~ (~year~) ~author~
										</span>
					<span class="form-text">
											All the codes must be in lower case letters separated with spaces.
										</span>
				</div>
			</div>
			<div class="form-group row">
				<div class="offset-sm-2 col-sm-10">
					<a class="wikiaction btn btn-primary" title="Add" id="add_reference_submit">Add</a>
					<a class="wikiaction btn btn-warning" title="Cancel" onclick="$('#add_reference_block').css('display','none'); return false;">Cancel</a>
					<span id="a_status" style="margin: 0 0 0 10px;"></span>
				</div>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
 type="application/javascript">
		$('#plugin_addreference_button').click(function(){
			var block = $('#add_reference_block');
			if (!block.is(':visible')){
				block.find('input').val('');
			}
			block.toggle();
		});
		$('#add_ref_auto_biblio_code').click(function(){
			if ($('#add_ref_auto_biblio_code').is(':checked')) {
				$('#add_biblio_form').hide();
			} else {
				$('#add_biblio_form').show();
			}
		});
		$('#add_reference_submit').click(function(e){
			e.preventDefault();

			var ticket = "<?php echo smarty_function_ticket(array('mode'=>'get'),$_smarty_tpl);?>
";
			var ck_code = /^[A-Za-z0-9]+$/;
			
			var ck_year = /^[1-2][0-9][0-9][0-9]$/;
			if (!$('#add_ref_auto_biblio_code').is(':checked') && $('#add_ref_biblio_code').val() == '') {
				alert('Please fill the biblio code field or enable biblio code auto generator');
				return false;
			}
			if(!$('#add_ref_auto_biblio_code').is(':checked') && !ck_code.test($('#add_ref_biblio_code').val())){
				alert('Biblio code is not valid');
				return false;
			}
			
			if(!$('#add_ref_author').val().trim()){
				alert('Author is not valid');
				return false;
			}
			if(!$('#add_ref_year').val() == '' && !ck_year.test($('#add_ref_year').val())){
				alert('Year is not valid');
				return false;
			}

			var data = {
				ref_auto_biblio_code: $('#add_ref_auto_biblio_code').is(':checked') ? 'on' : 'off',
				ref_biblio_code: $('#add_ref_auto_biblio_code').is(':checked') ? '' : $('#add_ref_biblio_code').val(),
				ref_author: $('#add_ref_author').val(),
				ref_title: $('#add_ref_title').val(),
				ref_part: $('#add_ref_part').val(),
				ref_uri: $('#add_ref_uri').val(),
				ref_code: $('#add_ref_code').val(),
				ref_publisher: $('#add_ref_publisher').val(),
				ref_location: $('#add_ref_location').val(),
				ref_year: $('#add_ref_year').val(),
				ref_style: $('#add_ref_style').val(),
				ref_template: $('#add_ref_template').val(),
			};
			$.post('tiki-references.php?addreference=1&response=json' + ticket, data, null, 'json')
				.done(function(result){
					if(result.success) {
						if ($('#param_biblio_code_input').val() == '') {
							$('#param_biblio_code_input').val(result.biblio_code);
						}
						var pageName = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pageName']->value ));?>
';
						if (!pageName) {
							pageName = $("#editpageform input[name='page']").val();
						}
						if (!!pageName && !!result.id) {
							$.get('references.php?page=' + pageName + '&action=u_lib&ref_id=' + result.id + ticket);
						}
						alert('New reference created');
						$('#add_reference_block').hide();
					} else {
						alert('Problems while creating the reference:' + "\n" + result.msg);
					}
				}).fail(function(){
				alert('Problems while creating the reference');
			});
			return false;
		});
	<?php echo '</script'; ?>
>
<?php }
}
}
