<div class="content-right">
<table width="100%" cellspacing="0" cellpadding="0" bordercolordark="" border="1px" style="margin:auto; border:1px solid #CCC; font-family:'Segoe UI Light';">
 <tr>
            <td height="35" colspan="5" align="center" class="tieude"><div align="center" style="font-size:18px; font-weight:bolder;background:#00A69B; line-height:35px; color:#FFF">CHI TIẾT ĐƠN HÀNG</div></td>
          </tr>
  <tr height="30" bgcolor="">
    <td align="center" width="76"><strong>Tên SP</strong></td>
    <td align="center" width="83" ><strong>Đơn giá</strong></td>
    <td align="center" width="91" ><strong>Số lượng</strong></td>
    <td align="center" width="91" ><strong>Tổng</strong></td>
  </tr>  

<?php
foreach($rs as $row)
{
	echo "<tr\"><td align=\"center\" >";
	echo $row['TenSP']."</td><td align=\"center\" >";
	echo $row['DonGia']."</td><td align=\"center\" >";
	echo $row['SoLuong']."</td><td align=\"center\" >";
	echo ($row['DonGia']*$row['SoLuong'])."</td>";
	echo "</tr>";
}

echo "<tr><td colspan=\"4\" align=\"center\" > Page: ";
for($i=1;$i<=$numpages;$i++)
{	
	echo "<a href=\"admin.php?mod=Cart&act=ChiTietLichSu&id=$row[MaHD]&page=$i\" style=\"color:#C03\"><strong>$i</strong></a> ";
}
echo "</td></tr>";
?>

</table>
</div>
