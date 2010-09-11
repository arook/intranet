<?

$deldim = split ("¢x",$target);

for ($i=0;$i<count($deldim);$i++) {

	if ($dellab) $dellab.=" or ";

	$dellab.="nu = '".$deldim[$i]."'";
}

$query = "delete from expense_fee_type where ".$dellab;
//need for update this code

mysql_query($query) or die (mysql_error());
mysql_close();


?>

<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
<input type="hidden" name="user" value="<? echo $user ?>">
<input type="hidden" name="pass" value="<? echo $pass ?>">
<input type="hidden" name="sort" value="<? echo $sort ?>">
<input type="hidden" name="full_sort" value="<? echo $full_sort ?>">
</form>


<script language="JavaScript">
document.main.submit();
</script>
