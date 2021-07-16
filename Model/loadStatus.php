<?php

include_once('header.php');

$result = $conn->query("select id, name, description, level
				from status  ORDER BY id DESC");

$data = array();

while ($row = mysqli_fetch_array($result)) {
 $data[] = array("id"=>$row['id'],"name"=>$row['name'],"description"=>$row['description'],"level"=>$row['level']);
}
echo json_encode($data);

?>
 