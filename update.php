<?php 

require_once 'actions/db_connect.php';


if (isset($_POST['library_id'])) {
   $library = $_POST['library_id'];

   $sql = "SELECT * FROM library WHERE library_id = {$library}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();
   $connect->close();
   
?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit User</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset >
<form method="POST" enctype="multipart/form-data" action="actions/a_update.php"  autocomplete="off">
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
                </form>


</fieldset >

</body >
</html >
<?php 

}

?>