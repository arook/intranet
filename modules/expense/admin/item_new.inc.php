<script language="JavaScript">
function CheckAction(comm) {

	document.main.action.value = comm;
	document.main.submit();

}
</script>


<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
<input type="hidden" name="user" value="<? echo $user ?>">
<input type="hidden" name="pass" value="<? echo $pass ?>">
<input type="hidden" name="action" value="add">
<input type="hidden" name="page" value="<? echo $page ?>">

<input type="submit" value="�T�w�s�W">
<input type="reset" value="�M�����g">�@
<input type="button" value="��^�C��" onClick="CheckAction('Back')">

<? 

include("item_form.inc.php");

?>

</form>