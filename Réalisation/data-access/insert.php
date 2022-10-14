<?php

    include 'gestionPromotion.php';

    $promotionObject = new GestionPromotion();

    if(isset($_POST['insert'])){


        $namePromotion = $_POST['namePromotion'];

        $promotion = new Promotion(NULL,$namePromotion);

        $promotionObject->insert($promotion);
        
        haeder('location: ../presentation/index.php');
    }


    $resultData = $promotionObject->select();

    if($resultData){

    }

    if(isset($_GET['deleteId'])){
        $id = $_GET['deletId'];
        $promotionObject->delete($id);
        header("location: ../presentation/index.php");
    }




?>