<?


if (!$title) {
    $error ="請選入問題";
} elseif (!$content) {
    $error ="請輸入答案";
} else {
    
	$title = eregi_replace("<", "&lt;", $title);
	$title = eregi_replace(">", "&gt;", $title);
	$content = eregi_replace("<", "&lt;", $content);
	$content = eregi_replace(">", "&gt;", $content);
	$title_eng = eregi_replace("<", "&lt;", $title_eng);
	$title_eng = eregi_replace(">", "&gt;", $title_eng);
	$content_eng = eregi_replace("<", "&lt;", $content_eng);
	$content_eng = eregi_replace(">", "&gt;", $content_eng);
	$title =eregi_replace(chr(13).chr(10),"<br>",$title);
	$title_eng =eregi_replace(chr(13).chr(10),"<br>",$title_eng);
	$title =eregi_replace(chr(13).chr(10),"<br>",$title);
	$title_eng =eregi_replace(chr(13).chr(10),"<br>",$title_eng);
	$content =eregi_replace(chr(13).chr(10),"<br>",$content);
	$content_eng =eregi_replace(chr(13).chr(10),"<br>",$content_eng);
	$content =eregi_replace(chr(13).chr(10),"<br>",$content);
	$content_eng =eregi_replace(chr(13).chr(10),"<br>",$content_eng);

	mysql_connect ($dbshost, $dbsuser, $dbspass);
	mysql_select_db ($dbsname) or die( "Unable to select database"); 

	mysql_query("insert into msg_bd (title,title_eng,content,content_eng,date) values ('$title','$content','$title_eng','$content_eng',now())") or die (mysql_error());

	mysql_close();

	?>

	<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
	<input type="hidden" name="user" value="<? echo $user ?>">
	<input type="hidden" name="pass" value="<? echo $pass ?>">
	</form>

	
	<script language="JavaScript">
	document.main.submit();
	</script>

	<?

}


?>

