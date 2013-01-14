<?php
/**
 * Full report
 *
 * PHP version 5
 *
 * @category PHP
 * @package  PHP_CompatInfo
 * @author   Laurent Laville <pear@laurent-laville.org>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version  GIT: $Id$
 * @link     http://php5.laurent-laville.org/compatinfo/
 */

/**
 * Full report
 *
 * @category PHP
 * @package  PHP_CompatInfo
 * @author   Laurent Laville <pear@laurent-laville.org>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version  Release: @package_version@
 * @link     http://php5.laurent-laville.org/compatinfo/
 */
class PHP_CompatInfo_Report_Full
{
    /**
     * Class constructor for full/combined report
     *
     * @param string $source       Data source
     * @param array  $options      Options for parser
     * @param array  $warnings     List of warning messages already produced
     * @param array  $reportChilds List of reports to print
     */
    public function __construct($source, $options, $warnings, $reportChilds)
    {
        $pci = new PHP_CompatInfo($options);
        if ($pci->parse($source) === false) {
            return;
        }
        $reportResults = $pci->toArray();
        $base   = realpath($source);
        if (is_file($base)) {
            $base = dirname($base);
        }
        $allWarnings = array_unique(
            array_merge($warnings, $pci->getWarnings())
        );

        $options = $pci->getOptions();

        if (empty($reportChilds)) {
            $reportChilds = array(
                'summary', 'extension',
                'interface', 'trait', 'class', 'function', 'constant',
                'global', 'token', 'condition'
            );
        }

        foreach ($reportChilds as $report) {
            $classReport = 'PHP_CompatInfo_Report_' . ucfirst($report);
            new $classReport($source, $options, $allWarnings, $reportResults);
        }
        echo PHP_EOL;

        if (count($allWarnings) > 0 && $options['verbose'] > 0) {
            echo 'Warning messages : (' . count($allWarnings) . ')' . PHP_EOL;
            echo PHP_EOL;
            foreach ($allWarnings as $warn) {
                if (in_array($warn, $warnings)) {
                    // other listeners need to be notifed about console warnings
                    $pci->addWarning($warn);
                }
                echo '  ' . $warn . PHP_EOL;
            }
            echo PHP_EOL;
        }

        if (class_exists('PHP_Timer', true) === true) {
            echo PHP_Timer::resourceUsage() . PHP_EOL;
            echo PHP_EOL;
        }

        echo 'Required PHP ' . $reportResults['versions'][0] . ' (min)';
        if (!empty($reportResults['versions'][1])) {
            echo ', ' . $reportResults['versions'][1] . ' (max)';
        }
        echo PHP_EOL;
    }

}
