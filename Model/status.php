<?php

class status extends base
{
	public $id;
	public $name;
	public $description;
	public $level;
	
	public function Insert()
	{
		$sql = "insert into status(name, description, level) values(
		'".$this->SD($this->name)."',
		'".$this->SD($this->description)."',
		".$this->SD($this->level)."
		)";
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update status set 
			name = '".$this->SD($this->name)."',
			description = '".$this->SD($this->description)."',
			level = ".$this->SD($this->level)."
			 where id = ".$this->id;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from status where id = ".$this->id;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select id, name, description, level from status where id = ".$this->id;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->name = $a["name"];
			$this->description = $a["description"];
			$this->level = $a["level"];
			return true;
		}
		return false;
	}
	
	public function Select()
	{
		$sql = "select id, name, description, level from status";
		return $this->selectQuery($sql);
	}
}


?>