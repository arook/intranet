<?$mess	= "
\n";$mess	.= "<table width=700 border=0 cellspacing=0 cellpadding=0>
\n";$mess	.= "  <tr> 
\n";$mess	.= "    <td width=520 height=60><img src=http://www.ozaki.com.tw/intranet/modules/expense/images/title.gif width=400 height=35 border=0><br><strong>�O��/�]�ƥӽ�:</strong></td>
\n";$mess	.= "  </tr>
\n";$mess	.= "  <tr> 
\n";$mess	.= "    <td><table width=92% border=0 align=right cellpadding=0 cellspacing=4>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td width=14% height=20>�n�����X</td>
\n";$mess	.= "          <td width=86% height=20>
\n";$mess	.= "$apply_form
\n";$mess	.= "</td>
\n";$mess	.= "        </tr>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td width=14% height=20> �ӽФ��</td>
\n";$mess	.= "          <td width=86% height=20>
\n";$mess	.= "$apply_date
\n";$mess	.= "</td>
\n";$mess	.= "        </tr>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td height=20>�ӽЦa��</td>
\n";$mess	.= "          <td height=20>
\n";?>
<?if($apply_area=="T"){$mess	.="�x�W";}
		  else if ($apply_area=="S"){$mess	.= "�`�`";}?>
<?$mess	.= "		  </td>
\n";$mess	.= "        </tr>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td height=20>�ӽжO��</td>
\n";$mess	.= "          <td height=20>$ff</td>\n";?>

<?$mess	.= "        </tr>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td height=20>�O�βӥ�</td>
\n";$mess	.= "          <td height=20>$ii</td>\n";?>

<?$mess	.= "	
\n";$mess	.= "        </tr>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td height=20>���ͤ��</td>
\n";$mess	.= "          <td height=20>$apply_y / $apply_m</td>
\n";$mess	.= "        </tr>
\n";$mess	.= "        <tr>
\n";$mess	.= "          <td height=20>�ӽг���</td>
\n";$mess	.= "          <td height=20>$apply_fee_dept
\n";$mess	.= "		  </td>
\n";$mess	.= "        </tr>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td height=20>�ӽФH</td>
\n";$mess	.= "          <td height=20>$apply_fee_name</td>
\n";$mess	.= "        </tr>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td height=20>�ӽЪ��B</td>
\n";$mess	.= "          <td height=20>$fee_type $ $fee_amount</td>
\n";$mess	.= "        </tr>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td height=20>�����t��</td>
\n";$mess	.= "          <td height=20>\n";?>
<?$pro_sel = mysql_query ("select * from factory_list where factory_code = '".$factory."'");
	while ($row_sel = mysql_fetch_array($pro_sel)) {$mess	.= $row_sel[factory_short_name];}?>
	<?$mess .= "$factory_other\n";?>
<?$mess	.= "	</td>
\n";$mess	.= "        </tr>\n";?>
		<?if($img_real){?>
<?$mess	.= "        <tr> 
\n";$mess	.= "          <td height=20>�˪����</td>
\n";$mess	.= "          <td height=20><a href=http://www.ozaki.com.tw/intranet/modules/expense/dataimg/".$apply_form."_".$img_real.">\n";?>
<?$mess	.= $apply_form."_".$img_real;?>
<?$mess	.= "</a></td>\n";
$mess	.= "        </tr>\n";?>
		<?}?>
<?$mess	.= "        <tr> 
\n";$mess	.= "          <td height=20>�O�θԭz/�Ƶ�</td>
\n";$mess	.= "          <td height=20>$ps</td>
\n";$mess	.= "        </tr>
\n";$mess	.= "        <tr> 
\n";$mess	.= "          <td colspan=2>&nbsp;</td>
\n";$mess	.= "        </tr>
\n";$mess	.= "      </table></td>
\n";$mess	.= "  </tr>
\n";$mess	.= "</table>
\n";$mess	.= "<hr>
\n";$mess	.= "<p align=center><font color=#CC0000><a href=http://www.ozaki.com.tw/intranet/modules/expense/pass.php?nn=$apply_form>�����D�޽T�{�Ы���</a></font></p>
\n";?>