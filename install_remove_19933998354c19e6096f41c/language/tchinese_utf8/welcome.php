<?php
// $Id: welcome.php 3558 2009-09-03 01:55:38Z trabis $
// _LANGCODE: tw
// _CHARSET : UTF-8
// Translator: 點兩下電腦工作室 http://ck2tw.net/

$content .="
<h3>XOOPS介紹</h3>
<p>
    <strong><a href='http://xoops.tnc.edu.tw/' tagert='_blank'>XOOPS</a></strong> 是一個基於 PHP 語言和 MySQL 資料庫開發出來，具有高度可延伸性、物件導向的架站自由軟體。
</p>
<p>
    XOOPS 作為一個成熟的網站開發管理工具，它可以方便的架設管理各類網站，內容管理與界面佈景分離，方便靈活的設計切換不同的表現佈景，成熟的功能模組化機制，有各種豐富多樣的模組可供使用，譬如：新聞發佈、文章管理、討論區、相簿、下載、友情連接、廣告管理、黃頁、線上購物、部落格和維基，具有完善的權限管理機制，可以針對不同用戶群組設定不同權限。
</p>
<p>
    XOOPS 作為理想的 WEB 2.0 架站系統，可以開發各種規模不同類型的社群動態網站、企業入口網站、部落格……等，實現高度自主性管理網站的功能。
</p>
<p>
    自由軟體，遵循 <a href='http://www.gnu.org/copyleft/gpl.html' rel='external'>GNU General Public License (GPL)協議</a>，在此前提下您可以按照自己的需要進行修改。
</p>
<h3>系統需求</h3>
<ul>
    <li>WWW 伺服器 (<a href='http://www.apache.org/' rel='external'>Apache</a>, IIS, Roxen 等)</li>
    <li><a href='http://www.php.net/' rel='external'>PHP</a> 4.3 或更高版本（推薦使用 5.2 或更新版本）</li>
    <li><a href='http://www.mysql.com/' rel='external'>MySQL</a> 資料庫伺服器 3.23.XX 以上版本（推薦使用4.1或更高版本）</li>
</ul>
<h3><strong>安裝前準備</strong></h3>
<ul>
    <li>正確設定 WWW 伺服器，PHP 和資料庫伺服器。</li>
    <li>建立一個用於安裝 XOOPS 的資料庫。</li>
    <li>設定用於登入資料庫的帳號及密碼。</li>
    <li>將下列資料夾與檔案的屬性設定為可寫入 UNIX, Linux（777）；Windows（取消唯讀屬性）： %s</li>
    <li>基於安全考慮，建議您把下列資料夾移到 <a href='http://phpsec.org/projects/guide/3.html' rel='external'>document root（網站根目錄）</a> 路徑之外，並且修改資料夾名稱。%s</li>
    <li>新增資料夾（若此資料夾不存在），並將此資料夾屬性設定為可寫入 UNIX, Linux（777）；Windows（取消唯讀屬性）：%s</li>
    <li>啟用瀏覽器 cookie 及 JavaScript 功能。</li>
</ul>
";
?>