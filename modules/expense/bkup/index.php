
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<img src="images/title.gif" width="400" height="35"> <br>
<form name="form1" method="post" action="number.htms">
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><FONT 
                        size=3>�z�n�A�w��i�J�O��/�]�ƥӽеn���@�~�t�ΡA�ж�g�H�U����ơA�t�αN�|�b�X���ᴣ�ѱz�һݭn���n�����X�C</FONT>
      <hr></td>
  </tr>
  <tr>
    <td><img src="images/step1.gif" width="212" height="20"></td>
  </tr>
  <tr>
    <td> 
      <table width="92%" border="0" align="right" cellpadding="0" cellspacing="4">
        <tr> 
          <td width="14%"> �ӽЦ~�� </td>
          <td width="86%"><input name="textfield" value="<?echo date(Y);?>" type="text" size="12"></td>
        </tr>
        <tr> 
          <td>�ӽЦa��</td>
          <td><input type="radio" name="area" value="radiobutton">
            �x�W 
            <input type="radio" name="area" value="radiobutton">
            �`�`</td>
        </tr>
        <tr> 
          <td>�ӽжO��</td>
          <td><select name="fee">
              <option selected>�п��</option>
              <option>����</option>
            </select></td>
        </tr>
        <tr> 
          <td>�O�βӥ�</td>
          <td><select name="select2">
              <option>�п��</option>
              <option>�x�_�줽��</option>
            </select></td>
        </tr>
        <tr> 
          <td>�ӽФ��</td>
          <td><input name="textfield2" type="text" size="12"></td>
        </tr>
        <tr> 
            <td>���ͤ��</td>
          <td><input name="textfield3" type="text" size="12"></td>
        </tr>
        <tr> 
          <td>�ӽг���</td>
          <td><select name="select3">
              <option> �п��</option>
            </select></td>
        </tr>
        <tr> 
          <td>�ӽФH</td>
          <td><input name="textfield4" type="text" size="12"></td>
        </tr>
        <tr> 
          <td>�ӽЪ��B</td>
            <td> <select name="select5">
                <option selected>�п��</option>
                <option>�x��</option>
                <option>�H����</option>
              </select>
              (���O)/ 
              <input name="textfield6" type="text" size="8">
            (���B)</td>
        </tr>
        <tr> 
          <td>�����t��</td>
          <td><select name="select4">
              <option> �п��</option>
            </select>
              �䥦
              <input type="text" name="textfield5"> </td>
        </tr>
        <tr> 
            <td>�O�θԭz/�Ƶ�</td>
          <td><textarea name="textfield7" cols="60" rows="3"></textarea></td>
        </tr>
        <tr> 
          <td colspan="2">&nbsp;</td>
        </tr>
      </table>

     </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td><img src="images/step2.gif" width="212" height="20"><a href="number.htm"><IMG 
                        onclick="return CheckAction()" height=22 hspace=10 
                        src="images/sent.gif" width=51 
                    border=0></a></td>
  </tr>
</table> </form>
</body>
</html>