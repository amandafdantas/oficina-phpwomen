<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oficina PHPWomen - Exemplo 02</title>
</head>
<body>

    <?php
        
        $a = 5;
        $b = 5;
        if ($a > $b) {
            echo "a é maior que b";
        } elseif ($a == $b) {
            echo "a é igual a b";
        } else {
            echo "a é menor que b";
        }

        echo "<br>";

        echo "<br> Usando While: <br>";
        $i = 0;
        while ($i <= 10) {
            if ($i % 2 == 0) {
                echo "O número " . $i . " é par.";
                echo "<br>";
            } else {
                echo "O número " .$i. " é ímpar.";
                echo "<br>";
            }
        $i = $i + 1;
        }
        
        echo "<br> Usando For: <br>";
        for ($i = 0; $i < 5 ; $i++) { 
            echo "Sou o número " . $i;
            echo "<br>";
        }

        echo "<br>Tabuada de 5:<br>";
        for ($i = 0; $i <= 10; $i++) { 
            echo "5 x $i = " . (5 * $i);
            echo "<br>";
        }


   ?>
    
</body>
</html>