<?include("../setup.inc");
$k=0;
$RE=0;
$BK=0;
$BL=0;
$show_query="select * from expense where ";
if($apply_area){$show_query .="apply_area='".$apply_area."' and ";}
if($deve_state){$show_query .="deve_state='".$deve_state."' and ";}
//if($apply_fee){$show_query .="apply_fee='".$apply_fee."' and";}
//if($apply_fee_item){$show_query .="apply_fee_item='".$apply_fee_item."' and";}
if($apply_y){$show_query .="apply_y='".$apply_y."' and ";}
if($apply_m){$show_query .="apply_m='".$apply_m."' and ";}
if($apply_fee_dept){$show_query .="apply_fee_dept='".$apply_fee_dept."' and ";}
//else{$show_query .="apply_fee_name='".$apply_fee_name."' and ";}
$show_query .="fee_type='".$fee_type."' and fee_amount between '".$fee_amount_mix."' and '".$fee_amount_max."' ";
//echo $show_query;
$show_re = mysql_query($show_query) or die(mysql_error());
while ($row_re = mysql_fetch_array($show_re)) {
	$rowdata_re[$k++] = $row_re;
}
for ($i=0;$i<count($rowdata_re);$i++) {
if($rowdata_re[$i][deve_state]=="RE"){$RE++;}elseif($rowdata_re[$i][deve_state]=="BL"){$BL++;}elseif($rowdata_re[$i][deve_state]=="BK"){$BK++;}
}
?>
<img src="images/title.gif" width="400" height="35"> <br>
<form name="form1" method="post" action="number.htms">
  <table width="700" border="0" cellspacing="0" cellpadding="0">
    <tr> 
      <td colspan="2"><FONT 
                        size=3>�z�n�A�w��i�J�O��/�]�ƥӽеn���@�~�t�ΡC</FONT> <hr></td>
    </tr>
    <tr> 
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2" class="fg1"><strong>�H�U���ŦX�d�߱��󪺶O��/�]�ƥӽж���: �i�椤<?echo $BL?>���F�@�o<?echo $RE?>���F�w����<?echo $BK?>��</strong></td>
    </tr>
    <tr> 
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2" align="right"> <table width="98%" border="0" cellpadding="2" cellspacing="0" bgcolor="#666666" >
          <tr valign="middle" bgcolor="#cccccc"> 
            <td width="60" height="20">�n�����X</td>
            <td width="65" height="20" align="center">�ӽФ�� </td>
            <td width="35" height="20" align="center">�ӽ�<br>
              �a��</td>
            <td width="50" height="20" align="center">�ӽ�<br>
              �O��</td>
            <td width="70" height="20" align="center">�O�βӥ�</td>
            <td width="40" height="20" align="center">����<br>
              ���</td>
            <td width="60" height="20" align="center">�ӽг���</td>
            <td width="60" height="20" align="center">�ӽФH</td>
            <td width="30" height="20" align="center">�ӽй��O</td>
			<td width="30" height="20" align="center">�ӽЪ��B</td>
            <td width="35" height="20" align="center">����<br>
              �t��</td>
            <td width="40" height="20" align="center">���A</td>
            <td width="35" height="20" align="center">�s��</td>
          </tr>
<?for ($i=0;$i<count($rowdata_re);$i++) {
?>
          <tr class="bg5"> 
            <td><?echo $rowdata_re[$i][apply_form]?></td>
            <td align="center"><?echo $rowdata_re[$i][apply_date]?></td>
            <td align="center"><?if($rowdata_re[$i][apply_area]=="T"){echo "�x�W";}
		  else if ($rowdata_re[$i][apply_area]=="S"){echo "�`�`";}?></td>
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
            <td align="center"><?echo $rowdata_re[$i][fee_amount]?> </td>
            <td align="center"><?echo $rowdata_re[$i][factory]?><?echo $rowdata_re[$i][factory_other]?></td>
            <td align="center"><?$query=mysql_query("select * from expense_fee_deve_state where sht_name = '".$rowdata_re[$i][deve_state]."'");
		while ($row = mysql_fetch_array($query))
		{?>
		<? echo $row[name];?>
		<?}?></td>
            <td align="center"><a href="cancle.htm">�R</a>/<a href="modify.php?nu=<?echo $rowdata_re[$i][nu]?>">��</a></td>
          </tr>
          <tr> 
            <td colspan=11 bgcolor="#666666"></td>
          </tr>
<?}?>
        </table>
        
        <br>
      </td>
    </tr>
    <tr> 
      <td width="550" align="right">
<hr align="left" width="95%" noshade></td>
      <td align="right"><table width="180" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF">
          <tr bgcolor="#666666"> 
            <td align="center"> <a href="apply.php"><font color="#FFFFFF">�n��</font></a></td>
            <td align="center"> <a href="query.php"><font color="#FFFFFF">�d��</font></a></td>
			<?if($apply_fee_root=="2"){?><td align="center"> <a href="query2.php"><font color="#FFFFFF">�����d��</font></a></td><?}?>
			<?if($apply_fee_root=="3"){?><td align="center"> <a href="query_root.php"><font color="#FFFFFF">�i���d��</font></a></td><?}?>			
            <?if($apply_fee_root=="1" OR $apply_fee_root=="3"){?><td align="center"> <a href="admin/apply_fee.php"><font color="#FFFFFF">�޲z</font></a></td><?}?>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
<?mysql_close();?>
