<?php

    include "gestionPromotion.php";

    if(isset($_POST['update'])){


        $promotionObject = new GestionPromotion();
        $id = $_POST["idPromotion"];
        $newName = $_POST["newName"];
        $promotion = new Promotion($id,$newName);
        $promotionObject->update($promotion);
        header('location: ../presentation/form.php');

    }


    if(isset($_GET['updateId'])){
        $promotionObject = new GestionPromotion();
        $id = $_GET['updateId'];
        $result = $promotionObject->selectById($id);
        if($result){
            foreach($result as $singlePromotion){

            }
        }
    }





?>