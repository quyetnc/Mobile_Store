<?php
include_once("DataProvider.php");
class Product
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	function InsertProduct($MaLoai,$MaNSX,$TenSP,$HDH,$ManHinh,$CPU,$Ram,$Pin,$MoTa,$GiaBan,$SoLuongBan,$New,$GiamGia,$Hinh)
	{
		$sql="Insert into sanpham(MaLoai,MaNSX,TenSP,OS,ManHinh,CPU,Ram,Pin,MoTa,GiaBan,SoLuongBan,New,GiamGia,Hinh) values ($MaLoai,$MaNSX,'$TenSP','$HDH','$ManHinh','$CPU',$Ram,$Pin,'$MoTa',$GiaBan,$SoLuongBan,$New,$GiamGia,'$Hinh')";
		return $this->da->ExecuteQuery($sql);
	}
	
	function UpdateSoLuongBan($MaSP,$SoLuong)
	{	
		$row = $this->GetSoLuongBanByID($MaSP);
		$sql="Update sanpham set SoLuongBan=".($row['SoLuongBan']+$SoLuong)." where MaSP=$MaSP";
		return $this->da->ExecuteQuery($sql);
	}
	function UpdateView($MaSP,$luotxem_old)
	{	
		$sql="update sanpham set LuotXem = ($luotxem_old + 1) where MaSP='$MaSP'";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteProduct($MaSP)
	{
		$sql = "Delete from sanpham where MaSP=$MaSP";
		return $this->da->ExecuteQuery($sql);
	}
	function UpdateProduct($MaSP,$MaLoai,$MaNSX,$TenSP,$HDH,$ManHinh,$CPU,$Ram,$Pin,$MoTa,$GiaBan,$SoLuongBan,$New,$GiamGia,$Hinh)
	{
		if($Hinh=="")
		{
			$sql="Update sanpham set TenSP='$TenSP',MaLoai=$MaLoai,MaNSX=$MaNSX,GiaBan=$GiaBan,GiamGia= $GiamGia,New=$New,SoLuongBan=$SoLuongBan,OS='$HDH',ManHinh='$ManHinh',CPU='$CPU',RAM=$Ram,Pin=$Pin,MoTa='$MoTa' where MaSP=$MaSP";
			
		}else
		{
			$sql="Update sanpham set TenSP='$TenSP',MaLoai=$MaLoai,MaNSX=$MaNSX,GiaBan=$GiaBan,GiamGia= $GiamGia,New=$New,SoLuongBan=$SoLuongBan,OS='$HDH',ManHinh='$ManHinh',CPU='$CPU',RAM=$Ram,Pin=$Pin,MoTa='$MoTa',Hinh='$Hinh' where MaSP=$MaSP";
		}
		return $this->da->ExecuteQuery($sql);
	}
	
	function GetProductsManage()
	{
		$sql="Select sanpham.*,nhasanxuat.TenNSX,loaisanpham.TenLoai from sanpham,nhasanxuat,loaisanpham where sanpham.MaNSX=nhasanxuat.MaNSX and sanpham.MaLoai=loaisanpham.MaLoai order by sanpham.MaSP";
		return $this->da->FetchAll($sql);
	}
	
	function GetProductWidget($loai,$soluong)
	{
		if($loai=="BanChayNhat")
		{
			$sql="Select sanpham.* from sanpham order by sanpham.SoLuongBan desc limit $soluong";
		}
		else
		{
			$sql="Select sanpham.* from sanpham order by sanpham.MaSP desc limit $soluong";
		}
		return $this->da->FetchAll($sql);
		
	}
	function GetProducts($start,$limit)
	{
		$sql="Select sanpham.*,nhasanxuat.TenNSX,loaisanpham.TenLoai from sanpham,nhasanxuat,loaisanpham where sanpham.MaNSX=nhasanxuat.MaNSX and sanpham.MaLoai=loaisanpham.MaLoai order by sanpham.MaSP desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function GetProductsByNumSell($start,$limit)
	{
		$sql="Select sanpham.* from sanpham order by sanpham.SoLuongBan desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function GetAllProductByCategory($id)
	{
		$sql="Select * from sanpham where MaLoai=$id";
		return $this->da->FetchAll($sql);
	}
	function GetProductByNSXManage($maloai, $mansx)
	{
		$sql="Select sanpham.*,nhasanxuat.TenNSX,loaisanpham.TenLoai from sanpham,nhasanxuat,loaisanpham where sanpham.MaNSX=nhasanxuat.MaNSX and sanpham.MaLoai=loaisanpham.MaLoai and sanpham.MaNSX=$mansx and sanpham.MaLoai=$maloai order by sanpham.MaSP";
		return $this->da->FetchAll($sql);
	}
	
	function GetProductByNSX($id,$start,$limit)
	{
		$sql="Select sanpham.*,nhasanxuat.TenNSX,loaisanpham.TenLoai from sanpham,nhasanxuat,loaisanpham where sanpham.MaNSX=nhasanxuat.MaNSX and sanpham.MaLoai=loaisanpham.MaLoai and sanpham.MaNSX=$id order by sanpham.MaSP desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function GetProductByCategory($id,$start,$limit)
	{
		$sql="Select sanpham.*,nhasanxuat.TenNSX,loaisanpham.TenLoai from sanpham,nhasanxuat,loaisanpham where sanpham.MaNSX=nhasanxuat.MaNSX and sanpham.MaLoai=loaisanpham.MaLoai and sanpham.MaLoai=$id order by sanpham.MaSP desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function GetProductByCateAndNSX($MaLoai,$MaNSX,$start,$limit)
	{
		$sql="Select sanpham.*,nhasanxuat.TenNSX,loaisanpham.TenLoai from sanpham,nhasanxuat,loaisanpham where sanpham.MaNSX=nhasanxuat.MaNSX and sanpham.MaLoai=loaisanpham.MaLoai and sanpham.MaLoai=$MaLoai and sanpham.MaNSX=$MaNSX order by sanpham.MaSP desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	
	function GetProductByID($id)
	{
		$sql="select sanpham.*,loaisanpham.*,nhasanxuat.* from sanpham,loaisanpham,nhasanxuat where sanpham.MaLoai=loaisanpham.MaLoai AND sanpham.MaNSX=nhasanxuat.MaNSX  AND MaSP=$id";
		return $this->da->Fetch($sql);
	}
	function GetSoLuongBanByID($id)
	{
		$sql="select sanpham.SoLuongBan from sanpham where MaSP=$id";
		return $this->da->Fetch($sql);
	}
	
	
	function CountProduct()
	{
		$sql="Select MaSP from sanpham";
		return $this->da->NumRows($sql);
	}
	function CountProductByNSX($id)
	{
		$sql="Select MaSP from sanpham where MaNSX=$id";
		return $this->da->NumRows($sql);
	}
	function CountProductByCategory($id)
	{
		$sql="Select MaSP from sanpham where MaLoai=$id";
		return $this->da->NumRows($sql);
	}
	function CountProductByCateAndNSX($MaLoai,$MaNSX)
	{
		$sql="Select MaSP from sanpham where MaLoai=$MaLoai and MaNSX=$MaNSX";
		return $this->da->NumRows($sql);
	}
	
	function SearchProduct($name)
	{
		$sql = "Select * from sanpham where TenSP like '%$name%'";
		return $this->da->FetchAll($sql);
	}
	function SearchProductNangCao($tensp,$maloai,$mansx,$Tu,$Den)
	{
		$sql = "SELECT * FROM sanpham";
		$sql .= " WHERE TenSP LIKE '%{$tensp}%'";
		if($maloai!="all")
			$sql .= " AND MaLoai = ".$maloai;
		if($mansx!="all")
			$sql .= " AND MaNSX = ".$mansx;	
		$sql .= " AND GiaBan > ".$Tu;
		$sql .= " AND GiaBan < ".$Den;
		return $this->da->FetchAll($sql);
	}
	function GetRandomProduct($id,$ml,$mansx)
	{
		$sql = "select sanpham.* from sanpham where sanpham.MaNSX=$mansx and sanpham.MaLoai='$ml' and sanpham.MaSP<>'$id' order by rand() limit 0,27";
		return $this->da->FetchAll($sql);
	}
	
	function __destruct()
	{
		unset($this->da);
	}
}
?>