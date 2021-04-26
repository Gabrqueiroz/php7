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
  
  
   /* $array = array();
    $retorno = is_array($array);

    if($retorno){
        echo 'Sim é um array';
    } else{
        echo 'Não é Array';
    }

   $array = [1 => 'a', 7 => 'b', 18 => 'c'];
    echo '<pre>';
        print_r ($array);
    echo '/<pre>';

    $chaves_array = array_keys($array);
    echo '<pre>';
        print_r ($chaves_array);
    echo '/<pre>'; 

    $array = array('notebook', 'Teclado',  'Mouse',  'Fone', );
    echo '<pre>';
        print_r ($array);
    echo '/<pre>';

    sort($array); // true ou false

    echo '<pre>';
    print_r ($array);
    echo '/<pre>';

    $array = array('notebook', 'Teclado',  'Mouse',  'Fone', );
    echo '<pre>';
        print_r ($array);
    echo '/<pre>';

    asort($array); // true ou false

    echo '<pre>';
    print_r ($array);
    echo '/<pre>';
    ?>
    */

   /* $array = array('notebook', 'Teclado',  'Mouse',  'Fone');
    echo '<pre>';
        print_r ($array);
        echo count($array);
    echo '/<pre>';*/

    /*$array1 = ['osx', ' Windows'];
    $array2 = array('linux');
    $array3 = ['Solaris'];

    $novo_array = array_merge($array1, $array2, $array3);
    echo '<pre>';
    print_r ($novo_array);
    echo '/<pre>';*/

    /*$string = '04/06/1997';
    $array_retorno = explode('/', $string);
    echo '<pre>';
    print_r ($array_retorno);
    echo '</pre>';*/
    
    $array = ['z', 'x', 'a'];
    $string_retorno = implode(',', $array);
    echo '<pre>';
    print_r ($string_retorno);
    echo '</pre>';
  ?>
   
    
</body>
</html>

