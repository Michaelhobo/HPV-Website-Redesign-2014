<?php
// (c) Copyright 2002-2013 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Lucene.php 44444 2013-01-05 21:24:24Z changi67 $

class Search_Type_Factory_Lucene implements Search_Type_Factory_Interface
{
	function plaintext($value)
	{
		return new Search_Type_PlainText($value);
	}

	function wikitext($value)
	{
		return new Search_Type_WikiText($value);
	}

	function timestamp($value)
	{
		if (is_numeric($value)) {
			return new Search_Type_Timestamp(gmdate('YmdHis', $value));
		} else {
			return new Search_Type_PlainText('');
		}

	}

	function identifier($value)
	{
		return new Search_Type_Whole($value);
	}

	function multivalue($values)
	{
		return new Search_Type_MultivalueText((array) $values);
	}

	function sortable($value)
	{
		return new Search_Type_ShortText($value);
	}
}

