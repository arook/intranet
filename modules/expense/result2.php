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

include("check_root.php");
?>
<?
$k=0;
$RE=0;
$BK=0;
$GN=0;
$BL=0;
//$show_query="select * from expense where  and apply_y='".$apply_y."' and apply_m='".$apply_m."' and approv = 'P'";
/*
if($apply_fee_dept=="�޲z��"){
$show_query =" select * from expense where apply_fee_dept='�޲z��' and apply_y='".$apply_y."' and apply_m='".$apply_m."' or apply_fee_dept='�]�Ȳ�' and apply_y='".$apply_y."' and apply_m='".$apply_m."' or apply_fee_dept='��T��' and apply_y='".$apply_y."' and apply_m='".$apply_m."' or apply_fee_dept='��Ԥ䴩��' and apply_y='".$apply_y."' and apply_m='".$apply_m."'";
}elseif($apply_fee_dept=="������"){
$show_query =" select * from expense where apply_fee_dept='������' and apply_y='".$apply_y."' and apply_m='".$apply_m."' or apply_fee_dept='��P���s��' and apply_y='".$apply_y."' and apply_m='".$apply_m."' or apply_fee_dept='���~������' and apply_y='".$apply_y."' and apply_m='".$apply_m."' or apply_fee_dept='��s�}�o��'and apply_y='".$apply_y."' and apply_m='".$apply_m."'";
}elseif($apply_fee_dept=="������"){
$show_query =" select * from expense where apply_fee_dept='������' and apply_y='".$apply_y."' and apply_m='".$apply_m."' or apply_fee_dept='���P��' and apply_y='".$apply_y."' and apply_m='".$apply_m."' or apply_fee_dept='�~�P��' and apply_y='".$apply_y."' and apply_m='".$apply_m."'";
}elseif($apply_fee_dept=="�`�g�z��"){
$show_query =" select * from expense where apply_fee_dept='�`�g�z��' and apply_y='".$apply_y."' and apply_m='".$apply_m."' or apply_fee_dept='�H�Ʋ�' and apply_y='".$apply_y."' and apply_m='".$apply_m."'";
}elseif($apply_fee_dept=="�Ĳ���"){
$show_query =" select * from expense where apply_fee_dept='�Ĳ���' and apply_y='".$apply_y."' and apply_m='".$apply_m."' or apply_fee_dept='�~�O�����' and apply_y='".$apply_y."' and apply_m='".$apply_m."'";
}elseif($apply_fee_dept=="OI�Ʒ~��"){
$show_query =" select * from expense where apply_fee_dept='OI�Ʒ~��' and apply_y='".$apply_y."' and apply_m='".$apply_m."'";
}else{
$show_query =" select * from expense where apply_fee_dept='$apply_fee_dept' and apply_y='".$apply_y."' and apply_m='".$apply_m."'";
}
*/
$apply_type = $_REQUEST['apply_type'];
$frm = $_REQUEST['frm'];
$apply_dy = $_REQUEST['apply_dy'];
$apply_dm = $_REQUEST['apply_dm'];
$deve_state = $_REQUEST['deve_state'];
$apply_area = $_REQUEST['apply_area'];
$st_y = $_REQUEST['st_y'];
$st_m = $_REQUEST['st_m'];
$apply_fee_depts = $_REQUEST['apply_fee_depts'];
$apply_fee_name = $_REQUEST['apply_fee_name'];
$fee_type = $_REQUEST['fee_type'];
$fee_amount_mix = $_REQUEST['fee_amount_mix'];
$fee_amount_max = $_REQUEST['fee_amount_max'];

