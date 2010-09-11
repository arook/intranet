<?php
$xoops_admin_menu_js = "
function popUpL1() {
    shutdown();
    popUp('L1',true);}
function popUpL2() {
    shutdown();
    popUp('L2',true);}
function popUpL3() {
    shutdown();
    popUp('L3',true);}
function popUpL4() {
    shutdown();
    popUp('L4',true);}
";

$xoops_admin_menu_ml = "
    setleft('L1',105);
    settop('L1',150);
    setleft('L2',105);
    settop('L2',165);
    setleft('L3',105);
    settop('L3',180);
    setleft('L4',105);
    settop('L4',195);
";

$xoops_admin_menu_sd = "
    popUp('L1',false);
    popUp('L2',false);
    popUp('L3',false);
    popUp('L4',false);
";

$xoops_admin_menu_ft[1] = "<a href='".XOOPS_URL."/modules/system/admin.php' title='系統管理' onmouseover='moveLayerY(\"L1\", currentY, event) ; popUpL1(); ' ><img class='admin_layer_img' src='".XOOPS_URL."/modules/system/images/system_slogo.png' alt='' /></a><br />";
$xoops_admin_menu_ft[2] = "<a href='".XOOPS_URL."/modules/pm/admin/admin.php' title='站內私人訊息' onmouseover='moveLayerY(\"L2\", currentY, event) ; popUpL2(); ' ><img class='admin_layer_img' src='".XOOPS_URL."/modules/pm/images/logo.png' alt='' /></a><br />";
$xoops_admin_menu_ft[3] = "<a href='".XOOPS_URL."/modules/profile/admin/user.php' title='用戶管理' onmouseover='moveLayerY(\"L3\", currentY, event) ; popUpL3(); ' ><img class='admin_layer_img' src='".XOOPS_URL."/modules/profile/images/logo.png' alt='' /></a><br />";
$xoops_admin_menu_ft[4] = "<a href='".XOOPS_URL."/modules/protector/admin/index.php' title='Xoops Protector 防護模組' onmouseover='moveLayerY(\"L4\", currentY, event) ; popUpL4(); ' ><img class='admin_layer_img' src='".XOOPS_URL."/modules/protector/module_icon.php' alt='' /></a><br />";

$xoops_admin_menu_dv = "
<div id='L1' style='position: absolute; visibility: hidden; z-index:1000;' >
<table class='admin_layer' cellpadding='0' cellspacing='0'>
<tr><th nowrap='nowrap'>系統管理</th></tr>
<tr><td class='even' nowrap='nowrap'>
<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=banners' onmouseover='popUpL1' >廣告管理</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=blocksadmin' onmouseover='popUpL1' >區塊管理</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=groups' onmouseover='popUpL1' >群組管理</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=images' onmouseover='popUpL1' >圖片管理</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=modulesadmin' onmouseover='popUpL1' >模組管理</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=preferences' onmouseover='popUpL1' >一般設定</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=smilies' onmouseover='popUpL1' >表情管理</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=userrank' onmouseover='popUpL1' >註冊會員等級</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=users' onmouseover='popUpL1' >編輯會員</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=findusers' onmouseover='popUpL1' >尋找會員</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=mailusers' onmouseover='popUpL1' >電子郵件群寄</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=avatars' onmouseover='popUpL1' >圖像管理</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=tplsets' onmouseover='popUpL1' >樣板管理</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=comments' onmouseover='popUpL1' >評論管理</a><br />

<div style='margin-top: 5px; font-size: smaller; text-align: right;'><a href='#' onmouseover='shutdown();'>[關閉]</a></div></td></tr><tr><th style='font-size: smaller; text-align: left;'><img class='admin_layer_img' src='".XOOPS_URL."/modules/system/images/system_slogo.png' alt='' /><br /><strong>"._VERSION.":</strong> 2<br /><strong>"._DESCRIPTION.":</strong> 管理、設定網站的核心選項</th></tr></table></div>

