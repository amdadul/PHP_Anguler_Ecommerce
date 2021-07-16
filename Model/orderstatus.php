<?php

class orderstatus extends base
{
	public $orderId;
	public $statusId;
	public $dateTime;
	public $userId;


 

	
	public function Insert()
	{
		$sql = "insert into orderstatus(orderId, statusId, dateTime, userId) values(
		".$this->SD($this->orderId).",
		".$this->SD($this->statusId).",
		'".$this->SD($this->dateTime)."',
		".$this->SD($this->userId)."
		)";
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update orderstatus set 
				statusId = ".$this->SD($this->statusId)."
				where orderId = ".$this->orderId;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from orderstatus where orderId = ".$this->orderId;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select orderId, userId, statusId, dateTime from orderstatus where orderId = ".$this->orderId;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->orderId = $a["orderId"];
			$this->statusId = $a["statusId"];
			$this->dateTime = $a["dateTime"];
			$this->userId = $a["userId"];

			return true;
		}
		return false;
	}
	
	public function Select()
	{
		$sql = "select orderId, statusId, dateTime, userId from orderstatus";
		return $this->selectQuery($sql);
	}
}


?>