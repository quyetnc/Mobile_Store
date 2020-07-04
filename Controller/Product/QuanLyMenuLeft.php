<?php
	include_once("Model/Product.php");
	$Product = new Product();
	$SoDongHienThi = 6;
	if(isset($_GET['page']))
		$Trang = $_GET['page'];
	else
		$Trang=1;
	if(isset($_GET['idCate']))
	{
		$MaLoai = $_GET['idCate'];
		if(isset($_GET['idNSX']))
		{
			$MaNSX = $_GET['idNSX'];		
			$rs=$Product->GetProductByCateAndNSX($MaLoai,$MaNSX,$SoDongHienThi*($Trang-1),$SoDongHienThi);
			$numrows=$Product->CountProductByCateAndNSX($MaLoai,$MaNSX);
		}
		else
		{
			$rs=$Product->GetProductByCategory($MaLoai,$SoDongHienThi*($Trang-1),$SoDongHienThi);
			$numrows=$Product->CountProductByCategory($MaLoai);			
		}
	}
	else
	{		
		$rs=$Product->GetProducts($SoDongHienThi*($Trang-1),$SoDongHienThi);
		$numrows=$Product->CountProduct();
	}
	if($numrows%$SoDongHienThi==0)
				$numpages=$numrows/$SoDongHienThi;
			else
				$numpages=($numrows/$SoDongHienThi)+1;
	include_once("Model/NhaSanXuat.php");
	$NhaSanXuat=new NhaSanXuat();
	$nsx = $NhaSanXuat->GetNSX();
	include_once("Model/Category.php");
	$Category=new Category();
	$cate = $Category->GetCategories();
	include_once("View/Product/MenuLeft.php");

?>