<?php 

require_once 'db_connect.php';


if (isset($_GET['insert'])) {
     $title = $_GET['title'];
     $isbn = $_GET['isbn'];
     $description = $_GET['description'];
     $publish_date = $_GET['publish_date'];
     $publish_type = $_GET['publish_type'];
     //$author = $_GET['author_id'];
     $media = $_GET['media_id'];
     $fk_publisher_id = $_GET['fk_publisher_id'];
     $author_firstName = $_GET['author_firstName'];
     $author_lastName = $_GET['author_lastName'];
  
     $sql = "INSERT INTO library (
      fk_media_status_id,
      title, 
      isbn_code, 
      lib_description, 
      publish_date, 
      lib_type) 
      VALUES ( 
       $media, 
      '$title',
      '$isbn',
      '$description',
      '$publish_date',
      '$publish_type'
      );";

    $sql = "INSERT INTO authors (
      author_firstName,
      author_lastName,
      fk_publisher_id) 
      VALUES (
     '$author_firstName',
      '$author_lastName',
      $fk_publisher_id
      );";



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">

  </head>
  <body  style="margin-top: 5rem">
     <?php 
     require_once 'navbar.php';
     ?>
     <div class="container">
  <div class="row">
    <div class="col-sm-2">
    <?php
          echo "<a href='../create.php'><button class='btn btn-dark' type='button'>Back</button></a>";
          echo "<a href='../index.php'><button class='btn btn-warning' type='button'>Home</button></a>";
    ?>
    </div>
    <div class="col-sm-8">


<?php

      if($connect->query($sql) === TRUE) {
          echo "<p class='alert alert-success' role='alert'>New Record Successfully Created</p>" ;

?>
    <!--tables-->
    <table class="table table-striped table-dark">
    
    <thead>
        <tr>
        <th scope="col">Title</th>
        <th scope="col">ISBN</th>
        <th scope="col">Type</th>
        <th scope="col">Publish Date</th>
        <th scope="col">Media</th>
        <th scope="col">Author</th>
        <th scope="col">description</th>


        </tr>
    </thead>
    <tbody>

          
          <?php
                  echo "<tr><th scope='1'>".$title . "</th>";
                  echo "<td scope='row'>".$isbn . "</td>";
                  echo "<td scope='row'>".$publish_type . "</td>";
                  echo "<td scope='row'>".$publish_date. "</td>";
                  echo "<td scope='row'>".$media. "</td>";
                  echo "<td scope='row'>".$author_firstName. "</td>";
                  echo "<td scope='row'>".$author_lastName. "</td></th></tr>";
                  echo "<tr><th colspan='8'>Description</th></tr>
                  <tr class='text-justify'><td colspan='8'>".$description . "</td></tr>";

      

     } else  {
          echo "<p class='alert alert-success' role='alert'>Error " . $sql . ' ' . $connect->connect_error. "</P>";
     }
  
     $connect->close();
  }
?>
       </div>
        <div class="col-sm-2">

        </div>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>