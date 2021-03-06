<?php
/**
 * @package     Joomla.UnitTest
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

include_once JPATH_PLATFORM . '/joomla/archive/zip.php';

/**
 * Test class for JArchiveZip.
 * Generated by PHPUnit on 2011-10-26 at 19:34:31.
 */
class JArchiveZipTest extends PHPUnit_Framework_TestCase
{
	protected static $outputPath;

    /**
     * @var JArchiveZip
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        self::$outputPath = __DIR__ . '/output';

		if (!is_dir(self::$outputPath)) {
			mkdir(self::$outputPath, 0777);
		}

        $this->object = new JArchiveZip;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @todo Implement testCreate().
     */
    public function testCreate()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
	 * Tests the extract Method.
	 *
	 * @group   JArchive
	 * @return  void
	 */
    public function testExtract()
    {
        if (!JArchiveZip::isSupported())
        {
			$this->markTestSkipped(
              'ZIP files can not be extracted.'
            );
            return;
		}

		$this->object->extract(__DIR__ . '/logo.zip', self::$outputPath);
		$this->assertTrue(is_file(self::$outputPath . '/logo-zip.png'));

		if (is_file(self::$outputPath . '/logo-zip.png'))
		{
			unlink(self::$outputPath . '/logo-zip.png');
		}
    }

    /**
     * @todo Implement testHasNativeSupport().
     */
    public function testHasNativeSupport()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @todo Implement testCheckZipData().
     */
    public function testCheckZipData()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}

?>
