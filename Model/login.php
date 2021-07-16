<?php
include_once('header.php');

$data = json_decode(file_get_contents("php://input"));
 
 if(count($data) > 0)  
 {
      $email = $data->email;
      $password =$data->password;
      $result = $conn->query("select id, fname, email, Contact, type, image from user where email = '$email' and password = '$password'");
      $data = array();
 if(mysqli_num_rows($result)> 0)
 {
          while ($row = mysqli_fetch_array($result)) {
                  $data[0] = array("id"=>$row['id'],"name"=>$row['fname'],"email"=> $row['email'],"phone"=>$row['Contact'],"type"=>$row['type'],"image"=>$row['image'],"message"=> 'Log-in Successfull');
                    }
           echo json_encode($data[0]);
         }
         else  
      {  
        $data = array();
          $data[] = array("message"=> 'Email or password not match');
        echo json_encode($data[0]);
      } 
  }

?>