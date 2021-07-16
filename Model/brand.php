<?php

include_once('header.php');

$data = json_decode(file_get_contents("php://input"));
 
 if(count($data) > 0)  
 {

$name = mysqli_real_escape_string($conn, $data->name);
$description = mysqli_real_escape_string($conn, $data->description);

$rt = mysqli_real_escape_string($conn, $data->request_type);
$id = mysqli_real_escape_string($conn, $data->id);
if($rt==3)
{
	$query =  "delete from brand where id='$id'";
    if(mysqli_query($conn, $query))  
      {  
            echo 'You data has successfully been deleted..';
      }  
      else  
      {  
           echo 'Faild....';
      }  
}
if($rt==2){
$query =  "insert into brand (name, description) values ('$name', '$description')";
    if(mysqli_query($conn, $query))  
      {  
          $data->message = "Data Inserted..."; 
        return json_encode($data);
      }  
      else  
      {  
           $data->message = "Error..."; 
           echo json_encode($data);
      } 
      } 

      
 }

















class brand extends base
{
	public $id;
	public $name;
	public $description;
	
	public function Insert()
	{
		$sql = "insert into brand(name, description) values(
		'".$this->SD($this->name)."',
		'".$this->SD($this->description)."'
		)";
		return $this->Execute($sql);
		
	}
	
	public function Update()
	{
		$sql = "update brand set 
			name = '".$this->SD($this->name)."',
			description = '".$this->SD($this->description)."'
			 where id = ".$this->id;	
		return $this->Execute($sql);
	}
	
	public function Delete()
	{
		$sql = "delete from brand where id = ".$this->id;
		return $this->Execute($sql);
	}
	
	public function SelectById()
	{
		$sql = "select id, name, description from brand where id = ".$this->id;
		
		$a = $this->SelectRow($sql);
		if(count($a) > 0)
		{
			$this->name = $a["name"];
			$this->description = $a["description"];
			return true;
		}
		return false;
	}
	
	public function Select()
	{
		$sql = "select id, name, description from brand";
		return $this->selectQuery($sql);
	}
}


?>