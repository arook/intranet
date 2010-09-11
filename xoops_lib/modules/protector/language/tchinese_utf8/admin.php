<?php

// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','權限');
define('_MD_A_MYMENU_MYPREFERENCES','偏好設定');

// index.php
define("_AM_TH_DATETIME","時間");
define("_AM_TH_USER","使用者");
define("_AM_TH_IP","IP");
define("_AM_TH_AGENT","瀏覽器");
define("_AM_TH_TYPE","類型");
define("_AM_TH_DESCRIPTION","描述");

define( "_AM_TH_BADIPS" , '黑名單 IP 範圍<br /><br /><span style="font-weight:normal;">將每組 IP 寫成一行<br />空白代表所有 IP 皆允許</span>' ) ;

define( "_AM_TH_GROUP1IPS" , '管理員 IP 範圍<br /><br /><span style="font-weight:normal;">將每組 IP 寫成一行<br />192.168. 等同於 192.168.*<br />空白代表所有 IP 皆允許</span>' ) ;

define( "_AM_LABEL_COMPACTLOG" , "壓縮紀錄檔" ) ;
define( "_AM_BUTTON_COMPACTLOG" , "壓縮之！" ) ;
define( "_AM_JS_COMPACTLOGCONFIRM" , "重複的紀錄將會被移除（如相同IP或類型）" ) ;
define( "_AM_LABEL_REMOVEALL" , "移除所有紀錄" ) ;
define( "_AM_BUTTON_REMOVEALL" , "移除全部！" ) ;
define( "_AM_JS_REMOVEALLCONFIRM" , "所有紀錄已完全移除，真的可以嗎？" ) ;
define( "_AM_LABEL_REMOVE" , "移除紀錄檢查：" ) ;
define( "_AM_BUTTON_REMOVE" , "移除！" ) ;
define( "_AM_JS_REMOVECONFIRM" , "確定要移除了嗎？" ) ;
define( "_AM_MSG_IPFILESUPDATED" , "IP紀錄檔已更新" ) ;
define( "_AM_MSG_BADIPSCANTOPEN" , "黑名單紀錄檔無法開啟！" ) ;
define( "_AM_MSG_GROUP1IPSCANTOPEN" , "管理員 IP 範圍設定檔無法被開啟！" ) ;
define( "_AM_MSG_REMOVED" , "紀錄已移除" ) ;
define( "_AM_FMT_CONFIGSNOTWRITABLE" , "請將這些設定檔的資料夾設為可寫入：%s" ) ;


// prefix_manager.php
define( "_AM_H3_PREFIXMAN" , "資料庫前綴字串管理員" ) ;
define( "_AM_MSG_DBUPDATED" , "資料庫更新成功！" ) ;
define( "_AM_CONFIRM_DELETE" , "所有資料都會被刪除，確定嗎？" ) ;
define( "_AM_TXT_HOWTOCHANGEDB" , "假如您要變更前綴字串，<br />請自行編輯 %s/mainfile.php<br /><br />define('XOOPS_DB_PREFIX', '<b>%s</b>');" ) ;


// advisory.php
define("_AM_ADV_NOTSECURE","不安全");

define("_AM_ADV_TRUSTPATHPUBLIC","假如您可以觀看一張圖片 -NG- 或者連結傳回正常的頁面，您的  XOOPS_TRUST_PATH 沒有放對位置。XOOPS_TRUST_PATH 最佳的位置是在網頁目錄之外。假如您沒辦法這麼做，那麼建議您將 .htaccess (DENY FROM ALL) 檔放到 XOOPS_TRUST_PATH 下，這是次佳的解決辦法。");
define("_AM_ADV_TRUSTPATHPUBLICLINK","檢查在 TRUST_PATH 中的 PHP 檔是不公開的（它必須是 404,403 或 500 error）");
define("_AM_ADV_REGISTERGLOBALS","此設定將招致各種攻擊。<br />假如您可以放置、編修 .htaccess...");
define("_AM_ADV_ALLOWURLFOPEN","此設定將允許攻擊者在遠端伺服器執行程式。<br />只有管理員可以變更此設定項目。<br />假如您是管理員，請編輯 php.ini 或者 httpd.conf。<br /><b>httpd.conf 範例：<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />不然，就要求您的網站管理員協助處理。");
define("_AM_ADV_USETRANSSID","您的 Session ID 將會呈現在連結標籤等。<br />For preventing from session hi-jacking, add a line into .htaccess in XOOPS_ROOT_PATH.<br /><b>php_flag session.use_trans_sid off</b>");
define("_AM_ADV_DBPREFIX","此設定將招致「隱碼攻擊」（SQL Injections）。<br />別忘了在此模組的偏好設定調整為「Force sanitizing *」。");
define("_AM_ADV_LINK_TO_PREFIXMAN","前往資料庫前綴字串管理員");
define("_AM_ADV_MAINUNPATCHED","您應該要根據 README 中寫的改法去編輯您的 mainfile.php");
define("_AM_ADV_DBFACTORYPATCHED","Your databasefactory is ready for DBLayer Trapping anti-SQL-Injection");
define("_AM_ADV_DBFACTORYUNPATCHED","Your databasefactory is not ready for DBLayer Trapping anti-SQL-Injection. Some patches are required.");

define("_AM_ADV_SUBTITLECHECK","假如 Protector 運作正常就檢查之");
define("_AM_ADV_CHECKCONTAMI","污染");
define("_AM_ADV_CHECKISOCOM","Isolated Comments");



?>
