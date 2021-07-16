<?php

class paymentmethod extends base
{
	public $id;
	public $name;
	public $description;
	public $url;






	
	public function Insert()
	{
		$sql = "insert into paymentmethod(name, description, url) values(
		'".$this->SD($this->name)."',
		'".$this->SD($this->description)."',
		'".$this->SD($this->url)."'
		)";
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update paymentmethod set 
				name = '".$this->SD($this->name)."',
				description = '".$this->SD($this->description)."',
				url = '".$this->SD($this->url)."'
			 where id = ".$this->id;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from paymentmethod where id = ".$this->id;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select name, description, url from paymentmethod where id = ".$this->id;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->name= $a["name"];
			$this->description = $a["description"];
			$this->url = $a["url"];

			return true;
		}
		return false;
	}
	
	public function Select()
	{
		$sql = "select id, name, description, url from paymentmethod";
		return $this->selectQuery($sql);
	}
}


?>