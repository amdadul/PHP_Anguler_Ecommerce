<?php

include_once('header.php');

$result = $conn->query("select o.id id, o.number number, o.dateTime dateTime, u.fname user, o.total total, o.referance referance, o.deliveryCharge deliveryCharge, o.deliveryAddress deliveryAddress, o.pnumber pnumber, c.name city, o.paymentmethod paymentmethod,s.name status, o.comment comment
	from orders o 
	left join user u on o.userId=u.id 
	left join city c on o.cityId=c.id 
	left join orderstatus os on o.id = os.orderId 
	left join status s on os.statusId = s.id ORDER BY  o.id DESC");

$data = array();

while ($row = mysqli_fetch_array($result)) {
 $data[] = array("id"=>$row['id'],"onumber"=>$row['number'],"date"=>$row['dateTime'],"user"=>$row['user'],"total"=>$row['total'],"ref"=>$row['referance'],"dcharge"=>$row['deliveryCharge'],"daddress"=>$row['deliveryAddress'],"pnumber"=>$row['pnumber'],"payment"=>$row['paymentmethod'],"city"=>$row['city'],"ostatus"=>$row['status'],"comment"=>$row['comment']);
}
echo json_encode($data);
?>
 