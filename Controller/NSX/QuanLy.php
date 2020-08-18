<?php
	include_once("Model/NhaSanXuat.php");
	$NhaSanXuat = new NhaSanXuat();
	$SoDongHienThi = 10;
	if(isset($_GET['page']))
		$Trang = $_GET['page'];
	else
		$Trang=1;
	$rs=$NhaSanXuat->GetListNSX($SoDongHienThi*($Trang-1),$SoDongHienThi);
	$numrows=$NhaSanXuat->CountNSX();
	if($numrows%$SoDongHienThi==0)
		$numpages=$numrows/$SoDongHienThi;
	else
		$numpages=($numrows/$SoDongHienThi)+1;
	include_once("View/NSX/QuanLy.php");
?>