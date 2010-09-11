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
<?include("check_root.php");
if($update=="1"){$update_nn = mysql_query("update expense set approv = '".$approv."' where nu = '".$nn."'");}?>

<?
$show_re=mysql_query("select * from expense where nu = '".$nn."'");
$row_re = mysql_fetch_array($show_re);
$form=$row_re[form_mode];
$comma_form=$row_re[form_info];
$file_type=$row_re[file_type];
?>
<SCRIPT LANGUAGE=javascript>
function CheckAction() {
document.form1.submit();
} 
//-->
</SCRIPT>

<form name="form1" method="post" action="sheet.php">
<input type="hidden" name="nn" value="<?echo $nn?>">
<input type="hidden" name="update" value="1">
<img src="images/title.gif" width="400" height="35"> <br>
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="60"> <p><font size="3">費用/設備申請登錄號碼為</font><font color="#000000">: 
        <font size="3"><?echo $row_re[apply_form]?></font></font></p>
      </td>
  </tr>
  <tr>
    <td><font 
                        size=3>費用/設備申請狀況如下:</font> </td>
  </tr>
  <tr>
    <td><table width="92%" border="0" align="right" cellpadding="0" cellspacing="4">
        <tr> 
          <td width="14%"> 申請日期</td>
          <td width="86%"><?echo $row_re[apply_date]?></td>
        </tr>
        <tr> 
          <td>申請地區</td>
          <td><?if($row_re[apply_area]=="T"){echo " 台灣";}else if ($row_re[apply_area]=="S"){echo " 深圳";}?>
		  </td>
        </tr>
        <tr> 
          <td>申請費用</td>
          <td><?$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$row_re[apply_fee]."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[fee_name]?></td>
        </tr>
		<tr> 
          <td>申請細目</td>
          <td><?$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$row_re[apply_fee]."' and item_nu = '".$row_re[apply_fee_item]."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[item_name]?></td>
        </tr>
        <tr> 
          <td>產生月份</td>
          <td><?echo $row_re[apply_y]?>年 <?echo $row_re[apply_m]?>月</td>
        </tr>
        <tr> 
          <td>申請部門</td>
          <td><? echo $row_re[apply_fee_dept]?></td>
        </tr>
        <tr> 
          <td>申請人</td>
          <td><?echo $row_re[apply_fee_name]?></td>
        </tr>
        <tr> 
          <td>申請金額</td>
          <td><?if($row_re[fee_type]=="NT"){echo " 台幣";}
		  elseif($row_re[fee_type]=="RMB"){echo " 人民幣";}
		  elseif($row_re[fee_type]=="HKD"){echo " 港幣";}
		  elseif($row_re[fee_type]=="USD"){echo " 美金";}?>
            (幣別)/ <?echo $row_re[fee_amount]?>(金額)</td>
        </tr>
        <tr> 
          <td>供應廠商</td>
          <td><?$pro_sel = mysql_query ("select * from factory_list ");
				while ($row_sel = mysql_fetch_array($pro_sel)) { 
        		if($row_sel[factory_code]==$row_re[factory]){echo $row_sel[factory_short_name];}
        		}?>
            
            其它<?echo $row_re[factory_other]?></td>
        </tr>
		<?INCLUDE("form/$form.inc.php");?>
		<!--- <tr> 
            <td>檢附文件</td>
            <td><?if($row_re[img_name]){?><a target="_blank" href="dataimg/<?echo $row_re[img_name];?>"><?echo $row_re[img_name];?></a><?}?></td>
        </tr> --->
		<tr> 
          <td></td>
		  <td><?if($row_re[img_name]){?><a target="_blank" href="dataimg/<?echo $row_re[img_name];?>">預覽</a><?}?></td>
		</tr>
        <tr> 
          <td>費用詳述/備註</td>
          <td><?echo $row_re[ps]?></td>
        </tr>
        <tr>
		  <td>主管確認</td>  
          <td><?if($row_re[approv]=="W"){?><select name=approv>
		  <option value="W" <?if($row_re[approv]=="W"){ echo "selected";}?>>等待確認</option>
		  <option value="P" <?if($row_re[approv]=="P"){ echo "selected";}?>>已確認</option>
		  <option value="F" <?if($row_re[approv]=="F"){ echo "selected";}?>>已取消</option>
		  </select><?}elseif($row_re[approv]=="P"){?>已確認
		  <?}elseif($row_re[approv]=="F"){?>已取消<?}?></td>
        </tr>
		<tr>
		  <td>財務審核</td>  
          <td><?if($row_re[deve_state]=="BL"){?>審核中<?}else if($row_re[deve_state]=="RE") {?>作廢<?}else if($row_re[deve_state]=="GN") {?>通過<?}else if($row_re[deve_state]=="BK") {?>已領<?}?></td>
        </tr>
		<tr>
		  <td></td>
		  <td><?if($row_re[approv]=="W"){?><IMG onclick="return CheckAction()" height=22 hspace=10 src="images/search2.gif" border=0><?}?> <IMG onclick="location.href('result2.php?apply_y=<?echo $row_re[apply_y]?>&apply_m=<?echo $row_re[apply_m]?>&apply_fee_dept=<? echo $row_re[apply_fee_dept]?>');" height=22 hspace=10 src="images/back3.gif" border=0></td>
  </tr> 
      </table></td>
  </tr>
    <tr>
      <td><hr align="left" width="95%" noshade><?include("inc/query.inc.php")?></td>
  </tr>

</table>
</FORM>
<?
}
CloseTable();
echo "<br />";
include_once(XOOPS_ROOT_PATH."/footer.php");
?>
<?mysql_close();?>
