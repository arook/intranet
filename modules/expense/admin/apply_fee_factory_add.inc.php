<?

if (!$factory_code) {
   $error ="廠商代號必須填寫";
} elseif (!$factory_name) {
   $error ="廠商全名必須填寫";
} elseif (!$factory_name) {
   $error ="廠商地址必須填寫";
} else {
    
$query = "INSERT INTO `factory_list` (`factory_code` , `factory_name` , `factory_short_name` , `factory_type` , `f_code` , `factory_p` , `factory_cont` , `factory_pur` , `factory_tel1` , `factory_fax` , `factory_tel2` , `factory_email` , `factory_address` , `factory_trade_area` , `factory_start_trade` , `factory_trade_date` , `factory_trade_exp` , `factory_payment` , `factory_pay_mon_type` , `factory_pay_tax` , `factory_pay_inform` , `factory_pay_cont` , `factory_pay_type` , `s1` , `s2` , `s3` , `s4` , `s5` , `s6` ) ";

$query .="VALUES ('".$factory_code."', '".$factory_name."', '".$factory_short_name."', '".$factory_type."', '".$f_code."', '".$factory_p."', '".$factory_cont."', '".$factory_pur."', '".$factory_tel1."', '".$factory_fax."', '".$factory_tel2."', '".$factory_email."', '".$factory_address."', '".$factory_trade_area."', '".$factory_start_trade."', '".$factory_trade_date."', '".$factory_trade_exp."', '".$factory_payment."', '".$factory_pay_mon_type."', '".$factory_pay_tax."', '".$factory_pay_inform."', '".$factory_pay_cont."', '".$factory_pay_type."', '".$s1."', '".$s2."', '".$s3."', '".$s4."', '".$s5."', '".$s6."')";

	mysql_query($query) or die (mysql_error());

	$query=mysql_query("select nu from apply_fee_form order by nu desc");
	$row = mysql_fetch_array($query);
	mysql_free_result($query);
	?>

	<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
	<input type="hidden" name="user" value="<? echo $user ?>">
	<input type="hidden" name="pass" value="<? echo $pass ?>">
	<input type="hidden" name="sort" value="<? echo $sort ?>">
	</form>


	<script language="JavaScript">
	document.main.submit();
	</script>

	<?}?>


