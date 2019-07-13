<?php require_once 'actions/db_connect.php'; 
?> 

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

   <title>The Big Library</title>

</head>
<body style="margin-top: 5rem">
<?php 
    require_once 'navbar.php';
?> 

<div class="container">
  <div class="row">
    <div class="col-sm-2">
    <a href= "create.php"><button class="position-fixed btn btn-primary" >Insert Data</button></a>
    </div>
    <div class="col-sm-8">

   <?php
    /**
     * @connection mysqli
     */
        $sql = "SELECT * FROM library " ;
        $result = $connect->query($sql);
     
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
    ?>
    <!--tables-->
    <table class="table table-striped table-dark">
    
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Author</th>
        <th scope="col">Media</th>
        <th scope="col">Title</th>
        <th scope="col">ISBN</th>
        <th scope="col">Publish Date</th>
        <th scope="col">Type</th>


        </tr>
    </thead>
    <tbody>
    <?php
            echo "<tr><th scope='row'>".$row['library_id'] . "</th>";
            echo "<td scope='row'>".$row['fk_author_id'] . "</td>";
            echo "<td scope='row'>".$row['fk_media_status_id'] . "</td>";
            echo "<td scope='row'>".$row['title'] . "</td>";
            echo "<td scope='row'>".$row['isbn_code'] . "</td>";
            echo "<td scope='row'>".$row['publish_date'] . "</td>";
            echo "<td scope='row'>".$row['lib_type'] . "</td></th></tr>";
            echo "<tr><th colspan='8'>Description</th></tr>
            <tr><td colspan='8'>".$row['lib_description'] . "</td></tr>
            
            <tr><td>
            <div class='btn-group mr-2' role='group'>
            <a href='update.php?id=" .$row['library_id']."'><button class='btn btn-warning' type='button'>Edit</button></a>
            <a href='delete.php?id=" .$row['library_id']."'><button class='btn btn-danger' type='button'>Delete</button></a>
            </div> 
            </td></tr>";
        

            }
        } else  {
            echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
        }
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </tbody>

        </div>
        <div class="col-sm-2">

        </div>
    </div>
    </div>

</body>
</html>