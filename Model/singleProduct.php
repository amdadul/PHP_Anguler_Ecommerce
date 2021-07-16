<?php

include_once('header.php'); 

$id = $_GET['id'];
if($id > 0)
{
$result = $conn->query("select p.id id, p.name name, p.code code, p.tags tags, p.description description ,p.sort_description sort_description, u.name unit,b.name brand, p.brandId brandId,p.categoryId cId, c.name category, p.pPrice pPrice, p.stCost stCost,p.mrp mrp,p.point point,p.sprice sprice,p.crPrice crPrice,p.rPrice rPrice, p.stock stock, p.itemsource itemsource, p.model model,p.sUnit sUnit, p.spfction spfction, s.name size, p.color color, p.ip ip, usr.fname user
		from product p 
		left join unit u on p.unitId = u.id
		left join brand b on p.brandId = b.id 
		left join category c on p.categoryId = c.id 
		left join size s on p.sizeId = s.id 
		left join user usr on p.userId = usr.id where p.id ='$id'");

$data = array();

while ($row = mysqli_fetch_array($result)) {
 $data[] = array("id"=>$row['id'],"name"=>$row['name'],"sku"=>$row['code'],"tags"=>$row['tags'],"description"=>$row['description'],"sort_description"=>$row['sort_description'],"unit"=>$row['unit'],"brand"=>$row['brand'],"brandId"=>$row['brandId'],"category"=>$row['category'],"cId"=>$row['cId'],"pPrice"=>$row['pPrice'],"stCost"=>$row['stCost'],"mrp"=>$row['mrp'],"point"=>$row['point'],"sprice"=>$row['sprice'],"crPrice"=>$row['crPrice'],"rPrice"=>$row['rPrice'],"stock"=>$row['stock'],"itemsource"=>$row['itemsource'], "model"=>$row['model'],"sUnit"=>$row['sUnit'],"spfction"=>$row['spfction'],"size"=>$row['size'],"color"=>$row['color'],"ip"=>$row['ip'],"user"=>$row['user']);
}
 echo json_encode($data);
}
else
{
	$data = array();
	 $data[] = array("name"=>'Err');
	echo json_encode($data);
}
?>
 