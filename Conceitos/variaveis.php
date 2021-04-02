<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome='Gabriel';
    $peso= 82.5;
    $idade=23;
    $fumante= true ;
    
    ?>

    <br>
    <h1> Ficha Cadastral </h1>
    <p> Nome : <?= $nome ?> </p>
    <p> Peso : <?= $peso ?> </p>
    <p> Idade: <?= $idade ?> </p>
    <p> Fumante : <?= $fumante ?> </p>
</body>
</html>