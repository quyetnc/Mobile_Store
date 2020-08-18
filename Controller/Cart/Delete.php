<?php
	if(isset($_SESSION["MyCart"]) && isset($_GET["id"]))
	{
		$id=$_GET["id"];
		include_once("Model/Cart.php");
		Cart::DeleteCart($id);
		header("location:index.php?mod=cart&act=detail&CT=1	");
	}
?>