<?
$query = mysql_query ("select * from pro_admin where nu=".$target."") ;
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
	
<table width=100%>
<tr>
	<td>
		<input type="submit" value="�T�w�^��">
		<input type="reset" value="��_���g">�@
		<input type="button" value="��^�C��" onClick="CheckAction('Back')">
	</td>
</tr>
</table>
	
<? 
	
include "control_form.inc.php";
	
?>

</form>


