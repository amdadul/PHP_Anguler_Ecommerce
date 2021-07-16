<?php

class productchoicelist extends base
{
	public $productId;
	public $userId;
	public $dateTime;





	
	public function Insert()
	{
		$sql = "insert into productchoicelist(productId, userId, dateTime) values(
		".$this->SD($this->productId).",
		".$this->SD($this->userId).",
		".$this->SD($this->dateTime)."
		)";
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update productchoicelist set 
				productId = ".$this->SD($this->productId).",
				userId = ".$this->SD($this->userId).",
				dateTime = ".$this->SD($this->dateTime)."
			 where Id = ".$this->id;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from productchoicelist where id = ".$this->id;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select productId, userId, dateTime from productchoicelist where id = ".$this->id;
		
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
		$sql = "select productId, userId, dateTime from productchoicelist";
		return $this->selectQuery($sql);
	}
}


?>