<?php
// (c) Copyright by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id$

//this script may only be included - so its better to die if called directly.
if (strpos($_SERVER["SCRIPT_NAME"], basename(__FILE__)) !== false) {
	header("location: index.php");
	exit;
}

function smarty_function_redirect($params, $smarty)
{
	global $user;

	extract($params, EXTR_SKIP);
	// Param = url
	if (empty($url)) {
		trigger_error("assign: missing parameter: url");
		return;
	}
	if (empty($user) && empty($_SESSION['loginfrom'])) {
		// user in error.tpl when permission is denied for anonymous
		$_SESSION['loginfrom'] = $_SERVER['REQUEST_URI'];
	}
	header("Location: $url");
	exit;
}
