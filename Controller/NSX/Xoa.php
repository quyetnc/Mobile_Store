<?php
	include_once("Model/NhaSanXuat.php");
	$NhaSanXuat = new NhaSanXuat();
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$rs = $NhaSanXuat->DeleteNSX($id);
		if($rs>0)
			{
				echo "<script>window.location ='admin.php?mod=NSX&act=QuanLy'</script>";
			}
			else
				echo "<p style= 'text-align : center' >Nhà Sản Xuất Mã ".$_GET['id']." Không Thể Xóa Vì Còn Có Các Sản Phẩm Trong Hệ Thống\"</p>
					
					<a style= 'margin-left : 38%' href ='admin.php?mod=NSX&act=QuanLy' class=\"btn btn-secondary\">Nhấn Để Quay Về Trang Trước</a>";
					
	}
?>