<?
include("header.php");

//�ˬd�k�϶��O�_�}��************************
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
	//���o�ϥΪ̦W�٤θs�� id
	$uid = $xoopsUser->getVar("uid");
	$umail = $xoopsUser->getVar("email");
}

OpenTable();
$query="SELECT uname,pass FROM ".$xoopsDB->prefix("users")." WHERE uid='$uid'";
//echo $query."<BR>";
$result=$xoopsDB->query($query,0);
if($xoopsDB->getRowsNum($result)!=0){
	$rs=$xoopsDB->fetchArray($result);
	
if($submit=="�T�w"){

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
	  
	  
$query_apply = "INSERT INTO expense (deve_state,approv,";
if($img_real){
$query_apply .= "img_name,file_type,";
}
$query_apply .= "apply_form,apply_nu,apply_date,apply_area,apply_fee,apply_fee_item,apply_y,apply_m,apply_dept,apply_fee_name,apply_fee_dept,fee_type,fee_amount,factory,factory_other,ps,form_mode,form_info)";
$query_apply .= "values('BL','W',";
if($img_real){
$query_apply .= "'".$apply_form."_".$img_real."','".$file_type."',";
}
$query_apply .= "'".$apply_form."','".$apply_nu."','".$apply_date."','".$apply_area."','".substr($apply_fee,0,4)."','".substr($apply_fee,4,3)."','".$apply_y."','".$apply_m."','".$apply_dept."','".$apply_fee_name."','".$apply_fee_dept."','".$fee_type."','".$fee_amount."','".$factory."','".$factory_other."','".$ps."','".$form_mode."','".$comma_form."')";

$result_apply=$xoopsDB->query($query_apply,0); 

//apply_nu  apply_date  apply_area  apply_fee  apply_fee_item  apply_y  apply_m  apply_fee_dept  apply_fee_name  fee_type  fee_amount  factory  factory_other  ps  
?>
<link href="style.css" rel="stylesheet" type="text/css">
<img src="images/title.gif" width="400" height="35"> <br>
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td colspan="2"><p><FONT 
                        size=3>�z�n�A�w��i�J�O��/�]�ƥӽеn���@�~�t�ΡC</FONT></p>
      <hr></td>
  </tr>
  <tr> 
    <td colspan="2"><font color="#FF0000" size="3">�n�����\! �z�o���@�~���n�����X��</font><font color="#FF0000">: 
      <font size="3"><?echo $apply_form;?></font></font></td>
  </tr>
  <tr> 
    <td height="60" colspan="2" class="fg1"><strong>�O��/�]�ƥӽЪ��p�p�U:</strong></td>
  </tr>
  <tr> 
    <td colspan="2"><table width="92%" border="0" align="right" cellpadding="0" cellspacing="4">
        <tr>
          <td width="14%"> �ӽФ��</td>
          <td width="86%"><?echo $apply_date?></td>
        </tr>
        <tr> 
          <td>�ӽЦa��</td>
          <td><?if($apply_area=="T"){echo "�x�W";}
		  else if ($apply_area=="S"){echo "�`�`";}?></td>
        </tr>
        <tr> 
          <td>�ӽжO��<br>�O�βӥ�</td>
          <td><?$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".substr($apply_fee,0,4)."' and item_nu = '".substr($apply_fee,4,3)."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[fee_name]." - ".$row_sel[item_name];
	$ff=$row_sel[fee_name];
	$ii=$row_sel[item_name];
	$sing_target=$row_sel[sing_target];?></td>
        </tr>
        <!--- <tr> 
          <td>�O�βӥ�</td>
          <td><?//$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$apply_fee."' and item_nu = '".$apply_fee_item."'");
	//$row_sel = mysql_fetch_array($pro_sel);
	//echo $row_sel[item_name];
	//$ii=$row_sel[item_name];?></td>
        </tr> --->
        <tr> 
          <td>���ͤ��</td>
          <td><?echo $apply_y."/".$apply_m;?></td>
        </tr>
        <tr> 
          <td>�ӽг���</td>
          <td><?$query_dept = mysql_query("select dept_name from ozaki_dept where dept_head=".substr($apply_dept,0,1)." and dept_bot=".substr($apply_dept,1,1));
	  $row_dept = mysql_fetch_array($query_dept);
	  echo $row_dept[dept_name];
	  $ad = $row_dept[dept_name];?>
      <?echo $apply_dept;?>
      </td>
        </tr>
        <tr> 
          <td>�ӽФH</td>
          <td><?echo $apply_fee_name?></td>
        </tr>
		<tr> 
          <td>�ӽФH���ݳ���</td>
          <td><?$query_dept = mysql_query("select dept_name from ozaki_dept where dept_head=".substr($apply_fee_dept,0,1)." and dept_bot=".substr($apply_fee_dept,1,1));
	  $row_dept = mysql_fetch_array($query_dept);
	  echo $row_dept[dept_name];
	  $afd = $row_dept[dept_name];?>
      <?echo $apply_fee_dept.$apply_fee_dept_ext;?>
      </td>
        </tr>
        <tr> 
          <td>�ӽЪ��B</td>
          <td><?echo $fee_type." $".$fee_amount?></td>
        </tr>
        <tr>
          <td>�����t��</td>
          <td><?$pro_sel = mysql_query ("select * from factory_list where factory_code = '".$factory."'");
	while ($row_sel = mysql_fetch_array($pro_sel)) {echo $row_sel[factory_short_name];}?><?echo $factory_other?></td>
        </tr>
        <tr> 
          <td>�O�θԭz/�Ƶ�</td>
          <td><?echo $ps?></td>
        </tr>
        <tr> 
          <td colspan="2"></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td width="550" align="right"><hr align="left" width="95%" noshade> </td>
    <td align="right">
	  <table width="150" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF">
        <tr bgcolor="#666666"> 
          <td align="center"> <a href="selection.php"><font color="#FFFFFF">�n��</font></a></td>
          <td align="center"> <a href="query.php"><font color="#FFFFFF">�d��</font></a></td>
          <td align="center"> <a href="admin/"><font color="#FFFFFF">�޲z</font></a></td>
        </tr>
      </table>
	</td>
  </tr>
