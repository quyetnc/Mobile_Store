<?php
	if(isset($_SESSION["MyCart"]) && isset($_GET["id"]) && isset($_GET["quantity"]))
	{
        $id=$_GET["id"];
        $sl=$_GET["quantity"];
		include_once("Model/Cart.php");
        Cart::UpdateCart($id,$sl);
		header("location:index.php?mod=cart&act=detail&CT=1	");
	}
?>