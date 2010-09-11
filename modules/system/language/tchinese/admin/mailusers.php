<?php
// $Id: mailusers.php 2411 2008-11-14 21:01:07Z julionc $
// _LANGCODE: tw
// _CHARSET : UTF-8
// Translator: 點兩下電腦工作室 http://ck2tw.net/

//%%%%%%	Admin Module Name  MailUsers	%%%%%
define("_AM_DBUPDATED",_MD_AM_DBUPDATED);

//%%%%%%	mailusers.php 	%%%%%
define("_AM_SENDTOUSERS","傳送給哪些會員：");
define("_AM_SENDTOUSERS2","傳送給：");
define("_AM_GROUPIS","所屬群組（選用）");
define("_AM_TIMEFORMAT", "（日期格式 yyyy-mm-dd，選用）");
define("_AM_LASTLOGMIN","在此日期之後曾經登入過的會員");
define("_AM_LASTLOGMAX","在此日期之後從未登入過的會員");
define("_AM_REGDMIN","在此日期之後註冊的會員");
define("_AM_REGDMAX","在此日期之前註冊的會員");
define("_AM_IDLEMORE","超過X天沒有登入過本站的會員（選用）");
define("_AM_IDLELESS","最近X天內曾經登入過本站的會員（選用）");
define("_AM_MAILOK","只有傳送給願意接受本站通知的會員（選用）");
define("_AM_INACTIVE","只有傳送給未啟動的會員（選用）");
define("_AMIFCHECKD", "如果您選擇本項，上面所有的及以私人訊息均會被忽略");
define("_AM_MAILFNAME","寄件人姓名（只有用於電子郵件）");
define("_AM_MAILFMAIL","寄件人電子郵件（只有用於電子郵件）");
define("_AM_MAILSUBJECT","主題");
define("_AM_MAILBODY","內文");
define("_AM_MAILTAGS","可用標示：");
define("_AM_MAILTAGS1","{X_UID} 將顯示會員id");
define("_AM_MAILTAGS2","{X_UNAME} 將顯示會員名稱");
define("_AM_MAILTAGS3","{X_UEMAIL} 將顯示會員電子郵件");
define("_AM_MAILTAGS4","{X_UACTLINK} 將顯示會員的啟動連結");
define("_AM_SENDTO","傳送到");
define("_AM_EMAIL","電子郵件");
define("_AM_PM","私人訊息");
define("_AM_SENDMTOUSERS", "電子郵件群寄");
define("_AM_SENT", "已傳送會員");
define("_AM_SENTNUM", "%s - %s (共: %s 位會員)");
define("_AM_SENDNEXT", "下一步");
define("_AM_NOUSERMATCH", "沒有符合的會員");
define("_AM_SENDCOMP", "私人訊息傳送成功。");

?>