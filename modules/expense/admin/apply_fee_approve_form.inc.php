
<table cellspacing=1 cellpadding=3 style="margin-top: 5pt">
  <tr>
          
    <td colspan="2">�z�ثe�d�ݪ��O��/�]�ƥӽеn�����X��: <b><?echo $row[apply_form]?></b></td>
        </tr>
		<tr>
          
    <td width=120 align="right">�f�֤H:</td>
          
    <td>
<input name="approve_person" readonly type="text" value="<?if(!$row[approve_person]){echo $user;}else{echo $row[approve_person];}?>" size="12"></td>
        </tr>
        <tr> 
          
    <td align="right">�f�ַN��:</td>
          
    <td> <?$query=mysql_query("select * from expense_fee_deve_state");
		while ($row_deve_state = mysql_fetch_array($query))
		{?> 
      <input type="radio" name="deve_state" <? if ($row_deve_state[sht_name]==$row[deve_state]) echo checked ?> value='<? echo $row_deve_state[sht_name];?>'>
      <? echo $row_deve_state[name];?> <?}?></td>
        </tr>
        <tr> 
          
    <td align="right">�Ƶ�:</td>
          
    <td>
<textarea name="approve_ps" cols="50" rows="3"><?echo $row[approve_ps]?></textarea>

    </td>
        </tr>
  <tr>
          
    <td colspan="2"><hr></td>
        </tr>
      </table>

<table cellspacing=1 cellpadding=3 style="margin-top: 5pt">
  <tr> 
    <td colspan=2> �O��/�]�ƥӽЪ��p�p�U: </td>
        </tr>
        <tr>
          
    <td width=120 align="right"> �ӽФ��</td>
          
    <td width=220><?echo $row[apply_date]?></td>
        </tr>
        <tr> 
          
    <td align="right">�ӽЦa��</td>
          
    <td><?if($row[apply_area]=="T"){echo "�x�W";}
		  else if ($row[apply_area]=="S"){echo "�`�`";}?></td>
        </tr>
        <tr> 
          
    <td align="right">�ӽжO��</td>
          
    <td> <?$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".substr($row[apply_fee], 0, 4) ."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[fee_name]?></td>
        </tr>
        <tr> 
          
    <td align="right">�O�βӥ�</td>
          
    <td><?$pro_sel = mysql_query ("select * from expense_fee where fee_nu = '".substr($row[apply_fee], 0, 4) ."' and item_nu = '".substr($row[apply_fee], 4, 3) ."'");
	$row_sel = mysql_fetch_array($pro_sel);
	echo $row_sel[item_name]?></td>
        </tr>
        <tr> 
          
    <td align="right">���ͤ��</td>
          
    <td><?echo $row[apply_y]."/".$row[apply_m];?></td>
        </tr>
        <tr> 
          
    <td align="right">�ӽг���</td>
          
    <td><?echo $row[apply_fee_dept]?></td>
        </tr>
        <tr> 
          
    <td align="right">�ӽФH</td>
          
    <td><?echo $row[apply_fee_name]?></td>
        </tr>
        <tr> 
          
    <td align="right">�ӽЪ��B</td>
		  
    <td><?echo $row[fee_type]." $".$row[fee_amount]?></td>
        </tr>
        <tr>
          
    <td align="right">�����t��</td>
          
    <td><?$pro_sel = mysql_query ("select * from factory_list where factory_code = '".$row[factory]."'");
	while ($row_sel = mysql_fetch_array($pro_sel)) {echo $row_sel[factory_short_name];}?><?echo $row[factory_other]?></td>
        </tr>
        <tr> 
          
    <td align="right">�O�θԭz/�Ƶ�</td>
          
    <td><?echo $row[ps]?></td>
        </tr>
		<?if($row[img_name]){?>
		<tr> 
            
    <td align="right">�˪����</td>
            
    <td><a href="../dataimg/<?echo $row[apply_form]."_".$row[img_name];?>">�w��</a></td>
          </tr>
		<?}?>
      </table>