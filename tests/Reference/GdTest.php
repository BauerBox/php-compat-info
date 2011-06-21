<?php
/**
 * Unit tests for PHP_CompatInfo package, Gd Reference
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
 * about Gd extension
 */
class PHP_CompatInfo_Reference_GdTest extends PHP_CompatInfo_Reference_GenericTest
{
    /**
     * @covers PHP_CompatInfo_Reference_Gd::getExtensions
     * @covers PHP_CompatInfo_Reference_Gd::getFunctions
     * @covers PHP_CompatInfo_Reference_Gd::getConstants
     */
    protected function setUp()
    {
        $this->optionnalfunctions = array(
            // Win32 only
            'imagegrabscreen',
            'imagegrabwindow',
            // requires HAVE_COLORCLOSESTHWB
            'imagecolorclosesthwb',
            // requires HAVE_LIBT1
            'imagepsbbox',
            'imagepsencodefont',
            'imagepsextendfont',
            'imagepsfreefont',
            'imagepsloadfont',
            'imagepsslantfont',
            'imagepstext',
            // requires HAVE_GD_XPM (linux only)
            'imagecreatefromxpm',
        );
        $this->obj = new PHP_CompatInfo_Reference_Gd();
        parent::setUp();
    }
}
