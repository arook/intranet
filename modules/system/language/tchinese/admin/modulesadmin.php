<?php
// $Id: modulesadmin.php 2411 2008-11-14 21:01:07Z julionc $
// _LANGCODE: tw
// _CHARSET : UTF-8
// Translator: 點兩下電腦工作室 http://ck2tw.net/

//%%%%%%	File Name  modulesadmin.php 	%%%%%
define("_MD_AM_MODADMIN","模組管理區");
define("_MD_AM_MODULE","模組名稱");
define("_MD_AM_VERSION","版本");
define("_MD_AM_LASTUP","最後更新日期／時間");
define("_MD_AM_DEACTIVATED","停用");
define("_MD_AM_ACTION","操作");
define("_MD_AM_DEACTIVATE","停用");
define("_MD_AM_ACTIVATE","啟用");
define("_MD_AM_UPDATE","更新");
define("_MD_AM_DUPEN","資料庫的模組表中有重複條目！");
define("_MD_AM_DEACTED","選定的模組已被停用，現在您可以安全地反安裝此模組。");
define("_MD_AM_ACTED","	選定的模組已啟用！");
define("_MD_AM_UPDTED","選定的模組已更新！");
define("_MD_AM_SYSNO","系統模組不能停用。");
define("_MD_AM_STRTNO","此模組已設定為預設的首頁，請設定適合您的首頁。");

// added in RC2
define("_MD_AM_PCMFM","請確認：");

// added in RC3
define("_MD_AM_ORDER","順序");
define("_MD_AM_ORDER0","（0 = 隱藏）");
define("_MD_AM_ACTIVE","啟用");
define("_MD_AM_INACTIVE","未啟用");
define("_MD_AM_NOTINSTALLED","沒有安裝");
define("_MD_AM_NOCHANGE","無變化");
define("_MD_AM_INSTALL","安裝");
define("_MD_AM_UNINSTALL","反安裝");
define("_MD_AM_SUBMIT","送出");
define("_MD_AM_CANCEL","取消");
define("_MD_AM_DBUPDATE","資料更新成功！");
define("_MD_AM_BTOMADMIN","返回模組管理區");

// %s represents module name
define("_MD_AM_FAILINS","無法安裝 %s ");
define("_MD_AM_FAILACT","無法啟用 %s ");
define("_MD_AM_FAILDEACT","無法停用 %s ");
define("_MD_AM_FAILUPD","無法更新 %s ");
define("_MD_AM_FAILUNINS","無法反安裝 %s ");
define("_MD_AM_FAILORDER","無法重新排列 %s ");
define("_MD_AM_FAILWRITE","無法寫入主選單。");
define("_MD_AM_ALEXISTS","模組 %s 已存在。");
define("_MD_AM_ERRORSC", "錯誤(s)：");
define("_MD_AM_OKINS","模組 %s 安裝成功。");
define("_MD_AM_OKACT","模組 %s 啟用成功。");
define("_MD_AM_OKDEACT","模組 %s 停用成功。");
define("_MD_AM_OKUPD","模組 %s 更新成功。");
define("_MD_AM_OKUNINS","模組 %s 反安裝成功。");
define("_MD_AM_OKORDER","模組 %s 更改成功。");

define('_MD_AM_RUSUREINS', '點選以下按鈕安裝此模組');
define('_MD_AM_RUSUREUPD', '點選以下按鈕更新此模組');
define('_MD_AM_RUSUREUNINS', '您是否確實想反安裝此模組？');
define('_MD_AM_LISTUPBLKS', '以下區塊將一起更新。<br />選擇要更新的區塊內容（格式）將一起更新。<br />');
define('_MD_AM_NEWBLKS', '新區塊');
define('_MD_AM_DEPREBLKS', '不更新區塊');

