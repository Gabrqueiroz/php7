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
    /*Recuperação Data Atual*/ 
   /* echo date('d/m/y H:i');

    //
    echo '<br/>';
    echo date_default_timezone_get();
    echo '<br/>';
    echo date_default_timezone_set('America/Sao_Paulo');
    echo '<br/>';
    echo date('d/m/y H:i');*/
    
    $data_inicial = '1997-06-04';
    $data_final = '2021-04-13';

    //timestamp
    //01/01/1970 -- $data_inicial - Segundo

    $time_inicial=strtotime( $data_inicial);
    $time_final=strtotime( $data_final);
    echo $data_inicial .'/'. $time_inicial . '<br/>';
    echo $data_final .'/'. $time_final . '<br/>';
    
    $diferenca_times = abs($time_final - $time_inicial); ///abs - inverte de negativo para positivo
    echo '<br/>';
    echo ' A diferença de segundo é de :'. $diferenca_times ;

    $segundos_dia =24*60*60;
    echo '<br/>';
    echo ' Um dia tem :'. $segundos_dia.' segundos' ;

    $diferenca_dias_entre_datas = $diferenca_times / $segundos_dia;
    echo '<br/>';
    echo ' A diferença de dias é de :'. $diferenca_dias_entre_datas ;

    ?>

</body>
</html>