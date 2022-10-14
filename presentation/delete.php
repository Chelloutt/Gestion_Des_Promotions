<?php

require_once "../data-access/promotionDAL.php";


$promotionDAL = new promotionDAl();


if(isset($_GET['deleteid'])){
    $delid= $_GET['deleteid'];
    $promotionDAL->deleteID($delid);
}
header("location: index.php");

?>  