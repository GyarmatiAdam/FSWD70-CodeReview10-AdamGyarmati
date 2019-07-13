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
    <div class="col-sm-2">

    </div>
    <div class="col-sm-8">
<fieldset >
<form method="GET" enctype="multipart/form-data" action="actions/a_create.php"  autocomplete="off">
                <div class="form-group">
                    <input type="number" class="form-control" name="author_id" placeholder="Author"><br>
                    <input type="number" class="form-control" name="media_id" placeholder="Media"><br>
                    <input type="text" class="form-control" name="title" placeholder="Title"><br>
                    <input type="text" class="form-control" name="isbn" placeholder="ISBN 1111-11-11-1111-11-11"><br>
                    <input type="text" class="form-control" name="description" placeholder="Description"><br>
                    <input type="date" class="form-control" name="publish_date" placeholder="Date"><br>
                    <input type="text" class="form-control" name="publish_type" placeholder="Type BOOK/DVD/CD"><hr>
                    <input type="file" name="fileToUpload" id="fileToUpload">

                    <button type="submit" name="insert" class="btn btn-primary">Insert</button>
                </div>
                </form>

</fieldset >
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


