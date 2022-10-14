<?php

    include 'gestionPromotion.php';

    $promotionObject = new GestionPromotion();

    if(isset($_POST['insert'])){


        $namePromotion = $_POST['namePromotion'];

        $promotion = new Promotion(NULL,$namePromotion);

        $promotionObject->insert($promotion);
    }


    $resultData = $promotionObject->select();

    if($resultData){

    }




?>