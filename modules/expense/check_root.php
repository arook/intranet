<?$root_query = mysql_query("select apply_fee_dept,apply_fee_root from expense_fee_group where apply_fee_name='".$uid."' order by apply_fee_root asc");
$row_root = mysql_fetch_array($root_query);
$apply_fee_dept=$row_root[apply_fee_dept];
$apply_fee_root=$row_root[apply_fee_root];
//echo $apply_fee_root.$uid;?>