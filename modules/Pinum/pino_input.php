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
alert("E-mail地址不正確")
return (false)
}

function CheckAction() {
	if (document.pinum.grp.value=="--") {
		alert("請選擇事業部類別！");
		return false;
    }else if (document.pinum.type.value=="--") {
		alert("請選擇類別！");
		return false;
    }else if(document.pinum.cust_name.value=="") {
       	alert("請輸入客戶名稱！");
		return false;
    } else if(document.pinum.email.value=="") {
       	alert("請輸入Email！");
		return false;
    } else if(document.pinum.cust_num.value=="") {
       	alert("請輸入客戶編碼！");
		return false;
    } else if(document.pinum.req_user.value=="") {
       	alert("請輸入需求者！");
		return false;
    } else if(document.pinum.text_wd.value=="") {
       	alert("請輸入註記！");
		return false;
    } else if(document.pinum.cty_code.value=="") {
       	alert("請輸入國家！");
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
    <td width="487" class="TEXTAREA1"><font size="3">您好，歡迎進入PI(Proforma Invoice)線上登錄系統，請填寫以下欄位資料，系統將會在幾秒後提供您所需要的PI號碼。</font></td>
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
      <TD class=producttitle width=100>事業部類別<font color="#FF0000"> <font color="#FF0000">*</font></font></TD>
      <TD width=420><!--- <select name="type" onChange="ChangePage(this.options[selectedIndex].value)"> --->
	  <select name="grp">
		<option value="--">請選擇</option>
		<option value="Z">OZAKI</option>
        <option value="I">OI</option>
		</select>      </TD>
    </TR>
	<TR> 
      <TD width=70 height="23">&nbsp;</TD>
      <TD class=producttitle width=100>類別<font color="#FF0000"> <font color="#FF0000">*</font></font></TD>
      <TD width=420><!--- <select name="type" onChange="ChangePage(this.options[selectedIndex].value)"> --->
	  <select name="type" >
		<option value="--">請選擇</option>
		<option value="C">客戶用樣品</option>
        <option value="D">送檢樣品</option>
		<option value="E">確認樣品</option>
		<option value="G">正式產品</option>
		<option value="H">自用</option>
		<option value="I">出庫存樣品</option>
		</select>      </TD>
    </TR>
    <TR> 
      <TD width=70 height="23">&nbsp;</TD>
      <TD class=producttitle width=100>客戶名<font color="#FF0000"> <font color="#FF0000">*</font></font></TD>
      <TD width=420><INPUT class=INPUT1 size=50 name="cust_name"></TD>
    </TR>
    <TR> 
      <TD width=70>&nbsp;</TD>

      <TD class=producttitle width=100>國家 <font color="#FF0000"><font color="#FF0000">*</font></font></TD>
      <TD width=420><SELECT name="cty_code" class=SELECT1>
          <option value="">請選擇</option>
<?include("cty_list.inc");?>
		</SELECT> <input class=INPUT1 size=30 name="address"></TD>
    </TR>
    <!--- <TR id="B1" style="display:none"> --->
	<TR> 
      <TD width=70>&nbsp;</TD>
      <TD class=producttitle width=100>客戶編碼 <font color="#FF0000"><font color="#FF0000">*</font></font></TD>
      <TD width=420><INPUT class=INPUT1 size=45 name="cust_num" maxlength="3"><br>只需填寫號碼 例:101,009</TD>
    </TR>
    <TR> 
      <TD width=70>&nbsp;</TD>
      <TD class=producttitle width=100>註記<font color="#FF0000"> *</font></TD>
      <TD width=420><textarea name="text_wd" cols="40" rows="5" class="INPUT1"></textarea></TD>
    </TR>
    <TR> 
      <TD width=70>&nbsp;</TD>
      <TD class=producttitle width=100>需求者<font color="#FF0000"> *</font></TD>
      <TD width=420><input class=INPUT1 size=10 name="req_user" maxlength="30">
        Email 
        <INPUT class=INPUT1 size=28 name="email" maxlength="30"> </TD>
    </TR>
    <?
    if ( $xoopsUser->isAdmin() ) {
	?>
	<TR> 
      <TD align="right">&nbsp;</TD>
      <TD class="producttitle">是否顯示<font color="#FF0000"> *</font></TD>
      <TD width=420><input name="show_hi" type="radio" value="0" checked="checked" />
        顯示(所有帳號可以查看)
          <input type="radio" name="show_hi" value="1" />
        隱藏(隻能自己查看)</TD>
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