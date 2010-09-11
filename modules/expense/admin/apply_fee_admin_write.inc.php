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
	
	$query = "update expense_fee_group set ";
	$query .= " apply_fee_name='".$apply_fee_name."',";
	$query .= " apply_fee_dept='".$apply_fee_dept."',";
	$query .= " apply_fee_root='".$apply_fee_root."',";
	$query .= " apply_fee_mail='".$email."'";
	$query .= " where nu='".$target."'";
	echo $query;
	mysql_query($query) or die (mysql_error());

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

