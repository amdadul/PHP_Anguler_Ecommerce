<?php

$username='apiuser';
	$password='ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8';

if ($username !='' && $password!= ''){
	
	
	
	include_once('conect.php');

	$query="select zemail,zpassword from pausers where zemail='".$username."' and zpassword='".$password."'";
	
	$result = mysqli_query($db,$query) or die("Cannot execute query");
	
	if (mysqli_num_rows($result)<1) {  
			exit("Username or Password dint match!");  
    }

    //ca0af5821f64fbcce24a2d24dff5efb6b1746a0de0c9e69c605c4fbe924d2fd8

	$query="select xitemid,xitemcode,xsource,xdesc,xlongdesc,xcat,xbrand,xgitem,xcitem,xunitsale,xtypestk,xmrp,xstdcost,xcp,xdp,xstdprice,zactive from seitem where zactive=1 order by xitemid DESC LIMIT 20  OFFSET 0";
	$result = mysqli_query($db,$query) or die("Cannot execute query");  


	//$json_response = (array());
    
    while($row = mysqli_fetch_assoc($result))
		{
			$a[] = $row;
		}
		return $a;	
	
}
else{
	
	echo "Not a valid request!";
}

?>