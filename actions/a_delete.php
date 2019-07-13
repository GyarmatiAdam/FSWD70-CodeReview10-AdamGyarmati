<?php 

require_once 'db_connect.php';

if ($_GET) {
   $library = isset($_GET['library_id']);

   $sql = "DELETE FROM library WHERE library_id = {$library};";
    if($connect->query($sql) === TRUE) {
       echo "<p>Successfully deleted!!</p>" ;
       echo "<a href='../index.php'><button type='button'>Back</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

?>

