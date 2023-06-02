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

        $nome = 'Jorge';
        $cor = 'verde';
        $idade = 29;
        $atividade_preferida = 'andar de bicicleta';


        // Operador ponto -> . (concatena)
        echo 'Olá ' . $nome . ' vi que sua cor favorita é ' . $cor . ', e estou vendo que você possui  ' . $idade . ' anos e que gosta de ' . $atividade_preferida . '.<br>'; 
    

        // aspas duplas 
        echo "Ola $nome, vi que sua cor favorita é $cor";
    
    ?>

    
</body>
</html>