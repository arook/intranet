<?$check_admin = mysql_query("select * from pro_admin where name = '".$user."' and pwd='".$pass."'");
$rowsize= mysql_num_rows ($check_admin);
if($rowsize==0){
	echo "<script language='JavaScript'>";
	echo "alert('�L�ĺ޲z�b���Ϊ��ѧO�K�X���~');";
	echo "location.href('index.php')";
	echo "</script>";
	exit;}
//include("../check_root.php");?>