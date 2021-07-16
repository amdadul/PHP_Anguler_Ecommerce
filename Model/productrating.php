<?php
include_once('base.php');
class productrating extends base
{
	public $productId;
	public $userId;
	public $dateTime;
	public $ratings;
	
	public function Insert()
	{
		$sql = "insert into productrating(productId, userId, dateTime, ratings) values(
		".$this->SD($this->productId).",
		".$this->SD($this->userId).",
		'".$this->SD($this->dateTime)."',
		'".$this->SD($this->ratings)."'
		)";
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update productrating set 
				productId = ".$this->SD($this->productId).",
				userId = ".$this->SD($this->userId).",
				dateTime = ".$this->SD($this->dateTime).",
				ratings = '".$this->SD($this->ratings)."'
			 where productId = ".$this->productId;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from productrating where productId = ".$this->productId;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select productId, userId, dateTime, ratings from productrating where productId = ".$this->productId;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->productId = $a["productId"];
			$this->userId = $a["userId"];
			$this->dateTime = $a["dateTime"];
			$this->ratings = $a["ratings"];

			return true;
		}
		return false;
	}
	
	public function Select()
	{
		$sql = "select productId, userId, dateTime, ratings from productrating";
		if($this->productId > 0)
			$sql .=" where productId =".$this->SD($this->productId);
		return $this->selectQuery($sql);
	}
}


?>