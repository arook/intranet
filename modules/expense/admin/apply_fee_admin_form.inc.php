
<table cellspacing=1 cellpadding=3 style="margin-top: 5pt">
  <tr>
	<td width=100 align="right">�����޲z�H�G</td>
	<td>
<select name="apply_fee_name">
                <option value="-">�п��</option>
				<?$select_user= mysql_query("select uid,uname from xoops_users order by uid");
				while ($row_user = mysql_fetch_array($select_user)) {?> 
        		<option value=<?echo $row_user[uid]?> <?if($row_user[uid]==$row[apply_fee_name]){echo "selected";}?>><?echo $row_user[uname]?></option>
        		<?}?>
              	</select></td>
</tr>
<tr>
	<td width=100 align="right">�����G</td>
	<td><select name="apply_fee_dept">
			  <option value="-">�п��</option>
			  <?$query_dept = mysql_query("select dept_name,dept_head,dept_bot from ozaki_dept order by dept_head,dept_bot");
	while ($row_dept = mysql_fetch_array($query_dept)) {
	$dept_name=$row_dept[dept_name];
	$dept_nu=$row_dept[dept_head].$row_dept[dept_bot];?> 
              <option value=<?echo $dept_nu?> <?if($row[apply_fee_dept]==$dept_name or $row[apply_fee_dept]==$dept_nu){echo " selected";}?>><?echo $dept_name?></option>
        		<?}?>
			  </select></td>
</tr>
<tr>
	<td width=100 align="right">�޲z�v���G</td>
	<td>
<select name="apply_fee_root">
                <option value="-">�п��</option>
				<!--- <option value="1" <?if($row[apply_fee_root]=="1"){echo " selected";}?>>�޲z��</option> --->
				<option value="2" <?if($row[apply_fee_root]=="2"){echo " selected";}?>>�����D��</option>
				<option value="3" <?if($row[apply_fee_root]=="3"){echo " selected";}?>>�]��</option>
				<option value="4" <?if($row[apply_fee_root]=="4"){echo " selected";}?>>¾��</option>
              	</select></td>
</tr>
</table>

	