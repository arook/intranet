<?
include("header.php");
//檢查右區塊是否開啟************************
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
	//取得使用者名稱及群組 id
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
       	alert("請輸入年份！");
		return false;
    } else if(document.form1.apply_m.value=="0") {
       	alert("請輸入月份！");
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
      <td><FONT size=3>您好，歡迎進入費用/設備申請<strong>查詢</strong>作業系統。</FONT> 
        <hr></td>
  </tr>
  <tr>
    <td><img src="images/step1.gif" width="212" height="20"></td>
  </tr>
  <tr>
    <td>
      <table width="92%" border="0" align="right" cellpadding="0" cellspacing="4">
          <tr> 
            <td>申請類別</td>
            <td>
        <input type="radio" name="apply_type" value="A">
        A.一般申請 
        <input type="radio" name="apply_type" value="B">
        B.實物申請 
        <input type="radio" name="apply_type" value="C">
        C. 專案申請 
        <input type="radio" name="apply_type" value="D">
        D.報告申請</td>
          </tr>
		  <tr> 
            <td>申請編號</td>
            <td><input type="text" name="frm" size=25>
            </td>
          </tr>
          <tr>
            <td>申請月份</td>
            <td><select name="apply_dy" id="apply_dy" onchange="apply_dy1(this);">
				<option value="">請選擇</option>
				<?
                for ($i=2004;$i<=2010;$i++) {
				echo "<option value=".$i.">$i</option>";
				}?>
				</select>年
				<select name="apply_dm" id="apply_dm" onchange="apply_dm1(this);">
				<option value="">請選擇</option>
				<?
                for ($i=1;$i<=12;$i++) {
				echo "<option value=".str_pad($i, 2, "0", STR_PAD_LEFT).">".str_pad($i, 2, "0", STR_PAD_LEFT)."</option>";
				}?>				
				</select>月
                </td>
          </tr>
		  <tr> 
            <td>審核意見</td>
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
            <td>申請地區</td>
            <td><input type="radio" name="apply_area" value="T">台灣
                <input type="radio" name="apply_area" value="S">深圳
            </td>
          </tr>
          <tr>
            <td>產生月份</td>
            <td><select name="st_y">
				<option value="">請選擇</option>
				<?
                for ($i=2004;$i<=2010;$i++) {
				echo "<option value=$i>$i</option>";
				}?>
				</select>年
				<select name="st_m">
				<option value="">請選擇</option>
				<?
                for ($i=1;$i<=12;$i++) {
				echo "<option value=".str_pad($i, 2, "0", STR_PAD_LEFT).">".str_pad($i, 2, "0", STR_PAD_LEFT)."</option>";
				}?>				
				</select>月
                </td>
          </tr>
          <tr> 
            <td>申請部門</td>
			<td><select name="apply_fee_depts">
			<option value="">請選擇</option>
			<option value=市場部>市場部</option>
			<option value=內銷組>內銷組</option>
			<option value=外銷組>外銷組</option>
			<option value=企劃部>企劃部</option>
			<option value=產品企劃組>產品企劃組</option>			
			<option value=行銷推廣組>行銷推廣組</option>
			<option value=研究開發組>研究開發組</option>
			<option value=管理部>管理部</option>
			<option value=後勤支援組>後勤支援組</option>
			<option value=財務組>財務組</option>
			<option value=資訊組>資訊組</option>
			<option value=採產部>採產部</option>
			<option value=品保資材組>品保資材組</option>
			<option value=總經理室>總經理室</option>
			<option value=人事組>人事組</option>	
              </select></td>
          </tr>
          <tr> 
            <td>申請人</td>
            <td><input name="apply_fee_name" value="<? //echo $xoopsUser->getVar("uname");?>" readonly type="text" size="12"></td>
              <!--- (3種權限,第1級可查詢所有部門發生的申請,第2級只查詢本部門的申請,第3級只查詢本人的申請.) --->
          </tr>
          <tr> 
            <td>申請金額</td>
            <td><select name="fee_type">
                <option value="-">請選擇</option>
                <? 
                $pro_sel = mysql_query ("select * from expense_fee_dlr ");
				while ($row_sel = mysql_fetch_array($pro_sel)) {?> 
        		<option value="<? echo $row_sel[name_eng]?>"><? echo $row_sel[name_chi]?></option>
        		<?
                }?>
              </select>
              (幣別)/ 
              <input name="fee_amount_mix" type="text" size="8">
              (金額) - 
              <input name="fee_amount_max" type="text" size="8">
              (金額) </td>
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
