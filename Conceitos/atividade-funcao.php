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
    function impostoRenda($salario){
         $imposto = 0;
         if ($salario <= 1903.98){
             $imposto = 0;
         } elseif ($salario >1903.98 && $salario <= 2826.65){
             $imposto = ($salario*7.5)/100;
         } elseif ($salario >2826.65 && $salario <= 3751.05){
            $imposto = ($salario*15)/100;
        } elseif ($salario > 3751.05 && $salario <= 4664.68){
            $imposto = ($salario*22)/100;
        } else {
            $imposto = ($salario*27.5)/100;
        } 

        return $imposto ;

    }

    echo impostoRenda(5000);
    ?>

    
    
</body>
</html>