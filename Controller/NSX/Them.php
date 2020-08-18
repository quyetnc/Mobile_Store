<?php
	include_once("Model/NhaSanXuat.php");
	$NhaSanXuat=new NhaSanXuat();
	include_once("View/NSX/Them.php");
		if(isset($_POST['btnSave']))
		{
			include("Model/Upload.php");
			$TenNSX=$_POST["txtTenNSX"];
			if($TenNSX!="")
			{	
				$ret=$NhaSanXuat->InsertNSX($TenNSX);
				if($ret>0)
					echo "<script>window.location ='admin.php?mod=NSX&act=QuanLy'</script>";
				else
					echo "<p class=\"error\">Thêm bị lỗi</p>";
			}
			else
			{
				echo "<p>Vui lòng nhập tên</p>";
			}
		}

?>