<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Length of an Array</title>
</head>
<body>
  <?php
    $arraySports = array("Futebol", "Volei", "Basquete", "Natação", "Taekwondo", "Muay Thai", "Jiu-Jitsu", "Boxe");
    $arrayNumbers = array(0, 5, 10, 15, 20, 25, 30);

    echo count($arraySports); //8
    echo sizeof($arraySports); //8

    echo count($arrayNumbers); //7
    echo sizeof($arrayNumbers); //7

  ?>
</body>
</html>