<?php 
require_once 'db_connect.php';

if (isset($_GET['insert'])) {

    $fk_publisher_id = trim($_GET['fk_publisher_id']);
    $fk_publisher_id = strip_tags($_GET['fk_publisher_id']);
    $fk_publisher_id = htmlspecialchars($_GET['fk_publisher_id']);

    $author_firstName = trim($_GET['author_firstName']);
    $author_firstName = strip_tags($_GET['author_firstName']);
    $author_firstName = htmlspecialchars($_GET['author_firstName']);

    $author_lastName = trim($_GET['author_lastName']);
    $author_lastName = strip_tags($_GET['author_lastName']);
    $author_lastName = htmlspecialchars($_GET['author_lastName']);

    $occupation = trim($_GET['media']);
    $occupation = strip_tags($_GET['media']);
    $occupation = htmlspecialchars($_GET['media']);


    if($fk_publisher_id !==1){
      $publisher_name = "Big Book Publisher";
    } elseif($fk_publisher_id !==2){
      $publisher_name = "Small Book Publisher";
    } elseif($fk_publisher_id !==3){
      $publisher_name = "Rich CD Publisher";
    } elseif($fk_publisher_id !==4){
      $publisher_name = "Poor CD Publisher";
    } elseif($fk_publisher_id !==5){
      $publisher_name = "Amazing DVD Publisher";
    }elseif($fk_publisher_id !==5){
      $publisher_name = "General DVD Publisher";
    }else{
      echo "Something went wrong";
    }
    
 
    if($occupation !== 1){
      $occupation = 'Actor';
    }
    elseif($occupation !== 2){
      $occupation= 'Singer';
    } else{
      $occupation = 'Writer';
    }


    $sql = "INSERT INTO authors (
      fk_publisher_id,
      author_firstName,
      author_lastName,
      media) 
      VALUES (
      $fk_publisher_id,
      '$author_firstName',
      '$author_lastName',
      '$occupation'
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
        <th scope="col">Publisher</th>
        </tr>

    </thead>
    <tbody>
          <?php
                echo "<tr><td colspan='8'>".$publisher_name . "</td></tr>";
                echo "<tr><th colspan='4'>Author</th><th colspan='4'>Occupation</th></tr>
                <tr><td colspan='2'>".$author_firstName . "</td><td colspan='1'>".$author_lastName . "</td><td colspan='5'>".$occupation . "</td></tr>";
    
     } else  {
          echo "<p class='alert alert-success' role='alert'>Error " . $sql . ' ' . $connect->connect_error. "</P>";
     }
  
     $connect->close();
  }
?>
    </tbody>
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