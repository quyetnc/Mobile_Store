<?php
	if(isset($_SESSION["MyCart"]) && isset($_GET["id"]) && isset($_GET["quantity"]))
	{
        $id=$_GET["id"];
        $sl=$_GET["quantity"];
        if($sl!=0)
        {
            include_once("Model/Cart.php");
            Cart::UpdateCart($id,$sl);
            header("location:index.php?mod=cart&act=detail&CT=1	");
        }
        else 
        {
            include_once("Model/Cart.php");
            Cart::DeleteCart($id);
            header("location:index.php?mod=cart&act=detail&CT=1	");
        }
	}
?>