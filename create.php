<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

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

</body>
</html>


