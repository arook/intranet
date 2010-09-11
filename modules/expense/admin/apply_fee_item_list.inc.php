<?if (!$sort) {
    $sort = "1561";
}

$query = mysql_query ("select * from expense_fee where fee_nu ='".$sort."'") ;
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

$query=mysql_query("select * from expense_fee where fee_nu ='".$sort."' order by item_sta desc , item_ord limit ".$limitnum.",".$splitnum);
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
		} else  if (confirm('您確定要刪除所選擇的資料嗎？') == false) {
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
		$query1=mysql_query("select * from expense_fee_type where fee_nu = '".$sort."'");
		while ($row1 = mysql_fetch_array($query1))
	{
?>
<input type="hidden" name="sort" value="<? echo $row1[fee_nu]; ?>">
<input type="hidden" name="full_sort" value="<? echo $row1[fee_name]; ?>">
<?}?>
<table width=100% cellspacing=0 cellpadding=0>
<tr>
	<td>
		
		<input type="button" value="新增資料" onClick="CheckAction('new')">
		<? if ($rowsize>0) { ?>
		<input type="button" value="修改內容" onClick="CheckAction('modify')">　
		<input type="button" value="刪除選取" onClick="CheckAction('delete')">
		<? } else { ?>
		<input type="button" value="修改內容" style="color: 8C8C8C">　
		<input type="button" value="刪除選取" style="color: 8C8C8C">
		<? } ?>
		
	</td>
	<td align="right">
		<select style="font-size: 9pt" onChange="ChangeSort(this.options[selectedIndex].value)">
		<?$query=mysql_query("select * from expense_fee_type where fee_sta=1 order by fee_ord");
		while ($row = mysql_fetch_array($query))
		{?>
		<option <? if ($sort==$row[fee_nu]) echo selected ?> value='<? echo $row[fee_nu];?>'><? echo $row[fee_name];?></option>;
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


  <table width=100%  cellspacing=1 style="margin-top: 8">
    <tr align="center" height="22"> 
      <td align="center" width=40 bgcolor="CCCCCC">序</td>
	  <td align="center" width=20 bgcolor="CCCCCC">選</td>
	  <td align="center" width=60 bgcolor="CCCCCC">顯/隱</td>
	  <td align="center" width=100 bgcolor="CCCCCC">排序</td>
	  <td align="center" width=200 bgcolor="CCCCCC">名稱(中)</td>
	  <td align="center" width=230 bgcolor="CCCCCC">編碼</td>
	  <td align="center" width=230 bgcolor="CCCCCC">申請費用類別</td>
	  <td align="center" width=230 bgcolor="CCCCCC">實物</td>
	  <td align="center" width=200 bgcolor="CCCCCC">單筆金額</td>
	  <td align="center" width=200 bgcolor="CCCCCC">預算金額</td>
</tr>

<?for ($i=0;$i<count($rowdata);$i++) {?>
	
	<tr align="center" height=22> 
      <td><? echo ($counum+$i) ?></td>
		
      <td>
<input type="checkbox" name="<? echo $rowdata[$i][nu] ?>" value="<? echo $rowdata[$i][nu] ?>"></td>
	  <td><? echo $rowdata[$i][item_sta] ? '顯示' : '隱藏';?></td>
	  <td>&nbsp;<? echo $rowdata[$i][item_ord] ?></td>
      <td>&nbsp;<? echo $rowdata[$i][item_name] ?></td>
      <td>&nbsp;<? echo $rowdata[$i][item_nu] ?></td>
      <td>&nbsp;<? echo $rowdata[$i][fee_name] ?></td>
	  <td>&nbsp;<? echo $rowdata[$i][apply_type] ?></td>
	  <td align="right">&nbsp;<? echo $rowdata[$i][sing_target]?></td>
	  <td align="right">&nbsp;<? echo $rowdata[$i][m_target]?></td>
	</tr><?$max = $rowdata[$i][m_target]+$max;?>
	<tr> 
      <td height=1 bgcolor="#666666" colspan="10"></td>
    </tr>
	<?}?>
	<tr><?$query_target=mysql_query("select m_target from expense_fee_type where fee_nu='".$sort."'");
	$row_target = mysql_fetch_array($query_target);?> 
      <td colspan="9" align="right">費用科目金額上限 :</td>
	  <td align="right"><?echo $row_target[m_target]?></td>
    </tr>
	<tr> 
      <td colspan="9" align="right">目前總金額 :</td>
	  <td align="right"><?if($max>$row_target[m_target]){echo "<font color=red><b>";}?><?echo $max?></td>
    </tr>

	<tr> 
      <td height=1 bgcolor="#666666" colspan="10"></td>
    </tr>
</table>

<div style="margin-top: 10">
找到資料 <font color=FF0000><b><? echo $rowsize ?></b></font> 筆、
共分 <font color=FF0000><b><? echo $pagetotal ?></b></font> 頁
</div>

</form>