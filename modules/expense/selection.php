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
                        size=3>�z�n�A�w��i�J�O��/�]�ƥӽ�<strong>�n��</strong>�@�~�t�ΡC</FONT> 
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
	<td colspan=4>�ӽ����O : </td>
</tr>
<tr>
	<td>A.�@��ӽ�</td>
	<td>B.�ꪫ�ӽ�</td>
	<td>C.���i�ӽ�</td>
	<td>D.�M�ץӽ�</td>
</tr>
<tr>
	<td valign="top"><a href=apply.php?apply_type=A>�@��O�ΥӽЪ�</a><br>
	<a href=apply.php?apply_type=A&form=form3>�t��(A)�O�ΥӽЪ�</a><br>
	<a href=apply.php?apply_type=A&form=form2>�t��(B)�O�ΥӽЪ�</a></td>
	<td valign="top"><a href=apply.php?apply_type=B>�ꪫ�ӥӽЪ�</a></td>
	<td valign="top"><a href=apply.php?apply_type=D&form=form1>��q�O�ӽЪ�</a><br>
	<a href=apply.php?apply_type=D&form=form4>�X�t�ӽЪ�</a><br>
	<a href=apply.php?apply_type=D&form=form5>�X�t���i</a><br>
	<a href=apply.php?apply_type=D>��L</a></td>
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
