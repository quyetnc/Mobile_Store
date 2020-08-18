<?php
	include_once("Model/NhaSanXuat.php");
	$NhaSanXuat = new NhaSanXuat();
	if(isset($_GET['id']))
	{
		$MaNSX = $_GET['id'];
		$row = $NhaSanXuat->GetNSXByID($MaNSX);
		include_once("View/NSX/Sua.php");
		if(isset($_POST['btnChange']))
		{
			$TenNSX=$_POST["txtTenNSX"];
			$ret=$NhaSanXuat->UpdateNSX($MaNSX,$TenNSX);
			if($ret>0)
			{
				echo "<script>window.location ='admin.php?mod=NSX&act=QuanLy'</script>";
			}
			else
				echo "<p class=\"error\">Lỗi</p>";
			
		}
	}
?>
