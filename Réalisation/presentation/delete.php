<?php

include '../data-access/gestionPromotion.php';

$promotionObject = new GestionPromotion();
    if(isset($_GET['deleteId'])){
        $id = $_GET['deleteId'];
        $promotionObject->delete($id);
        header("location: ../presentation/form.php");

    }


?>