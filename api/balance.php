<?php


$username = $_GET['username'];
$password = $_GET['password'];
if ($username !='' && $password != ''){
	$rin=$_GET['rin'];
	include_once('conect.php');

	$query="select zemail,zpassword from pausers where zemail='".$username."' and zpassword='".$password."'";
	
	$result = mysqli_query($db,$query) or die("Cannot execute query");
	
	if (mysqli_num_rows($result)<1) {
			exit("Username or Password dint match!"); 
    }
    
    //ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8
    if($rin != '')
    {
	$query="SELECT xbalance FROM `vospbal` WHERE xrdin = '$rin' ";
	$result = mysqli_query($db,$query) or die("Cannot execute query");  
	$json_response = (array());

    $row = mysqli_fetch_row($result);
    if($row > 0 )
		   {		
		$row_array['balance'] = $row[0];
		}
		   else
		   {
		   	$row_array['balance'] = 0;
		   }    
        array_push($json_response,$row_array);    
	echo json_encode($json_response);    
	}	
}
else{
	
	echo "Not a valid request!";
}

?>