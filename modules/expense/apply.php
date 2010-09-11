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
//echo $query."<BR>";
$result=$xoopsDB->query($query,0);
if($xoopsDB->getRowsNum($result)!=0){
	$rs=$xoopsDB->fetchArray($result);
?>
<SCRIPT LANGUAGE=javascript>
function CheckAction() {
    if (document.form1.apply_fee.value=="-") {
		alert("請選擇申請費用！");
		return false;
    //} else if (document.form1.apply_fee_item.value=="-") {
	//	alert("請選擇費用細目！");
	//	return false;
    } else if(document.form1.apply_y.value=="-") {
		alert("請選擇產生年份！");
		return false;
    } else if(document.form1.apply_m.value=="-") {
		alert("請選擇產生月份！");
		return false;
    } else if(document.form1.apply_fee_dept.value=="-") {
		alert("請選擇申請部門！");
		return false;
    } else if(document.form1.fee_type.value=="-") {
		alert("請選擇申請金額選項！");
		return false;
    } else if(document.form1.fee_amount.value=="") {
       	alert("請輸入申請金額數目！");
		return false;
    } else if(document.form1.apply_area.value=="-") {
		alert("請選擇申請地區！");
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
                        size=3>您好，歡迎進入費用/設備申請登錄作業系統，請填寫以下欄位資料。</FONT> 
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
            <td width="14%"> 申請日期</td>
            <td width="86%"><input name="apply_date" type="text" value="<?echo date(Y);?>-<?echo date(m);?>-<?echo date(d);?>" size="12">
              (自動填寫)</td>
          </tr>
          <tr> 
            <td>申請地區</td>
            <td><select name="apply_area">
                <option value="-">請選擇</option>
				<option value="T">台灣</option>
				<option value="S">深圳</option>
            	</select>
			</td>
          </tr>
          <tr> 
            <td>申請費用<br>費用細目</td>
            <td><select name="apply_fee">
			<option value="-">請選擇</option>
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
            <td>產生月份</td>
            <td><select name="apply_y">
				<option value="-">請選擇</option>
				<?for ($i=2004;$i<=2010;$i++) {
				echo "<option value=$i>$i</option>";
				}?>
				</select>年
				<select name="apply_m">
				<option value="-">請選擇</option>
				<?for ($i=1;$i<=12;$i++) {
				echo "<option value=".str_pad($i, 2, "0", STR_PAD_LEFT).">".str_pad($i, 2, "0", STR_PAD_LEFT)."</option>";
				}?>				
				</select>月
			</td>
          </tr>
          <tr> 
            <td height="28">申請部門</td>
            <td><select name="apply_dept">
				<option value="-">請選擇</option>
				<option value="總管理處">總管理處</option>
				<option value="採購處">採購處</option>
        		<option value="市場處">市場處</option>
       			<option value="來源處">來源處</option>
				</select>(處)
				<select name="apply_dept_ext">
				<option value="--">請選擇</option>
          		<option value="來源課">來源課</option>
				<option value="設計課">設計課</option>
          		<option value="研發課">研發課</option>
		  		<option value="行銷活動課">行銷活動課</option>
          		<option value="後勤課">後勤課</option>
          		<option value="國際市場課">國際市場課</option>
       		   	<option value="經銷通路課">經銷通路課</option>
				<option value="直營連鎖課">直營連鎖課</option>
				<option value="專案通路課">專案通路課</option>
				<option value="開發一課">開發一課</option>
		  		<option value="開發二課">開發二課</option>
				<option value="採購課">採購課</option>
		  		<option value="工程品管課">工程品管課</option>
		  		<option value="財務會計課">財務會計課</option>
		  		<option value="人事總務課">人事總務課</option>		
				</select>(課)
				</td>
          </tr>
          <tr> 
            <td>申請人</td>
            <td><input name="apply_fee_name" value="<?echo $xoopsUser->getVar("uname");?>" readonly type="text" size="12"></td>
          </tr>
		  <tr> 
            <td>費用歸屬部門</td>
            <td>
			<select name="apply_fee_dept">
			<option value="--">請選擇</option>
			<option value="總管理處">總管理處</option>
			<option value="採購處">採購處</option>
        	<option value="市場處">市場處</option>
       		<option value="來源處">來源處</option>
			</select>(處)
			<select name="apply_fee_dept_ext">
			<option value="--">請選擇</option>
			<option value="來源課">來源課</option>
			<option value="設計課">設計課</option>
          	<option value="研發課">研發課</option>
		  	<option value="行銷活動課">行銷活動課</option>
          	<option value="後勤課">後勤課</option>
          	<option value="國際市場課">國際市場課</option>
       	   	<option value="經銷通路課">經銷通路課</option>
			<option value="直營連鎖課">直營連鎖課</option>
			<option value="專案通路課">專案通路課</option>
			<option value="開發一課">開發一課</option>
		  	<option value="開發二課">開發二課</option>
			<option value="採購課">採購課</option>
		  	<option value="工程品管課">工程品管課</option>
		  	<option value="財務會計課">財務會計課</option>
		  	<option value="人事總務課">人事總務課</option>	
			</select>(課)
			</td>
          </tr>
          <tr> 
            <td>申請金額</td>
            <td><select name="fee_type">
				<option value="-">請選擇</option>
                <?$pro_sel = mysql_query ("select * from expense_fee_dlr ");
				while ($row_sel = mysql_fetch_array($pro_sel)) {?> 
        		<option value=<?echo $row_sel[name_eng]?>><?echo $row_sel[name_chi]?></option>
        		<?}?>
              </select>
              (幣別)/ 
              <input name="fee_amount" type="text" size="8">
              (金額)</td>
          </tr>
          <tr> 
            <td>供應廠商</td>
            <td><select name="factory">
                <option value="-">請選擇</option>
				<?$pro_sel = mysql_query ("select * from factory_list ");
				while ($row_sel = mysql_fetch_array($pro_sel)) {?> 
        		<option value=<?echo $row_sel[factory_code]?>><?echo $row_sel[factory_short_name]?></option>
        		<?}?>
              </select>
              其它 
              <input type="text" name="factory_other"></td>
          </tr>
<?//交通費
INCLUDE("form/$form.inc.php");?>

		  <!--- <tr> 
            <td>檢附文件</td>
            <td><input type="file" name="img" size="35"><input type="checkbox" name="file_type[]" value="發票">發票<input type="checkbox" name="file_type[]" value="委託單">委託單<input type="checkbox" name="file_type[]" value="報價單">報價單<input type="checkbox" name="file_type[]" value="其他">其他</td>
          </tr> --->
          <tr> 
            <td>費用詳述/備註</td>
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