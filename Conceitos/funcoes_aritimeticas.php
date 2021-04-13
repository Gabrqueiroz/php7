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
   
   $numero = 32.5;
    //ceil - Arredonda o nuemro pra cima
    echo ceil($numero);
    echo '<hr/>';
    //floor - Arredonda o valor pra baixo
    echo floor($numero);
    echo '<hr/>';
    //Round - Arredonda o valor com base nas casas decimais
    echo round($numero);
    echo '<hr/>';
    //Rand - Gera um numero inteiro aleatório
    echo rand(10, 100);
    echo '<br/>'. getrandmax();
    echo '<hr/>';
    //sqrt - Retorna a raiz Quadrada do numero
    echo sqrt($numero);
    echo '<br/>'.sqrt(8);

    ?>

</body>
</html>