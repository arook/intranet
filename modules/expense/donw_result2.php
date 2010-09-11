<?
$Connect = @mysql_connect("localhost", "root", "ck5j3d") or die("Couldn't connect.");
$ALT_Db = @mysql_select_db("intranet", $Connect) or die("Couldn't select database");
mysql_query("Set Names 'big5'");
//$result = @mysql_query($sql,$Connect) or die(mysql_error());
//include("check_root.php");
$savename = date("YmjHis");
$file_type = "vnd.ms-excel";
$file_ending = "xls";
header("Content-Type: application/$file_type;charset=big5");
header("Content-Disposition: attachment; filename=".$savename.".$file_ending");
//$now_date = date("Y-m-j H:i:s");
$k=0;
$RE=0;
$BK=0;
$GN=0;
$BL=0;

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
$show_re = mysql_query($show_query) or die(mysql_error());
while ($row_re = mysql_fetch_array($show_re)) {
	$rowdata_re[$k++] = $row_re;
}
for ($i=0;$i<count($rowdata_re);$i++) {
	if($rowdata_re[$i][deve_state]=="RE"){$RE++;}elseif($rowdata_re[$i][deve_state]=="BL"){$BL++;}elseif($rowdata_re[$i][deve_state]=="BK"){$BK++;}elseif($rowdata_re[$i][deve_state]=="GN"){$GN++;}
}
?>
  <table width="700" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td width="550" class="fg1"><strong>以下為符合查詢條件的費用/設備申請項目: 審核中<? echo $BL?>筆；通過<? echo $GN?>筆；作廢<? echo $RE?>筆；已領<? echo $BK?>筆</strong></td>
    </tr>
    <tr> 
      <td align="right"> 
        <table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#999999">
          <tr valign="middle" bgcolor="#cccccc"> 
            <td width="54" height="20">登錄號碼</td>
            <td width="63" height="20" align="center">申請日期</td>
            <td width="43" height="20" align="center">申請<br>
              地區</td>
            <td width="50" height="20" align="center">申請費用</td>
            <td width="70" height="20" align="center">費用細目</td>
            <!--<td width="40" height="20" align="center">產生<br>
              月份</td>-->
            <td width="60" height="20" align="center">申請部門</td>
            <td width="60" height="20" align="center">申請人</td>
            <td width="30" height="20" align="center">申請金額</td>
            <td width="30" align="center">幣別</td>
            <td width="35" height="20" align="center">供應廠商</td>
            <td width="45" height="20" align="center">主管確認</td>
            <td width="58" height="20" align="center">狀態</td>
            <td width="58" align="center">備註</td>
          </tr>
          <? for ($i=0;$i<count($rowdata_re);$i++) {
?> 
          <tr class="bg5"> 
            <td><? echo $rowdata_re[$i][apply_form]?><? if($rowdata_re[$i][apply_change]>0){echo "_".$rowdata_re[$i][apply_change];}?></td>
            <td align="center"><? echo $rowdata_re[$i][apply_date]?></td>
            <td align="center"><? if($rowdata_re[$i][apply_area]=="T"){echo "台灣";}
		  else if ($rowdata_re[$i][apply_area]=="S"){echo "深圳";}?></td>
            <td align="center"><? $pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$rowdata_re[$i][apply_fee]."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[fee_name]?></td>
            <td align="center"><? $pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$rowdata_re[$i][apply_fee]."' and item_nu = '".$rowdata_re[$i][apply_fee_item]."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[item_name]?></td>
            <!--<td align="center"><? echo $rowdata_re[$i][apply_y]?>-<? echo $rowdata_re[$i][apply_m]?></td>-->
            <td align="center"><? echo $rowdata_re[$i][apply_fee_dept]?></td>
            <td align="center"><? echo $rowdata_re[$i][apply_fee_name]?></td>
            <td align="center"><? echo $rowdata_re[$i][fee_amount]?></td>
            <td align="center"><? $Currency_sql = mysql_query ("select * from expense_fee_dlr where name_eng = '".$rowdata_re[$i][fee_type]."'");
			$Currency_res = mysql_fetch_array($Currency_sql);
			echo $Currency_res[name_chi]?></td>
            <td align="center"><? $pro_sel = mysql_query ("select * from factory_list where factory_code = '".$rowdata_re[$i][factory]."'");
				$row_sel = mysql_fetch_array($pro_sel);
				echo $row_sel[factory_short_name]?><? echo $rowdata_re[$i][factory_other]?></td>
            <td align="center"><? if($rowdata_re[$i][approv]=="W"){?>等待確認<? }?>
		  <? if($rowdata_re[$i][approv]=="P"){?>已確認<? }?>
		  <? if($rowdata_re[$i][approv]=="F"){?>已取消<? }?></td>
            <td align="center"><? $query=mysql_query("select * from expense_fee_deve_state where sht_name = '".$rowdata_re[$i][deve_state]."'");
		while ($row = mysql_fetch_array($query))
		{?> <? echo $row[name];?> <? }?></td>
            <td align="center"><? echo $rowdata_re[$i][ps]?></td>
          </tr>
          <? }?> 
      </table></td>
    </tr>
  </table>
<?
mysql_close();
?>
