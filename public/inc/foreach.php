<h2 class="h2">Foreach</h2>
<h3>Foreach Simples</h3>
<?php
    $users = [
        [ 'name' => 'ygor', 'email' => 'ygor@gmail.com',],
        [ 'name' => 'andre', 'email' => 'andre@gmail.com',],
        [ 'name' => 'maria', 'email' => 'maria@gmail.com',],
        [ 'name' => 'julia', 'email' => 'julia@gmail.com',],
    ];

    foreach ($users as $user){
        echo
        "Nome: " . $user['name'] . "<br>",
        "Email: " . $user['email'] . "<hr>";
    }
?>

<h3>Foreach c/ Esteróides</h3>
<?php
    $users = [
        [ 'name' => 'ygor', 'email' => 'ygor@gmail.com',],
        [ 'name' => 'andre', 'email' => 'andre@gmail.com',],
        [ 'name' => 'maria', 'email' => 'maria@gmail.com',],
        [ 'name' => 'julia', 'email' => 'julia@gmail.com',],
    ];

    foreach ($users as $index => $user){
        echo
            "ID: " . $index . "Nome: " . $user['name'] . "<br>",
            $index . "Email: " . $user['email'] . "<hr>";
    }
?>
