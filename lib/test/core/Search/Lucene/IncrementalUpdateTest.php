<?php
// (c) Copyright by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id$

/**
 * @group unit
 */
abstract class Search_Lucene_IncrementalUpdateTest extends Search_Index_IncrementalUpdateTest
{
	private $dir;

	function setUp()
	{
		$this->dir = __DIR__ . '/test_index';
		$this->tearDown();

		$index = $this->getIndex();
		$this->populate($index);
	}

	function tearDown()
	{
		$this->getIndex()->destroy();
	}

	protected function getIndex()
	{
		return new Search_Lucene_Index($this->dir);
	}
}
