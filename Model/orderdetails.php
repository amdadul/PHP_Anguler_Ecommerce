<?php
include_once('header.php');

$data = json_decode(file_get_contents("php://input"));

 
 if(count($data) > 0)  
 {

      $orderId =$data->orderId;
      $productsId = $data->pId;
      $orderNumber = $data->on;
      $price = $data->price;
      $qty = $data->qty;
      $color = $data->color;


$query = "insert into orderdetails(orderId, productsId, serialNumber, rate, qty, color) values('$orderId','$productsId','$orderNumber','$price','$qty','$color')";
    if(mysqli_query($conn, $query))  
      {  
          $data->message = "Order details Posted Successfully..."; 
        echo json_encode($data); 
      }  
      else  
      {  
           $data->message = "Error..."; 
        echo json_encode($data);
      } 
  } 
      ?>