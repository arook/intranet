<?$q=explode("," ,$comma_form);
$f=explode("," ,$file_type);
// if($f[0]==""){echo "checked";}?>
<input type="hidden" name="form_mode" value="form3">
		  <tr> 
            <td>�ӽ��k��</td>
            <td> 
              <input type="radio" name="q1" <?if($q[0]=="�p��"){echo "checked";}?> value="�p��">
              �p�� 
              <input type="radio" name="q1" <?if($q[0]=="����"){echo "checked";}?> value="����">
              ���� </td>
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
              <input type="file" name="img" size="35">
            </td>
          </tr>