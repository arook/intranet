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
<?
$show_re=mysql_query("select * from expense where nu = '".$nu."'");
$row_re = mysql_fetch_array($show_re);
$form=$row_re[form_mode];
$comma_form=$row_re[form_info];
$file_type=$row_re[file_type];
?>

<form name="form1" action="mod_action.php" enctype="multipart/form-data" method="post" onclick="return CheckAction()">
<input type="hidden" name="nu" value="<?echo $row_re[nu]?>">
<input type="hidden" name="form_mode" value="<?echo $row_re[form]?>">
<input type="hidden" name="apply_form" value="<?echo $row_re[apply_form]?>">
<img src="images/title.gif" width="400" height="35"> <br>
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><p><FONT 
                        size=3>您好，歡迎進入費用/設備申請登錄作業系統。</FONT></p>
      <hr></td>
  </tr>
  <tr>
    <td height="60"> <p><font color="#000000" size="3">您目前<font color="#FF0000">修改</font>的費用/設備申請登錄號碼為</font><font color="#000000">: 
        <font size="3"><?echo $row_re[apply_form]?></font></font></p>
      </td>
  </tr>
  <tr>
    <td><font 
                        size=3>費用/設備申請狀況如下:</font> </td>
  </tr>
  <tr>
    <td><table width="92%" border="0" align="right" cellpadding="0" cellspacing="4">
        <tr> 
          <td width="14%"> 申請日期</td><input name="apply_change" type="hidden" value="<?echo $row_re[apply_change]+1;?>" size="12">
          <td width="86%"><input name="apply_date" readonly type="text" value="<?echo $row_re[apply_date]?>" size="12"></td>
        </tr>
        <tr> 
          <td>申請地區</td><input type="hidden" name="apply_area_bat" value="<?echo $row_re[apply_area]?>">
          <td><select name="apply_area">
				<option value="T"<?if($row_re[apply_area]=="T"){echo " selected";}?>>台灣</option>
				<option value="S"<?if ($row_re[apply_area]=="S"){echo " selected";}?>>深圳</option>
            	</select>
		  </td>
        </tr>
        <!--- <tr> 
          <td>申請費用</td><input type="hidden" name="apply_fee_bat" value="<?echo $row_re[apply_fee]?>">
		  <input type="hidden" name="apply_fee_item_bat" value="<?echo $row_re[apply_fee_item]?>">
          <td><?//include("DC_mod.php");?></td>
        </tr> --->
		<tr> 
            <td>申請費用<br>費用細目</td><input type="hidden" name="apply_fee_bat" value="<?echo $row_re[apply_fee]?>">
		  <input type="hidden" name="apply_fee_item_bat" value="<?echo $row_re[apply_fee_item]?>">
            <td><select name="apply_fee">
			<option value="-">請選擇</option>
			<?$query_fee=mysql_query("select fee_nu,item_nu,fee_name,item_name from expense_fee ");
			while ($row_fee = mysql_fetch_object($query_fee)) {
			$nu=$row_fee->fee_nu.$row_fee->item_nu;
			$fee_nu=$row_fee->fee_nu;
			$item_nu=$row_fee->item_nu;
			$ttl_fee_name=$row_fee->fee_name." - ".$row_fee->item_name;?>
			<option value=<?echo $nu?> <?if($fee_nu== $row_re[apply_fee] and $item_nu== $row_re[apply_fee_item]){echo " selected";}?>><?echo $ttl_fee_name?></option>
			<?}?></select></td>
          </tr>
        <tr> 
          <td>產生月份</td><input type="hidden" name="apply_y_bat" value="<?echo $row_re[apply_]?>">
		  <input type="hidden" name="apply_m_bat" value="<?echo $row_re[apply_]?>">
          <td><select name="apply_y">
				<option value="-">請選擇</option>
				<?for ($i=2004;$i<=2010;$i++) {
				echo "<option value=$i ";
				if($i==$row_re[apply_y]){echo " selected";}
				echo ">$i</option>";
				}?>
				</select>年
				<select name="apply_m"><?echo ?>
				<option value="-">請選擇</option>
				<?for ($i=1;$i<=12;$i++) {
				echo "<option value=".str_pad($i, 2, "0", STR_PAD_LEFT)." ";
				if($i==$row_re[apply_m]){echo " selected";}
				echo ">".str_pad($i, 2, "0", STR_PAD_LEFT)."</option>";
				}?>				
				</select>月</td>
        </tr>
        <tr> 
          <td height="28">申請部門</td><input type="hidden" name="apply_dept_bat" value="<?echo $row_re[apply_dept]?>">
          <td><select name="apply_dept">
			  <option value="-">請選擇</option>
			  <?$query_dept = mysql_query("select dept_name,dept_head,dept_bot from ozaki_dept order by dept_head,dept_bot");
	while ($row_dept = mysql_fetch_array($query_dept)) {
	$dept_name=$row_dept[dept_name];
	$dept_nu=$row_dept[dept_head].$row_dept[dept_bot];?> 
              <option value=<?echo $dept_nu?> <?if($row_re[apply_dept]==$dept_name or $row_re[apply_dept]==$dept_nu){echo " selected";}?>><?echo $dept_name?></option>
        		<?}?>
				</select></td>
        </tr>
        <tr> 
          <td>申請人</td>
          <td><input readonly name="apply_fee_name" type="text" value="<?echo $row_re[apply_fee_name]?>" size="12"></td>
        </tr>
        <tr> 
          <td>申請金額</td><input type="hidden" name="fee_type_bat" value="<?echo $row_re[fee_type]?>">
          <td> <select name="fee_type">
              <option value="NT" <?if($row_re[fee_type]=="NT"){echo " selected";}?>>台幣</option>
              <option value="RMB" <?if($row_re[fee_type]=="RMB"){echo " selected";}?>>人民幣</option>
			  <option value="HKD" <?if($row_re[fee_type]=="HKD"){echo " selected";}?>>港幣</option>
			  <option value="USD" <?if($row_re[fee_type]=="USD"){echo " selected";}?>>美金</option>
            </select>
            (幣別)/ <input type="hidden" name="fee_amount_bat" value="<?echo $row_re[fee_amount]?>">
            <input name="fee_amount" type="text" value="<?echo $row_re[fee_amount]?>" size="8">
            (金額)</td>
        </tr>
        <tr> 
          <td>供應廠商</td><input type="hidden" name="factory_bat" value="<?echo $row_re[factory]?>">
          <td><select name="factory">
		  	  <?$pro_sel = mysql_query ("select * from factory_list ");
				while ($row_sel = mysql_fetch_array($pro_sel)) {?> 
        		<option value=<?echo $row_sel[factory_code]?> <?if($row_sel[factory_code]==$row_re[factory]){echo "selected";}?>><?echo $row_sel[factory_short_name]?></option>
        		<?}?>
            </select>
            其它 <input type="hidden" name="factory_other_bat" value="<?echo $row_re[factory_other]?>">
            <input type="text" name="factory_other" value="<?echo $row_re[factory_other]?>"></td>
        </tr>
		<?INCLUDE("form/$form.inc.php");?>
