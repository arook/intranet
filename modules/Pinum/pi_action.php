<?
$query_pi = "INSERT INTO pinum (grp,type,yr,mth,ste,cty_code,address,cust_num,";
if ($_REQUEST[cty_code]=="KR" && $_REQUEST[cust_num]=="101"){
$query_pi .= "kr_num,";
}else{
$query_pi .= "se_num,";
}
$query_pi .= "cust_name,cty,text_wd,req_user,email,post_name,regdate,deve_state,apply_form,show_hi)";
$query_pi .=" VALUES ('".$_REQUEST[grp]."','".$_REQUEST[type]."','".$_REQUEST[yr]."','".$_REQUEST[mth]."','".$_REQUEST[ste]."','".$_REQUEST[cty_code]."','".$_REQUEST[address]."','".$_REQUEST[cust_num]."','".$_REQUEST[insert_num]."','".$_REQUEST[cust_name]."','".$_REQUEST[cty]."','".$_REQUEST[text_wd]."','".$_REQUEST[req_user]."','".$_REQUEST[email]."','".$_REQUEST[post_name]."','".date("Y/m/d")."','BL','0','".$_REQUEST[show_hi]."')";

mysql_query($query_pi);
$mess = "<table width=\"557\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n";
$mess .="   <tr> \n";
$mess .="     <td width=\"105\" valign=\"top\">PINUM�G</td>\n";
$mess .="     <td width=\"452\"> <B>$_REQUEST[grp]$_REQUEST[cust_type]$_REQUEST[yr]$_REQUEST[mth]$_REQUEST[ste]$_REQUEST[cty_code]$_REQUEST[cust_num]$_REQUEST[show_num]</B></td>\n";
$mess .="   </tr>\n";
$mess .="   <tr> \n";
$mess .="     <td width=\"105\" valign=\"top\">�Ȥ�W�١G</td>\n";
$mess .="     <td width=\"452\"> $_REQUEST[cust_name]</td>\n";
$mess .="   </tr>\n";
$mess .="   <tr> \n";
$mess .="     <td width=\"105\" valign=\"top\">��a�G</td>\n";
$mess .="     <td width=\"452\"> $_REQUEST[cty]</td>\n";
$mess .="   </tr>\n";
$mess .="   <tr> \n";
$mess .="     <td width=\"105\" valign=\"top\">�Ȥ�s���G</td>\n";
$mess .="     <td width=\"452\"> $_REQUEST[cust_num]</td>\n";
$mess .="   </tr>\n";
$mess .="   <tr>\n";
$mess .="     <td width=\"105\" valign=\"top\">�����G</td>\n";
$mess .="     <td width=\"452\"> $text_wd</td>\n";
$mess .="   </tr>\n";
$mess .="   <tr>\n";
$mess .="     <td width=\"105\" valign=\"top\">�ݨD�̡G</td>\n";
$mess .="     <td width=\"452\"> $req_user</td>\n";
$mess .="   </tr>\n";
$mess .="     <td width=\"105\" valign=\"top\">Email�G</td>\n";
$mess .="     <td width=\"452\"> $email</td>\n";
$mess .="   </tr>\n";
if($_REQUEST[show_hi]!=null){
	$mess .="   <tr>\n";
	$mess .="     <td width=\"105\" valign=\"top\">�O�_��ܡG</td>\n";
	
	if($_REQUEST[show_hi] == 0){
		$mess .="     <td width=\"452\"> ���(�Ҧ��b���i�H�d��)</td>\n";
	 }else{
	  	$mess .="     <td width=\"452\"> ����(����ۤv�d��)</td>\n";
	 }
	$mess .="   </tr>\n";
}
$mess .=" </table>\n";

echo $mess;
$gracemail="grace@ozaki.com.tw";
$tomail="fp@ozaki.com.tw";
$postmanmail=$email;
$topic = "PINUM �n���t�αH�Ӥ@��mail";

mail ($postmanmail, $topic, $mess, "From: ".$post_name."\nContent-Type: text/html; charset=big-5\nContent-Transfer-Encoding: 8bit");
mail ($gracemail, $topic, $mess, "From: ".$postmanmail."\nContent-Type: text/html; charset=big-5\nContent-Transfer-Encoding: 8bit");
mail ($tomail, $topic, $mess, "From: ".$postmanmail."\nContent-Type: text/html; charset=big-5\nContent-Transfer-Encoding: 8bit");
?> 
<TABLE cellSpacing=0 cellPadding=0 width=580 border=0>
  <TBODY>
    <TR> 
      <TD align="left"><a href="index.php"><img src="images/next.gif" hspace="10" border="0"></a></TD>
    </TR>
  </TBODY>
</TABLE><?mysql_close();?>