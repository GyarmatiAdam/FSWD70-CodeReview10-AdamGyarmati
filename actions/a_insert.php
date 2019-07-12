<?php

    require_once('dbconnection.php');

try {  


    $database = new Connection();
    $db = $database->openConnection();

    if (isset($_GET['submit'])) {

    $title = $_GET['title'];
    $isbn = $_GET['isbn'];
    $description = $_GET['description'];
    $publish_date = $_GET['publish_date'];
    $publish_type = $_GET['publish_type'];
    $author = $_GET['author_id'];
    $media = $_GET['media_id'];

    

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
        ':title' => $title, 
        ':isbn' => $isbn, 
        ':description'=> $description, 
        ':publish_date' => $publish_date, 
        ':publish_type' => $publish_type));

    }
}


catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}

        $database->closeConnection();

?>
