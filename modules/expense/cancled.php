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
?>
<?$query_update = "update expense set ";
$query_update .= "approv = 'F'";
$query_update .= " where nu = '".$nu."'";
$result_update = mysql_query($query_update);
?>
<img src="images/title.gif" width="400" height="35"> <br>
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td colspan="2"><p><FONT size=3>�z�n�A�w��i�J�O��/�]�ƥӽеn���@�~�t�ΡC</FONT></p>
      <hr></td>
  </tr>
  <tr> 
    <td height="59" colspan="2">�@�o�Ӷ��ӽ�: <font color="#FF0000"><font size="3"><?echo $apply_form?></font></font></td>
  </tr>
  <tr> 
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr> 
    <td width="550" align="left">
<hr width="95%"> </td>
    <td align="right">
	<?include("check_root.php");
	include("inc/query.inc.php");?></td>
  </tr>
</table>
<?
$topic = "�O��/�]�ƥӽ� ".$apply_form." - �@�o";

$tomail = $umail;
//fs
$clientmail = "eric@ozaki.com.tw";
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
$clientmess	= "\n";
$clientmess	.= "<table width=700 border=0 cellspacing=0 cellpadding=0>
\n";$clientmess	.= "  <tr> 
\n";$clientmess	.= "    <td width=520 height=60><img src=http://www.ozaki.com.tw/intranet/modules/expense/images/title.gif width=400 height=35 border=0><br><strong>�O��/�]�ƥӽ� �@�o:</strong></td>
\n";$clientmess	.= "  </tr>
\n";$clientmess	.= "  <tr> 
\n";$clientmess	.= "    <td><table width=92% border=0 align=right cellpadding=0 cellspacing=4>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td width=14% height=20>�n�����X</td>
\n";$clientmess	.= "          <td width=86% height=20>$apply_form</td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td height=20>�ӽФH</td>
\n";$clientmess	.= "          <td height=20>$apply_fee_name</td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "	</table></td>
\n";$clientmess	.= "  </tr>
\n";$clientmess	.= "</table>
\n";

//echo $topic."<BR>".$tomail."<BR>".$clientmail."<br>".$clientmess;
mail ($clientmail, $topic, $clientmess, "From: ".$tomail."\nContent-Type: text/html; charset=big-5\nContent-Transfer-Encoding: 8bit");
}
CloseTable();
echo "<br />";
include_once(XOOPS_ROOT_PATH."/footer.php");
?>
<?mysql_close();?>
