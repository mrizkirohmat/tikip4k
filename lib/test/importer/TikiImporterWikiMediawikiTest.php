<?php
// (c) Copyright by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id$

require_once(__DIR__ . '/tikiimporter_testcase.php');
require_once(__DIR__ . '/../../importer/tikiimporter_wiki_mediawiki.php');
require_once(__DIR__ . '/../../tikilib.php');

/**
 * @group importer
 */
class TikiImporter_Wiki_Mediawiki_Test extends TikiImporter_TestCase
{

	protected function setUp()
	{
		$this->obj = new TikiImporter_Wiki_Mediawiki;
	}

	public function testImport()
	{
		ob_start();

		$parsedData = 'Some text';

		$obj = $this->getMockBuilder('TikiImporter_Wiki_Mediawiki')
			->setMethods(['validateInput', 'parseData', 'insertData', 'configureParser'])
			->getMock();
		$obj->expects($this->once())->method('validateInput');
		$obj->expects($this->once())->method('parseData')->will($this->returnValue($parsedData));
		$obj->expects($this->once())->method('insertData')->with($parsedData);
		$obj->expects($this->once())->method('configureParser');

		$obj->import(__DIR__ . '/fixtures/mediawiki_sample.xml');

		$this->assertTrue($obj->dom instanceof DOMDocument);
		$this->assertTrue($obj->dom->hasChildNodes());

		$output = ob_get_clean();
		$this->assertEquals("Loading and validating the XML file\n\nImportation completed!\n\n<b><a href=\"tiki-importer.php\">Click here</a> to finish the import process</b>", $output);
	}

	/**
	 * @group marked-as-skipped
	 */
	public function testImportWithoutInternalMocking()
	{
		$this->markTestSkipped('2016-09-26 Skipped as the underlying PEAR is out of date.');

		global $tikilib;
		$tikilib = $this->getMockBuilder('TikiLib')
			->setMethods(['create_page', 'update_page', 'page_exists', 'remove_all_versions'])
			->getMock();
		$obj = $this->getMockBuilder('TikiImporter_Wiki_Mediawiki')->setMethods(['saveAndDisplayLog'])->getMock();
		$obj->expects($this->exactly(12))->method('saveAndDisplayLog');

		$expectedImportFeedback = ['totalPages' => 4, 'importedPages' => 4];

				$obj->import(__DIR__ . '/fixtures/mediawiki_sample.xml');

		$this->assertTrue($obj->dom instanceof DOMDocument);
		$this->assertTrue($obj->dom->hasChildNodes());
		$this->assertEquals($expectedImportFeedback, $_SESSION['tiki_importer_feedback']);
	}

	public function testImportShouldHandleAttachments()
	{
		ob_start();

		$parsedData = 'Some text';

		$obj = $this->getMockBuilder('TikiImporter_Wiki_Mediawiki')
			->setMethods(['validateInput', 'parseData', 'insertData', 'checkRequirementsForAttachments', 'downloadAttachments', 'configureParser'])
			->getMock();
		$obj->expects($this->once())->method('validateInput');
		$obj->expects($this->once())->method('parseData')->will($this->returnValue($parsedData));
		$obj->expects($this->once())->method('insertData')->with($parsedData);
		$obj->expects($this->once())->method('checkRequirementsForAttachments');
		$obj->expects($this->once())->method('downloadAttachments');
		$obj->expects($this->once())->method('configureParser');
		$_POST['importAttachments'] = 'on';

		$obj->import(__DIR__ . '/fixtures/mediawiki_sample.xml');

				unset($_POST['importAttachments']);

		ob_get_clean();
	}

	public function testImportShouldRaiseExceptionForInvalidMimeType()
	{
		require_once(__DIR__ . '/../../init/tra.php');
		$_FILES['importFile']['type'] = 'invalid/type';
		$this->setExpectedException('UnexpectedValueException');
		$this->obj->import(__DIR__ . '/fixtures/mediawiki_sample.xml');
	}

	/**
	 * @group marked-as-skipped
	 */
	public function testConfigureParser()
	{
		$this->markTestSkipped('2016-09-26 Skipped as the underlying PEAR is out of date.');

		$this->obj->dom = new DOMDocument;
		$this->obj->dom->load(__DIR__ . '/fixtures/mediawiki_sample.xml');
		$this->obj->configureParser();
		$this->assertEquals('Text_Wiki_Mediawiki', get_class($this->obj->parser));
	}

