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
	$uname = $xoopsUser->getVar("uname");
}

OpenTable();
$query="SELECT uname,pass FROM ".$xoopsDB->prefix("users")." WHERE uid='$uid'";
//echo $query."<BR>";
$result=$xoopsDB->query($query,0);
$uid = $xoopsUser->getVar("uid");
if($xoopsDB->getRowsNum($result)!=0){
	$rs=$xoopsDB->fetchArray($result);

include("check_root.php");
?>
<img src="images/title.gif" width="400" height="35"> <br>
  <table width="700" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><FONT 
                        size=3>�z�n�A�w��i�J�O��/�]�ƥӽеn���@�~�t�ΡC</FONT> 
        <hr></td>
  </tr>
  <tr>
      <td height="50" align="center"> 
        <table width="150" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" bgcolor="#666666"><a href="selection.php"><font color=white>�O��/�]�ƥӽеn��</font></a> 
            </td>
          </tr>
        </table></td>
  </tr>
  <tr>
      <td height="50" align="center"> 
        <table width="150" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td align="center" bgcolor="#666666"><a href="query.php"><font color="#FFFFFF">�O��/�]�ƥӽЬd��</font> 
              </a></td>
          </tr>
        </table> </td>
  </tr>
  <?if($apply_fee_root=="1" OR $apply_fee_root=="3"){?>
  <tr>
      <td height="50" align="center"> 
        <table width="150" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td align="center" bgcolor="#666666"><a href="admin/apply_fee_approve.php?user=<?echo $uname?>"><font color="#FFFFFF">�O��/�]�ƥӽк޲z</font></a></td>
          </tr>
        </table></td>
  </tr>
  <?}?>
  <tr>
      <td>&nbsp;</td>
  </tr>
</table>
<?
}
CloseTable();
echo "<br />";
include_once(XOOPS_ROOT_PATH."/footer.php");
?>
<?mysql_close();?>