<?php
// (c) Copyright by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id$

use Symfony\Component\Yaml\Yaml;

//this script may only be included - so its better to die if called directly.
if (strpos($_SERVER['SCRIPT_NAME'], basename(__FILE__)) !== false) {
	header('location: index.php');
	exit;
}
$list = new Tiki_Profile_List;
$sources = $list->getSources();

$parserlib = TikiLib::lib('parser');

$show_details_for = "";
$show = false;
if (isset($_REQUEST['show_details_for'])) {
	$show_details_for = $_REQUEST['show_details_for'];
}
$smarty->assign('show_details_for', $show_details_for);
$smarty->assign('show', $show);
if ($prefs['profile_unapproved'] == 'y') {
	Tiki_Profile::enableDeveloperMode();
}

//*** begin state-changing actions
if (isset($_POST['forget'], $_POST['pp'], $_POST['pd']) && $access->checkCsrf()) {
	$profile = Tiki_Profile::fromNames($_POST['pd'], $_POST['pp']);
	$profile->removeSymbols();
	$data = [];

	foreach ($_POST as $key => $value) {
		if ($key != 'url' && $key != 'forget') {
			$data[$key] = $value;
		}
	}
	set_time_limit(0);

	$transaction = $tikilib->begin();
	$installer = new Tiki_Profile_Installer;
	$installer->setUserData($data);
	$installer->install($profile);
	$transaction->commit();

	$profilefeedback = $installer->getFeedback();

	if ($target = $profile->getInstructionPage()) {
		foreach ($profilefeedback as $feedback) {
			if (strpos($feedback, tra('An error occurred: ')) === 0) {
				Feedback::error($feedback);
			}
		}

		$wikilib = TikiLib::lib('wiki');
		$target = $wikilib->sefurl($target);
		header('Location: ' . $target);
		exit;
	} else {
		if (count($profilefeedback) > 0) {
			$smarty->assign_by_ref('profilefeedback', $profilefeedback);
		}
		// need to reload sources as cache is cleared after install
		$sources = $list->getSources();
	}
}

if (isset($_POST['install'], $_POST['pd'], $_POST['pp'])) {
	$data = [];

	foreach ($_POST as $key => $value) {
		if ($key != 'url' && $key != 'install') {
			$data[str_replace('_', ' ', $key) ] = $value;
		}
	}

	$installer = new Tiki_Profile_Installer;
	$installer->setUserData($data);
	$profile = Tiki_Profile::fromNames($_POST['pd'], $_POST['pp']);
	$dryRun = isset($_POST['dryrun']) ? true : false;
	if ($dryRun || $access->checkCsrf()) {
		$installer->install($profile, 'all', $dryRun);
	}

	if ($dryRun && isset($_POST['ajax'])) {
		$smarty->assign('track_profile_changes', $installer->getTrackProfileChanges());
		$smarty->display("admin/include_profiles_preview.tpl");
		exit;
	}

	if (! $dryRun && ! empty($installer->getTrackProfileChanges())) {
		$logChanges = $installer->getTrackProfileChanges();
		$logChanges['domain'] = $_POST['pd'];
		$logslib = TikiLib::lib('logs');
		$logslib->add_action('profile apply', $_POST['pp'], 'system', tra('profile applied'), '', '', '', '', '', '', $logChanges);
	}

	if (($profile != null) && ($target = $profile->getInstructionPage())) {
		$wikilib = TikiLib::lib('wiki');
		$target = $wikilib->sefurl($target);
		$profilefeedback = $installer->getFeedback();
		if (count($profilefeedback) > 0) {
			Feedback::note(['mes' => $profilefeedback, 'title' => tra('The following list of changes has been applied:')]);
		}header('Location: ' . $target);
		exit;
	} else {
		$profilefeedback = $installer->getFeedback();
		if (count($profilefeedback) > 0) {
			$smarty->assign_by_ref('profilefeedback', $profilefeedback);
		}
		// need to reload sources as cache is cleared after install
		$sources = $list->getSources();
	}
}

