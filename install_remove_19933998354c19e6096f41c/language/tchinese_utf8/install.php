<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright   The XOOPS project http://www.xoops.org/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU General Public License (GPL)
 * @package     installer
 * @since       2.3.0
 * @author      Haruki Setoyama  <haruki@planewave.org>
 * @author      Kazumi Ono <webmaster@myweb.ne.jp>
 * @author      Skalpa Keo <skalpa@xoops.org>
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @author      dugris <dugris@frxoops.org>
 * @version     $Id: install.php 3768 2009-10-23 08:37:41Z wishcraft $
 */

// _LANGCODE: tw
// _CHARSET : UTF-8
// Translator: 點兩下電腦工作室 http://ck2tw.net/

define( "SHOW_HIDE_HELP", "顯示/隱藏 說明資訊" );

// License
define('LICENSE_NOT_WRITEABLE', '通用公共許可證 %s，<br/><font style="colour:#ff0000">請設定 ../include/license.php 屬性為「可寫入」</font>');
define('LICENSE_IS_WRITEABLE', '通用公共許可證 %s');

// Configuration check page
define( "SERVER_API", "Server API" );
define( "PHP_EXTENSION", "%s 延伸套件" );
define( "CHAR_ENCODING", "字符集編碼" );
define( "XML_PARSING", "XML parsing" );
define( "REQUIREMENTS", "基本需求" );
define( "_PHP_VERSION", "PHP 版本" );
define( "RECOMMENDED_SETTINGS", "建議設定" );
define( "RECOMMENDED_EXTENSIONS", "建議啟用的延伸套件" );
define( "SETTING_NAME", "設定名稱" );
define( "RECOMMENDED", "推薦" );
define( "CURRENT", "目前" );
define( "RECOMMENDED_EXTENSIONS_MSG", "這些延伸套件不是一般用戶必須安裝和啟用的，但是有些功能需要這些延伸套件才能使用（例如多字節語言或 RSS 支援等），因此，推薦安裝和啟用這些延伸套件。" );
define( "NONE", "無" );
define( "SUCCESS", "完成" );
define( "WARNING", "注意" );
define( "FAILED", "失敗" );

// Titles (main and pages)
define( "XOOPS_INSTALL_WIZARD", "XOOPS 安裝精靈" );

define( "LANGUAGE_SELECTION", "選擇語言" );
define( "LANGUAGE_SELECTION_TITLE", "選擇語言");        // L128
define( "INTRODUCTION", "介紹" );
define( "INTRODUCTION_TITLE", "歡迎使用 XOOPS 安裝精靈，請按提示進行安裝。" );        // L0
define( "CONFIGURATION_CHECK", "設定檢查" );
define( "CONFIGURATION_CHECK_TITLE", "檢查你的伺服器設定" );
define( "PATHS_SETTINGS", "路徑設定" );
define( "PATHS_SETTINGS_TITLE", "路徑設定" );
define( "DATABASE_CONNECTION", "資料庫連接設定" );
define( "DATABASE_CONNECTION_TITLE", "資料庫連接設定" );
define( "DATABASE_CONFIG", "資料庫設定" );
define( "DATABASE_CONFIG_TITLE", "資料庫設定" );
define( "CONFIG_SAVE", "儲存設定" );
define( "CONFIG_SAVE_TITLE", "儲存設定" );
define( "TABLES_CREATION", "建立資料表" );
define( "TABLES_CREATION_TITLE", "資料表建立" );
define( "INITIAL_SETTINGS", "初始設定" );
define( "INITIAL_SETTINGS_TITLE", "請輸入初始設定" );
define( "DATA_INSERTION", "新增資料" );
define( "DATA_INSERTION_TITLE", "新增資料到資料庫" );
define( "WELCOME", "歡迎使用 XOOPS" );
define( "WELCOME_TITLE", "歡迎進入 XOOPS 網站" );        // L0


// Settings (labels and help text)
define( "XOOPS_PATHS", "XOOPS 實際路徑" );
define( "XOOPS_URLS", "XOOPS 虛擬路徑" );

define("XOOPS_ROOT_PATH_LABEL","XOOPS 實際路徑：");
define("XOOPS_ROOT_PATH_HELP","XOOPS 根目錄的實際路徑，結尾不要加'/'");

define( "XOOPS_LIB_PATH_LABEL", "XOOPS 函式庫（library directory）" );
define( "XOOPS_LIB_PATH_HELP", "XOOPS 函式庫（library directory）的實際路徑，結尾不要加'/'。安全起見，建議將該資料夾轉移到 " . XOOPS_ROOT_PATH_LABEL . " 以外。");
define( "XOOPS_DATA_PATH_LABEL", "XOOPS 資料文件" );
define( "XOOPS_DATA_PATH_HELP", "XOOPS 資料文件（屬性可寫）的絕對實際路徑，結尾不要加'/'。安全起見，建議將該資料夾轉移到 " . XOOPS_ROOT_PATH_LABEL . "之外。" );

