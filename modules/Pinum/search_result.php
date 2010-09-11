<script language="JavaScript">
<!--
function mmLoadMenus() {
  if (window.mm_menu_0619141044_0) return;
  window.mm_menu_0619141044_0 = new Menu("root",153,20,"細明體, 新細明體, 標楷體",14,"#000000","#ffffff","#cccccc","#000084","left","middle",3,0,1000,-5,7,true,true,true,0,true,true);
  mm_menu_0619141044_0.addMenuItem("52753753737375375375");
   mm_menu_0619141044_0.hideOnMouseOut=true;
   mm_menu_0619141044_0.menuBorder=1;
   mm_menu_0619141044_0.menuLiteBgColor='#ffffff';
   mm_menu_0619141044_0.menuBorderBgColor='#555555';
   mm_menu_0619141044_0.bgColor='#555555';

  mm_menu_0619141044_0.writeMenus();
} // mmLoadMenus()
//-->
</script>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<?
global $xoopsUser, $xoopsDB;
$k=0;
$l=0;
$RE=0;
$BK=0;
$BL=0;
$result = "select ";
if ($s1){$result .= "$s1,";}//value="cust_name"
if ($s2){$result .= "$s2,";}//value="cust_num"
if ($s3){$result .= "$s3,";}//value="cty"
if ($s4){$result .= "$s4,";}//value="ste"
if ($s5){$result .= "$s5,";}//value="req_user"
if ($s6){$result .= "$s6,";}//value="post_name"
if ($s7){$result .= "$s7,";}//value="text_wd"
$result .= "grp,type,regdate,deve_state,yr,mth,ste,cty_code,cty,post_name,cust_num,se_num,kr_num,nu from pinum where ";
if($grp){$result .= "grp = '".$grp."' and ";}
if($cust_name){$result .= "cust_name like '%".$cust_name."%' and ";}
if($cust_num){$result .= "cust_num like '%".$cust_num."%' and ";}
if($cty_code=="All"){}else{$result .= "cty_code = '".$cty_code."' and ";}
if($ste){$result .= "ste = '".$ste."' and ";}
if($req_user){$result .= "req_user = '".$req_user."' and ";}
if($s8){$result .= "deve_state = '".$s8."' and ";}
//if($time_select=="--"){}else{$result .= " regdate between '".date("Y-m-d", mktime(0,0,0,date("m")-$time_select,date("d"),date("Y")))."' and '".date("Y-m-d", mktime(0,0,0,date("m"),date("d"),date("Y")))."' and ";}
//$result .= " type='".$type."' order by nu";
$result1 = $result;
$result .= " type='".$type."' and show_hi=0 order by nu";

$show_re = mysql_query($result) or die(mysql_error());
while ($row_re = mysql_fetch_array($show_re)) {
	$rowdata_re[$k++] = $row_re;	
}
for ($i=0;$i<count($rowdata_re);$i++) {
if($rowdata_re[$i][deve_state]=="RE"){$RE++;}elseif($rowdata_re[$i][deve_state]=="BL"){$BL++;}elseif($rowdata_re[$i][deve_state]=="BK"){$BK++;}
}
mysql_free_result($show_re);

$result2 = $result1." type='".$type."' and post_name='".$xoopsUser->getVar("uname")."' and show_hi=1 order by nu";
//echo $result2;
$show_re2 = mysql_query($result2) or die(mysql_error());
while ($row_re2 = mysql_fetch_array($show_re2)) {
	$rowdata_re2[$l++] = $row_re2;	
}
for ($i=0;$i<count($rowdata_re2);$i++) {
	if($rowdata_re2[$i][deve_state]=="RE"){$RE++;}elseif($rowdata_re2[$i][deve_state]=="BL"){$BL++;}elseif($rowdata_re2[$i][deve_state]=="BK"){$BK++;}
}
mysql_free_result($show_re2);

$show_num= str_pad($insert_num, 3, $type."0", STR_PAD_LEFT);
$insert_type = "S";

?>

<table width="100%" border="0" align="left" cellpadding="2" cellspacing="0">
  <tr class="subheading"> 
    <td width="54" align="left"> 
      <p>查詢列表</p></td>
	  
    <td height="10" colspan="7">目前查詢到: 進行中<?echo $BL?>筆；作廢<?echo $RE?>筆；已結案<?echo $BK?>筆</td>
  </tr>
  <tr bgcolor="#CCCCCC" class="subheading"> 
    <td height="10" colspan="10">&nbsp;</td>
  </tr>
  <tr bgcolor="#666666" class="subheading">
    <td width="54" align="center">&nbsp;</td>
    <td width="117" height="10">PI編號</td>
    <td width="88"><? if($s1){?>客戶名<?}?></td>
    <td width="54"><? if($s2){?>客戶編號<?}?></td>
    <td width="88"><? if($s3){?>國家<?}?></td>
    <td width="61"><? if($s5){?>需求者<?}?></td>
	<td width="61"><? if($s6){?>登錄人<?}?></td>
	<td width="29" align="left">註記</td>
	<td width="61"><? if($time_sel){?>登錄日期<?}?></td>
    <td width="71" align="center">進度顯示</td>
  </tr>
  <tr bgcolor="#0000000"> 
    <td height="1" colspan="10"></td>
  </tr>
