<?$clientmess	= "
\n";$clientmess	.= "<table width=700 border=0 cellspacing=0 cellpadding=0>
\n";$clientmess	.= "  <tr> 
\n";$clientmess	.= "    <td width=520 height=60><img src=http://www.ozaki.com.tw/intranet/modules/expense/images/title.gif width=400 height=35 border=0><br><strong>�O��/�]�ƥӽ�:</strong></td>
\n";$clientmess	.= "  </tr>
\n";$clientmess	.= "  <tr> 
\n";$clientmess	.= "    <td><table width=92% border=0 align=right cellpadding=0 cellspacing=4>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td width=14% height=20>�n�����X</td>
\n";$clientmess	.= "          <td width=86% height=20>
\n";$clientmess	.= "$apply_form
\n";$clientmess	.= "</td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td width=14% height=20> �ӽФ��</td>
\n";$clientmess	.= "          <td width=86% height=20>
\n";$clientmess	.= "$apply_date
\n";$clientmess	.= "</td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td height=20>�ӽЦa��</td>
\n";$clientmess	.= "          <td height=20>
\n";?>
<?if($apply_area=="T"){$clientmess	.="�x�W";}
		  else if ($apply_area=="S"){$clientmess	.= "�`�`";}?>
<?$clientmess	.= "		  </td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td height=20>�ӽжO��</td>
\n";$clientmess	.= "          <td height=20>$ff
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td height=20>�O�βӥ�</td>
\n";$clientmess	.= "          <td height=20>$ii
\n";$clientmess	.= "	</td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td height=20>���ͤ��</td>
\n";$clientmess	.= "          <td height=20>$apply_y / $apply_m</td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr>
\n";$clientmess	.= "          <td height=20>�ӽг���</td>
\n";$clientmess	.= "          <td height=20>$ad
\n";$clientmess	.= "		  </td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td height=20>�ӽФH</td>
\n";$clientmess	.= "          <td height=20>$apply_fee_name</td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr>
\n";$clientmess	.= "          <td height=20>�ӽФH���ݳ���</td>
\n";$clientmess	.= "          <td height=20>$afd
\n";$clientmess	.= "		  </td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td height=20>�ӽЪ��B</td>
\n";$clientmess	.= "          <td height=20>$fee_type $ $fee_amount</td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td height=20>�����t��</td>
\n";$clientmess	.= "          <td height=20>\n";?>
<?$pro_sel = mysql_query ("select * from factory_list where factory_code = '".$factory."'");
	while ($row_sel = mysql_fetch_array($pro_sel)) {$clientmess	.= $row_sel[factory_short_name];}?>
	<?$clientmess .= "$factory_other\n";?>
<?$clientmess	.= "	</td>
\n";$clientmess	.= "        </tr>\n";?>
		<?if($img_real){?>
<?$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td height=20>�˪����</td>
\n";$clientmess	.= "          <td height=20><a href=http://www.ozaki.com.tw/intranet/modules/expense/dataimg/".$apply_form."_".$img_real.">\n";?>
<?$clientmess	.= $apply_form."_".$img_real;?>
<?$clientmess	.= "</a></td>\n";
$clientmess	.= "        </tr>\n";?>
		<?}?>
<?$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td height=20>�O�θԭz/�Ƶ�</td>
\n";$clientmess	.= "          <td height=20>$ps</td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "        <tr> 
\n";$clientmess	.= "          <td colspan=2>&nbsp;</td>
\n";$clientmess	.= "        </tr>
\n";$clientmess	.= "      </table></td>
\n";$clientmess	.= "  </tr>
\n";$clientmess	.= "</table>
\n";?>