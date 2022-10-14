<?php

require_once "../data-access/promotionDAL.php";
require_once "../data-access/db-connect.php";


 $promotionDAL = new promotionDAl();



if(isset($_GET['editid'])){
    $editid = $_GET['editid'];
    $content = $promotionDAL->EditID($editid);

    }

    ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>
<body>

    <center>
    <h3>Modifier</h3><br><br>
    <form action="" method="post">
        <input type="text" name ="promotion" value=" <?php echo $content['names']; ?>">
        <input type="hidden" name ="id" value=" <?php echo $content['id']; ?>">
        <input type="submit" value="update" name="update">
        </form>
    </center> 
</body>
</html>

<?php 
    if(isset($_POST['update'])){
        $promotionDAL->updateID($_POST);
       
    }


?>