<? for ($i=0;$i<count($rowdata_re);$i++) {
?>
  <tr class="productest" bgcolor="<? echo (($i+1)%2==0) ? "f5f5f5":"FFFFFF" ?>"> 
    <td width="54">&nbsp;<!--? echo $rowdata_re[$i][post_name];?--></td>    
    <td width="117"><? echo $rowdata_re[$i][grp];
	if($rowdata_re[$i][type]=="G"){echo $rowdata_re[$i][type];}else{echo "S";}
	echo $rowdata_re[$i][yr],$rowdata_re[$i][mth],$rowdata_re[$i][ste],$rowdata_re[$i][cty_code],$rowdata_re[$i][cust_num]?><?
	if ($rowdata_re[$i][type]=="G"){
		if ($rowdata_re[$i][cty_code]=="KR" && $rowdata_re[$i][cust_num]=="101"){
		echo substr_replace($rowdata_re[$i][kr_num], 'A', 0, 1);
		}else{echo $rowdata_re[$i][se_num];}
	}else{
		echo substr_replace($rowdata_re[$i][se_num], $rowdata_re[$i][type], 0, 1);
	}?></td>
    <td width="88"><? if($s1){echo $rowdata_re[$i][cust_name];}?></td>
    <td width="54"><? if($s2){echo $rowdata_re[$i][cust_num];}?></td>
    <td width="88"><? if($s3){echo $rowdata_re[$i][cty];}?></td>
    <td width="61"><? if($s5){echo $rowdata_re[$i][req_user];}?></td>
	<td width="61"><? if($s6){echo $rowdata_re[$i][post_name];}?></td>
    <td width="29" ><a href="javascript:MM_openBrWindow('pi_wd.php?nu=<?echo $rowdata_re[$i][cust_num]?>&ID=<?echo $rowdata_re[$i][nu]?>','','width=400,height=340')">註記</a></td>
    <td width="61"><? if($time_sel){echo $rowdata_re[$i][regdate];}?></td>
	<td width="71" align="center"><? if($rowdata_re[$i][deve_state]=="BL"){?><font color="blue">進行中</font> 
      <? } else if($rowdata_re[$i][deve_state]=="RE") {?><font color="red">作廢</font> 
      <? } else if($rowdata_re[$i][deve_state]=="BK") {?><font color="black">已結案</font> 
    <? }?></td>
  </tr>
<? }?>  

<?
/*
$result2 = $result1." type='".$type."' and post_name='".$xoopsUser->getVar("uname")."' and show_hi=1 order by nu";
$show_re2 = mysql_query($result2) or die(mysql_error());
while ($row_re2 = mysql_fetch_array($show_re2)) {
	$rowdata_re2[$k++] = $row_re2;	
}
for ($i=0;$i<count($rowdata_re2);$i++) {
	if($rowdata_re2[$i][deve_state]=="RE"){$RE++;}elseif($rowdata_re2[$i][deve_state]=="BL"){$BL++;}elseif($rowdata_re2[$i][deve_state]=="BK"){$BK++;}
}
echo $result2;
*/
for ($i=0;$i<count($rowdata_re2);$i++) {
?>
  <tr class="productest" bgcolor="<? echo (($i+1)%2==0) ? "f5f5f5":"FFFFFF" ?>"> 
    <td width="54">&nbsp;<!--? echo $rowdata_re2[$i][post_name];?--></td>    
    <td width="117"><? echo $rowdata_re2[$i][grp];
	if($rowdata_re2[$i][type]=="G"){echo $rowdata_re2[$i][type];}else{echo "S";}
	echo $rowdata_re2[$i][yr],$rowdata_re2[$i][mth],$rowdata_re2[$i][ste],$rowdata_re2[$i][cty_code],$rowdata_re2[$i][cust_num]?><?
	if ($rowdata_re2[$i][type]=="G"){
		if ($rowdata_re2[$i][cty_code]=="KR" && $rowdata_re2[$i][cust_num]=="101"){
		echo substr_replace($rowdata_re2[$i][kr_num], 'A', 0, 1);
		}else{echo $rowdata_re2[$i][se_num];}
	}else{
		echo substr_replace($rowdata_re2[$i][se_num], $rowdata_re2[$i][type], 0, 1);
	}?></td>
    <td width="88"><? if($s1){echo $rowdata_re2[$i][cust_name];}?></td>
    <td width="54"><? if($s2){echo $rowdata_re2[$i][cust_num];}?></td>
    <td width="88"><? if($s3){echo $rowdata_re2[$i][cty];}?></td>
    <td width="61"><? if($s5){echo $rowdata_re2[$i][req_user];}?></td>
	<td width="61"><? if($s6){echo $rowdata_re2[$i][post_name];}?></td>
    <td width="29" ><a href="javascript:MM_openBrWindow('pi_wd.php?nu=<? echo $rowdata_re2[$i][cust_num]?>&ID=<? echo $rowdata_re2[$i][nu]?>','','width=400,height=340')">註記</a></td>
    <td width="61"><? if($time_sel){echo $rowdata_re2[$i][regdate];}?></td>
	<td width="71" align="center"><? if($rowdata_re2[$i][deve_state]=="BL"){?><font color="blue">進行中</font> 
      <? } else if($rowdata_re2[$i][deve_state]=="RE") {?><font color="red">作廢</font> 
      <? } else if($rowdata_re2[$i][deve_state]=="BK") {?><font color="black">已結案</font> 
      <? }?></td>
  </tr>
<? }?> 









<? mysql_close();?>
</table>