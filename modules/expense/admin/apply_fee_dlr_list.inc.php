<?

$query = mysql_query ("select * from expense_fee_dlr") ;
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

$query=mysql_query("select * from expense_fee_dlr order by nu desc limit ".$limitnum.",".$splitnum);
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
				document.main.target.value=document.main.target.value+'�x';
			}
			
			document.main.target.value=document.main.target.value+document.main.elements[i].value;
			count++; 
		}
	}
	
	if (comm=="modify") {

		if (count==0) {
			alert('�п�ܭn�s�誺��ơI');
			return;
		} else if (count>1) {
			alert('�s���ƽФŽƿ�I');
			return;
		}
	
	} else if (comm=='delete') {

		if (count==0) {
			alert('�п�ܭn�R������ơI');
			return;
		} else  if (confirm('�z�T�w�n�R���ҿ�ܪ���ƶܡH') == false) {
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

function imgShow(sn) {
	imgwin=window.open('../images/product/'+sn+'.gif','imgwin','width=160,height=160,scrollbars=no')
}

</script>

<form method=post name="main" style="margin: 0">
<input type="hidden" name="user" value="<? echo $user ?>">
<input type="hidden" name="pass" value="<? echo $pass ?>">
<input type="hidden" name="action">
<input type="hidden" name="target">
<input type="hidden" name="page" value="<? echo $page ?>">
<input type="hidden" name="sort" value="1">
<table width=100% cellspacing=0 cellpadding=0>
<tr>
	<td>
		
		<input type="button" value="�s�W���" onClick="CheckAction('new')">

		<? if ($rowsize>0) { ?>
		<input type="button" value="�ק鷺�e" onClick="CheckAction('modify')">�@
		<!--- <input type="button" value="�R�����" onClick="CheckAction('delete')"> --->
		<? } else { ?>
		<input type="button" value="�ק鷺�e" style="color: 8C8C8C">�@
		<!--- <input type="button" value="�R�����" style="color: 8C8C8C"> --->
		<? } ?>
		
	</td>
	<td align="right">
		
		<select style="font-size: 9pt" onChange="ChangePage(this.options[selectedIndex].value)">
		<option value='1'>�� 01 ��</option>

		<?for ($i=2;$i<=$pagetotal;$i++) {
			$sellab = ($i==$page) ? "selected" : "";
			printf ("<option value='%d' %s>�� %02d ��</option>\n",$i,$sellab,$i);
		}?>

		</select>

	</td>
</tr>
</table>


  <table width=100%  cellspacing=1 style="margin-top: 8">
    <tr align="center" height="22"> 
      <td align="center" width=40 bgcolor="CCCCCC">��</td>
	  <td align="center" bgcolor="CCCCCC">��</td>
	  <td align="center" width=200 bgcolor="CCCCCC">���O(����)</td>
	  <td align="center" width=250 bgcolor="CCCCCC">���O(�^��)</td>
</tr>

<?for ($i=0;$i<count($rowdata);$i++) {?>
	
	<tr align="center" height=22> 
      <td><? echo ($counum+$i) ?></td>
		
      <td>
<input type="checkbox" name="<? echo $rowdata[$i][nu] ?>" value="<? echo $rowdata[$i][nu] ?>"></td>
		
      <td align="left">&nbsp;<? echo $rowdata[$i][name_chi] ?></td>
		
		
      <td>&nbsp;<? echo $rowdata[$i][name_eng] ?></td>
	</tr>
	<tr> 
      <td height=1 bgcolor="#666666" colspan="4"></td>
    </tr>
	<?}?>
</table>

<div style="margin-top: 10">
����� <font color=FF0000><b><? echo $rowsize ?></b></font> ���B
�@�� <font color=FF0000><b><? echo $pagetotal ?></b></font> ���B
�C�� <font color=FF0000><b><? echo $splitnum ?></b></font> ���C
</div>

</form>