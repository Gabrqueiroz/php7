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
    // in array -> retorna true ou false para a existencia do que estã sendo procurado
    // array_search() -> Retorna o indice do valor pesquisadp caso ele exista

    $lista_frutas = ['banana','maça','morango', 'uva'];
   /* echo '<pre>';
    print_r ($lista_frutas) ;
    echo '</pre>'; */

  // $existe = in_array('uva', $lista_frutas);
    //true - texto 1
    //false - vazio
   // $existe = array_search('uvq', $lista_frutas);
    //null - vazio

   /* if ($existe != null ){
        echo 'Valor Existe' ;
    } else {
        echo ' Valor invalido';
    } */
    
    $lista_coisas = [
        'frutas' => $lista_frutas,
        'pessoas' => ['gabriel', 'joao', 'Paulo', 'Mateus']
    ];

    echo '<pre>';
        print_r ($lista_coisas);
    echo '</pre>';

    echo in_array('uva', $lista_coisas['frutas']);

    ?>

    
</body>
</html>