// added in 2.3 - julionc
define('_MD_AM_INSTALLING', '正在安裝');
define('_MD_AM_TABLE_RESERVED', '%s 是一個預留資料表！');
define('_MD_AM_CREATE_TABLES', '正在新建資料表…');
define('_MD_AM_TABLE_CREATED', ' %s 新建資料表成功 ');
define('_MD_AM_INSERT_DATA', '&nbsp;&nbsp; 資料已插入到資料表中 %s');
define('_MD_AM_INSERT_DATA_FAILD', ' %s 未能插入到資料庫中');
define('_MD_AM_INSERT_DATA_DONE', '模組資料新增成功 ');
define('_MD_AM_MODULEID', ' 模組 ID：%s');
define('_MD_AM_SQL_FOUND', '在 %s 中發現 SQL 文件');
define('_MD_AM_SQL_NOT_FOUND', '在 %s 中沒有發現 SQL 文件');
define('_MD_AM_SQL_NOT_CREATE', '出錯：未能新建 %s');
define('_MD_AM_SQL_NOT_VALID', '%s 不是可用的 SQL！');

define('_MD_AM_GROUP_ID', ' 群組 ID：%s ');
define('_MD_AM_NAME', ' 名稱：');
define('_MD_AM_VALUE', ' 值：');

/* Templates */
define('_MD_AM_TEMPLATES_ADD', '正在新增樣板…');
define('_MD_AM_TEMPLATES_DELETE', '正在刪除樣板…');
define('_MD_AM_TEMPLATES_UPDATE', '正在更新…');

define('_MD_AM_TEMPLATE_ID', '樣板 ID：%s ');

define('_MD_AM_TEMPLATE_ADD_DATA', '樣板 %s 已新增到資料庫');
define('_MD_AM_TEMPLATE_ADD_ERROR', '錯誤：樣板 %s 沒有新增到資料庫中');
define('_MD_AM_TEMPLATE_COMPILED', '樣板 %s 編譯成功 ');
define('_MD_AM_TEMPLATE_COMPILED_FAILED', '錯誤：樣板 %s 沒有編譯成功 ');
define('_MD_AM_TEMPLATE_DELETE_DATA', '樣板 %s 已從資料庫中刪除');
define('_MD_AM_TEMPLATE_DELETE_DATA_FAILD', '錯誤：樣板 %s 沒有從資料庫中刪除');
define('_MD_AM_TEMPLATE_INSERT_DATA', '樣板 %s 已新增到資料庫中');
define('_MD_AM_TEMPLATE_RECOMPILE', '樣板 %s 重新編譯');
define('_MD_AM_TEMPLATE_RECOMPILE_FAILD', '錯誤：樣板 %s 重新編譯失敗');
define('_MD_AM_TEMPLATE_RECOMPILE_ERROR', '錯誤：不能重新編譯樣板 %s');
define('_MD_AM_TEMPLATE_DELETE_OLD_ERROR', '錯誤：沒有刪除舊的樣板 %s，已放棄更新此文件');
define('_MD_AM_TEMPLATE_UPDATE', '樣板 %s 更新成功 ');
define('_MD_AM_TEMPLATE_UPDATE_ERROR', '錯誤：沒有更新 %s 樣板');

/* Blocks */
define('_MD_AM_BLOCKS_ADD', '正在新增區塊…');
define('_MD_AM_BLOCKS_DELETE', '正在刪除區塊…');
define('_MD_AM_BLOCKS_REBUILD', '正在重建區塊…');

define('_MD_AM_BLOCK_ID', ' 區塊 ID：%s ');

