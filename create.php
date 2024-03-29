 <?php
    require_once 'actions/db_connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<title>Insert</title>
</head>
<body style="margin-top: 5rem">
<?php 
    require_once 'navbar.php';
?> 

<div class="container">
  <div class="row">
    <div class="col-sm-3">
    <table id="" class="media_table table-striped table-dark">
    
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Author</th>
        </tr>
    </thead>
    <tbody>
<?php
    $sql = "SELECT * FROM authors;";
    $result = $connect->query($sql);
     
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><th scope='row'>".$row['author_id'] . "</th><th>".$row['author_firstName'] . " ".$row['author_lastName'] . "</th></tr><br>";
        }
    }
?>
    </tbody>
    </table>

    </div>
    <div class="col-sm-8">

<form method="GET" enctype="multipart/form-data" action="actions/a_create.php"  autocomplete="off">

        <div class="form-group">
            <div class="input-group-prepend">
                <span class="input-group-text" required>Author ID</span>
                <input type="number" name="fk_author_id" aria-label="" placeholder="ID" class="form-control">
            </div>
        </div> <br>

        <div class="form-group">
            <select class="form-control custom-select" name="fk_media_status_id">
            <option value="" required>Status</option>
            <option value="1" required>Available</option>
            <option value="2" required>Unavailable</option><br>
            </select><hr>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="title" placeholder="Title" required><br>
            <input type="text" class="form-control" name="isbn" placeholder="ISBN 1111-11-11-1111-11-11" required><br>
            <input type="text" class="form-control" name="description" placeholder="Description" required><br>
            <input type="date" class="form-control" name="publish_date" placeholder="Date" required><br>
        </div>
        <div class="form-group">
            <select class="form-control custom-select" name="lib_type">
            <option value="">Status</option>
            <option value="BOOK">BOOK</option>
            <option value="CD">CD</option>
            <option value="DVD">DVD</option><br>
            </select><hr>
        </div>

            <!-- <input type="text" class="form-control" name="publish_type" placeholder="Type BOOK/DVD/CD" required><hr> -->
            <input type="file" name="fileToUpload" id="fileToUpload">
            <button type="submit" name="insert" class="btn btn-primary">Insert</button>
        </div>
</form>
        </div>
        <div class="col-sm-1">

        </div>
    </div>
    </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