	public function testValidateInput()
	{
		$this->obj->dom = new DOMDocument;
		$this->obj->dom->load(__DIR__ . '/fixtures/mediawiki_sample.xml');
		$this->assertTrue($this->obj->validateInput());

				$this->obj->dom = new DOMDocument;
		$this->obj->dom->load(__DIR__ . '/fixtures/mediawiki_sample_v0.4.xml');
		$this->assertTrue($this->obj->validateInput());
	}

	public function testValidateInputShouldRaiseExceptionForUnsupportedXmlFileVersion()
	{
		$this->obj->dom = new DOMDocument;
		$this->obj->dom->load(__DIR__ . '/fixtures/mediawiki_sample_v0.2.xml');
		$this->setExpectedException('DOMException');
		$this->obj->validateInput();
	}

	public function testValidateInputShouldRaiseExceptionForInvalidXmlFile()
	{
		$this->obj->dom = new DOMDocument;
		$this->obj->dom->load(__DIR__ . '/fixtures/mediawiki_invalid.xml');
		$this->setExpectedException('DOMException');
		$this->obj->validateInput();
	}

	public function testValidateInputShouldRaiseExceptionForWordpressFile()
	{
		$this->obj->dom = new DOMDocument;
		$this->obj->dom->load(__DIR__ . '/fixtures/wordpress_sample.xml');
		$this->setExpectedException('DOMException');
		$this->obj->validateInput();
	}

	public function testParseData()
	{
		ob_start();

		$obj = $this->getMockBuilder('TikiImporter_Wiki_Mediawiki')
			->setMethods(['extractInfo', 'downloadAttachment'])
			->getMock();
		$obj->dom = new DOMDocument;
		$obj->dom->load(__DIR__ . '/fixtures/mediawiki_sample.xml');
		$obj->expects($this->exactly(4))->method('extractInfo')->will($this->returnValue([]));

		$this->assertEquals(4, count($obj->parseData()));

		$output = ob_get_clean();
		$this->assertEquals("\nParsing pages:\n", $output);
	}

	public function testParseDataShouldPrintMessageIfErrorToParseAPageWhenExtractInfoReturnException()
	{
		$obj = $this->getMockBuilder('TikiImporter_Wiki_Mediawiki')
			->setMethods(['extractInfo', 'saveAndDisplayLog', 'downloadAttachment'])
			->getMock();
		$obj->expects($this->exactly(4))->method('extractInfo')->will($this->throwException(new ImporterParserException('')));
		$obj->expects($this->exactly(5))->method('saveAndDisplayLog')->will($this->returnValue(''));

		$obj->dom = new DOMDocument;
		$obj->dom->load(__DIR__ . '/fixtures/mediawiki_sample.xml');

		$this->assertEquals([], $obj->parseData());
	}

	public function testParseDataHandleDifferentlyPagesAndFilePages()
	{
		$obj = $this->getMockBuilder('TikiImporter_Wiki_Mediawiki')
			->setMethods(['extractInfo', 'saveAndDisplayLog'])
			->getMock();
		$obj->expects($this->exactly(4))->method('extractInfo')->will($this->returnValue([]));
		$obj->importAttachments = true;

		$obj->dom = new DOMDocument;
		$obj->dom->load(__DIR__ . '/fixtures/mediawiki_sample.xml');
		$this->assertEquals(4, count($obj->parseData()));
	}

	public function testDownloadAttachment()
	{
		ob_start();

		$this->obj->attachmentsDestDir = __DIR__ . '/fixtures/';

		$sourceAttachments = ['sourceTest.jpg', 'sourceTest2.jpg'];
		$destAttachments = ['test.jpg', 'test2.jpg'];
		$i = count($sourceAttachments) - 1;
		$cwd = getcwd();
		chdir(__DIR__);

		while ($i >= 0) {
			fopen($this->obj->attachmentsDestDir . $sourceAttachments[$i], 'w');
			$i--;
		}

		$this->obj->dom = new DOMDocument;
		$this->obj->dom->load(__DIR__ . '/fixtures/mediawiki_sample.xml');
		$this->obj->downloadAttachments();

		$i = count($sourceAttachments) - 1;
		while ($i >= 0) {
			$filePath = $this->obj->attachmentsDestDir . $destAttachments[$i];
			$this->assertFileExists($filePath);
			unlink($filePath);
			unlink($this->obj->attachmentsDestDir . $sourceAttachments[$i]);
			$i--;
		}
		chdir($cwd);

		$output = ob_get_clean();
		$this->assertEquals("\n\nImporting attachments:\nFile test2.jpg successfully imported!\nFile test.jpg successfully imported!\n", $output);
	}

