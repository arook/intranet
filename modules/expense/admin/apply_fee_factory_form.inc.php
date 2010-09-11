
<table cellspacing=1 cellpadding=3 style="margin-top: 5pt">
  <tr> 
          
    <td width="100" height="35"><strong>廠商代號*</strong></td>
          
    <td width="200" height="35">
<input type="text" name="factory_code" value="<? echo $row[factory_code] ?>"  maxlength=64>
    </td>
          
    <td width="80" height="35"><strong>廠商全名*</strong></td>
          
    <td width="200" height="35">
<input type="text" name="factory_name" value="<? echo $row[factory_name] ?>"  maxlength=64>
    </td>
        </tr>
        <tr> 
          
    <td height="35"><strong>廠商簡稱</strong></td>
          
    <td height="35">
<input type="text" name="factory_short_name" value="<? echo $row[factory_short_name] ?>"  maxlength=64></td>
          
    <td height="35"><strong>統一編號<br>
            </strong></td>
          
    <td height="35">
<input type="text" name="f_code" value="<? echo $row[f_code] ?>"  maxlength=64>
    </td>
        </tr>
        <tr> 
          
    <td height="35"><strong>廠商類型</strong></td>
          
    <td height="35">
<SELECT name=factory_type size="1" class=SELECT1>
      <option value="" <?if($row[factory_type]==""){echo "selected";}?>>請選擇</option>      
      <?$sel_exp_no = mysql_query("select distinct factory_type from factory_list");
	  while ($row_exp_no = mysql_fetch_array($sel_exp_no))
		{echo "
      <option value = $row_exp_no[factory_type]";
	  if($row_exp_no[factory_type]==$row[factory_type]){echo " selected";}
	  echo ">$row_exp_no[factory_type]";}?>    
      </SELECT></td>
          
    <td height="35"><strong>負責人<br>
            </strong></td>
          
    <td height="35">
<input type="text" name="factory_p" value="<? echo $row[factory_p] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>聯絡人</strong></td>
          
    <td height="35">
<input type="text" name="factory_cont" value="<? echo $row[factory_cont] ?>"  maxlength=64></td>
          
    <td height="35"><strong>負責採購</strong></td>
          
    <td height="35">
<input type="text" name="factory_pur" value="<? echo $row[factory_pur] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>電話號碼一</strong></td>
          
    <td height="35">
<input type="text" name="factory_tel1" value="<? echo $row[factory_tel1] ?>"  maxlength=64></td>
          
    <td height="35"><strong>電話號碼二</strong></td>
          
    <td height="35">
<input type="text" name="factory_tel2" value="<? echo $row[factory_tel2] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>傳真號碼</strong></td>
          
    <td height="35">
<input type="text" name="factory_fax" value="<? echo $row[factory_fax] ?>"  maxlength=64></td>
          
    <td height="35"><strong>E-MAIL </strong></td>
          
    <td height="35">
<input type="text" name="factory_email" value="<? echo $row[factory_email] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>廠商地址*</strong></td>
          
    <td height="35" colspan="3">
<input type="text" name="factory_address" value="<? echo $row[factory_address] ?>" style="width=90%" maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>交易區域</strong></td>
          
    <td height="35">
<input type="text" name="factory_trade_area" value="<? echo $row[factory_trade_area] ?>"  maxlength=64></td>
          
    <td height="35"><strong>交易幣別</strong></td>
          
    <td height="35">
<input type="text" name="factory_pay_mon_type" value="<? echo $row[factory_pay_mon_type] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>開始交易日</strong></td>
          
    <td height="35">
<input type="text" name="factory_start_trade" value="<? echo $row[factory_start_trade] ?>"  maxlength=64></td>
          
    <td height="35"><strong>最近交易日</strong></td>
          
    <td height="35">
<input type="text" name="factory_trade_date" value="<? echo $row[factory_trade_date] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>價格條件</strong></td>
          
    <td height="35">
<input type="text" name="factory_trade_exp" value="<? echo $row[factory_trade_exp] ?>"  maxlength=64></td>
          
    <td height="35"><strong>付款條件</strong></td>
          
    <td height="35">
<input type="text" name="factory_payment" value="<? echo $row[factory_payment] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>營業稅別</strong></td>
          
    <td height="35">
<input type="text" name="factory_pay_tax" value="<? echo $row[factory_pay_tax] ?>"  maxlength=64></td>
          
    <td height="35"><strong>發票聯數</strong></td>
          
    <td height="35">
<input type="text" name="factory_pay_inform" value="<? echo $row[factory_pay_inform] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>採購單交付方式</strong></td>
          
    <td height="35">
<input type="text" name="factory_pay_cont" value="<? echo $row[factory_pay_cont] ?>"  maxlength=64></td>
          
    <td height="35"><strong>結帳方式</strong></td>
          
    <td height="35">
<input type="text" name="factory_pay_type" value="<? echo $row[factory_pay_type] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"> 
      <p><strong>結帳日期<br>
              </strong><strong>(進貨後?月)</strong></p></td>
          
    <td height="35">
<input type="text" name="s1" value="<? echo $row[s1] ?>"  maxlength=64></td>
          
    <td height="35"><strong>結帳日期<br>
            (進貨逢?月)</strong></td>
          
    <td height="35">
<input type="text" name="s2" value="<? echo $row[s2] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>付款日期<br>
            (結帳後?月)</strong></td>
          
    <td height="35">
<input type="text" name="s3" value="<? echo $row[s3] ?>"  maxlength=64></td>
          
    <td height="35"><strong>付款日期<br>
            (結帳逢?月)</strong></td>
          
    <td height="35">
<input type="text" name="s4" value="<? echo $row[s4] ?>"  maxlength=64></td>
        </tr>
        <tr> 
          
    <td height="35"><strong>票期日期<br>
            (付款後?月)</strong></td>
          
    <td height="35">
<input type="text" name="s5" value="<? echo $row[s5] ?>"  maxlength=64></td>
          
    <td height="35"><strong>票期日期<br>
            (付款逢?月)</strong></td>
          
    <td height="35">
<input type="text" name="s6" value="<? echo $row[s6] ?>"  maxlength=64></td>
        </tr>
      </table>	