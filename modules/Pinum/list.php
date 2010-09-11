<?//$conn=mysql_connect("10.1.1.1","cooper","@ozaki") or die("Connect error!");
$conn=mysql_connect("localhost","root","ck5j3d") or die("Connect error!");
$selectdb=mysql_select_db("intranet",$conn) or die("Error select DB");
define("URL", "http://www.ozaki.com.tw/web_erp");?>
<html>
<head>
	<title>Untitled</title>
</head>

<body>
<table width="400" border="1" align="left" cellpadding="2" cellspacing="0">
  <tr>
    <td width="300">客戶名</td>
    <td width="50">客戶編號</td>
	<td width="50">keyin</td>
  </tr>

<?$query = mysql_query("select ste,cust_name,cty_code,cust_num,req_user from pinum where grp='I' order by ste,cty_code,cust_num");
while ($re = mysql_fetch_array($query)) {?>
  <tr>
    <td width="300"><?echo $re[cust_name]?></td>
    <td width="50"><?echo $re[ste].$re[cty_code].$re[cust_num]?></td>
	<td width="50"><?echo $re[req_user]?></td>
  </tr>
<?}?>

<?mysql_close();?>
</body>
</html>
