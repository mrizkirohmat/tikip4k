<?php
// (c) Copyright by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id$

class TikiFilter_RawUnsafe implements Zend\Filter\FilterInterface
{
	function filter($value)
	{
		return str_replace('<x>', '', $value);
	}
}
