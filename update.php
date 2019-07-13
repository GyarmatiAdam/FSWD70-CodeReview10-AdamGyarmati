<?php 
/**update.php */
require_once 'actions/db_connect.php';


if (isset($_GET['library_id'])) {
    $library = $_GET['library_id'];

 
    $sql = "SELECT * FROM library WHERE library_id = {$library}" ;
    $result = $connect->query($sql);
 
    $data = $result->fetch_assoc();
    $connect->close();

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

    </div>
    <div class="col-sm-8">

<fieldset >
<form action="actions/a_update.php" method="GET">
                <div class="form-group">
                    <input type="number" name="author_id" placeholder="Author" value= "<?php echo isset($data['fk_author_id'])?>"><br>
                    <input type="number"  name="media_id" placeholder="Media" value="<?php echo isset($data['fk_media_status_id'])?>"><br>
                    <input type="text"  name="title" placeholder="Title" value="<?php echo isset($data['title'])?>"><br>
                    <input type="text"  name="isbn" placeholder="ISBN 1111-11-11-1111-11-11" value="<?php echo isset($data['isbn_code'])?>"><br>
                    <input type="text"  name="description" placeholder="Description" value="<?php echo isset($data['lib_description'])?>"><br>
                    <input type="date"  name="publish_date" placeholder="Date" value="<?php echo isset($data['publish_date'])?>"><br>
                    <input type="text"  name="publish_type" placeholder="Type BOOK/DVD/CD" value="<?php echo isset($data['lib_type '])?>"><hr>
                    <input type="file" name="fileToUpload" id="fileToUpload">

                    <tr>
                    <input type= "hidden" name= "library_id" value= "<?php echo isset($data['library_id'])?>" />
                    <td><button  type= "submit">Save Changes</button ></td>
                    <td><a  href= "index.php"><button  type="button" >Back</button ></a ></td >
                    </tr>
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
</body >
</html >
<?php 
    } else  {
        echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
    }

?>