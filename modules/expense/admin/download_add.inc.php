<?

$fnames=split("\\\\",$filename);

// �ɮצW��
// $fnames[count($fnames)-1]

if (!$topic) {
    $error ="�{���W��(��)������g";
} else if (!$topic_e) {
    $error ="�{���W��(�^)������g";
} else if  (file_exists("../images/files/".$fnames[count($fnames)-1])) {
	$error ="�X�ʵ{���W�٭��ơA�L�k���Ƴ]�w�I";
} else {


	//$filedata=GetImageSize($imgfile);		// ���o���ɸ�T
	
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

