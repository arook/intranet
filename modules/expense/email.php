<?$mess	= "
\n";$mess	.= "<table width=700 border=0 cellspacing=0 cellpadding=0>
\n";$mess	.= "  <tr> 
\n";$mess	.= "    <td width=520 height=60><img src=http://www.ozaki.com.tw/intranet/modules/expense/images/title.gif width=400 height=35 border=0><br><strong>費用/設備申請:</strong></td>
\n";$mess	.= "  </tr>
\n";$mess	.= "  <tr> 
\n";$mess	.= "    <td><table width=92% border=0 align=right cellpadding=0 cellspacing=4>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td width=14% height=20>登錄號碼</td>
\n";$mess	.= "          <td width=86% height=20>
\n";$mess	.= "$apply_form
\n";$mess	.= "</td>
\n";$mess	.= "        </tr>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td width=14% height=20> 申請日期</td>
\n";$mess	.= "          <td width=86% height=20>
\n";$mess	.= "$apply_date
\n";$mess	.= "</td>
\n";$mess	.= "        </tr>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td height=20>申請地區</td>
\n";$mess	.= "          <td height=20>
\n";?>
<?if($apply_area=="T"){$mess	.="台灣";}
		  else if ($apply_area=="S"){$mess	.= "深圳";}?>
<?$mess	.= "		  </td>
\n";$mess	.= "        </tr>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td height=20>申請費用</td>
\n";$mess	.= "          <td height=20>$ff</td>\n";?>

<?$mess	.= "        </tr>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td height=20>費用細目</td>
\n";$mess	.= "          <td height=20>$ii</td>\n";?>

<?$mess	.= "	
\n";$mess	.= "        </tr>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td height=20>產生月份</td>
\n";$mess	.= "          <td height=20>$apply_y / $apply_m</td>
\n";$mess	.= "        </tr>
\n";$mess	.= "        <tr>
\n";$mess	.= "          <td height=20>申請部門</td>
\n";$mess	.= "          <td height=20>$apply_fee_dept
\n";$mess	.= "		  </td>
\n";$mess	.= "        </tr>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td height=20>申請人</td>
\n";$mess	.= "          <td height=20>$apply_fee_name</td>
\n";$mess	.= "        </tr>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td height=20>申請金額</td>
\n";$mess	.= "          <td height=20>$fee_type $ $fee_amount</td>
\n";$mess	.= "        </tr>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td height=20>供應廠商</td>
\n";$mess	.= "          <td height=20>\n";?>
<?$pro_sel = mysql_query ("select * from factory_list where factory_code = '".$factory."'");
	while ($row_sel = mysql_fetch_array($pro_sel)) {$mess	.= $row_sel[factory_short_name];}?>
	<?$mess .= "$factory_other\n";?>
<?$mess	.= "	</td>
\n";$mess	.= "        </tr>\n";?>
		<?if($img_real){?>
<?$mess	.= "        <tr> 
\n";$mess	.= "          <td height=20>檢附文件</td>
\n";$mess	.= "          <td height=20><a href=http://www.ozaki.com.tw/intranet/modules/expense/dataimg/".$apply_form."_".$img_real.">\n";?>
<?$mess	.= $apply_form."_".$img_real;?>
<?$mess	.= "</a></td>\n";
$mess	.= "        </tr>\n";?>
		<?}?>
<?$mess	.= "        <tr> 
\n";$mess	.= "          <td height=20>費用詳述/備註</td>
\n";$mess	.= "          <td height=20>$ps</td>
\n";$mess	.= "        </tr>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td colspan=2>&nbsp;</td>
\n";$mess	.= "        </tr>
\n";$mess	.= "      </table></td>
\n";$mess	.= "  </tr>
\n";$mess	.= "</table>
\n";$mess	.= "<hr>
\n";$mess	.= "<p align=center><font color=#CC0000><a href=http://www.ozaki.com.tw/intranet/modules/expense/pass.php?nn=$apply_form>部門主管確認請按此</a></font></p>
\n";?>