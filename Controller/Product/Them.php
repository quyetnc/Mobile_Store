<?php
	include_once("Model/Product.php");
	$product = new Product();
	include_once("Model/NhaSanXuat.php");
	$NhaSanXuat=new NhaSanXuat();
	$nsx = $NhaSanXuat->GetNSX();
	include_once("Model/Category.php");
	$Category=new Category();
	$cate = $Category->GetCategories();
	include_once("View/Product/Them.php");
		if(isset($_POST['btnSave']))
		{
			include("Model/Upload.php");
			$TenSP=$_POST["txtTenSP"];
			$MaLoai=$_POST["cboLoai"];
			$MaNSX=$_POST["cboNSX"];
			$HDH=$_POST["txtHDH"];
			$ManHinh=$_POST["txtManHinh"];
			$CPU=$_POST["txtCPU"];
			$Ram=$_POST["txtRam"];
			$Pin=$_POST["txtPin"];
			$MoTa=addslashes($_POST['txtMoTa']);
			if(isset($_FILES["txtImageUrl"]))
				$Hinh = Upload::UploadImage("txtImageUrl","hinhsp");
			$GiaBan=$_POST["txtGiaBan"];	
			$GiamGia=$_POST["txtGiamGia"];		
			$SoLuongBan=$_POST["txtSoLuongBan"];
			$New=$_POST["txtNew"];
			if($Hinh!="")
			{	
				if(is_numeric($GiaBan))
				{
					$ret=$product->InsertProduct($MaLoai,$MaNSX,$TenSP,$HDH,$ManHinh,$CPU,$Ram,$Pin,$MoTa,$GiaBan,$SoLuongBan,$New,$GiamGia,$Hinh);
					if($ret>0)
					{
						echo "<script>window.location ='admin.php?mod=Product&act=QuanLy'</script>";
					}
					else
						echo "<p class=\"error\">Thêm bị lỗi</p>";
				}
				else
				{
					echo "<p>Giá không hợp lệ</p>";
				}	
			}
			else
			{
				echo "<p>Vui lòng chọn file ảnh</p>";
			}
			
			
		}
	
?>