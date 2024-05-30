<!doctype html>
<html lang="pt-br">
<head>
    <?php include 'inc/head.php'; ?>
    <title>Arrays</title>
</head>
<body>
<div>
    <h1>Arrays</h1>
</div>

<h2>Declarando Arrays</h2>
<?php
    $frutas = ['maca', 'uva', 'banana'];

    print_r($frutas);
?>
<h4>Acessando Array</h4>
<ul>
    <?php
        foreach ($frutas as $key => $fruta) {
            echo "<li>ID [$key]: $fruta </li>";
        }
    ?>
</ul>

<hr>
<h2>Outros tipos de Array</h2>
<?php
    $array = [
        "name" => "Ygor",
        "anos" => 25,
        "status" => false,
    ];

    print_r($array);
?>

<h4>Acessando Outros tipos de Array</h4>
<ul>
    <?php
        foreach ($array as $item) {
            $type = gettype($item);
            echo "<li>$item do tipo $type</li>";
        }
    ?>
</ul>

<hr>
<h2>Array de Arrays</h2>
<?php
    $users = [
        ['name' => 'ygor', 'nick' => 'combizera'],
        ['name' => 'zezinho', 'nick' => '20matar70correr'],
        ['name' => 'aninha', 'nick' => 'aninha.com'],
    ];

    print_r($users);
?>

<h4>Acessando Array de Arrays</h4>
<ul>
    <?php
        foreach ($users as $user) {
            echo '<li>nome: ' . $user['name'] . '(' . $user['nick'] . ')<br></li>';
        }
    ?>
</ul>

<h6>Outra forma</h6>
<?php
    foreach ($users as $user) {
        foreach ($user as $data){
            echo "$data<br>";
        }
    }
?>

<hr>

<h2>Adicionando dados no Array</h2>
<?php
    $frutas = ['damasco', 'pera', 'morango'];

    print_r($frutas);

    $frutas[] = 'melão';
    print_r($frutas);

//    porem esse array_push é bom usar com mais de um elemento, adicionar pelo menos 2
    array_push($frutas, 'melancia', 'jabuticaba');
    print_r($frutas);

?>

<h4>Outro modelo</h4>
<?php
    $user = ['name', 'aninha'];
    print_r($user);

    $user['email'] = 'aninha@gmail.com';

    print_r($user);
?>

</body>
</html>
