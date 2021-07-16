<?php

include_once('header.php');

$result = $conn->query("select c.id as id, c.name as name ,c.description as description, ct.name as category, c.categoryId as cid
				from category as c 
				left join category as ct on c.categoryId = ct.id ORDER BY  c.id DESC");

$data = array();

while ($row = mysqli_fetch_array($result)) {
 $data[] = array("id"=>$row['id'],"name"=>$row['name'],"description"=>$row['description'],"categoryId"=>$row['category'],"cid"=>$row['cid']);
}
echo json_encode($data);

?>
 