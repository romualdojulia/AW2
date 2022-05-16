<!DOCTYPE html>
<html>
<body>

<?php

 $num = 5;

  if($num > 0){
    $valor = $num;
    for($i = ($valor - 1); $i > 0; $i--){
      $valor = $valor * $i;
    }
  }else{
    $valor = 0;
  }

  echo "{$num}! = {$valor}";
?>

</body>
</html>
