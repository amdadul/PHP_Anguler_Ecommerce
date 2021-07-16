<?php
include_once('base.php');

class category extends base
{
	public $id;
	public $name;
	public $description;
	public $categoryId;

	public function Insert()
	{
		if($this->categoryId <=0)
			$this->categoryId ='NULL';
			
		$sql = "insert into category(name, description, categoryId) values(
		'".$this->SD($this->name)."',
		'".$this->SD($this->description)."',
		".$this->SD($this->categoryId)."
		)";
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update category set 
			name = '".$this->SD($this->name)."',
			description = '".$this->SD($this->description)."',
			categoryId = ".$this->SD($this->categoryId)."
			 where Id = ".$this->id;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from category where Id = ".$this->id;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select id, name, description, categoryId from category where id = ".$this->id;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->name = $a["name"];
			$this->description = $a["description"];
			$this->categoryId = $a["categoryId"];

			return true;
		}
		return false;
	}
	
	public function SelectParent()
	{
		$sql = "select c.id, c.name ,c.description, ct.name as category
				from category as c
				left join category as ct on c.categoryId = ct.id where c.categoryId is NULL";
		return $this->selectQuery($sql);
	}
	
	public function SelectChild($catId)
	{
		$sql = "select c.id, c.name ,c.description, ct.name as category
				from category as c
				left join category as ct on c.categoryId = ct.id where c.categoryId =".$catId;
		return $this->selectQuery($sql);
	}
	
	public function Select()
	{
		$sql = "select c.id, c.name ,c.description, ct.name as category
				from category as c
				left join category as ct on c.categoryId = ct.id";
		return $this->selectQuery($sql);
	}
}


?>