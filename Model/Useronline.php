<?php
include_once("DataProvider.php");
class Useronline
{
	private $da;
	function __construct()
	{
		$this->da = new DataProvider(); 
	}
	function InsertSession($sec,$ti)
	{
		$sql="Insert user_online (session,time) Values('$sec','$ti')";
		return $this->da->ExecuteQuery($sql);
	}
	function UpdateSession($ses,$ti)
	{
		$sql="update user_online set time='$ti' where session = '$ses'";
		return $this->da->ExecuteQuery($sql);
	}
	function DeleteSession($ti)
	{
		$sql="delete from user_online where time<$ti";
		return $this->da->ExecuteQuery($sql);
	}
	function CountSessionByID($sec)
	{
		$sql="Select * from user_online where session='$sec'";
		return $this->da->NumRows($sql);
	}
	function CountSession()
	{
		$sql="Select * from user_online";
		return $this->da->NumRows($sql);
	}
	function __destruct()
	{
		unset($this->da);
	}

}
?>