<div id='L2' style='position: absolute; visibility: hidden; z-index:1000;' >
<table class='admin_layer' cellpadding='0' cellspacing='0'>
<tr><th nowrap='nowrap'>站內私人訊息</th></tr>
<tr><td class='even' nowrap='nowrap'>
<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/pm/admin/admin.php' onmouseover='popUpL2' >模組首頁</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/pm/admin/prune.php' onmouseover='popUpL2' >清理資料</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=preferences&amp;op=showmod&amp;mod=2' onmouseover='popUpL2' >基本參數設定</a><br />

<div style='margin-top: 5px; font-size: smaller; text-align: right;'><a href='#' onmouseover='shutdown();'>[關閉]</a></div></td></tr><tr><th style='font-size: smaller; text-align: left;'><img class='admin_layer_img' src='".XOOPS_URL."/modules/pm/images/logo.png' alt='' /><br /><strong>"._VERSION.":</strong> 1.02<br /><strong>"._DESCRIPTION.":</strong> 用戶之間的私人訊息模組</th></tr></table></div>

<div id='L3' style='position: absolute; visibility: hidden; z-index:1000;' >
<table class='admin_layer' cellpadding='0' cellspacing='0'>
<tr><th nowrap='nowrap'>用戶管理</th></tr>
<tr><td class='even' nowrap='nowrap'>
<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/profile/admin/user.php' onmouseover='popUpL3' >用戶</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/profile/admin/category.php' onmouseover='popUpL3' >分類</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/profile/admin/field.php' onmouseover='popUpL3' >欄位</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/profile/admin/step.php' onmouseover='popUpL3' >註冊步驟</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/profile/admin/permissions.php' onmouseover='popUpL3' >權限</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=preferences&amp;op=showmod&amp;mod=3' onmouseover='popUpL3' >基本參數設定</a><br />

<div style='margin-top: 5px; font-size: smaller; text-align: right;'><a href='#' onmouseover='shutdown();'>[關閉]</a></div></td></tr><tr><th style='font-size: smaller; text-align: left;'><img class='admin_layer_img' src='".XOOPS_URL."/modules/profile/images/logo.png' alt='' /><br /><strong>"._VERSION.":</strong> 1.55<br /><strong>"._DESCRIPTION.":</strong> 管理用戶訊息的模組</th></tr></table></div>

<div id='L4' style='position: absolute; visibility: hidden; z-index:1000;' >
<table class='admin_layer' cellpadding='0' cellspacing='0'>
<tr><th nowrap='nowrap'>Xoops Protector 防護模組</th></tr>
<tr><td class='even' nowrap='nowrap'>
<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/protector/admin/index.php' onmouseover='popUpL4' >防護中心</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/protector/admin/index.php?page=advisory' onmouseover='popUpL4' >安全建議</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/protector/admin/index.php?page=prefix_manager' onmouseover='popUpL4' >前綴字串管理員</a><br />

<img src='".XOOPS_URL."/images/pointer.gif' width='8' height='8' alt='' />&nbsp;<a href='".XOOPS_URL."/modules/system/admin.php?fct=preferences&amp;op=showmod&amp;mod=4' onmouseover='popUpL4' >基本參數設定</a><br />

<div style='margin-top: 5px; font-size: smaller; text-align: right;'><a href='#' onmouseover='shutdown();'>[關閉]</a></div></td></tr><tr><th style='font-size: smaller; text-align: left;'><img class='admin_layer_img' src='".XOOPS_URL."/modules/protector/module_icon.php' alt='' /><br /><strong>"._VERSION.":</strong> 3.4<br /><strong>"._DESCRIPTION.":</strong> 此模組可保護您的XOOPS網站免於遭受各種攻擊，例如Dos阻斷攻擊、隱碼攻擊及各種污染</th></tr></table></div>

<script language='JavaScript' type='text/javascript'>
<!--
moveLayers();
loaded = 1;
// -->
</script>
";

?>