<?php
// $Id: admin.php 3397 2009-08-02 05:02:25Z wishcraft $
// _LANGCODE: tw
// _CHARSET : UTF-8
// Translator: 點兩下電腦工作室 http://ck2tw.net/

define("_PROFILE_AM_FIELD", "欄位");
define("_PROFILE_AM_FIELDS", "欄位");
define("_PROFILE_AM_CATEGORY", "類別");
define("_PROFILE_AM_STEP", "註冊步驟");

define("_PROFILE_AM_SAVEDSUCCESS", "%s 儲存成功 ");
define("_PROFILE_AM_DELETEDSUCCESS", "%s 刪除成功 ");
define("_PROFILE_AM_RUSUREDEL", "確定要刪除 %s");
define("_PROFILE_AM_FIELDNOTCONFIGURABLE", "該欄位不可編輯");

define("_PROFILE_AM_ADD", "增加");
define("_PROFILE_AM_EDIT", "修改");
define("_PROFILE_AM_TYPE", "欄位類型");
define("_PROFILE_AM_VALUETYPE", "值類型");
define("_PROFILE_AM_NAME", "名稱");
define("_PROFILE_AM_TITLE", "標題");
define("_PROFILE_AM_DESCRIPTION", "描述");
define("_PROFILE_AM_REQUIRED", "必需");
define("_PROFILE_AM_MAXLENGTH", "最大長度");
define("_PROFILE_AM_WEIGHT", "順序");
define("_PROFILE_AM_DEFAULT", "預設值");
define("_PROFILE_AM_NOTNULL", "非空");

define("_PROFILE_AM_ARRAY", "數組");
define("_PROFILE_AM_EMAIL", "電子郵件");
define("_PROFILE_AM_INT", "整型");
define("_PROFILE_AM_TXTAREA", "本文區");
define("_PROFILE_AM_TXTBOX", "本文框");
define("_PROFILE_AM_URL", "URL");
define("_PROFILE_AM_OTHER", "其他");
define("_PROFILE_AM_FLOAT", "Floating Point");
define("_PROFILE_AM_DECIMAL", "Decimal Number");
define("_PROFILE_AM_UNICODE_ARRAY", "Unicode Array");
define("_PROFILE_AM_UNICODE_EMAIL", "Unicode Email");
define("_PROFILE_AM_UNICODE_TXTAREA", "Unicode Text Area");
define("_PROFILE_AM_UNICODE_TXTBOX", "Unicode Text field");
define("_PROFILE_AM_UNICODE_URL", "Unicode URL");

define("_PROFILE_AM_PROF_VISIBLE_ON", "在該群組的資料中顯示");
define("_PROFILE_AM_PROF_VISIBLE_FOR", "資料對該群組可見");
define("_PROFILE_AM_PROF_VISIBLE", "欄位可見性");
define("_PROFILE_AM_PROF_EDITABLE", "編輯用戶資料");
define("_PROFILE_AM_PROF_REGISTER", "在註冊表單中顯示");
define("_PROFILE_AM_PROF_SEARCH", "搜尋用戶資料");
define("_PROFILE_AM_PROF_ACCESS", "造訪用戶資料");
define("_PROFILE_AM_PROF_ACCESS_DESC", 
        "<ul>" .
        "<li>被造訪用戶屬於管理員群組: 如果目前用戶所在的某個組被允許造訪管理員群組，則目前用戶有權造訪，否則</li>" .
        "<li>被造訪用戶屬於一個或多個自訂群組（非管理員、 會員、 訪客）：如果目前用戶所在的某個組被允許造訪待造訪用戶的某個自訂群組，則目前用戶有權造訪，否則</li>" .
        "<li>被造訪用戶屬於會員群組：如果目前用戶所在的某個組被允許造訪普通會員群組，則目前用戶有權造訪</li>" .
        "</ul>");

define("_PROFILE_AM_FIELDVISIBLE", "欄位");
define("_PROFILE_AM_FIELDVISIBLEFOR", " 允許 ");
define("_PROFILE_AM_FIELDVISIBLEON", " 查看 ");
define("_PROFILE_AM_FIELDVISIBLETOALL", "- 任何人");
define("_PROFILE_AM_FIELDNOTVISIBLE", "不能查看");

define("_PROFILE_AM_CHECKBOX", "複選框");
define("_PROFILE_AM_GROUP", "單選群組");
define("_PROFILE_AM_GROUPMULTI", "複選群組");
define("_PROFILE_AM_LANGUAGE", "語言選擇");
define("_PROFILE_AM_RADIO", "單選按鈕");
define("_PROFILE_AM_SELECT", "單選");
define("_PROFILE_AM_SELECTMULTI", "複選");
define("_PROFILE_AM_TEXTAREA", "本文區");
define("_PROFILE_AM_DHTMLTEXTAREA", "DHTML本文區");
define("_PROFILE_AM_TEXTBOX", "本文區");
define("_PROFILE_AM_TIMEZONE", "時區");
define("_PROFILE_AM_YESNO", "單選 是/否");
define("_PROFILE_AM_DATE", "日期");
define("_PROFILE_AM_AUTOTEXT", "自動本文");
define("_PROFILE_AM_DATETIME", "日期和時間");
define("_PROFILE_AM_LONGDATE", "長日期格式");

define("_PROFILE_AM_ADDOPTION", "新增選項");
define("_PROFILE_AM_REMOVEOPTIONS", "刪除選項");
define("_PROFILE_AM_KEY", "關鍵字");
define("_PROFILE_AM_VALUE", "值");

// User management
define("_PROFILE_AM_EDITUSER", "編輯用戶");
define("_PROFILE_AM_SELECTUSER", "選擇用戶");
define("_PROFILE_AM_ADDUSER","新增用戶");
define("_PROFILE_AM_THEME","主題");
define("_PROFILE_AM_RANK","等級");
define("_PROFILE_AM_USERDONEXIT","用戶不存在！");
define("_PROFILE_MA_USERLEVEL", "用戶級別");

define("_PROFILE_MA_ACTIVE", "正式用戶");
define("_PROFILE_MA_INACTIVE", "未啟動");
define("_PROFILE_AM_USERCREATED", "成功建立新用戶");

define("_PROFILE_AM_CANNOTDELETESELF", "不能刪除自己的帳號，請進入帳號管理刪除帳號");
define("_PROFILE_AM_CANNOTDELETEADMIN", "不能刪除管理者帳號");

define("_PROFILE_AM_NOSELECTION", "沒有選擇帳號");
define("_PROFILE_AM_USER_ACTIVATED", "帳號已啟動");
define("_PROFILE_AM_USER_DEACTIVATED", "帳號已停用");
define("_PROFILE_AM_USER_NOT_ACTIVATED", "錯誤: 帳號啟動失敗");
define("_PROFILE_AM_USER_NOT_DEACTIVATED", "錯誤: 帳號停用失敗");

define("_PROFILE_AM_STEPNAME", "步驟名稱");
define("_PROFILE_AM_STEPORDER", "步驟排序");
define("_PROFILE_AM_STEPSAVE", "該步驟是否有資料需儲存");
define("_PROFILE_AM_STEPINTRO", "步驟描述");

?>
