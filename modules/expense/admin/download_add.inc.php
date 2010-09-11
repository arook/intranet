<?

$fnames=split("\\\\",$filename);

// 檔案名稱
// $fnames[count($fnames)-1]

if (!$topic) {
    $error ="程式名稱(中)必須填寫";
} else if (!$topic_e) {
    $error ="程式名稱(英)必須填寫";
} else if  (file_exists("../images/files/".$fnames[count($fnames)-1])) {
	$error ="驅動程式名稱重複，無法重複設定！";
} else {


	//$filedata=GetImageSize($imgfile);		// 取得圖檔資訊
	
	if ($imgfile_size>1048576) {
	    $fsize = number_format(($imgfile_size/1048576),1);
		$fsize.="M";
	} else if ($imgfile_size>1024) {
		$fsize = number_format(($imgfile_size/1024),1);
		$fsize.="K";
	} 

	$topic = eregi_replace("<", "&lt;", $topic);
	$topic = eregi_replace(">", "&gt;", $topic);

	$topic_e = eregi_replace("<", "&lt;", $topic_e);
	$topic_e = eregi_replace(">", "&gt;", $topic_e);

	mysql_connect ($dbshost, $dbsuser, $dbspass);
	mysql_select_db ($dbsname) or die( "Unable to select database"); 
	
	copy($imgfile, "../images/files/".$fnames[count($fnames)-1]);
	
	$query = "insert into download (regdate,sort,fname,fsize,topic,topic_e) ";
	$query .= "values ( '".date("Y/m/d")."','".$sort."','".$fnames[count($fnames)-1]."','".$fsize."','".$topic."','".$topic_e."')";
	
	mysql_query($query) or die (mysql_error());

	//$query=mysql_query("select sn from download order by sn desc");
	//$row = mysql_fetch_array($query);
	//mysql_free_result($query);



	mysql_close();

	?>

	<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
	<input type="hidden" name="user" value="<? echo $user ?>">
	<input type="hidden" name="pass" value="<? echo $pass ?>">
	<input type="hidden" name="sort" value="<? echo $sort ?>">
	</form>


	<script language="JavaScript">
	document.main.submit();
	</script>

	<?

}


?>