	public function testDownloadAttachmentShouldNotImportIfFileAlreadyExist()
	{
		ob_start();

		$this->obj->attachmentsDestDir = __DIR__ . '/fixtures/';
		$this->obj->dom = new DOMDocument;
		$this->obj->dom->load(__DIR__ . '/fixtures/mediawiki_sample.xml');
		$attachments = ['test.jpg', 'test2.jpg'];

		foreach ($attachments as $attachment) {
			$filePath = $this->obj->attachmentsDestDir . $attachment;
			fopen($filePath, 'w');
		}

		$this->obj->downloadAttachments();

		foreach ($attachments as $attachment) {
			$filePath = $this->obj->attachmentsDestDir . $attachment;
			unlink($filePath);
		}

		$output = ob_get_clean();
		$this->assertEquals("\n\nImporting attachments:\nFile test2.jpg is not being imported because there is already a file with the same name in the destination directory (" . $this->obj->attachmentsDestDir . ")\nFile test.jpg is not being imported because there is already a file with the same name in the destination directory (" . $this->obj->attachmentsDestDir . ")\n", $output);
	}

	public function testDownloadAttachmentsShouldDisplayMessageIfNoAttachments()
	{
		ob_start();

		$this->obj->dom = new DOMDocument;
		$this->obj->downloadAttachments();

		$output = ob_get_clean();
		$this->assertEquals("\n\nNo attachments were found to import. Be sure to create the XML file with the dumpDump.php script and with the option --uploads. This is the only way to import attachments.\n", $output);
	}

	public function testDownloadAttachmentsShouldDisplayMessageIfUnableToDownloadFile()
	{
		ob_start();

		$this->obj->attachmentsDestDir = __DIR__ . '/fixtures/';
		$this->obj->dom = new DOMDocument;
		$this->obj->dom->load(__DIR__ . '/fixtures/mediawiki_invalid_upload.xml');
		$this->obj->downloadAttachments();

		$output = ob_get_clean();
		$this->assertEquals("\n\nImporting attachments:\nUnable to download file Qlandkartegt-0.11.1.tar.gz. File not found.\nUnable to download file Passelivre.jpg. File not found.\n", $output);
	}

	public function testExtractInfo()
	{
		ob_start();

		$dom = new DOMDocument;
		$dom->load(__DIR__ . '/fixtures/mediawiki_page.xml');
		$expectedNames = ['Redes de ensino', 'Academia Colarossi'];

		$pages = $dom->getElementsByTagName('page');

		$i = 0;
		foreach ($pages as $page) {
			$obj = $this->getMockBuilder('TikiImporter_Wiki_Mediawiki')
				->setMethods(['extractRevision'])
				->getMock();
			$obj->revisionsNumber = 0;
			$obj->expects($this->atLeastOnce())->method('extractRevision')->will($this->returnValue('revision'));

			$return = $obj->extractInfo($page);
			$this->assertEquals($expectedNames[$i++], $return['name']);
			$this->assertGreaterThan(1, count($return['revisions']));
		}

		$output = ob_get_clean();
		$this->assertEquals("Page \"Redes de ensino\" successfully parsed with 8 revisions (from a total of 8 revisions).\nPage \"Academia Colarossi\" successfully parsed with 2 revisions (from a total of 2 revisions).\n", $output);
	}

	public function testExtractInfoShouldNotParseMoreThanFiveRevisions()
	{
		ob_start();

		$dom = new DOMDocument;
		$dom->load(__DIR__ . '/fixtures/mediawiki_page.xml');
		$expectedNames = ['Redes de ensino', 'Academia Colarossi'];
		$expectedCalls = [5, 2];

		$pages = $dom->getElementsByTagName('page');

		$i = 0;
		foreach ($pages as $page) {
			$obj = $this->getMockBuilder('TikiImporter_Wiki_Mediawiki')
				->setMethods(['extractRevision'])
				->getMock();
			$obj->revisionsNumber = 5;
			$obj->expects($this->exactly($expectedCalls[$i]))->method('extractRevision')->will($this->returnValue('revision'));

			$return = $obj->extractInfo($page);
			$this->assertEquals($expectedNames[$i], $return['name']);
			$this->assertEquals($expectedCalls[$i], count($return['revisions']));
			$i++;
		}

		$output = ob_get_clean();
		$this->assertEquals("Page \"Redes de ensino\" successfully parsed with 5 revisions (from a total of 8 revisions).\nPage \"Academia Colarossi\" successfully parsed with 2 revisions (from a total of 2 revisions).\n", $output);
	}

