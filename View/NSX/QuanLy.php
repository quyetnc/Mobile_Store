
            <div class="card-body">
              <div class="table-responsive">
			  <table class="table table-dark table-hover">
			  <tr height="30" bgcolor="">
    <td align="center" width="76" ><strong>Tên nhà sản xuất</strong></td>
    <td align="center" width="53" ><strong>Xóa</strong></td>    
    <td align="center" width="50"><strong>Sửa</strong></td>
  </tr>  

<?php
foreach($rs as $row)
{
	echo "<tr bgcolor=\"\"><td align=\"center\" >";
	echo $row['TenNSX']."</td><td align=\"center\" >";
	echo "<a href=\"admin.php?mod=NSX&act=Xoa&id=$row[MaNSX]\" onclick=\"return confirm('Bạn có chắc muốn xóa không')\"><img src=\"Images/delete.png\" /></a></td><td align=\"center\" >";
	echo "<a href=\"admin.php?mod=NSX&act=Sua&id=$row[MaNSX]\"><img src=\"Images/edit.png\" /></a></td>";
	echo "</tr>";
}
echo "<tr><td colspan=\"3\" align=\"center\" > Page: ";
for($i=1;$i<=$numpages;$i++)
{	
	echo "<a href=\"admin.php?mod=NSX&act=QuanLy&page=$i\" style=\"color:#C03\"><strong>$i</strong></a> ";
}
echo "</td></tr>";
?>
  </table>
              </div>
            </div>
          </div>

		
  <!-- Page level custom scripts -->
  
