<?

$deldim = split ("¢x",$target);

for ($i=0;$i<count($deldim);$i++) {

	if (file_exists("../images/exhibition/".$deldim[$i]."_1.gif"))
		unlink("../images/exhibition/".$deldim[$i]."_1.gif");

	if (file_exists("../images/exhibition/".$deldim[$i]."_2.gif"))
		unlink("../images/exhibition/".$deldim[$i]."_2.gif");

	if ($dellab) $dellab.=" or ";

	$dellab.="sn = '".$deldim[$i]."'";
}

mysql_connect ($dbshost, $dbsuser, $dbspass);
mysql_select_db ($dbsname) or die( "Unable to select database"); 

$query = "delete from exhibition where ".$dellab;

mysql_query($query) or die (mysql_error());
mysql_close();


?>

<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
<input type="hidden" name="user" value="<? echo $user ?>">
<input type="hidden" name="pass" value="<? echo $pass ?>">
</form>


<script language="JavaScript">
document.main.submit();
</script>
