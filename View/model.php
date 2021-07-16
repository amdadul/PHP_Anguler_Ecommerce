
<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "test");

$result = $conn->query("SELECT name, email, password FROM user");

$data = array();

while ($row = mysqli_fetch_array($result)) {
 $data[] = array("name"=>$row['name'],"email"=>$row['email'],"password"=>$row['password']);
}
echo json_encode($data);

?>