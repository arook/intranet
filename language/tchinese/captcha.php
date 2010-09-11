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
defined('XOOPS_ROOT_PATH') or die('�T��s��');

// _LANGCODE: tw
// _CHARSET : UTF-8
// Translator: �I��U�q���u�@�� http://ck2tw.net/
define("_CAPTCHA_CAPTION", "�T�{�X");
define("_CAPTCHA_INVALID_CODE", "�����T���T�{�X�I");
define("_CAPTCHA_TOOMANYATTEMPTS", "�z���~���ƤӦh�I");
define("_CAPTCHA_MAXATTEMPTS", "�z�̦h�i�H���աG%d ��");
// For image mode
define("_CAPTCHA_RULE_IMAGE", "��J�Ϥ��W���r��");
define("_CAPTCHA_RULE_CASESENSITIVE", "�Ϥ��j�p�g");
define("_CAPTCHA_RULE_CASEINSENSITIVE", "���Ϥ��j�p�g");
define("_CAPTCHA_REFRESH", "�p�G�ݤ��M�����I���Ϥ����s��z");
// For text mode
define("_CAPTCHA_RULE_TEXT", "��J�B�⦡�����G");

/**
 * Error defines
*/
//define('_CAPTCHA_LOADFILEERROR', 'Error: Could not load file %u in file %s at line %s. ');
define('_CAPTCHA_LOADFILEERROR', '���~�G�L�k���J�ɮ� %u �ɮפ� %s �C %s�C');
?>