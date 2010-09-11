<?

if (!$name) {
    $error ="請選入帳號";
} elseif (!$pwd) {
    $error ="請輸入密碼";
} else {
    

	$name = eregi_replace("<", "&lt;", $name);
	$name = eregi_replace(">", "&gt;", $name);
	$pwd = eregi_replace("<", "&lt;", $pwd);
	$pwd = eregi_replace(">", "&gt;", $pwd);

	mysql_query("update pro_admin set name='".$name."',pwd='".$pwd."' where nu=$target") or die (mysql_error());

	?>

	<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
	<input type="hidden" name="user" value="<? echo $user ?>">
	<input type="hidden" name="pass" value="<? echo $pass ?>">
	<input type="hidden" name="action" value="modify">
	<input type="hidden" name="target" value="<? echo $target ?>">
	<input type="hidden" name="page" value="<? echo $page ?>">
	</form>


	<script language="JavaScript">
	document.main.submit();
	</script>


	<?

}

