<?include("../setup.inc");

//include("check_admin.inc.php");
?>
<link href="../style.css" rel="stylesheet" type="text/css">
<a href="../"><img src="../images/title.gif" width="400" height="35" border="0"></a> 
<br>
<table width="700" border="0" cellspacing="0" cellpadding="0" >
  <tr> 
    <td height="50" colspan="2"> 
      <p><font 
                        size=3>您好，歡迎進入費用/設備申請<strong>管理</strong>作業系統。</font></p>
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
    <td> <?
				
				if ($action=="delete") {
					include("apply_fee_approve_delete.inc.php");
				} else if ($action=="write") {
					include("apply_fee_approve_write.inc.php");
				} else if ($action=="modify") {
					include("apply_fee_approve_modify.inc.php");
				} else if ($action=="add") {
				    include("apply_fee_approve_add.inc.php");
				} else if ($action=="new") {
				    include("apply_fee_approve_new.inc.php");
				} else {
				    include("apply_fee_approve_list.inc.php");
				}
				
				?> </td>
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