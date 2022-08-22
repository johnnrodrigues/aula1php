<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <title>Projeto 1</title>
</head>
<body>
    <?php
    #Comentario
    // comentario
    /*
        code block
    */
        echo "Boa";
        echo "<br>";
        echo "<h1>Hello World2 </h1>";

        $nome = "Johnn";
        $idade = 99;
        $altura = 1.80;

        $prova1 = 8;
        $prova2 = 10;
        $soma = $prova1 + $prova2;
        $media = $soma / 2;

        $multiplicacao = $prova1 * $prova2;
        $subtracao = $prova1 - $prova2;
        $faltas = 21;

        CONST NOMECOMPLETO = "JOHNNY RODRIGUES EVANGELISTA";
        echo "<p>". NOMECOMPLETO . "</p>";
        echo "<br>";

        if ($media > 6 && $faltas <= 20) {
            echo "Sua média foi de $media.<br>
            e você teve $faltas, portanto...
            Parabéns, voce foi aprovado!";
        } else {
            echo "Sua média foi de $media.<br>
            e você teve $faltas, portanto...
            Você foi reprovado!";
        }


        for ($i = 1; $i < 5197; $i++) {
            if($i % 2 == 0) {
                echo $i. " é par <br>";
            
        } else {
            echo $i." é impar<br>";
        }
    }



    ?>
    
    <h1>Hello World </h1>
</body>
</html>