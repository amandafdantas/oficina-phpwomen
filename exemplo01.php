<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo 01</title>
</head>
<body>

    <?php
        echo "Olá, eu sou um script PHP!";
        echo "<br>";
        $cor = "amarelo";
        echo $cor;
        echo "<br>";    // para pular de linha

        $vaiChover = true; // boolean
        $idade = 23; // integer
        $dolar = 3.88; // float
        $frase = "Hello World!"; // string
        
        /* Imprimindo com echo
        echo $vaiChover;
        echo $idade;
        echo $dolar;
        echo $frase;
        echo gettype($idade);
        */

        // Imprimindo com var_dump
        var_dump($vaiChover);
        echo "<br>";
        var_dump($idade);
        echo "<br>";
        var_dump($dolar);
        echo "<br>";
        var_dump($frase);
        echo "<br>";
        
        /* Concatenando Strings
        $a = "a";
        $b = "b";
        echo "($a + $b)";
        */
        
        // Somando Inteiros
        $a = 4;
        $b = 5;
        echo "O resultado é: " . ($a + $b);

        
    ?>
    
</body>
</html>