<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: RatingSum.php 44849 2013-02-08 18:41:20Z lphuberdeau $

class Tiki_Formula_Function_RatingSum extends Tiki_Formula_Function_RatingAverage
{
	function __construct()
	{
		$this->mode = 'sum';
	}
}

