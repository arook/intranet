<?

$query = mysql_query ("select * from factory_list") ;
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

$query=mysql_query("select * from factory_list order by nu desc limit ".$limitnum.",".$splitnum);
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

</script>

<form method=post name="main" style="margin: 0">
<input type="hidden" name="user" value="<? echo $user ?>">
<input type="hidden" name="pass" value="<? echo $pass ?>">
<input type="hidden" name="action">
<input type="hidden" name="target">
<input type="hidden" name="page" value="<? echo $page ?>">
<input type="hidden" name="sort" value="3">
<table width=100% cellspacing=0 cellpadding=0>
<tr>
	<td>
		
		<input type="button" value="新增資料" onClick="CheckAction('new')">
		<? if ($rowsize>0) { ?>
		<input type="button" value="修改內容" onClick="CheckAction('modify')">　
		<!--- <input type="button" value="刪除選取" onClick="CheckAction('delete')"> --->
		<? } else { ?>
		<input type="button" value="修改內容" style="color: 8C8C8C">　
		<!--- <input type="button" value="刪除選取" style="color: 8C8C8C"> --->
		<? } ?>
		
	</td>
	<td><div align="right">
		<select style="font-size: 9pt" onChange="ChangePage(this.options[selectedIndex].value)">
		<option value='1'>第 01 頁</option>

		<?for ($i=2;$i<=$pagetotal;$i++) {
			$sellab = ($i==$page) ? "selected" : "";
			printf ("<option value='%d' %s>第 %02d 頁</option>\n",$i,$sellab,$i);
		}?>

		</select></div>
	</td>
</tr>
</table>


  <table width=100%  cellspacing=1 style="margin-top: 8">
    <tr align="center" height="22"> 
      <td align="center" width=40 bgcolor="CCCCCC">序</td>
	  <td align="center" width=20 bgcolor="CCCCCC">選</td>
	  <td align="center" width=200 bgcolor="CCCCCC">名稱(中)</td>
	  <td align="center" width=200 bgcolor="CCCCCC">簡名稱(中)</td>
	  <td align="center" width=250 bgcolor="CCCCCC">編碼</td>
</tr>

<?for ($i=0;$i<count($rowdata);$i++) {?>
	
	<tr align="center" height=22> 
      <td><? echo ($counum+$i) ?></td>
		
      <td>
<input type="checkbox" name="<? echo $rowdata[$i][nu] ?>" value="<? echo $rowdata[$i][nu] ?>"></td>
		
      <td>&nbsp;<? echo $rowdata[$i][factory_name] ?></td>
		
      <td>&nbsp;<? echo $rowdata[$i][factory_short_name] ?></td>
		
      <td>&nbsp;<? echo $rowdata[$i][factory_code] ?></td>
	</tr>
	<tr> 
      <td height=1 bgcolor="#666666" colspan="5"></td>
    </tr>
	<?}?>
</table>

<div style="margin-top: 10">
找到資料 <font color=FF0000><b><? echo $rowsize ?></b></font> 筆、
共分 <font color=FF0000><b><? echo $pagetotal ?></b></font> 頁
</div>

</form>