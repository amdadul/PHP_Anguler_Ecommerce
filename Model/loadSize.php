<?php

include_once('header.php');

$result = $conn->query("select id, name ,description
				from size");

$data = array();

while ($row = mysqli_fetch_array($result)) {
 $data[] = array("id"=>$row['id'],"name"=>$row['name'],"description"=>$row['description']);
}
echo json_encode($data);

?>
 