<?

if ($apply_fee_dept=="-") {
   $error ="必須填寫";
} elseif ($apply_fee_name=="-") {
   $error ="必須填寫";
} elseif ($apply_fee_root=="-") {
   $error ="必須填寫";
} else {
    $select_user= mysql_query("select uid,uname,email from xoops_users where uid = '".$apply_fee_name."'");
	while ($row_user = mysql_fetch_array($select_user)) {
	$email =$row_user[email];}

	$query = "insert into expense_fee_group ( `apply_fee_name` , `apply_fee_dept` , `apply_fee_root` , `apply_fee_mail` ) ";
	$query .= "values ('".$apply_fee_name ."','".$apply_fee_dept ."','".$apply_fee_root ."','".$email."')";
	
	mysql_query($query) or die (mysql_error());

	$query=mysql_query("select nu from expense_fee_group order by nu desc");
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