$show_query="select * from expense where ";
if($frm){$show_query .="apply_form like '%".$frm."%' and ";}
if($apply_dy && $apply_dm){
	$apply_date1 = $apply_dy."-".$apply_dm."-01";
	$apply_date2 = $apply_dy."-".$apply_dm."-31";
	$show_query.="apply_date >='".$apply_date1."' and apply_date <='".$apply_date2."' and ";
}
if($apply_type){$show_query .=" apply_form like '__".$apply_type."%' and ";}
if($apply_area){$show_query .="apply_area='".$apply_area."' and ";}
if($deve_state){$show_query .="deve_state='".$deve_state."' and ";}
if($st_y){$show_query .="apply_y='".$st_y."' and ";}
if($st_m){$show_query .="apply_m='".$st_m."' and ";}
if($apply_fee_depts){$show_query .="apply_fee_dept='".$apply_fee_depts."' and ";}
if($fee_type!="-"){$show_query .="fee_type='".$fee_type."' and ";}
if($fee_amount_mix && $fee_amount_max){
$show_query .="fee_amount between '".$fee_amount_mix."' and '".$fee_amount_max."' ";
}
$show_query .="nu<>''";
$show_query .=" order by apply_y,apply_m";
//echo $show_query."<br>";
$show_re = mysql_query($show_query) or die(mysql_error());
while ($row_re = mysql_fetch_array($show_re)) {
	$rowdata_re[$k++] = $row_re;
}
for ($i=0;$i<count($rowdata_re);$i++) {
	if($rowdata_re[$i][deve_state]=="RE"){$RE++;}elseif($rowdata_re[$i][deve_state]=="BL"){$BL++;}elseif($rowdata_re[$i][deve_state]=="BK"){$BK++;}elseif($rowdata_re[$i][deve_state]=="GN"){$GN++;}
}
?>
<img src="images/title.gif" width="400" height="35"> <br>
<form name="form1" method="post" action="donw_result2.php">
<input type="hidden" name="apply_type" value="<? echo $apply_type?>">
<input type="hidden" name="frm" value="<? echo $frm?>">
<input type="hidden" name="apply_dy" value="<? echo $apply_dy?>">
<input type="hidden" name="apply_dm" value="<? echo $apply_dm?>">
<input type="hidden" name="deve_state" value="<? echo $deve_state?>">
<input type="hidden" name="apply_area" value="<? echo $apply_area?>">
<input type="hidden" name="st_y" value="<? echo $st_y?>">
<input type="hidden" name="st_m" value="<? echo $st_m?>">
<input type="hidden" name="apply_fee_depts" value="<? echo $apply_fee_depts?>">
<input type="hidden" name="apply_fee_name" value="<? echo $apply_fee_name?>">
<input type="hidden" name="fee_type" value="<? echo $fee_type?>">
<input type="hidden" name="fee_amount_mix" value="<? echo $fee_amount_mix?>">
<input type="hidden" name="fee_amount_max" value="<? echo $fee_amount_max?>">
  <table width="700" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td colspan="2"><FONT size=3>�z�n�A�w��i�J�O��/�]�ƥӽеn���@�~�t�ΡC</FONT> <hr></td>
    </tr>
    <tr> 
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2" class="fg1"><strong>�H�U���ŦX�d�߱��󪺶O��/�]�ƥӽж���: �f�֤�<? echo $BL?>���F�q�L<? echo $GN?>���F�@�o<? echo $RE?>���F�w��<? echo $BK?>��</strong>
        <input type="submit" name="button" id="button" value="�U��Excel����" /></td>
    </tr>
    <tr> 
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2" align="right"> 
        <table width="100%" border="0" cellpadding="2" cellspacing="0" bgcolor="#666666" >
          <tr valign="middle" bgcolor="#cccccc"> 
            <td width="60" height="20">�n�����X</td>
            <td width="65" height="20" align="center">�ӽФ�� </td>
            <td width="35" height="20" align="center">�ӽ�<br>
              �a��</td>
            <td width="50" height="20" align="center">�ӽ�<br>
              �O��</td>
            <td width="70" height="20" align="center">�O�βӥ�</td>
            <!--<td width="40" height="20" align="center">����<br>
              ���</td>-->
            <td width="60" height="20" align="center">�ӽг���</td>
            <td width="60" height="20" align="center">�ӽФH</td>
            <td width="60" height="20" align="center">�ӽЪ��B</td>
            <td width="35" height="20" align="center">����<br>
              �t��</td>
            <td width="40" height="20" align="center">�D�޽T�{</td>
            <td width="40" height="20" align="center">���A</td>
            <td width="35" height="20" align="center">�s��</td>
          </tr>
          <? for ($i=0;$i<count($rowdata_re);$i++) {
?> 
          <tr class="bg5"> 
            <td><a href="sheet.php?nn=<? echo $rowdata_re[$i][nu]?>"><? echo $rowdata_re[$i][apply_form]?><? if($rowdata_re[$i][apply_change]>0){echo "_".$rowdata_re[$i][apply_change];}?></a></td>
            <td align="center"><? echo $rowdata_re[$i][apply_date]?></td>
            <td align="center"><? if($rowdata_re[$i][apply_area]=="T"){echo "�x�W";}
		  else if ($rowdata_re[$i][apply_area]=="S"){echo "�`�`";}?></td>
            <td align="center"><? $pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$rowdata_re[$i][apply_fee]."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[fee_name]?></td>
            <td align="center"><? $pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$rowdata_re[$i][apply_fee]."' and item_nu = '".$rowdata_re[$i][apply_fee_item]."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[item_name]?></td>
            <!--<td align="center"><? echo $rowdata_re[$i][apply_y]?>-<? echo $rowdata_re[$i][apply_m]?></td>-->
            <td align="center"><? echo $rowdata_re[$i][apply_fee_dept]?></td>
            <td align="center"><? echo $rowdata_re[$i][apply_fee_name]?></td>
            <td align="center"><? echo $rowdata_re[$i][fee_type]?> <? echo $rowdata_re[$i][fee_amount]?> 
            </td>
            <td align="center"><? $pro_sel = mysql_query ("select * from factory_list where factory_code = '".$rowdata_re[$i][factory]."'");
				$row_sel = mysql_fetch_array($pro_sel);
				echo $row_sel[factory_short_name]?><? echo $rowdata_re[$i][factory_other]?></td>
            <td align="center"><? if($rowdata_re[$i][approv]=="W"){?>���ݽT�{<? }?>
		  <? if($rowdata_re[$i][approv]=="P"){?>�w�T�{<? }?>
		  <? if($rowdata_re[$i][approv]=="F"){?>�w����<? }?></td>
            <td align="center"><? $query=mysql_query("select * from expense_fee_deve_state where sht_name = '".$rowdata_re[$i][deve_state]."'");
		while ($row = mysql_fetch_array($query))
		{?> <? echo $row[name];?> <? }?></td>
        <td align="center"><? if($rowdata_re[$i][deve_state]=="BK"){}else{?><a href="cancle.php?nu=<? echo $rowdata_re[$i][nu]?>">�@�o</a> <a href="modify.php?nu=<? echo $rowdata_re[$i][nu]?>">�ק�</a><? }?>
         </td>
          </tr>
          <tr> 
            <td colspan=9 bgcolor="#666666"></td>
          </tr>
          <? }?> 
        </table>       
        <br>
      </td>
    </tr>
    <tr> 
      <td width="550" align="right"><hr align="left" width="95%" noshade></td>
      <td align="right">
	  <? include("inc/query.inc.php")?>
		</td>
    </tr>
  </table>
</form>
<?
}
CloseTable();
echo "<br />";
include_once(XOOPS_ROOT_PATH."/footer.php");
?>
<? mysql_close();?>
