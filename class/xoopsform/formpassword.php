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
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @author          John Neill <catzwolf@xoops.org>
 * @version         $Id: formpassword.php 3295 2009-07-01 02:26:05Z beckmi $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

/**
 * Password Field
 *
 * @author 		Kazumi Ono <onokazu@xoops.org>
 * @author 		Taiwen Jiang <phppp@users.sourceforge.net>
 * @author 		John Neill <catzwolf@xoops.org>
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/ 
 * @package 	kernel
 * @subpackage 	form
 * @access 		publicm
 */
class XoopsFormPassword extends XoopsFormElement
{
    /**
     * Size of the field.
     *
     * @var int
     * @access private
     */
    var $_size;
    
    /**
     * Maximum length of the text
     *
     * @var int
     * @access private
     */
    var $_maxlength;
    
    /**
     * Initial content of the field.
     *
     * @var string
     * @access private
     */
    var $_value;
    
    /**
     * Cache password with browser. Disabled by default for security consideration
     * Added in 2.3.1
     *
     * @var boolean
     * @access public
     */
    var $autoComplete = false;
    
    /**
     * Constructor
     *
     * @param string $caption Caption
     * @param string $name "name" attribute
     * @param int $size Size of the field
     * @param int $maxlength Maximum length of the text
     * @param string $value Initial value of the field.
     *                                           <strong>Warning:</strong> this is readable in cleartext in the page's source!
     * @param bool $autoComplete To enable autoComplete or browser cache
     */
    function XoopsFormPassword($caption, $name, $size, $maxlength, $value = '', $autoComplete = false)
    {
        $this->setCaption($caption);
        $this->setName($name);
        $this->_size = intval($size);
        $this->_maxlength = intval($maxlength);
        $this->setValue($value);
        $this->autoComplete = ! empty($autoComplete);
    }
    
    /**
     * Get the field size
     *
     * @return int
     */
    function getSize()
    {
        return $this->_size;
    }
    
    /**
     * Get the max length
     *
     * @return int
     */
    function getMaxlength()
    {
        return $this->_maxlength;
    }
    
    /**
     * Get the "value" attribute
     *
     * @param bool $encode To sanitizer the text?
     * @return string
     */
    function getValue($encode = false)
    {
        return $encode ? htmlspecialchars($this->_value, ENT_QUOTES) : $this->_value;
    }
    
    /**
     * Set the initial value
     *
     * @patam $value    string
     */
    function setValue($value)
    {
        $this->_value = $value;
    }
    
    /**
     * Prepare HTML for output
     *
     * @return string HTML
     */
    function render()
    {
        return '<input type="password" name="' . $this->getName() . '" id="' . $this->getName() . '" size="' . $this->getSize() . '" maxlength="' . $this->getMaxlength() . '" value="' . $this->getValue() . '"' . $this->getExtra() . ' ' . ($this->autoComplete ? '' : 'autocomplete="off" ') . '/>';
    }
}

?>