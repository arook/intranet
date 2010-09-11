
<html>
<head>
<title>管理程式</title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<meta http-equiv="Pragma" content="no-cache">
<link rel="stylesheet" href="../main.css" type="text/css">
</head>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<script language="JavaScript">
<!--

function CheckAction() {
    if (document.main.user.value=="") {
		alert("請輸入管理帳號！");
		return false;
    } else if  (document.main.pass.value=="") {
       	alert("請輸入識別密碼！");
		return false;
    }
} // end func
//-->
</script>
<!-- 分隔框 -->

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td height="20" bgcolor="#006699"></td></tr>
</table>

<!-- 工作頁框 -->

<table cellspacing=0 width="100%" style="height: 340">
<tr valign="top">
	<td width=150 bgcolor="#66CCCC">&nbsp;</td>
	<td>
	
		<!-- 登入畫面 -->

		<table cellspacing=10>
		<tr>
			<td>
			
				<img src="images/title_01.gif">

				<form method=post action="apply_fee.php" name="main" onSubmit="return CheckAction()">
				<input type="hidden" name="action" value="login">

				<table style="margin-left: 25pt">
				<tr>
					<td>管理帳號：</td>
					<td><input type="text" name="user" style="width: 120; font-size: 9pt"></td>
				</tr>
				<tr>
					<td>識別密碼：</td>
					<td><input type="password" name="pass" style="width: 120; font-size: 9pt"></td>
				</tr>
				<tr height="50">
					<td></td>
					<td><input type="submit" value="登入系統"></td>
				</tr>
				</table>

				</form>

			</td>
		</tr>
		</table>
		

	</td>
</tr>
</table>
</body>
</html>