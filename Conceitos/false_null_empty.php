<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curso php</title>
</head>
<body>
    
    <?php
    // false (true / false) -> tipo de variavél boolean
    // null e empity-> Valores especiais

    $funcionario1 = null;
    $funcionario2 = '';
    $funcionario3 = false ;

    //valores null
    if(is_null ($funcionario1)){
        echo 'Sim a variavel é null';
    } else{
        echo 'não é variavel não é null';
    }

    echo '<br/>';

    if(is_null ($funcionario2)){
        echo 'Sim a variavel é null';
    } else{
        echo 'não é variavel não é null';
    }

    echo '<hr>';

     //valores vazios
     if(empty ($funcionario1)){
        echo 'Sim a variavel é vazia';
    } else{
        echo 'não é variavel não é vazia';
    }

    echo '<br/>';

    if(empty ($funcionario2)){
        echo 'Sim a variavel é vazia';
    } else{
        echo 'não é variavel não é vazia';
    }

    echo '<hr>';

    //valores false
   if(is_null ($funcionario2)){
        echo 'Sim a variavel é False';
    } else{
        echo 'não é variavel não é False';
    }

   echo '<br/>';

   if(empty ($funcionario3)){
       echo 'Sim a variavel é False';
   } else{
       echo 'não é variavel não é False';
   }
    ?>
</body>
</html>