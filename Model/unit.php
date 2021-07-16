<?php

class unit extends base
{
	public $id;
	public $name;
	public $description;
	
	public function Insert()
	{
		$sql = "insert into unit(name, description) values(
		'".$this->SD($this->name)."',
		'".$this->SD($this->description)."'
		)";
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update unit set 
			name = '".$this->SD($this->name)."',
			description = '".$this->SD($this->description)."'
			 where id = ".$this->id;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from unit where id = ".$this->id;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select id, name, description from unit where id = ".$this->id;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->name = $a["name"];
			$this->description = $a["description"];
			return true;
		}
		return false;
	}
	
	public function Select()
	{
		$sql = "select id, name, description from unit";
		return $this->selectQuery($sql);
	}
}


?>