<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: WikiText.php 46211 2013-06-06 17:18:59Z lphuberdeau $

class Search_Type_WikiText implements Search_Type_Interface
{
	private $value;

	function __construct($value)
	{
		$this->value = $value;
	}

	function getValue()
	{
		global $tikilib, $prefs;
		$out = $tikilib->parse_data(
			$this->value, array(
				'parsetoc' => false,
				'indexing' => true,
				'exclude_plugins' => $prefs['unified_excluded_plugins'],
			)
		);

		return strip_tags($out);
	}

	function filter(array $filters)
	{
		$value = $this->value;

		foreach ($filters as $f) {
			$value = $f->filter($value);
		}

		return new self($value);
	}
}

