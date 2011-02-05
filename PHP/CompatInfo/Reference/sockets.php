<?php
/**
 * Version informations about sockets extension
 *
 * PHP version 5
 *
 * @category PHP
 * @package  PHP_CompatInfo
 * @author   Laurent Laville <pear@laurent-laville.org>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version  SVN: $Id$
 * @link     http://php5.laurent-laville.org/compatinfo/
 */

require_once 'PHP/CompatInfo/Reference.php';

/**
 * All interfaces, classes, functions, constants about sockets extension
 *
 * @category PHP
 * @package  PHP_CompatInfo
 * @author   Laurent Laville <pear@laurent-laville.org>
 * @license  http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @version  Release: @package_version@
 * @link     http://php5.laurent-laville.org/compatinfo/
 * @link     http://www.php.net/manual/en/book.sockets.php
 */
class PHP_CompatInfo_Reference_Sockets implements PHP_CompatInfo_Reference
{
    /**
     * Gets all informations at once about:
     * extensions, interfaces, classes, functions, constants
     *
     * @param string $extension OPTIONAL
     * @param string $version   OPTIONAL PHP version
     *                          (4 => only PHP4, 5 or null => PHP4 + PHP5)
     *
     * @return array
     */
    public function getAll($extension = null, $version = null)
    {
        $references = array(
            'extensions' => $this->getExtensions($extension, $version),
            'interfaces' => $this->getInterfaces($extension, $version),
            'classes'    => $this->getClasses($extension, $version),
            'functions'  => $this->getFunctions($extension, $version),
            'constants'  => $this->getConstants($extension, $version),
        );
        return $references;
    }

    /**
     * Gets informations about extensions
     *
     * @param string $extension OPTIONAL
     * @param string $version   OPTIONAL PHP version
     *                          (4 => only PHP4, 5 or null => PHP4 + PHP5)
     *
     * @return array
     */
    public function getExtensions($extension = null, $version = null)
    {
        $extensions = array(
            'sockets' => array('4.1.0', '', '')
        );
        return $extensions;
    }

    /**
     * Gets informations about interfaces
     *
     * @param string $extension OPTIONAL
     * @param string $version   OPTIONAL PHP version
     *                          (4 => only PHP4, 5 or null => PHP4 + PHP5)
     *
     * @return array
     */
    public function getInterfaces($extension = null, $version = null)
    {
        $interfaces = array();

        if ((null == $version ) || ('4' == $version)) {
            $version4 = array(
            );
            $interfaces = array_merge(
                $interfaces,
                $version4
            );
        }
        if ((null == $version ) || ('5' == $version)) {
            $version5 = array(
            );
            $interfaces = array_merge(
                $interfaces,
                $version5
            );
        }
        return $interfaces;
    }

    /**
     * Gets informations about classes
     *
     * @param string $extension OPTIONAL
     * @param string $version   OPTIONAL PHP version
     *                          (4 => only PHP4, 5 or null => PHP4 + PHP5)
     *
     * @return array
     */
    public function getClasses($extension = null, $version = null)
    {
        $classes = array();

        if ((null == $version ) || ('4' == $version)) {
            $version4 = array(
            );
            $classes = array_merge(
                $classes,
                $version4
            );
        }
        if ((null == $version ) || ('5' == $version)) {
            $version5 = array(
            );
            $classes = array_merge(
                $classes,
                $version5
            );
        }

        return $classes;
    }

