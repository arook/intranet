<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Abstract base class for Database access classes
 *
 * @copyright       The XOOPS project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      database
 * @since           1.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id: database.php 3945 2009-11-27 21:32:57Z trabis $
 */

defined('XOOPS_ROOT_PATH') or die('Restricted access');

/**
 * make sure this is only included once!
 */
if (defined('XOOPS_C_DATABASE_INCLUDED')) {
    return;
}

define('XOOPS_C_DATABASE_INCLUDED', 1);

/**
 * Abstract base class for Database access classes
 *
 * @abstract
 * @author Kazumi Ono <onokazu@xoops.org>
 * @copyright copyright (c) 2000-2003 XOOPS.org
 * @package kernel
 * @subpackage database
 */
class XoopsDatabase
{
    /**
     * Prefix for tables in the database
     *
     * @var string
     */
     var $prefix = '';

     /**
      * reference to a {@link XoopsLogger} object
      *
      * @see XoopsLogger
      * @var object XoopsLogger
      */
     var $logger;

    /**
     * If statements that modify the database are selected
     *
     * @var boolean
     */
    var $allowWebChanges = false;

    /**
     * constructor
     *
     * will always fail, because this is an abstract class!
     */
    function XoopsDatabase()
    {
        // exit('Cannot instantiate this class directly');
    }

    /**
     * assign a {@link XoopsLogger} object to the database
     *
     * @see XoopsLogger
     * @param object $logger reference to a {@link XoopsLogger} object
     */

    function setLogger(&$logger)
    {
        $this->logger = &$logger;
    }

    /**
     * set the prefix for tables in the database
     *
     * @param string $value table prefix
     */
    function setPrefix($value)
    {
        $this->prefix = $value;
    }

    /**
     * attach the prefix.'_' to a given tablename
     *
     * if tablename is empty, only prefix will be returned
     *
     * @param string $tablename tablename
     * @return string prefixed tablename, just prefix if tablename is empty
     */
    function prefix($tablename = '')
    {
        if ($tablename != '') {
            return $this->prefix . '_' . $tablename;
        } else {
            return $this->prefix;
        }
    }
}

/**
 * Only for backward compatibility
 *
 * @deprecated
 */
class Database
{
    function &getInstance()
    {
        $inst =& XoopsDatabaseFactory::getDatabaseConnection();
        return $inst;
    }
}

?>