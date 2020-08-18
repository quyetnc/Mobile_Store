<?php
// Product
	include_once("Model/NhaSanXuat.php");
	$NhaSanXuat=new NhaSanXuat();
	$nsx = $NhaSanXuat->GetNSX();
	include_once("Model/Category.php");
	$Category=new Category();
	$cate = $Category->GetCategories();

// Order
	include_once("Model/Order.php");
	$Order = new Order();


	include_once("View/Admin/MenuLeftChungAdmin.php");
?>