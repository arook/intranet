<?include("../setup.inc");
include("../check_root.php");
?>
<SCRIPT LANGUAGE=javascript>
function CheckAction() {
	var count=0;
	
	for (i=0;i<form1.apply_type.length;i++)
  {
    if( form1.apply_type[i].checked == true )
    {count++;}
  }
  //if (count==0){
//	alert("�п�ܥӽ����O�I");
//  	return false;
//  }else
	//if(document.form1.fee_amount_mix.value=="") {
    //   	alert("�п�J�̤p���B�ƥءI");
	//	return false;
    //} else if(document.form1.fee_amount_max.value=="") {
    //   	alert("�п�J�̤j���B�ƥءI");
	//	return false;
    //} 
	//else if(document.form1.fee_type.value=="-") {
	//	alert("�п�ܪ��B�ﶵ�I");
	//	return false;
    //}
	
	document.form1.submit();
} 
//-->
</SCRIPT>
<link href="../style.css" rel="stylesheet" type="text/css">
<a href="../index.htm"><img src="../images/title.gif" width="400" height="35" border="0"></a>
<table width="700" border="0" cellspacing="0" cellpadding="0"><form name="form1" method="post" action="result_root.php">
  <tr>
      <td>
        <table width="700" border="0" cellspacing="0" cellpadding="0" >
          <tr> 
            <td height="50" colspan="2"> 
              <p><font 
                        size=3>�z�n�A�w��i�J�O��/�]�ƥӽ�<strong>�޲z</strong>�@�~�t�ΡC</font></p>
            </td>
          </tr>
          <tr> 
            <td height="26" colspan="2"> <? include("menu.inc.php");?></td>
          </tr>
          <tr> 
            <td height="15" colspan="2" align="right"> 
              <hr>
            </td>
          </tr>
        </table>
      </td>
  </tr>
  <tr>
      <td><img src="../images/step1.gif" width="212" height="20"></td>
  </tr>
  <tr>
    <td> 
      <table width="92%" border="0" align="right" cellpadding="0" cellspacing="4">
          <tr> 
            <td>�ӽ����O</td>
            <td>
        <input type="radio" name="apply_type" value="A">
        A.�@��ӽ� 
        <input type="radio" name="apply_type" value="B">
        B.�ꪫ�ӽ� 
        <input type="radio" name="apply_type" value="C">
        C. �M�ץӽ� 
        <input type="radio" name="apply_type" value="D">
        D.���i�ӽ�</td>
          </tr>
          <!--- <tr> 
            <td width="14%" valign="top">�ӽФ�� </td>
            <td width="86%"><select name="form_y">
				<option value="0">�п��</option>
				<?for ($i=2004;$i<=2010;$i++) {
				echo "<option value=$i>$i</option>";
				}?>
				</select>�~
				<select name="form_m"><?echo ?>
				<option value="0">�п��</option>
				<?for ($i=1;$i<=12;$i++) {
				echo "<option value=".str_pad($i, 2, "0", STR_PAD_LEFT).">".str_pad($i, 2, "0", STR_PAD_LEFT)."</option>";
				}?>				
				</select>��
				<select name="form_d"><?echo ?>
				<option value="0">�п��</option>
				<?for ($i=1;$i<=31;$i++) {
				echo "<option value=".str_pad($i, 2, "0", STR_PAD_LEFT).">".str_pad($i, 2, "0", STR_PAD_LEFT)."</option>";
				}?>				
				</select>�� <br>��<br><select name="to_y">
				<option value="0">�п��</option>
				<?for ($i=2004;$i<=2010;$i++) {
				echo "<option value=$i>$i</option>";
				}?>
				</select>�~
				<select name="to_m"><?echo ?>
				<option value="0">�п��</option>
				<?for ($i=1;$i<=12;$i++) {
				echo "<option value=".str_pad($i, 2, "0", STR_PAD_LEFT).">".str_pad($i, 2, "0", STR_PAD_LEFT)."</option>";
				}?>				
				</select>��
				<select name="to_d"><?echo ?>
				<option value="0">�п��</option>
				<?for ($i=1;$i<=31;$i++) {
				echo "<option value=".str_pad($i, 2, "0", STR_PAD_LEFT).">".str_pad($i, 2, "0", STR_PAD_LEFT)."</option>";
				}?>				
				</select>��</td>
          </tr> --->
		  <tr> 
            <td>�ӽнs��</td>
            <td><input type="text" name="frm" size=25>
            </td>
          </tr>
		  <tr> 
            <td>�f�ַN��</td>
            <td><?$query=mysql_query("select * from expense_fee_deve_state");
		while ($row_deve_state = mysql_fetch_array($query))
		{?> 
      <input type="radio" name="deve_state" <? if ($row_deve_state[sht_name]==$row[deve_state]) echo checked ?> value='<? echo $row_deve_state[sht_name];?>'>
      <? echo $row_deve_state[name];?> <?}?></td>
          </tr>
          <tr> 
            <td>�ӽЦa��</td>
            <td><input type="radio" name="apply_area" value="T">�x�W
                <input type="radio" name="apply_area" value="S">�`�`
            </td>
          </tr>
          <!--- <tr> 
            <td>�ӽжO�� - �O�βӥ�</td>
            <td><?//include("DC.php");?></td>
          </tr> --->
          <tr>
            <td>���ͤ��</td>
            <td><select name="st_y">
				<option value="">�п��</option>
				<?for ($i=2004;$i<=2010;$i++) {
				echo "<option value=$i>$i</option>";
				}?>
				</select>�~
				<select name="st_m">
				<option value="">�п��</option>
				<?for ($i=1;$i<=12;$i++) {
				echo "<option value=".str_pad($i, 2, "0", STR_PAD_LEFT).">".str_pad($i, 2, "0", STR_PAD_LEFT)."</option>";
				}?>				
				</select>�� 
				<!--- <input type="radio" name="count" value="-">�e<input type="radio" name="count" value="+">��
				<SELECT name=time_select class=SELECT1>
				  <option value="--">�п��</option>
    		      <option value="1">�@�Ӥ�</option>
    		      <option value="3">�T�Ӥ�</option>
    		      <option value="6">�b�~</option>
    		      <option value="12">�@�~</option>
    		    </SELECT> ---></td>
          </tr>
          <tr> 
            <td>�ӽг���</td>
			<td><select name="apply_fee_dept">
			<option value="">�п��</option>
			<option value=������>������</option>
			<option value=���P��>���P��</option>
			<option value=�~�P��>�~�P��</option>
			<option value=������>������</option>
			<option value=���~������>���~������</option>			
			<option value=��P���s��>��P���s��</option>
			<option value=��s�}�o��>��s�}�o��</option>
			<option value=�޲z��>�޲z��</option>
			<option value=��Ԥ䴩��>��Ԥ䴩��</option>
			<option value=�]�Ȳ�>�]�Ȳ�</option>
			<option value=��T��>��T��</option>
			<option value=�Ĳ���>�Ĳ���</option>
			<option value=�~�O�����>�~�O�����</option>
			<option value=�`�g�z��>�`�g�z��</option>
			<option value=�H�Ʋ�>�H�Ʋ�</option>	
              </select></td>
          </tr>
          <tr> 
            <td>�ӽФH</td>
            <td><input name="apply_fee_name" value="<?//echo $xoopsUser->getVar("uname");?>" readonly type="text" size="12">
              <!--- (3���v��,��1�ťi�d�ߩҦ������o�ͪ��ӽ�,��2�ťu�d�ߥ��������ӽ�,��3�ťu�d�ߥ��H���ӽ�.)</td> --->
          </tr>
          <tr> 
            <td>�ӽЪ��B</td>
            <td><select name="fee_type">
                <option value="-">�п��</option>
                <?$pro_sel = mysql_query ("select * from expense_fee_dlr ");
				while ($row_sel = mysql_fetch_array($pro_sel)) {?> 
        		<option value=<?echo $row_sel[name_eng]?>><?echo $row_sel[name_chi]?></option>
        		<?}?>
              </select>
              (���O)/ 
              <input name="fee_amount_mix" type="text" size="8">
              (���B) - 
              <input name="fee_amount_max" type="text" size="8">
              (���B) </td>
          </tr>
          <!--- <tr> 
            <td>�����t��</td>
            <td><select name="factory">
                <option value="">�п��</option>
				<?$pro_sel = mysql_query ("select * from apply_fee_form where type = '3'");
				while ($row_sel = mysql_fetch_array($pro_sel)) {?> 
        		<option value=<?echo $row_sel[nu]?>><?echo $row_sel[name_eng]?></option>
        		<?}?>
              </select>
              �䥦 
              <input type="text" name="factory_other"></td>
          </tr> --->
        </table>

     </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td><img src="../images/step2.gif" width="212" height="20"><IMG 
                        onclick="return CheckAction()" height=22 hspace=10 
                        src="../images/search.gif" width=51 
                    border=0></td>
  </tr></form>
</table> 
<?mysql_close();?>