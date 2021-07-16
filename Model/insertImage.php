

<?php
include_once('header.php');
$id= $_POST['id'];
    if(!empty($_FILES['file'])){
		$target_dir = "../upload/productImage/";
    
    $image = basename($_FILES["file"]["name"]);
     $target_file = $target_dir . basename($_FILES["file"]["name"]);
 
     
			
			if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
{
		
		mysqli_query($conn,"INSERT INTO productimage(productId,image) VALUES('$id','$image')");
	    echo "successfully uploaded"; }
 
    }
?>