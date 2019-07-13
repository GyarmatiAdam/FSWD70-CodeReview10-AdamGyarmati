<?php 
/* File db_connect.php (actions/db_connect.php) this file contains
 a database connection. Database connection is necessary to perform 
 any action for CRUD. */
$localhost = "127.0.0.1"; 
$username = "root"; 
$password = ""; 
$dbname = "cr10_adam_gyarmati_biglibrary"; 

// create connection 
$connect = new  mysqli($localhost, $username, $password, $dbname); 

// check connection 
if($connect->connect_error) {
    die("connection failed: " . $connect->connect_error);
} else {
    // echo "Successfully Connected";
}

?>