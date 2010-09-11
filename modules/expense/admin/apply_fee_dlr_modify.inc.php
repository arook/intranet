<?

$query = mysql_query ("select * from expense_fee_dlr where nu='".$target."'") ;
$row = mysql_fetch_array($query);

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
<input type="hidden" name="sort" value="<? echo $sort ?>">
<table width=100%>
<tr>
	<td>
		<input type="submit" value="確定修改">
		<input type="reset" value="恢復重寫">　
		<input type="button" value="返回列表" onClick="CheckAction('Back')">
	</td>
</tr>
</table>
	
<? 
	
include "apply_fee_dlr_form.inc.php";
	
?>

</form>


