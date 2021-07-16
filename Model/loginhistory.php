<?php

class loginhistory extends base
{
	public $id;
	public $userId;
	public $dateTime;
	public $ip;





	
	public function Insert()
	{
		$sql = "insert into loginhistory(userId, dateTime, ip) values(
		".$this->SD($this->userId).",
		'".$this->SD($this->dateTime)."',
		'".$this->SD($this->ip)."'
		)";
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update loginhistory set 				
				userId = ".$this->SD($this->userId).",
				dateTime = ".$this->SD($this->dateTime).",
				ip = .".$this->SD($this->ip)."'
			 where Id = ".$this->id;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from loginhistory where id = ".$this->id;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select userId, dateTime, ip from loginhistory where id = ".$this->id;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{			
			$this->userId = $a["userId"];
			$this->dateTime = $a["dateTime"];
			$this->ip = $a["ip"];

			return true;
		}
		return false;
	}
	
	public function Select()
	{
		$sql = "select id, userId, dateTime,ip from loginhistory";
		return $this->selectQuery($sql);
	}
}


?>