    /**
     * Gets informations about functions
     *
     * @param string $extension OPTIONAL
     * @param string $version   OPTIONAL PHP version
     *                          (4 => only PHP4, 5 or null => PHP4 + PHP5)
     *
     * @return array
     * @link   http://www.php.net/manual/en/ref.sockets.php
     */
    public function getFunctions($extension = null, $version = null)
    {
        $functions = array();

        if ((null == $version ) || ('4' == $version)) {
            $version4 = array(
                'socket_accept'                  => array('4.1.0', ''),
                'socket_bind'                    => array('4.1.0', ''),
                'socket_clear_error'             => array('4.2.0', ''),
                'socket_close'                   => array('4.1.0', ''),
                'socket_connect'                 => array('4.1.0', ''),
                'socket_create_listen'           => array('4.1.0', ''),
                'socket_create_pair'             => array('4.1.0', ''),
                'socket_create'                  => array('4.1.0', ''),
                'socket_get_option'              => array('4.3.0', ''),
                'socket_getpeername'             => array('4.1.0', ''),
                'socket_getsockname'             => array('4.1.0', ''),
                'socket_last_error'              => array('4.1.0', ''),
                'socket_listen'                  => array('4.1.0', ''),
                'socket_read'                    => array('4.1.0', ''),
                'socket_recv'                    => array('4.1.0', ''),
                'socket_recvfrom'                => array('4.1.0', ''),
                'socket_select'                  => array('4.1.0', ''),
                'socket_send'                    => array('4.1.0', ''),
                'socket_sendto'                  => array('4.1.0', ''),
                'socket_set_block'               => array('4.2.0', ''),
                'socket_set_nonblock'            => array('4.1.0', ''),
                'socket_set_option'              => array('4.3.0', ''),
                'socket_shutdown'                => array('4.1.0', ''),
                'socket_strerror'                => array('4.1.0', ''),
                'socket_write'                   => array('4.1.0', ''),
            );
            $functions = array_merge(
                $functions,
                $version4
            );
        }
        if ((null == $version ) || ('5' == $version)) {
            $version5 = array(
            );
            $functions = array_merge(
                $functions,
                $version5
            );
        }
        return $functions;
    }

