<?
if (!$fee_name) {
    $error ="申請費用必須填寫";
} elseif (!$fee_nu) {
    $error ="申請費用編碼必須填寫";
} else {

	$query = "update  expense_fee_type set ";
	$query .= " fee_name='".$fee_name."',";
	$query .= " fee_nu='".$fee_nu."',";
	$query .= " m_target='".$m_target."',";
	$query .= " fee_sta='".$fee_sta."',";
	$query .= " fee_ord='".$fee_ord."'";
	$query .= " where nu='".$target."'";
	
	$q2 = "update expense_fee set ";
	$q2 .=" fee_name='".$fee_name."'";
	$q2 .=" where fee_nu ='".$fee_nu."'";
	
	mysql_query($query) or die (mysql_error());
	mysql_query($q2) or die (mysql_error());
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

