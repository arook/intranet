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
 * @subpackage      Xoops Auth Language
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id: auth.php 3152 2009-04-18 13:30:57Z catzwolf $
 */
defined('XOOPS_ROOT_PATH') or die('禁止存取');

// _LANGCODE: tw
// _CHARSET : UTF-8
// Translator: 點兩下電腦工作室 http://ck2tw.net/

define('_AUTH_MSG_AUTH_METHOD',"使用 %s 認證方法");
define('_AUTH_LDAP_EXTENSION_NOT_LOAD','PHP 延伸 LDAP 沒有載入（請確認PHP設定文件php.ini）');
define('_AUTH_LDAP_SERVER_NOT_FOUND',"不能連接到伺服器");
define('_AUTH_LDAP_USER_NOT_FOUND',"會員 %s 不在目錄伺服器（%s），該目錄伺服器位於%s");
define('_AUTH_LDAP_CANT_READ_ENTRY',"不能讀取條目%s");
define('_AUTH_LDAP_XOOPS_USER_NOTFOUND',"對不起，在 XOOPS 資料庫沒有發現用於連接的相應用戶訊息：%s <br />" . "請確認用戶訊息資料，或者啟用自動設定用戶規則");
define('_AUTH_LDAP_START_TLS_FAILED', "無法建立 TLS 連接");			
		
?>