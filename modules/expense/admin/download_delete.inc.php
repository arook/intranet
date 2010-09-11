<?

$deldim = split ("¢x",$target);
$dellab = "";

mysql_connect ($dbshost, $dbsuser, $dbspass);
mysql_select_db ($dbsname) or die( "Unable to select database"); 

for ($i=0;$i<count($deldim);$i++) {

	$query=mysql_query("select fname from download where sn = '".$deldim[$i]."'");
	$row = mysql_fetch_array($query);

	unlink("../images/files/".$row['fname']);

	if ($dellab) $dellab.=" or ";
	$dellab.="sn = '".$deldim[$i]."'";
}



$query = "delete from download where ".$dellab;

mysql_query($query) or die (mysql_error());
mysql_close();


?>

<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
<input type="hidden" name="user" value="<? echo $user ?>">
<input type="hidden" name="pass" value="<? echo $pass ?>">
<input type="hidden" name="sort" value="<? echo $sort ?>">
</form>


<script language="JavaScript">
document.main.submit();
</script>
