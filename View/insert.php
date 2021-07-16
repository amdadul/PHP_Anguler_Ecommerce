<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "test");

$data = json_decode(file_get_contents("php://input"));
 
 if(count($data) > 0)  
 {

$name = mysqli_real_escape_string($conn, $data->name);
$email = mysqli_real_escape_string($conn, $data->email);
$password = mysqli_real_escape_string($conn, $data->password);
 
$query =  "insert into user (name, email, password) values ('$name', '$email','$password')";
    if(mysqli_query($conn, $query))  
      {  
           $data->message = "Data Inserted..."; 
        echo json_encode($data);
      }  
      else  
      {  
           echo 'Error';  
      }  
 }
?>