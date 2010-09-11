<table cellspacing=1 cellpadding=3 bgcolor="31415A" style="margin-top: 5pt">
<tr height=25>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">商品代碼編號：</td>
	<td bgcolor="FFFFFF"><? echo $row[nu] ?></td>
</tr>
<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">名稱(中)：</td>
	<td bgcolor="FFFFFF"><input type="text" name="name_eng" value="<? echo $row[name_eng] ?>" style="background-color: FFFFDD; width: 360"></td>
</tr>
<tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">名稱(英)：</td>
	<td bgcolor="FFFFFF"><input type="text" name="name_chi" value="<? echo $row[name_chi] ?>" style="background-color: FFFFDD; width: 360"></td>
</tr>
<!--- <tr>
	<td width=100 bgcolor="C6C7E7" background="images/back_99.gif" align="right">上傳插頭圖片：</td>
	<td bgcolor="FFFFFF"><input type="file" size=25 name=img>
	<?if(file_exists("../images/".$row[name_chi].".jpg") && $action=="modify"){?>
	<img src="../images/<?echo $row[name_chi]?>.jpg" width="50" height="50" border="0" alt="">
	<?}?>
	</td>
</tr> --->
</table>