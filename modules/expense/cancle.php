<?
include("header.php");

//�ˬd�k�϶��O�_�}��************************
//if ($xoopsConfig['startpage'] == $xoopsModule->dirname()){
if ($xoopsConfig['startpage'] == "ozaki_product_db"){
	$xoopsOption['show_rblock'] = 1;
	include(XOOPS_ROOT_PATH."/header.php");
	make_cblock();
	echo "<br />";
}else{
	$xoopsOption['show_rblock'] = 0;
	include(XOOPS_ROOT_PATH."/header.php");
}
//*******************************************
global $xoopsUser, $xoopsDB;

if ( $xoopsUser ){
	//���o�ϥΪ̦W�٤θs�� id
	$uid = $xoopsUser->getVar("uid");
}

OpenTable();
$query="SELECT uname,pass FROM ".$xoopsDB->prefix("users")." WHERE uid='$uid'";
//echo $query."<BR>";
$result=$xoopsDB->query($query,0);
if($xoopsDB->getRowsNum($result)!=0){
	$rs=$xoopsDB->fetchArray($result);
?>
<?
$show_re=mysql_query("select * from expense where nu = '".$nu."'");
$row_re = mysql_fetch_array($show_re);
$deve_state=$row_re[deve_state];
$approv=$row_re[approv];
$nu=$row_re[nu];
$img_name=$row_re[img_name];
$apply_form=$row_re[apply_form];
$apply_change=$row_re[apply_change];
$apply_nu=$row_re[apply_nu];
$apply_date=$row_re[apply_date];
$apply_area=$row_re[apply_area];
$apply_fee=$row_re[apply_fee];
$apply_fee_item=$row_re[apply_fee_item];
$apply_y=$row_re[apply_y];
$apply_m=$row_re[apply_m];
$apply_dept=$row_re[apply_dept];
$apply_fee_name=$row_re[apply_fee_name];
$apply_fee_dept=$row_re[apply_fee_dept];
$fee_type=$row_re[fee_type];
$fee_amount=$row_re[fee_amount];
$factory=$row_re[factory];
$factory_other=$row_re[factory_other];
$ps=$row_re[ps];
$approve_person=$row_re[approve_person];
$approve_ps=$row_re[approve_ps];

?>
<link href="style.css" rel="stylesheet" type="text/css">
<form name="form1" action="cancled.php" enctype="multipart/form-data" method="post" onclick="return CheckAction()">
<img src="images/title.gif" width="400" height="35"> <br>
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td colspan="2"><p><FONT 
                        size=3>�z�n�A�w��i�J�O��/�]�ƥӽеn���@�~�t�ΡC</FONT></p>
      <hr></td>
  </tr>
  <tr> 
    <td colspan="2"><font color="#FF0000" size="3">�z�o���@�~���ק︹�X��</font><font color="#FF0000">: 
      <font size="3"><?echo $apply_form;?></font></font></td>
  </tr>
  <tr> 
    <td height="60" colspan="2" class="fg1"><strong>�O��/�]�ƥӽЪ��p�p�U:</strong></td>
  </tr>
  <tr> 
    <td colspan="2"><table width="92%" border="0" align="right" cellpadding="0" cellspacing="4">
        <tr>
          <td width="14%"> �ӽФ��</td>
          <td width="86%"><?echo $apply_date?></td>
        </tr>
        <tr> 
          <td>�ӽЦa��</td>
          <td><?if($apply_area=="T"){echo "�x�W";}
		  else if ($apply_area=="S"){echo "�`�`";}?></td>
        </tr>
		<tr> 
          <td>�ӽжO��<br>�O�βӥ�</td>
          <td><?$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$apply_fee."' and item_nu = '".$apply_fee_item."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[fee_name]." - ".$row_sel[item_name];
	$ff=$row_sel[fee_name];
	$ii=$row_sel[item_name];?></td>
        </tr>
        <tr> 
          <td>���ͤ��</td>
          <td><?echo $apply_y."/".$apply_m;?></td>
        </tr>
        <tr> 
          <td>�ӽг���</td>
          <td><?if($apply_dept!=$apply_dept_bat){echo "<s><font color=#FF0000>".$apply_dept_bat."</font></s>";}?> <?$query_dept = mysql_query("select dept_name from ozaki_dept where dept_head=".substr($apply_dept,0,1)." and dept_bot=".substr($apply_dept,1,1));
	  $row_dept = mysql_fetch_array($query_dept);
	  echo $row_dept[dept_name];?></td>
        </tr>
        <tr> 
          <td>�ӽФH</td>
          <td><?if($apply_fee_name!=$apply_fee_name_bat){echo "<s><font color=#FF0000>".$apply_fee_name_bat."</font></s>";}?> <?echo $apply_fee_name?></td>
        </tr>
        <tr> 
          <td>�ӽЪ��B</td>
          <td><?if($fee_type!=$fee_type_bat){echo "<s><font color=#FF0000>".$fee_type_bat."</font></s>";}?><?if($fee_amount!=$fee_amount_bat){echo "<s><font color=#FF0000>".$fee_amount_bat."</font></s>";}?>  <?echo $fee_type." $".$fee_amount?></td>
        </tr>
        <tr>
          <td>�����t��</td>
          <td><?if($factory!=$factory_bat){
		  $pro_sel = mysql_query ("select * from factory_list where factory_code = '".$factory_bat."'");
	while ($row_sel = mysql_fetch_array($pro_sel)) {
	echo "<s><font color=#FF0000>".$row_sel[factory_short_name]."</font></s>";}
		}?>
		  <?$pro_sel = mysql_query ("select * from factory_list where factory_code = '".$factory."'");
	while ($row_sel = mysql_fetch_array($pro_sel)) {
	echo $row_sel[factory_short_name];}?><?echo $factory_other?></td>
        </tr>
        <tr> 
          <td>�O�θԭz/�Ƶ�</td>
          <td><?echo $ps?></td>
        </tr>
		<tr> 
          <td>�D�޽T�{</td>
          <td><?if($approv=="W"){?>���ݽT�{<?}elseif($approv=="P"){?>�w�T�{<?}elseif($approv=="F"){?>X<?}?></td>
        </tr>
        <tr> 
          <td>�]�ȼf��</td>
          <td><?$query=mysql_query("select * from expense_fee_deve_state where sht_name = '".$deve_state."'");
		while ($row = mysql_fetch_array($query))
		{?>
		<? echo $row[name];?>
		<?}?></td>
        </tr>
        <tr> 
          <td colspan="2"></td>
        </tr>
		<tr>
    	  <td><div align="center"><input type="submit" name="submit" value="�T�w�@�o"></div></td>
  		</tr>
      </table></td>
  </tr>
  <tr> 
    <td width="550" align="right"><hr align="left" width="95%" noshade> </td>
    <td align="right">
	  <?include("check_root.php");
	  include("inc/query.inc.php");?>
	</td>
  </tr>
</table>
<input type="hidden" name="nu" value="<?echo $nu?>">
<input type="hidden" name="apply_form" value="<?echo $apply_form?>">
<input type="hidden" name="apply_fee_name" value="<?echo $apply_fee_name?>">
<input type="hidden" name="apply_fee_dept" value="<?echo $apply_fee_dept?>">
</form>
<?
}
CloseTable();
echo "<br />";
include_once(XOOPS_ROOT_PATH."/footer.php");
?>
<?mysql_close();?>
