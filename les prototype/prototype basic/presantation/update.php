<?php

    include "../data-access/gestionPromotion.php";

        $promotionObject = new GestionPromotion();

        if(isset($_GET['updateId'])){
            $id = $_GET['updateId'];
            $result = $promotionObject->selectById($id);
            if($result){
                foreach($result as $singlePromotion){

                }
            }
        }

        if(isset($_POST['update'])){
            $id = $_POST["idPromotion"];
            $newName = $_POST["updatePromotion"];
            $promotionObject->updatePromotion($id,$newName);

            header('location:form.php');
        }

?>

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
        <input type="hidden" name="idPromotion" value="<?php echo $singlePromotion['idPromotion']?>">
        <input type="text" id="namePromotion" name="updatePromotion" value ="<?php echo $singlePromotion['namePromotion']?>">
        <input type="submit" name="update">
    </form>
</body>
</html>


