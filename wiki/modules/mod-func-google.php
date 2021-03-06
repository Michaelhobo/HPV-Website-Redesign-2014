<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: mod-func-google.php 44444 2013-01-05 21:24:24Z changi67 $

//this script may only be included - so its better to die if called directly.
if (strpos($_SERVER["SCRIPT_NAME"], basename(__FILE__)) !== false) {
  header("location: index.php");
  exit;
}

/**
 * @return array
 */
function module_google_info()
{
	return array(
		'name' => tra('Google Search'),
		'description' => tra('Displays a simple form to search on Google. By default, search results are limited to those on the Tiki site.'),
		'prefs' => array(),
		'params' => array()
	);
}
