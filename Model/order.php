<?php
include_once('header.php');

$data = json_decode(file_get_contents("php://input"));

 
 if(count($data) > 0)  
 {

    $number ='Abl-'.date("dmy-his").'-'.rand(10,100);
    $date = date("Y-m-d h:i:s");
      $total = $data->total;
      $ref = $data->ref;
      $sc = $data->scost;
      $address = $data->address;
      $contact = $data->phone;
      $city = 1;
      $pm = $data->payment;
      $user = $data->user;
      $cmt = $data->comment;


$query = "insert into orders(number, dateTime, total, referance, deliveryCharge, deliveryAddress, pnumber, cityId, paymentMethod, userId, comment) values('$number','$date','$total','$ref','$sc','$address','$contact','$city','$pm','$user','$cmt')";
    if(mysqli_query($conn, $query))  
      {  
        $data->orderId = mysqli_insert_id($conn);
        $data->orderNumber = $number; 
          $data->message = "Order Posted Successfully..."; 
        echo json_encode($data); 
      }  
      else  
      {  
           $data->message = "Error..."; 
        echo json_encode($data);
      } 
  } 
      ?>