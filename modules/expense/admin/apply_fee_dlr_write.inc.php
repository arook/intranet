<?
if (!$name_chi) {
    $error ="必須填寫";
} elseif (!$name_eng) {
    $error ="必須填寫";
} else {

	$query = "update  expense_fee_dlr set ";
	$query .= " name_chi='".$name_chi."',";
	$query .= " name_eng='".$name_eng."'";
	$query .= " where nu='".$target."'";
	
	mysql_query($query) or die (mysql_error());
	mysql_close();
	?>

	<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
	<input type="hidden" name="user" value="<? echo $user ?>">
	<input type="hidden" name="pass" value="<? echo $pass ?>">
	<input type="hidden" name="action" value="modify">
	<input type="hidden" name="target" value="<? echo $target ?>">
	<input type="hidden" name="page" value="<? echo $page ?>">
	<input type="hidden" name="sort" value="<? echo $sort ?>">
	<input type="hidden" name="full_sort" value="<? echo $full_sort ?>">
	</form>


	<script language="JavaScript">
	document.main.submit();
	</script>


	<?

}

