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
 * @subpackage      Xoops Admin Language
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @version         $Id: admin.php 0000 15/04/2009 16:03:56
 */
defined('XOOPS_ROOT_PATH') or die('禁止存取');

define("_AD_NORIGHT","您沒有權限進入管理區");
define("_AD_ACTION","操作");
define("_AD_EDIT","編輯");
define("_AD_DELETE","刪除");
define("_AD_LASTTENUSERS","最新10位註冊會員");
define("_AD_NICKNAME","暱稱");
define("_AD_EMAIL","電子郵件");
define("_AD_AVATAR","個性頭像");
define("_AD_REGISTERED","註冊日期"); //Registered Date
//define('_AD_PRESSGEN', '這是您首次進入管理區域，請點選下面的按鈕繼續。');
define('_AD_LOGINADMIN', '以管理員身份登入…');
define('_AD_WARNINGINSTALL', '警告提示：%s 這個目錄，已存在！ <br />基於安全考量，請刪除此目錄！');
define('_AD_WARNINGWRITEABLE', '警告提示：%s 這個檔案目前狀態是可寫入！ <br />基於安全考量，請更改屬性，確保檔案不被更改！<br />在Unix與Linux設定檔案屬性為（444），微軟Windows系列，請設定檔案屬性為（唯讀）。');
define('_AD_WARNINGNOTWRITEABLE', '警告提示：%s 這個資料夾目前狀態無法寫入！ <br />請更改資料夾屬性，<br />在Unix與Linux設定檔案屬性為（777），微軟WINDOWS系列，請取消檔案屬性中的（唯讀）設定。');
define('_AD_WARNINGXOOPSLIBINSIDE', '警告提示：基於安全考量，建議將 %s 這個資料夾移到網站根目錄之外！');

?>