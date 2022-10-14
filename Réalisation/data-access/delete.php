<?php

    include "gestionPromotion.php";

    

    if(isset($_GET['deleteId'])){
        $promotionObject = new GestionPromotion();
        $id = $_GET['deleteId'];
        $promotionObject->delete($id);
        header('location : ../presentation/index.php');
    }
?>