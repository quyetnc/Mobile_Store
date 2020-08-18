
            <div class="card-body">
              <div class="table-responsive">
			  <table class="table table-dark table-hover">
       
  <tr height="30" bgcolor="">
    <td colspan="2" class="tieude" align="center" style="font-style:oblique; color:#FFF"><strong>UPDATE THÔNG TIN NHÀ SẢN XUẤT</strong></td>
  </tr>
  <form action="admin.php?mod=NSX&act=Sua&id=<?php echo $MaNSX; ?>" method="post" class="form" enctype="multipart/form-data">
   <tr>
    <td style="padding-left:80px" height="30">Tên nhà sản xuất</td>
    <td><input value="<?php echo $row['TenNSX'];?>" type="text" name="txtTenNSX" id="txtTenNSX"/></td></tr>
  <tr bgcolor="">
  	<td class="ketthuc" colspan="2" height="35" align="center">
    <input class="button" type="submit" name="btnChange" id="btnChange" value="Update" onmouseover="style.background='url(images/button-2-o.gif)'" onmouseout="style.background='url(images/button-o.gif)'">
    </td>
  </tr>
  </table>
              </div>
            </div>
          </div>

		
  <!-- Page level custom scripts -->
  
