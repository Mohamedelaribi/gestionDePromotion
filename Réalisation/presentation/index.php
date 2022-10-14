<?php
    include "../data-access/insert.php";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<table class="table">
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
                        <td><a href ="../data-access/delete.php?deletId='.$rowData['idPromotion'].'">delet</a></td>
                    </tr>';
                }
                ?>
  </tbody>
</table>
</body>
</html>