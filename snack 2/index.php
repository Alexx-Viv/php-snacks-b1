<?php

$students = array (
  array("Marco", "Rossi", array( 9, 9, 8, 9 ,8 ,6)),
  array("Luca", "Bianchi", array( 6, 6, 6, 6, 6, 6)),
  array("Paolo", "Neri", array( 8, 8, 8, 8, 8 ,8)),
  array("Pietro", "Verdi", array( 7, 4, 8, 9 ,8 ,7)),
);
// foreach ($students as $student) {
//   $somma=0;
//     foreach ($student[2] as $voti) {
//       $somma += $voti;
//     }
//   $somma = $somma / 6;
//   array_push($student, $somma);
//   var_dump($student);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
</head>
<body>
  <ul>
    <?php foreach($students as $student): ?>
    <li>
       Nome: <?= $student[0]; ?>
    </li>
    <li>
      Cognome: <?= $student[1]; ?>
    </li>
    <li>
     Media: <?php $somma = 0;?>
      <?php foreach($student[2] as $voto): ?>
      <?php
      $somma += $voto;
      ?>
      <?php endforeach; ?>
      <?php 
      $somma = $somma / 6;
      echo floor($somma);
      ?>
    </li>
    <hr>
    <br>
    <?php endforeach; ?>
</ul>
</body>
</html>