if (isset($_POST['test'], $_POST['profile_tester'], $_POST['profile_tester_name']) && $access->checkCsrf()) {
	$test_source = $_POST['profile_tester'];
	if (strpos($test_source, '{CODE}') === false) {
		// wrap in CODE tags if none there
		$test_source = "{CODE(caption=>YAML)}\n$test_source\n{CODE}";
	}
	// desanitize the input, prefs etc will filter as required in the profile installer
	$test_source = str_replace('<x>', '', $test_source);

	$smarty->assign('test_source', $test_source);
	$smarty->assign('profile_tester_name', $_POST['profile_tester_name']);
	$profile = Tiki_Profile::fromString($test_source, $_POST['profile_tester_name']);
	$profile->removeSymbols();
	$installer = new Tiki_Profile_Installer;
	$empty_cache = $_REQUEST['empty_cache'];
	$smarty->assign('empty_cache', $empty_cache);

	$installer->install($profile, $empty_cache);

	if ($target = $profile->getInstructionPage()) {
		$wikilib = TikiLib::lib('wiki');
		$target = $wikilib->sefurl($target);
		header('Location: ' . $target);
		exit;
	} else {
		$profilefeedback = $installer->getFeedback();
		if (count($profilefeedback) > 0) {
			$smarty->assign_by_ref('profilefeedback', $profilefeedback);
		}
	}
}
// TODO Don't see where this is used
if (! empty($_POST['pp']) && ! empty($_POST["revertInfo"]) && $access->checkCsrf()) {
	$installer = new Tiki_Profile_Installer;
	$domain = ! empty($_POST["revertInfo"]['domain']) ? $_POST["revertInfo"]['domain'] : '';
	if (! empty($domain)) {
		$transaction = $tikilib->begin();
		$profile = Tiki_Profile::fromNames($domain, $_POST['pp']);
		$installer->setFeedback(tra('Profile forgotten') . ': ' . $_POST['pp']);
		$installer->revert($profile, $_POST["revertInfo"]);
		$installer->forget($profile);
		$revertedActions = $installer->getFeedback();
		$transaction->commit();
	}
}
//*** end state-changing actions

if (isset($_GET['refresh'])) {
	$toRefresh = (int) $_GET['refresh'];
	if (isset($sources[$toRefresh])) {
		echo json_encode(
			[
				'status' => $list->refreshCache($sources[$toRefresh]['url']) ? 'open' : 'closed',
				'lastupdate' => date('Y-m-d H:i:s') ,
			]
		);
	} else {
		echo '{}';
	}
	exit;
}

if (isset($_GET['getinfo'], $_GET['pd'], $_GET['pp'])) {
	$installer = new Tiki_Profile_Installer;
	$profile = Tiki_Profile::fromNames($_GET['pd'], $_GET['pp']);
	$error = '';

	// Check if profile is available.
	// This will not be the case for a misconfigured profile server
	if (empty($profile)) {
		$error = "Profile is not available: " . $_GET['pd'] . ", " . $_GET['pp'];
	} else {
		$profileData = $profile->getData();
		if (! empty($profileData['error'])) {
			$error = $profileData['error'];
		}
	}

	try {
		if (! empty($error)) {
			$sequencable = false;
		} elseif (! $deps = $installer->getInstallOrder($profile)) {
			$deps = $profile->getRequiredProfiles(true);
			$deps[] = $profile;
			$sequencable = false;
		} else {
			$sequencable = true;
		}
	} catch (Exception $e) {
		$error = $e->getMessage();
		$sequencable = false;
	}

	$dependencies = [];
	$userInput = [];
	$installed = false;
	$url = '';
	$feedback = '';

	if ($profile !== false && empty($error)) {
		foreach ($deps as $d) {
			$dependencies[] = $d->pageUrl;
			$userInput = array_merge($userInput, $d->getRequiredInput());
		}
		$parsed = $parserlib->parse_data($profile->pageContent);
		$installed = $installer->isInstalled($profile);
		$url = $profile->url;
		$feedback = $profile->getFeedback();
	}
	echo json_encode(
		[
			'dependencies' => $dependencies,
			'userInput' => $userInput,
			'installable' => $sequencable,
			'error' => $error,
			'content' => $parsed,
			'already' => $installed,
			'url' => $url,
			'feedback' => $feedback,
		]
	);
	exit;
}

