<?

$dellab = "$nu";

mysql_query("delete from pro_sel where type='$nu'");
mysql_query("delete from pro_item where nu='$nu'") or die (mysql_error());


?>

<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
<input type="hidden" name="user" value="<? echo $user ?>">
<input type="hidden" name="pass" value="<? echo $pass ?>">
</form>


<script language="JavaScript">
document.main.submit();
</script>