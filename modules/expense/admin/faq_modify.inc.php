<?

mysql_connect ($dbshost, $dbsuser, $dbspass);
mysql_select_db ($dbsname) or die( "Unable to select database"); 

$query = mysql_query ("select * from msg_bd where serial=".$target."") ;
$row = mysql_fetch_array($query);

mysql_close();

?>

<script language="JavaScript">
function CheckAction(comm) {

	document.main.action.value = comm;
	document.main.submit();

}
</script>


<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
<input type="hidden" name="user" value="<? echo $user ?>">
<input type="hidden" name="pass" value="<? echo $pass ?>">
<input type="hidden" name="action" value="write">
<input type="hidden" name="target" value="<? echo $target ?>">
<input type="hidden" name="page" value="<? echo $page ?>">
	
<table width=100%>
<tr>
	<td>
		<input type="submit" value="確定回覆">
		<input type="reset" value="恢復重寫">　
		<input type="button" value="返回列表" onClick="CheckAction('Back')">
	</td>
</tr>
</table>
	
<? 
	
include "faq_form.inc.php";
	
?>

</form>


