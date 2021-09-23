<?php
  $numbers = [];
   while (count($numbers) < 15) {
     $randomNumber = rand(0 ,100);
      if(in_array($randomNumber, $numbers)){
      } else{
      array_push($numbers, $randomNumber);
      }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>
<body>
<ul>
    <?php foreach($numbers as $number): ?>
    <li>
        <?= $number; ?>
    </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>