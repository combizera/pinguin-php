<h2 class="h2">For</h2>
<h3>For Positivo</h3>
<?php
    for ($i = 0; $i <= 10; $i++){
        echo "O número atual é: $i <br>";
    }
?>

<hr>

<h3>For Negativo</h3>
<?php
    for ($i = 10; $i >= 1; $i--){
        echo "O número atual é: $i <br>";
    }
?>

<hr>

<h3>For: Arrays e Indices</h3>
<?php
    $frutas = ['maca', 'uva', 'banana', 'melancia'];
    for ($i = 0; $i < count($frutas); $i++ ){
        echo "Temos a fruta: $frutas[$i]<br>";
    }
?>
