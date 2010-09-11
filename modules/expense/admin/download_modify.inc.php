<?

mysql_connect ($dbshost, $dbsuser, $dbspass);
mysql_select_db ($dbsname) or die( "Unable to select database"); 

$query = mysql_query ("select * from download where sn='".$target."'") ;
$row = mysql_fetch_array($query);

mysql_close();

?>

<script language="JavaScript">
function CheckAction(comm) {

	document.main.filename.value=document.main.imgfile.value;
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
<input type="hidden" name="sort" value="<? echo $sort ?>">
<input type="hidden" name="oldname" value="<? echo $row['fname'] ?>">
<input type="hidden" name="filename">

<table width=100%>
<tr>
	<td>
		<input type="button" value="確定修改" onClick="CheckAction('write')">
		<input type="reset" value="恢復重寫">　
		<input type="button" value="返回列表" onClick="CheckAction('Back')">
	</td>
</tr>
</table>
	
<? 
	
include "download_form.inc.php";
	
?>

</form>


