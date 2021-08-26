<?php
/* Smarty version 3.1.38, created on 2021-08-25 15:27:12
  from 'C:\xampp\htdocs\tikip4k\templates\modules\mod-adminbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_61264530264268_82919588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2399d52622a7eb06909c1c066ab4c3e41931c151' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\modules\\mod-adminbar.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61264530264268_82919588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\block.tikimodule.php','function'=>'smarty_block_tikimodule',),1=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.icon.php','function'=>'smarty_function_icon',),2=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.stringfix.php','function'=>'smarty_modifier_stringfix',),3=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.permission_link.php','function'=>'smarty_function_permission_link',),4=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.bootstrap_modal.php','function'=>'smarty_function_bootstrap_modal',),5=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\function.query.php','function'=>'smarty_function_query',),));
?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"adminbar",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']));
$_block_repeat=true;
echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"adminbar",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value == "y") {?> <?php $_smarty_tpl->_assignInScope('main_admin_icons', array("general"=>array('title'=>tra('General'),'description'=>tra('Global site configuration, date formats, etc.'),'help'=>'General Admin'),"features"=>array('title'=>tra('Features'),'description'=>tra('Switches for major features'),'help'=>'Features Admin'),"login"=>array('title'=>tra('Log in'),'description'=>tra('User registration, remember me cookie settings and authentication methods'),'help'=>'Login Config'),"user"=>array('title'=>tra('User Settings'),'description'=>tra('User related preferences like info and picture, features, messages and notification, files, etc'),'help'=>'User Settings'),"profiles"=>array('title'=>tra('Profiles'),'description'=>tra('Repository configuration, browse and apply profiles'),'help'=>'Profiles'),"look"=>array('title'=>tra('Look & Feel'),'description'=>tra('Theme selection, layout settings and UI effect controls'),'help'=>'Look and Feel'),"textarea"=>array('title'=>tra('Editing & Plugins'),'description'=>tra('Text editing settings applicable to many areas. Plugin activation and plugin alias management'),'help'=>'Text area'),"module"=>array('title'=>tra('Modules'),'description'=>tra('Module appearance settings'),'help'=>'Module'),"performance"=>array('title'=>tra('Performance'),'description'=>tra('Server performance settings'),'help'=>'Performance'),"security"=>array('title'=>tra('Security'),'description'=>tra('Site security settings'),'help'=>'Security'),"print"=>array('title'=>tra('Print Settings'),'description'=>tra('Settings and features for print versions and pdf generation'),'help'=>'Print Setting-Admin'),"packages"=>array('title'=>tra('Packages'),'description'=>tra('External packages installation and management'),'help'=>'Packages')));?>
	<a class="js-admin-bar link-admin-bar float-sm-right mr-auto btn btn-link"><?php echo smarty_function_icon(array('name'=>'cog'),$_smarty_tpl);?>
</a>
	<div class="sliding-panel-admin-bar js-sliding-panel-admin-bar card-header  invisible">
		<div class="card-header left"></div>
		<div class="container-fluid container-sliding-panel d-flex flex-column h-100 justify-content-center">

			<div class="row">
				<div class="col-md-4 align-self-center col-left-sliding-panel mb-2 mb-md-0 pl-md-0">
					<div class="col-md-12 col-search mb-2 px-0">
						<form method="post" action="tiki-admin.php" class="form-inline my-2 my-md-0 ml-auto" role="form" target="_blank">
							<label class="col-form-control mr-md-3 text-left">Admin Features</label>
							<input type="text" name="lm_criteria" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_REQUEST['lm_criteria'] ));?>
" class="form-control form-control-sm mr-2 col-10 col-md-auto" placeholder="Search preferences...">
							<button type="submit" class="btn btn-primary btn-sm">
								<span class="icon icon-search fas fa-search fa-fw "></span>
							</button>
						</form>
					</div>
					<div class="col-md-12 px-0">
						<div class="row">
							<div id="adminbar" class="btn-group">
								<div class="btn-group">
									<?php if (!$_smarty_tpl->tpl_vars['js']->value) {?>
									<ul class="cssmenu_horiz">
										<li><?php }?>
											<a class="btn btn-link" data-toggle="dropdown" data-hover="dropdown" href="#">
												<?php echo smarty_function_icon(array('name'=>"history"),$_smarty_tpl);?>
 Recent Actions </a>
											<div class="dropdown-menu" role="menu">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recent_prefs']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
													<a class="dropdown-item" href="tiki-admin.php?lm_criteria=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p']->value ));?>
&amp;exact"><?php echo smarty_modifier_stringfix($_smarty_tpl->tpl_vars['p']->value);?>
</a>
													<?php
}
if ($_smarty_tpl->tpl_vars['p']->do_else) {
?>
													<div class="dropdown-item">None</div>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</div>
											<?php if (!$_smarty_tpl->tpl_vars['js']->value) {?></li>
									</ul><?php }?>
								</div>
								<div class="btn-group">
									<?php if (!$_smarty_tpl->tpl_vars['js']->value) {?>
									<ul class="cssmenu_horiz">
										<li><?php }?>
											<a class="btn btn-link" data-toggle="dropdown" data-hover="dropdown" href="#">
												<?php echo smarty_function_icon(array('name'=>'menu-extra'),$_smarty_tpl);?>
 Quick Links </a>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="tiki-wizard_admin.php?stepNr=0&amp;url=index.php">
													<?php echo smarty_function_icon(array('name'=>"wizard"),$_smarty_tpl);?>
 Wizards
												</a> <a class="dropdown-item" href="tiki-admin.php">
													<?php echo smarty_function_icon(array('name'=>"cog"),$_smarty_tpl);?>
 Control panels
												</a> <a class="dropdown-item" href="tiki-admin.php?page=look">
													<?php echo smarty_function_icon(array('name'=>"image"),$_smarty_tpl);?>
 Themes
												</a> <a class="dropdown-item" href="tiki-adminusers.php">
													<?php echo smarty_function_icon(array('name'=>"user"),$_smarty_tpl);?>
 Users
												</a> <a class="dropdown-item" href="tiki-admingroups.php">
													<?php echo smarty_function_icon(array('name'=>"group"),$_smarty_tpl);?>
 Groups
												</a>
										<li class="dropdown-item">
											<?php echo smarty_function_permission_link(array('mode'=>'text'),$_smarty_tpl);?>

										</li>
										<a class="dropdown-item" href="tiki-admin_menus.php">
											<?php echo smarty_function_icon(array('name'=>"menu"),$_smarty_tpl);?>
 Menus
										</a>
										<?php if ($_smarty_tpl->tpl_vars['prefs']->value['lang_use_db'] == "y") {?>
											<?php if ((isset($_SESSION['interactive_translation_mode'])) && $_SESSION['interactive_translation_mode'] == "on") {?>
												<a class="dropdown-item" href="tiki-interactive_trans.php?interactive_translation_mode=off">
													<?php echo smarty_function_icon(array('name'=>"translate"),$_smarty_tpl);?>
 Turn off interactive translation
												</a>
											<?php } else { ?>
												<a class="dropdown-item" href="tiki-interactive_trans.php?interactive_translation_mode=on">
													<?php echo smarty_function_icon(array('name'=>"translate"),$_smarty_tpl);?>
 Turn on interactive translation
												</a>
											<?php }?>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_comments_moderation'] == "y") {?>
											<a class="dropdown-item" href="tiki-list_comments.php">
												<?php echo smarty_function_icon(array('name'=>"comments"),$_smarty_tpl);?>
 Comment moderation
											</a>
										<?php }?>
										<a class="dropdown-item" href="tiki-admin_system.php?do=all">
											<?php echo smarty_function_icon(array('name'=>"trash"),$_smarty_tpl);?>
 Clear all caches
										</a>
										<a class="dropdown-item" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'search','action'=>'rebuild'),$_smarty_tpl);?>
">
											<?php echo smarty_function_icon(array('name'=>"index"),$_smarty_tpl);?>
 Rebuild search index
										</a> <a class="dropdown-item" href="tiki-plugins.php">
											<?php echo smarty_function_icon(array('name'=>"plugin"),$_smarty_tpl);?>
 Plugin approval
										</a> <a class="dropdown-item" href="tiki-syslog.php">
											<?php echo smarty_function_icon(array('name'=>"log"),$_smarty_tpl);?>
 Logs
										</a> <a class="dropdown-item" href="tiki-admin_modules.php">
											<?php echo smarty_function_icon(array('name'=>"module"),$_smarty_tpl);?>
 Modules
										</a>
										<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_scheduler'] == "y") {?>
											<a class="dropdown-item" href="tiki-admin_schedulers.php">
												<?php echo smarty_function_icon(array('name'=>"calendar"),$_smarty_tpl);?>
 Scheduler
											</a>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl_routes'] == "y") {?>
											<a class="dropdown-item" href="tiki-admin_routes.php">
												<?php echo smarty_function_icon(array('name'=>"random"),$_smarty_tpl);?>
 Custom Routes
											</a>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console'] == 'y') {?>
											<a class="dropdown-item" href="<?php echo smarty_function_query(array('_type'=>'relative','show_smarty_debug'=>1),$_smarty_tpl);?>
">
												<?php echo smarty_function_icon(array('name'=>"bug"),$_smarty_tpl);?>
 Smarty debug window
											</a>
										<?php }?>
								</div>
								<?php if (!$_smarty_tpl->tpl_vars['js']->value) {?></li></ul><?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 mb-2 mb-md-0 pr-md-0">
				<div class="swiper-container js-admin-bar-slider admin-bar-slider">
					<div class="swiper-wrapper">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['main_admin_icons']->value, 'info', false, 'page');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>

							<?php if ($_smarty_tpl->tpl_vars['info']->value['disabled']) {?>
								<?php $_smarty_tpl->_assignInScope('class', "admbox advanced btn btn-primary disabled");?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('class', "admbox basic btn btn-primary");?>
								<div class="swiper-slide">
									
									<a href="<?php if ($_smarty_tpl->tpl_vars['info']->value['url']) {
echo $_smarty_tpl->tpl_vars['info']->value['url'];
} else { ?>tiki-admin.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;
}?>" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
" class="d-flex flex-column justify-content-center align-items-center btn-primary  <?php if ($_smarty_tpl->tpl_vars['info']->value['disabled']) {?>disabled-clickable<?php }?>" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['title'] ));
if ($_smarty_tpl->tpl_vars['info']->value['disabled']) {?> (Disabled)<?php }?>|<?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
">
										<?php echo smarty_function_icon(array('name'=>"admin_".((string)$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl);?>

										<span class="title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['title'] ));?>
</span> </a>
								</div>
							<?php }?>


						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
				<!-- Add Arrows -->
				<div class="swiper-button-next">

				</div>

				<div class="swiper-button-prev">

				</div>
			</div>
		</div>
	</div>
	<div class="card-header right"></div>
	</div>



	<link rel="stylesheet" href="vendor_bundled/vendor/nolimits4web/swiper/dist/css/swiper.css" type="text/css">
	<?php echo '<script'; ?>
 type="text/javascript" src="vendor_bundled/vendor/nolimits4web/swiper/dist/js/swiper.min.js"><?php echo '</script'; ?>
>
	<style type="text/css">
		@media screen and (prefers-reduced-motion: reduce) {
			body {
				transition: none;
			}
		}

		body.tiki.open {
			padding-top: 0px !important;
		}

		body {
			
			transition: transform ease-in 0.15s;
		}

		body.tiki.open {
			-webkit-transform: translate(0, 7rem);
			-moz-transform: translate(0, 7rem);
			-ms-transform: translate(0, 7rem);
			-o-transform: translate(0, 7rem);
			transform: translate(0, 7rem);
			transition: transform ease-out 0.15s;
		}

		@media (max-width: 767px) {
			body.tiki.open {
				-webkit-transform: translate(0, 14rem);
				-moz-transform: translate(0, 14rem);
				-ms-transform: translate(0, 14rem);
				-o-transform: translate(0, 14rem);
				transform: translate(0, 14rem);
				transition: transform ease-out 0.15s;
			}
		}

		.sliding-panel-admin-bar {
			-webkit-transform: translate(0, -7rem);
			-moz-transform: translate(0, -7rem);
			-ms-transform: translate(0, -7rem);
			-o-transform: translate(0, -7rem);
			transform: translate(0, -7rem);
			left: 0;
			right: 0;
			position: fixed;
			top: 0;
			left: 0;
			margin: 0 auto;
			right: 0;
			height: 7rem;
		}

		@media (max-width: 767px) {
			.sliding-panel-admin-bar {
				-webkit-transform: translate(0, -14rem);
				-moz-transform: translate(0, -14rem);
				-ms-transform: translate(0, -14rem);
				-o-transform: translate(0, -14rem);
				transform: translate(0, -14rem);
			}
		}

		body {
			overflow-x: hidden;
		}

		.page-header {
			transition: padding ease-in-out 0.3s;
		}

		.page-header.has-admin-bar-sliding-panel {
			/*padding-top: 7rem;*/
			position: relative;
			z-index: 3;
		}

		.box-logo {
			order: 0;
		}

		.link-admin-bar {
			margin-left: auto;
			order: 0;
		}

		.link-admin-bar .icon-admin-bar {
			padding: 0.8rem 0.5rem 0.5rem;
			cursor: pointer;
			transition: all ease-in-out 0.3s;
			border-radius: 0 0 3px 3px;
		}

		.link-admin-bar .icon-admin-bar.card-header:first-child {
			border-radius: 0 0 3px 3px;
		}

		.top_modules .module:nth-child(2) {
			margin-left: 0;
			order: 2;
		}

		@media (max-width: 767px) {
			.sliding-panel-admin-bar {
				height: 14rem;
			}
		}

		.sliding-panel-admin-bar .card-header.left {
			display: block;
			position: absolute;
			left: -999em;
			top: 0;
			bottom: 0;
			right: 100%;
			border-bottom: 0;
			padding: 0;
		}

		.sliding-panel-admin-bar .card-header.left:first-child {
			border-radius: 0;
		}

		@media (max-width: 767px) {
			.sliding-panel-admin-bar .card-header.left {
				display: none;
			}
		}

		.sliding-panel-admin-bar .card-header.right {
			display: block;
			position: absolute;
			left: 100%;
			top: 0;
			bottom: 0;
			right: -999em;
			border-bottom: 0;
			padding: 0;
		}

		.sliding-panel-admin-bar .card-header.right:first-child {
			border-radius: 0;
		}

		@media (max-width: 767px) {
			.sliding-panel-admin-bar .card-header.right {
				display: none;
			}
		}

		.sliding-panel-admin-bar.card-header {
			padding: 0;
			border-bottom: 0;
		}

		.sliding-panel-admin-bar .container-sliding-panel {
			position: relative;
			z-index: 1;
			max-width: 1140px;
		}
		//adding safe colors for nav bar dark
		  .navbar-dark #adminbar a {
			color:#222 !important;
		}

		.navbar-dark .sliding-panel-admin-bar .container-sliding-panel .btn-primary:hover{
			background-color:#333;
			border-color:#000;
		}
		.sliding-panel-admin-bar .box-adminbar {
			position: relative;
			z-index: 1;
		}

		.sliding-panel-admin-bar .col-search {
			position: relative;
			z-index: 1;
		}

		@media (min-width: 768px) {
			.sliding-panel-admin-bar .btn-group > .dropdown-menu,
			.sliding-panel-admin-bar .btn-group > .dropdown-menu.show,
			.sliding-panel-admin-bar .btn-group.show > .dropdown-menu,
			.sliding-panel-admin-bar .btn-group.show > .dropdown-menu.show {
				display: none;
				margin-top: 0;
			}
		}

		@media (min-width: 768px) {
			.sliding-panel-admin-bar .btn-group:hover > .dropdown-menu,
			.sliding-panel-admin-bar .btn-group:hover > .dropdown-menu.show,
			.sliding-panel-admin-bar .btn-group.show:hover > .dropdown-menu,
			.sliding-panel-admin-bar .btn-group.show:hover > .dropdown-menu.show {
				display: block;
			}
		}

		@media (max-width: 767px) {
			.sliding-panel-admin-bar .col-left-sliding-panel {
				position: relative;
				z-index: 11;
			}
		}

		.swiper-container.admin-bar-slider {
			width: 90%;
		}

		@media (max-width: 767px) {
			.swiper-container.admin-bar-slider {
				width: 80%;
			}
		}

		.swiper-container.admin-bar-slider a {
			display: inline-block;
			padding: 0.2rem 0.5rem;
			border-radius: 3px;
			text-align: center;
			min-height: 5.5rem;
			line-height: 1.2;
		}

		.swiper-container.admin-bar-slider a:hover {
			text-decoration: none;
		}

		.swiper-button-prev, .swiper-container-rtl .swiper-button-next {
			background-image: url(img/arrow-inverse-left.svg) !important;
		}

		.swiper-button-next, .swiper-container-rtl .swiper-button-prev {
			background-image: url(img/arrow-inverse-right.svg) !important;
		}

		@media (min-width: 768px) {
			.swiper-button-next, .swiper-container-rtl .swiper-button-prev {
				right: 0 !important;
			}
		}

		#swiper-container1 {
			z-index: 4;
		}
	</style>

<?php }
$_block_repeat=false;
echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"adminbar",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
