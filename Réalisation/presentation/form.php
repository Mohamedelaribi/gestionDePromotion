<?php

    include '../data-access/gestionPromotion.php';

    $promotionObject = new GestionPromotion();

    if(!empty($_POST)){


        $name = $_POST["namePromotion"];
        $promotion = new Promotion(NULL,$name);
        $promotionObject->insert($promotion);
    }

        $resultData = $promotionObject->select();

        if($resultData){

        }
        if(isset($_GET['deletId'])){
          $idDelet = $_GET['deletId'];
          $promotionObject->delete($idDelet);
          header('location: form.php');
        }
        ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css/index.css">

    <title>Document</title>
</head>

<body>

    <div class="container">
        <form action="" method="POST" class="addPromotionForm">
            <label for="addPromotion">add pormotion</label>
            <input type="text" id="addPromotion" name="namePromotion" placeholder ="add Promotion">
            <input type="submit" class="addButton">
        </form>
        <input class="search" placeholder="Rechercher" id="search" name ="searchName">


        <table class="table" id="tbody">
            <thead>
                <tr>
                    <th scope="col">promotion</th>
                    <th colspan="3">action</th>
                </tr>
            </thead>
            <tbody>
                <?php
            foreach($resultData as $rowData){

                echo 
                    '<tr>
                        <td>'.$rowData['namePromotion'].'</td>
                        <td><a href="updateForm.php?updateId='.$rowData['idPromotion'].'">edit</a></td>
                        <td><a href ="form.php?deletId='.$rowData['idPromotion'].'">delet</a></td>
                    </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="serch.js"></script>
</body>

</html>