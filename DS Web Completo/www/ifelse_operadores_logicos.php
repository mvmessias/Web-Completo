<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Operadores de Comparação </title>
</head>
<body>

    <?php 
    // OPERADORES CONDICONAIS / COMPARAÇÃO
        // ==
        // ===
        // != ou <>
        // !==
        // <
        // >
        // <=
        // >=
    // operadores logicos
    // E: && ou AND -> retorna verdadeiro se todos os resultados das expressões forem verdadeiro
    // OU: || ou OR -> retorna verdadeiro se pelo menos um dos resultados forem verdadeiro
    // XOR: XOR -> retorna verdadeiro se uma das expressões for verdadeira e a outra falsa, ou vice versa.
    // ! -> inverte o resultado retornado pela expressão
    
    if((22 == 22 && 3 == 3) || 5 != 5){
            echo 'Verdadeiro';
       }else{
            echo 'Falso';
       }
    
    ?>

    
</body>
</html>