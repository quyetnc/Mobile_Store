<?php
	include_once("Model/Order.php");
	$Order = new Order();
	$SoDongHienThi = 10;
	if(isset($_SESSION['MaKH']))
	{
		$MaKH=$_SESSION['MaKH'];
		if(isset($_GET['page']))
			$Trang = $_GET['page'];
		else
			$Trang=1;
		$rs=$Order->GetOrdersSelledByUserID($MaKH,$SoDongHienThi*($Trang-1),$SoDongHienThi);
		$numrows=$Order->CountOrderByUserID($MaKH);
		if($numrows%$SoDongHienThi==0)
			$numpages=$numrows/$SoDongHienThi;
		else
			$numpages=($numrows/$SoDongHienThi)+1;
	}
	
?>