<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP </title>
</head>
<body>

    <h3>PóS Incremento</h3>
    <?php
    $a = 7;

    echo "O valor Contido em a é $a <br/>";
    echo 'O valor Contido em a após o incremento é '. $a++ .' <br/>';
    echo "O valor Atualizado em a é $a <br/>";

    ?>

    <h3>Pre Incremento</h3>
    <?php
    $a = 7;

    echo "O valor Contido em a é $a <br/>";
    echo 'O valor Contido em a no pré incremento é '. ++$a .' <br/>';
    echo "O valor Atualizado em a é $a <br/>";
    
    ?>

</body>
</html>