define( "XOOPS_URL_LABEL", "XOOPS 虛擬路徑(URL)：" ); // L56
define( "XOOPS_URL_HELP", "造訪（ XOOPS ）網站的網址，結尾不要加'/'" ); // L58

define( "LEGEND_CONNECTION", "資料庫伺服器連接設定" );
define( "LEGEND_DATABASE", "資料庫" ); // L51

define( "DB_HOST_LABEL", "資料庫主機名稱：" );    // L27
define( "DB_HOST_HELP",  "如果不確定，請使用 <em>localhost</em>。"); // L67
define( "DB_USER_LABEL", "資料庫用戶帳號：" );    // L28
define( "DB_USER_HELP",  "用戶登入資料庫主機並新建資料庫的帳號。"); // L65
define( "DB_PASS_LABEL", "資料庫用戶密碼：" );    // L52
define( "DB_PASS_HELP",  "與資料庫用戶帳號對應的密碼。"); // L68
define( "DB_NAME_LABEL", "資料庫名稱：" );    // L29
define( "DB_NAME_HELP",  "用於安裝 XOOPS 的資料庫名稱，如果不存在，程式將自動新建。"); // L64
define( "DB_CHARSET_LABEL", "資料庫字符集" );
define( "DB_CHARSET_HELP",  "MySQL 支援字符集設定，從而可以採用恰當的規則用於資料儲存和內容比較。");
define( "DB_COLLATION_LABEL", "資料庫連接校對" );
define( "DB_COLLATION_HELP",  "資料庫連接校對是用於字符比較的一套規則。");
define( "DB_PREFIX_LABEL", "資料表前置字串：" );    // L30
define( "DB_PREFIX_HELP",  "用於建立資料表時候的表前置字串，如果不確定，請保持預設值。"); // L63
define( "DB_PCONNECT_LABEL", "資料庫持續連接：" );    // L54
define( "DB_PCONNECT_HELP",  "建議虛擬主機用戶不要選取。"); // L69
define("DB_DATABASE_LABEL","選擇要使用的資料庫類型");

define( "LEGEND_ADMIN_ACCOUNT", "管理員帳號設定" );
define("ADMIN_LOGIN_LABEL","網站管理員帳號：");
define("ADMIN_EMAIL_LABEL","網站管理員郵件：");
define("ADMIN_PASS_LABEL","網站管理員密碼：");
define("ADMIN_CONFIRMPASS_LABEL","確認管理員密碼：");

// Buttons
define( "BUTTON_PREVIOUS", "上一步" ); // L42
define( "BUTTON_NEXT", "下一步" ); // L47

// Messages
define( "XOOPS_FOUND", "%s OK" );
define( "CHECKING_PERMISSIONS", "確認文件和資料夾權限…" ); // L82
define( "IS_NOT_WRITABLE", "資料夾 %s 屬性唯讀" ); // L83
define( "IS_WRITABLE", "資料夾 %s 屬性可寫入" ); // L84

define( "XOOPS_PATH_FOUND", "路徑 OK" );

define( "READY_CREATE_TABLES", "沒有搜尋到資料表。<br />安裝精靈將會新建 XOOPS 系統所需的資料表<br />點選 <em>下一步</em> 執行此操作。" );
define( "XOOPS_TABLES_FOUND", "資料表已存在。<br />點選 <em>下一步</em> 繼續進行安裝" ); // L131
define( "XOOPS_TABLES_CREATED", "XOOPS 系統資料表新建成功。<br />點選 <em>下一步</em> 繼續進行安裝。" );
define( "READY_INSERT_DATA", "安裝程式將會新增預設資料到資料庫中。" );
define( "READY_SAVE_MAINFILE", "安裝程式將會把指定的設定儲存到 <em>mainfile.php</em>中。<br />點選 <em>下一步</em> 執行存檔。" );
define( "SAVED_MAINFILE", "儲存設定到 mainfile.php 中" );
define( "SAVED_MAINFILE_MSG", "XOOPS安裝精靈將會把這些設定寫到 <em>mainfile.php</em>檔案中。 點選 <em>下一步</em> 繼續進行安裝。" );
define( "DATA_ALREADY_INSERTED", "資料庫中已有資料。<br />點選 <em>下一步</em> 繼續進行安裝。" );
define( "DATA_INSERTED", "新增初始資料到資料庫中。<br />點選 <em>下一步</em> 繼續進行安裝。" );


