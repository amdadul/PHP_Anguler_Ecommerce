<?php

class orderdetails extends base
{
	public $orderId;
	public $productsId;
	public $serialNumber;
	public $rate;
	public $qty;
	public $color;
	public $vat;
	public $discount;




	
	public function Insert()
	{
		$sql = "insert into orderdetails(orderId, productsId, serialNumber, rate, qty, color, vat, discount) values(
		".$this->SD($this->orderId).",
		".$this->SD($this->productsId).",
		'".$this->SD($this->serialNumber)."',
		".$this->SD($this->rate).",
		'".$this->SD($this->qty)."',
		'".$this->SD($this->color)."',
		".$this->SD($this->vat).",
		".$this->SD($this->discount)."
		)";
		
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update orderdetails set 
			orderId = '".$this->SD($this->orderId)."',
			productsId = '".$this->SD($this->productsId)."',
			serialNumber = ".$this->SD($this->serialNumber).",
			rate = ".$this->SD($this->rate).",
			qty = ".$this->SD($this->qty).",
			color = ".$this->SD($this->color).",
			vat = ".$this->SD($this->vat).",
			discount = ".$this->SD($this->discount)."
			 where orderId = ".$this->orderId;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from orderdetails where orderId = ".$this->orderId;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select orderId, productsId, serialNumber, rate, qty, color, vat, discount from orderdetails where orderId = ".$this->orderId;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->orderId = $a["orderId"];
			$this->productsId = $a["productsId"];
			$this->serialNumber = $a["serialNumber"];
			$this->rate = $a["rate"];
			$this->qty = $a["qty"];
			$this->color = $a["color"];
			$this->vat = $a["vat"];
			$this->discount = $a["discount"];

			return true;
		}
		return false;
	}
	
	public function Select()
	{
		$sql = "select od.orderId, u.name product, od.serialNumber, od.rate, od.qty, od.color, od.vat, od.discount 
		from orderdetails od
		left join product u on od.productsId = u.id
		";
		if($this->orderId > 0)
			$sql .= " where orderId = ".$this->SD($this->orderId);
		return $this->selectQuery($sql);
	}
}


?>