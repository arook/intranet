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
//apply_nu  apply_date  apply_area  apply_fee  apply_fee_item  apply_y  apply_m  apply_fee_dept  apply_fee_name  fee_type  fee_amount  factory  factory_other  ps  
?>
<link href="style.css" rel="stylesheet" type="text/css">
<a href="index.htm"><img src="images/title.gif" width="400" height="35" border="0"></a> <br>
  <table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
      <td><FONT 
                        size=3>您好，歡迎進入費用/設備申請<strong>登錄</strong>作業系統。</FONT> 
        <hr>
      </td>
  </tr>
  <tr>
      <td>&nbsp;</td>
  </tr>
  <tr>
      <td align="center">
<table width=500>
<tr>
	<td colspan=4>申請類別 : </td>
</tr>
<tr>
	<td>A.一般申請</td>
	<td>B.實物申請</td>
	<td>C.報告申請</td>
	<td>D.專案申請</td>
</tr>
<tr>
	<td valign="top"><a href=apply.php?apply_type=A>一般費用申請表</a><br>
	<a href=apply.php?apply_type=A&form=form3>廠商(A)費用申請表</a><br>
	<a href=apply.php?apply_type=A&form=form2>廠商(B)費用申請表</a></td>
	<td valign="top"><a href=apply.php?apply_type=B>實物申申請表</a></td>
	<td valign="top"><a href=apply.php?apply_type=D&form=form1>交通費申請表</a><br>
	<a href=apply.php?apply_type=D&form=form4>出差申請表</a><br>
	<a href=apply.php?apply_type=D&form=form5>出差報告</a><br>
	<a href=apply.php?apply_type=D>其他</a></td>
	<td valign="top"></td>
</tr>
</table>
		</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td align="right"><IMG 
                        onclick="return CheckAction()" height=22 hspace=10 
                        src="images/sent.gif" width=51 
                    border=0></td>
  </tr>
</table>
<?
}
CloseTable();
echo "<br />";
include_once(XOOPS_ROOT_PATH."/footer.php");
?>
<?mysql_close();?>
