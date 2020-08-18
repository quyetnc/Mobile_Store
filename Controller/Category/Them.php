<?php
	include_once("Model/Category.php");
	$category=new Category();
	include_once("View/Category/Them.php");
		if(isset($_POST['btnSave']))
		{
			include("Model/Upload.php");
			$TenLoai=$_POST["txtTenLoai"];
			if($TenLoai!="")
			{	
				$ret=$category->InsertCategory($TenLoai);
				if($ret>0)
					echo "<script>window.location ='admin.php?mod=Category&act=QuanLy'</script>";
				else
					echo "<p class=\"error\">Thêm bị lỗi</p>";
			}
			else
			{
				echo "<p>Vui lòng nhập tên</p>";
			}
		}

?>