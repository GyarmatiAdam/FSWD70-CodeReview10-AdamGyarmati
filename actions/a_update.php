<?php 

require_once 'db_connect.php';


// $title ="";
// $isbn = "";
// $description = "";
// $publish_date = "";
// $publish_type ="";
// $author = "";
// $media = "";
// $library = "";

if($_GET){

     $title = $_GET['title'];
     $isbn = $_GET['isbn'];
     $description = $_GET['description'];
     $publish_date = $_GET['publish_date'];
     $publish_type = $_GET['publish_type'];
     $author = $_GET['author_id'];
     $media = $_GET['media_id'];
     $library = $_GET['library_id'];
     echo "What is wrong?";

     $sql = "UPDATE library SET (
      fk_author_id = $author,
      fk_media_status_id = $media, 
      title = '$title',
      isbn_code = '$isbn',
      lib_description = '$description',
      publish_date = '$publish_date', 
      lib_type = '$publish_type') 
      WHERE library_id = {$library};";
      
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="../style.css">

   <title>The Big Library</title>

</head>
<body style="margin-top: 5rem">
<?php 
    //require_once 'navbar.php';
?> 

<div class="container">
  <div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8">
<?php
      if($connect->query($sql) === TRUE) {
          echo  "<p>Successfully Updated</p>";
          echo "<a href='../update.php?id=" .$library."'><button type='button'>Back</button></a>";
          echo  "<a href='../index.php'><button type='button'>Home</button></a>";
        } else  {
          echo "Error " . $sql . ' ' . $connect->error;
     }
  
     $connect->close();
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