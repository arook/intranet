<table width="180" border="0" cellpadding="2" cellspacing="1" bgcolor="#FFFFFF">
          <tr bgcolor="#666666"> 
            <td align="center"> <a href="selection.php"><font color="#FFFFFF">登錄</font></a></td>
            <td align="center"> <a href="query.php"><font color="#FFFFFF">查詢</font></a></td>
			<?if($apply_fee_root=="1" OR $apply_fee_root=="2"){?><td align="center"> <a href="query2.php"><font color="#FFFFFF">高階查詢</font></a></td><?}?>
			<?if($apply_fee_root=="1" OR $apply_fee_root=="3"){?><td align="center"> <a href="admin/apply_fee.php"><font color="#FFFFFF">管理</font></a></td><?}?>
          </tr>
        </table>