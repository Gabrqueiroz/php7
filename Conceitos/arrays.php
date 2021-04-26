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

/*$lista_frutas = array('Banana','Maça','Morango','Uva');*/
/*$lista_frutas = ['Banana','Maça','Morango','Uva'];
$lista_frutas [] = 'Limão';
echo '<pre>';
    var_dump($lista_frutas);
echo '</pre>';

echo '<br/>';

echo '<pre>';
    print_r($lista_frutas);
echo '</pre>';
echo "$lista_frutas[2]";*/

$lista_frutas = [
    'a'=>'Banana',
    'b'=> 'Maça', 
    'c'=>'Morango', 
    'd'=>'Uva'];

echo '<pre>';
    var_dump($lista_frutas);
echo '</pre>';

echo "$lista_frutas[b]";
?>

    
    
</body>
</html>