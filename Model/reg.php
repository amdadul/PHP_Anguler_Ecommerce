<?php
include_once('header.php');

$data = json_decode(file_get_contents("php://input"));

 
 if(count($data) > 0)  
 {

      $fname = $data->fname;
      $lname =$data->lname;
      $password = $data->password;
      $email = mysqli_real_escape_string($conn, strip_tags($data->email));
      $contact = $data->phone;
      $company = $data->company;
      $type = 'U';
      $address = $data->address;
      $city = 1;//$data->city;
      $country = $data->country;
      $createDate = date("Y-m-d h:i:s");
      $createIp = $_SERVER['REMOTE_ADDR'];
      $image = 'noimage.jpg';


$query =  "insert into user(fname,lname, email, password,  contact, company, type, address, cityId, countryId,createDate, createIp, image) values('$fname','$lname','$email','$password','$contact','$company','$type','$address','$city','$country','$createDate','$createIp','$image')";
    if(mysqli_query($conn, $query))  
      {  
          $data->message = "Account Created Successfully...";
          $data->lastId = mysqli_insert_id($conn); 
        echo json_encode($data);
        
      }  
      else  
      {  
           $data->message = "Error..."; 
        echo json_encode($data);
      } 
      } 
      ?>