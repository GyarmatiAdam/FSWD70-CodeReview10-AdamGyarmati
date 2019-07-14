<?php 

require_once 'db_connect.php';

if (isset($_GET['insert'])) {

     $title = trim($_GET['title']);
     $title = strip_tags($_GET['title']);
     $title = htmlspecialchars($_GET['title']);

     $isbn = trim($_GET['isbn']);
     $isbn = strip_tags($_GET['isbn']);
     $isbn = htmlspecialchars($_GET['isbn']);

     $description = trim($_GET['description']);
     $description = strip_tags($_GET['description']);
     $description = htmlspecialchars($_GET['description']);

     $publish_date = trim($_GET['publish_date']);
     $publish_date = strip_tags($_GET['publish_date']);
     $publish_date = htmlspecialchars($_GET['publish_date']);

     $lib_type = $_GET['lib_type'];

     $author = trim($_GET['fk_author_id']);
     $author = strip_tags($_GET['fk_author_id']);
     $author = htmlspecialchars($_GET['fk_author_id']);

     $media = isset($_GET['fk_media_status_id']);
     
     if($media !== 1){
      $media_status = "Available";
     }elseif($media !== 2){
      $media_status = "Reserved";
     }else{
       echo "Something went wrong";
     }

  
     $sql = "INSERT INTO library (
      fk_author_id,
      fk_media_status_id,
      title, 
      isbn_code, 
      lib_description, 
      publish_date, 
      lib_type
      ) 
      VALUES ( 
      $author,
      $media, 
      '$title',
      '$isbn',
      '$description',
      '$publish_date',
      '$lib_type'
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
        <th scope="col">Status</th>

        </tr>
    </thead>
    <tbody>
          <?php
                  echo "<tr><th scope='1'>".$title . "</th>";
                  echo "<td scope='row'>".$isbn . "</td>";
                  echo "<td scope='row'>".$lib_type . "</td>";
                  echo "<td scope='row'>".$publish_date. "</td>";
                  echo "<td scope='row'>". $media_status ."</td></th></tr>";

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