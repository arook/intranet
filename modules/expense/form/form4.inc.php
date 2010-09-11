<?$q=explode("," ,$comma_form);
$f=explode("," ,$file_type);
// if($f[0]==""){echo "checked";}?>
<input type="hidden" name="form_mode" value="form4">
          <tr > 
            <td width="14%"> 出差事由 </td>
            <td width="86%">
              <input name="q1" type="text" value="<?echo $q[0]?>" size="40">
            </td>
          </tr>
          <tr > 
            <td>出差日期</td>
            <td width="86%">
              <input name="q2" type="text" value="<?echo $q[1]?>" size="8">
              ~ 
              <input name="q3" type="text" value="<?echo $q[2]?>" size="8">
            </td>
          </tr>
          <tr > 
            <td valign="top">出差地點詳述</td>
            <td>
              <textarea name="q4" cols="50" rows="6"><?echo $q[3]?></textarea>
            </td>
          </tr>
          <tr > 
            <td valign="top">車資 </td>
            <td align="left" valign="top"> 
              
    <table width="498" border="0" cellpadding="0" cellspacing="0" class="px10dash" >
      <tr> 
                  
        <td height="18" width="64">摘要</td>
                  
        <td width="339" height="18">明細</td>
                  
        <td width="95" height="18">金額</td>
                </tr>
                <tr> 
                  
        <td width="64">火車</td>
                  
        <td width="339">由 
          <input name="q5" value="<?echo $q[4]?>" type="text" size="8">
                    到 
                    <input name="q6" value="<?echo $q[5]?>" type="text" size="8">
                    <input type="radio" name="q7" <?if($q[6]=="單程"){echo "checked";}?> value="單程">
                    單程 
                    <input type="radio" name="q7" <?if($q[6]=="來回"){echo "checked";}?> value="來回">
                    來回 </td>
                  
        <td width="95"> 
          <input name="q8" value="<?echo $q[7]?>" type="text" size="8">
                  </td>
                </tr>
                <tr> 
                  
        <td width="64">汽車</td>
                  
        <td width="339">由 
          <input name="q9" value="<?echo $q[8]?>" type="text" size="8">
                    到 
                    <input name="q10" value="<?echo $q[9]?>" type="text" size="8">
                    共計 
                    <input name="q11" value="<?echo $q[10]?>" type="text" size="8">
                    公里 </td>
                  
        <td width="95"> 
          <input name="q12" value="<?echo $q[11]?>" type="text" size="8">
                  </td>
                </tr>
                <tr> 
                  
        <td width="64">機票</td>
                  
        <td width="339">由 
          <input name="q13" value="<?echo $q[12]?>" type="text" size="8">
                    到 
                    <input type="radio" <?if($q[13]=="單程"){echo "checked";}?> name="q14" value="單程">
                    單程 
                    <input type="radio" <?if($q[13]=="來回"){echo "checked";}?> name="q14" value="來回">
                    來回 </td>
                  
        <td width="95"> 
          <input name="q15" value="<?echo $q[14]?>" type="text" size="8">
                  </td>
                </tr>
                <tr> 
                  
        <td width="64">停車費</td>
                  
        <td width="339">&nbsp;</td>
                  
        <td width="95"> 
          <input name="q16" value="<?echo $q[15]?>" type="text" size="8">
                  </td>
                </tr>
                <tr> 
                  
        <td width="64">其它</td>
                  
        <td width="339"> 
          <input name="q17" value="<?echo $q[16]?>" type="text" size="8">
                  </td>
                  
        <td width="95"> 
          <input name="q18" value="<?echo $q[17]?>" type="text" size="8">
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr > 
            <td valign="top">膳食費</td>
            <td> 
              <input name="q19" type="text" value="<?echo $q[18]?>" size="8">
              ~ 
              <input name="q20" type="text" value="<?echo $q[19]?>" size="8">
              計 
              <input name="q21" type="text" value="<?echo $q[20]?>" size="5">
              人 
              <input name="q22" type="text" value="<?echo $q[21]?>" size="5">
              天 </td>
          </tr>
          <tr > 
            <td valign="top">住宿費</td>
            <td>
              <input name="q23" type="text" value="<?echo $q[22]?>" size="8">
              ~ 
              <input name="q24" type="text" value="<?echo $q[23]?>" size="8">
              計 
              <input name="q25" type="text" value="<?echo $q[24]?>" size="5">
              人 
              <input name="q26" type="text" value="<?echo $q[25]?>" size="5">
              天 </td>
          </tr>
          <tr > 
            <td valign="top">雜 費 </td>
            <td>
              <input name="q27" type="text" value="<?echo $q[26]?>" size="8">
            </td>
          </tr>
          <tr > 
            <td valign="top">交際費 </td>
            <td>
              <input name="q28" type="text" value="<?echo $q[27]?>" size="8">
            </td>
          </tr>
		  <tr > 
            <td width="14%"> 出差計劃名稱</td>
            <td width="86%"> 
              <input name="q29" type="text" value="<?echo $q[28]?>" size="20">
            </td>
          </tr>
