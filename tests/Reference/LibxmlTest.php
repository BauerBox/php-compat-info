<?php
/**
 * Unit tests for PHP_CompatInfo package, Libxml Reference
 *
 * @package    PHP_CompatInfo
 * @subpackage Tests
 * @author     Remi Collet <Remi@FamilleCollet.com>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version    Release: @package_version@
 * @link       http://php5.laurent-laville.org/compatinfo/
 * @since      Class available since Release 2.0.0RC4
 */

require_once 'GenericTest.php';

/**
 * Tests for the PHP_CompatInfo class, retrieving components informations
 * about Libxml extension
 */
class PHP_CompatInfo_Reference_LibxmlTest extends PHP_CompatInfo_Reference_GenericTest
{
    /**
     * @covers PHP_CompatInfo_Reference_Libxml::getExtensions
     * @covers PHP_CompatInfo_Reference_Libxml::getFunctions
     * @covers PHP_CompatInfo_Reference_Libxml::getConstants
     * @covers PHP_CompatInfo_Reference_Libxml::getClasses
     */
    protected function setUp()
    {
        $this->optionnalconstants = array(
            // requires LIBXML_VERSION >= 20703
            'LIBXML_PARSEHUGE',
        );
        $this->obj = new PHP_CompatInfo_Reference_Libxml();
        parent::setUp();
    }
}
