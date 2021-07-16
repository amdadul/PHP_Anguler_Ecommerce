<?php
include_once('header.php');

$data = json_decode(file_get_contents("php://input"));
 
 if(count($data) > 0)  
 {

      $email = mysqli_real_escape_string($conn, strip_tags($data->email));
      

$query =  "insert into email (email) values ('$email')";
    if(mysqli_query($conn, $query))  
      {  
          $data->message = "Thanks for Subscribe !!!"; 
        echo json_encode($data);
        
      }  
      else  
      {  
           $data->message = "Error..."; 
        echo json_encode($data);
      } 
    
}
      ?>