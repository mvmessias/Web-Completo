<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIMEIRA TAREFA PHP</title>
</head>
<body>
    <?php
    
    $idade = 16;
    $peso = 48;

    if(($idade >= 16 && $idade <= 69) && $peso >= 50){
        echo 'Atende aos requisitos';
    }else{
        echo 'Não atende aos requisitos';
    }
    
    ?>
    
</body>
</html>