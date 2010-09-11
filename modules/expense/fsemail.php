<?$fsmess	= "
\n";$fsmess	.= "<table width=700 border=0 cellspacing=0 cellpadding=0>
\n";$fsmess	.= "  <tr> 
\n";$fsmess	.= "    <td width=520 height=60><img src=http://www.ozaki.com.tw/intranet/modules/expense/images/title.gif width=400 height=35 border=0><br><strong>費用/設備申請:</strong></td>
\n";$fsmess	.= "  </tr>
\n";$fsmess	.= "  <tr> 
\n";$fsmess	.= "    <td><table width=92% border=0 align=right cellpadding=0 cellspacing=4>
\n";$fsmess	.= "        <tr> 
\n";$fsmess	.= "          <td width=14% height=20>登錄號碼</td>
\n";$fsmess	.= "          <td width=86% height=20>
\n";$fsmess	.= "$apply_form
\n";$fsmess	.= "</td>
\n";$fsmess	.= "        </tr>
\n";$fsmess	.= "        <tr> 
\n";$fsmess	.= "          <td width=14% height=20> 申請日期</td>
\n";$fsmess	.= "          <td width=86% height=20>
\n";$fsmess	.= "$apply_date
\n";$fsmess	.= "</td>
\n";$fsmess	.= "        </tr>
\n";$fsmess	.= "        <tr> 
\n";$fsmess	.= "          <td height=20>申請地區</td>
\n";$fsmess	.= "          <td height=20>
\n";?>
<?if($apply_area=="T"){$fsmess	.="台灣";}
		  else if ($apply_area=="S"){$fsmess	.= "深圳";}?>
<?$fsmess	.= "		  </td>
\n";$fsmess	.= "        </tr>
\n";$fsmess	.= "        <tr> 
\n";$fsmess	.= "          <td height=20>申請費用</td>
\n";$fsmess	.= "          <td height=20>\n";?>

<?$pro_sel = mysql_query ("select * from apply_fee_form where name_chi = '".$apply_fee."'");
	while ($row_sel = mysql_fetch_array($pro_sel)) {$fsmess	.= $row_sel[name_eng];}?></td>
<?$fsmess	.= "        </tr>
\n";$fsmess	.= "        <tr> 
\n";$fsmess	.= "          <td height=20>費用細目</td>
\n";$fsmess	.= "          <td height=20>\n";?>
<?$pro_sel = mysql_query ("select * from apply_fee_form where name_chi = '".$apply_fee_item."'");
	while ($row_sel = mysql_fetch_array($pro_sel)) {$fsmess	.= $row_sel[name_eng];}?>
<?$fsmess	.= "	</td>
\n";$fsmess	.= "        </tr>
\n";$fsmess	.= "        <tr> 
\n";$fsmess	.= "          <td height=20>產生月份</td>
\n";$fsmess	.= "          <td height=20>$apply_y / $apply_m</td>
\n";$fsmess	.= "        </tr>
\n";$fsmess	.= "        <tr>
\n";$fsmess	.= "          <td height=20>申請部門</td>
\n";$fsmess	.= "          <td height=20>$apply_fee_dept
\n";$fsmess	.= "		  </td>
\n";$fsmess	.= "        </tr>
\n";$fsmess	.= "        <tr> 
\n";$fsmess	.= "          <td height=20>申請人</td>
\n";$fsmess	.= "          <td height=20>$apply_fee_name</td>
\n";$fsmess	.= "        </tr>
\n";$fsmess	.= "        <tr> 
\n";$fsmess	.= "          <td height=20>申請金額</td>
\n";$fsmess	.= "          <td height=20>$fee_type $ $fee_amount</td>
\n";$fsmess	.= "        </tr>
\n";$fsmess	.= "        <tr> 
\n";$fsmess	.= "          <td height=20>供應廠商</td>
\n";$fsmess	.= "          <td height=20>\n";?>
<?$pro_sel = mysql_query ("select * from factory_list where factory_code = '".$factory."'");
	while ($row_sel = mysql_fetch_array($pro_sel)) {$fsmess	.= $row_sel[factory_short_name];}?>
	<?$fsmess .= "$factory_other\n";?>
<?$fsmess	.= "	</td>
\n";$fsmess	.= "        </tr>\n";?>
		<?if($img_real){?>
<?$fsmess	.= "        <tr> 
\n";$fsmess	.= "          <td height=20>檢附文件</td>
\n";$fsmess	.= "          <td height=20><a href=http://www.ozaki.com.tw/intranet/modules/expense/dataimg/".$apply_form."_".$img_real.">\n";?>
<?$fsmess	.= $apply_form."_".$img_real;?>
<?$fsmess	.= "</a></td>\n";
$fsmess	.= "        </tr>\n";?>
		<?}?>
<?$fsmess	.= "        <tr> 
\n";$fsmess	.= "          <td height=20>費用詳述/備註</td>
\n";$fsmess	.= "          <td height=20>$ps</td>
\n";$fsmess	.= "        </tr>
\n";$fsmess	.= "        <tr> 
\n";$fsmess	.= "          <td colspan=2>&nbsp;</td>
\n";$fsmess	.= "        </tr>
\n";$fsmess	.= "      </table></td>
\n";$fsmess	.= "  </tr>
\n";$fsmess	.= "</table>
\n";$fsmess	.= "<hr>
\n";$fsmess	.= "<p align=center><font color=#CC0000><a href=http://www.ozaki.com.tw/intranet/modules/expense/fspass.php?nn=$apply_form>財務確認請按此</a></font></p>
\n";?>