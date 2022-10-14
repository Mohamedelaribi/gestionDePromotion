<?php

    include "gestionPromotion.php";

    if(isset($_POST['update'])){


        $promotionObject = new GestionPromotion();
        $id = $_POST["idPromotion"];
        $newName = $_POST["newName"];
        $promotion = new Promotion($id,$newName);
        $promotionObject->updata($promotion);
        header('location: ../presentation/index.php');

    }





?>