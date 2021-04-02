<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    $idade= 35 ;
    $peso = 58;

    if( ($idade > 16 && $idade < 69) && $peso > 50){
        echo ' Apto';
    } else{
        echo ' Não Corresponde ';
    }
    ?>

</body>

</html>