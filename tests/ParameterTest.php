<?php
/**
 * Unit tests for PHP_CompatInfo package, functions parameters
 *
 * @package    PHP_CompatInfo
 * @subpackage Tests
 * @author     Laurent Laville pear@laurent-laville.org>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version    Release: @package_version@
 * @link       http://php5.laurent-laville.org/compatinfo/
 * @since      Class available since Release 2.2.0
 */

if (!defined('TEST_FILES_PATH')) {
    define(
        'TEST_FILES_PATH',
        dirname(__FILE__) . DIRECTORY_SEPARATOR .
        '_files' . DIRECTORY_SEPARATOR
    );
}

/**
 * Tests for the PHP_CompatInfo class, about functions parameters versions
 */
class PHP_CompatInfo_ParameterTest extends PHPUnit_Framework_TestCase
{
    protected $pci;

    protected function setUp()
    {
        $options = array(
            'cacheDriver' => 'null',
        );

        $this->pci = new PHP_CompatInfo($options);
    }

    /**
     * example with get_browser()
     *
     * @link http://www.php.net/manual/en/function.get-browser.php
     */
    public function testGetBrowserDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-01d.php');

        $this->assertSame(
            array('4.0.0', ''), $this->pci->getVersions()
        );
    }
    public function testGetBrowserOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-01o.php');

        $this->assertSame(
            array('4.3.2', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with sha1()
     *
     * @link http://www.php.net/manual/en/function.sha1.php
     */
    public function testSha1DefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-02d.php');

        $this->assertSame(
            array('4.3.0', ''), $this->pci->getVersions()
        );
    }
    public function testSha1OptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-02o.php');

        $this->assertSame(
            array('5.0.0', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with sha1_file()
     *
     * @link http://www.php.net/manual/en/function.sha1_file.php
     */
    public function testSha1FileDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-03d.php');

        $this->assertSame(
            array('4.3.0', ''), $this->pci->getVersions()
        );
    }
    public function testSha1FileOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-03o.php');

        $this->assertSame(
            array('5.0.0', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with md5()
     *
     * @link http://www.php.net/manual/en/function.md5.php
     */
    public function testMd5DefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-04d.php');

        $this->assertSame(
            array('4.0.0', ''), $this->pci->getVersions()
        );
    }
    public function testMd5OptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-04o.php');

        $this->assertSame(
            array('5.0.0', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with md5_file()
     *
     * @link http://www.php.net/manual/en/function.md5-file.php
     */
    public function testMd5FileDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-05d.php');

        $this->assertSame(
            array('4.2.0', ''), $this->pci->getVersions()
        );
    }
    public function testMd5FileOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-05o.php');

        $this->assertSame(
            array('5.0.0', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with mkdir()
     *
     * @link http://www.php.net/manual/en/function.mkdir.php
     */
    public function testMkdirDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-06d.php');

        $this->assertSame(
            array('4.0.0', ''), $this->pci->getVersions()
        );
    }
    public function testMkdirOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-06o.php');

        $this->assertSame(
            array('5.0.0', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with file()
     *
     * @link http://www.php.net/manual/en/function.file.php
     */
    public function testFileDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-07d.php');

        $this->assertSame(
            array('4.0.0', ''), $this->pci->getVersions()
        );
    }
    public function testFileOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-07o.php');

        $this->assertSame(
            array('5.0.0', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with str_replace()
     *
     * @link http://www.php.net/manual/en/function.str-replace.php
     */
    public function testStrReplaceDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-08d.php');

        $this->assertSame(
            array('4.0.0', ''), $this->pci->getVersions()
        );
    }
    public function testStrReplaceOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-08o.php');

        $this->assertSame(
            array('5.0.0', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with fgetss()
     *
     * @link http://www.php.net/manual/en/function.fgetss.php
     */
    public function testFgetssDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-09d.php');

        $this->markTestIncomplete(
            'This test has not been fully implemented.'
        );
    }
    public function testFgetssOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-09o.php');

        $this->markTestIncomplete(
            'This test has not been fully implemented.'
        );
    }

    /**
     * example with microtime()
     *
     * @link http://www.php.net/manual/en/function.microtime.php
     */
    public function testMicrotimeDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-10d.php');

        $this->assertSame(
            array('4.0.0', ''), $this->pci->getVersions()
        );
    }
    public function testMicrotimeOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-10o.php');

        $this->assertSame(
            array('5.0.0', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with array_keys()
     *
     * @link http://www.php.net/manual/en/function.array-keys.php
     */
    public function testArrayKeysDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-11d.php');

        $this->assertSame(
            array('4.0.0', ''), $this->pci->getVersions()
        );
    }
    public function testArrayKeysOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-11o.php');

        $this->assertSame(
            array('5.0.0', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with array_slice()
     *
     * @link http://www.php.net/manual/en/function.array-slice.php
     */
    public function testArraySliceDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-12d.php');

        $this->assertSame(
            array('4.0.0', ''), $this->pci->getVersions()
        );
    }
    public function testArraySliceOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-12o.php');

        $this->assertSame(
            array('5.0.2', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with file_get_contents()
     *
     * @link http://www.php.net/manual/en/function.file-get-contents.php
     */
    public function testFileGetContentsDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-13d.php');

        $this->assertSame(
            array('4.3.0', ''), $this->pci->getVersions()
        );
    }
    public function testFileGetContentsOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-13o.php');

        $this->assertSame(
            array('5.1.0', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with stream_get_contents()
     *
     * @link http://www.php.net/manual/en/function.stream-get-contents.php
     */
    public function testStreamGetContentsDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-14d.php');

        $this->assertSame(
            array('5.0.0', ''), $this->pci->getVersions()
        );
    }
    public function testStreamGetContentsOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-14o.php');

        $this->assertSame(
            array('5.1.0', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with gettimeofday()
     *
     * @link http://www.php.net/manual/en/function.gettimeofday.php
     */
    public function testGettimeofdayDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-15d.php');

        $this->assertSame(
            array('4.0.0', ''), $this->pci->getVersions()
        );
    }
    public function testGettimeofdayOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-15o.php');

        $this->assertSame(
            array('5.1.0', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with substr_count()
     *
     * @link http://www.php.net/manual/en/function.substr-count.php
     */
    public function testSubstrCountDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-16d.php');

        $this->assertSame(
            array('4.0.0', ''), $this->pci->getVersions()
        );
    }
    public function testSubstrCountOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-16o.php');

        $this->assertSame(
            array('5.1.0', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with is_a()
     *
     * @link http://www.php.net/manual/en/function.is-a.php
     */
    public function testIsADefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-17d.php');

        $this->assertSame(
            array('4.2.0', ''), $this->pci->getVersions()
        );
    }
    public function testIsAOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-17o.php');

        $this->assertSame(
            array('5.3.9', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with jdtojewish()
     *
     * @link http://www.php.net/manual/en/function.jdtojewish.php
     */
    public function testJdtojewishDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-18d.php');

        $this->markTestIncomplete(
            'This test has not been fully implemented.'
        );
    }
    public function testJdtojewishOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-18o.php');

        $this->assertSame(
            array('5.0.0', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with stream_copy_to_stream()
     *
     * @link http://www.php.net/manual/en/function.stream-copy-to-stream.php
     */
    public function testStreamCopyToStreamDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-19d.php');

        $this->assertSame(
            array('5.0.0', ''), $this->pci->getVersions()
        );
    }
    public function testStreamCopyToStreamOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-19o.php');

        $this->assertSame(
            array('5.1.0', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with copy()
     *
     * @link http://www.php.net/manual/en/function.copy.php
     */
    public function testCopyDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-20d.php');

        $this->assertSame(
            array('4.0.0', ''), $this->pci->getVersions()
        );
    }
    public function testCopyOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-20o.php');

        $this->assertSame(
            array('5.3.0', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with parse_url()
     *
     * @link http://www.php.net/manual/en/function.parse-url.php
     */
    public function testParseUrlDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-21d.php');

        $this->assertSame(
            array('4.0.0', ''), $this->pci->getVersions()
        );
    }
    public function testParseUrlOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-21o.php');

        $this->assertSame(
            array('5.2.0', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with memory_get_usage()
     *
     * @link http://www.php.net/manual/en/function.memory-get-usage.php
     */
    public function testMemoryGetUsageDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-22d.php');

        $this->assertSame(
            array('4.3.2', ''), $this->pci->getVersions()
        );
    }
    public function testMemoryGetUsageOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-22o.php');

        $this->assertSame(
            array('5.2.0', ''), $this->pci->getVersions()
        );
    }

    /**
     * example with htmlspecialchars()
     *
     * @link http://www.php.net/manual/en/function.htmlspecialchars.php
     */
    public function testHtmlspecialcharsDefaultSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-23d.php');

        $this->assertSame(
            array('4.0.0', ''), $this->pci->getVersions()
        );
    }
    public function testHtmlspecialcharsOptionalSignature()
    {
        $this->pci->parse(TEST_FILES_PATH . 'source18881-23o.php');

        $this->assertSame(
            array('4.1.0', ''), $this->pci->getVersions()
        );
    }
    
}
