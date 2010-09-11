<?include("../setup.inc");

//include("check_admin.inc.php");
?><script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>
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
      <hr><select name="menu1" onChange="MM_jumpMenu('parent',this,0)">
        <option selected>請選擇</option>
        <option value="apply_fee.php">申請費用科目管理</option>
		<option value="apply_fee_item.php">申請費用細目管理</option>
        <!--- <option value="items_dep.htm">部門別管理 </option> --->
        <option value="apply_fee_dlr.php">幣別管理 </option>
        <option value="apply_fee_factory.php">供應商管理</option>
      </select>
    </td>
  </tr>
</table>
<table width="700" border="0" cellspacing="0" cellpadding="0" >
  <tr> 
    <td> <?
				
				if ($action=="delete") {
					include("apply_fee_factory_delete.inc.php");
				} else if ($action=="write") {
					include("apply_fee_factory_write.inc.php");
				} else if ($action=="modify") {
					include("apply_fee_factory_modify.inc.php");
				} else if ($action=="add") {
				    include("apply_fee_factory_add.inc.php");
				} else if ($action=="new") {
				    include("apply_fee_factory_new.inc.php");
				} else {
				    include("apply_fee_factory_list.inc.php");
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