<!---           <tr > 
            <td colspan="2"> 
              <div align="center">出差報告(請詳細記錄出差狀況) </div>
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="px10">
                <tr> 
                  <td colspan="6" height=1 bgcolor="#333333"></td>
                </tr>
                <tr bgcolor="aeaeae"> 
                  <td colspan="4" align="center" >客戶資料</td>
                  <td colspan="2" align="center" >業務報告</td>
                </tr>
                <tr bgcolor="cccccc"> 
                  <td width="60" >客戶名稱</td>
                  <td width="60" align="center" >客戶屬性</td>
                  <td width="52" align="center" >區域</td>
                  <td width="68" align="center" >聯絡人</td>
                  <td width="234" align="center" >接洽目的 </td>
                  <td width="162" align="center" >接洽內容</td>
                </tr>
                <tr> 
                  <td colspan="6" height=1 bgcolor="#333333"></td>
                </tr>
<?for ($i=1;$i<=10;$i++) {?>
                <tr> 
                  <td > 
                    <input name="" type="text" size="6">
                  </td>
                  <td align="center"> 
                    <input name="" type="text" size="6">
                  </td>
                  <td align="center"> 
                    <input name="" type="text" size="6">
                  </td>
                  <td align="center"> 
                    <input name="" type="text" size="6">
                  </td>
                  <td align="center"> 
                    <input name="" type="text" size="30">
                  </td>
                  <td> 
                    <input name="" type="text" size="40">
                  </td>
                </tr>
                <tr> 
                  <td colspan="6" height=1 bgcolor="#333333"></td>
                </tr>
<?}?>
                <tr> 
                  <td colspan="6" height=1 bgcolor="#333333"></td>
                </tr>
              </table>
            </td>
          </tr> --->
          <tr> 
            <td>支付細節</td>
            <td>更換幣別 
              <select name="q30">
                <option value="-">請選擇</option>
                <option value="NTD" <?if($q[29]=="NTD"){echo "selected";}?>>NTD</option>
                <option value="RMB" <?if($q[29]=="RMB"){echo "selected";}?>>RMB</option>
                <option value="HKD" <?if($q[29]=="HKD"){echo "selected";}?>>HKD</option>
                <option value="USD" <?if($q[29]=="USD"){echo "selected";}?>>USD</option>
              </select>
              (幣別) </td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>票號 : 
              <input name="q31" value="<?echo $q[30]?>" type="text" size="8">
              到期日: 
              <input name="q32" value="<?echo $q[31]?>" type="text" size="8">
              匯款 : 
              <input name="q33" value="<?echo $q[32]?>" type="text" size="8">
              銀行 
              <input type="checkbox" <?if($q[33]==""){echo "checked";}?> name="q34" value="其他">
              其他</td>
          </tr>
          <tr> 
            <td valign="top">檢附文件</td>
            <td> <?echo $file_type;?><br>
              <input type="checkbox" name="file_type[]" value="原始單據號">
              原始單據號 
              <input type="checkbox" name="file_type[]" value="專案">
              專案 
              <input type="checkbox" name="file_type[]" value="報告">
              報告 
              <input type="checkbox" name="file_type[]" value="委託訂購單">
              委託訂購單 
              <input type="checkbox" name="file_type[]" value="報價單">
              報價單 
              <input type="checkbox" name="file_type[]" value="其他">
              其他 
              <input type="file" name="img">
            </td>
          </tr>