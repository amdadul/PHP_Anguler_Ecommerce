<?php
include_once('header.php');

	$brand = $_GET['id'];
if($brand > 0)
{
$result = $conn->query("select id, name, description from brand where id = '$brand'");

$data = array();

while ($row = mysqli_fetch_array($result)) {
 $data[] = array("id"=>$row['id'],"name"=>$row['name'],"description"=>$row['description']);
}
 echo json_encode($data);
}
else
{
	$data = array();
	 $data[] = array("name"=>'No Name');
	echo json_encode($data);
}


?>
 