<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Variáveis</title>
    </head>
    <body>
        <h1>Hello World!</h1>

        <h1>
        <?php
            $saudacao = "Olá";
            $localidade = "Mundo";
            $dia = 1;

            $titulo = $saudacao . " " . $localidade . "!";
//            echo "Olá Mundo!";
            echo $titulo;
            echo PHP_EOL . "Hoje é dia " . $dia . "!";
        ?>
        </h1>

        <a href="">oi</a>
    </body>
</html>