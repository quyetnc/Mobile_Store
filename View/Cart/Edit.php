<div class="article" align="center">
<table width="40%" cellspacing="0" cellpadding="0" bordercolordark="#FFFFFF" style="margin:auto; border:1px solid #CCC; font-family:'Segoe UI Light';">
 <tr>
            <td height="35" colspan="2" align="center" class="tieude"><div align="center" style="font-size:18px; font-weight:bolder;background:#00A69B; line-height:35px; color:#FFF">SỬA SỐ LƯỢNG SẢN PHẨM</div></td>
          </tr>
  <tr>
	<form method="post" action="index.php?mod=cart&act=XuLyGioHang&Loai=CapNhat&Ma=<?php echo $id; ?>" class="form" onSubmit="return IsEditCart()">
    <td>
        <label>Số lượng</label><input type="text" name="SoLuong" id="txtQuantity" value="<?php echo $_SESSION['MyCart'][$id]; ?>" >
        </td>
       <td>
        <input type="submit" name="btnSave" id="btnSave" class="button1" value="Lưu thay đổi" />
        </td>
    </form>
   </tr>
    </table>
</div>