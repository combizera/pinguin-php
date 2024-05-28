<?php
//  AND: && and
//  OR: || or
//  NOT: !
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <h1>Estruturas de Controle</h1>

    <h2 class="h2">If</h2>
    <?php
        date_default_timezone_set('America/Sao_Paulo');
        $hora = date('H:i');

        if($hora >= '06:00' && $hora <= '12:00'){
            echo 'bundinha';
            echo $hora;
        } else {
            echo 'boa tarde/noiteee';
            echo $hora;
        }
    ?>

    <h2 class="h2">Switch</h2>
    <?php
        $number = rand(1, 3);

        switch($number){
            case 1:
                echo 'Número 1';
                break;
            case 3:
                echo 'Número não encontrado';
                break;
            default:
                echo 'Não encontrado';
                break;
        }
    ?>

    <h2 class="h2">Match</h2>
    <h3>Substituindo o switch</h3>
    <?php
        $number = rand(0, 3);

        $hello = match ($number){
            0 => 'Número 0',
            1 => 'Número 1',
            2 => 'Número 2',
            3 => 'Número 3',
            default => '?',
        };
        echo $hello;
    ?>
    <hr>
    <h3>Substituindo o if</h3>
    <?php
        $hora = date('H:i');
        $hello = match(true){
            $hora >= '06:00' && $hora <= '12:00' => 'Bom dia',
            default => ' boa tarde/noiteee',
        };

        echo $hello;
    ?>

</div>

</body>
</html>
