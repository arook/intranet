<table cellspacing=1 cellpadding=3 bgcolor="31415A" style="margin-top: 5pt">
<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">�T���D�D (��)�G</td>
	<td bgcolor="FFFFFF"><input type="text" name="topic" value="<? echo $row['topic'] ?>" style="background-color: FFFFDD" size="50" maxlength=64></td>
</tr>
<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">�T���D�D (�^)�G</td>
	<td bgcolor="FFFFFF"><input type="text" name="topic_e" value="<? echo $row['topic_e'] ?>" style="background-color: FFFFDD" size="50" maxlength=64></td>
</tr>
<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">²�z���� (��)�G</td>
	<td bgcolor="FFFFFF"><input type="text" name="mess1" value="<? echo $row['mess1'] ?>" style="background-color: FFFFDD" size="50" maxlength=255></td>
</tr>
<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">²�z���� (�^)�G</td>
	<td bgcolor="FFFFFF"><input type="text" name="mess1_e" value="<? echo $row['mess1_e'] ?>" style="background-color: FFFFDD" size="50" maxlength=255></td>
</tr>
<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">�W�Ǭ����Ϥ��G</td>
	<td bgcolor="FFFFFF">
		<input type="file" name="imgfile" style="width: 100%; background-color: FFFFDD"></td>
</tr>

<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">�ԲӤ��e (��)�G</td>
	<td bgcolor="FFFFFF"><textarea name="mess2" rows="8" style="width: 100%; font-size: 9pt; background-color: FFFFDD" ><? echo eregi_replace("<br>","\n",$row['mess2']) ?></textarea></td>
</tr>
<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">�ԲӤ��e (�^)�G</td>
	<td bgcolor="FFFFFF"><textarea name="mess2_e" rows="8" style="width: 100%; font-size: 9pt; background-color: FFFFDD" ><? echo eregi_replace("<br>","\n",$row['mess2_e']) ?></textarea></td>
</tr>


<?

if (file_exists("../images/news/".$target.".gif") && $action=="modify") {
	
	?>

	<tr>
		<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">�������ɡG</td>
		<td bgcolor="FFFFFF">
			<img src="../images/news/<? echo $target ?>.gif" style="margin-bottom: 10pt"><br>
			<input type="checkbox" name="delimg"> �R����������<br>
		</td>
	</tr>

	<?
}

?>

</table>

<div style="margin-top: 10pt; line-height: 20px">
<font color=AA0000>²�z�����G�r�ƭ���b���Q�r�H��</font><br>
<font color=AA0000>�����Ϥ��G���ɭ���j�p�� 140 x 140</font>
</div>
	