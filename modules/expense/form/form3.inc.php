<?$q=explode("," ,$comma_form);
$f=explode("," ,$file_type);
// if($f[0]==""){echo "checked";}?>
<input type="hidden" name="form_mode" value="form3">
		  <tr> 
            <td>申請歸屬</td>
            <td> 
              <input type="radio" name="q1" <?if($q[0]=="私用"){echo "checked";}?> value="私用">
              私用 
              <input type="radio" name="q1" <?if($q[0]=="公用"){echo "checked";}?> value="公用">
              公用 </td>
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
              <input type="file" name="img" size="35">
            </td>
          </tr>