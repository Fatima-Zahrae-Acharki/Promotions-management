<?php
        require_once "connection.php";
        require_once "promotion.php";

        class PromotionDAL extends connection {
            public function addPromotion($promotion){
                $name = $promotion->getName();
            }
            
            $insertRow = "INSERT INTO promotion (name) VALUES ("$name") ";

            mysqli_query ($this->connect(), $insertRow)
        }


?>
