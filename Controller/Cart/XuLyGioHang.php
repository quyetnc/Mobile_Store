<?php
include_once("Model/Product.php");
include_once("Model/Cart.php");
$product = new Product();
if(isset($_SESSION['MyCart']))
{
	
if(isset($_GET['Loai']))
switch($_GET['Loai'])
{
	case "Xem":
		if(count ($_SESSION['MyCart'])!=0)
			include_once("View/Cart/Detail.php");
		else
			echo "Chưa có sản phẩm nào trong giỏ hàng";
		break;
	case "Xoa":
		$masp = $_REQUEST['MaSP'];
		Cart::DeleteCart($masp);
		echo "Xóa thành công.";
		echo "<script>window.location ='index.php?mod=Cart&act=XuLyGioHang&Loai=Xem'</script>";
		break;
	case "Add":
		if(isset($_GET['Ma']))
		{
			$ma = $_GET['Ma'];
			$slg = $_SESSION["MyCart"][$ma];
			$slg++;
			Cart::UpdateCart($ma, $slg);
			echo "<script>window.location ='index.php?mod=Cart&act=XuLyGioHang&Loai=Xem'</script>";
		}
		break;
	case "Sub":
		if(isset( $_GET['Ma']))
		{
			$ma = $_GET['Ma'];
			$slg = $_SESSION["MyCart"][$ma];
			if($slg>1)
				$slg--;
			Cart::UpdateCart($ma, $slg);
			echo "<script>window.location ='index.php?mod=Cart&act=XuLyGioHang&Loai=Xem'</script>";
		}
		break;
	default: echo "<script>alert('Khong hợp lệ')</script>";
}
}
?>