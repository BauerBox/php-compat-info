<?php
/**
 */

require_once 'GenericTest.php';

$dir = dirname(dirname(dirname(__FILE__)));

if (file_exists($dir . DIRECTORY_SEPARATOR . 'PHP/CompatInfo/Reference/imap.php')) {
    // running from repository
    include_once $dir . DIRECTORY_SEPARATOR . 'PHP/CompatInfo/Reference/imap.php';
} else {
    // package installed
    include_once 'Bartlett/PHP/CompatInfo/Reference/imap.php';
}

/**
 * Tests for the PHP_CompatInfo class, retrieving functions informations.
 *
 * @package    PHP_CompatInfo
 * @subpackage Tests
 * @author     Remi Collet <Remi@FamilleCollet.com>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version    Release: @package_version@
 * @link       http://php5.laurent-laville.org/compatinfo/
 * @since      Class available since Release 2.0.0RC3
 */
class PHP_CompatInfo_Reference_ImapTest extends PHP_CompatInfo_Reference_GenericTest
{
    /**
     * @covers PHP_CompatInfo_Reference_Imap::getExtensions
     * @covers PHP_CompatInfo_Reference_Imap::getFunctions
     * @covers PHP_CompatInfo_Reference_Imap::getConstants
     */
    protected function setUp()
    {
        $this->ignoredfunctions = array(
            'imap_fetchmime',
            'imap_utf8_to_mutf7',
            'imap_mutf7_to_utf8',
            'imap_fetchtext',
            'imap_scan',
            'imap_create',
            'imap_rename'
        );
        $this->optionnalconstants = array(
            'IMAP_GC_ELT'
        );
        $this->obj = new PHP_CompatInfo_Reference_Imap();
        parent::setUp();
    }
}