	public function testExtractInfoShouldParseAllRevisions()
	{
		ob_start();

		$dom = new DOMDocument;
		$dom->load(__DIR__ . '/fixtures/mediawiki_page.xml');
		$expectedNames = ['Redes de ensino', 'Academia Colarossi'];
		$expectedCalls = [8, 2];

		$pages = $dom->getElementsByTagName('page');

		$i = 0;
		foreach ($pages as $page) {
			$obj = $this->getMockBuilder('TikiImporter_Wiki_Mediawiki')
				->setMethods(['extractRevision'])
				->getMock();
			$obj->revisionsNumber = 0;
			$obj->expects($this->exactly($expectedCalls[$i]))->method('extractRevision')->will($this->returnValue('revision'));

			$return = $obj->extractInfo($page);
			$this->assertEquals($expectedNames[$i], $return['name']);
			$this->assertEquals($expectedCalls[$i], count($return['revisions']));
			$i++;
		}

		$output = ob_get_clean();
		$this->assertEquals("Page \"Redes de ensino\" successfully parsed with 8 revisions (from a total of 8 revisions).\nPage \"Academia Colarossi\" successfully parsed with 2 revisions (from a total of 2 revisions).\n", $output);
	}

	public function testExtractInfoShouldAlsoParseAllRevisions()
	{
		ob_start();

		$dom = new DOMDocument;
		$dom->load(__DIR__ . '/fixtures/mediawiki_page.xml');
		$expectedNames = ['Redes de ensino', 'Academia Colarossi'];
		$expectedCalls = [8, 2];

		$pages = $dom->getElementsByTagName('page');

		$i = 0;
		foreach ($pages as $page) {
			$obj = $this->getMockBuilder('TikiImporter_Wiki_Mediawiki')
				->setMethods(['extractRevision'])
				->getMock();
			$obj->revisionsNumber = 15;
			$obj->expects($this->exactly($expectedCalls[$i]))->method('extractRevision')->will($this->returnValue('revision'));

			$return = $obj->extractInfo($page);
			$this->assertEquals($expectedNames[$i], $return['name']);
			$this->assertEquals($expectedCalls[$i], count($return['revisions']));
			$i++;
		}

		$output = ob_get_clean();
		$this->assertEquals("Page \"Redes de ensino\" successfully parsed with 8 revisions (from a total of 8 revisions).\nPage \"Academia Colarossi\" successfully parsed with 2 revisions (from a total of 2 revisions).\n", $output);
	}

	public function testExtractInfoShouldPrintErrorMessageIfProblemWithRevision()
	{
		ob_start();

		$obj = $this->getMockBuilder('TikiImporter_Wiki_Mediawiki')
			->setMethods(['extractRevision'])
			->getMock();
		$obj->revisionsNumber = 0;
		$obj->expects($this->exactly(10))->method('extractRevision')->will($this->onConsecutiveCalls([], [], $this->throwException(new ImporterParserException)));

		$dom = new DOMDocument;
		$dom->load(__DIR__ . '/fixtures/mediawiki_page.xml');
		$pages = $dom->getElementsByTagName('page');

		foreach ($pages as $page) {
			$obj->extractInfo($page);
		}

		$output = ob_get_clean();
		$this->assertEquals("Error while parsing revision 3 of the page \"Redes de ensino\". There could be a problem in the page syntax or in the Text_Wiki parser used by the importer.\nPage \"Redes de ensino\" successfully parsed with 7 revisions (from a total of 8 revisions).\nPage \"Academia Colarossi\" successfully parsed with 2 revisions (from a total of 2 revisions).\n", $output);
	}

