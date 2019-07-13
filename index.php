<?php require_once 'actions/db_connect.php'; ?> 

<!DOCTYPE html>
<html>
<head>
   <title></title>

   <style type="text/css">
       .manageUser {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }

   </style>

</head>
<body>

<div class ="manageUser">
   <a href= "create.php"><button type="button" >Add User</button></a>
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
    <tbody>
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">ISBN</th>
        <th scope="col">Type</th>
        </tr>
    </thead>
    <?php
            echo "<tr><th scope='row'>".$row['library_id'] . "</th>";
            echo "<th scope='row'>".$row['title'] . "</th>";
            echo "<th scope='row'>".$row['isbn_code'] . "</th>";
            echo "<th scope='row'>".$row['lib_type'] . "
            <button type='submit' name='delete' class='btn btn-primary'>Delete</button>
            <button type='submit' name='update' class='btn btn-primary'>Update</button>
            </th></tr>";
            }
        } else  {
            echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
        }
    ?>
    </tbody>

</div>

</body>
</html>