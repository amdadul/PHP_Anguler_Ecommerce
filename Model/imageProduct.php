<?php

include_once('header.php');

$id = $_GET['id'];
if($id > 0)
{
$result = $conn->query("select id, productId, image from productImage where productId ='$id'");

$data = array();
if(mysqli_num_rows($result)> 0){
while ($row = mysqli_fetch_array($result)) {
 $data[] = array("id"=>$row['id'],"productId"=>$row['productId'],"image"=>$row['image']);
}
 echo json_encode($data);
}
else
{
	$data = array();
	 $data[] = array("image"=>'noimage.jpg');
	echo json_encode($data);
}
}
else
{
	$data = array();
	 $data[] = array("image"=>'noimage.jpg');
	echo json_encode($data);
}

?>
 