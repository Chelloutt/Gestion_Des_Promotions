<?php
require_once 'db-connect.php';
require_once 'promotion.php';

class PromotionDAL extends Connection {
 
    public function addPromotion($promotion){

        $name = $promotion->getName();
       
        $insertRow="INSERT INTO `promotion`(`id`, `names`) VALUES ('[value-1]','$name')";
                          
        mysqli_query($this->Connect(), $insertRow);
    }



    // afficher data

        public function affichage(){
             $sql = "SELECT * FROM promotion";
             $result = mysqli_query($this->Connect(), $sql);
             if ($result->num_rows>0){
                while($row = $result -> fetch_assoc())
                $data[]=$row;
             }
             return $data;
}


        // supprimer function
        public function deleteID($delid){
            $sql = "DELETE FROM `promotion` WHERE id =$delid";
            $result = mysqli_query($this->Connect(), $sql);

        }

        // get obtenir pour modifier 

        public function  EditID($editid){
            $sql = "SELECT * FROM promotion WHERE id = $editid";
            $result = mysqli_query($this->Connect(), $sql);
            if($result->num_rows==1){
            $row = $result->fetch_assoc();
            return $row;
        }
}

    // modifier function
        public function updateID($post){

          $Newname = $_POST['promotion'];
          $id = $_POST['id'];
           $sql= "UPDATE `promotion` SET `names`='$Newname' WHERE id = $id";
           $result = mysqli_query($this->Connect(), $sql);
            if($result){
                header("location: ./index.php");
            }
        }

        // recherche
        function search_promo($promotion){
            $name = $promotion->getName();
             
            $search = "SELECT * FROM promotion
             WHERE names LIKE '%$name%'";
            return mysqli_query($this->Connect(), $search);
        
            }
}


