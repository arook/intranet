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
 *  Xoops Form Class Elements
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/  
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      form
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @author          John Neill <catzwolf@xoops.org>
 * @version         $Id: formselectlang.php 3295 2009-07-01 02:26:05Z beckmi $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

if (! class_exists('XoopsLists')) {
    xoops_load('xoopslists');
}

if (! class_exists('XoopsFormSelect')) {
    xoops_load('xoopsformselect');
}

/**
 * A select field with available languages
 *
 * @author 		Kazumi Ono <onokazu@xoops.org>
 * @author 		John Neill <catzwolf@xoops.org>
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/ 
 * @package 	kernel
 * @subpackage 	form
 * @access 		public
 */
class XoopsFormSelectLang extends XoopsFormSelect
{
    /**
     * Constructor
     *
     * @param string $caption
     * @param string $name
     * @param mixed $value Pre-selected value (or array of them).
     * 							Legal is any name of a XOOPS_ROOT_PATH."/language/" subdirectory.
     * @param int $size Number of rows. "1" makes a drop-down-list.
     */
    function XoopsFormSelectLang($caption, $name, $value = null, $size = 1)
    {
        $this->XoopsFormSelect($caption, $name, $value, $size);
        $this->addOptionArray(XoopsLists::getLangList());
    }
}

?>