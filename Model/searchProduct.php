<?php

include_once('header.php');


$name = $_GET['search'];

$result = $conn->query("select p.id as id, p.name as name, p.code as code, p.point as point, p.mrp as mrp, p.itemsource as itemsource, pi.image as image 
				from product as p 
				left join productimage as pi on p.id = pi.productId where p.name like '%$name%' or p.code like '%$name%' ");

$data = array();

while ($row = mysqli_fetch_array($result)) {
 $data[] = array("id"=>$row['id'],"name"=>$row['name'],"sku"=>$row['code'],"point"=>$row['point'],"mrp"=>$row['mrp'],"itemsource"=>$row['itemsource'],"image"=>$row['image']);
}
echo json_encode($data);

?>
 
