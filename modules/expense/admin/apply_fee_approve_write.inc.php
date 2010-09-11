<?

	$query = "update expense set ";
	$query .= " deve_state='".$deve_state."',";
	$query .= " approve_person='".$approve_person."',";
	$query .= " approve_ps='".$approve_ps."'";
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
	<input type="hidden" name="sort" value="<? echo $fee_nu ?>">
	<input type="hidden" name="full_sort" value="<? echo $fee_name ?>">
	</form>



	<script language="JavaScript">
	document.main.submit();
	</script>
