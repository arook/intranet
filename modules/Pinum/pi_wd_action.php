<?include("header.php");?>
<?$update = "update pinum set ";
$update .= "text_wd = '".$text_wd."',";
$update .= "deve_state = '".$s8."'";
$update .= "where nu = '".$up."'";
mysql_query($update) or die (mysql_error());
	mysql_close();
?>

	<script language="JavaScript">
	alert('н╫зяз╣жи');
	window.close();
	</script>