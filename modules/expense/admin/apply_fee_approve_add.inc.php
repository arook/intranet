<?

if (!$item_name) {
   $error ="申請費用細目必須填寫";
} elseif (!$item_nu) {
   $error ="申請費用細目編碼必須填寫";
} else {

	$query = "insert into expense_fee (fee_nu,item_nu,fee_name,item_name,apply_type) ";
	$query .= "values ('".$fee_nu."','".$item_nu."','".$fee_name."','".$item_name."','".$apply_type."')";
	
	mysql_query($query) or die (mysql_error());

	$query=mysql_query("select nu from expense_fee order by nu desc");
	$row = mysql_fetch_array($query);
	mysql_free_result($query);
	?>

	<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
	<input type="hidden" name="user" value="<? echo $user ?>">
	<input type="hidden" name="pass" value="<? echo $pass ?>">
	<input type="hidden" name="sort" value="<? echo $fee_nu ?>">
	</form>


	<script language="JavaScript">
	document.main.submit();
	</script>

	<?}?>


