<?

if ($imgfile_size) {
	$imgdata=GetImageSize($imgfile);		// ���o���ɸ�T
}

if (!$topic) {
    $error ="�T���D�D(��)������g";
} else if (!$topic_e) {
    $error ="�T���D�D(�^)������g";
} elseif (!$mess1) {
    $error ="²�z����(��)������g";
} elseif (!$mess1_e) {
    $error ="²�z����(�^)������g";
} elseif (!$mess2) {
    $error ="�ԲӤ��e(��)������g";
} elseif (!$mess2_e) {
    $error ="�ԲӤ��e(�^)������g";
} else if ($imgdata[0]>140) {
    $error = "���ɼe�׭���ϥ� 140 ����";
} elseif ($imgdata[1]>140) {
    $error = "���ɰ��׭���ϥ� 140 ����";
} else {

	if ($delimg) {
		unlink ("../images/news/".$target.".gif");

	} elseif ($imgfile_size) {
		copy($imgfile, "../images/news/".$target.".gif");
	}


	$topic = eregi_replace("<", "&lt;", $topic);
	$topic = eregi_replace(">", "&gt;", $topic);

	$topic_e = eregi_replace("<", "&lt;", $topic_e);
	$topic_e = eregi_replace(">", "&gt;", $topic_e);

	$mess1 = eregi_replace("<", "&lt;", $mess1);
	$mess1 = eregi_replace(">", "&gt;", $mess1);

	$mess1_e = eregi_replace("<", "&lt;", $mess1_e);
	$mess1_e = eregi_replace(">", "&gt;", $mess1_e);

	$mess2 =eregi_replace(chr(13).chr(10),"<br>",$mess2);
	$mess2_e =eregi_replace(chr(13).chr(10),"<br>",$mess2_e);

	mysql_connect ($dbshost, $dbsuser, $dbspass);
	mysql_select_db ($dbsname) or die( "Unable to select database"); 

	$query = "update news set ";
	$query .= "topic='".$topic."',";
	$query .= "mess1 = '".$mess1."',";
	$query .= "mess2 = '".$mess2."',";
	$query .= "topic_e='".$topic_e."',";
	$query .= "mess1_e = '".$mess1_e."',";
	$query .= "mess2_e = '".$mess2_e."' ";
	$query .= "where sn='".$target."'";
	mysql_query($query) or die (mysql_error());

	mysql_close();

	?>

	<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
	<input type="hidden" name="user" value="<? echo $user ?>">
	<input type="hidden" name="pass" value="<? echo $pass ?>">
	<input type="hidden" name="action" value="modify">
	<input type="hidden" name="target" value="<? echo $target ?>">
	<input type="hidden" name="page" value="<? echo $page ?>">
	</form>


	<script language="JavaScript">
	document.main.submit();
	</script>


	<?

}

