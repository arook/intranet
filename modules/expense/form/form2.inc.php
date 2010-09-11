<?$q=explode("," ,$comma_form);
$f=explode("," ,$file_type);
// if($f[0]==""){echo "checked";}?>
<input type="hidden" name="form_mode" value="form2">
<tr> 
            <td>申請類別</td>
            <td> 
              <input type="radio"  name="q1" <?if($q[0]=="費用"){echo "checked";}?> value="費用">
              費用 
              <input type="radio" name="q1" <?if($q[0]=="設備"){echo "checked";}?> value="設備">
              設備 
              <input type="radio" name="q1" <?if($q[0]=="其它"){echo "checked";}?> value="其它">
              其它 
              <input name="q2" type="text" value="<?echo $q[1]?>" size="8">
            </td>
          </tr>
          <tr> 
            <td>申請歸屬</td>
            <td> 
              <input type="radio" name="q3" <?if($q[2]=="私用"){echo "checked";}?> value="私用">
              私用 
              <input type="radio" name="q3" <?if($q[2]=="公用"){echo "checked";}?> value="公用">
              公用 </td>
          </tr>
          <tr> 
            <td>支付方式</td>
            <td> 
              <input type="radio" name="q4" <?if($q[3]=="現金"){echo "checked";}?> value="現金">
              現金 
              <input type="radio" name="q4" <?if($q[3]=="支票"){echo "checked";}?> value="支票">
              <input name="q5" type="text" value="<?echo $q[4]?>" size="2">
              日支票 
              <input type="radio" name="q4" <?if($q[3]=="其它"){echo "checked";}?> value="其它">
              其它</td>
          </tr>
          <tr> 
            <td>發放方式</td>
            <td> 
              <input type="radio" name="q6" <?if($q[5]=="現金發放"){echo "checked";}?> value="現金發放">
              現金發放 
              <input type="radio" name="q6" <?if($q[5]=="撥薪"){echo "checked";}?> value="撥薪">
              撥薪 
              <input type="radio" name="q6" <?if($q[5]=="現金預支"){echo "checked";}?> value="現金預支">
              現金預支</td>
          </tr>
          <tr> 
            <td valign="top">檢附文件</td>
            <td> <?echo $file_type;?><br>
              <input type="checkbox" name="file_type[]" value="原始單據">
              原始單據共 
              <input name="q7" type="text" value="<?echo $q[6]?>" size="5">
              張 
              <input type="checkbox" name="file_type[]" value="專案報告">
              專案報告 
              <input type="checkbox" name="file_type[]" value="設備保管清單">
              設備保管清單 
              <input type="checkbox" name="file_type[]" value="其它">
              其它 
              <input type="file" name="img" size="35">
            </td>
          </tr>