<?php
include_once("DataProvider.php");
class NhaSanXuat
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	function InsertNSX($TenNSX)
	{
		$sql="Insert into nhasanxuat (TenNSX) Values('$TenNSX')";
		return $this->da->ExecuteQuery($sql);
	}
	function GetNSX()
	{
		$sql="Select * from nhasanxuat";
		return $this->da->FetchAll($sql);
	}
	function GetListNSX($start,$limit)
	{
		$sql="Select * from nhasanxuat order by MaNSX desc limit $start,$limit";
		return $this->da->FetchAll($sql);
	}
	function CountNSX()
	{
		$sql="Select MaNSX from nhasanxuat";
		return $this->da->NumRows($sql);
	}
	function GetNSXByID($id)
	{
		$sql="Select * from nhasanxuat where MaNSX='$id'";
		return $this->da->Fetch($sql);
	}

	function UpdateNSX($id, $TenNSX)
	{
		$sql="Update nhasanxuat set TenNSX='$TenNSX' where MaNSX=$id";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteNSX($id)
	{
		$sql="Delete from nhasanxuat where MaNSX = $id";
		return $this->da->ExecuteQuery($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}
}
?>