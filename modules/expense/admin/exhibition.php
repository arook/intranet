<?

include("../config.inc.php");

if ($user !=$adname || $pass !=$adpass) {
	echo "<script language='JavaScript'>";
	echo "alert('�L�ĺ޲z�b���Ϊ��ѧO�K�X���~');";
	echo "history.back();";
	echo "</script>";
	exit;
}


?>

<html>
<head>
<title>�޲z�{�� - �i����ƺ��@</title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<link rel="stylesheet" href="../gm-tek.css" type="text/css">
</head>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">


<!-- �s�i�� -->

<table cellspacing=0 cellpadding=0 width=100%>
<tr>
	<td>
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="460" height="80">
		<param name=movie value="../flash/logo.swf">
		<param name=quality value=high>
		<embed src="../flash/logo.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="460" height="80">
		</embed> 
		</object>
	</td>
	<td>
		<img src="images/title_exhibition_01.gif">
	</td>
</tr>
</table>


<!-- ���j�� -->

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td height="20" bgcolor="#006699"></td></tr>
</table>

<!-- �u�@���� -->

<table cellspacing=0 width="100%" style="height: 340">
<tr valign="top">
	<td width=150 bgcolor="#66CCCC">

		<!--  �޲z���  -->
		
		<? include("menu.inc.php");?>

	</td>
	<td>
	
		<!-- �D���� -->

		<table cellspacing=10 width=100%>
		<tr>
			<td>
			
				<?
				
				if ($action=="delete") {
					include("exhibition_delete.inc.php");
				} else if ($action=="write") {
					include("exhibition_write.inc.php");
				} else if ($action=="modify") {
					include("exhibition_modify.inc.php");
				} else if ($action=="add") {
				    include("exhibition_add.inc.php");
				} else if ($action=="new") {
				    include("exhibition_new.inc.php");
				} else {
				    include("exhibition_list.inc.php");
				}
				
				?>

			</td>
		</tr>
		</table>
		

	</td>
</tr>
</table>


<!-- ���v�ŧi -->

<? include("../copyright.inc.php");?>


</body>
</html>

<?
	
if ($error) {
    
	echo "<script language='JavaScript'>";
	echo "alert('".$error."');";
	echo "history.back();";
	echo "</script>";

}

?>