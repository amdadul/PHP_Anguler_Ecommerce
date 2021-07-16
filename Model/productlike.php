<?php
include_once('base.php');
class productlike extends base
{
	public $productId;
	public $userId;
	public $dateTime;





	
	public function Insert()
	{
		$sql = "insert into productlike(productId, userId, dateTime) values(
		".$this->SD($this->productId).",
		".$this->SD($this->userId).",
		'".$this->SD($this->dateTime)."'
		)";
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update productlike set 
				productId = ".$this->SD($this->productId).",
				userId = ".$this->SD($this->userId).",
				dateTime = ".$this->SD($this->dateTime)."
			 where productId = ".$this->productId;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from productlike where productId = ".$this->productId;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select productId, userId, dateTime from productlike where productId = ".$this->productId;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->productId = $a["productId"];
			$this->userId = $a["userId"];
			$this->dateTime = $a["dateTime"];

			return true;
		}
		return false;
	}
	
	public function Select()
	{
		$sql = "select pl.productId, u.name user, pl.dateTime ,pl.userId
		from productlike pl
		left join product p on pl.productId= p.id
		left join user u on pl.userId = u.id";
		if($this->productId > 0)
			$sql .=" where pl.productId =".$this->SD($this->productId);
		return $this->selectQuery($sql);
	}
}


?>