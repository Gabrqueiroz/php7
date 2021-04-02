<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <h1>If Else Pratica </h1>
   
    

   <?php
       $cartao_loja= true ;
       $valor_compra=1500; 
       $frete = 50 ;
       if($valor_compra > 400 && $cartao_loja == true){
           echo 'Desconto Aprovado';
       } else{
        echo 'Desconto Negado';
       }
    ?>

    <p>Detalhes do Pedido</p>
    <hr>
    <p>Possui Cartão da loja</p>
    <?php
    if ( $cartao_loja == true){
        echo ' SIM';
    } else {
        echo ' Não';
    }
    ?>

    <h2>Sua Compra foi no valor de <em> <br> R$ <?= $valor_compra?></em></h2>
    <br>
    
    <h2>Recebeu Desconsto no frete  ? <br>
    <?php
    if ( $frete > 20){
        echo ' SIM';
        echo "<br/> O frete Custaria R$ $frete ";
    } else {
        echo ' Não';
    }
    ?>

    </h2>
    
</body>
</html>