// %s is database name
define( "DATABASE_CREATED", "資料庫 %s 寫入成功！" ); // L43
// %s is table name
define( "TABLE_NOT_CREATED", "無法建立資料表 %s" ); // L118
define( "TABLE_CREATED", "資料表 %s 寫入成功 " ); // L45
define( "ROWS_INSERTED", "成功寫入 %d 筆資料到資料表 %s 中" ); // L119
define( "ROWS_FAILED", " %d 筆資料寫入到 %s 資料表時失敗" ); // L120
define( "TABLE_ALTERED", "資料表 %s 更新成功 "); // L133
define( "TABLE_NOT_ALTERED", "資料表 %s 更新失敗"); // L134
define( "TABLE_DROPPED", "資料表 %s 刪除成功 "); // L163
define( "TABLE_NOT_DROPPED", "資料表 %s 刪除失敗"); // L164

// Error messages
define( "ERR_COULD_NOT_ACCESS", "無法讀取指定資料夾，請確認是否存在並且設定屬性為可讀。" );
define( "ERR_NO_XOOPS_FOUND", "無法找到指定資料夾。" );
define( "ERR_INVALID_EMAIL", "無效的電子郵件" ); // L73
define( "ERR_REQUIRED", "必填資料。" ); // L41
define( "ERR_PASSWORD_MATCH", "兩次輸入的密碼不一致。" );
define( "ERR_NEED_WRITE_ACCESS", "下列資料夾屬性必須為可讀寫：<br />(UNIX/LINUX 系統設定為 666、MacOS 系統設定為 777、WinOS 系統去掉只讀屬性)。" );
define( "ERR_NO_DATABASE", "無法新增資料庫，請聯絡伺服器管理員查詢詳細訊息。" ); // L31
define( "ERR_NO_DBCONNECTION", "無法連接到資料庫伺服器。" ); // L106
define( "ERR_WRITING_CONSTANT", "%s 設定失敗。" ); // L122

define( "ERR_COPY_MAINFILE", "無法將 mainfile.dist.php 的內容複製到 mainfile.php 中" );
define( "ERR_WRITE_MAINFILE", "無法寫入 mainfile.php。請檢查文件權限後重試。");
define( "ERR_READ_MAINFILE", "無法讀取 mainfile.php。" );

define( "ERR_INVALID_DBCHARSET", "字符集 '%s' 不支援。" );
define( "ERR_INVALID_DBCOLLATION", "連結校對 '%s' 不支援。" );
define( "ERR_CHARSET_NOT_SET", "未能設定 XOOPS 資料庫的預設字符集。" );


define("_INSTALL_CHARSET", "UTF-8");

define( "SUPPORT", "支援");

define( "LOGIN", "驗證");
define( "LOGIN_TITLE", "驗證");
define( "USER_LOGIN", "管理員登入" );
define( "USERNAME", "帳號 :");
define( "PASSWORD", "密碼 :");

define( "ICONV_CONVERSION", "字符集轉換");
define( "ZLIB_COMPRESSION", "zlib壓縮");
define( "IMAGE_FUNCTIONS", "圖片功能");
define( "IMAGE_METAS", "圖片資訊（exif）");

define( "ADMIN_EXIST", "管理員帳號已存在，<br />點選 <strong>下一步</strong> 進行下一步驟");

define( "CONFIG_SITE", "網站設定" );
define( "CONFIG_SITE_TITLE", "網站設定" );
define( "MODULES", "安裝模組" );
define( "MODULES_TITLE", "安裝模組" );
define( "THEME", "選擇佈景" );
define( "THEME_TITLE", "選擇預設佈景" );

define( "INSTALLED_MODULES", "模組已安裝<br />請點選 <strong>下一步</strong> 繼續安裝");
define( "NO_MODULES_FOUND", "模組不存在<br />請點選 <strong>下一步</strong> 繼續安裝");
define( "NO_INSTALLED_MODULES", "模組安裝失敗<br />請點選 <strong>下一步</strong> 繼續安裝");

define( "THEME_NO_SCREENSHOT", "找不到縮圖");

define( "IS_VALOR", " => ");

// password message
define( "PASSWORD_LABEL", "密碼強度：");
define( "PASSWORD_DESC", "未輸入密碼");
define( "PASSWORD_GENERATOR", "密碼產生器");
define( "PASSWORD_GENERATE", "產生密碼");
define( "PASSWORD_COPY", "複製");

define( "PASSWORD_VERY_WEAK", "超差");
define( "PASSWORD_WEAK", "差");
define( "PASSWORD_BETTER", "一般");
define( "PASSWORD_MEDIUM", "中等");
define( "PASSWORD_STRONG", "強");
define( "PASSWORD_STRONGEST", "強強");
?>