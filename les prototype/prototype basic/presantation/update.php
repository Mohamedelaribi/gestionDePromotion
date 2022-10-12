<?php

    include "../data-access/gestionPromotion.php";

        $updatePromotion = new CrudPromotion();

        $updateId = $_REQUEST['updateId'];
        $resultPromotion = $updatePromotion->selectById($updateId);

        if(!empty($resultPromotion)){
            foreach($resultPromotion as $singlePromotion){
            }
        }


        if(isset($_POST['update'])){
            if(isset($_POST["updatePromotion"])){
                if(!empty($_POST["updatePromotion"])){
                    $idPromotion['idPromotion'] = $updateId;
                    $promotionUpdate["namePromotion"] = $_POST["updatePromotion"];
                    $updatePromotion->updatePromotion($promotionUpdate);
                }
            }

        }?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" methode="POST">
        <label for="namePromotion">Nom promotion </label>
        <input type="text" id="namePromotion" name="updatePromotion" value ="<?php echo $singlePromotion['namePromotion']?>">
        <input type="submit" name="update">
    </form>
</body>
</html>


