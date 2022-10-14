<?php
    include '../data-access/updateCode.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>add Promotion</title>
</head>

<body>

    <div class="containerUpdateForm">
        <h2>edit Promotion</h2>
        <form action="../data-access/updateCode.php" method="POST" class="updateForm">
            <label for="namePromotion">Nom promotion </label>
            <input type="hidden" name="idPromotion" value="<?php echo $singlePromotion['idPromotion']?>">
            <input type="text" id="namePromotion" name="newName" value="<?php echo $singlePromotion['namePromotion']?>">
            <input type="submit" name="update" class="update">
        </form>
    </div>
</body>

</html>