<SCRIPT LANGUAGE=javascript>
function ChangePage(num) {
	//document.pinum.type.value = num;
	if (document.pinum.type.value=="C")
	{
		B1.style.display="none";
	}else if (document.pinum.type.value=="D")
	{
		B1.style.display="none";
	}else if (document.pinum.type.value=="E")
	{
		B1.style.display="none";
	}else if (document.pinum.type.value=="Z"){
	B1.style.display="block";}
}
<!--
function checkEmail(myEmail) {
if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myEmail.value)){
return (true)
}
alert("E-mail�a�}�����T")
return (false)
}

function CheckAction() {
	if(document.pinum.cty_code.value=="--") {
       	alert("�п�ܦa�ϡI");
		return false;
    }
		document.pinum.submit();
} 
//-->
</SCRIPT>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div align="left"><img src="images/title1.gif" width="352" height="31"></div></td>
  </tr>
</table>
<table width="550" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="48" class="subtitle">&nbsp;</td>
    <td width="502">&nbsp;</td>
  </tr>
  <tr> 
    <td width="48" class="subtitle">&nbsp;</td>
    <td width="502" class="producttitle"><font size="3">�z�n�A�w��i�JPI���X (Proforma 
      Invoice Nomber) �u�W�d�ߨt�ΡA�п�ܦC��覡�d�ߡA�t�αN�b�X���C�X�z�һݭn��PI���X�C</font></td>
  </tr>
</table>
<br>
<table width="550" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="550" height="7" background="images/d_h.gif"></td>
  </tr>
  <tr> 
    <td width="550" height="30"><img src="images/step1_1.gif" width="212" height="20"></td>
  </tr>
</table>
<form action="main.php?submit=search_result" method="post" name="pinum">
<TABLE cellSpacing=0 cellPadding=0 width=550 border=0>
  <TBODY>
  	<TR> 
    <TD width=56 height="23">&nbsp;</TD>
      <TD class="Body" width=100 align=right>�Ʒ~�����O</TD>
      <TD width=420><!--- <select name="type" onChange="ChangePage(this.options[selectedIndex].value)"> --->
	  <select name="grp">
		<option value="--">�п��</option>
		<option value="Z">OZAKI</option>
        <option value="I">OI</option>
		</select>
      </TD>
    </TR>
	<TR> 
    <TD width=56 height="23">&nbsp;</TD>
      <TD width=109 class="Body" align=right>���O</TD>
      <TD width=385 class="producttitle"><select name="type" onChange="ChangePage(this.options[selectedIndex].value)">
		<option value="C">�Ȥ�μ˫~</option>
        <option value="D">�e�˼˫~</option>
		<option value="E">�T�{�˫~</option>
		<option value="G">�������~</option>
		<option value="H">�ۥ�</option>
		<option value="I">�X�w�s�˫~</option>
		</select></TD>
    </TR>
    <TR id="B1" style="display:none"> 
    <TD width=56 height="23">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> 
      <INPUT type=checkbox value="cust_num" name=s2>
        </FONT><span class="Body">�Ȥ�s��</span></TD>
      <TD width=385 class="producttitle"> 
        <INPUT class=INPUT1 size=50 name="cust_num"></TD>
    </TR>
    <TR> 
    <TD width=56 height="23">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> <span class="Body"> 
      <INPUT type=checkbox value="cust_name" name=s1>
        </span></FONT><span class="Body">�Ȥ�W</span> </TD>
      <TD width=385 class="producttitle"> 
        <INPUT class=INPUT1 size=50 name="cust_name"></TD>
    </TR>
    <TR> 
    <TD width=56 height="23">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> 
      <INPUT type=checkbox value="cty" name=s3>
        </FONT><span class="Body">��a</span></TD>
      <TD width=385 class="producttitle"> 
        <SELECT name=cty_code class=SELECT1>
		  <option value="All">����</option>
		  <?include("cty_list.inc")?>
        </SELECT> </TD>
    </TR>
    <TR> 
    <TD width=56 height="23">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> 
      <INPUT type=checkbox value="ste" name=s4>
        </FONT>�ϰ�</TD>
      <TD width=385 class="producttitle"> 
        <SELECT name=ste class=SELECT1>
          <option value="">�п��</option>
          <option value="A">A (�ڬw)</option>
          <option value="B">B (�Ȭw)</option>
          <option value="C">C (���w)</option>
          <option value="D">D (�D�w)</option>
          <option value="E">E (��L)</option>
        </SELECT> </TD>
    </TR>
    <TR> 
    <TD width=56 height="23">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> <span class="Body"> 
      <INPUT type=checkbox value="req_user" name=s5>
        �ݨD�� </span></FONT></TD>
      <TD width=385 class="producttitle"> 
        <INPUT class=INPUT1 size=50 name="req_user"></TD>
    </TR>
    <TR> 
    <TD width=56 height="24">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> 
      <INPUT type=checkbox value="post_name" name=s6>
        <span class="Body">�n���H</span> </FONT></TD>
      <TD width=385 class="producttitle">&nbsp; </TD>
    </TR>
    <TR> 
    <TD width=56 height="24">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> <span class="Body"> 
      <INPUT type=checkbox value="text_wd" name=s7>
        ���O </span></FONT></TD>
      <TD width=385 class="producttitle">&nbsp;</TD>
    </TR>
    <TR> 
    <TD width="56" height="24">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> 
      <INPUT type=checkbox value="time_sel" name=ts>
        </FONT>�ɬq</TD>
      <TD width="385" class="producttitle"> 
        <SELECT name=time_select class=SELECT1>
		  <option value="--">�п��</option>
          <option value="1">�@�Ӥ�H��</option>
          <option value="3">�T�Ӥ�H��</option>
          <option value="6">�b�~�H��</option>
          <option value="12">�@�~�H��</option>
        </SELECT></TD>
    </TR>
    <TR> 
    <TD width=56 height="24">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2><span class="Body"> 
      <INPUT type=radio value="RE" name=s8>
        �@�o </span></FONT></TD>
      <TD width=385 class="producttitle">&nbsp;</TD>
    </TR>
    <TR> 
    <TD width=56 height="24">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> 
      <input type=radio value="BL" name=s8>
        </FONT>�i�椤</TD>
      <TD width=385 class="producttitle">&nbsp;</TD>
    </TR>
    <TR> 
    <TD width="56" height="24">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> 
      <INPUT type=radio value="BK" name=s8>
        </FONT>�w����</TD>
      <TD width="385" class="producttitle">&nbsp;</TD>
    </TR>

  </TBODY>
</TABLE></form>
<br>
<TABLE cellSpacing=0 cellPadding=0 width=549 border=0>
  <TBODY>
    <TR> 
      <TD width="550" align="left"><img src="images/step2.gif" width="212" height="20"><img src="images/search.gif" width="51" height="22" hspace="10" border="0" onclick="return CheckAction()"></TD>
    </TR>
  </TBODY>
</TABLE>
<table width="544" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="550" height="7" background="images/d_h.gif"></td>
  </tr>
</table>