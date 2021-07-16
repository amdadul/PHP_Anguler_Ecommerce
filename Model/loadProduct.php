<?php

include_once('header.php');

$result = $conn->query("select p.id as id, p.name as name, p.code as code, p.point as point, p.mrp as mrp, p.itemsource as itemsource 
				from product as p ORDER BY  p.id DESC");

$data = array();

while ($row = mysqli_fetch_array($result)) {
 $data[] = array("id"=>$row['id'],"name"=>$row['name'],"sku"=>$row['code'],"point"=>$row['point'],"mrp"=>$row['mrp'],"itemsource"=>$row['itemsource']);
}
echo json_encode($data);

?>
 