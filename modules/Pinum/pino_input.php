<?php
include("header.php");
include_once(XOOPS_ROOT_PATH."/class/xoopstree.php");

global $xoopsDB, $xoopsUser;
?>
<SCRIPT LANGUAGE=javascript>
<!--
//function ChangePage(num) {
	//document.pinum.type.value = num;
//	if (document.pinum.type.value=="C")
//	{
//		B1.style.display="none";
//	}else if (document.pinum.type.value=="D")
//	{
//		B1.style.display="none";
//	}else if (document.pinum.type.value=="E")
//	{
//		B1.style.display="none";
//	}else if (document.pinum.type.value=="Z"){
//	B1.style.display="block";}
//}
function checkEmail(myEmail) {
if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myEmail.value)){
return (true)
}
alert("E-mail�a�}�����T")
return (false)
}

function CheckAction() {
	if (document.pinum.grp.value=="--") {
		alert("�п�ܨƷ~�����O�I");
		return false;
    }else if (document.pinum.type.value=="--") {
		alert("�п�����O�I");
		return false;
    }else if(document.pinum.cust_name.value=="") {
       	alert("�п�J�Ȥ�W�١I");
		return false;
    } else if(document.pinum.email.value=="") {
       	alert("�п�JEmail�I");
		return false;
    } else if(document.pinum.cust_num.value=="") {
       	alert("�п�J�Ȥ�s�X�I");
		return false;
    } else if(document.pinum.req_user.value=="") {
       	alert("�п�J�ݨD�̡I");
		return false;
    } else if(document.pinum.text_wd.value=="") {
       	alert("�п�J���O�I");
		return false;
    } else if(document.pinum.cty_code.value=="") {
       	alert("�п�J��a�I");
		return false;
    }
		document.pinum.submit();
} 
//-->
</SCRIPT>

<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="left"><img src="images/title.gif" width="352" height="31"></div></td>
  </tr>
</table>
<table width="557" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="70" class="subtitle">&nbsp;</td>
    <td width="487">&nbsp;</td>
  </tr>
  <tr> 
    <td width="70" class="subtitle">&nbsp;</td>
    <td width="487" class="TEXTAREA1"><font size="3">�z�n�A�w��i�JPI(Proforma Invoice)�u�W�n���t�ΡA�ж�g�H�U����ơA�t�αN�|�b�X���ᴣ�ѱz�һݭn��PI���X�C</font></td>
  </tr>
</table>
<br>
<table width="546" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="546" height="7" background="images/d_h.gif"></td>
  </tr>
  <tr> 
    <td height="30"><img src="images/step1.gif" width="212" height="20"></td>
  </tr>
</table>
<form action="main.php?submit=confirm" method="post" name="pinum">
<input type="hidden" name="post_name" value="<?echo $xoopsUser->getVar("uname");?>">
<TABLE cellSpacing=0 cellPadding=0 width=590 border=0>
  <TBODY>
  
    <TR> 
      <TD width=70 height="23">&nbsp;</TD>
      <TD class=producttitle width=100>�Ʒ~�����O<font color="#FF0000"> <font color="#FF0000">*</font></font></TD>
      <TD width=420><!--- <select name="type" onChange="ChangePage(this.options[selectedIndex].value)"> --->
	  <select name="grp">
		<option value="--">�п��</option>
		<option value="Z">OZAKI</option>
        <option value="I">OI</option>
		</select>      </TD>
    </TR>
	<TR> 
      <TD width=70 height="23">&nbsp;</TD>
      <TD class=producttitle width=100>���O<font color="#FF0000"> <font color="#FF0000">*</font></font></TD>
      <TD width=420><!--- <select name="type" onChange="ChangePage(this.options[selectedIndex].value)"> --->
	  <select name="type" >
		<option value="--">�п��</option>
		<option value="C">�Ȥ�μ˫~</option>
        <option value="D">�e�˼˫~</option>
		<option value="E">�T�{�˫~</option>
		<option value="G">�������~</option>
		<option value="H">�ۥ�</option>
		<option value="I">�X�w�s�˫~</option>
		</select>      </TD>
    </TR>
    <TR> 
      <TD width=70 height="23">&nbsp;</TD>
      <TD class=producttitle width=100>�Ȥ�W<font color="#FF0000"> <font color="#FF0000">*</font></font></TD>
      <TD width=420><INPUT class=INPUT1 size=50 name="cust_name"></TD>
    </TR>
    <TR> 
      <TD width=70>&nbsp;</TD>

      <TD class=producttitle width=100>��a <font color="#FF0000"><font color="#FF0000">*</font></font></TD>
      <TD width=420><SELECT name="cty_code" class=SELECT1>
          <option value="">�п��</option>
<?include("cty_list.inc");?>
		</SELECT> <input class=INPUT1 size=30 name="address"></TD>
    </TR>
    <!--- <TR id="B1" style="display:none"> --->
	<TR> 
      <TD width=70>&nbsp;</TD>
      <TD class=producttitle width=100>�Ȥ�s�X <font color="#FF0000"><font color="#FF0000">*</font></font></TD>
      <TD width=420><INPUT class=INPUT1 size=45 name="cust_num" maxlength="3"><br>�u�ݶ�g���X ��:101,009</TD>
    </TR>
    <TR> 
      <TD width=70>&nbsp;</TD>
      <TD class=producttitle width=100>���O<font color="#FF0000"> *</font></TD>
      <TD width=420><textarea name="text_wd" cols="40" rows="5" class="INPUT1"></textarea></TD>
    </TR>
    <TR> 
      <TD width=70>&nbsp;</TD>
      <TD class=producttitle width=100>�ݨD��<font color="#FF0000"> *</font></TD>
      <TD width=420><input class=INPUT1 size=10 name="req_user" maxlength="30">
        Email 
        <INPUT class=INPUT1 size=28 name="email" maxlength="30"> </TD>
    </TR>
    <?
    if ( $xoopsUser->isAdmin() ) {
	?>
	<TR> 
      <TD align="right">&nbsp;</TD>
      <TD class="producttitle">�O�_���<font color="#FF0000"> *</font></TD>
      <TD width=420><input name="show_hi" type="radio" value="0" checked="checked" />
        ���(�Ҧ��b���i�H�d��)
          <input type="radio" name="show_hi" value="1" />
        ����(����ۤv�d��)</TD>
    </TR>
	<? }?>
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
      <TD align="left"><img src="images/step2.gif" width="212" height="20"><img src="images/sent.gif" width="51" height="22" hspace="10" border="0" onclick="return CheckAction()"></TD>
    </TR>
  </TBODY>
</TABLE>
</form>