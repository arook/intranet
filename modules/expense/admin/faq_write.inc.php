<?

if (!$content) {
    $error ="請輸入回覆答案";
}  else {

	$topic = eregi_replace("<", "&lt;", $topic);
	$topic = eregi_replace(">", "&gt;", $topic);

	mysql_connect ($dbshost, $dbsuser, $dbspass);
	mysql_select_db ($dbsname) or die( "Unable to select database"); 

	mysql_query("update msg_bd set reid=$target,reply='$content' where serial=$target") or die (mysql_error());
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

