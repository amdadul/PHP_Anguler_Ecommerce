<?php

class city extends base
{
	public $id;
	public $name;
	public $countryId;
	
	public function Insert()
	{
		$sql = "insert into city(name, countryId) values(
		'".$this->SD($this->name)."', 
		".$this->SD($this->countryId)."
		)";
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update city set 
			name = '".$this->SD($this->name)."', 
			countryId = ".$this->SD($this->countryId)." 
			where id = ".$this->id;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from city where id = ".$this->id;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select id, name, countryId from city where id = ".$this->id;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->name = $a["name"];
			$this->countryId = $a["countryId"];
			return true;
		}
		return false;
	}
	
	public function Select()
	{
		$sql = "select ct.id , ct.name, cn.name as country
				from city as ct
				left join country as cn on ct.countryId = cn.id";
		return $this->selectQuery($sql);
	}
}


?>