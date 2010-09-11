<?

if ($imgfile1_size) {
	$imgdata1=GetImageSize($imgfile1);		// 取得圖檔資訊
}

if ($imgfile2_size) {
	$imgdata2=GetImageSize($imgfile2);		// 取得圖檔資訊
}

if (!$topic) {
    $error ="展覽主題(中)必須填寫";
} else if (!$topic_e) {
    $error ="展覽主題(英)必須填寫";
} elseif (!$mess1) {
    $error ="簡述說明(中)必須填寫";
} elseif (!$mess1_e) {
    $error ="簡述說明(英)必須填寫";
} elseif (!$mess2) {
    $error ="詳細內容(中)必須填寫";
} elseif (!$mess2_e) {
    $error ="詳細內容(英)必須填寫";
} else if ($imgdata1[0]>140) {
    $error = "圖檔(一)寬度限制使用 140 像素";
} elseif ($imgdata1[1]>140) {
    $error = "圖檔(一)高度限制使用 140 像素";
} else if ($imgdata2[0]>140) {
    $error = "圖檔(二)寬度限制使用 140 像素";
} elseif ($imgdata2[1]>140) {
    $error = "圖檔(二)高度限制使用 140 像素";
} else {

	if ($delimg1) {
		unlink ("../images/exhibition/".$target."_1.gif");
	} elseif ($imgfile1_size) {
		copy($imgfile1, "../images/exhibition/".$target."_1.gif");
	}

	if ($delimg2) {
		unlink ("../images/exhibition/".$target."_2.gif");
	} elseif ($imgfile2_size) {
		copy($imgfile2, "../images/exhibition/".$target."_2.gif");
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

	$query = "update exhibition set ";
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

