<?$k=0;
$select_cty = mysql_query("select cty_c_name,cty_e_name,cty_code from city_list order by nu");
while ($row_cty = mysql_fetch_array($select_cty)) {
	$rowdata_cty[$k++] = $row_cty;
}?>
<?for ($i=0;$i<count($rowdata_cty);$i++) {?>
          <option value="<?echo $rowdata_cty[$i][cty_code]?>"><?echo $rowdata_cty[$i][cty_e_name].",".$rowdata_cty[$i][cty_c_name]?></option>
<?}?>