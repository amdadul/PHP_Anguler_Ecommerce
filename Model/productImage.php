<?php
include_once('base.php');
class productImage extends base
{
	public $id;
	public $productId;
	public $image;

public function Insert()
	{
		$sql = "insert into productImage(productId, image) values(
		'".$this->SD($this->productId)."',
		'".$this->SD($this->image["name"])."'
		)";
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update productImage set 
				id = '".$this->SD($this->id)."',
				productId = '".$this->SD($this->productId)."',
				image = '".$this->SD($this->image)."',
			 where Id = ".$this->id;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from productImage where Id = ".$this->id;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select id, productId, image from productImage where Id = ".$this->id;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->id= $a["id"];
			$this->productId = $a["productId"];
			$this->image = $a["image"];


			return true;
		}
		return false;
	}
	
	public function Select()
	{
		$sql = "select pi.id, p.name product, pi.image 
			from productImage pi 
			left join product p on pi.productId = p.id ";
			if($this->productId >0)
			{
				$sql .= "where pi.productId =".$this->SD($this->productId);
			}
		return $this->selectQuery($sql);
	}
}


?>