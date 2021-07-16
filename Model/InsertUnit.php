<?php
include_once('header.php');

$data = json_decode(file_get_contents("php://input"));
 
 if(count($data) > 0)  
 {


$rt =$data->request_type;

if($rt==2){
      $name = $data->name;
      $description =$data->description;
     


$query =  "insert into unit (name, description) values ('$name', '$description')";
    if(mysqli_query($conn, $query))  
      {  
          $data->message = "Unit Inserted Successfully..."; 
        echo json_encode($data);
        
      }  
      else  
      {  
           $data->message = "Error..."; 
        echo json_encode($data);
      } 
      } 



if($rt==3){
  $id =$data->id;

$query = "delete from unit where id='$id'";
    if(mysqli_query($conn, $query))  
      {  
          $data->message = "Unit Deleted Successfully..."; 
        echo json_encode($data);
        
      }  
      else  
      {  
           $data->message = "Error..."; 
        echo json_encode($data);
      } 
      } 

if($rt==4){
      $name = $data->name;
      $description =$data->description;
      
      $id = $data->id;

$query =  "Update unit set name = '$name', description = '$description' where id='$id'";
    if(mysqli_query($conn, $query))  
      {  
          $data->message = "Unit Updated Successfully..."; 
        echo json_encode($data);
        
      }  
      else  
      {  
           $data->message = "Error..."; 
        echo json_encode($data);
      } 
      } 


}
      ?>