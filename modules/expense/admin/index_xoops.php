<?
include("header.php");

//�ˬd�k�϶��O�_�}��************************
//if ($xoopsConfig['startpage'] == $xoopsModule->dirname()){
if ($xoopsConfig['startpage'] == "dwld"){
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
?><?include("../setup.inc");

//include("check_admin.inc.php");
?>
<a href="index.htm"><img src="../images/title.gif" width="400" height="35" border="0"></a> 
<br>
<table width="700" border="0" cellspacing="0" cellpadding="0" >
  <tr> 
    <td height="50" colspan="2"> 
      <p><font 
                        size=3>�z�n�A�w��i�J�O��/�]�ƥӽ�<strong>�޲z</strong>�@�~�t�ΡC</font></p>
    </td>
  </tr>
  <tr> 
    <td height="26" colspan="2"> <? include("menu.inc.php");?></td>
  </tr>
  <tr> 
    <td height="15" colspan="2" align="right"> 
      <hr>
    </td>
  </tr>
</table>
<table width="700" border="0" cellspacing="0" cellpadding="0" >
  <tr> 
    <td> <?if ($mode=="1") {
					include("apply_fee.php");
				} else if ($action=="2") {
					include("apply_fee_item.php");
				} else if ($action=="3") {
					include("apply_fee_factory.php");
				} else if ($action=="4") {
				    include("apply_fee_admin.php");
				} else if ($action=="5") {
				    include("apply_fee_approve.php");
				} //else {
				   // include("apply_fee_list.inc.php");
				//}?> </td>
  </tr>
</table>
<?
	
if ($error) {
    
	echo "<script language='JavaScript'>";
	echo "alert('".$error."');";
	echo "history.back();";
	echo "</script>";

}
mysql_close();
?>
<?
}
CloseTable();
echo "<br />";
include_once(XOOPS_ROOT_PATH."/footer.php");
?>