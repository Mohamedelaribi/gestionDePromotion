<?php

    
    include "gestionPromotion.php";

        $promotionObject = new GestionPromotion();
        
            if(isset($_POST['update'])){
                $id = $_POST["idPromotion"];
                $newName = $_POST["updatePromotion"];
                $promotion = new Promotion($id,$newName);
                $promotionObject->updatePromotion($promotion);
                header('location: ../presantation/form.php');

            }

?>