<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oficina PHPWomen - Exemplo 03</title>
</head>
<body>

    <?php
        
        $valIni = 5;
        $valFin = 15;
        echo "Valores entre $valIni e $valFin: <br>";
        for ($i = $valIni; $i <= $valFin ; $i++) { 
            echo $i . " ";
        }

        echo "<br><br>";

        $nome = "Ana";
        switch ($nome) {
            case 'Ana':
                echo "Seja bem vinda " .$nome;
                break;
            
            case 'Pedro':
                echo "Seja bem vindo " .$nome;
                break;

            default:
                echo "Seja bem vindo";
        }

        echo "<br><br>";

        // Arrays Simples
        $cores = array("vermelho","azul","laranja","preto");
        $cores1 = ["vermelho","azul","laranja","preto"];
        echo $cores[1] . "<br>";  // azul
        echo $cores1[0]. "<br>";    // vermelho

        // Arrays Associativos
        $cores2 = array();
        $cores2["cor_1"] = "vermelho";
        $cores2["cor_2"] = "azul";

        /* associação default, começa do zero se não definir parametro */
        $cores2[] = "laranja";
        echo $cores2["cor_2"] . "<br>"; // azul
        var_dump($cores2);

        echo "<br>";

        // $frutas = array("maçã","laranja","morango","pera");

        $frutas = array();
        array_push($frutas, "maçã","laranja","morango","pera","banana");

        foreach ($frutas as $fruta) {
            echo "A fruta é: $fruta <br>";
        }
        
        echo "<br>";
        
        foreach ($frutas as $fruta) {
            if ($fruta == "pera") {
                echo "Pera está no índice " . array_search($fruta, $frutas) . "<br>";
            } else {
                echo $fruta. " não é pera <br>";
            }
        }

        function soma($a, $b) {
            $soma = $a + $b;
            return $soma;
        }

        $a = 2;
        $b = 3;

        $resultado = soma($a, $b);

        echo "A soma é: " . $resultado;
   ?>
    
</body>
</html>