<?

if (!$factory_code) {
   $error ="廠商代號必須填寫";
} elseif (!$factory_name) {
   $error ="廠商全名必須填寫";
} elseif (!$factory_name) {
   $error ="廠商地址必須填寫";
} else {

	$query = "update factory_list set ";
	$query .= " factory_code ='".$factory_code."',"; 
	$query .= " factory_name ='".$factory_name."',"; 
	$query .= " factory_short_name ='".$factory_short_name."',"; 
	$query .= " factory_type ='".$factory_type."',"; 
	$query .= " f_code ='".$f_code."',"; 
	$query .= " factory_p ='".$factory_p."',"; 
	$query .= " factory_cont ='".$factory_cont."',"; 
	$query .= " factory_pur ='".$factory_pur."',"; 
	$query .= " factory_tel1 ='".$factory_tel1."',"; 
	$query .= " factory_fax ='".$factory_fax."',"; 
	$query .= " factory_tel2 ='".$factory_tel2."',"; 
	$query .= " factory_email ='".$factory_email."',"; 
	$query .= " factory_address ='".$factory_address."',"; 
	$query .= " factory_trade_area ='".$factory_trade_area."',"; 
	$query .= " factory_start_trade ='".$factory_start_trade."',"; 
	$query .= " factory_trade_date ='".$factory_trade_date."',"; 
	$query .= " factory_trade_exp ='".$factory_trade_exp."',"; 
	$query .= " factory_payment ='".$factory_payment."',"; 
	$query .= " factory_pay_mon_type ='".$factory_pay_mon_type."',"; 
	$query .= " factory_pay_tax ='".$factory_pay_tax."',"; 
	$query .= " factory_pay_inform ='".$factory_pay_inform."',"; 
	$query .= " factory_pay_cont ='".$factory_pay_cont."',"; 
	$query .= " factory_pay_type ='".$factory_pay_type."',"; 
	$query .= " s1  ='".$s1."', s2  ='".$s2."', s3  ='".$s3."', s4  ='".$s4."', s5  ='".$s5."', s6  ='".$s6."'"; 
	$query .= " where nu = '".$target."'";
	mysql_query($query) or die (mysql_error());

	mysql_close();

	?>

	<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
	<input type="hidden" name="user" value="<? echo $user ?>">
	<input type="hidden" name="pass" value="<? echo $pass ?>">
	<input type="hidden" name="action" value="modify">
	<input type="hidden" name="target" value="<? echo $target ?>">
	<input type="hidden" name="page" value="<? echo $page ?>">
	<input type="hidden" name="sort" value="<? echo $sort ?>">
	<input type="hidden" name="full_sort" value="<? echo $full_sort ?>">
	</form>



	<script language="JavaScript">
	document.main.submit();
	</script>


	<?

}

