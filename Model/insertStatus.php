<?php
include_once('header.php');

$data = json_decode(file_get_contents("php://input"));
 
 if(count($data) > 0)  
 {


$rt =$data->request_type;

if($rt==2){
      $name = $data->name;
      $description =$data->description;
      $level = $data->level;


$query =  "insert into status (name, description, level) values ('$name', '$description', '$level')";
    if(mysqli_query($conn, $query))  
      {  
          $data->message = "Status Inserted Successfully..."; 
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

$query = "delete from status where id='$id'";
    if(mysqli_query($conn, $query))  
      {  
          $data->message = "Status Deleted Successfully..."; 
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
      $level = $data->level;
      $id = $data->id;

$query =  "Update status set name = '$name', description = '$description' , level = '$level' where id='$id'";
    if(mysqli_query($conn, $query))  
      {  
          $data->message = "Status Updated Successfully..."; 
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