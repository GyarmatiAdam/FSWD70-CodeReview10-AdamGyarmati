<?php 

$localhost = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "cr10_adam_gyarmati_biglibrary"; 

$connect = new  mysqli($localhost, $username, $password, $dbname); 

if($connect->connect_error) {
    die("connection failed: " . $connect->connect_error);
} else {
    // echo "Successfully Connected";
}

?>