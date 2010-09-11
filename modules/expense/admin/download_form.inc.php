

<table cellspacing=1 cellpadding=3 bgcolor="31415A" style="margin-top: 5pt" width=480>
<tr height=25>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">程式類別：</td>
	<td bgcolor="FFFFFF"><? echo ($row["sort"]=="安裝說明") ? "安裝說明" : $row["sort"] ?></td>
</tr>
</table>

<table cellspacing=1 cellpadding=3 bgcolor="31415A" style="margin-top: 10pt" width=480>
<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">程式名稱 (中)：</td>
	<td bgcolor="FFFFFF"><input type="text" name="topic" value="<? echo $row['topic'] ?>" style="background-color: FFFFDD" size="50" maxlength=32></td>
</tr>
<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">程式名稱 (英)：</td>
	<td bgcolor="FFFFFF"><input type="text" name="topic_e" value="<? echo $row['topic_e'] ?>" style="background-color: FFFFDD" size="50" maxlength=32></td>
</tr>
</table>

<table cellspacing=1 cellpadding=3 bgcolor="31415A" style="margin-top: 10pt" width=480>
<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">上傳檔案：</td>
	<td bgcolor="FFFFFF">
		<input type="file" name="imgfile" style="width: 100%; background-color: FFFFDD"></td>
</tr>
</table>

<div style="margin-top: 10pt; line-height: 20px">
<font color=AA0000>概述說明：字數限制在 16 字以內</font><br>
</div>
	