
<table cellspacing=1 cellpadding=3 style="margin-top: 5pt">
  <tr><input type="hidden" name="fee_name" value="<? echo $full_sort ?>"><input type="hidden" name="fee_nu" value="<? echo $sort ?>">
	<td width=120 align="right">申請費用類別：</td>
	<td><? echo $full_sort ?></td>
</tr>
<tr>
	<td width=120 align="right">申請費用細目名稱：</td>
	<td>
<input type="text" name="item_name" value="<? echo $row[item_name] ?>" style="width: 400" maxlength=64></td>
</tr>
<tr>
	<td width=120 align="right">申請費用細目編碼：</td>
	<td><input type="text" name="item_nu" value="<? echo $row[item_nu] ?>" style="width: 400" maxlength=3></td>
</tr>
<tr>
	<td width=120 align="right">實物：</td>
	<td><input type="text" name="apply_type" value="<? echo $row[apply_type] ?>" style="width: 400" maxlength=64></td>
</tr>
<tr>
	<td width=120 align="right">單筆金額：</td>
	<td><input type="text" name="sing_target" value="<? echo $row[sing_target] ?>" style="width: 400" maxlength=64></td>
</tr>
<tr>
	<td width=120 align="right">預算金額：</td>
	<td><input type="text" name="m_target" value="<? echo $row[m_target] ?>" style="width: 400" maxlength=64></td>
</tr>
<tr>
	<td width=120 align="right">顯示/隱藏 ：</td>
	<td>
	<input type="radio" name="item_sta" value="1" <?if($row[item_sta]) echo"checked";?>>顯示 
	<input type="radio" name="item_sta" value="0" <?if(!$row[item_sta]) echo"checked";?>>隱藏
	</td>
</tr>
<tr>
	<td width=120 align="right">排序 ：</td>
	<td><input type="text" name="item_ord" value="<? echo $row[item_ord] ?>" style="width: 400" maxlength=64></td>
</tr>
</table>

	