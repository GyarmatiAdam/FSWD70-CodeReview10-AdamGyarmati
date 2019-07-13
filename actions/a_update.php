<?php 
require_once 'db_connect.php';


if ($_POST['update']) {
     $title = $_POST['title'];
     $isbn = $_POST['isbn'];
     $description = $_POST['description'];
     $publish_date = $_POST['publish_date'];
     $publish_type = $_POST['publish_type'];
     $author = $_POST['author_id'];
     $media = $_POST['media_id'];
     $library = $_POST['library_id'];
  
     $sql = "UPDATE library SET (
      fk_author_id = $author,
      fk_media_status_id = $media, 
      title = '$title',
      isbn_code = '$isbn',
      lib_description = '$description',
      publish_date = '$publish_date', 
      lib_type = '$publish_type') 
      WHERE library_id = {$library};";
        

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