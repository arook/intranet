<?$clientmess	= "
\n";$clientmess	.= "<table width=700 border=0 cellspacing=0 cellpadding=0>
\n";$clientmess	.= "  <tr> 
\n";$clientmess	.= "    <td width=520 height=60><img src=http://www.ozaki.com.tw/intranet/modules/expense/images/title.gif width=400 height=35 border=0><br><strong>費用/設備申請:</strong></td>
\n";$clientmess	.= "  </tr>
\n";$clientmess	.= "  <tr> 
\n";$clientmess	.= "    <td><table width=92% border=0 align=right cellpadding=0 cellspacing=4>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td width=14% height=20>登錄號碼</td>
\n";$clientmess	.= "          <td width=86% height=20>
\n";$clientmess	.= "$apply_form
\n";$clientmess	.= "</td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td width=14% height=20> 申請日期</td>
\n";$clientmess	.= "          <td width=86% height=20>
\n";$clientmess	.= "$apply_date
\n";$clientmess	.= "</td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td height=20>申請地區</td>
\n";$clientmess	.= "          <td height=20>
\n";?>
<?if($apply_area=="T"){$clientmess	.="台灣";}
		  else if ($apply_area=="S"){$clientmess	.= "深圳";}?>
<?$clientmess	.= "		  </td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td height=20>申請費用</td>
\n";$clientmess	.= "          <td height=20>$ff
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td height=20>費用細目</td>
\n";$clientmess	.= "          <td height=20>$ii
\n";$clientmess	.= "	</td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td height=20>產生月份</td>
\n";$clientmess	.= "          <td height=20>$apply_y / $apply_m</td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr>
\n";$clientmess	.= "          <td height=20>申請部門</td>
\n";$clientmess	.= "          <td height=20>$ad
\n";$clientmess	.= "		  </td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td height=20>申請人</td>
\n";$clientmess	.= "          <td height=20>$apply_fee_name</td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr>
\n";$clientmess	.= "          <td height=20>申請人所屬部門</td>
\n";$clientmess	.= "          <td height=20>$afd
\n";$clientmess	.= "		  </td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td height=20>申請金額</td>
\n";$clientmess	.= "          <td height=20>$fee_type $ $fee_amount</td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td height=20>供應廠商</td>
\n";$clientmess	.= "          <td height=20>\n";?>
<?$pro_sel = mysql_query ("select * from factory_list where factory_code = '".$factory."'");
	while ($row_sel = mysql_fetch_array($pro_sel)) {$clientmess	.= $row_sel[factory_short_name];}?>
	<?$clientmess .= "$factory_other\n";?>
<?$clientmess	.= "	</td>
\n";$clientmess	.= "        </tr>\n";?>
		<?if($img_real){?>
<?$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td height=20>檢附文件</td>
\n";$clientmess	.= "          <td height=20><a href=http://www.ozaki.com.tw/intranet/modules/expense/dataimg/".$apply_form."_".$img_real.">\n";?>
<?$clientmess	.= $apply_form."_".$img_real;?>
<?$clientmess	.= "</a></td>\n";
$clientmess	.= "        </tr>\n";?>
		<?}?>
<?$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td height=20>費用詳述/備註</td>
\n";$clientmess	.= "          <td height=20>$ps</td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td colspan=2>&nbsp;</td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "      </table></td>
\n";$clientmess	.= "  </tr>
\n";$clientmess	.= "</table>
\n";?>