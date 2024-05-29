<!doctype html>
<html lang="pt-br">
<head>
    <?php include 'inc/head.php'; ?>
    <?php $config = include('inc/config.php'); ?>
    <?php include_once('inc/greetings.php'); ?>
    <title>Estruturas de Repetição</title>
</head>
<body>
<div>
    <h1>Include e Require</h1>

    <?php
        include 'header.php';
    ?>
</div>

<section id="table">
    <table>
        <thead>
            <tr>
                <th>Usuário</th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $config['user']; ?>
                </td>
                <td>
                    <?php echo $config['password']; ?>
                </td>
            </tr>
        </tbody>
    </table>
</section>

<hr>

<section id="greetings">
    <h2>Olá <?php echo $name ?></h2>
</section>
</body>
</html>
