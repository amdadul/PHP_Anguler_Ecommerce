<?php
include_once('base.php');
class product extends base
{
	public $id;
	public $name;
	public $code;
	public $point;
	public $tags;
	public $short_description;
	public $description;
	public  $pPrice;
	public $stCost;
	public $unitId;
	public $brandId;
	public $categoryId;
	public $price;
	public $vat;
	public $discount;
	public $stock;
	public $model;
	public $spfction;
	public $sizeId;
	public $color;
	public $ip;
	public $userId;
	public $limit =9;
	public $ofset =0;
	public $searchv = "in ear";

	
	public function Insert()
	{
		$sql = "insert into product(name, code , tags, description, unitId, brandId, categoryId, price, vat, discount, stock, model, spfction, sizeId, color, ip, userId
) values(
		'".$this->SD($this->name)."',
		'".$this->SD($this->code)."',
		'".$this->SD($this->tags)."',
		'".$this->SD($this->description)."',
		".$this->SD($this->unitId).",
		".$this->SD($this->brandId).",
		".$this->SD($this->categoryId).",
		".$this->SD($this->price).",
		".$this->SD($this->vat).",
		".$this->SD($this->discount).",
		".$this->SD($this->stock).",
		'".$this->SD($this->model)."',
		'".$this->spfction."',
		".$this->SD($this->sizeId).",
		'".$this->SD($this->color)."',
		'".$this->SD($this->ip)."',
		".$this->SD($this->userId)."
		)";
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update product set 
			name = '".$this->SD($this->name)."',
			code = '".$this->SD($this->code)."',
			tags = '".$this->SD($this->tags)."',
			description = '".$this->SD($this->description)."',
			unitId = ".$this->SD($this->unitId).",
			brandId = ".$this->SD($this->brandId).",
			categoryId = ".$this->SD($this->categoryId).",
			price = ".$this->SD($this->price).",
			vat = ".$this->SD($this->vat).",
			discount = ".$this->SD($this->discount).",
			stock = ".$this->SD($this->stock).",
			model = '".$this->SD($this->model)."',
			spfction = '".$this->spfction."',
			sizeId = ".$this->SD($this->sizeId).",
			color = '".$this->SD($this->color)."',
			iP = '".$this->SD($this->ip)."',
			userId = ".$this->SD($this->userId)."			
			 where id = ".$this->id;
				
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from product where id = ".$this->id;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select id, name, code , tags, description, unitId, brandId, categoryId, price, vat, discount, stock, model, spfction, sizeId, color, ip, userId from product  where id = ".$this->id;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->name = $a["name"];
			$this->code= $a["code"];
			$this->tags = $a["tags"];
			$this->description = $a["description"];
			$this->unitId = $a["unitId"];
			$this->brandId = $a["brandId"];
			$this->categoryId = $a["categoryId"];
			$this->price = $a["price"];
			$this->vat = $a["vat"];
			$this->discount = $a["discount"];
			$this->stock = $a["stock"];
			$this->model = $a["model"];
			$this->spfction = $a["spfction"];
			$this->sizeId = $a["sizeId"];
			$this->color = $a["color"];
			$this->ip = $a["ip"];
			$this->userId = $a["userId"];

