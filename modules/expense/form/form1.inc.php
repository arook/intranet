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
                  <td width="53" align="center" >���</td>
                  <td width="33" align="center" >�ϰ�</td>
                  <td width="54" align="center" >�Ȥ�W��</td>
                  <td width="315" align="center" >���X�ƶ�</td>
                  <td width="44" >������</td>
                  <td width="37" >���</td>
                  <td width="47" >�����O</td>
                  <td width="34" >�X�p </td>
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
            <td valign="top">�˪����</td>
            <td> <?echo $file_type;?><br> 
              <input type="checkbox" name="file_type[]" value="�o��">
              �o�� 
              <input type="checkbox" name="file_type[]" value="�e�U��">
              �e�U�� 
              <input type="checkbox" name="file_type[]" value="������">
              ������ 
              <input type="checkbox" name="file_type[]" value="��L">
              ��L 
              <input type="file" name="img" size="35">
            </td>
          </tr>