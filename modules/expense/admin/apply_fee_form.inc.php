<table cellspacing=1 cellpadding=3 style="margin-top: 5pt">
  <tr>
	<td width=100 align="right">�ӽжO�ΦW�١G</td>
	<td>
<input type="text" name="fee_name" value="<? echo $row[fee_name] ?>" style="width: 360">
    </td>
</tr>
<tr>
	<td width=100 align="right">�ӽжO�νs�X �G</td>
	<td>
<input type="text" maxlength="4" name="fee_nu" value="<? echo $row[fee_nu] ?>" style="width: 360">
    </td>
</tr>
<tr>
	<td width=100 align="right">���B�W�� �G</td>
	<td>
<input type="text" maxlength="4" name="m_target" value="<? echo $row[m_target] ?>" style="width: 360">
    </td>
</tr>
<tr>
	<td width=100 align="right">���/���� �G</td>
	<td>
	<input type="radio" name="fee_sta" value="1" <?if($row[fee_sta]) echo"checked";?>>��� 
	<input type="radio" name="fee_sta" value="0" <?if(!$row[fee_sta]) echo"checked";?>>����
    </td>
</tr>
<tr>
	<td width=100 align="right">�Ƨ� �G</td>
	<td>
<input type="text" maxlength="4" name="fee_ord" value="<? echo $row[fee_ord] ?>" style="width: 360">
    </td>
</tr>
</table>