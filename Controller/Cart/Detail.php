<?php

	include_once ("Model/Product.php");
	$pro = new Product();
	$newproducts = $pro->GetProductsManage();
	if(isset($_SESSION['MyCart']))	
		include_once ("View/Cart/Detail.php");
	// else
	// 	include_once("View/Cart/Cartempty.php");

?> 

