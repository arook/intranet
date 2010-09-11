<?
include("header.php");

//檢查右區塊是否開啟************************
//if ($xoopsConfig['startpage'] == $xoopsModule->dirname()){
if ($xoopsConfig['startpage'] == "ozaki_product_db"){
	$xoopsOption['show_rblock'] = 1;
	include(XOOPS_ROOT_PATH."/header.php");
	make_cblock();
	echo "<br />";
}else{
	$xoopsOption['show_rblock'] = 0;
	include(XOOPS_ROOT_PATH."/header.php");
}
//*******************************************
global $xoopsUser, $xoopsDB;

if ( $xoopsUser ){
	//取得使用者名稱及群組 id
	$uid = $xoopsUser->getVar("uid");
}

OpenTable();
$query="SELECT uname,pass FROM ".$xoopsDB->prefix("users")." WHERE uid='$uid'";
//echo $query."<BR>";
$result=$xoopsDB->query($query,0);
if($xoopsDB->getRowsNum($result)!=0){
	$rs=$xoopsDB->fetchArray($result);
?>
<table width="700" border="0" align="center">
  <tr>
    <td></td>
  </tr>
  <tr>
    <td class="12">歡迎進入OZAKI產品資料庫系統，請選擇進入~</td>
  </tr>
</table>
<table width="700" border="0" align="center">
  <tr bgcolor="#666666">
    <td colspan="3"><div align="center" class="14"><font color="#FFFFFF"><strong>Welcome</strong></font></div></td>
  </tr>
  <tr align="left" valign="middle" class="12">
    <td><div align="right"></div>
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr align="left" valign="middle" class="12">
    <td width="257"><div align="right"></div></td>
    <td width="175" bgcolor="#666666" class="14"><div align="center" class="14"><font color="#FFFFFF"><strong><a href="main.php"style="text-decoration:none; color:white
	"。>PI號碼登錄</a></strong></font></div></td>
    <td width="250">&nbsp;</td>
  </tr>
  <tr align="left" valign="middle" class="12">
    <td>&nbsp;</td>
    <td class="14"><div align="center"><strong></strong></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr align="left" valign="middle" class="12">
    <td>&nbsp;</td>
    <td bgcolor="#666666" class="14"><div align="center"><font color="#FFFFFF"><strong><a href="main.php?submit=search"style="text-decoration:none; color:white
	"。>PI 號碼查詢</a></strong></font></div></td>
    <td>&nbsp;</td>
  </tr>
</table>
<?
}
CloseTable();
echo "<br />";
include_once(XOOPS_ROOT_PATH."/footer.php");
?>
<?mysql_close();?>