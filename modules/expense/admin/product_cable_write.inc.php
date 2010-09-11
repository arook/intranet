<?
if (!$name_eng) {
    $error ="¥²¶·¶ñ¼g";
} else {

	$query = "update pro_cable_sel set ";
	$query .= " name_eng='".$name_eng."',";
	$query .= " name_chi='".$name_chi."'";
	$query .= " where nu='".$target."'";
	
	mysql_query($query) or die (mysql_error());
	mysql_close();
if($img){
			copy($img, "../images/".$name_chi.".jpg");
			}
	?>

	<form method=post name="main" style="margin: 0" enctype="multipart/form-data">
	<input type="hidden" name="user" value="<? echo $user ?>">
	<input type="hidden" name="pass" value="<? echo $pass ?>">
	<input type="hidden" name="action" value="modify">
	<input type="hidden" name="target" value="<? echo $target ?>">
	<input type="hidden" name="page" value="<? echo $page ?>">
	<input type="hidden" name="sort" value="<? echo $sort ?>">
	<input type="hidden" name="full_sort" value="<? echo $full_sort ?>">
	</form>


	<script language="JavaScript">
	document.main.submit();
	</script>


	<?

}

