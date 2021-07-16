<?php

class blockuser extends base
{
	public $id;
	public $userId;
	public $blockFrom;
	public $blockTo;
	public $blockByUserId;
	public $remarks;



	
	public function Insert()
	{
		$sql = "insert into blockuser(userId, blockFrom, blockTo, blockByUserId, remarks) values(
		".$this->SD($this->userId).",
		'".$this->SD($this->blockFrom)."',
		'".$this->SD($this->blockTo)."',
		".$this->SD($this->blockByUserId).",
		'".$this->SD($this->remarks)."'
		)";
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update blockuser set 
			userId = ".$this->SD($this->userId).",
			blockFrom = '".$this->SD($this->blockFrom)."',
			blockTo = '".$this->SD($this->blockTo)."',
			blockByUserId = ".$this->SD($this->blockByUserId).",
			remarks = '".$this->SD($this->remarks)."'
			 where id = ".$this->id;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from blockuser where id = ".$this->id;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select id, userId, blockFrom, blockTo, blockByUserId, remarks from blockuser where id = ".$this->id;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->userId = $a["userId"];
			$this->blockFrom= $a["blockFrom"];
			$this->blockTo = $a["blockTo"];
			$this->blockByUserId = $a["blockByUserId"];
			$this->remarks = $a["remarks"];
			
			return true;
		}
		return false;
	}
	
	
	
	public function Blogin()
	{
		$sql = "select id, userId, blockFrom, blockTo, blockByUserId, remarks from blockuser where userId = ".$this->userId;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->userId = $a["userId"];
			$this->blockTo= $a["blockTo"];
			return true;
		}
		return false;
	}
	
	public function Select()
	{
		$sql = "select bu.id, u.name user,bu.blockFrom ,bu.blockTo, u2.name blockByUser, bu.remarks
				from blockuser bu
				left join user u on bu.userId =u.id 
				left join user u2 on bu.blockByUserID = u2.id ";
		return $this->selectQuery($sql);
	}
	
	public function Selectdl()
	{
		$sql = "select id, userId, blockFrom, blockTo, blockByUserId, remarks from blockuser";
		return $this->selectQuery($sql);
	}
}


?>