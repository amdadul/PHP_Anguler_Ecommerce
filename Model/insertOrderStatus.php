<?php
include_once('header.php');

$data = json_decode(file_get_contents("php://input"));

 
 if(count($data) > 0)  
 {

       $orderId = $data->orderId;
       $result =  $conn->query("select * from orderstatus where orderId ='$orderId' ");
       $rown = mysqli_num_rows($result);

  if($rown == 0)
  {
       $statusId = $data->statusId;
       $date = date("Y-m-d h:m:i");
      $user= 1;

$query =  "insert into orderstatus(orderId, statusId, dateTime, userId) values('$orderId', '$statusId', '$date', '$user')";

    if(mysqli_query($conn, $query))  
      {  
          $data->message = "Order Status Inserted Successfully..."; 
        echo json_encode($data);
        
      }  
      else  
      {  
           $data->message = "Error..."; 
        echo json_encode($data);
      } 
  } 
  else 
  {
    $statusId = $data->statusId;
      $date = date("Y-m-d h:m:i");
      $user= 1;
  $query =  "Update orderstatus set statusId = '$statusId', dateTime = '$date' , userId = '$user' where orderId = '$orderId'";
    if(mysqli_query($conn, $query))  
      {  
          $data->message = "Order Status Updated Successfully..."; 
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