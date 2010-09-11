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
	$uname = $xoopsUser->getVar("uname");
}

OpenTable();
$query="SELECT uname,pass FROM ".$xoopsDB->prefix("users")." WHERE uid='$uid'";
//echo $query."<BR>";
$result=$xoopsDB->query($query,0);
if($xoopsDB->getRowsNum($result)!=0){
	$rs=$xoopsDB->fetchArray($result);

include("check_root.php");
?>
<?
$k=0;
$RE=0;
$BK=0;
$GN=0;
$BL=0;
$show_query="select * from expense where ";
if($apply_y && $apply_m){
$show_query.="apply_y='".$apply_y."' and apply_m='".$apply_m."' and ";
}
$show_query.="apply_fee_name='".$uname."' ";

//echo $show_query;and approv = 'P'
$show_re = mysql_query($show_query) or die(mysql_error());
while ($row_re = mysql_fetch_array($show_re)) {
	$rowdata_re[$k++] = $row_re;
}
for ($i=0;$i<count($rowdata_re);$i++) {
if($rowdata_re[$i][deve_state]=="RE"){$RE++;}elseif($rowdata_re[$i][deve_state]=="BL"){$BL++;}elseif($rowdata_re[$i][deve_state]=="BK"){$BK++;}elseif($rowdata_re[$i][deve_state]=="GN"){$GN++;}
}
?>
<img src="images/title.gif" width="400" height="35"> <br>
<form name="form1" method="post" action="number.htms">
  <table width="700" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td colspan="2"><FONT 
                        size=3>您好，歡迎進入費用/設備申請登錄作業系統。</FONT> <hr></td>
    </tr>
    <tr> 
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2" class="fg1"><strong>以下為符合查詢條件的費用/設備申請項目: 審核中<? echo $BL?>筆；通過<? echo $GN?>筆；作廢<? echo $RE?>筆；已領<? echo $BK?>筆</strong></td>
    </tr>
    <tr> 
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2" align="right"> <table width="98%" border="0" cellpadding="2" cellspacing="0" bgcolor="#666666" >
          <tr valign="middle" bgcolor="#cccccc"> 
            <td width="60" height="20">登錄號碼</td>
            <td width="65" height="20" align="center">申請日期 </td>
            <td width="35" height="20" align="center">申請<br>
              地區</td>
            <td width="50" height="20" align="center">申請<br>
              費用</td>
            <td width="70" height="20" align="center">費用細目</td>
            <td width="40" height="20" align="center">產生<br>
              月份</td>
            <td width="60" height="20" align="center">申請部門</td>
            <td width="60" height="20" align="center">申請人</td>
            <td width="60" height="20" align="center">申請金額</td>
            <td width="35" height="20" align="center">供應<br>
              廠商</td>
			<td width="40" height="20" align="center">主管確認</td>  
            <td width="40" height="20" align="center">財務審核</td>
            <td width="35" height="20" align="center">編輯</td>
          </tr>
<? for ($i=0;$i<count($rowdata_re);$i++) {
?>
          <tr class="bg5"> 
            <td><? echo $rowdata_re[$i][apply_form]?><? if($rowdata_re[$i][apply_change]>0){echo "_".$rowdata_re[$i][apply_change];}?></td>
            <td align="center"><? echo $rowdata_re[$i][apply_date]?></td>
            <td align="center"><? if($rowdata_re[$i][apply_area]=="T"){echo "台灣";}
		  else if ($rowdata_re[$i][apply_area]=="S"){echo "深圳";}?></td>
            <td align="center"><? $pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$rowdata_re[$i][apply_fee]."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[fee_name]?></td>
            <td align="center"><? $pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$rowdata_re[$i][apply_fee]."' and item_nu = '".$rowdata_re[$i][apply_fee_item]."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[item_name]?></td>
            <td align="center"><? echo $rowdata_re[$i][apply_y]?>-<? echo $rowdata_re[$i][apply_m]?></td>
            <td align="center"><? $query_dept = mysql_query("select dept_name from ozaki_dept where dept_head=".substr($rowdata_re[$i][apply_dept],0,1)." and dept_bot=".substr($rowdata_re[$i][apply_dept],1,1));
	  $row_dept = mysql_fetch_array($query_dept);
	  echo $row_dept[dept_name];
	  $ad = $row_dept[dept_name];?></td>
	  		<td align="center"><? echo $rowdata_re[$i][apply_fee_name]?></td>
            <td align="center"><? echo $rowdata_re[$i][fee_type]?>  <? echo $rowdata_re[$i][fee_amount]?> </td>
            <td align="center"><? $pro_sel = mysql_query ("select * from factory_list where factory_code = '".$rowdata_re[$i][factory]."'");
				$row_sel = mysql_fetch_array($pro_sel);
				echo $row_sel[factory_short_name]?><? echo $rowdata_re[$i][factory_other]?></td>
            <td align="center"><? if($rowdata_re[$i][approv]=="W"){?>等待確認<?}elseif($rowdata_re[$i][approv]=="P"){?>已確認<?}elseif($rowdata_re[$i][approv]=="F"){?>X<?}?></td>
			<td align="center"><? $query=mysql_query("select * from expense_fee_deve_state where sht_name = '".$rowdata_re[$i][deve_state]."'");
		while ($row = mysql_fetch_array($query))
		{?>
		<? echo $row[name];?>
		<?}?></td>
            <td align="center"><a href="cancle.php?nu=<? echo $rowdata_re[$i][nu]?>">作廢</a> <a href="modify.php?nu=<? echo $rowdata_re[$i][nu]?>">修改</a> </td>
          </tr>
          <tr> 
            <td colspan=11 bgcolor="#666666"></td>
          </tr>
<?}?>
        </table>
        
        <br>
      </td>
    </tr>
    <tr> 
      <td width="550" align="right">
<hr align="left" width="95%" noshade></td>
      <td align="right"><?include("inc/query.inc.php")?></td>
    </tr>
  </table>
</form>
<?
}
CloseTable();
echo "<br />";
include_once(XOOPS_ROOT_PATH."/footer.php");
?>
<?mysql_close();?>
