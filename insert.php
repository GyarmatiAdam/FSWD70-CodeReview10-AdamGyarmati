<?php
/**
 * @author Adam Gyarmati
 */
    require_once('dbconnection.php');
//if ( isset($_POST['insert']) ) { } 
    try
    {
        $database = new Connection();
        $db = $database->openConnection();


        $title = isset($_post['title']);
        $isbn = isset($_post['isbn']);
        $description = isset($_post['description']);
        $publish_date = isset($_post['publish_date']);
        $publish_type = isset($_post['publish_type']);
        $author = isset($_post['author_id']);
        $media = isset($_post['media_id']);
        //$image =isset($_GET['fileToUpload']);

       

            $stm = $db->prepare("INSERT INTO library (fk_author_id, 
            fk_media_status_id,
             title, isbn_code, 
             lib_description, 
             publish_date, 
             lib_type) 
             VALUES (:fk_author_id, 
             :fk_media_id, 
             :title, 
             :isbn, 
             :description, 
             :publish_date, 
             :publish_type)");
            $stm->execute(array(':fk_author_id'=> 2, 
            ':fk_media_id'=> 2, 
            ':title' => `$title`, 
            ':isbn' => `$isbn`, 
            ':description'=> `$description `, 
            ':publish_date' => `$publish_date`, 
            ':publish_type' => `$publish_type`));

            echo "New record created successfully";

        
       }
           catch (PDOException $e)
            {
                echo "There is some problem in connection: " . $e->getMessage();
            }
/*

try {

    $database = new Connection();
    $con = $database->openConnection();

    // prepare sql and bind parameters
    $stmt = $con->prepare("INSERT INTO INSERT INTO library (fk_author_id, fk_media_status_id, title, isbn_code, lib_description, publish_date, lib_type) VALUES (:fk_author_id, :fk_media_id, :title, :isbn, :description, :publish_date, :publish_type)");
    $stmt->bindParam('fk_author_id', $author);
    $stmt->bindParam('fk_media_status_id',  $media);
    $stmt->bindParam('title', $title);
    $stmt->bindParam('isbn_code', $isbn);
    $stmt->bindParam('lib_description', $description);
    $stmt->bindParam('publish_date', $publish_date);
    $stmt->bindParam('publish_type', $publish_type);


    $title = isset($_post['title']);
    $isbn = isset($_post['isbn']);
    $description = isset($_post['description']);
    $publish_date = isset($_post['publish_date']);
    $publish_type = isset($_post['publish_type']);
    $author = isset($_post['author_id']);
    $media = isset($_post['media_id']);
    
    $stmt->execute();
    
    echo "New records created successfully";
    }
    catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
    $con = null;
 
*/ 
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body style="margin-top: 4rem">
    <!--add navbar to the page-->
    <?php
        require_once('navbar.php');
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-2 ">

            <h3 class="position-fixed" style="margin-top: 5rem, margin-left: 0rem"></h3>
            </div>
            <div class="col-sm-8">
            <form method="post" enctype="multipart/form-data"   autocomplete="off">
                <div class="form-group">
                    <input type="number" class="form-control" name="author_id" placeholder="Author"><br>
                    <input type="number" class="form-control" name="media_id" placeholder="Media"><br>
                    <input type="text" class="form-control" name="title" placeholder="Title"><br>
                    <input type="text" class="form-control" name="isbn" placeholder="ISBN 1111-11-11-1111-11-11"><br>
                    <input type="text" class="form-control" name="description" placeholder="Description"><br>
                    <input type="date" class="form-control" name="publish_date" placeholder="Date"><br>
                    <input type="text" class="form-control" name="publish_type" placeholder="Type BOOK/DVD/CD"><hr>
                    <input type="file" name="fileToUpload" id="fileToUpload">

                <button type="insert" class="btn btn-primary">Insert</button>
                </form>

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