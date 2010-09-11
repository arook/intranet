<?

if (!$item_name) {
   $error ="申請費用細目必須填寫";
} elseif (!$item_nu) {
   $error ="申請費用細目編碼必須填寫";
} else {

	$query = "update expense_fee set ";
	$query .= " fee_nu='".$fee_nu."',";
	$query .= " item_nu='".$item_nu."',";
	$query .= " fee_name='".$fee_name."',";
	$query .= " item_name='".$item_name."',";
	$query .= " apply_type='".$apply_type."',";
	$query .= " sing_target='".$sing_target."',";
	$query .= " m_target='".$m_target."',";
	$query .= " item_sta='".$item_sta."',";
	$query .= " item_ord='".$item_ord."'";
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


	<?

}