</table>
<?
if($result_apply){
	if($img_real){
		if (file_exists("dataimg/".$apply_form."_".$img_real)) {
		$error="�W�٭��ơA�L�k���Ƴ]�w";
		}
		if($error){
		echo "<script language='JavaScript'>";
		echo "alert('".$error."');";
		echo "history.back();";
		echo "</script>";
		} else {
		copy("tmp/".$apply_form."_".$img_real , "dataimg/".$apply_form."_".$img_real);
		}
	}
//include("email.php");
include("clientemail.php");
//include("fsemail.php");
$topic = "�O��/�]�ƥӽеn��".$apply_form;

$tomail = $umail;
//fs
$fsmail = "fs@ozaki.com.tw";
$clientmail = "eric@ozaki.com.tw";
include("ckeck_root.php");
//if($fee_amount>$sing_target){
//$mail_ck = "select apply_fee_mail from expense_fee_group where apply_fee_dept = '".substr($apply_fee_dept,0,1)."0' and apply_fee_root = '2'";
//}else{
$mail_ck = "select apply_fee_mail from expense_fee_group where apply_fee_dept = '".$apply_fee_dept."' and apply_fee_root = '2'";
//}
$mail_check=mysql_query($mail_ck);
while ($row_mail_check = mysql_fetch_array($mail_check)) {
//�D�ު�
$clientmail .= ";".$row_mail_check[apply_fee_mail];
}
//echo $clientmail;
mail ($clientmail, $topic, "".$clientmess, "From: ".$tomail."\nContent-Type: text/html; charset=big-5\nContent-Transfer-Encoding: 8bit",$clientmail);
mail ($fsmail, $topic, "".$clientmess, "From: ".$tomail."\nContent-Type: text/html; charset=big-5\nContent-Transfer-Encoding: 8bit",$clientmail);
mail ($tomail, $topic, "".$clientmess, "From: ".$tomail."\nContent-Type: text/html; charset=big-5\nContent-Transfer-Encoding: 8bit");
}
}?>
<?
}
CloseTable();
echo "<br />";
include_once(XOOPS_ROOT_PATH."/footer.php");
?>
<?mysql_close();?>
