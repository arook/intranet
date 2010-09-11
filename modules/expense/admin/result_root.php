<?include("../setup.inc");
$k=0;
$RE=0;
$BK=0;
$BL=0;
if($st_y && $time_select){
if($count=="+"){
	$end_m=$st_m+$time_select;
	if($end_m>12){
		$end_y=$st_y+1;
		$end_m=str_pad($end_m-12, 2, "0", STR_PAD_LEFT);
		$show_query .="apply_y = '".$st_y."' and apply_m between '".$st_m."' and '12' and ";
		$show_query .="apply_y = '".$end_y."' and apply_m between '01' and '".$end_m."' and ";
	}else{
		$end_y=$st_y;
		$show_query .="apply_m between '".$st_m."' and '".$end_m."' and apply_y = '".$end_y."' and ";
	}
}
if($count=="-"){
	$end_m=$st_m-$time_select;
	if($end_m<0){
		$end_y=$st_y-1;
		$end_m=str_pad(13+$end_m, 2, "0", STR_PAD_LEFT);
		$show_query .="apply_y = '".$end_y."' and apply_m between '".$st_m."' and '12' and ";
		$show_query .="apply_y = '".$st_y."' and apply_m between '".$end_m."' and '12' and ";
	}else{
		$end_y=$st_y;
		$show_query .="apply_m between '".$end_m."' and '".$st_m."' and apply_y = '".$end_y."' and ";
	}

}
}

$show_query="select * from expense where ";
if($frm){$show_query .="apply_form like '%".$frm."%' and ";}
if($apply_type){$show_query .=" apply_form like '__".$apply_type."%' and ";}
if($apply_area){$show_query .="apply_area='".$apply_area."' and ";}
if($deve_state){$show_query .="deve_state='".$deve_state."' and ";}

//if($apply_fee){$show_query .="apply_fee='".$apply_fee."' and";}
//if($apply_fee_item){$show_query .="apply_fee_item='".$apply_fee_item."' and";}
if($st_y){$show_query .="apply_y='".$st_y."' and ";}
if($st_m){$show_query .="apply_m='".$st_m."' and ";}
if($apply_fee_dept){$show_query .="apply_fee_dept='".$apply_fee_dept."' and ";}
//else{$show_query .="apply_fee_name='".$apply_fee_name."' and ";}
if($fee_type!="-"){$show_query .="fee_type='".$fee_type."' and ";}
if($fee_amount_mix && $fee_amount_max){
$show_query .="fee_amount between '".$fee_amount_mix."' and '".$fee_amount_max."' ";
}
$show_query .="nu<>''";
$show_query .=" order by apply_y,apply_m";
//echo $show_query;
$show_re = mysql_query($show_query) or die(mysql_error());
while ($row_re = mysql_fetch_array($show_re)) {
	$rowdata_re[$k++] = $row_re;
}
for ($i=0;$i<count($rowdata_re);$i++) {
if($rowdata_re[$i][deve_state]=="RE"){$RE++;}elseif($rowdata_re[$i][deve_state]=="BL"){$BL++;}elseif($rowdata_re[$i][deve_state]=="BK"){$BK++;}
}
?>
<link href="../style.css" rel="stylesheet" type="text/css">
<a href="../index.htm"><img src="../images/title.gif" width="400" height="35" border="0"></a>
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
<table width="700" border="0" cellspacing="0" cellpadding="0"><form name="form1" method="post" action="../number.htms">
    <tr> 
      <td colspan="2" class="fg1"><strong>以下為符合查詢條件的費用/設備申請項目: 進行中<?echo $BL?>筆；作廢<?echo $RE?>筆；已結案<?echo $BK?>筆</strong></td>
    </tr>
    <tr> 
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2" align="right"> <table width="98%" border="0" cellpadding="2" cellspacing="0" bgcolor="#666666" >
          <tr valign="middle" bgcolor="#cccccc"> 
            <td width="60" height="20">登錄號碼</td>
            <td width="65" height="20" align="center">申請日期 </td>
            <td width="35" height="20" align="center">申請<br>
              地區</td>
            <td width="50" height="20" align="center">申請<br>
              費用</td>
            <td width="70" height="20" align="center">費用細目</td>
            <td width="40" height="20" align="center">產生<br>
              月份</td>
            <td width="60" height="20" align="center">申請部門</td>
            <td width="60" height="20" align="center">申請人</td>
            <td width="30" height="20" align="center">申請幣別</td>
			<td width="30" height="20" align="center">申請金額</td>
            <td width="35" height="20" align="center">供應<br>
              廠商</td>
            <td width="40" height="20" align="center">狀態</td>
            <td width="35" height="20" align="center">編輯</td>
          </tr>
<?for ($i=0;$i<count($rowdata_re);$i++) {
?>
          <tr class="bg5"> 
            <td><?echo $rowdata_re[$i][apply_form]?></td>
            <td align="center"><?echo $rowdata_re[$i][apply_date]?></td>
            <td align="center"><?if($rowdata_re[$i][apply_area]=="T"){echo "台灣";}
		  else if ($rowdata_re[$i][apply_area]=="S"){echo "深圳";}?></td>
            <td align="center"><?$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$rowdata_re[$i][apply_fee]."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[fee_name]?></td>
            <td align="center"><?$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".$rowdata_re[$i][apply_fee]."' and item_nu = '".$rowdata_re[$i][apply_fee_item]."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[item_name]?></td>
            <td align="center"><?echo $rowdata_re[$i][apply_y]?>-<?echo $rowdata_re[$i][apply_m]?></td>
            <td align="center"><?echo $rowdata_re[$i][apply_fee_dept]?></td>
            <td align="center"><?echo $rowdata_re[$i][apply_fee_name]?></td>
            <td align="center"><?echo $rowdata_re[$i][fee_type]?></td>
            <td align="center"><?echo $rowdata_re[$i][fee_amount]?></td>
            <td align="center"><?$pro_sel = mysql_query ("select * from factory_list where factory_code = '".$rowdata_re[$i][factory]."'");
				$row_sel = mysql_fetch_array($pro_sel);
				echo $row_sel[factory_short_name]?><?echo $rowdata_re[$i][factory_other]?></td>
            <td align="center"><?$query=mysql_query("select * from expense_fee_deve_state where sht_name = '".$rowdata_re[$i][deve_state]."'");
		while ($row = mysql_fetch_array($query))
		{?>
		<? echo $row[name];?>
		<?}?></td>
            <td align="center"><?if($rowdata_re[$i][deve_state]=="BK"){}else{?><a href="../cancle.htm">刪</a>/<a href="modify.php?nu=<?echo $rowdata_re[$i][nu]?>">改</a><?}?></td>
          </tr>
          <tr> 
            <td colspan=11 bgcolor="#666666"></td>
          </tr>
<?}?>
        </table>
        
        <br>
      </td>
    </tr>
  </form>  
  </table>

<?mysql_close();?>