if (isset($_GET['list'])) {
	$params = array_merge(
		[
			'repository' => '',
			'categories' => '',
			'profile' => ''
		],
		$_GET
	);

	$smarty->assign('categories', $params['categories']);
	$smarty->assign('profile', $params['profile']);
	$smarty->assign('repository', $params['repository']);

	if (isset($_GET['preloadlist']) && $params['repository']) {
		$list->refreshCache($params['repository']);
	}

	$profiles = $list->getList($params['repository'], $params['categories'], $params['profile']);

	foreach ($profiles as &$profile) {
		$profile['categoriesString'] = '';
		foreach ($profile['categories'] as $category) {
			$profile['categoriesString'] .= (empty($profile['categoriesString']) ? '' : ', ') . $category;
		}
	}
	$smarty->assign('result', $profiles);
	$category_list = $list->getCategoryList($params['repository']);
	$smarty->assign('category_list', $category_list);
}
$threshhold = time() - 1800;
$oldSources = [];

foreach ($sources as $key => $source) {
	if ($source['lastupdate'] < $threshhold) {
		$oldSources[] = $key;
	}
}

$smarty->assign('sources', $sources);
$smarty->assign('oldSources', $oldSources);

$openSources = 0;
foreach ($sources as $key => $source) {
	if ($source['status'] == 'open') {
		$openSources++;
	}
}

if ($openSources == count($sources)) {
	$smarty->assign('openSources', 'all');
} elseif (($openSources > 0) &&($openSources < count($sources))) {
	$smarty->assign('openSources', 'some');
} else {
	$smarty->assign('openSources', 'none');
}
$smarty->assign('tikiMajorVersion', substr($TWV->version, 0, 2));

$modlib = TikiLib::lib('mod');
$modified = $prefslib->getModifiedPrefsForExport(! empty($_REQUEST['export_show_added']) ? true : false);
$smarty->assign('modified_list', $modified);

$assigned_modules_for_export = $modlib->getModulesForExport();
$smarty->assign('modules_for_export', $assigned_modules_for_export);

if (! isset($_REQUEST['export_type'])) {
	$_REQUEST['export_type'] = 'prefs';
}
$smarty->assign('export_type', $_REQUEST['export_type']);

if (isset($_REQUEST['export'])) {
	if ($_REQUEST['export_type'] === 'prefs') {
		$export_yaml = Yaml::dump(
			[ 'preferences' => $_REQUEST['prefs_to_export'] ],
			20,
			1,
			Yaml::DUMP_MULTI_LINE_LITERAL_BLOCK
		);
	} elseif ($_REQUEST['export_type'] === 'modules') {
		$modules_to_export = [];
		foreach ($_REQUEST['modules_to_export'] as $k => $v) {
			$modules_to_export[] = $assigned_modules_for_export[$k];
		}
		$export_yaml = Yaml::dump(
			[ 'objects' => $modules_to_export],
			20,
			1,
			Yaml::DUMP_MULTI_LINE_LITERAL_BLOCK
		);
	} else {
		$export_yaml = '';		// something went wrong?
	}

	$export_yaml = preg_replace('/^---\n/', '', $export_yaml);
	$export_yaml = "{CODE(caption=>YAML,wrap=>0)}\n" . $export_yaml . "{CODE}\n";

	include_once 'lib/wiki-plugins/wikiplugin_code.php';
	$export_yaml = wikiplugin_code($export_yaml, ['caption' => 'Wiki markup', 'colors' => 'tiki' ], null, []);
	$export_yaml = preg_replace('/~[\/]?np~/', '', $export_yaml);

	$smarty->assign('export_yaml', $export_yaml);
	$smarty->assign('prefs_to_export', $_REQUEST['prefs_to_export']);
	$smarty->assign('modules_to_export', $_REQUEST['modules_to_export']);
}
