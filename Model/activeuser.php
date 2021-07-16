<?php

class activeuser extends base
{
	public $userId;
	public $dateTime;
	public $ip;





	
	public function Insert()
	{
		$sql = "insert into activeuser(userId, dateTime, ip) values(
		".$this->SD($this->userId).",
		'".$this->SD($this->dateTime)."',
		'".$this->SD($this->ip)."'
		)";
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update activeuser set 				
				userId = ".$this->SD($this->userId).",
				dateTime = ".$this->SD($this->dateTime).",
				ip = .".$this->SD($this->ip)."'
			 where userId = ".$this->userId;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from activeuser where userId = ".$this->userId;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select userId, dateTime, ip from activeuser where userId = ".$this->userId;
		
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
	
	
	public function Alogin()
	{
		$sql = "select userId, dateTime, ip from activeuser where userId = ".$this->userId;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{			
			$this->userId = $a["userId"];
			return true;
		}
		return false;
	}
	
	
	public function Select()
	{
		$sql = "select au.userId, u.name user, u.createdate , au.dateTime activedate, au.ip
				from activeuser au 
				left join user u on au.userId = u.id 
				";
		return $this->selectQuery($sql);
	}
}


?>