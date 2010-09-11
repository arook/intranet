<?

if ($imgfile_size>0) {

	if ($imgfile_size>1048576) {
		$fsize = number_format(($imgfile_size/1048576),1);
		$fsize.="M";
	} else if ($imgfile_size>1024) {
		$fsize = number_format(($imgfile_size/1024),1);
		$fsize.="K";
	} 

	$fnames=split("\\\\",$filename);

	if ($oldname != $fnames[count($fnames)-1]) {
		if (file_exists("../images/files/".$fnames[count($fnames)-1])) {
			$error ="驅動程式名稱重複，無法重複設定！";
		} else {
		    unlink("../images/files/".$oldname);
		}
	}
	
	if (!$error) {
	    copy($imgfile, "../images/files/".$fnames[count($fnames)-1]);
	}
}


if (!$error) {
    
	if (!$topic) {
		$error ="程式名稱(中)必須填寫";
	} else if (!$topic_e) {
		$error ="程式名稱(英)必須填寫";
	} else {



		$topic = eregi_replace("<", "&lt;", $topic);
		$topic = eregi_replace(">", "&gt;", $topic);

		$topic_e = eregi_replace("<", "&lt;", $topic_e);
		$topic_e = eregi_replace(">", "&gt;", $topic_e);

		mysql_connect ($dbshost, $dbsuser, $dbspass);
		mysql_select_db ($dbsname) or die( "Unable to select database"); 

		$query = "update download set ";
		
		if ($imgfile_size) {
			$query .= "fsize='".$fsize."',";
			$query .= "fname='".$fnames[count($fnames)-1]."',";
		}

		$query .= "topic='".$topic."',";
		$query .= "regdate='".date("Y/m/d")."',";
		$query .= "topic_e='".$topic_e."' ";


			
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
		<input type="hidden" name="sort" value="<? echo $sort ?>">
		</form>


		<script language="JavaScript">
		document.main.submit();
		</script>


		<?

	}

}

?>