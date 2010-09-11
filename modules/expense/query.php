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

include("check_root.php");
?><SCRIPT LANGUAGE=javascript>
function CheckAction() {
	//if(document.form1.apply_y.value=="0") {
    //   	alert("請輸入年份！");
	//	return false;
    //} else if(document.form1.apply_m.value=="0") {
    //  	alert("請輸入月份！");
	//	return false;
    //}
	
	document.form1.submit();
} 
//-->
</SCRIPT>
<a href="index.php"><img src="images/title.gif" width="400" height="35" border="0"></a> <br>
<form name="form1" method="post" action="result.php">
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
      <td><FONT 
                        size=3>您好，歡迎進入費用/設備申請<strong>查詢</strong>作業系統。</FONT> 
        <hr></td>
  </tr>
  <tr>
    <td><img src="images/step1.gif" width="212" height="20"></td>
  </tr>
  <tr>
    <td> 
      <table width="580" border="0" align="right" cellpadding="0" cellspacing="4">
          <tr> 
            <td width="14%">產生月份</td>
            <td width="86%"><select name="apply_y">
				<option value="0">請選擇</option>
				<?for ($i=2004;$i<=2010;$i++) {
				echo "<option value=$i>$i</option>";
				}?>
				</select>年
				<select name="apply_m"><?echo ?>
				<option value="0">請選擇</option>
				<?for ($i=1;$i<=12;$i++) {
				echo "<option value=".str_pad($i, 2, "0", STR_PAD_LEFT).">".str_pad($i, 2, "0", STR_PAD_LEFT)."</option>";
				}?>				
				</select>月</td>
          </tr>
        </table>

     </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td><img src="images/step2.gif" width="212" height="20"><IMG 
                        onclick="return CheckAction()" height=22 hspace=10 
                        src="images/search.gif" width=51 
                    border=0></td>
  </tr>
  <tr>
      <td><hr align="left" width="95%" noshade><?include("inc/query.inc.php")?></td>
  </tr>
</table> </form>
<?
}
CloseTable();
echo "<br />";
include_once(XOOPS_ROOT_PATH."/footer.php");
?>
<?mysql_close();?>