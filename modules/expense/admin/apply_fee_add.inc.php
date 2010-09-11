<?

if (!$fee_name) {
    $error ="申請費用必須填寫";
} elseif (!$fee_nu) {
    $error ="申請費用編碼必須填寫";
} else {

	$query = "insert into expense_fee_type (fee_name,fee_nu,m_target,fee_sta,fee_ord) ";
	$query .= "values ('".$fee_name."','".$fee_nu."','".$m_target."','".$fee_sta."','".$fee_ord."')";

	mysql_query($query) or die (mysql_error());

	$query=mysql_query("select nu from expense_fee_type order by nu desc");
	$row = mysql_fetch_array($query);
	mysql_free_result($query);
	?>

	<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
	<input type="hidden" name="user" value="<? echo $user ?>">
	<input type="hidden" name="pass" value="<? echo $pass ?>">
	<input type="hidden" name="sort" value="<? echo $sort ?>">
	</form>


	<script language="JavaScript">
	document.main.submit();
	</script>

	<?}?>

