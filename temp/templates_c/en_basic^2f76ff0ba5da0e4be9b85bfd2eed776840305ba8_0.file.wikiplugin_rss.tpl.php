<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:31:55
  from 'C:\xampp\htdocs\tikip4k\templates\wiki-plugins\wikiplugin_rss.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_6126464b019b71_00757149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f76ff0ba5da0e4be9b85bfd2eed776840305ba8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\wiki-plugins\\wikiplugin_rss.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6126464b019b71_00757149 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.tiki_short_date.php','function'=>'smarty_modifier_tiki_short_date',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.jq.php','function'=>'smarty_block_jq',),));
if ($_smarty_tpl->tpl_vars['rsstitle']->value && $_smarty_tpl->tpl_vars['showtitle']->value) {?>
	<div class="rsstitle">
		<a target="_blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rsstitle']->value['link'] ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rsstitle']->value['title'] ));?>
</a>
	</div>
<?php }?>
<ul class="rsslist<?php if ($_smarty_tpl->tpl_vars['ticker']->value) {?> rssticker<?php }?>">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
			<div style="list-style:square inside url(<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
)">
		<?php }?>
		<li class="rssitem">
			<a target="_blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['url'] ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['title'] ));?>
</a>

			<?php if ($_smarty_tpl->tpl_vars['item']->value['author'] && $_smarty_tpl->tpl_vars['showauthor']->value && $_smarty_tpl->tpl_vars['item']->value['publication_date'] && $_smarty_tpl->tpl_vars['showdate']->value) {?>
				&nbsp;&nbsp;&nbsp;(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['author'] ));?>
, <span class="rssdate"><?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['item']->value['publication_date']);?>
</span>)
			<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['author'] && $_smarty_tpl->tpl_vars['showauthor']->value) {?>
				&nbsp;&nbsp;&nbsp;(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['author'] ));?>
)
			<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['publication_date'] && $_smarty_tpl->tpl_vars['showdate']->value) {?>
				&nbsp;&nbsp;&nbsp;(<span class="rssdate"><?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['item']->value['publication_date']);?>
</span>)
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['item']->value['description'] && $_smarty_tpl->tpl_vars['showdesc']->value) {?>
				<div class="rssdescription">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['description'] ));?>

				</div>
			<?php }?>
		</li>
		<?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
			</div>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<?php if ($_smarty_tpl->tpl_vars['ticker']->value) {?>
	<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('jq', array());
$_block_repeat=true;
echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		function rsstick(){
			$('ul.rssticker li:first').slideUp( function () { $(this).appendTo($('ul.rssticker')).slideDown(); });
		}
		setInterval(function(){ rsstick() }, 5000);
	<?php $_block_repeat=false;
echo smarty_block_jq(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
