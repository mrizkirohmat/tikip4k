<?php
// (c) Copyright by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id$

namespace Tiki\ObjectSelector;

class SelectorItem implements \ArrayAccess
{
	private $selector;
	private $type;
	private $object;
	private $format;

	function __construct($selector, $type, $object, $format = null)
	{
		$this->selector = $selector;
		$this->type = $type;
		$this->object = $object;
		$this->format = $format;
	}

	function getTitle()
	{
		return $this->selector->getTitle($this->type, $this->object, $this->format);
	}

	function offsetExists($offset)
	{
		return in_array($offset, ['type', 'id', 'title']);
	}

	function offsetGet($offset)
	{
		switch ($offset) {
			case 'type':
				return $this->type;
			case 'id':
				return $this->object;
			case 'title':
				return $this->getTitle();
		}
	}

	function offsetSet($offset, $value)
	{
	}

	function offsetUnset($offset)
	{
	}

	function __toString()
	{
		return "{$this->type}:{$this->object}";
	}
}
