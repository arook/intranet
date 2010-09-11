<?if (!$sort) {
    $sort = "BL";
}

$query = mysql_query ("select * from expense where deve_state ='".$sort."'") ;
$rowsize= mysql_num_rows ($query);

$pagetotal= intval ($rowsize/$splitnum);
if ($rowsize%$splitnum || !$pagetotal) $pagetotal++ ;
	
if ($page<1) {
	$page=1;
} elseif ($page>$pagetotal) {
	$page=$pagetotal;
}

$limitnum=($page-1)*$splitnum;
	
$counum=$limitnum+1;

$k = 0;

$query=mysql_query("select * from expense where deve_state ='".$sort."' order by apply_date desc limit ".$limitnum.",".$splitnum);
while ($row = mysql_fetch_array($query)) {
	$rowdata[$k++] = $row;
}

mysql_free_result($query);

?>

<script language="JavaScript">

function CheckAction(comm) {

	var count=0;
	
	document.main.target.value='';
	document.main.action.value='';
	
	for (var i=0;i<document.main.length;i++) {
		
		if (document.main.elements[i].checked == true) { 
			if (document.main.target.value.length>0) {
				document.main.target.value=document.main.target.value+'│';
			}
			
			document.main.target.value=document.main.target.value+document.main.elements[i].value;
			count++; 
		}
	}
	
	if (comm=="modify") {

		if (count==0) {
			alert('請選擇要編輯的資料！');
			return;
		} else if (count>1) {
			alert('編輯資料請勿複選！');
			return;
		}
	
	} else if (comm=='delete') {

		if (count==0) {
			alert('請選擇要刪除的資料！');
			return;
		} else  if (confirm('刪除產品大類會同時刪除子目錄的產品資料,您確定要刪除所選擇的資料嗎？') == false) {
			return;
		} 
	}
	
	document.main.action.value = comm
	document.main.submit();

} // function end 

function ChangePage(num) {
	document.main.page.value = num;
	document.main.submit();
} // function end 

function ChangeSort(sort) {
	document.main.sort.value = sort;
	document.main.submit();
}
</script>

<form method=post name="main" style="margin: 0">
<input type="hidden" name="user" value="<? echo $user ?>">
<input type="hidden" name="pass" value="<? echo $pass ?>">
<input type="hidden" name="action">
<input type="hidden" name="target">
<input type="hidden" name="page" value="<? echo $page ?>">
<?
		$query1=mysql_query("select * from expense_fee_deve_state where sht_name = '".$sort."'");
		while ($row1 = mysql_fetch_array($query1))
	{
?>
<input type="hidden" name="sort" value="<? echo $row1[sht_name]; ?>">
<input type="hidden" name="full_sort" value="<? echo $row1[name]; ?>">
<?}?>
<table width=100% cellspacing=0 cellpadding=0>
<tr>
	<td>
		
		<!--- <input type="button" value="新增資料" onClick="CheckAction('new')"> --->
		<? if ($rowsize>0) { ?>
		<input type="button" value="審核資料" onClick="CheckAction('modify')">　
		<!--- <input type="button" value="刪除選取" onClick="CheckAction('delete')"> --->
		<? } else { ?>
		<input type="button" value="審核資料" style="color: 8C8C8C">　
		<!--- <input type="button" value="刪除選取" style="color: 8C8C8C"> --->
		<? } ?>
	
	</td>
	<td align="right">
		<select style="font-size: 9pt" onChange="ChangeSort(this.options[selectedIndex].value)">
		<?$query=mysql_query("select * from expense_fee_deve_state order by nu");
		while ($row = mysql_fetch_array($query))
		{?>
		<option <? if ($sort==$row[sht_name]) echo selected ?> value='<? echo $row[sht_name];?>'><? echo $row[name];?></option>;
		<?}?>
		</select>
		<select style="font-size: 9pt" onChange="ChangePage(this.options[selectedIndex].value)">
		<option value='1'>第 01 頁</option>

		<?for ($i=2;$i<=$pagetotal;$i++) {
			$sellab = ($i==$page) ? "selected" : "";
			printf ("<option value='%d' %s>第 %02d 頁</option>\n",$i,$sellab,$i);
		}?>

		</select>
	</td>
</tr>
</table>


  <table width=100%  cellspacing=0 style="margin-top: 8" cellpadding="3">
    <tr align="center" height="22" bgcolor="CCCCCC"> 
      <td align="center" width=20>序</td>
	  <td align="center" width=20>選</td>
	  <td align="center">登錄號碼</td>
	  <td align="center">申請日期</td>
	  <td align="center">申請地區</td>
	  <td align="center">申請費用</td>
	  <td align="center">費用細目</td>
	  <td align="center">產生月份</td>
	  <td align="center">申請部門</td>
	  <td align="center">申請人</td>
	  <td align="center">金額幣別</td>
	  <td align="center">申請金額</td>
	  <td align="center">供應廠商</td>
	  <td align="center">審核狀態</td>
</tr>

<?for ($i=0;$i<count($rowdata);$i++) {?>
	
	<tr align="center" height=22> 
      <td height="20"><? echo ($counum+$i) ?></td>
		
      <td height="20"><input type="checkbox" name="<? echo $rowdata[$i][nu] ?>" value="<? echo $rowdata[$i][nu] ?>"></td>
		
      <td align="left" height="20">&nbsp;<? echo $rowdata[$i][apply_form] ?></td>
		
      <td height="20">&nbsp;<? echo $rowdata[$i][apply_date] ?></td>
		
      <td height="20">&nbsp;<?if($rowdata[$i][apply_area]=="T"){echo "台灣";}
		  else if ($rowdata[$i][apply_area]=="S"){echo "深圳";}?></td>
		
      <td height="20">&nbsp;<?$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$rowdata[$i][apply_fee]."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[fee_name]?></td>
		
      <td height="20">&nbsp;<?$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$rowdata[$i][apply_fee]."' and item_nu = '".$rowdata[$i][apply_fee_item]."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[item_name]?></td>
		
      <td  height="20">&nbsp;<? echo $rowdata[$i][apply_y]."-".$rowdata[$i][apply_m]?></td>
		
      <td height="20">&nbsp;<? echo $rowdata[$i][apply_fee_dept] ?></td>
		
      <td height="20">&nbsp;<? echo $rowdata[$i][apply_fee_name] ?></td>
		
	  <td height="20">&nbsp;<? echo $rowdata[$i][fee_type]?></td>
	  
      <td height="20"><? echo "$ ".$rowdata[$i][fee_amount]?></td>
		
      <td height="20">&nbsp;<?$query_deve=mysql_query("select * from factory_list where factory_code = '".$rowdata[$i][factory]."'");
	  $row_deve = mysql_fetch_array($query_deve);
	  echo $row_deve[factory_short_name]?><?if($rowdata[$i][factory_other]){echo " 阪京實業 - ".$rowdata[$i][factory_other];}?></td>
		
      <td  height="20">&nbsp;<?$query_deve=mysql_query("select * from expense_fee_deve_state where sht_name = '".$rowdata[$i][deve_state]."'");
	  $row_deve = mysql_fetch_array($query_deve);
	  echo $row_deve[name]?></td>
	</tr>
	<tr> 
      <td height=1 bgcolor="#666666" colspan="14"></td>
    </tr>
	<?}?>
</table>

<div style="margin-top: 10">
找到資料 <font color=FF0000><b><? echo $rowsize ?></b></font> 筆、
共分 <font color=FF0000><b><? echo $pagetotal ?></b></font> 頁
</div>

</form>