<?php
// $Id: finish.php 2768 2009-02-05 02:40:31Z phppp $
// _LANGCODE: tw
// _CHARSET : UTF-8
// Translator: 點兩下電腦工作室 http://ck2tw.net/

$content .=
"<h3>恭喜，網站安裝成功！</h3>
<p><a href='../index.php'>瀏覽網站首頁</a></p>
<br />
<h3>技術支援：</h3>
<p>
<a href='http://xoops.tnc.edu.tw/' rel='external'>XOOPS 正體中文延伸計畫</a>
|
<a href='http://www.xoops.org/' rel='external'>XOOPS CMS</a>
|
<a href='http://xoops.org.cn/' rel='external'>XOOPS China</a>
</p>
";

$content .=
"<h3>網站安全性提醒</h3>
<p>安裝程式將提醒您「非常重要且必要」的安全性設定，請您務必確認下列的提示已被確實執行：
<div class='confirmMsg'>
請將 <em>mainfile.php</em> 屬性設定為「唯讀」（UNIX、LINUX(444)；Windows(唯讀)）<br />
請將 <em>{$installer_modified}</em> 刪除（如果<em>安裝程式</em>未將安裝目錄自動更名）。
</div>
</p>
";

?>