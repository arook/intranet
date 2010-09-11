<?include("header.php");
include_once(XOOPS_ROOT_PATH."/class/xoopstree.php");
if ( !defined("XOOPS_HEADER_INCLUDED") ) {
	define("XOOPS_HEADER_INCLUDED",1);
	xoops_header(false);
	$currenttheme = getTheme();
	include(XOOPS_ROOT_PATH."/themes/".$currenttheme."/theme.php");
	if ( file_exists(XOOPS_ROOT_PATH."/themes/".$currenttheme."/language/lang-".$xoopsConfig['language'].".php") ) {
		include(XOOPS_ROOT_PATH."/themes/".$currenttheme."/language/lang-".$xoopsConfig['language'].".php");
	} elseif ( file_exists(XOOPS_ROOT_PATH."/themes/".$currenttheme."/language/lang-english.php") ) {
		include(XOOPS_ROOT_PATH."/themes/".$currenttheme."/language/lang-english.php");
	}
	$xoopsOption['show_rblock'] = (!empty($xoopsOption['show_rblock'])) ? $xoopsOption['show_rblock'] : 0;
}?>

<?$show_nu = "select * from pinum where nu = ".$_REQUEST[ID]."";
$result=mysql_query($show_nu) or die (mysql_error());
$rs=mysql_fetch_array($result);
$grp = $rs[grp];
$type = $rs[type];
$yr = $rs[yr];
$mth = $rs[mth];
$ste = $rs[ste];
$cty_code = $rs[cty_code];
$address = $rs[address];
$cust_num = $rs[cust_num];
	if($_REQUEST[nu]=="101"){
$show_num = substr_replace($rs[kr_num], 'A', 0, 1);
	}else{
$show_num = $rs[se_num];
	}
$cust_name = $rs[cust_name];
$cty = $rs[cty];
$text_wd = $rs[text_wd];
$req_user = $rs[req_user];
$email = $rs[email];
$post_name = $rs[post_name];
$regdate = $rs[regdate];
$deve_state = $rs[deve_state];
$nu = $rs[nu];

if($type=="G"){}else{$show_num= substr_replace($show_num, $type, 0, 1);
$type="S";}
?>
<html>
<head>
	<title>PI Number : <?echo $grp,$type,$yr,$mth,$ste,$cty_code,$cust_num,$show_num;?></title>
</head>
<link href="../../xoops.css" rel="stylesheet" type="text/css">
<body leftmargin="5" topmargin="0" marginwidth="0" marginheight="0">
<br>
<form action="pi_wd_action.php?up=<?echo $nu?>" method="post">

  <TABLE cellSpacing=0 cellPadding=0 width=100% border=0>
    <TR> 
      <TD class="producttitle" width=100>Pinum : </TD>
      <TD width=420 class="producttitle"> <?echo $grp,$type,$yr,$mth,$ste,$cty_code,$cust_num,$show_num;?></TD>
    </TR>
    <TR> 
      <TD class="producttitle" width=100>註紀 : </TD>
      <TD width=420 class="producttitle"><textarea name="text_wd" cols="30" rows="5" class="INPUT1"><?echo $text_wd?></textarea></TD>
    </TR>
	<TR> 
      <TD class="producttitle" width=100>進度顯示 : </TD>
      <TD width=420 class="producttitle"><input type="radio" name="s8" <?if($deve_state=="BL"){echo "checked";}?> value="BL">進行<input type="radio" <?if($deve_state=="RE"){echo "checked";}?> name="s8" value="RE">作廢<input name="s8" <?if($deve_state=="BK"){echo "checked";}?> type="radio" value="BK">已結案</TD>
    </TR>
	<TR> 
      <TD class="producttitle" width=100></TD>
      <TD width=420 class="producttitle"><input type="submit" name="sbumit" value="修改"><input type="Reset"></TD>
    </TR>
  </table>
</form>
</body>
</html>
<?mysql_close();?>