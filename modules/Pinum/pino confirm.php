<SCRIPT LANGUAGE=javascript>
<!--

function CheckAction() {
		document.pinum.submit();
} 
//-->
</SCRIPT>
<? //	$query = "INSERT INTO `pinum` ( `group` , `type` , `yr` , `mth` , `ste` , `cty_code` , `address` , `cust_num` , `se_num` , `kr_num` , `cust_name` , `cty` , `text_wd` , `req_user` , `email` , `post_name` , `regdate` , `deve_state` ) 
//VALUES (
// '".$group."','".$type."','".date("Y")."', '".date("m")."', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', ''
//)
//";
//��a�s�X��
$query = mysql_query("select cty_c_name,cty_e_name,cty_code,ste from city_list where cty_code = '".$_REQUEST[cty_code]."'") or die(mysql_error());
$row = mysql_fetch_array($query);
$cty_c_name = $row[cty_c_name];
$cty_e_name = $row[cty_e_name];
$cty_code = $row[cty_code];
$ste = $row[ste];

$string = date("Y");



//�ˬd���O
	if($type=="G"){
		//�y����
		if($_REQUEST[cty_code]=="KR" && $_REQUEST[cust_num]=="101"){
		//����Ȥ�Comjansoo
		$nu_search = mysql_query("select kr_num from pinum where yr='".ereg_replace ("20", "", $string)."' and cust_num = '".$_REQUEST[cust_num]."' order by kr_num desc") or die(mysql_error());
		$row_nu = mysql_fetch_array($nu_search);
		$insert_num = $row_nu[kr_num]+1;
		$show_num=str_pad($insert_num, 3, "A0", STR_PAD_LEFT); 
		}else{
		$nu_search = mysql_query("select se_num from pinum where yr='".ereg_replace ("20", "", $string)."' and grp='".$grp."' order by se_num desc") or die(mysql_error());
		$row_nu = mysql_fetch_array($nu_search);
		$insert_num = $row_nu[se_num]+1;
		//�d�̤߳j��+1�A��0;
		$show_num= str_pad($insert_num, 3, "0", STR_PAD_LEFT);
		
		}$insert_type = "G";
	}else{
		//�˫~���
		
		$cust_num = str_pad(date("d"), 3, "0", STR_PAD_LEFT);
		$nu_search = mysql_query("select se_num from pinum where yr='".ereg_replace ("20", "", $string)."' and grp='".$grp."' and type ='".$type."' order by se_num desc") or die(mysql_error());
		$row_nu = mysql_fetch_array($nu_search);
		$insert_num = $row_nu[se_num]+1;
		//�d�̤߳j��+1�A��0;
		$show_num= str_pad($insert_num, 3, $type."0", STR_PAD_LEFT);
		$insert_type = "S";
	}
?>
<form action="main.php?submit=sendout" method="post" name="pinum">
<input type="hidden" name="grp" value="<?echo $grp?>">
<input type="hidden" name="yr" value="<? echo ereg_replace ("20", "", $string);?>"><input type="hidden" name="mth" value="<? echo date("m");?>">
<input type="hidden" name="insert_num" value="<?echo str_pad($insert_num, 3, "0", STR_PAD_LEFT)?>"><input type="hidden" name="ste" value="<? echo $ste;?>">
<input type="hidden" name="cty_code" value="<? echo $cty_code;?>">
<input type="hidden" name="show_num" value="<?echo $show_num?>">
<input type="hidden" name="type" value="<?echo $type?>">
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="left"><img src="images/title.gif" width="352" height="31"></div></td>
  </tr>
