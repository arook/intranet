<?


if (!$item) {
    $error ="請選入種類";
} else {

	mysql_query("insert into pro_cable_item (item,item_eng)values ('$item','$item_eng')") or die (mysql_error());

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

