<?php 

  require_once 'actions/db_connect.php';

if ($_GET['library_id']) {
  $library = $_GET['library_id'];



  $sql = "SELECT * FROM library WHERE library_id = {$library}";
  $result = $connect->query($sql);
  $data = $result->fetch_assoc();

  $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<title>Delete</title>
</head>
<body style="margin-top: 5rem">
<?php 
     require_once 'navbar.php';
?> 

<div class="container">
  <div class="row">
    <div class="col-sm-2">

    </div>
    <div class="col-sm-8">

<h3>Do you really want to delete this user?</h3>
<form method="POST" enctype="multipart/form-data" action ="actions/a_delete.php">
   <input type="hidden" name="library_id" value="<?php echo $data['library_id'] ?>"/>
   <button type="delete" name="delete">Yes, delete it!</button>
   <a href="index.php"><button type="button" value="delete">No, go back!</button></a>

</form>
<?php
}
?>
</div>
        <div class="col-sm-2">

        </div>
    </div>
    </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 

</body>
</html>