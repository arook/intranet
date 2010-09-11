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
	
if($submit=="修改"){
if($form_mode=="form1"){
	  $q4=implode("|", $q4);
	  $q12=implode("|", $q12);
	  $q20=implode("|", $q20);
	  }
	  $form = array($q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,
	  $q9,$q10,$q11,$q12,$q13,$q14,$q15,$q16,
	  $q17,$q18,$q19,$q20,$q21,$q22,$q23,$q24,
	  $q25,$q26,$q27,$q28,$q29,$q30,$q31,$q32,$q33,$q34
	  );
	  $comma_form = implode(",", $form);

$query_update = "update expense set ";
if($img){
$query_update .= "img_name = '".$apply_form."_".$img_name."',";
}
if($file_type){
$zyx = implode(",", $file_type);
$query_update .= "file_type = '".$zyx."',";
}
$query_update .= "apply_change = ".$apply_change.",";
$query_update .= "apply_area = '".$apply_area."',";
$query_update .= "apply_fee = '".substr($apply_fee,0,4)."',";
$query_update .= "apply_fee_item = '".substr($apply_fee,4,3)."',";
$query_update .= "apply_y = '".$apply_y."',";
$query_update .= "apply_m = '".$apply_m."',";
$query_update .= "apply_dept = '".$apply_dept."',";
$query_update .= "fee_amount = '".$fee_amount."',";
$query_update .= "factory = '".$factory."',";
$query_update .= "factory_other = '".$factory_other."',";
$query_update .= "ps = '".$ps."',";
$query_update .= "fee_type = '".$fee_type."',";
if($form_mode){
$query_update .= "form_mode = '".$form_mode."',";
}
$query_update .= "form_info = '".$comma_form."'";
$query_update .= " where nu = '".$nu."'";
//echo $query_update;
$result_update = mysql_query($query_update);
if($result_update){
		if (file_exists("dataimg/".$apply_form."_".$img_name)) {
		$error="名稱重複，無法重複設定";
		}
		if($error){
		echo "<script language='JavaScript'>";
		echo "alert('".$error."');";
		echo "history.back();";
		echo "</script>";
		} else {
		copy($img , "dataimg/".$apply_form."_".$img_name);
		}
	}
?>
<link href="style.css" rel="stylesheet" type="text/css">
<img src="images/title.gif" width="400" height="35"> <br>
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td colspan="2"><p><FONT 
                        size=3>您好，歡迎進入費用/設備申請登錄作業系統。</FONT></p>
      <hr></td>
  </tr>
  <tr> 
    <td colspan="2"><font color="#FF0000" size="3">修改成功! 您這次作業的修改號碼為</font><font color="#FF0000">: 
      <font size="3"><?echo $apply_form;?></font></font></td>
  </tr>
  <tr> 
    <td height="60" colspan="2" class="fg1"><strong>費用/設備申請狀況如下:</strong></td>
  </tr>
  <tr> 
    <td colspan="2"><table width="92%" border="0" align="right" cellpadding="0" cellspacing="4">
        <tr>
          <td width="14%"> 申請日期</td>
          <td width="86%"><?echo $apply_date?></td>
        </tr>
        <tr> 
          <td>申請地區</td>
          <td><?if($apply_area=="T"){echo "台灣";}
		  else if ($apply_area=="S"){echo "深圳";}?></td>
        </tr>
        <!--- <tr> 
          <td>申請費用</td>
          <td><?if($apply_fee!=$apply_fee_bat){?>
		  <?$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$apply_fee_bat."'");
			$row_sel = mysql_fetch_array($pro_sel);
			echo "<s><font color=#FF0000>".$row_sel[fee_name]."</font></s>";
			}?>
		  <?$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$apply_fee."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[fee_name];?></td>
        </tr>
        <tr> 
          <td>費用細目</td>
          <td><?if($apply_fee_item!=$apply_fee_item_bat){?>
		  <?$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$apply_fee_bat."' and item_nu = '".$apply_fee_item_bat."'");
			$row_sel = mysql_fetch_array($pro_sel);
			echo "<s><font color=#FF0000>".$row_sel[item_name]."</font></s>";
			}?>
		  <?$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$apply_fee."' and item_nu = '".$apply_fee_item."'");
			$row_sel = mysql_fetch_array($pro_sel);
			echo $row_sel[item_name];?></td>
        </tr> --->
		<tr> 
          <td>申請費用<br>費用細目</td>
          <td><?if($apply_fee!=$apply_fee_bat and $apply_fee_item!=$apply_fee_item_bat){?>
		  <?$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$apply_fee_bat."' and item_nu = '".$apply_fee_item_bat."'");
			$row_sel = mysql_fetch_array($pro_sel);
			echo "<s><font color=#FF0000>".$row_sel[fee_name]." - ".$row_sel[item_name]."</font></s>";
			}?>
			<?$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".substr($apply_fee,0,4)."' and item_nu = '".substr($apply_fee,4,3)."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[fee_name]." - ".$row_sel[item_name];
	$ff=$row_sel[fee_name];
	$ii=$row_sel[item_name];?></td>
        </tr>
        <tr> 
          <td>產生月份</td>
          <td><?echo $apply_y."/".$apply_m;?></td>
        </tr>
        <tr> 
          <td>申請部門</td>
          <td><?if($apply_dept!=$apply_dept_bat){echo "<s><font color=#FF0000>".$apply_dept_bat."</font></s>";}?> <?$query_dept = mysql_query("select dept_name from ozaki_dept where dept_head=".substr($apply_dept,0,1)." and dept_bot=".substr($apply_dept,1,1));
	  $row_dept = mysql_fetch_array($query_dept);
	  echo $row_dept[dept_name];?></td>
        </tr>
        <tr> 
          <td>申請人</td>
          <td><?if($apply_fee_name!=$apply_fee_name_bat){echo "<s><font color=#FF0000>".$apply_fee_name_bat."</font></s>";}?> <?echo $apply_fee_name?></td>
        </tr>
        <tr> 
          <td>申請金額</td>
          <td><?if($fee_type!=$fee_type_bat){echo "<s><font color=#FF0000>".$fee_type_bat."</font></s>";}?><?if($fee_amount!=$fee_amount_bat){echo "<s><font color=#FF0000>".$fee_amount_bat."</font></s>";}?>  <?echo $fee_type." $".$fee_amount?></td>
        </tr>
        <tr>
          <td>供應廠商</td>
          <td><?if($factory!=$factory_bat){
		  $pro_sel = mysql_query ("select * from factory_list where factory_code = '".$factory_bat."'");
	while ($row_sel = mysql_fetch_array($pro_sel)) {
	echo "<s><font color=#FF0000>".$row_sel[factory_short_name]."</font></s>";}
		}?>
		  <?$pro_sel = mysql_query ("select * from factory_list where factory_code = '".$factory."'");
	while ($row_sel = mysql_fetch_array($pro_sel)) {
	echo $row_sel[factory_short_name];}?><?echo $factory_other?></td>
        </tr>
        <tr> 
          <td>費用詳述/備註</td>
          <td><?echo $ps?></td>
        </tr>
		<tr> 
          <td>主管確認</td>
          <td><?echo $approv;?></td>
        </tr>
        <tr> 
          <td>財務審核</td>
          <td><?echo $deve_state;?></td>
        </tr>
        <tr> 
          <td colspan="2"></td>
        </tr>
		<tr>
		  <td></td>
		  <td><IMG onclick="location.href('result.php?apply_y=<?echo $apply_y?>&apply_m=<?echo $apply_m?>');" height=22 hspace=10 src="images/back3.gif" border=0></td>
  		</tr> 
      </table></td>
  </tr>
  <tr> 
    <td width="550" align="right"><hr align="left" width="95%" noshade> </td>
    <td align="right">
	  <?include("inc/query.inc.php");?>
	</td>
  </tr>
</table>
<?}?>
<?
}
CloseTable();
echo "<br />";
include_once(XOOPS_ROOT_PATH."/footer.php");
?>
<?mysql_close();?>
