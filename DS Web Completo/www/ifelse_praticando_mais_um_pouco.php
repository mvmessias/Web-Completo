<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <?php 
  
        //
    $usuario_possui_cartao_loja = true;
    $valor_compra = 500;

    $valor_frete = 50;
    $recebeu_desconto_frete = false;

    // OPERADOR TERNARIO ENCADEADOS (MUITO COMPLEXO)
    $valor_frete_aux = $usuario_possui_cartao_loja && $valor_compra >= 400 ? 0 : ($usuario_possui_cartao_loja && $valor_compra >= 300 ? 10 : ($usuario_possui_cartao_loja && $valor_compra >= 100 ? 25 : $valor_frete));
    $recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;
    $valor_frete = $valor_frete_aux;

    /*
    if($usuario_possui_cartao_loja && $valor_compra >= 400){
        $valor_frete = 0;

    }else if($usuario_possui_cartao_loja && $valor_compra >= 300){
        $valor_frete = 10;
       
    }else if($usuario_possui_cartao_loja && $valor_compra >= 100){
        $valor_frete = 25;
       
    }else{
        // ...
        $recebeu_desconto_frete = false;
    }
*/
    ?>

    <h1>Detalhes do Pedido</h1>
                                    <!-- <condição> ? true : false -->
        <p>Possui cartão da loja? <?= $usuario_possui_cartao_loja ? 'SIM' : 'NÃO'?>
            <?php 
                /*
                if($usuario_possui_cartao_loja){
                    echo 'SIM';
                }else{
                    echo 'NÃO';
                }
                */
            ?>
        </p>


    <p>Valor da compra: <?= $valor_compra ?></p>

    <p>Recebeu desconto no frete? 
    <?php

        $teste = $recebeu_desconto_frete ? 'SIM' : 'NÃO';
        echo $teste;
        /*
        if($recebeu_desconto_frete){
            echo 'SIM';
        }else{
            echo 'NÃO';
        }
        */
    ?>
    </p>

    <p>Valor do frete: <?= $valor_frete ?></p>

</body>
</html>