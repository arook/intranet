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
$result=$xoopsDB->query($query,0);
if($xoopsDB->getRowsNum($result)!=0){
	$rs=$xoopsDB->fetchArray($result);

include("check_root.php");

?>
<SCRIPT LANGUAGE=javascript>
function CheckAction() {
if(document.form1.apply_y.value=="0") {
       	alert("�п�J�~���I");
		return false;
    } else if(document.form1.apply_m.value=="0") {
       	alert("�п�J����I");
		return false;
    }	
	document.form1.submit();
}
//-->
</SCRIPT>
<a href="index.php"><img src="images/title.gif" width="400" height="35" border="0"></a> <br>
<form name="form1" method="post" action="result2.php">
<!--input type="hidden" name="apply_fee_dept" value="<? echo $apply_fee_dept?>"-->
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
      <td><FONT size=3>�z�n�A�w��i�J�O��/�]�ƥӽ�<strong>�d��</strong>�@�~�t�ΡC</FONT> 
        <hr></td>
  </tr>
  <tr>
    <td><img src="images/step1.gif" width="212" height="20"></td>
  </tr>
  <tr>
    <td>
      <table width="92%" border="0" align="right" cellpadding="0" cellspacing="4">
          <tr> 
            <td>�ӽ����O</td>
            <td>
        <input type="radio" name="apply_type" value="A">
        A.�@��ӽ� 
        <input type="radio" name="apply_type" value="B">
        B.�ꪫ�ӽ� 
        <input type="radio" name="apply_type" value="C">
        C. �M�ץӽ� 
        <input type="radio" name="apply_type" value="D">
        D.���i�ӽ�</td>
          </tr>
		  <tr> 
            <td>�ӽнs��</td>
            <td><input type="text" name="frm" size=25>
            </td>
          </tr>
          <tr>
            <td>�ӽФ��</td>
            <td><select name="apply_dy" id="apply_dy" onchange="apply_dy1(this);">
				<option value="">�п��</option>
				<?
                for ($i=2004;$i<=2010;$i++) {
				echo "<option value=".$i.">$i</option>";
				}?>
				</select>�~
				<select name="apply_dm" id="apply_dm" onchange="apply_dm1(this);">
				<option value="">�п��</option>
				<?
                for ($i=1;$i<=12;$i++) {
				echo "<option value=".str_pad($i, 2, "0", STR_PAD_LEFT).">".str_pad($i, 2, "0", STR_PAD_LEFT)."</option>";
				}?>				
				</select>��
                </td>
          </tr>
		  <tr> 
            <td>�f�ַN��</td>
            <td>
			<?
            $query=mysql_query("select * from expense_fee_deve_state");
			while ($row_deve_state = mysql_fetch_array($query)){
			?>
            <input type="radio" name="deve_state" <? if ($row_deve_state[sht_name]==$row[deve_state]) echo checked ?> value='<? echo $row_deve_state[sht_name];?>'> <? echo $row_deve_state[name];
			}?>
            </td>
          </tr>
          <tr> 
            <td>�ӽЦa��</td>
            <td><input type="radio" name="apply_area" value="T">�x�W
                <input type="radio" name="apply_area" value="S">�`�`
            </td>
          </tr>
          <tr>
            <td>���ͤ��</td>
            <td><select name="st_y">
				<option value="">�п��</option>
				<?
                for ($i=2004;$i<=2010;$i++) {
				echo "<option value=$i>$i</option>";
				}?>
				</select>�~
				<select name="st_m">
				<option value="">�п��</option>
				<?
                for ($i=1;$i<=12;$i++) {
				echo "<option value=".str_pad($i, 2, "0", STR_PAD_LEFT).">".str_pad($i, 2, "0", STR_PAD_LEFT)."</option>";
				}?>				
				</select>��
                </td>
          </tr>
          <tr> 
            <td>�ӽг���</td>
			<td><select name="apply_fee_depts">
			<option value="">�п��</option>
			<option value=������>������</option>
			<option value=���P��>���P��</option>
			<option value=�~�P��>�~�P��</option>
			<option value=������>������</option>
			<option value=���~������>���~������</option>			
			<option value=��P���s��>��P���s��</option>
			<option value=��s�}�o��>��s�}�o��</option>
			<option value=�޲z��>�޲z��</option>
			<option value=��Ԥ䴩��>��Ԥ䴩��</option>
			<option value=�]�Ȳ�>�]�Ȳ�</option>
			<option value=��T��>��T��</option>
			<option value=�Ĳ���>�Ĳ���</option>
			<option value=�~�O�����>�~�O�����</option>
			<option value=�`�g�z��>�`�g�z��</option>
			<option value=�H�Ʋ�>�H�Ʋ�</option>	
              </select></td>
          </tr>
          <tr> 
            <td>�ӽФH</td>
            <td><input name="apply_fee_name" value="<? //echo $xoopsUser->getVar("uname");?>" readonly type="text" size="12"></td>
              <!--- (3���v��,��1�ťi�d�ߩҦ������o�ͪ��ӽ�,��2�ťu�d�ߥ��������ӽ�,��3�ťu�d�ߥ��H���ӽ�.) --->
          </tr>
          <tr> 
            <td>�ӽЪ��B</td>
            <td><select name="fee_type">
                <option value="-">�п��</option>
                <? 
                $pro_sel = mysql_query ("select * from expense_fee_dlr ");
				while ($row_sel = mysql_fetch_array($pro_sel)) {?> 
        		<option value="<? echo $row_sel[name_eng]?>"><? echo $row_sel[name_chi]?></option>
        		<?
                }?>
              </select>
              (���O)/ 
              <input name="fee_amount_mix" type="text" size="8">
              (���B) - 
              <input name="fee_amount_max" type="text" size="8">
              (���B) </td>
          </tr>
        </table>
     </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td><img src="images/step2.gif" width="212" height="20"><!--IMG onclick="return CheckAction()" height=22 hspace=10 src="images/search.gif" width=51 border=0--> <input name="image" type="image" src="images/search.gif"> </td>
  </tr>
  <tr>
      <td><hr align="left" width="95%" noshade><? include("inc/query.inc.php")?></td>
  </tr>
</table> </form>
<SCRIPT LANGUAGE=javascript>
function apply_dy1(o){
	document.getElementById('apply_dm').selectedIndex = 01;
}
function apply_dm1(j){
	apply_dy = document.getElementById('apply_dy').selectedIndex;
	if(apply_dy<=0){
		document.getElementById('apply_dy').value = 2004;
	}
}
//-->
</SCRIPT>
<?
}
CloseTable();
echo "<br />";
include_once(XOOPS_ROOT_PATH."/footer.php");
?>
<? mysql_close();?>
