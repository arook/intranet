<?

$dellab = "$nu";

mysql_connect ($dbshost, $dbsuser, $dbspass);
mysql_select_db ($dbsname) or die( "Unable to select database"); 

$query = "delete from msg_bd where serial='.$dellab.'";

mysql_query("delete from msg_bd where serial='$nu'") or die (mysql_error());
mysql_query("delete from msg_bd where reid='$nu'") or die (mysql_error());mysql_close();


?>

<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
<input type="hidden" name="user" value="<? echo $user ?>">
<input type="hidden" name="pass" value="<? echo $pass ?>">
</form>


<script language="JavaScript">
document.main.submit();
</script>
