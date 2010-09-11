<?$q=explode("," ,$comma_form);
?>
<input type="hidden" name="form_mode" value="form1">
<tr> 
            <td height="12" colspan="2"> 
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="px10">
                <tr> 
                  <td colspan="9" height=1 bgcolor="#333333"></td>
                </tr>
                <tr bgcolor="cccccc"> 
                  <td width="19" >&nbsp;</td>
                  <td width="53" align="center" >日期</td>
                  <td width="33" align="center" >區域</td>
                  <td width="54" align="center" >客戶名稱</td>
                  <td width="315" align="center" >拜訪事項</td>
                  <td width="44" >公里數</td>
                  <td width="37" >單價</td>
                  <td width="47" >停車費</td>
                  <td width="34" >合計 </td>
                </tr>
                <tr> 
                  <td colspan="9" height=1 bgcolor="#333333"></td>
                </tr>
<?include("form1.pap.php")?>
                <tr> 
                  <td colspan="9" height=1 bgcolor="#333333"></td>
                </tr>
                <tr> 
                  <td colspan="9" height=1 bgcolor="#333333"></td>
                </tr>
              </table>
            </td>
          </tr>
          <tr> 
            <td valign="top">檢附文件</td>
            <td> <?echo $file_type;?><br> 
              <input type="checkbox" name="file_type[]" value="發票">
              發票 
              <input type="checkbox" name="file_type[]" value="委託單">
              委託單 
              <input type="checkbox" name="file_type[]" value="報價單">
              報價單 
              <input type="checkbox" name="file_type[]" value="其他">
              其他 
              <input type="file" name="img" size="35">
            </td>
          </tr>