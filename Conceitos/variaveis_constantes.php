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
       define('BD_URL', 'endereco_db_dev');
       define('BD_USUARIO', 'usuario_dev');
       define('BD_SENHA', 'senha_dev');


       //... Logica ..//
       

       echo BD_URL . '<br/>'; 
       echo BD_USUARIO . '<br/>';
       echo BD_SENHA ;
    ?>
</body>
</html>