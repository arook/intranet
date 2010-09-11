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

	$query = "insert into exhibition (regdate,topic,mess1,mess2,topic_e,mess1_e,mess2_e) ";
	$query .= "values ( '".date("Y/m/d")."','".$topic."','".$mess1."','".$mess2."','".$topic_e."','".$mess1_e."','".$mess2_e."')";
	mysql_query($query) or die (mysql_error());

	$query=mysql_query("select sn from exhibition order by sn desc");
	$row = mysql_fetch_array($query);
	mysql_free_result($query);

	if ($imgfile1_size) {
		copy($imgfile1, "../images/exhibition/".$row['sn']."_1.gif");
	}	

	if ($imgfile2_size) {
		copy($imgfile2, "../images/exhibition/".$row['sn']."_2.gif");
	}	

	mysql_close();

	?>

	<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
	<input type="hidden" name="user" value="<? echo $user ?>">
	<input type="hidden" name="pass" value="<? echo $pass ?>">
	</form>


	<script language="JavaScript">
	document.main.submit();
	</script>

	<?

}


?>

