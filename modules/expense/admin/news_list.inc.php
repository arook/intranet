<?

$query = mysql_query ("select * from pro_sel") ;
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

$query=mysql_query("select * from news order by sn desc limit ".$limitnum.",".$splitnum);
while ($row = mysql_fetch_array($query)) {
	$rowdata[$k++] = $row;
}

mysql_free_result($query);

mysql_close();


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

</script>

<form method=post name="main" style="margin: 0">
<input type="hidden" name="user" value="<? echo $user ?>">
<input type="hidden" name="pass" value="<? echo $pass ?>">
<input type="hidden" name="action">
<input type="hidden" name="target">
<input type="hidden" name="page" value="<? echo $page ?>">

<table width=100% cellspacing=0 cellpadding=0>
<tr>
	<td>
		
		<input type="button" value="�s�W���" onClick="CheckAction('new')">

		<? if ($rowsize>0) { ?>
		<input type="button" value="�ק鷺�e" onClick="CheckAction('modify')">�@
		<input type="button" value="�R�����" onClick="CheckAction('delete')">
		<? } else { ?>
		<input type="button" value="�ק鷺�e" style="color: 8C8C8C">�@
		<input type="button" value="�R�����" style="color: 8C8C8C">
		<? } ?>
		
	</td>
	<td align="right">
		
		<select style="font-size: 9pt" onChange="ChangePage(this.options[selectedIndex].value)">
		<option value='1'>�� 01 ��</option>

		<?

		for ($i=2;$i<=$pagetotal;$i++) {
			$sellab = ($i==$page) ? "selected" : "";
			printf ("<option value='%d' %s>�� %02d ��</option>\n",$i,$sellab,$i);
		}
		
		?>

		</select>

	</td>
</tr>
</table>


<table width=100%  cellspacing=1 bgcolor= "31415A" style="margin-top: 8">
<tr align="center" bgcolor="C6C7E7" height="22">
	<td width=40 background="images/back_99.gif">��</td>
	<td width=20 background="images/back_99.gif">��</td>
	<td width=100 background="images/back_99.gif">�n�����</td>
	<td background="images/back_99.gif">�T �� �D �D</td>
</tr>

<?

for ($i=0;$i<count($rowdata);$i++) {
	


	?>
	
	<tr bgcolor="<? echo (($i+1)%2==0) ? "EFEFEF":"FFFFFF" ?>" align="center" height=22>
		<td background="images/back_99.gif"><? echo ($counum+$i) ?></td>
		<td><input type="checkbox" name="<? echo $rowdata[$i]['sn'] ?>" value="<? echo $rowdata[$i][sn] ?>"></td>
		<td><? echo $rowdata[$i]['regdate'] ?></td>
		<td align="left">&nbsp;<? echo $rowdata[$i]['topic'] ?></td>
	</tr>
	
	<?

}

for (;$i<$splitnum;$i++) {

	?>
	
	<tr bgcolor="<? echo (($i+1)%2==0) ? "EFEFEF":"FFFFFF" ?>" height=22>
		<td background="images/back_99.gif">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	
	<?
}

?>
</table>

<div style="margin-top: 10">
����� <font color=FF0000><b><? echo $rowsize ?></b></font> ���B
�@�� <font color=FF0000><b><? echo $pagetotal ?></b></font> ���B
�C�� <font color=FF0000><b><? echo $splitnum ?></b></font> ���C
</div>

</form>