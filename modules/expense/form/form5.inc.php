<?$q=explode("," ,$comma_form);
$f=explode("," ,$file_type);
// if($f[0]==""){echo "checked";}?>
<input type="hidden" name="form_mode" value="form5">
<tr > 
            <td width="14%"> �X�t�p���W��</td>
            <td width="86%">
              <input name="q1" type="text" value="<?echo $q[0]?>" size="20">
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
            <td align="left"> �X�t�H��</td>
            <td>�@ 
              <input name="q4" type="text" value="<?echo $q[3]?>" size="2">
              �H</td>
          </tr>
          <tr > 
            <td>���X�Ȥ� </td>
            <td width="86%">
              <input name="q5" type="text" value="<?echo $q[4]?>" size="20">
            </td>
          </tr>
          <tr > 
            <td valign="top">�X�t��] �ιw�p�F���ؼЩέp���C <font color="#000066"><span class="px10">(�иԭz) 
              </span></font></td>
            <td>
              <textarea name="q6" cols="50" rows="6"><?echo $q[5]?></textarea>
            </td>
          </tr>
          <tr > 
            <td rowspan="7" valign="top">�X�t�w�p��{<span class="px10"><font color="#000066">(�`�ȭq�X�t�����ϥνж�g�C�ѹw�p�𮧤��a�I��̫��)�C</font></span></td>
            <td>�Ĥ@�� 
              <input name="q7" value="<?echo $q[6]?>" type="text" size="20">
            </td>
          </tr>
          <tr > 
            <td>�ĤG�� 
              <input name="q8" value="<?echo $q[7]?>" type="text" size="20">
            </td>
          </tr>
          <tr > 
            <td>�ĤT�� 
              <input name="q9" value="<?echo $q[8]?>" type="text" size="20">
            </td>
          </tr>
          <tr > 
            <td>�ĥ|�� 
              <input name="q10" value="<?echo $q[9]?>" type="text" size="20">
            </td>
          </tr>
          <tr > 
            <td>�Ĥ��� 
              <input name="q11" value="<?echo $q[10]?>" type="text" size="20">
            </td>
          </tr>
          <tr > 
            <td>�Ĥ��� 
              <input name="q12" value="<?echo $q[11]?>" type="text" size="20">
            </td>
          </tr>
          <tr > 
            <td>�ĤC�� 
              <input name="q13" value="<?echo $q[12]?>" type="text" size="20">
            </td>
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