<?$q=explode("," ,$comma_form);
$f=explode("," ,$file_type);
// if($f[0]==""){echo "checked";}?>
<input type="hidden" name="form_mode" value="form2">
<tr> 
            <td>�ӽ����O</td>
            <td> 
              <input type="radio"  name="q1" <?if($q[0]=="�O��"){echo "checked";}?> value="�O��">
              �O�� 
              <input type="radio" name="q1" <?if($q[0]=="�]��"){echo "checked";}?> value="�]��">
              �]�� 
              <input type="radio" name="q1" <?if($q[0]=="�䥦"){echo "checked";}?> value="�䥦">
              �䥦 
              <input name="q2" type="text" value="<?echo $q[1]?>" size="8">
            </td>
          </tr>
          <tr> 
            <td>�ӽ��k��</td>
            <td> 
              <input type="radio" name="q3" <?if($q[2]=="�p��"){echo "checked";}?> value="�p��">
              �p�� 
              <input type="radio" name="q3" <?if($q[2]=="����"){echo "checked";}?> value="����">
              ���� </td>
          </tr>
          <tr> 
            <td>��I�覡</td>
            <td> 
              <input type="radio" name="q4" <?if($q[3]=="�{��"){echo "checked";}?> value="�{��">
              �{�� 
              <input type="radio" name="q4" <?if($q[3]=="�䲼"){echo "checked";}?> value="�䲼">
              <input name="q5" type="text" value="<?echo $q[4]?>" size="2">
              ��䲼 
              <input type="radio" name="q4" <?if($q[3]=="�䥦"){echo "checked";}?> value="�䥦">
              �䥦</td>
          </tr>
          <tr> 
            <td>�o��覡</td>
            <td> 
              <input type="radio" name="q6" <?if($q[5]=="�{���o��"){echo "checked";}?> value="�{���o��">
              �{���o�� 
              <input type="radio" name="q6" <?if($q[5]=="���~"){echo "checked";}?> value="���~">
              ���~ 
              <input type="radio" name="q6" <?if($q[5]=="�{���w��"){echo "checked";}?> value="�{���w��">
              �{���w��</td>
          </tr>
          <tr> 
            <td valign="top">�˪����</td>
            <td> <?echo $file_type;?><br>
              <input type="checkbox" name="file_type[]" value="��l���">
              ��l��ڦ@ 
              <input name="q7" type="text" value="<?echo $q[6]?>" size="5">
              �i 
              <input type="checkbox" name="file_type[]" value="�M�׳��i">
              �M�׳��i 
              <input type="checkbox" name="file_type[]" value="�]�ƫO�޲M��">
              �]�ƫO�޲M�� 
              <input type="checkbox" name="file_type[]" value="�䥦">
              �䥦 
              <input type="file" name="img" size="35">
            </td>
          </tr>