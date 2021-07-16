<?php
include_once('base.php');
class productreview extends base
{
	public $id;
	public $productId;
	public $userId;
	public $review;
	public $dateTime;





	
	public function Insert()
	{
		$sql = "insert into productreview(productId, userId, review, dateTime) values(
		".$this->SD($this->productId).",
		".$this->SD($this->userId).",
		'".$this->SD($this->review)."',
		'".$this->SD($this->dateTime)."'
		)";
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update productreview set 
				productId = ".$this->SD($this->droductId).",
				userId = ".$this->SD($this->userId).",
				review = '".$this->SD($this->review)."',
				dateTime = ".$this->SD($this->dateTime)."
			 where ID = ".$this->id;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from productreview where id = ".$this->id;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select productId, userId, dateTime from productreview where id = ".$this->id;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->productId = $a["productId"];
			$this->userId = $a["userId"];
			$this->review = $a["review"];
			$this->dateTime = $a["dateTime"];

			return true;
		}
		return false;
	}
	
	public function Select()
	{
		$sql = "select p.name product, u.name user,pr.review, pr.dateTime, pr.userId ,u.image
				from productreview pr  
				left join product p on pr.productId = p.id 
				left join user u on pr.userId = u.id";
				
		if($this->productId > 0)
			$sql .= " where pr.productId = ".$this->SD($this->productId);
		return $this->selectQuery($sql);
	}
}


?>