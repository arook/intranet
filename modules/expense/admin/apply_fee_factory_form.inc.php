
<table cellspacing=1 cellpadding=3 style="margin-top: 5pt">
  <tr> 
          
    <td width="100" height="35"><strong>�t�ӥN��*</strong></td>
          
    <td width="200" height="35">
<input type="text" name="factory_code" value="<? echo $row[factory_code] ?>"  maxlength=64>
    </td>
          
    <td width="80" height="35"><strong>�t�ӥ��W*</strong></td>
          
    <td width="200" height="35">
<input type="text" name="factory_name" value="<? echo $row[factory_name] ?>"  maxlength=64>
    </td>
        </tr>
        <tr> 
          
    <td height="35"><strong>�t��²��</strong></td>
          
    <td height="35">
<input type="text" name="factory_short_name" value="<? echo $row[factory_short_name] ?>"  maxlength=64></td>
          
    <td height="35"><strong>�Τ@�s��<br>
            </strong></td>
          
    <td height="35">
<input type="text" name="f_code" value="<? echo $row[f_code] ?>"  maxlength=64>
    </td>
        </tr>
        <tr> 
          
    <td height="35"><strong>�t������</strong></td>
          
    <td height="35">
<SELECT name=factory_type size="1" class=SELECT1>
      <option value="" <?if($row[factory_type]==""){echo "selected";}?>>�п��</option>      
      <?$sel_exp_no = mysql_query("select distinct factory_type from factory_list");
	  while ($row_exp_no = mysql_fetch_array($sel_exp_no))
		{echo "
      <option value = $row_exp_no[factory_type]";
	  if($row_exp_no[factory_type]==$row[factory_type]){echo " selected";}
	  echo ">$row_exp_no[factory_type]";}?>    
      </SELECT></td>
          
    <td height="35"><strong>�t�d�H<br>
            </strong></td>
          
    <td height="35">
<input type="text" name="factory_p" value="<? echo $row[factory_p] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>�p���H</strong></td>
          
    <td height="35">
<input type="text" name="factory_cont" value="<? echo $row[factory_cont] ?>"  maxlength=64></td>
          
    <td height="35"><strong>�t�d����</strong></td>
          
    <td height="35">
<input type="text" name="factory_pur" value="<? echo $row[factory_pur] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>�q�ܸ��X�@</strong></td>
          
    <td height="35">
<input type="text" name="factory_tel1" value="<? echo $row[factory_tel1] ?>"  maxlength=64></td>
          
    <td height="35"><strong>�q�ܸ��X�G</strong></td>
          
    <td height="35">
<input type="text" name="factory_tel2" value="<? echo $row[factory_tel2] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>�ǯu���X</strong></td>
          
    <td height="35">
<input type="text" name="factory_fax" value="<? echo $row[factory_fax] ?>"  maxlength=64></td>
          
    <td height="35"><strong>E-MAIL </strong></td>
          
    <td height="35">
<input type="text" name="factory_email" value="<? echo $row[factory_email] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>�t�Ӧa�}*</strong></td>
          
    <td height="35" colspan="3">
<input type="text" name="factory_address" value="<? echo $row[factory_address] ?>" style="width=90%" maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>����ϰ�</strong></td>
          
    <td height="35">
<input type="text" name="factory_trade_area" value="<? echo $row[factory_trade_area] ?>"  maxlength=64></td>
          
    <td height="35"><strong>������O</strong></td>
          
    <td height="35">
<input type="text" name="factory_pay_mon_type" value="<? echo $row[factory_pay_mon_type] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>�}�l�����</strong></td>
          
    <td height="35">
<input type="text" name="factory_start_trade" value="<? echo $row[factory_start_trade] ?>"  maxlength=64></td>
          
    <td height="35"><strong>�̪�����</strong></td>
          
    <td height="35">
<input type="text" name="factory_trade_date" value="<? echo $row[factory_trade_date] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>�������</strong></td>
          
    <td height="35">
<input type="text" name="factory_trade_exp" value="<? echo $row[factory_trade_exp] ?>"  maxlength=64></td>
          
    <td height="35"><strong>�I�ڱ���</strong></td>
          
    <td height="35">
<input type="text" name="factory_payment" value="<? echo $row[factory_payment] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>��~�|�O</strong></td>
          
    <td height="35">
<input type="text" name="factory_pay_tax" value="<? echo $row[factory_pay_tax] ?>"  maxlength=64></td>
          
    <td height="35"><strong>�o���p��</strong></td>
          
    <td height="35">
<input type="text" name="factory_pay_inform" value="<? echo $row[factory_pay_inform] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>���ʳ��I�覡</strong></td>
          
    <td height="35">
<input type="text" name="factory_pay_cont" value="<? echo $row[factory_pay_cont] ?>"  maxlength=64></td>
          
    <td height="35"><strong>���b�覡</strong></td>
          
    <td height="35">
<input type="text" name="factory_pay_type" value="<? echo $row[factory_pay_type] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"> 
      <p><strong>���b���<br>
              </strong><strong>(�i�f��?��)</strong></p></td>
          
    <td height="35">
<input type="text" name="s1" value="<? echo $row[s1] ?>"  maxlength=64></td>
          
    <td height="35"><strong>���b���<br>
            (�i�f�{?��)</strong></td>
          
    <td height="35">
<input type="text" name="s2" value="<? echo $row[s2] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>�I�ڤ��<br>
            (���b��?��)</strong></td>
          
    <td height="35">
<input type="text" name="s3" value="<? echo $row[s3] ?>"  maxlength=64></td>
          
    <td height="35"><strong>�I�ڤ��<br>
            (���b�{?��)</strong></td>
          
    <td height="35">
<input type="text" name="s4" value="<? echo $row[s4] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>�������<br>
            (�I�ګ�?��)</strong></td>
          
    <td height="35">
<input type="text" name="s5" value="<? echo $row[s5] ?>"  maxlength=64></td>
          
    <td height="35"><strong>�������<br>
            (�I�ڳ{?��)</strong></td>
          
    <td height="35">
<input type="text" name="s6" value="<? echo $row[s6] ?>"  maxlength=64></td>
        </tr>
      </table>	