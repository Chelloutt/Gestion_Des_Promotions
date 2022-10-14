
<?php 
    include '../data-access/promotionDAL.php';
    if(isset($_POST["search"])){
        $promoDAL = new PromotionDAL();
        $newPromo = new Promotion();
        $newPromo->setName($_POST["names"]);
        $res = $promoDAL->search_promo($newPromo);
        $rows = [];
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $rows[] = $row;
            }
        }
        echo json_encode($rows);
    }
?>