<!--- 		<tr> 
            <td>檢附文件</td>
            <td><input type="file" name="img" size="35"><?if($row_re[img_name]){?><a target="_blank" href="dataimg/<?echo $row_re[img_name];?>">預覽</a><?}?></td>
        </tr> --->
		<tr> 
          <td></td>
		  <td><?if($row_re[img_name]){?><a target="_blank" href="dataimg/<?echo $row_re[img_name];?>">預覽</a><?}?></td>
		</tr>
        <tr> 
          <td>費用詳述/備註</td><input type="hidden" name="ps_bat" value="<?echo $row_re[ps_bat]?>">
          <td><textarea name="ps" cols="60" rows="3"><?echo $row_re[ps]?></textarea></td>
        </tr>
        <tr>
		  <td>主管確認<input type="hidden" name="approv" value="<?if($row_re[approv]=="W"){?>等待確認<?}elseif($row_re[approv]=="P"){?>已確認<?}elseif($row_re[approv]=="F"){?>X<?}?>"></td>
		  <td><?if($row_re[approv]=="W"){?>等待確認<?}elseif($row_re[approv]=="P"){?>已確認<?}elseif($row_re[approv]=="F"){?>X<?}?></td>
        </tr>
		<tr>
		  <td>財務審核<input type="hidden" name="deve_state" value="<?if($row_re[deve_state]=="BL"){?>審核中<?}else if($row_re[deve_state]=="RE") {?>作廢<?}else if($row_re[deve_state]=="GN") {?>通過<?}else if($row_re[deve_state]=="BK") {?>已領<?}?>"></td>
          <td><?$query=mysql_query("select * from expense_fee_deve_state where sht_name = '".$row_re[deve_state]."'");
		while ($row = mysql_fetch_array($query))
		{?>
		<? echo $row[name];?>
		<?}?></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><div align="center"><input type="button" value="返回列表" onclick="location.href('result.php');">　<input type="submit" name="submit" value="修改"></div></td>
  </tr>
</table></form>
<?
}
CloseTable();
echo "<br />";
include_once(XOOPS_ROOT_PATH."/footer.php");
?>
<?mysql_close();?>
