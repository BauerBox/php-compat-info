<?php
/**
 * Additional parser connected to tokens :
 * T_STRING, T_CONSTANT_ENCAPSED_STRING,
 * T_LINE, T_FILE, T_DIR, T_FUNC_C, T_CLASS_C, T_METHOD_C, T_NS_C
 *
 * @author     Laurent Laville pear@laurent-laville.org>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version    Release: @package_version@
 * @link       http://php5.laurent-laville.org/compatinfo/
 */

class PHP_CompatInfo_TokenParser
{
    public static function parseTokenString()
    {
        list($subject, $context, $token) = func_get_args();
        extract($context);

        if ($namespace === FALSE) {
            // global namespace
            $ns = '\\';
        } else {
            $ns = $namespace;
        }

        $type = $token->getType();

        if ($type === 'constant') {
            $container = $subject->options['containers']['const'];

            if (null != $container) {
                $name = $token->getName();

                // update constants
                $constants = $subject->offsetGet(array($container => $ns));
                $constants[$name]['uses'][] = $token->getLine();
                $subject->offsetSet(array($container => $ns), $constants);
            }
        }
        elseif ($type === 'function') {
            $container = $subject->options['containers']['core'];

            $name = $token->getName();

            $classMethod     = FALSE;
            $interfaceMethod = FALSE;

            if ($class) {
                $classes = $subject->getClasses();
                if (isset($classes[$class]['methods'])) {
                    $classMethod = array_key_exists(
                        $name, $classes[$class]['methods']
                    );
                } else {
                    $classMethod = false;
                }
            }
            else if ($interface) {
                $interfaces = $subject->getInterfaces();
                if (isset($interfaces[$interface]['methods'])) {
                    $interfaceMethod = array_key_exists(
                        $name, $interfaces[$interface]['methods']
                    );
                } else {
                    $interfaceMethod = false;
                }
            }
            if ($classMethod === FALSE && $interfaceMethod === FALSE) {

                if (null != $container) {
                    $name = $token->getName();

                    // update internal functions
                    $functions = $subject->offsetGet(array($container => $ns));
                    $functions[$name]['uses'][] = $token->getLine();
                    $subject->offsetSet(array($container => $ns), $functions);
                }
            }
        }
        elseif ($type === 'interface') {
            $container = $subject->options['containers'][$type];

            if (null != $container) {
                $name = $token->getName();

                // update interfaces
                $interfaces = $subject->offsetGet(array($container => $ns));
                $interfaces[$name]['uses'][] = $token->getLine();
                $subject->offsetSet(array($container => $ns), $interfaces);

            }
        }
        elseif ($type === 'class') {
            $container = $subject->options['containers'][$type];

            if (null != $container) {
                $name = $token->getName();

                // update classes
                $classes = $subject->offsetGet(array($container => $ns));
                $classes[$name]['uses'][] = $token->getLine();
                $subject->offsetSet(array($container => $ns), $classes);
            }
        }
    }

    public static function parseTokenConstant()
    {
        list($subject, $context, $token) = func_get_args();
        extract($context);

        if ($namespace === FALSE) {
            // global namespace
            $ns = '\\';
        } else {
            $ns = $namespace;
        }

        $type = $token->getType();

        if ($type === 'constant') {
            $container = $subject->options['containers']['const'];

            if (null != $container) {
                $name = $token->getName();

                // update constants
                $constants = $subject->offsetGet(array($container => $ns));
                $constants[$name]['uses'][] = $token->getLine();
                $subject->offsetSet(array($container => $ns), $constants);
            }
        }
    }

    public static function parseTokenMagicConstant()
    {
        list($subject, $context, $token) = func_get_args();
        extract($context);

        if ($namespace === FALSE) {
            // global namespace
            $ns = '\\';
        } else {
            $ns = $namespace;
        }

        $container = $subject->options['containers']['const'];

        if (null != $container) {
            $name = (string)$token;

            // update constants
            $constants = $subject->offsetGet(array($container => $ns));
            $constants[$name]['uses'][] = $token->getLine();
            $subject->offsetSet(array($container => $ns), $constants);
        }
    }

}
