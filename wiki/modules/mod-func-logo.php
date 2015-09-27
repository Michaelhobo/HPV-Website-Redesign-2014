<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: mod-func-logo.php 44444 2013-01-05 21:24:24Z changi67 $

//this script may only be included - so its better to die if called directly.
if (strpos($_SERVER["SCRIPT_NAME"], basename(__FILE__)) !== false) {
  header("location: index.php");
  exit;
}

/**
 * @return array
 */
function module_logo_info()
{
	return array(
		'name' => tra('Logo'),
		'description' => tra('Site logo, title and subtitle.'),
		'prefs' => array('feature_sitelogo'),
	);
}

/**
 * @param $mod_reference
 * @param $module_params
 */
function module_logo($mod_reference, $module_params)
{
	
}