    /**
     * Gets informations about constants
     *
     * @param string $extension OPTIONAL
     * @param string $version   OPTIONAL PHP version
     *                          (4 => only PHP4, 5 or null => PHP4 + PHP5)
     *
     * @return array
     * @link   http://www.php.net/manual/en/sockets.constants.php
     */
    public function getConstants($extension = null, $version = null)
    {
        $constants = array();

        if ((null == $version ) || ('4' == $version)) {
            $version4 = array(
                'AF_UNIX'                        => array('4.1.0', ''),
                'AF_INET'                        => array('4.1.0', ''),
                'AF_INET6'                       => array('4.1.0', ''),
                'SOCK_STREAM'                    => array('4.1.0', ''),
                'SOCK_DGRAM'                     => array('4.1.0', ''),
                'SOCK_RAW'                       => array('4.1.0', ''),
                'SOCK_SEQPACKET'                 => array('4.1.0', ''),
                'SOCK_RDM'                       => array('4.1.0', ''),
                'MSG_OOB'                        => array('4.1.0', ''),
                'MSG_WAITALL'                    => array('4.1.0', ''),
                'MSG_PEEK'                       => array('4.1.0', ''),
                'MSG_DONTROUTE'                  => array('4.1.0', ''),
                'SO_DEBUG'                       => array('4.1.0', ''),
                'SO_REUSEADDR'                   => array('4.1.0', ''),
                'SO_KEEPALIVE'                   => array('4.1.0', ''),
                'SO_DONTROUTE'                   => array('4.1.0', ''),
                'SO_LINGER'                      => array('4.1.0', ''),
                'SO_BROADCAST'                   => array('4.1.0', ''),
                'SO_OOBINLINE'                   => array('4.1.0', ''),
                'SO_SNDBUF'                      => array('4.1.0', ''),
                'SO_RCVBUF'                      => array('4.1.0', ''),
                'SO_SNDLOWAT'                    => array('4.1.0', ''),
                'SO_RCVLOWAT'                    => array('4.1.0', ''),
                'SO_SNDTIMEO'                    => array('4.1.0', ''),
                'SO_RCVTIMEO'                    => array('4.1.0', ''),
                'SO_TYPE'                        => array('4.1.0', ''),
                'SO_ERROR'                       => array('4.1.0', ''),
                'SOL_SOCKET'                     => array('4.1.0', ''),
                'SOMAXCONN'                      => array('4.1.0', ''),
                'PHP_NORMAL_READ'                => array('4.1.0', ''),
                'PHP_BINARY_READ'                => array('4.1.0', ''),
                'SOCKET_EINTR'                   => array('4.1.0', ''),
                'SOCKET_EBADF'                   => array('4.1.0', ''),
                'SOCKET_EACCES'                  => array('4.1.0', ''),
                'SOCKET_EFAULT'                  => array('4.1.0', ''),
                'SOCKET_EINVAL'                  => array('4.1.0', ''),
                'SOCKET_EMFILE'                  => array('4.1.0', ''),
                'SOCKET_EWOULDBLOCK'             => array('4.1.0', ''),
                'SOCKET_EINPROGRESS'             => array('4.1.0', ''),
                'SOCKET_EALREADY'                => array('4.1.0', ''),
                'SOCKET_ENOTSOCK'                => array('4.1.0', ''),
                'SOCKET_EDESTADDRREQ'            => array('4.1.0', ''),
                'SOCKET_EMSGSIZE'                => array('4.1.0', ''),
                'SOCKET_EPROTOTYPE'              => array('4.1.0', ''),
                'SOCKET_ENOPROTOOPT'             => array('4.1.0', ''),
                'SOCKET_EPROTONOSUPPORT'         => array('4.1.0', ''),
                'SOCKET_ESOCKTNOSUPPORT'         => array('4.1.0', ''),
                'SOCKET_EOPNOTSUPP'              => array('4.1.0', ''),
                'SOCKET_EPFNOSUPPORT'            => array('4.1.0', ''),
                'SOCKET_EAFNOSUPPORT'            => array('4.1.0', ''),
                'SOCKET_EADDRINUSE'              => array('4.1.0', ''),
                'SOCKET_EADDRNOTAVAIL'           => array('4.1.0', ''),
                'SOCKET_ENETDOWN'                => array('4.1.0', ''),
                'SOCKET_ENETUNREACH'             => array('4.1.0', ''),
                'SOCKET_ENETRESET'               => array('4.1.0', ''),
                'SOCKET_ECONNABORTED'            => array('4.1.0', ''),
                'SOCKET_ECONNRESET'              => array('4.1.0', ''),
                'SOCKET_ENOBUFS'                 => array('4.1.0', ''),
                'SOCKET_EISCONN'                 => array('4.1.0', ''),
                'SOCKET_ENOTCONN'                => array('4.1.0', ''),
                'SOCKET_ESHUTDOWN'               => array('4.1.0', ''),
                'SOCKET_ETOOMANYREFS'            => array('4.1.0', ''),
                'SOCKET_ETIMEDOUT'               => array('4.1.0', ''),
                'SOCKET_ECONNREFUSED'            => array('4.1.0', ''),
                'SOCKET_ELOOP'                   => array('4.1.0', ''),
                'SOCKET_ENAMETOOLONG'            => array('4.1.0', ''),
                'SOCKET_EHOSTDOWN'               => array('4.1.0', ''),
                'SOCKET_EHOSTUNREACH'            => array('4.1.0', ''),
                'SOCKET_ENOTEMPTY'               => array('4.1.0', ''),
                'SOCKET_EPROCLIM'                => array('4.1.0', ''),
                'SOCKET_EUSERS'                  => array('4.1.0', ''),
                'SOCKET_EDQUOT'                  => array('4.1.0', ''),
                'SOCKET_ESTALE'                  => array('4.1.0', ''),
                'SOCKET_EREMOTE'                 => array('4.1.0', ''),
                'SOCKET_EDISCON'                 => array('4.1.0', ''),
                'SOCKET_SYSNOTREADY'             => array('4.1.0', ''),
                'SOCKET_VERNOTSUPPORTED'         => array('4.1.0', ''),
                'SOCKET_NOTINITIALISED'          => array('4.1.0', ''),
                'SOCKET_HOST_NOT_FOUND'          => array('4.1.0', ''),
                'SOCKET_TRY_AGAIN'               => array('4.1.0', ''),
                'SOCKET_NO_RECOVERY'             => array('4.1.0', ''),
                'SOCKET_NO_DATA'                 => array('4.1.0', ''),
                'SOCKET_NO_ADDRESS'              => array('4.1.0', ''),
                'SOL_TCP'                        => array('4.1.0', ''),
                'SOL_UDP'                        => array('4.1.0', ''),
            );
            $constants = array_merge(
                $constants,
                $version4
            );
        }
        if ((null == $version ) || ('5' == $version)) {
            $version5 = array(
                'TCP_NODELAY'                    => array('5.2.7', ''),
            );
            $constants = array_merge(
                $constants,
                $version5
            );
        }

        return $constants;
    }

}
