<?php

class productBrochure extends base
{
	public $productId;
	public $brochure;

public function Insert()
	{
		$sql = "insert into productbrochure(productId, brochure) values(
		".$this->SD($this->productId).",
		'".$this->SD($this->brochure["name"])."'
		)";
		
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update productBrochure set 
				productId = '".$this->SD($this->productId)."',
				brochure= '".$this->SD($this->brochure)."',
			 where Id = ".$this->id;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from productBrochure where Id = ".$this->id;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select productId, brochur from productBrochure where Id = ".$this->id;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->productId = $a["productId"];
			$this->brochur= $a["brochur"];


			return true;
		}
		return false;
	}
	
	public function Select()
	{
		$sql = "select productId, brochure  from productbrochure ";
		return $this->selectQuery($sql);
	}
}


?>