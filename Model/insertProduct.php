<?php
include_once('header.php');

$data = json_decode(file_get_contents("php://input"));
 
 if(count($data) > 0)  
 {


$rt =$data->request_type;

if($rt==2){
       $name = $data->name;
      $sku =$data->sku;
      $point = $data->point;
       $tags = $data->tags;
      $short_description =$data->short_description;
      $description = $data->description;
       $pPrice = $data->pPrice;
       $model = $data->model;
      $stCost =$data->stCost;
      $crPrice = $data->crPrice;
       $rPrice = $data->rPrice;
      $mrp =$data->mrp;
      $sprice = $data->sprice;
       $itemsource = $data->itemsource;
      $sUnit =$data->sUnit;
      $stock = $data->stock;
       $size = $data->size;
      $pUnit =$data->pUnit;
      $category = $data->category;
      $brand = $data->brand;
      $color = $data->color;
      //$pImage = $data->pImage;
      $user= 1;
      $ip="100.90.80.79";
      $sp="specification";
      

$query =  "insert into product (Name, Code, tags, Description, sort_description, UnitID, BrandID, categoryId, pPrice, stCost, mrp, point, sprice, crPrice, rPrice, Stock, itemsource, Model, sUnit, spfction, SizeID, color, ip, UserID) values ('$name', '$sku', '$tags', '$description', '$short_description', '$pUnit', '$brand', '$category', '$pPrice', '$stCost', '$mrp', '$point', '$sprice', '$crPrice', '$rPrice', '$stock', '$itemsource','$model', '$sUnit', '$sp', '$size', '$color', '$ip', '$user')";

    if(mysqli_query($conn, $query))  
      {  
          $data->message = "Product Inserted Successfully..."; 
          $data->lastId = mysqli_insert_id($conn);
        echo json_encode($data);
        
      }  
      else  
      {  
           $data->message = "Error..."; 
        echo json_encode($data);
      } 
      } 



if($rt==3){
  $id =$data->id;

$query = "delete from category where id='$id'";
    if(mysqli_query($conn, $query))  
      {  
          $data->message = "Category Deleted Successfully..."; 
        echo json_encode($data);
        
      }  
      else  
      {  
           $data->message = "Error..."; 
        echo json_encode($data);
      } 
      } 

if($rt==4){
      $name = $data->name;
      $description =$data->description;
      $categoryId = $data->categoryId;
      $id = $data->id;

$query =  "Update category set name = '$name', description = '$description' , categoryId = '$categoryId' where id='$id'";
    if(mysqli_query($conn, $query))  
      {  
          $data->message = "Category Updated Successfully..."; 
        echo json_encode($data);
        
      }  
      else  
      {  
           $data->message = "Error..."; 
        echo json_encode($data);
      } 
      } 


}
      ?>