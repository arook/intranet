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
<input type="hidden" name="sort" value="<? echo $sort ?>">
<input type="hidden" name="full_sort" value="<? echo $full_sort ?>">
<input type="submit" value="確定新增">
<input type="reset" value="清除重寫">　
<input type="button" value="返回列表" onClick="CheckAction('Back')">

<? 

$row["full_sort"] = $full_sort;
include("product_form.inc.php");

?>

</form>