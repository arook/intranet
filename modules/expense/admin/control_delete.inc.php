<?
$deldim = split ("¢x",$target);

for ($i=0;$i<count($deldim);$i++) {
	if ($dellab) $dellab.=" or ";

	$dellab .=" nu = '".$deldim[$i]."' ";

}
	$query = "delete from pro_admin where ".$dellab;
	mysql_query($query) or die (mysql_error());



?>

<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
<input type="hidden" name="user" value="<? echo $user ?>">
<input type="hidden" name="pass" value="<? echo $pass ?>">
</form>


<script language="JavaScript">
document.main.submit();
</script>
