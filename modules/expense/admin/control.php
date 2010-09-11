<?include("../setup.inc");

include("check_admin.inc.php");
?>

<html>
<head>
<title>管理程式 - 管理員維護</title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<link rel="stylesheet" href="../main.css" type="text/css">
</head>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<!-- 分隔框 -->

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td height="20" bgcolor="#006699"></td></tr>
</table>

<!-- 工作頁框 -->

<table cellspacing=0 width="100%" style="height: 340">
<tr valign="top">
	<td width=150 bgcolor="#66CCCC">

		<!--  管理選單  -->
		
		<? include("menu.inc.php");?>

	</td>
	<td>
	
		<!-- 主頁框 -->

		<table cellspacing=10 width=100%>
		<tr>
			<td>
			
				<?
				
				if ($action=="delete") {
					include("control_delete.inc.php");
				} else if ($action=="write") {
					include("control_write.inc.php");
				} else if ($action=="modify") {
					include("control_modify.inc.php");
				} else if ($action=="add") {
				    include("control_add.inc.php");
				} else if ($action=="new") {
				    include("control_new.inc.php");
				} else {
				    include("control_list.inc.php");
				}
				
				?>

			</td>
		</tr>
		</table>
		

	</td>
</tr>
</table>

</body>
</html>

<?
	
if ($error) {
    
	echo "<script language='JavaScript'>";
	echo "alert('".$error."');";
	echo "history.back();";
	echo "</script>";

}
mysql_close();
?>