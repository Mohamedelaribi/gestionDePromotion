<?php
    include '../data-access/updateCode.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add Promotion</title>
</head>

<body>
    <form action="../data-access/updateCode.php" method="POST">
        <label for="namePromotion">Nom promotion </label>
        <input type="hidden" name="idPromotion" value="<?php echo $singlePromotion['idPromotion']?>">
        <input type="text" id="namePromotion" name="newName"
            value="<?php echo $singlePromotion['namePromotion']?>">
        <input type="submit" name="update">
    </form>
</body>

</html>