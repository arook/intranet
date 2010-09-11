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
<img src="images/title.gif" width="400" height="35"> <br>
<form action="confirm.php" enctype="multipart/form-data" method="post" onclick="return CheckAction()">
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td colspan="2"><p><FONT 
                        size=3>您好，歡迎進入費用/設備申請登錄作業系統。</FONT></p>
      <hr>
	  <?
      //Form1
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
	  //echo $comma_form;?>
	  </td>
  </tr>
  <tr> 
    <td colspan="2"><?
    $zyx = implode(",", $file_type);
	$Year = eregi_replace("0", "", date(y));
	$nu_search = mysql_query("select apply_nu from expense order by nu desc") or die("");
	$row_nu = mysql_fetch_array($nu_search);
	$insert_num = $row_nu[apply_nu]+1;
	$show_num=str_pad($insert_num, 4, "0", STR_PAD_LEFT);
	$apply_form=$Year.$apply_area.$apply_type.$apply_fee.$apply_fee_item.$show_num;
	if($img){copy($img, "tmp/".$apply_form."_".$img_name);}?></td>
  </tr>
  <tr> 
    <td height="60" colspan="2" class="fg1"><strong>費用/設備申請狀況如下:</strong></td>
  </tr>
  <tr> 
    <td colspan="2"><table width="92%" border="0" align="right" cellpadding="0" cellspacing="4">
		<tr><input type="hidden" value="<?echo $show_num?>" name="apply_nu">
		<input type="hidden" value="<?echo $apply_form?>" name="apply_form">
		<?if($img){?><input type="hidden" value="<?echo $img_name?>" name="img_real"><?}?>
          <td width="14%"> 登錄號碼</td>
          <td width="86%"><font color="#FF0000"><?echo $apply_form?></font></td>
        </tr>
        <tr>
          <td width="14%"> 申請日期</td><input type="hidden" value="<?echo $apply_date?>" name="apply_date">
          <td width="86%"><?echo $apply_date?></td>
        </tr>
        <tr> 
          <td>申請地區</td><input type="hidden" value="<?echo $apply_area?>" name="apply_area">
          <td><?if($apply_area=="T"){echo "台灣";}
		  else if ($apply_area=="S"){echo "深圳";}?></td>
        </tr>
        <tr> 
          <td>申請費用<br>費用細目</td><input type="hidden" value="<?echo $apply_fee?>" name="apply_fee">
          <td>
	<?$pro_sel = mysql_query ("select sing_target,item_name,fee_name from expense_fee where fee_nu = '".substr($apply_fee,0,4)."' and item_nu = '".substr($apply_fee,4,3)."'");
	$row_sel = mysql_fetch_array($pro_sel);
	//echo "<input type=hidden value=$row_sel[sing_target] name=apply_fee>";
	echo $row_sel[fee_name]." - ".$row_sel[item_name];?></td>
        </tr>
        <!--- <tr> 
          <td>費用細目</td><input type="hidden" value="<?echo $apply_fee_item?>" name="apply_fee_item">
          <td><?//$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$apply_fee."' and item_nu = '".$apply_fee_item."'");
	//$row_sel = mysql_fetch_array($pro_sel);
	//echo $row_sel[item_name]?></td>
        </tr> --->
        <tr> 
          <td>產生月份</td><input type="hidden" value="<?echo $apply_y?>" name="apply_y">
		  <input type="hidden" value="<?echo $apply_m?>" name="apply_m">
          <td><?echo $apply_y."/".$apply_m;?></td>
        </tr>
        <tr> 
          <td>申請部門</td><input type="hidden" value="<?echo $apply_dept.$apply_dept_ext?>" name="apply_dept">
          <td>
		  <?echo $apply_dept.$apply_dept_ext;?>
		  <!-- <?$query_dept = mysql_query("select dept_name from ozaki_dept where dept_head=".substr($apply_dept,0,1)." and dept_bot=".substr($apply_dept,1,1));
	  $row_dept = mysql_fetch_array($query_dept);
	  echo $row_dept[dept_name];?> --></td>
        </tr>
        <tr> 
          <td>申請人</td><input type="hidden" value="<?echo $apply_fee_name?>" name="apply_fee_name">
          <td><?echo $apply_fee_name?></td>
        </tr>
		<tr> 
          <td>歸屬部門</td><input type="hidden" value="<?echo $apply_fee_dept.$apply_fee_dept_ext?>" name="apply_fee_dept">
          <td>
		  <?echo $apply_fee_dept.$apply_fee_dept_ext;?>
		  <!-- <?$query_dept = mysql_query("select dept_name from ozaki_dept where dept_head=".substr($apply_fee_dept,0,1)." and dept_bot=".substr($apply_fee_dept,1,1));
	  $row_dept = mysql_fetch_array($query_dept);
	  echo $row_dept[dept_name];?> --></td>
        </tr>
        <tr> 
          <td>申請金額</td><input type="hidden" value="<?echo $fee_type?>" name="fee_type">
		  <input type="hidden" value="<?echo $fee_amount?>" name="fee_amount">
          <td><?echo $fee_type." $".$fee_amount?></td>
        </tr>
        <tr> <input type="hidden" value="<?echo $factory?>" name="factory">
          <td>供應廠商</td><input type="hidden" value="<?echo $factory_other?>" name="factory_other">
          <td><?$pro_sel = mysql_query ("select * from factory_list where factory_code = '".$factory."'");
	while ($row_sel = mysql_fetch_array($pro_sel)) {echo $row_sel[factory_short_name];}?><?echo $factory_other?></td>
        </tr>
<?
INCLUDE("form/$form_mode.inc.php");
	  ?>
		
        <tr> 
          <td>費用詳述/備註</td><input type="hidden" value="<?echo $ps?>" name="ps">
          <td><?echo $ps?></td>
        </tr>
		<?if($img){?>
		  <tr> 
            <td>檢附文件</td>
            <td><a target="_BLANK" href="tmp/<?echo $apply_form."_".$img_name;?>">預覽</a></td>
          </tr>
		  <tr> 
            <td>文件所屬類型</td><input type="hidden" value="<?echo $zyx?>" name="file_type">
            <td><?ECHO $zyx?></td>
          </tr>
		<?}?>
        <tr>
		  <td></td> 
          <td><input type="submit" name="submit" value="確定"> </td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td width="550" align="right"><hr align="left" width="95%" noshade> </td>
    <td align="right">
	  <?include("check_root.php");
	  INCLUDE("inc/query.inc.php");?>
	</td>
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
