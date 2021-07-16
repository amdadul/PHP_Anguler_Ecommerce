<?php

class base
{
	protected $cn;
	public $error;
	public $pageName;
	
	public function __construct()
	{
		$this->cn = mysqli_connect("localhost", "root", "", "abl_ecom");
		$this->conn = mysqli_connect("localhost", "root", "", "abl_ecom");		
	}
	
	protected function SD($value)
	{
		return 	mysqli_real_escape_string($this->cn, strip_tags($value));
	}
	
	
	protected function Execute($sql)
	{
		if(mysqli_query($this->cn, $sql))
		{
			$this->lastId = mysqli_insert_id($this->cn);
			return true;
		}
		
			$this->error = mysqli_error($this->cn);
			return false;	
		
	}
	
	protected function SelectQuery($sql)
	{
		$a = [];
		
		$rows = mysqli_query($this->cn, $sql);
		while($row = mysqli_fetch_assoc($rows))
		{
			$a[] = $row;
		}
		return $a;	
	}
	
	protected function SelectRow($sql)
	{
		$a = [];
		$rows = mysqli_query($this->cn, $sql);
		while($row = mysqli_fetch_assoc($rows))
		{
			$a = $row;
		}
		return $a;	
	}
	
	
	public function Table($fieldName = "", $value = "")
	{
		$a = $this->Select();
		if(count($a) > 0)
		{
			print '<table class="table table-striped">';
			print '<tr>';
			foreach($a as $row)
			{
				foreach($row as $k=>$v)
				{
					

					if(strtolower($k) != "id" and strtolower($k) != "password" and strtolower($k) != "vat" and strtolower($k) != "discount")
					print '<th>'.ucwords($k).'</th>';	
				}
				break;
			}
			print '<th>#</th></tr>';
			foreach($a as $row)
			{
				print '<tr>';
			
				foreach($row as $k=>$v)
				{
					if(strtolower($k) != "id" and strtolower($k) != "password" and strtolower($k) != "vat" and strtolower($k) != "discount")
					{
						if(strtolower($k) == strtolower($fieldName))
							{ 
								if(strtolower($fieldName)=="brochure")
									{
										print '<td>'.str_replace("#replace#" ,($row["productId"]."_".$v) , $value).'</td>';
									}
								else if(strtolower($fieldName)=="user")
									{
									}
									
								else
									{
										print '<td>'.str_replace("#replace#" ,($row["id"]."_".$v) , $value).'</td>';
									}
							}
						else
						{
							
							print '<td>'.htmlentities($v).'</td>';
						}
					
				}}
				
				if(strtolower($fieldName)=="brochure" || strtolower($fieldName)=="like" || strtolower($fieldName)=="dislike" || strtolower($fieldName)=="rating")
					{
						print '<td>
					<a href="?p='.$this->pageName.'_edit&id='.$row["productId"].'">Edit</a> |
					<a href="?p='.$this->pageName.'&id='.$row["productId"].'">Delete</a>
				</td>';
					}
										
				
			if(strtolower($fieldName)=="users")
				{
				print '<td>
					<a href="?p='.$this->pageName.'_edit&id='.$row["userId"].'">Edit</a> |
					<a href="?p='.$this->pageName.'&id='.$row["userId"].'">Delete</a>
				</td>'; 
				}
			if(strtolower($fieldName)=="" || strtolower($fieldName)=="image")
			{
				print '<td>
					<a href="?p='.$this->pageName.'_edit&id='.$row["id"].'">Edit</a> |
					<a href="?p='.$this->pageName.'&id='.$row["id"].'">Delete</a>
				</td>';
			}
			
			if(strtolower($fieldName)=="order")
			{
				print '<td>
					
					<a href="?c=order_detaits&oid='.$row["id"].'">View Details</a>
				</td>';
			}
			
			if(strtolower($fieldName)=="orderst")
			{
				print '<td>
					<a href="?p='.$this->pageName.'_edit&id='.$row["orderId"].'">Edit</a> |
					<a href="?p='.$this->pageName.'&id='.$row["orderId"].'">Delete</a>
				</td>';
			}
			
			if(strtolower($fieldName)=="view")
			{
				print '<td>
					
					
				</td>';
			}
				
				print '</tr>';
			}
			print '</table>';	
		}
		else
		{
			print '<span class="success">No Data Found</span>';			
		}
	}
	
	
	public function Option($value)
	{
		$s="";
		$a = $this->Select();
		foreach($a as $row)
		{
			
					if($row["id"] == $value)
					{
						$s .= '<option value="'.$row["id"].'" selected>'.$row["name"].'</option>';	
					}
					else
					{
						$s .= '<option value="'.$row["id"].'">'.$row["name"].'</option>';	
					}
			
		}
		return $s;
	}
	
	
	public function Ooption($value)
	{
		$s="";
		$a = $this->Select();
		foreach($a as $row)
		{
			
				if($row["id"] == $value)
					{
						$s .= '<option value="'.$row["id"].'" selected>'.$row["number"].'</option>';	
					}
				else
					{
						$s .= '<option value="'.$row["id"].'">'.$row["number"].'</option>';	
					}
			
		}
		return $s;
	}
	
	
}

?>