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
<SCRIPT LANGUAGE=javascript>
function CheckAction() {
    if (document.form1.apply_fee.value=="-") {
		alert("�п�ܥӽжO�ΡI");
		return false;
    //} else if (document.form1.apply_fee_item.value=="-") {
	//	alert("�п�ܶO�βӥءI");
	//	return false;
    } else if(document.form1.apply_y.value=="-") {
		alert("�п�ܲ��ͦ~���I");
		return false;
    } else if(document.form1.apply_m.value=="-") {
		alert("�п�ܲ��ͤ���I");
		return false;
    } else if(document.form1.apply_fee_dept.value=="-") {
		alert("�п�ܥӽг����I");
		return false;
    } else if(document.form1.fee_type.value=="-") {
		alert("�п�ܥӽЪ��B�ﶵ�I");
		return false;
    } else if(document.form1.fee_amount.value=="") {
       	alert("�п�J�ӽЪ��B�ƥءI");
		return false;
    } else if(document.form1.apply_area.value=="-") {
		alert("�п�ܥӽЦa�ϡI");
		return false;
    }
	document.form1.submit();
} 
//-->
</SCRIPT>
<link href="style.css" rel="stylesheet" type="text/css">
<img src="images/title.gif" width="400" height="35"> <br>
<form name="form1" enctype="multipart/form-data" method="post" action="number.php">
<input type="hidden" name="apply_type" value="<?echo $apply_type?>">
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
      <td><FONT 
                        size=3>�z�n�A�w��i�J�O��/�]�ƥӽеn���@�~�t�ΡA�ж�g�H�U����ơC</FONT> 
        <hr>
        <br>
      </td>
  </tr>
  <tr>
    <td><img src="images/step1.gif" width="212" height="20"></td>
  </tr>
  <tr>
    <td> 
      <table width="92%" border="0" align="right" cellpadding="0" cellspacing="4">
          <tr> 
            <td width="14%"> �ӽФ��</td>
            <td width="86%"><input name="apply_date" type="text" value="<?echo date(Y);?>-<?echo date(m);?>-<?echo date(d);?>" size="12">
              (�۰ʶ�g)</td>
          </tr>
          <tr> 
            <td>�ӽЦa��</td>
            <td><select name="apply_area">
                <option value="-">�п��</option>
				<option value="T">�x�W</option>
				<option value="S">�`�`</option>
            	</select>
			</td>
          </tr>
          <tr> 
            <td>�ӽжO��<br>�O�βӥ�</td>
            <td><select name="apply_fee">
			<option value="-">�п��</option>
			<?
				//$query_fee=mysql_query("select a.fee_nu,a.item_nu,a.fee_name,a.item_name from expense_fee a left join expense_fee_type b on a.fee_nu = b.fee_nu where b.fee_sta=1 and a.item_sta=1 order by b.fee_ord , a.item_ord");
			//$query_fee=mysql_query("select a.fee_nu,a.item_nu,a.fee_name,a.item_name from expense_fee a order by a.item_ord");
			$qfee_type = mysql_query("select fee_nu,fee_name from expense_fee_type where fee_sta = 1 order by fee_ord");
			while($fee_type = mysql_fetch_array($qfee_type)){			
				//echo "<optgroup label=\"$fee_type[fee_name]\">";
			
				$qfee = mysql_query("select fee_nu,item_nu,item_name from expense_fee where fee_nu = $fee_type[fee_nu] order by item_ord");
				while($tiem = mysql_fetch_array($qfee)){
					echo "<option value=$tiem[fee_nu]$tiem[item_nu]>$tiem[item_name]</option>";						
				}				
				//echo "</optgroup>";			
			}
			?>
			</select></td>
          </tr>
          <tr> 
            <td>���ͤ��</td>
            <td><select name="apply_y">
				<option value="-">�п��</option>
				<?for ($i=2004;$i<=2010;$i++) {
				echo "<option value=$i>$i</option>";
				}?>
				</select>�~
				<select name="apply_m">
				<option value="-">�п��</option>
				<?for ($i=1;$i<=12;$i++) {
				echo "<option value=".str_pad($i, 2, "0", STR_PAD_LEFT).">".str_pad($i, 2, "0", STR_PAD_LEFT)."</option>";
				}?>				
				</select>��
			</td>
          </tr>
          <tr> 
            <td height="28">�ӽг���</td>
            <td><select name="apply_dept">
				<option value="-">�п��</option>
				<option value="�`�޲z�B">�`�޲z�B</option>
				<option value="���ʳB">���ʳB</option>
        		<option value="�����B">�����B</option>
       			<option value="�ӷ��B">�ӷ��B</option>
				</select>(�B)
				<select name="apply_dept_ext">
				<option value="--">�п��</option>
          		<option value="�ӷ���">�ӷ���</option>
				<option value="�]�p��">�]�p��</option>
          		<option value="��o��">��o��</option>
		  		<option value="��P���ʽ�">��P���ʽ�</option>
          		<option value="��Խ�">��Խ�</option>
          		<option value="��ڥ�����">��ڥ�����</option>
       		   	<option value="�g�P�q����">�g�P�q����</option>
				<option value="����s���">����s���</option>
				<option value="�M�׳q����">�M�׳q����</option>
				<option value="�}�o�@��">�}�o�@��</option>
		  		<option value="�}�o�G��">�}�o�G��</option>
				<option value="���ʽ�">���ʽ�</option>
		  		<option value="�u�{�~�޽�">�u�{�~�޽�</option>
		  		<option value="�]�ȷ|�p��">�]�ȷ|�p��</option>
		  		<option value="�H���`�Ƚ�">�H���`�Ƚ�</option>		
				</select>(��)
				</td>
          </tr>
          <tr> 
            <td>�ӽФH</td>
            <td><input name="apply_fee_name" value="<?echo $xoopsUser->getVar("uname");?>" readonly type="text" size="12"></td>
          </tr>
		  <tr> 
            <td>�O���k�ݳ���</td>
            <td>
			<select name="apply_fee_dept">
			<option value="--">�п��</option>
			<option value="�`�޲z�B">�`�޲z�B</option>
			<option value="���ʳB">���ʳB</option>
        	<option value="�����B">�����B</option>
       		<option value="�ӷ��B">�ӷ��B</option>
			</select>(�B)
			<select name="apply_fee_dept_ext">
			<option value="--">�п��</option>
			<option value="�ӷ���">�ӷ���</option>
			<option value="�]�p��">�]�p��</option>
          	<option value="��o��">��o��</option>
		  	<option value="��P���ʽ�">��P���ʽ�</option>
          	<option value="��Խ�">��Խ�</option>
          	<option value="��ڥ�����">��ڥ�����</option>
       	   	<option value="�g�P�q����">�g�P�q����</option>
			<option value="����s���">����s���</option>
			<option value="�M�׳q����">�M�׳q����</option>
			<option value="�}�o�@��">�}�o�@��</option>
		  	<option value="�}�o�G��">�}�o�G��</option>
			<option value="���ʽ�">���ʽ�</option>
		  	<option value="�u�{�~�޽�">�u�{�~�޽�</option>
		  	<option value="�]�ȷ|�p��">�]�ȷ|�p��</option>
		  	<option value="�H���`�Ƚ�">�H���`�Ƚ�</option>	
			</select>(��)
			</td>
          </tr>
          <tr> 
            <td>�ӽЪ��B</td>
            <td><select name="fee_type">
				<option value="-">�п��</option>
                <?$pro_sel = mysql_query ("select * from expense_fee_dlr ");
				while ($row_sel = mysql_fetch_array($pro_sel)) {?> 
        		<option value=<?echo $row_sel[name_eng]?>><?echo $row_sel[name_chi]?></option>
        		<?}?>
              </select>
              (���O)/ 
              <input name="fee_amount" type="text" size="8">
              (���B)</td>
          </tr>
          <tr> 
            <td>�����t��</td>
            <td><select name="factory">
                <option value="-">�п��</option>
				<?$pro_sel = mysql_query ("select * from factory_list ");
				while ($row_sel = mysql_fetch_array($pro_sel)) {?> 
        		<option value=<?echo $row_sel[factory_code]?>><?echo $row_sel[factory_short_name]?></option>
        		<?}?>
              </select>
              �䥦 
              <input type="text" name="factory_other"></td>
          </tr>
<?//��q�O
INCLUDE("form/$form.inc.php");?>

		  <!--- <tr> 
            <td>�˪����</td>
            <td><input type="file" name="img" size="35"><input type="checkbox" name="file_type[]" value="�o��">�o��<input type="checkbox" name="file_type[]" value="�e�U��">�e�U��<input type="checkbox" name="file_type[]" value="������">������<input type="checkbox" name="file_type[]" value="��L">��L</td>
          </tr> --->
          <tr> 
            <td>�O�θԭz/�Ƶ�</td>
            <td><textarea name="ps" cols="60" rows="3"></textarea></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
          </tr>
        </table>

     </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td><img src="images/step2.gif" width="212" height="20">
	  <img src="images/sent.gif" border="0" onclick="return CheckAction()"> 
      </td>
  </tr>
</table> </form>
<?
}
CloseTable();
echo "<br />";
include_once(XOOPS_ROOT_PATH."/footer.php");
?>
<?mysql_close();?>