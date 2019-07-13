<?php 

require_once 'actions/db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin-top: 5rem">
<?php 
    require_once 'navbar.php';
?> 

<div class="container">
  <div class="row">

    <div class="col-sm-2">
        <div class="position-fixed">
        <input type= "hidden" name= "library_id" value= "<?php echo isset($data['library_id'])?>" />
        <button class="btn btn-warning" name="submit"  type= "submit">Save Changes</button ><br>
        <a  href= "index.php"><button class="btn btn-dark"  type="button" >Back</button ></a >
    </div>
    </div>
    <div class="col-sm-8">
<?php 
if (isset($_GET['submit'])) {
    $library = $_GET['submit'];

 
    $sql = "SELECT * FROM library WHERE library_id = {$library}" ;
    $result = $connect->query($sql);
 
    $data = $result->fetch_assoc();
    $connect->close();

?>
<fieldset >
<form method="GET" enctype="multipart/form-data" action="actions/a_update.php"  autocomplete="off">
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
            <span class="input-group-text">Author name</span>
            <input type="text" name="author_firstName" aria-label="First name" class="form-control">
            <input type="text" name="author_lastName" aria-label="Last name" class="form-control">
        </div>
        </div> <br>
        <div class="form-group">
            <input type="number" class="form-control" name="media_id" placeholder="Media" requiredvalue="<?php echo isset($data['fk_media_status_id'])?>"><br>
            <input type="text" class="form-control" name="title" placeholder="Title" required value="<?php echo isset($data['title'])?>"><br>
            <input type="text" class="form-control" name="isbn" placeholder="ISBN 1111-11-11-1111-11-11" required value="<?php echo isset($data['isbn_code'])?>"><br>
            <input type="text" class="form-control" name="description" placeholder="Description" required value="<?php echo isset($data['lib_description'])?>"><br>
            <input type="date" class="form-control" name="publish_date" placeholder="Date" required value="<?php echo isset($data['publish_date'])?>"><br>
            <input type="text" class="form-control" name="publish_type" placeholder="Type BOOK/DVD/CD" required value="<?php echo isset($data['lib_type '])?>"><hr>
            <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
        </div>
    </form>

</fieldset >
</div>
        <div class="col-sm-2">

        </div>
    </div>
    </div>

<?php 
    } else  {
        echo  "<tr><td colspan='5'><center class='alert alert-danger' role='alert'>No Data Avaliable</center></td></tr>";
    }
?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body >
</html >