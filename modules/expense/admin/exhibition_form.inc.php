<table cellspacing=1 cellpadding=3 bgcolor="31415A" style="margin-top: 5pt">
<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">�i���D�D (��)�G</td>
	<td bgcolor="FFFFFF"><input type="text" name="topic" value="<? echo $row['topic'] ?>" style="background-color: FFFFDD; width: 400" maxlength=64></td>
</tr>
<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">�i���D�D (�^)�G</td>
	<td bgcolor="FFFFFF"><input type="text" name="topic_e" value="<? echo $row['topic_e'] ?>" style="background-color: FFFFDD; width: 400" maxlength=64></td>
</tr>
</table>

<hr size=1 color=C8C8C8>

<table cellspacing=1 cellpadding=3 bgcolor="31415A">
<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">²�z���� (��)�G</td>
	<td bgcolor="FFFFFF"><input type="text" name="mess1" value="<? echo $row['mess1'] ?>" style="background-color: FFFFDD; width: 400" maxlength=255></td>
</tr>
<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">²�z���� (�^)�G</td>
	<td bgcolor="FFFFFF"><input type="text" name="mess1_e" value="<? echo $row['mess1_e'] ?>" style="background-color: FFFFDD; width: 400" maxlength=255></td>
</tr>
</table>

<hr size=1 color=C8C8C8>

<table cellspacing=1 cellpadding=3 bgcolor="31415A">
<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">�ԲӤ��e (��)�G</td>
	<td bgcolor="FFFFFF"><textarea name="mess2" rows="8" style="width: 400; font-size: 9pt; background-color: FFFFDD" ><? echo eregi_replace("<br>","\n",$row['mess2']) ?></textarea></td>
</tr>
<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">�ԲӤ��e (�^)�G</td>
	<td bgcolor="FFFFFF"><textarea name="mess2_e" rows="8" style="width: 400; font-size: 9pt; background-color: FFFFDD" ><? echo eregi_replace("<br>","\n",$row['mess2_e']) ?></textarea></td>
</tr>
</table>

<hr size=1 color=C8C8C8>

<table cellspacing=1 cellpadding=3 bgcolor="31415A">
<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">�����Ϥ� (�@)�G</td>
	<td bgcolor="FFFFFF">
		<input type="file" name="imgfile1" style="width: 100%; background-color: FFFFDD; width: 400"></td>
</tr>

<?

if (file_exists("../images/exhibition/".$target."_1.gif") && $action=="modify") {
	
	?>

	<tr>
		<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">�w���Ϥ� (�@)�G</td>
		<td bgcolor="FFFFFF">
			<img src="../images/exhibition/<? echo $target ?>_1.gif?<? echo date("YmdHis") ?>" style="margin-bottom: 10pt"><br>
			<input type="checkbox" name="delimg1"> �R�������Ϥ� (�@)<br>
		</td>
	</tr>
	</table>
	
	<table cellspacing=1 cellpadding=3 bgcolor="31415A" style="margin-top: 10pt">
	<?
}

?>

<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">�����Ϥ� (�G)�G</td>
	<td bgcolor="FFFFFF">
		<input type="file" name="imgfile2" style="width: 100%; background-color: FFFFDD; width: 400"></td>
</tr>

<?

if (file_exists("../images/exhibition/".$target."_2.gif") && $action=="modify") {
	
	?>

	<tr>
		<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">�w���Ϥ� (�G)�G</td>
		<td bgcolor="FFFFFF">
			<img src="../images/exhibition/<? echo $target ?>_2.gif?<? echo date("YmdHis") ?>" style="margin-bottom: 10pt"><br>
			<input type="checkbox" name="delimg2"> �R�������Ϥ� (�G)<br>
		</td>
	</tr>

	<?
}

?>

</table>

<div style="margin-top: 10pt; line-height: 20px">
<font color=AA0000>²�z�����G�r�ƭ���b 127 �r�H��</font><br>
<font color=AA0000>�����Ϥ��G���ɭ���j�p�� 140 x 140</font>
</div>
	