<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Lib.php 44444 2013-01-05 21:24:24Z changi67 $

class Event_Lib
{
	private $library;
	private $method;

	private function __construct($library, $method)
	{
		$this->library = $library;
		$this->method = $method;
	}

	public static function defer($library, $method)
	{
		return new self($library, $method);
	}

	function __invoke($arguments, $priority)
	{
		TikiLib::lib($this->library)->{$this->method}($arguments, $priority);
	}
}

