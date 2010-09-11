<?
include("header.php");

//檢查右區塊是否開啟************************
if ($xoopsConfig['startpage'] == $xoopsModule->dirname()){
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
<a href='http://www.ozaki.com.tw/virage/' target="_blink">Virage test site</a><BR><BR>
<a href='../expense/' target="_blink">費用/設備申請</a><BR><BR>
<a href='http://www.ozaki.com.tw/intranet/modules/apply/'>產品申購單</a><BR><BR>
<a href='http://www.ozaki.com.tw/intranet/modules/forms/' target=>企劃部單據作業系統</a><BR><BR>
<a href='javascript:history.back()'>上一頁</a><BR>
<?
}
CloseTable();
echo "<br />";
include_once(XOOPS_ROOT_PATH."/footer.php");
?>