<?

if (!$name_eng ) {
   $error ="¥²¶·¶ñ¼g";
} else {
    

	$query = "insert into pro_sel (type,name_eng,name_chi) ";
	$query .= "values ( '".$sort."','".$name_eng."','".$name_chi."')";
	
	mysql_query($query) or die (mysql_error());
	if($img){
			copy($img, "../images/".$name_chi.".jpg");
			}
	$query=mysql_query("select sn from pro_sel order by nu desc");
	$row = mysql_fetch_array($query);
	mysql_free_result($query);
	?>

	<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
	<input type="hidden" name="user" value="<? echo $user ?>">
	<input type="hidden" name="pass" value="<? echo $pass ?>">
	<input type="hidden" name="sort" value="<? echo $sort ?>">
	</form>


	<script language="JavaScript">
	document.main.submit();
	</script>

	<?}?>

