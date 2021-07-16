<?php
include_once('header.php');

$data = json_decode(file_get_contents("php://input"));
 
 if(count($data) > 0)  
 {


$rt =$data->request_type;

if($rt==2){
      $name = $data->name;
      $description =$data->description;
      if($data->categoryId < 1)
      {
        $categoryId = 'NULL';
      }
      else
      {
        $categoryId = $data->categoryId;
      }


$query =  "insert into category (name, description, categoryId) values ('$name', '$description', $categoryId)";
    if(mysqli_query($conn, $query))  
      {  
          $data->message = "Category Inserted Successfully..."; 
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

$query = "delete from category where id='$id'";
    if(mysqli_query($conn, $query))  
      {  
          $data->message = "Category Deleted Successfully..."; 
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
      $categoryId = $data->categoryId;
      $id = $data->id;

$query =  "Update category set name = '$name', description = '$description' , categoryId = '$categoryId' where id='$id'";
    if(mysqli_query($conn, $query))  
      {  
          $data->message = "Category Updated Successfully..."; 
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