define('_MD_AM_BLOCK_ACCESS', '新增區塊權限');
define('_MD_AM_BLOCK_ACCESS_ERROR', '錯誤：未能新增區塊權限');
define('_MD_AM_BLOCK_ADD', '區塊 %s 已新增');
define('_MD_AM_BLOCK_ADD_ERROR', '錯誤：未能新增區塊 %s 到資料庫中！');
define('_MD_AM_BLOCK_ADD_ERROR_DATABASE', '資料庫錯誤：%s');
define('_MD_AM_BLOCK_CREATED', '區塊 %s 已新建');
define('_MD_AM_BLOCK_DELETE', '區塊 %s 已刪除');
define('_MD_AM_BLOCK_DELETE_DATA', '區塊樣板 %s 已從資料庫中刪除。');
define('_MD_AM_BLOCK_DELETE_ERROR', '錯誤：未能刪除區塊  %s');
define('_MD_AM_BLOCK_DELETE_TEMPLATE_ERROR', '錯誤：未能從資料庫中刪除區塊 %s。');
define('_MD_AM_BLOCK_DEPRECATED', '區塊樣板 %s deprecated ');
define('_MD_AM_BLOCK_DEPRECATED_ERROR', '錯誤：Could not remove deprecated block template.');
define('_MD_AM_BLOCK_UPDATE', '區塊 %s 更新成功 ');

/* Configs */
define('_MD_AM_GONFIG_ID', 'Config ID：%s');
define('_MD_AM_MODULE_DATA_ADD', '正在加入模組設定資料…');
define('_MD_AM_MODULE_DATA_DELETE', '正在刪除模組設定資料…');
define('_MD_AM_MODULE_DATA_UPDATE', '模組資料更新成功 ');

define('_MD_AM_CONFIG_ADD', 'Config option added');
define('_MD_AM_CONFIG_DATA_ADD', 'Config %s added to the database');
define('_MD_AM_CONFIG_DATA_ADD_ERROR', 'ERROR: Could not insert config %s to the database. ');
define('_MD_AM_GONFIG_DATA_DELETE', 'Config data deleted from the database. ');
define('_MD_AM_CONFIG_DATA_DELETE_ERROR', 'ERROR: Could not delete config data from the database');

/* Access */
define('_MD_AM_GROUP_SETTINGS_ADD', '正在設定群組權限…');

define('_MD_AM_GROUP_PERMS_DELETE_ERROR', 'ERROR: Could not delete group permissions ');
define('_MD_AM_GROUP_PERMS_DELETED', 'Group permissions deleted ');

define('_MD_AM_ACCESS_ADMIN_ADD', 'Added admin access right for Group ID %s');
define('_MD_AM_ACCESS_ADMIN_ADD_ERROR', 'ERROR: Could not add admin access right for Group ID %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR', 'Added user access right for Group ID: %s');
define('_MD_AM_ACCESS_USER_ADD_ERROR_ERROR', 'ERROR: Could not add user access right for Group ID: %s');

// execute module specific install script if any
define('_MD_AM_FAILED_EXECUTE', 'Failed to execute %s');
define('_MD_AM_FAILED_SUCESS', '%s executed successfully.');

define('_MD_AM_DELETE_ERROR', 'ERROR: Could not delete %s');
define('_MD_AM_UPDATE_ERROR', 'ERROR: Could not update %s');
define('_MD_AM_DELETE_MOD_TABLES', 'Deleting module tables...');

define('_MD_AM_COMMENTS_DELETE', 'Deleting comments...');
define('_MD_AM_COMMENTS_DELETE_ERROR', 'ERROR: Could not delete comments');
define('_MD_AM_COMMENTS_DELETED', 'Comments deleted');

define('_MD_AM_NOTIFICATIONS_DELETE', 'Deleting notifications...');
define('_MD_AM_NOTIFICATIONS_DELETE_ERROR', 'ERROR: Could not delete notifications');
define('_MD_AM_NOTIFICATIONS_DELETED', 'Notifications deleted');

define('_MD_AM_TABLE_DROPPED', '資料表 %s 刪除成功！');
define('_MD_AM_TABLE_DROPPED_ERROR', '錯誤：不能刪除資料表 %s');
define('_MD_AM_TABLE_DROPPED_FAILDED', 'ERROR: Not allowed to drop table %s !');

?>