	public function testExtractInfoShouldThrowExceptionIfUnableToParseAllRevisionsOfPage()
	{
		$obj = $this->getMockBuilder('TikiImporter_Wiki_Mediawiki')
			->setMethods(['extractRevision', 'saveAndDisplayLog'])
			->getMock();
		$obj->revisionsNumber = 0;
		$obj->expects($this->exactly(8))->method('extractRevision')->will($this->throwException(new ImporterParserException));
		$obj->expects($this->exactly(8))->method('saveAndDisplayLog')->will($this->returnValue(''));

		$dom = new DOMDocument;
		$dom->load(__DIR__ . '/fixtures/mediawiki_page.xml');
		$pages = $dom->getElementsByTagName('page');

		foreach ($pages as $page) {
			$this->setExpectedException('Exception');
			$this->assertNull($obj->extractInfo($page));
		}
	}

	public function testExtractRevision()
	{
		$dom = new DOMDocument;
		$dom->load(__DIR__ . '/fixtures/mediawiki_revision.xml');
		$expectedResult = [
			['minor' => false, 'lastModif' => 1139119907, 'ip' => '201.6.123.86', 'user' => 'anonymous', 'comment' => 'fim da tradu????o', 'data' => 'Some text'],
			['minor' => false, 'lastModif' => 1176517303, 'user' => 'Girino', 'ip' => '0.0.0.0', 'comment' => 'Revert to revision 5661385', 'data' => 'Some text']];
		$extractContributorReturn = [
			['ip' => '201.6.123.86', 'user' => 'anonymous'],
			['user' => 'Girino', 'ip' => '0.0.0.0']];

		$revisions = $dom->getElementsByTagName('revision');

		$i = 0;
		foreach ($revisions as $revision) {
			$obj = $this->getMockBuilder('TikiImporter_Wiki_Mediawiki')
				->setMethods(['convertMarkup', 'extractContributor'])
				->getMock();
			$obj->expects($this->once())->method('convertMarkup')->will($this->returnValue('Some text'));
			$obj->expects($this->once())->method('extractContributor')->will($this->returnValue($extractContributorReturn[$i]));

			$this->assertEquals($expectedResult[$i++], $obj->extractRevision($revision));
		}
	}

	public function testExtractRevisionShouldRaiseExceptionForInvalidSyntax()
	{
		$obj = $this->getMockBuilder('TikiImporter_Wiki_Mediawiki')
			->setMethods(['convertMarkup', 'extractContributor'])
			->getMock();
		$obj->expects($this->once())->method('convertMarkup')->will($this->returnValue(new PEAR_Error('some message')));
		$obj->expects($this->once())->method('extractContributor')->will($this->returnValue([]));

		$dom = new DOMDocument;
		$dom->load(__DIR__ . '/fixtures/mediawiki_revision_invalid_syntax.xml');
		$revisions = $dom->getElementsByTagName('revision');

		foreach ($revisions as $revision) {
			$this->setExpectedException('ImporterParserException');
			$this->assertNull($obj->extractRevision($revision));
		}
	}

	public function testExtractContributor()
	{
		$dom = new DOMDocument;
		$dom->load(__DIR__ . '/fixtures/mediawiki_contributor.xml');
		$expectedResult = [
			['user' => 'SomeUserName', 'ip' => '0.0.0.0'],
			['ip' => '163.117.200.166', 'user' => 'anonymous'],
			['user' => 'OtherUserName', 'ip' => '0.0.0.0']
		];
		$contributors = $dom->getElementsByTagName('contributor');

		$i = 0;
		foreach ($contributors as $contributor) {
			$this->assertEquals($expectedResult[$i++], $this->obj->extractContributor($contributor));
		}
	}

	// TODO: find a way to mock the Text_Wiki object inside convertMakup()
	/**
	 * @group marked-as-skipped
	 */
	public function testConvertMarkup()
	{
		$this->markTestSkipped('2016-09-26 Skipped as the underlying PEAR is out of date.');

		$this->obj->dom = new DOMDocument;
		$this->obj->configureParser();
		$mediawikiText = '[[someWikiLink]]';
		$expectedResult = "((someWikiLink))\n\n";
		$this->assertEquals($expectedResult, $this->obj->convertMarkup($mediawikiText));
	}

	/**
	 * @group marked-as-skipped
	 */
	public function testConvertMarkupShouldReturnNullIfEmptyMediawikiText()
	{
		$this->markTestSkipped('2016-09-26 Skipped as the underlying PEAR is out of date.');

		$this->obj->dom = new DOMDocument;
		$this->obj->configureParser();
		$mediawikiText = '';
		$this->assertNull($this->obj->convertMarkup($mediawikiText));
	}
}
