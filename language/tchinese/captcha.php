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
 *  Xoops Language
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      Xoops Captcha Language
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id: captcha.php 3152 2009-04-18 13:30:57Z catzwolf $
 */
defined('XOOPS_ROOT_PATH') or die('禁止存取');

// _LANGCODE: tw
// _CHARSET : UTF-8
// Translator: 點兩下電腦工作室 http://ck2tw.net/
define("_CAPTCHA_CAPTION", "確認碼");
define("_CAPTCHA_INVALID_CODE", "不正確的確認碼！");
define("_CAPTCHA_TOOMANYATTEMPTS", "您錯誤次數太多！");
define("_CAPTCHA_MAXATTEMPTS", "您最多可以嘗試：%d 次");
// For image mode
define("_CAPTCHA_RULE_IMAGE", "輸入圖片上的字母");
define("_CAPTCHA_RULE_CASESENSITIVE", "區分大小寫");
define("_CAPTCHA_RULE_CASEINSENSITIVE", "不區分大小寫");
define("_CAPTCHA_REFRESH", "如果看不清楚請點擊圖片重新整理");
// For text mode
define("_CAPTCHA_RULE_TEXT", "輸入運算式的結果");

/**
 * Error defines
*/
//define('_CAPTCHA_LOADFILEERROR', 'Error: Could not load file %u in file %s at line %s. ');
define('_CAPTCHA_LOADFILEERROR', '錯誤：無法載入檔案 %u 檔案中 %s 列 %s。');
?>