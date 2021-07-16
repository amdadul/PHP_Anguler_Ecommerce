<?php

class country extends base
{
	public $id;
	public $name;
	
	public function Insert()
	{
		$sql = "insert into country(name) values(
		'".$this->SD($this->name)."')";
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update country set 
			name = '".$this->SD($this->name)."' where id = ".$this->id;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from country where id = ".$this->id;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select id, name from country where id = ".$this->id;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->name = $a["name"];
			return true;
		}
		return false;
	}
	
	public function Select()
	{
		$sql = "select id, name from country";
		return $this->selectQuery($sql);
	}
}


?>