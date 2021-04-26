<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso php</title>
</head>
<body>
  
  <?php
    $num=1;
  while($num <10 ){
    $num ++ ;
    if($num == 2 || $num == 6){
        continue; // Pula para proxima instrução do laço
    }
      echo "hello Word <br/>";
    
    /*  break ; Forçar parada*/
  }
  ?>
   
    
</body>
</html>

