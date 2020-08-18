<div>
<table width="100%" cellspacing="0" cellpadding="0" bordercolordark="#FFFFFF" border="1px" style="margin:auto; border:1px solid #CCC; font-family:'Segoe UI Light';">
 <tr>
            <td height="35" colspan="5" align="center" class="tieude"><div align="center" style="font-size:18px; font-weight:bolder;background:#00A69B; line-height:35px; color:#FFF">LỊCH SỬ MUA HÀNG</div></td>
          </tr>
  <tr height="30" bgcolor="#ffcc99">
    <td align="center" width="91" ><strong>Ngày đặt</strong></td>
    <td align="center" width="83" ><strong>Nơi giao</strong></td>
    <td align="center" width="75" ><strong>Tình trạng</strong></td>
    <td align="center" width="51" ><strong>Tổng tiền</strong></td>
     <td align="center" width="53" ><strong>Xem Chi Tiết</strong></td>  
  </tr>  

<?php
foreach($rs as $row)
{
	echo "<tr bgcolor=\"#CCFF00\"><td align=\"center\" >";
	echo $row['NgayDat']."</td><td align=\"center\" >";
	echo $row['NoiGiao']."</td><td align=\"center\" >";
	echo $row['TinhTrang']."</td><td align=\"center\" >";
	echo $row['TongTien']."</td><td align=\"center\" >";
	echo "<a href=\"index.php?mod=Cart&act=ChiTietLichSu&id=$row[MaHD]\"><img src=\"Images/details.png\" /></a></td>";
	echo "</tr>";
}

echo "<tr><td colspan=\"5\" align=\"center\" > Page: ";
for($i=1;$i<=$numpages;$i++)
{	
	echo "<a href=\"index.php?mod=Cart&act=LichSuMuaHang&page=$i\" style=\"color:#C03\"><strong>$i</strong></a> ";
}
echo "</td></tr>";
?>

</table>
</div>
