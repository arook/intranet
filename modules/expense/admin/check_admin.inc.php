<?$check_admin = mysql_query("select * from pro_admin where name = '".$user."' and pwd='".$pass."'");
$rowsize= mysql_num_rows ($check_admin);
if($rowsize==0){
	echo "<script language='JavaScript'>";
	echo "alert('無效管理帳號或者識別密碼錯誤');";
	echo "location.href('index.php')";
	echo "</script>";
	exit;}
//include("../check_root.php");?>