			return true;
		}
		return false;
	}
	
	public function Select()
	{
		$sql = "select p.id, p.name, p.code, p.tags, p.description,p.sort_description, u.name unit,b.name brand, c.name category, p.pPrice, p.stCost,p.mrp,p.point,p.sprice,p.crPrice,p.rPrice, p.stock, p.itemsource, p.model,p.sUnit, p.spfction, s.name size, p.color, p.ip, usr.fname user
		from product p 
		left join unit u on p.unitId = u.id
		left join brand b on p.brandId = b.id 
		left join category c on p.categoryId = c.id 
		left join size s on p.sizeId = s.id 
		
		left join user usr on p.userId = usr.id  ORDER BY  p.id DESC
		LIMIT ".$this->SD($this->limit)."  OFFSET ".$this->SD($this->ofset);
		
		if($this->id > 0)
		{
			$sql .="where p.id =".$this->SD($this->id);
		}
		
		if($this->categoryId > 0)
		{
			$sql .=" where p.categoryId =".$this->SD($this->categoryId)." ORDER BY p.id DESC LIMIT ".$this->SD($this->limit)."  OFFSET ".$this->SD($this->ofset);
		}
		
		

		return $this->selectQuery($sql);
	}

	public function SelectOne()
	{
		$sql = "select p.id, p.name, p.code, p.tags, p.description,p.sort_description, u.name unit,b.name brand, c.name category, p.pPrice, p.stCost,p.mrp,p.point,p.sprice,p.crPrice,p.rPrice, p.stock, p.itemsource, p.model,p.sUnit, p.spfction, s.name size, p.color, p.ip, usr.name user
		from product p 
		left join unit u on p.unitId = u.id
		left join brand b on p.brandId = b.id 
		left join category c on p.categoryId = c.id 
		left join size s on p.sizeId = s.id 
		
		left join user usr on p.userId = usr.id where p.id =".$this->id." ORDER BY  p.id DESC ";
		

		return $this->selectQuery($sql);
	}
	
	public function Selectr()
	{
		$sql = "select p.id, p.name, p.code, p.tags, p.description, u.name unit,b.name brand, c.name category, p.price, p.vat, p.discount, p.stock, p.model, p.spfction, s.name size, color, p.ip,usr.name user
		from product p 
		left join unit u on p.unitId = u.id
		left join brand b on p.brandId = b.id 
		left join category c on p.categoryId = c.id 
		left join size s on p.sizeId = s.id 
		
		left join user usr on p.userId = usr.id  
		";
		
		if($this->categoryId > 0)
		{
			$sql .=" where p.categoryId =".$this->SD($this->categoryId);
		}
		
		return $this->selectQuery($sql);
	}
	
	public function powerbank()
	{
		$sql = "select p.id, p.name, p.code, p.tags, p.description, u.name unit,b.name brand, c.name category, p.price, p.vat, p.discount, p.stock, p.model, s.name size, color,p.ip,usr.name user
		from product p 
		left join unit u on p.unitId = u.id
		left join brand b on p.brandId = b.id 
		left join category c on p.categoryId = c.id 
		left join size s on p.sizeId = s.id 
		
		left join user usr on p.userId = usr.id  
		where p.id IN (9,10,67,32)
		ORDER BY FIELD(p.id, 9,10,67,32)
		";
		return $this->selectQuery($sql);
	}
	
	public function earphone()
	{
		$sql = "select p.id, p.name, p.code, p.tags, p.description, u.name unit,b.name brand, c.name category, p.price, p.vat, p.discount, p.stock, p.model, s.name size, color,p.ip,usr.name user
		from product p 
		left join unit u on p.unitId = u.id
		left join brand b on p.brandId = b.id 
		left join category c on p.categoryId = c.id 
		left join size s on p.sizeId = s.id 
		
		left join user usr on p.userId = usr.id  
		where p.id IN (13,15,19,33)
		ORDER BY FIELD(p.id, 13,15,19,33)
		";
		return $this->selectQuery($sql);
	}
	
	
	public function vr()
	{
		$sql = "select p.id, p.name, p.code, p.tags, p.description, u.name unit,b.name brand, c.name category, p.price, p.vat, p.discount, p.stock, p.model, s.name size, color, p.ip, usr.name user
		from product p 
		left join unit u on p.unitId = u.id
		left join brand b on p.brandId = b.id 
		left join category c on p.categoryId = c.id 
		left join size s on p.sizeId = s.id 
		
		left join user usr on p.userId = usr.id  
		where p.categoryId = 11 LIMIT 4
		";
		return $this->selectQuery($sql);
	}
	
	
	public function charger()
	{
		$sql = "select p.id, p.name, p.code, p.tags, p.description, u.name unit,b.name brand, c.name category, p.price, p.vat, p.discount, p.stock, p.model, s.name size, color, p.ip, usr.name user
		from product p 
		left join unit u on p.unitId = u.id
		left join brand b on p.brandId = b.id 
		left join category c on p.categoryId = c.id 
		left join size s on p.sizeId = s.id 
		
		left join user usr on p.userId = usr.id  
		where p.id IN (77,50,63,70)
		ORDER BY FIELD(p.id, 77,50,63,70)
		";
		return $this->selectQuery($sql);
	}
	
	public function other()
	{
		$sql = "select p.id, p.name, p.code, p.tags, p.description, u.name unit,b.name brand, c.name category, p.price, p.vat, p.discount, p.stock, p.model, s.name size, color, p.ip, usr.name user
		from product p 
		left join unit u on p.unitId = u.id
		left join brand b on p.brandId = b.id 
		left join category c on p.categoryId = c.id 
		left join size s on p.sizeId = s.id 
		
		left join user usr on p.userId = usr.id  
		where p.id IN (64,85,65,106)
		ORDER BY FIELD(p.id, 85,64,65,106)
		";
		return $this->selectQuery($sql);
	}
	
	public function notebook()
	{
		$sql = "select p.id, p.name, p.code, p.tags, p.description, u.name unit,b.name brand, c.name category, p.price, p.vat, p.discount, p.stock, p.model, s.name size, color,p.ip,usr.name user
		from product p 
		left join unit u on p.unitId = u.id
		left join brand b on p.brandId = b.id 
		left join category c on p.categoryId = c.id 
		left join size s on p.sizeId = s.id 
		left join user usr on p.userId = usr.id  
		where p.id IN (126,115,8,29)
		ORDER BY FIELD(p.id, 126,115,8,29)
		";
		return $this->selectQuery($sql);
	}
	
	
	public function wifi()
	{
		$sql = "select p.id, p.name, p.code, p.tags, p.description, u.name unit,b.name brand, c.name category, p.price, p.vat, p.discount, p.stock, p.model, s.name size, color,p.ip,usr.name user
		from product p 
		left join unit u on p.unitId = u.id
		left join brand b on p.brandId = b.id 
		left join category c on p.categoryId = c.id 
		left join size s on p.sizeId = s.id 
		
		left join user usr on p.userId = usr.id  
		where p.id IN (16,116,43,44)
		ORDER BY FIELD(p.id, 44,43,116,16)
		";
		return $this->selectQuery($sql);
	}
	
	
	public function backpack()
	{
		$sql = "select p.id, p.name, p.code, p.tags, p.description, u.name unit,b.name brand, c.name category, p.price, p.vat, p.discount, p.stock, p.model, s.name size, color,p.ip,usr.name user
		from product p 
		left join unit u on p.unitId = u.id
		left join brand b on p.brandId = b.id 
		left join category c on p.categoryId = c.id 
		left join size s on p.sizeId = s.id 
		
		left join user usr on p.userId = usr.id  
		where p.id IN (112,53,54,55)
		ORDER BY FIELD(p.id, 53,112,54,55)
		";
		return $this->selectQuery($sql);
	}
	
	public function camera()
	{
		$sql = "select p.id, p.name, p.code, p.tags, p.description, u.name unit,b.name brand, c.name category, p.price, p.vat, p.discount, p.stock, p.model, s.name size, color,p.ip,usr.name user
		from product p 
		left join unit u on p.unitId = u.id
		left join brand b on p.brandId = b.id 
		left join category c on p.categoryId = c.id 
		left join size s on p.sizeId = s.id 
		
		left join user usr on p.userId = usr.id  
		where p.categoryId = 9 LIMIT 4
		";
		return $this->selectQuery($sql);
	}
	
	public function speaker()
	{
		$sql = "select p.id, p.name, p.code, p.tags, p.description, u.name unit,b.name brand, c.name category, p.price, p.vat, p.discount, p.stock, p.model, s.name size, color,p.ip,usr.name user
		from product p 
		left join unit u on p.unitId = u.id
		left join brand b on p.brandId = b.id 
		left join category c on p.categoryId = c.id 
		left join size s on p.sizeId = s.id 
		
		left join user usr on p.userId = usr.id  
		where p.categoryId = 8 LIMIT 4
		";
		return $this->selectQuery($sql);
	}
	
	public function watch()
	{
		$sql = "select p.id, p.name, p.code, p.tags, p.description, u.name unit,b.name brand, c.name category, p.price, p.vat, p.discount, p.stock, p.model, s.name size, color,p.ip,usr.name user
		from product p 
		left join unit u on p.unitId = u.id
		left join brand b on p.brandId = b.id 
		left join category c on p.categoryId = c.id 
		left join size s on p.sizeId = s.id 
		
		left join user usr on p.userId = usr.id  
		where p.id IN (118,14,12,11)
		ORDER BY FIELD(p.id, 118,14,12,11)
		";
		return $this->selectQuery($sql);
	}
	
	public function yeelight()
	{
		$sql = "select p.id, p.name, p.code, p.tags, p.description, u.name unit,b.name brand, c.name category, p.price, p.vat, p.discount, p.stock, p.model, s.name size, color,p.ip,usr.name user
		from product p 
		left join unit u on p.unitId = u.id
		left join brand b on p.brandId = b.id 
		left join category c on p.categoryId = c.id 
		left join size s on p.sizeId = s.id 
		
		left join user usr on p.userId = usr.id  
		where p.id IN (75,76,114,74)
		ORDER BY FIELD(p.id,76,75,114,74)
		";
		return $this->selectQuery($sql);
	}
	
	
	public function search()
	{
		$sql = "select p.id, p.name, p.code, p.tags, p.description, u.name unit,b.name brand, c.name category, p.price, p.vat, p.discount, p.stock, p.model, s.name size, p.color,p.ip,usr.name user
		from product p 
		left join unit u on p.unitId = u.id
		left join brand b on p.brandId = b.id 
		left join category c on p.categoryId = c.id 
		left join size s on p.sizeId = s.id 
		left join user usr on p.userId = usr.id  
		where p.name like '%".$this->SD($this->searchv)."%'  OR p.tags like '%".$this->SD($this->searchv)."%' OR c.name like '%".$this->SD($this->searchv)."%' OR p.color like '%".$this->SD($this->searchv)."%'
		";
		return $this->selectQuery($sql);
	}
	
}


?>