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
<input type="hidden" name="action" value="add">
<input type="hidden" name="page" value="<? echo $page ?>">
<input type="hidden" name="sort" value="<? echo $sort ?>">
<input type="hidden" name="filename">

<input type="button" value="�T�w�s�W"  onClick="CheckAction('add')">
<input type="reset" value="�M�����g">�@
<input type="button" value="��^�C��" onClick="CheckAction('Back')">

<? 

$row["sort"] = $sort;
include("download_form.inc.php");

?>

</form>