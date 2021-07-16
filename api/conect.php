<?php
$db = mysqli_connect("localhost", "root", "", "abl") or die ("Could not connect to server\n"); 

	if (!$db) {
        die('Could not connect to db: ' . mysqli_error());
    }
?>