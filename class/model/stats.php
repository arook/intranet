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
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      model
 * @since           2.3.0
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id: stats.php 3575 2009-09-05 19:35:11Z trabis $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

/**
 * Object stats handler class.
 *
 * @author Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright The XOOPS project http://www.xoops.org/
 *
 * {@link XoopsObjectAbstract}
 */

class XoopsModelStats extends XoopsModelAbstract
{
    /**
     * count objects matching a condition
     *
     * @param object $criteria {@link CriteriaElement} to match
     * @return int count of objects
     */
    function getCount($criteria = null)
    {
        $field = '';
        $groupby = false;
        if (isset($criteria) && is_subclass_of($criteria, 'criteriaelement')) {
            if ($criteria->groupby != '') {
                $groupby = true;
                $field = $criteria->groupby . ", ";
            }
        }
        $sql = "SELECT {$field} COUNT(*) FROM `{$this->handler->table}`";
        if (isset($criteria) && is_subclass_of($criteria, 'criteriaelement')) {
            $sql .= ' ' . $criteria->renderWhere();
            $sql .= $criteria->getGroupby();
        }
        $result = $this->handler->db->query($sql);
        if (!$result) {
            return 0;
        }
        if ($groupby == false) {
            list ($count) = $this->handler->db->fetchRow($result);
            return $count;
        } else {
            $ret = array();
            while (list ($id, $count) = $this->handler->db->fetchRow($result)) {
                $ret[$id] = $count;
            }
            return $ret;
        }
    }

    /**
     * get counts matching a condition
     *
     * @param object $criteria {@link CriteriaElement} to match
     * @return array of conunts
     */
    function getCounts($criteria = null)
    {
        $ret = array();
        $sql_where = '';
        $limit = null;
        $start = null;
        $groupby_key = $this->handler->keyName;
        if (isset($criteria) && is_subclass_of($criteria, "criteriaelement")) {
            $sql_where = $criteria->renderWhere();
            $limit = $criteria->getLimit();
            $start = $criteria->getStart();
            if ($groupby = $criteria->groupby) {
                $groupby_key = $groupby;
            }
        }
        $sql = "SELECT {$groupby_key}, COUNT(*) AS count"
             . " FROM `{$this->handler->table}`"
             . " {$sql_where}"
             . " GROUP BY {$groupby_key}";
        if (!$result = $this->handler->db->query($sql, $limit, $start)) {
            return $ret;
        }
        while (list ($id, $count) = $this->handler->db->fetchRow($result)) {
            $ret[$id] = $count;
        }
        return $ret;
    }
}

?>