</table>
<table width="458" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="70" class="subtitle">&nbsp;</td>
    <td width="388">&nbsp;</td>
  </tr>
  <tr> 
    <td width="70" height="22" class="subtitle">&nbsp;</td>
    <td width="388" class="producttitle"><font size="3">�z�n�A�z�ҥӽЪ����X�O<strong><?echo $grp.$insert_type,ereg_replace ("20", "", $string),date("m"),$ste,$cty_code,$cust_num,$show_num;?></strong>�A�аȥ����U�U��T�{��~�⧹���ӽФ��T�{�C</font></td>
  </tr>
</table>
<br>
<table width="546" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="546" height="7" background="images/d_h.gif"></td>
  </tr>
  <tr> 
    <td height="30"><img src="images/step1_2.gif" width="212" height="20"></td>
  </tr>
</table>
<TABLE cellSpacing=0 cellPadding=0 width=580 border=0>
  <TBODY>
    <TR> 
      <TD width=70 height="23">&nbsp;</TD><input type="hidden" name="group" value="<? echo $grp;?>">
      <TD class=producttitle width=100>�Ʒ~�����O</TD>
      <TD width=420 class="producttitle"> <? echo $grp;?></TD>
    </TR>
	<TR> 
      <TD width=70 height="23">&nbsp;</TD><input type="hidden" name="cust_type" value="<? echo $insert_type;?>">
      <TD class=producttitle width=100>���O</TD>
      <TD width=420 class="producttitle"> <? echo $insert_type;?></TD>
    </TR>
    <TR> 
      <TD width=70 height="23">&nbsp;</TD><input type="hidden" name="cust_name" value="<? echo $_REQUEST[cust_name];?>">
      <TD class=producttitle width=100>�Ȥ�W</TD>
      <TD width=420 class="producttitle"> <? echo $_REQUEST[cust_name];?></TD>
    </TR>
    <TR> 
      <TD width=70>&nbsp;</TD><input type="hidden" name="cty" value="<? echo $cty_c_name.",".$cty_e_name;?>"><input type="hidden" name="address" value="<? echo $address;?>">
      <TD class=producttitle width=100>��a</TD>
      <TD width=420 class="producttitle"> <? echo $cty_c_name,$cty_e_name;?> / <? echo $_REQUEST[address];?></TD>
    </TR>
    <TR> 
      <TD width=70>&nbsp;</TD><input type="hidden" name="cust_num" value="<? echo $cust_num;?>">
      <TD class=producttitle width=100>�Ȥ�s�X</TD>
      <TD width=420 class="producttitle"><? echo $cust_num?></TD>
    </TR>
    <TR> 
      <TD width=70>&nbsp;</TD><input type="hidden" name="text_wd" value="<? echo $_REQUEST[text_wd];?>">
      <TD class=producttitle width=100>���O</TD>
      <TD width=420 class="producttitle"><? echo $_REQUEST[text_wd]?></TD>
    </TR>
    <TR> 
      <TD width=70>&nbsp;</TD><input type="hidden" name="req_user" value="<? echo $_REQUEST[req_user];?>"><input type="hidden" name="post_name" value="<? echo $_REQUEST[post_name];?>"><input type="hidden" name="email" value="<? echo $_REQUEST[email];?>">
      <TD class=producttitle width=100>�ݨD��</TD>
      <TD width=420 class="producttitle"> <? echo $_REQUEST[req_user];?> <? echo $_REQUEST[email]?></TD>
    </TR>
    
    
    <?
    if($_REQUEST[show_hi]!=null){
	?>
    <TR> 
      <TD width=70>&nbsp;</TD>
      <TD class="producttitle" width=100>�O�_���</TD>
      <TD width=420 class="producttitle"><input type="hidden" name="show_hi" value="<? echo $_REQUEST[show_hi];?>">
	  <? 
	  if($_REQUEST[show_hi] == 0){
	  	echo "���(�Ҧ��b���i�H�d��)";
	  }elseif($_REQUEST[show_hi] == 1){
	  	echo "����(����ۤv�d��)";
	  }else{
	  	echo "";
	  }
	   ?>
      </TD>
    </TR>
	<?	
	}
	?>
    
  </TBODY>
</TABLE>
<br>
<table width="544" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="550" height="7" background="images/d_h.gif"></td>
  </tr>
</table>
<br>
<TABLE cellSpacing=0 cellPadding=0 width=580 border=0>
  <TBODY>
    <TR> 
      <TD align="left"><img border="0" src="images/step2_1.gif" width="212" height="20"></TD>
    </TR>
    <TR> 
      <TD align="center"> <a href="index.php"><img src="images/reset.gif" width="51" height="22" hspace="10" border="0"></a><img src="images/ok.gif" width="51" height="22" hspace="10" border="0" onclick="return CheckAction()"> 
      </TD>
    </TR>
  </TBODY>
</TABLE>
</form>
<?mysql_close();?>