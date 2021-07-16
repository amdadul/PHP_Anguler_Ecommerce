<?php
include_once('conect.php');

function create($algo, $data, $salt){
      $context = hash_init($algo, HASH_HMAC, $salt);
      hash_update($context, $data);
      return hash_final($context);
    }

      /*$xorg = $_GET['xorg'];
      $password = $_GET['password'];
      $xcusemail = mysqli_real_escape_string($conn, strip_tags($_GET['xcusemail']));
      $xdeliveryadd = $_GET['xdeliveryadd'];
      $xmobile =$_GET['xmobile'];
      $xagent = $_GET['xagent'];
      $bin = $_GET['bin'];*/
$data = json_decode(file_get_contents("php://input"));
 
 if(count($data) > 0)  
 {
      $xorg = $data->xorg;
      $password = create('sha256',$data->password,'wehackforbangladesh');
      $xcusemail = mysqli_real_escape_string($db, strip_tags($data->xcusemail));
      $xdeliveryadd = $data->xdeliveryadd;
      $xmobile =$data->xmobile;
      $xagent = $data->xagent;
      $bin = $data->bin;

      
      $ztime = date("Y-m-d h:i:s");

$search =  "SELECT xcus, xagent FROM `secus` where xagent = '$xagent'";
$result = mysqli_query($db, $search);
if(mysqli_query($db, $search))
{
$cnt = mysqli_num_rows($result);
if($cnt == 0)
{
  $lnum = '0001';
}
else
{
while ($row = mysqli_fetch_row($result)) {
    
    $ld = $row[0];
    }
      $ldc = explode("-", $ld);
      $ldrin= $ldc[2]+1;
      $num = strlen($ldrin);
      if($num > 3)
      {
        $lnum = (string)$ldrin;
      }
      if($num == 3)
      {
        $lnum = '0'.(string)$ldrin;
      }
      if($num == 2)
      {
        $lnum = '00'.(string)$ldrin;
      }
      if($num == 1)
      {
        $lnum = '000'.(string)$ldrin;
      }
}

}
else
{
  $lnum = '0001';
}

$xcus = 'ABC-'.$bin.'-'.$lnum;


if($lnum !='')
{

$query =  "insert into secus(ztime,xcus, xorg,  xdeliveryadd, xcusemail, xmobile, xagent)
                     values('$ztime','$xcus','$xorg','$xdeliveryadd','$xcusemail','$xmobile','$xagent')";
                     $json_response = (array());
    if(mysqli_query($db, $query))  
      {  
          $row_array['message'] = "Account Created Successfully...";
          $row_array['xcus'] = $xcus;
          array_push($json_response,$row_array);
       echo json_encode($json_response);
        
      }  
      else  
      {  
           $row_array['message'] = "Error..."; 
       array_push($json_response,$row_array);
       echo json_encode($json_response);
      }

} 
}
      ?>