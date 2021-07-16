<?php

class orders extends base
{
	public $id;
	public $Number;
	public $pnumber;
	public $dateTime;
	public $userId;
	public $total;
	public $vat;
	public $discount;
	public $deliveryCharge;
	public $deliveryAddress;
	public $cityId;
	public $paymentMethodId;
	



	
	public function Insert()
	{
		$sql = "insert into orders(number, dateTime, total, vat, discount, deliveryCharge, deliveryAddress, pnumber, cityId, paymentMethodId, userId) values(
		'".$this->SD($this->Number)."',
		'".$this->SD($this->dateTime)."',
		".$this->SD($this->total).",
		".$this->SD($this->vat).",
		".$this->SD($this->discount).",
		".$this->SD($this->deliveryCharge).",
		'".$this->SD($this->deliveryAddress)."',
		'".$this->SD($this->pnumber)."',
		".$this->SD($this->cityId).",
		".$this->SD($this->paymentMethodId).",
		".$this->SD($this->userId)."	
		)";
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update orders set 
			number = '".$this->SD($this->number)."',
			dateTime = '".$this->SD($this->dateTime)."',
			userId = ".$this->SD($this->userId).",
			total = ".$this->SD($this->total).",
			vat = ".$this->SD($this->vat).",
			discount = ".$this->SD($this->discount).",
			deliveryCharge = ".$this->SD($this->deliveryCharge).",
			deliveryAddress = '".$this->SD($this->deliveryAddress)."',
			pnumber = '".$this->SD($this->pnumber)."',
			cityId = ".$this->SD($this->cityId).",
			paymentMethodId = ".$this->SD($this->paymentMethodId)."
			 where id = ".$this->id;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from orders where id = ".$this->id;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select number, dateTime, userId, total, vat, discount, deliveryCharge, deliveryAddress, cityId, paymentMethodId from orders where id = ".$this->id;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->number = $a["number"];
			$this->dateTime= $a["dateTime"];
			$this->userID = $a["userId"];
			$this->total = $a["total"];
			$this->vat = $a["vat"];
			$this->discount = $a["discount"];
			$this->deliveryCharge = $a["deliveryCharge"];
			$this->deliveryAddress = $a["deliveryAddress"];
			$this->pnumber = $a["pnumber"];
			$this->cityId = $a["cityId"];
			$this->paymentMethodId = $a["paymentMethodId"];

			return true;
		}
		return false;
	}
	
	public function Select()
	{
		$sql = "select o.id, o.number, o.dateTime, u.fname user, o.total, o.vat, o.discount, o.deliveryCharge, o.deliveryAddress, o.pnumber, c.name city, p.name paymentmethod,s.name status
		from orders o
		left join user u on o.userId=u.id
		left join city c on o.cityId=c.id 
		left join paymentmethod p on o.paymentMethodId =p.id
		left join orderstatus os on o.id = os.orderId 
		left join status s on os.statusId = s.id
		";
		if($this->userId > 0)
		{
			$sql .= " where o.userId = ".$this->SD($this->userId);
		}
			
		else if($this->id > 0)
		{
			$sql .= " where o.id = ".$this->SD($this->id);
		}
		return $this->selectQuery($sql);
	}
}


?>