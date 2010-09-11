<?include("../setup.inc");
include("../check_root.php");
?>
<SCRIPT LANGUAGE=javascript>
function CheckAction() {
	var count=0;
	
	for (i=0;i<form1.apply_type.length;i++)
  {
    if( form1.apply_type[i].checked == true )
    {count++;}
  }
  //if (count==0){
//	alert("請選擇申請類別！");
//  	return false;
//  }else
	//if(document.form1.fee_amount_mix.value=="") {
    //   	alert("請輸入最小金額數目！");
	//	return false;
    //} else if(document.form1.fee_amount_max.value=="") {
    //   	alert("請輸入最大金額數目！");
	//	return false;
    //} 
	//else if(document.form1.fee_type.value=="-") {
	//	alert("請選擇金額選項！");
	//	return false;
    //}
	
	document.form1.submit();
} 
//-->
</SCRIPT>
<link href="../style.css" rel="stylesheet" type="text/css">
<a href="../index.htm"><img src="../images/title.gif" width="400" height="35" border="0"></a>
<table width="700" border="0" cellspacing="0" cellpadding="0"><form name="form1" method="post" action="result_root.php">
  <tr>
      <td>
        <table width="700" border="0" cellspacing="0" cellpadding="0" >
          <tr> 
            <td height="50" colspan="2"> 
              <p><font 
                        size=3>您好，歡迎進入費用/設備申請<strong>管理</strong>作業系統。</font></p>
            </td>
          </tr>
          <tr> 
            <td height="26" colspan="2"> <? include("menu.inc.php");?></td>
          </tr>
          <tr> 
            <td height="15" colspan="2" align="right"> 
              <hr>
            </td>
          </tr>
        </table>
      </td>
  </tr>
  <tr>
      <td><img src="../images/step1.gif" width="212" height="20"></td>
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
          <!--- <tr> 
            <td width="14%" valign="top">申請日期 </td>
            <td width="86%"><select name="form_y">
				<option value="0">請選擇</option>
				<?for ($i=2004;$i<=2010;$i++) {
				echo "<option value=$i>$i</option>";
				}?>
				</select>年
				<select name="form_m"><?echo ?>
				<option value="0">請選擇</option>
				<?for ($i=1;$i<=12;$i++) {
				echo "<option value=".str_pad($i, 2, "0", STR_PAD_LEFT).">".str_pad($i, 2, "0", STR_PAD_LEFT)."</option>";
				}?>				
				</select>月
				<select name="form_d"><?echo ?>
				<option value="0">請選擇</option>
				<?for ($i=1;$i<=31;$i++) {
				echo "<option value=".str_pad($i, 2, "0", STR_PAD_LEFT).">".str_pad($i, 2, "0", STR_PAD_LEFT)."</option>";
				}?>				
				</select>日 <br>至<br><select name="to_y">
				<option value="0">請選擇</option>
				<?for ($i=2004;$i<=2010;$i++) {
				echo "<option value=$i>$i</option>";
				}?>
				</select>年
				<select name="to_m"><?echo ?>
				<option value="0">請選擇</option>
				<?for ($i=1;$i<=12;$i++) {
				echo "<option value=".str_pad($i, 2, "0", STR_PAD_LEFT).">".str_pad($i, 2, "0", STR_PAD_LEFT)."</option>";
				}?>				
				</select>月
				<select name="to_d"><?echo ?>
				<option value="0">請選擇</option>
				<?for ($i=1;$i<=31;$i++) {
				echo "<option value=".str_pad($i, 2, "0", STR_PAD_LEFT).">".str_pad($i, 2, "0", STR_PAD_LEFT)."</option>";
				}?>				
				</select>日</td>
          </tr> --->
		  <tr> 
            <td>申請編號</td>
            <td><input type="text" name="frm" size=25>
            </td>
          </tr>
		  <tr> 
            <td>審核意見</td>
            <td><?$query=mysql_query("select * from expense_fee_deve_state");
		while ($row_deve_state = mysql_fetch_array($query))
		{?> 
      <input type="radio" name="deve_state" <? if ($row_deve_state[sht_name]==$row[deve_state]) echo checked ?> value='<? echo $row_deve_state[sht_name];?>'>
      <? echo $row_deve_state[name];?> <?}?></td>
          </tr>
          <tr> 
            <td>申請地區</td>
            <td><input type="radio" name="apply_area" value="T">台灣
                <input type="radio" name="apply_area" value="S">深圳
            </td>
          </tr>
          <!--- <tr> 
            <td>申請費用 - 費用細目</td>
            <td><?//include("DC.php");?></td>
          </tr> --->
          <tr>
            <td>產生月份</td>
            <td><select name="st_y">
				<option value="">請選擇</option>
				<?for ($i=2004;$i<=2010;$i++) {
				echo "<option value=$i>$i</option>";
				}?>
				</select>年
				<select name="st_m">
				<option value="">請選擇</option>
				<?for ($i=1;$i<=12;$i++) {
				echo "<option value=".str_pad($i, 2, "0", STR_PAD_LEFT).">".str_pad($i, 2, "0", STR_PAD_LEFT)."</option>";
				}?>				
				</select>月 
				<!--- <input type="radio" name="count" value="-">前<input type="radio" name="count" value="+">後
				<SELECT name=time_select class=SELECT1>
				  <option value="--">請選擇</option>
    		      <option value="1">一個月</option>
    		      <option value="3">三個月</option>
    		      <option value="6">半年</option>
    		      <option value="12">一年</option>
    		    </SELECT> ---></td>
          </tr>
          <tr> 
            <td>申請部門</td>
			<td><select name="apply_fee_dept">
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
            <td><input name="apply_fee_name" value="<?//echo $xoopsUser->getVar("uname");?>" readonly type="text" size="12">
              <!--- (3種權限,第1級可查詢所有部門發生的申請,第2級只查詢本部門的申請,第3級只查詢本人的申請.)</td> --->
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
              <input name="fee_amount_mix" type="text" size="8">
              (金額) - 
              <input name="fee_amount_max" type="text" size="8">
              (金額) </td>
          </tr>
          <!--- <tr> 
            <td>供應廠商</td>
            <td><select name="factory">
                <option value="">請選擇</option>
				<?$pro_sel = mysql_query ("select * from apply_fee_form where type = '3'");
				while ($row_sel = mysql_fetch_array($pro_sel)) {?> 
        		<option value=<?echo $row_sel[nu]?>><?echo $row_sel[name_eng]?></option>
        		<?}?>
              </select>
              其它 
              <input type="text" name="factory_other"></td>
          </tr> --->
        </table>

     </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
      <td><img src="../images/step2.gif" width="212" height="20"><IMG 
                        onclick="return CheckAction()" height=22 hspace=10 
                        src="../images/search.gif" width=51 
                    border=0></td>
  </tr></form>
</table> 
<?mysql_close();?>