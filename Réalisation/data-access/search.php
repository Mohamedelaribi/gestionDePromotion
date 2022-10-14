<?php


    include "gestionPromotion.php";


    if(isset($_POST["search"])){
        $promotionObject = new GestionPromotion();
        $search = $_POST["name"];
        $promo = new Promotion(NULL,$search);
        $result = $promotionObject->searchPromo($promo);
        $data = [];

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $data[] = $row;
            }
        }
        echo json_encode($data);
    }
    



?>