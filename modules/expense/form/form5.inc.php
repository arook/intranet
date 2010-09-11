<?$q=explode("," ,$comma_form);
$f=explode("," ,$file_type);
// if($f[0]==""){echo "checked";}?>
<input type="hidden" name="form_mode" value="form5">
<tr > 
            <td width="14%"> 出差計劃名稱</td>
            <td width="86%">
              <input name="q1" type="text" value="<?echo $q[0]?>" size="20">
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
            <td align="left"> 出差人員</td>
            <td>共 
              <input name="q4" type="text" value="<?echo $q[3]?>" size="2">
              人</td>
          </tr>
          <tr > 
            <td>拜訪客戶 </td>
            <td width="86%">
              <input name="q5" type="text" value="<?echo $q[4]?>" size="20">
            </td>
          </tr>
          <tr > 
            <td valign="top">出差原因 及預計達成目標或計劃。 <font color="#000066"><span class="px10">(請詳述) 
              </span></font></td>
            <td>
              <textarea name="q6" cols="50" rows="6"><?echo $q[5]?></textarea>
            </td>
          </tr>
          <tr > 
            <td rowspan="7" valign="top">出差預計行程<span class="px10"><font color="#000066">(總務訂出差飯店使用請填寫每天預計休息之地點於最後方)。</font></span></td>
            <td>第一天 
              <input name="q7" value="<?echo $q[6]?>" type="text" size="20">
            </td>
          </tr>
          <tr > 
            <td>第二天 
              <input name="q8" value="<?echo $q[7]?>" type="text" size="20">
            </td>
          </tr>
          <tr > 
            <td>第三天 
              <input name="q9" value="<?echo $q[8]?>" type="text" size="20">
            </td>
          </tr>
          <tr > 
            <td>第四天 
              <input name="q10" value="<?echo $q[9]?>" type="text" size="20">
            </td>
          </tr>
          <tr > 
            <td>第五天 
              <input name="q11" value="<?echo $q[10]?>" type="text" size="20">
            </td>
          </tr>
          <tr > 
            <td>第六天 
              <input name="q12" value="<?echo $q[11]?>" type="text" size="20">
            </td>
          </tr>
          <tr > 
            <td>第七天 
              <input name="q13" value="<?echo $q[12]?>" type="text" size="20">
            </td>
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