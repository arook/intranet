<?$q=explode("," ,$comma_form);
$f=explode("," ,$file_type);
// if($f[0]==""){echo "checked";}?>
<input type="hidden" name="form_mode" value="form4">
          <tr > 
            <td width="14%"> �X�t�ƥ� </td>
            <td width="86%">
              <input name="q1" type="text" value="<?echo $q[0]?>" size="40">
            </td>
          </tr>
          <tr > 
            <td>�X�t���</td>
            <td width="86%">
              <input name="q2" type="text" value="<?echo $q[1]?>" size="8">
              ~ 
              <input name="q3" type="text" value="<?echo $q[2]?>" size="8">
            </td>
          </tr>
          <tr > 
            <td valign="top">�X�t�a�I�ԭz</td>
            <td>
              <textarea name="q4" cols="50" rows="6"><?echo $q[3]?></textarea>
            </td>
          </tr>
          <tr > 
            <td valign="top">���� </td>
            <td align="left" valign="top"> 
              
    <table width="498" border="0" cellpadding="0" cellspacing="0" class="px10dash" >
      <tr> 
                  
        <td height="18" width="64">�K�n</td>
                  
        <td width="339" height="18">����</td>
                  
        <td width="95" height="18">���B</td>
                </tr>
                <tr> 
                  
        <td width="64">����</td>
                  
        <td width="339">�� 
          <input name="q5" value="<?echo $q[4]?>" type="text" size="8">
                    �� 
                    <input name="q6" value="<?echo $q[5]?>" type="text" size="8">
                    <input type="radio" name="q7" <?if($q[6]=="��{"){echo "checked";}?> value="��{">
                    ��{ 
                    <input type="radio" name="q7" <?if($q[6]=="�Ӧ^"){echo "checked";}?> value="�Ӧ^">
                    �Ӧ^ </td>
                  
        <td width="95"> 
          <input name="q8" value="<?echo $q[7]?>" type="text" size="8">
                  </td>
                </tr>
                <tr> 
                  
        <td width="64">�T��</td>
                  
        <td width="339">�� 
          <input name="q9" value="<?echo $q[8]?>" type="text" size="8">
                    �� 
                    <input name="q10" value="<?echo $q[9]?>" type="text" size="8">
                    �@�p 
                    <input name="q11" value="<?echo $q[10]?>" type="text" size="8">
                    ���� </td>
                  
        <td width="95"> 
          <input name="q12" value="<?echo $q[11]?>" type="text" size="8">
                  </td>
                </tr>
                <tr> 
                  
        <td width="64">����</td>
                  
        <td width="339">�� 
          <input name="q13" value="<?echo $q[12]?>" type="text" size="8">
                    �� 
                    <input type="radio" <?if($q[13]=="��{"){echo "checked";}?> name="q14" value="��{">
                    ��{ 
                    <input type="radio" <?if($q[13]=="�Ӧ^"){echo "checked";}?> name="q14" value="�Ӧ^">
                    �Ӧ^ </td>
                  
        <td width="95"> 
          <input name="q15" value="<?echo $q[14]?>" type="text" size="8">
                  </td>
                </tr>
                <tr> 
                  
        <td width="64">�����O</td>
                  
        <td width="339">&nbsp;</td>
                  
        <td width="95"> 
          <input name="q16" value="<?echo $q[15]?>" type="text" size="8">
                  </td>
                </tr>
                <tr> 
                  
        <td width="64">�䥦</td>
                  
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
            <td valign="top">�����O</td>
            <td> 
              <input name="q19" type="text" value="<?echo $q[18]?>" size="8">
              ~ 
              <input name="q20" type="text" value="<?echo $q[19]?>" size="8">
              �p 
              <input name="q21" type="text" value="<?echo $q[20]?>" size="5">
              �H 
              <input name="q22" type="text" value="<?echo $q[21]?>" size="5">
              �� </td>
          </tr>
          <tr > 
            <td valign="top">��J�O</td>
            <td>
              <input name="q23" type="text" value="<?echo $q[22]?>" size="8">
              ~ 
              <input name="q24" type="text" value="<?echo $q[23]?>" size="8">
              �p 
              <input name="q25" type="text" value="<?echo $q[24]?>" size="5">
              �H 
              <input name="q26" type="text" value="<?echo $q[25]?>" size="5">
              �� </td>
          </tr>
          <tr > 
            <td valign="top">�� �O </td>
            <td>
              <input name="q27" type="text" value="<?echo $q[26]?>" size="8">
            </td>
          </tr>
          <tr > 
            <td valign="top">��ڶO </td>
            <td>
              <input name="q28" type="text" value="<?echo $q[27]?>" size="8">
            </td>
          </tr>
		  <tr > 
            <td width="14%"> �X�t�p���W��</td>
            <td width="86%"> 
              <input name="q29" type="text" value="<?echo $q[28]?>" size="20">
            </td>
          </tr>
<!---           <tr > 
            <td colspan="2"> 
              <div align="center">�X�t���i(�иԲӰO���X�t���p) </div>
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="px10">
                <tr> 
                  <td colspan="6" height=1 bgcolor="#333333"></td>
                </tr>
                <tr bgcolor="aeaeae"> 
                  <td colspan="4" align="center" >�Ȥ���</td>
                  <td colspan="2" align="center" >�~�ȳ��i</td>
                </tr>
                <tr bgcolor="cccccc"> 
                  <td width="60" >�Ȥ�W��</td>
                  <td width="60" align="center" >�Ȥ��ݩ�</td>
                  <td width="52" align="center" >�ϰ�</td>
                  <td width="68" align="center" >�p���H</td>
                  <td width="234" align="center" >�����ت� </td>
                  <td width="162" align="center" >�������e</td>
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
            <td>��I�Ӹ`</td>
            <td>�󴫹��O 
              <select name="q30">
                <option value="-">�п��</option>
                <option value="NTD" <?if($q[29]=="NTD"){echo "selected";}?>>NTD</option>
                <option value="RMB" <?if($q[29]=="RMB"){echo "selected";}?>>RMB</option>
                <option value="HKD" <?if($q[29]=="HKD"){echo "selected";}?>>HKD</option>
                <option value="USD" <?if($q[29]=="USD"){echo "selected";}?>>USD</option>
              </select>
              (���O) </td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>���� : 
              <input name="q31" value="<?echo $q[30]?>" type="text" size="8">
              �����: 
              <input name="q32" value="<?echo $q[31]?>" type="text" size="8">
              �״� : 
              <input name="q33" value="<?echo $q[32]?>" type="text" size="8">
              �Ȧ� 
              <input type="checkbox" <?if($q[33]==""){echo "checked";}?> name="q34" value="��L">
              ��L</td>
          </tr>
          <tr> 
            <td valign="top">�˪����</td>
            <td> <?echo $file_type;?><br>
              <input type="checkbox" name="file_type[]" value="��l��ڸ�">
              ��l��ڸ� 
              <input type="checkbox" name="file_type[]" value="�M��">
              �M�� 
              <input type="checkbox" name="file_type[]" value="���i">
              ���i 
              <input type="checkbox" name="file_type[]" value="�e�U�q�ʳ�">
              �e�U�q�ʳ� 
              <input type="checkbox" name="file_type[]" value="������">
              ������ 
              <input type="checkbox" name="file_type[]" value="��L">
              ��L 
              <input type="file" name="img">
            </td>
          </tr>