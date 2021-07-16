<?php

class visitor extends base
{
	public $id;
	public $page;
	public $totalvisit;
	public $userip;


	
	public function Insert()
	{
		$sql = "insert into pageview(page, userip) values(
		'".$this->SD($this->page)."',
		'".$this->SD($this->userip)."'
		)";
		return $this->Execute($sql);
		
	}
	
	public function Inserth()
	{
		$sql = "insert into viewpage(page, userip) values(
		'".$this->SD($this->page)."',
		'".$this->SD($this->userip)."'
		)";
		return $this->Execute($sql);
		
	}
	
	public function InsertT()
	{
		$sql = "insert into totalview(page, totalvisit) values(
		".$this->SD($this->page).",
		".$this->SD($this->totalvisit)."
		)";
		
		
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update totalview set totalvisit = totalvisit+1 where page=".$this->SD($this->page);	
		return $this->Execute($sql);
	}

	public function Select()
	{
			$sql = "select totalvisit from totalview where page=".$this->SD($this->page);
		return $this->selectQuery($sql);
	}
	
	
	public function Total()
	{
			$sql = "select * from pageview where page=".$this->SD($this->page);
		return $this->selectQuery($sql);
	}
	
	public function Totalc()
	{
			$sql = "select * from viewpage where page=".$this->SD($this->page);
		return $this->selectQuery($sql);
	}
	
	public function Totalh()
	{
			$sql = "select * from viewpage";
		return $this->selectQuery($sql);
	}
	
	
	public function check()
	{
			$sql = "select * from pageview where page='".$this->SD($this->page)."' and userip='".$this->SD($this->userip)."'";
		return $this->selectQuery($sql);
	}
	
	
	public function checkh()
	{
			$sql = "select * from viewpage where page='".$this->SD($this->page)."' and userip='".$this->SD($this->userip)."'";
		return $this->selectQuery($sql);
	}
	
}

?>