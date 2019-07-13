<?php 

require_once 'actions/db_connect.php';


if (isset($_GET['library_id'])) {
   $library = isset($_GET['library_id']);

   $sql = "SELECT * FROM library WHERE library_id = {$library}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();
   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title >Delete User</title>
</head>
<body>

<h3>Do you really want to delete this user?</h3>
<form action ="actions/a_delete.php" method="GET">
   <input type="hidden" name= "library_id" value="<?php echo isset($data['library_id']) ?>" />
   <button type="delete">Yes, delete it!</button >
   <a href="index.php"><button type="button">No, go back!</button ></a>
</form>

</body>
</html>

<?php
   } else  {
      echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
   }
?>