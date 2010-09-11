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
alert("E-mail地址不正確")
return (false)
}

function CheckAction() {
	if(document.pinum.cty_code.value=="--") {
       	alert("請選擇地區！");
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
    <td width="502" class="producttitle"><font size="3">您好，歡迎進入PI號碼 (Proforma 
      Invoice Nomber) 線上查詢系統，請選擇列表方式查詢，系統將在幾秒後列出您所需要的PI號碼。</font></td>
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
      <TD class="Body" width=100 align=right>事業部類別</TD>
      <TD width=420><!--- <select name="type" onChange="ChangePage(this.options[selectedIndex].value)"> --->
	  <select name="grp">
		<option value="--">請選擇</option>
		<option value="Z">OZAKI</option>
        <option value="I">OI</option>
		</select>
      </TD>
    </TR>
	<TR> 
    <TD width=56 height="23">&nbsp;</TD>
      <TD width=109 class="Body" align=right>類別</TD>
      <TD width=385 class="producttitle"><select name="type" onChange="ChangePage(this.options[selectedIndex].value)">
		<option value="C">客戶用樣品</option>
        <option value="D">送檢樣品</option>
		<option value="E">確認樣品</option>
		<option value="G">正式產品</option>
		<option value="H">自用</option>
		<option value="I">出庫存樣品</option>
		</select></TD>
    </TR>
    <TR id="B1" style="display:none"> 
    <TD width=56 height="23">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> 
      <INPUT type=checkbox value="cust_num" name=s2>
        </FONT><span class="Body">客戶編號</span></TD>
      <TD width=385 class="producttitle"> 
        <INPUT class=INPUT1 size=50 name="cust_num"></TD>
    </TR>
    <TR> 
    <TD width=56 height="23">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> <span class="Body"> 
      <INPUT type=checkbox value="cust_name" name=s1>
        </span></FONT><span class="Body">客戶名</span> </TD>
      <TD width=385 class="producttitle"> 
        <INPUT class=INPUT1 size=50 name="cust_name"></TD>
    </TR>
    <TR> 
    <TD width=56 height="23">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> 
      <INPUT type=checkbox value="cty" name=s3>
        </FONT><span class="Body">國家</span></TD>
      <TD width=385 class="producttitle"> 
        <SELECT name=cty_code class=SELECT1>
		  <option value="All">全部</option>
		  <?include("cty_list.inc")?>
        </SELECT> </TD>
    </TR>
    <TR> 
    <TD width=56 height="23">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> 
      <INPUT type=checkbox value="ste" name=s4>
        </FONT>區域</TD>
      <TD width=385 class="producttitle"> 
        <SELECT name=ste class=SELECT1>
          <option value="">請選擇</option>
          <option value="A">A (歐洲)</option>
          <option value="B">B (亞洲)</option>
          <option value="C">C (美洲)</option>
          <option value="D">D (非洲)</option>
          <option value="E">E (其他)</option>
        </SELECT> </TD>
    </TR>
    <TR> 
    <TD width=56 height="23">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> <span class="Body"> 
      <INPUT type=checkbox value="req_user" name=s5>
        需求者 </span></FONT></TD>
      <TD width=385 class="producttitle"> 
        <INPUT class=INPUT1 size=50 name="req_user"></TD>
    </TR>
    <TR> 
    <TD width=56 height="24">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> 
      <INPUT type=checkbox value="post_name" name=s6>
        <span class="Body">登錄人</span> </FONT></TD>
      <TD width=385 class="producttitle">&nbsp; </TD>
    </TR>
    <TR> 
    <TD width=56 height="24">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> <span class="Body"> 
      <INPUT type=checkbox value="text_wd" name=s7>
        註記 </span></FONT></TD>
      <TD width=385 class="producttitle">&nbsp;</TD>
    </TR>
    <TR> 
    <TD width="56" height="24">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> 
      <INPUT type=checkbox value="time_sel" name=ts>
        </FONT>時段</TD>
      <TD width="385" class="producttitle"> 
        <SELECT name=time_select class=SELECT1>
		  <option value="--">請選擇</option>
          <option value="1">一個月以內</option>
          <option value="3">三個月以內</option>
          <option value="6">半年以內</option>
          <option value="12">一年以內</option>
        </SELECT></TD>
    </TR>
    <TR> 
    <TD width=56 height="24">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2><span class="Body"> 
      <INPUT type=radio value="RE" name=s8>
        作廢 </span></FONT></TD>
      <TD width=385 class="producttitle">&nbsp;</TD>
    </TR>
    <TR> 
    <TD width=56 height="24">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> 
      <input type=radio value="BL" name=s8>
        </FONT>進行中</TD>
      <TD width=385 class="producttitle">&nbsp;</TD>
    </TR>
    <TR> 
    <TD width="56" height="24">&nbsp;</TD>
    <TD width=109 class="Body"><FONT size=2> 
      <INPUT type=radio value="BK" name=s8>
        </FONT>已結案</TD>
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