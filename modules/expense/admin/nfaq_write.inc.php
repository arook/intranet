<?

if (!$que) {
    $error ="請輸入問題";
}  else if (!$ans) {
    $error ="請輸入答案";
}

	$que = eregi_replace("<", "&lt;", $que);
	$que = eregi_replace(">", "&gt;", $que);

	$ans = eregi_replace("<", "&lt;", $ans);
	$ans = eregi_replace(">", "&gt;", $ans);

	mysql_connect ($dbshost, $dbsuser, $dbspass);
	mysql_select_db ($dbsname) or die( "Unable to select database"); 

	mysql_query("update nfaq set reid=$target,reply='$content' where serial=$target") or die (mysql_error());
	mysql_close();

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

