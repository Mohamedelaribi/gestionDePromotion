<?php

    include '../data-access/gestion.php';

    $promotionObject = new GestionPromotion();

    if(!empty($_POST)){


        $name = $_POST["namePromotion"];
        $promotion = new Promotion(NULL,$name);
        $promotionObject->insert($promotion);
    }

        $resultData = $promotionObject->select();

        if($resultData){

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
    <form action="" class="addPromotionForm">
            <label for="addPromotion">add promotion</label>
            <input type="text" name="namePromotion" id="addPromotion">
            <input type="submit" name = "insert">
        </form>      
        <input class="search" placeholder="Rechercher" id="search" name ="searchName">
        <table class="table">
            <thead class="thead">
                <tr>
                    <th scope="col">promotion</th>
                </tr>
            </thead>
            <tbody class="tbody" id="tbody">
                <?php
            foreach($resultData as $rowData){

                echo 
                    '<tr>
                        <td>'.$rowData['namePromotion'].'</td>
                        <td><a class="link" href="updateForm.php?updateId='.$rowData['idPromotion'].'">edit</a></td>
                        <td><a class="link" href ="delete.php?deletId='.$rowData['idPromotion'].'">delet</a></td>
                    </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>


    <script src="serch.js"></script>
</body>

</html>