<?php
/**
 * This redirects to the site's root to prevent directory browsing.
 *  
 * @ignore 
 * @package TikiWiki
 * @subpackage doc
 * @copyright (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
 * @licence Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
 */
// $Id: index.php 44694 2013-01-30 20:55:37Z marclaporte $

header("location: ../tiki-index.php");
die;
