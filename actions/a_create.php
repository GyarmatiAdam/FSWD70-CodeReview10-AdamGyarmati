<?php 

require_once 'db_connect.php';


if (isset($_POST['insert'])) {
     $title = $_POST['title'];
     $isbn = $_POST['isbn'];
     $description = $_POST['description'];
     $publish_date = $_POST['publish_date'];
     $publish_type = $_POST['publish_type'];
     $author = $_POST['author_id'];
     $media = $_POST['media_id'];
  
     $sql = "INSERT INTO library (
      fk_author_id, 
      fk_media_status_id,
      title, 
      isbn_code, 
      lib_description, 
      publish_date, 
      lib_type) 
      VALUES (
       $author, 
       $media, 
      '$title',
      '$isbn',
      '$description',
      '$publish_date',
      '$publish_type';
      )";
      if($connect->query($sql) === TRUE) {
          echo "<p>New Record Successfully Created</p>" ;
          echo "<a href='../create.php'><button type='button'>Back</button></a>";
          echo "<a href='../index.php'><button type='button'>Home</button></a>";
     } else  {
          echo "Error " . $sql . ' ' . $connect->connect_error;
     }
  
     $connect->close();
  }
?>

?>