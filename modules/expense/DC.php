<?include("setup.inc");
$mx=1;
$pro_sel = mysql_query ("select distinct fee_nu,fee_name from expense_fee");
				while ($row_sel = mysql_fetch_array($pro_sel)) {
				$mquery="SELECT item_nu,item_name FROM expense_fee where fee_nu = '".$row_sel[fee_nu]."' ORDER BY nu";
$mresult=mysql_query($mquery,$conn);
$item_mx=0;
while($mrs=mysql_fetch_array($mresult)){
	
	$item_nu=$mrs[item_nu];
	$item_name=$mrs[item_name];
	$strMenu3_1.="group[".$mx."][".$item_mx."]=new Option(\"".$item_name."\",\"".$item_nu."\")\n";
$item_mx++;
}$mx++;
$apply_fee_Menu .="<option value=$row_sel[fee_nu]>$row_sel[fee_name]</option>";
}?>
<select name="apply_fee" size="1" onChange="redirect(this.options.selectedIndex)">
<option value="-">請選擇</option>
<?echo $apply_fee_Menu?>
</select>
<select name="apply_fee_item" size="1">
<option value="-">請選擇</option>
</select>

<script>

var groups=document.form1.apply_fee.options.length
var group=new Array(groups)
for (i=0; i<<?echo $mx?>; i++)
group[i]=new Array()

<?
echo $strMenu3_1;
?>

var temp=document.form1.apply_fee_item

function redirect(x){
for (m=temp.options.length-1;m>0;m--)
temp.options[m]=null
for (i=0;i<group[x].length;i++){
temp.options[i]=new Option(group[x][i].text,group[x][i].value)
}
temp.options[0].selected=true
}

//function go(){
//location=temp.options[temp.selectedIndex].value
//}
//-->
</script>