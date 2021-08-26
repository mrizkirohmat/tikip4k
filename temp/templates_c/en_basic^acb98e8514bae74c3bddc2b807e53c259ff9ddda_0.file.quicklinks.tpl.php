<?php
/* Smarty version 3.1.38, created on 2021-08-25 16:55:14
  from 'C:\xampp\htdocs\tikip4k\templates\menu\quicklinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_612659d2dd09a8_91509790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acb98e8514bae74c3bddc2b807e53c259ff9ddda' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tikip4k\\templates\\menu\\quicklinks.tpl',
      1 => 1613486022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612659d2dd09a8_91509790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\tikip4k\\lib\\smarty_tiki\\modifier.sefurl.php','function'=>'smarty_modifier_sefurl',),));
?>
<div style="text-align:right;position:relative;">
	<div id="weburlslink">
		<a href="#" onclick="flip('weburls');return false;">Show Quick URLs</a>
	</div>
	<div id="weburls" style="display:none;position:absolute;right:-10px;top:-50px;z-index:1;"
			class="card">
		<div class="card-header">
			<h3 class="card-title" id="urltop">Some useful URLs</h3>
			<div style="text-align: right;">
				<a href="#" class="hide_weburls" style="font-size: 85%" onclick="flip('weburls');return false;">Hide Quick URLs</a>
			</div>
		</div>
		<div class="card-body" style="text-align:left;">
			<div class="form-horizontal">
				<div class="form-group row">
					<label class="col-form-label col-sm-5" for="wikilinks1">Home:</label>

					<div class="col-sm-7">
						<select class="form-control" name="wikilinks" id="wikilinks1"
								onchange="setMenuCon(options[selectedIndex].value);return true;">
							<option value=",,,">Choose ...</option>
							<option value="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['tikiIndex'];?>
,Home Page">Home Page</option>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['home_blog']) {?>
								<option
								value="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['prefs']->value['home_blog'],'blog');?>
,Home Blog,feature_blogs,tiki_p_view_blogs">Home Blog</option><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['home_gallery']) {?>
								<option
								value="tiki-browse_gallery.php?galleryId=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['home_gallery'];?>
,Home Image Gal,feature_galleries,tiki_p_view_image_gallery">Home Image Gallery</option><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['home_file_gallery']) {?>
							<option
							value="tiki-list_file_gallery?galleryId=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['home_file_gallery'];?>
,Home File Gal,feature_file_galleries,tiki_p_view_file_gallery">Home File Gallery</option><?php }?>
							]
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-form-label col-sm-5" for="wikilinks2">General: </label>

					<div class="col-sm-7">
						<select class="form-control" name="wikilinks" id="wikilinks2"
								onchange="setMenuCon(options[selectedIndex].value);return true;">
							<option value=",,,">Choose ...</option>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_stats'] == 'y') {?>
								<option
								value="tiki-stats.php,Stats,feature_stats,tiki_p_view_stats">Stats</option><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories'] == 'y') {?>
								<option
								value="tiki-browse_categories.php,Categories,feature_categories,tiki_p_view_category">Categories</option><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userPreferences'] == 'y') {?>
								<option
								value="tiki-user_preferences.php,User preferences">User prefs</option><?php }?>
						</select>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki'] == 'y') {?>
					<div class="form-group row">
						<label class="col-form-label col-sm-5" for="wikilinks3">Wiki: </label>

						<div class="col-sm-7">
							<select class="form-control" name="wikilinks" id="wikilinks3"
									onchange="setMenuCon(options[selectedIndex].value);return true;">
								<option value=",,,">Choose ...</option>
								<option value="tiki-index.php,Wiki Home,feature_wiki,tiki_p_view">Wiki Home</option>
								<option value="tiki-lastchanges.php,Latest Changes,feature_lastChanges,tiki_p_view">Latest Changes</option>
								<option value="tiki-wiki_rankings.php,Rankings,feature_wiki_rankings,tiki_p_view">Rankings</option>
								<option value="tiki-listpages.php,List pages,feature_listPages,tiki_p_view">List pages</option>
								<option value="tiki-index.php?page=SandBox,Sandbox,feature_sandbox,tiki_p_view">Sandbox</option>
							</select>
						</div>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_galleries'] == 'y') {?>
					<div class="form-group row">
						<label class="col-form-label col-sm-5" for="wikilinks4">Images: </label>

						<div class="col-sm-7">
							<select name="wikilinks" id="wikilinks4" class="form-control"
									onchange="setMenuCon(options[selectedIndex].value);return true;">
								<option value=",,,">Choose ...</option>
								<option value="tiki-galleries.php,List galleries,feature_galleries,tiki_p_view_image_gallery">List image galleries</option>
								<option value="tiki-upload_image.php,Upload image,feature_galleries,tiki_p_upload_images">Upload</option>
								<option value="tiki-galleries_rankings.php,Gallery Rankings,feature_gal_rankings,tiki_p_view_image_gallery">Rankings</option>
								<option value="tiki-browse_gallery.php?galleryId=,Browse a gallery,feature_galleries,tiki_p_view_image_gallery">Browse a gallery</option>
							</select>
						</div>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles'] == 'y') {?>
					<div class="form-group row">
						<label class="col-form-label col-sm-5" for="wikilinks5">Articles: </label>

						<div class="col-sm-7">
							<select name="wikilinks" id="wikilinks5" class="form-control"
									onchange="setMenuCon(options[selectedIndex].value);return true;">
								<option value=",,,">Choose ...</option>
								<option value="tiki-view_articles.php,Articles,feature_articles,tiki_p_read_article">Articles home</option>
								<option value="tiki-list_articles.php,All articles,feature_articles,tiki_p_read_article">List articles</option>
								<option value="tiki-cms_rankings.php,Rankings,feature_cms_rankings,tiki_p_read_article">Rankings</option>
								<option value="tiki-edit_submission.php,Submit,feature_submissions,tiki_p_submit_article">Submit</option>
								<option value="tiki-list_submissions.php,Submissions,feature_submissions,tiki_p_approve_submission">Submissions</option>
							</select>
						</div>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs'] == 'y') {?>
					<div class="form-group row">
						<label class="col-form-label col-sm-5" for="wikilinks6">Blogs:</label>

						<div class="col-sm-7">
							<select name="wikilinks" id="wikilinks6" class="form-control"
									onchange="setMenuCon(options[selectedIndex].value);return true;">
								<option value=",,,">Choose ...</option>
								<option value="tiki-list_blogs.php,List Blogs,feature_blogs,tiki_p_read_blog">List Blogs</option>
								<option value="tiki-blog_rankings.php,Rankings,feature_blog_rankings,tiki_p_read_blog">Rankings</option>
								<option value="tiki-edit_blog.php,Create Blog,feature_blogs,tiki_p_create_blogs">Create Blog</option>
								<option value="tiki-blog_post.php,Post,feature_blogs,tiki_p_blog_post">Post</option>
							</select>
						</div>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries'] == 'y') {?>
					<div class="form-group row">
						<label class="col-form-label col-sm-5" for="wikilinks7">Files: </label>

						<div class="col-sm-7">
							<select id="wikilinks7" class="form-control" name="wikilinks"
									onchange="setMenuCon(options[selectedIndex].value);return true;">
								<option value=",,,">Choose ...</option>
								<option value="tiki-list_file_gallery.php,File Galleries,feature_file_galleries,tiki_p_view_file_gallery">File Galleries</option>
								<option value="tiki-upload_file.php,Upload file,feature_file_galleries,tiki_p_upload_files">Upload file</option>
								<option value="tiki-file_galleries_rankings.php,Rankings,feature_file_galleries_rankings,tiki_p_view_file_gallery">Rankings</option>
							</select>
						</div>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums'] == 'y') {?>
					<div class="form-group row">
						<label class="col-form-label col-sm-5" for="wikilinks8">Forums: </label>

						<div class="col-sm-7">
							<select name="wikilinks" id="wikilinks8" class="form-control"
									onchange="setMenuCon(options[selectedIndex].value);return true;">
								<option value=",,,">Choose ...</option>
								<option value="tiki-forums.php,Forums,feature_forums,tiki_p_forum_read">Forums</option>
								<option value="tiki-view_forum.php?forumId=,View a forum,feature_forums,tiki_p_forum_read">View a forum</option>
								<option value="tiki-view_forum_thread.php?forumId=&amp;comments_parentId=,View a thread,feature_forums,tiki_p_forum_read">View a thread</option>
								8
							</select>
						</div>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_faqs'] == 'y') {?>
					<div class="form-group row">
						<label class="col-form-label col-sm-5" for="wikilinks9">FAQs: </label>

						<div class="col-sm-7">
							<select name="wikilinks" id="wikilinks9" class="form-control"
									onchange="setMenuCon(options[selectedIndex].value);return true;">
								<option value=",,,">Choose ...</option>
								<option value="tiki-list_faqs.php,FAQs,feature_faqs,tiki_p_view_faqs">FAQs</option>
								<option value="tiki-view_faq.php?faqId=,View a FAQ,feature_faqs,tiki_p_view_faqs">View a FAQ</option>
							</select>
						</div>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_quizzes'] == 'y') {?>
					<div class="form-group row">
						<label class="col-form-label col-sm-5" for="wikilinks10">Quizzes: </label>

						<div class="col-sm-7">
							<select name="wikilinks" id="wikilinks10" class="form-control"
									onchange="setMenuCon(options[selectedIndex].value);return true;">
								<option value=",,,">Choose ...</option>
								<option value="tiki-list_quizzes.php,Quizzes,feature_quizzes">Quizzes</option>
								<option value="tiki-take_quiz.php?quizId=,Take a quiz,feature_quizzes">Take a quiz</option>
								<option value="tiki-quiz_stats.php,Quiz stats,feature_quizzes,tiki_p_view_quiz_stats">Quiz stats</option>
								<option value="tiki-quiz_stats_quiz.php?quizId=,Stats for a Quiz,feature_quizzes,tiki_p_view_quiz_stats">Stats for a Quiz</option>
							</select>
						</div>
					</div>
				<?php }?>

			</div>
		</div>
	</div>
</div>
<?php }
}
