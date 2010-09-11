<?

$dellab = "$target";

mysql_query("delete from expense_fee where nu='$dellab'")or die (mysql_error());
//mysql_query("delete from pro_cable_item where nu='$nu'") ;
//die("delete from expense_fee where nu='$dellab'"."\t");

?>

<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
<input type="hidden" name="user" value="<? echo $user ?>">
<input type="hidden" name="pass" value="<? echo $pass ?>">
</form>


<script language="JavaScript">
document.main.submit();
</script>