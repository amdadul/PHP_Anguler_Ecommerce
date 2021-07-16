<?php
include_once('productImage.php');
include_once('header.php');

if(isset($_GET['q']))
{
	$ctg = $_GET['q'];
}
else
{
	$ctg =0;
}
if($ctg > 0)
{
$result = $conn->query("select p.id id, p.name name, p.code code, p.tags tags, p.description description ,p.sort_description sort_description, u.name unit,b.name brand, c.name category, p.pPrice pPrice, p.stCost stCost,p.mrp mrp,p.point point,p.sprice sprice,p.crPrice crPrice,p.rPrice rPrice, p.stock stock, p.itemsource itemsource, p.model model,p.sUnit sUnit, p.spfction spfction, s.name size, p.color color, p.ip ip, usr.fname user
		from product p 
		left join unit u on p.unitId = u.id
		left join brand b on p.brandId = b.id 
		left join category c on p.categoryId = c.id 
		left join size s on p.sizeId = s.id 
		left join user usr on p.userId = usr.id where p.name like '%$ctg%' or p.code like '%$ctg%' ");


 $data = mysqli_num_rows($result);

 echo json_encode($data);
}
else
{
	$result = $conn->query("select p.id id, p.name name, p.code code, p.tags tags, p.description description ,p.sort_description sort_description, u.name unit,b.name brand, c.name category, p.pPrice pPrice, p.stCost stCost,p.mrp mrp,p.point point,p.sprice sprice,p.crPrice crPrice,p.rPrice rPrice, p.stock stock, p.itemsource itemsource, p.model model,p.sUnit sUnit, p.spfction spfction, s.name size, p.color color, p.ip ip, usr.fname user
		from product p 
		left join unit u on p.unitId = u.id
		left join brand b on p.brandId = b.id 
		left join category c on p.categoryId = c.id 
		left join size s on p.sizeId = s.id 
		left join user usr on p.userId = usr.id ");


 $data = mysqli_num_rows($result);


 echo json_encode($data);
}



?>
 