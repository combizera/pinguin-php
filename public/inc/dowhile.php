<h2 class="h2">Do/While</h2>
<h3>Do/While Padrão</h3>
<?php
    $number = 0;

    do {
        echo "Não deu certo, o número é: $number <br>";
        $number++;
    } while ($number < 10)
?>
<hr>
<h3>Do/While Booleano</h3>
<?php
    $number = 0;
    $continua = true;

    do {
        echo "Não deu certo, o número é: $number <br>";
        $number++;

        if($number === 10){
            $continua = false;
        }
    } while ($continua);
?>
<hr>