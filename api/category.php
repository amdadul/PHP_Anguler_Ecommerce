<?php
if (isset($_GET['username']) && isset($_GET['password'])){
	
	$username=$_GET['username'];
	$password=$_GET['password'];
	
	include_once('conect.php');

	$query="select zemail,zpassword from pausers where zemail='".$username."' and zpassword='".$password."'";
	
	$result = mysqli_query($db,$query) or die("Cannot execute query");
	
	if (mysqli_num_rows($result)<1) {
		
       
			exit("Username or Password dint match!");
		
        
    }

    //ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8

	$query="SELECT xcat FROM `seitem` GROUP by xcat";
	$result = mysqli_query($db,$query) or die("Cannot execute query");  


	$json_response = (array());
    
    while ($row = mysqli_fetch_row($result)) {
		   
    if($row[0] == '' || $row[0] == NULL)
    {
    }
    else
    {
        array_push($json_response,$row[0]);
    }
  
    }
    
	echo json_encode($json_response);
	
}else{
	
	echo "Not a valid request!";
}

?>