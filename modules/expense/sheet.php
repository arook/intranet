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
<?include("check_root.php");
if($update=="1"){$update_nn = mysql_query("update expense set approv = '".$approv."' where nu = '".$nn."'");}?>

<?
$show_re=mysql_query("select * from expense where nu = '".$nn."'");
$row_re = mysql_fetch_array($show_re);
$form=$row_re[form_mode];
$comma_form=$row_re[form_info];
$file_type=$row_re[file_type];
?>
<SCRIPT LANGUAGE=javascript>
function CheckAction() {
document.form1.submit();
} 
//-->
</SCRIPT>

<form name="form1" method="post" action="sheet.php">
<input type="hidden" name="nn" value="<?echo $nn?>">
<input type="hidden" name="update" value="1">
<img src="images/title.gif" width="400" height="35"> <br>
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="60"> <p><font size="3">�O��/�]�ƥӽеn�����X��</font><font color="#000000">: 
        <font size="3"><?echo $row_re[apply_form]?></font></font></p>
      </td>
  </tr>
  <tr>
    <td><font 
                        size=3>�O��/�]�ƥӽЪ��p�p�U:</font> </td>
  </tr>
  <tr>
    <td><table width="92%" border="0" align="right" cellpadding="0" cellspacing="4">
        <tr> 
          <td width="14%"> �ӽФ��</td>
          <td width="86%"><?echo $row_re[apply_date]?></td>
        </tr>
        <tr> 
          <td>�ӽЦa��</td>
          <td><?if($row_re[apply_area]=="T"){echo " �x�W";}else if ($row_re[apply_area]=="S"){echo " �`�`";}?>
		  </td>
        </tr>
        <tr> 
          <td>�ӽжO��</td>
          <td><?$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$row_re[apply_fee]."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[fee_name]?></td>
        </tr>
		<tr> 
          <td>�ӽвӥ�</td>
          <td><?$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$row_re[apply_fee]."' and item_nu = '".$row_re[apply_fee_item]."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[item_name]?></td>
        </tr>
        <tr> 
          <td>���ͤ��</td>
          <td><?echo $row_re[apply_y]?>�~ <?echo $row_re[apply_m]?>��</td>
        </tr>
        <tr> 
          <td>�ӽг���</td>
          <td><? echo $row_re[apply_fee_dept]?></td>
        </tr>
        <tr> 
          <td>�ӽФH</td>
          <td><?echo $row_re[apply_fee_name]?></td>
        </tr>
        <tr> 
          <td>�ӽЪ��B</td>
          <td><?if($row_re[fee_type]=="NT"){echo " �x��";}
		  elseif($row_re[fee_type]=="RMB"){echo " �H����";}
		  elseif($row_re[fee_type]=="HKD"){echo " ���";}
		  elseif($row_re[fee_type]=="USD"){echo " ����";}?>
            (���O)/ <?echo $row_re[fee_amount]?>(���B)</td>
        </tr>
        <tr> 
          <td>�����t��</td>
          <td><?$pro_sel = mysql_query ("select * from factory_list ");
				while ($row_sel = mysql_fetch_array($pro_sel)) { 
        		if($row_sel[factory_code]==$row_re[factory]){echo $row_sel[factory_short_name];}
        		}?>
            
            �䥦<?echo $row_re[factory_other]?></td>
        </tr>
		<?INCLUDE("form/$form.inc.php");?>
		<!--- <tr> 
            <td>�˪����</td>
            <td><?if($row_re[img_name]){?><a target="_blank" href="dataimg/<?echo $row_re[img_name];?>"><?echo $row_re[img_name];?></a><?}?></td>
        </tr> --->
		<tr> 
          <td></td>
		  <td><?if($row_re[img_name]){?><a target="_blank" href="dataimg/<?echo $row_re[img_name];?>">�w��</a><?}?></td>
		</tr>
        <tr> 
          <td>�O�θԭz/�Ƶ�</td>
          <td><?echo $row_re[ps]?></td>
        </tr>
        <tr>
		  <td>�D�޽T�{</td>  
          <td><?if($row_re[approv]=="W"){?><select name=approv>
		  <option value="W" <?if($row_re[approv]=="W"){ echo "selected";}?>>���ݽT�{</option>
		  <option value="P" <?if($row_re[approv]=="P"){ echo "selected";}?>>�w�T�{</option>
		  <option value="F" <?if($row_re[approv]=="F"){ echo "selected";}?>>�w����</option>
		  </select><?}elseif($row_re[approv]=="P"){?>�w�T�{
		  <?}elseif($row_re[approv]=="F"){?>�w����<?}?></td>
        </tr>
		<tr>
		  <td>�]�ȼf��</td>  
          <td><?if($row_re[deve_state]=="BL"){?>�f�֤�<?}else if($row_re[deve_state]=="RE") {?>�@�o<?}else if($row_re[deve_state]=="GN") {?>�q�L<?}else if($row_re[deve_state]=="BK") {?>�w��<?}?></td>
        </tr>
		<tr>
		  <td></td>
		  <td><?if($row_re[approv]=="W"){?><IMG onclick="return CheckAction()" height=22 hspace=10 src="images/search2.gif" border=0><?}?> <IMG onclick="location.href('result2.php?apply_y=<?echo $row_re[apply_y]?>&apply_m=<?echo $row_re[apply_m]?>&apply_fee_dept=<? echo $row_re[apply_fee_dept]?>');" height=22 hspace=10 src="images/back3.gif" border=0></td>
  </tr> 
      </table></td>
  </tr>
    <tr>
      <td><hr align="left" width="95%" noshade><?include("inc/query.inc.php")?></td>
  </tr>

</table>
</FORM>
<?
}
CloseTable();
echo "<br />";
include_once(XOOPS_ROOT_PATH."/footer.php");
?>
<?mysql_close();?>
