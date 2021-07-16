<?php

class user extends base
{
	public $id;
	public $name;
	public $email;
	public $password;
	public $contact;
	public $type;
	public $address;
	public $cityId;
	public $createDate;
	public $createIp;
	public $image;


	
	public function Insert()
	{
		$sql = "insert into user(fname, email, password,	contact, type, address, cityId, createDate, createIp, image) values(
		'".$this->SD($this->name)."',
		'".$this->SD($this->email)."',
		'".$this->SD($this->password)."',
		".$this->SD($this->contact).",
		'".$this->SD($this->type)."',
		'".$this->SD($this->address)."',
		".$this->SD($this->cityId).",
		'".$this->SD($this->createDate)."',
		'".$this->SD($this->createIp)."',
		'".$this->SD($this->image["name"])."'
		)";
		
		
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update user set 
			fname = '".$this->SD($this->name)."',
			email = '".$this->SD($this->email)."',
			password ='".$this->SD($this->password)."',
			contact = ".$this->SD($this->contact).",			
			address = '".$this->SD($this->address)."',
			cityId = ".$this->SD($this->cityId).",
			createDate = '".$this->SD($this->createDate)."',
			createIp = '".$this->SD($this->createIp)."'			
			 where Id = ".$this->id;	
		return $this->Execute($sql);
	}
	
	
	public function chpwd()
	{
		$sql = "update user set 
			password ='".$this->SD($this->password)."'			
			 where Id = ".$this->id;	
		return $this->Execute($sql);
	}
	
	
	public function Iupdate()
	{
		$sql = "update user set 			
			 image = '".$this->SD($this->image["name"])."'			
			 where Id = ".$this->id;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from user where id = ".$this->id;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select id, fname, email, password, contact, type, address, cityId, createDate, createIp, image from user where id = ".$this->id;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->name = $a["fname"];
			$this->email= $a["email"];
			$this->password = $a["password"];
			$this->contact = $a["contact"];
			$this->type = $a["type"];
			$this->address = $a["address"];
			$this->cityId = $a["cityId"];
			$this->createDate = $a["createDate"];
			$this->createIp = $a["createIp"];
			$this->image = $a["image"];
			
			return true;
		}
		return false;
	}
	
	public function Select()
	{
			$sql = "select u.id , u.fname , u.email, u.password, u.contact,u.type ,u.address , c.name city,ct.name country, u.createDate, u.createIp, u.image
			from user u 
			left join city c on u.cityId = c.id
			left join country ct on c.id = ct.id";
			if($this->id > 0)
				$sql .=" where u.id =".$this->SD($this->id);
		return $this->selectQuery($sql);
	}
	
	public function Login()
	{
		$sql = "select id, fname, email, password, contact, type, address, cityId, createDate, createIp, image from user where email = '".$this->SD($this->email)."'and password ='".$this->SD($this->password)."' ";
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->id = $a["id"];
			$this->name = $a["fname"];
			$this->email= $a["email"];
			$this->password = $a["password"];
			$this->contact = $a["contact"];
			$this->type = $a["type"];
			$this->address = $a["address"];
			$this->cityId = $a["cityId"];
			$this->createDate = $a["createDate"];
			$this->createIp = $a["createIp"];
			$this->image = $a["image"];
			
			return true;
		}
		return false;
	}
	
	
	
	public function fb_Login()
	{
		$sql = "select id, fname, email, password, contact, type, address, cityId, createDate, createIp, image from user where email = '".$this->SD($this->id)."'and password ='".$this->SD($this->name)."' ";
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->id = $a["id"];
			$this->name = $a["fname"];
			$this->email= $a["email"];
			$this->password = $a["password"];
			$this->contact = $a["contact"];
			$this->type = $a["type"];
			$this->address = $a["address"];
			$this->cityId = $a["cityId"];
			$this->createDate = $a["createDate"];
			$this->createIp = $a["createIp"];
			$this->image = $a["image"];
			
			return true;
		}
		return false;
	}
	
	
	
	
	
	
	public function Recover()
	{
		$sql = "select id, fname, email, password, contact, type, address, cityId, createDate, createIp, image from user where email = '".$this->SD($this->email)."' ";
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->id = $a["id"];
			$this->name = $a["fname"];
			$this->email= $a["email"];
			
			return true;
		}
		return false;
	}
	
}


?>