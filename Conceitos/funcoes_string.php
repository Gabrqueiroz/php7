<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
    $texto= 'Curso Completo PHP';
    //string to Lower - Minusculo
   
    /*echo"$texto"."<br/>";
    echo  strtolower($texto);*/

    //string to Upperr - maiusculo
    /*echo"$texto"."<br/>";
    echo  strtoupper($texto);*/

    //Upper case first- Primeira Maiuscula
    /* echo"$texto"."<br/>";
    echo  ucfirst($texto);*/

     //String Length- Quantidade de letras da string
    /* echo"$texto"."<br/>";
     echo  strlen($texto);*/

      //String Replace - Substitui parte da string
    /* echo"$texto"."<br/>";
    echo  str_replace('PHP', 'java', $texto);*/

     //Upper case first-Recorta utilizando array
     echo"$texto"."<br/>";
     echo  substr($texto, 0, 3);
   
    ?>
</body>
</html>