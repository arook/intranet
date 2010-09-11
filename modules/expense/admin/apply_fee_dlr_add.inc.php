<?

if (!$name_chi) {
    $error ="必須填寫";
} elseif (!$name_eng) {
    $error ="必須填寫";
} else {

	$query = "insert into expense_fee_dlr (name_chi,name_eng) ";
	$query .= "values ('".$name_chi."','".$name_eng."')";

	mysql_query($query) or die (mysql_error());

	$query=mysql_query("select nu from expense_fee_dlr order by nu desc");
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

