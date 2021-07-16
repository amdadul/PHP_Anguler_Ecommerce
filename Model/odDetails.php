<?php

include_once('header.php');

$number = $_GET["oid"];
if($_GET["oid"] != '')
{
$result = $conn->query("select od.orderId orderId, u.name product, od.serialNumber serialNumber, od.rate price, od.qty qty , od.color color
		from orderdetails od
		left join product u on od.productsId = u.id
        where od.orderId = '$number'");

$data = array();

while ($row = mysqli_fetch_array($result)) {
 $data[] = array("id"=>$row['orderId'],"product"=>$row['product'],"serialNumber"=>$row['serialNumber'],"price"=>$row['price'],"qty"=>$row['qty'],"color"=>$row['color']);
}
echo json_encode($data);
}
?>
 