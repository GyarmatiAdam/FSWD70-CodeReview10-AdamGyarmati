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
    <table  class="media_table table-striped table-dark">
    
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

<form method="GET" enctype="multipart/form-data" action="actions/a_create_author.php"  autocomplete="off">
    <div class="form-group">
    <div class="input-group mb-3">
    <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01">Publishers:</label>
    </div>
    <select class="custom-select" name="fk_publisher_id">
        <option value="">Select One</option>
        <option value="1">Big Book Publisher</option>
        <option value="2">Small Book Publisher</option>
        <option value="3">Rich CD Publisher</option>
        <option value="4">Poor CD Publisher</option>
        <option value="5">Amazing DVD Publisher</option>
        <option value="6">General DVD Publisher</option>
    </select>


    </div> 
    </div> 

    <div class="form-group">
        <div class="input-group-prepend">
            <span class="input-group-text" required>Author name</span>
            <input type="text" name="author_firstName" aria-label="First name" placeholder="First Name" class="form-control">
            <input type="text" name="author_lastName" aria-label="Last name" placeholder="Last Name" class="form-control">
        </div>
        </div> <br>

        <div class="form-group">
            <select class="form-control custom-select" name="media">
            <option value="">Occupation</option>
            <option value="1">Actor</option>
            <option value="2">Singer</option>
            <option value="3">Writer</option><br>
            </select><hr>
        </div>

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


