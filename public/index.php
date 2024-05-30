<!doctype html>
<html lang="pt-br">
<head>
    <?php include 'inc/head.php'; ?>
    <?php $title = "POO - Polimorfismo" ?>
    <title><?= $title ?></title>
</head>
<body>
<div>
    <h1><?= $title ?></h1>
</div>

<h2>Polimorfismo</h2>

<?php
    abstract class Animal
    {
        protected bool $isMoving = false;
        
        public function mover(): static
        {
            $this->isMoving = true;
            return $this;
        }

        public abstract function emitirSom(): string;
    }

    class Humano extends Animal
    {
        public function emitirSom(): string
        {
            return "blablabla";
        }
    }

    class Passaro extends Animal {
        protected bool $estaVoando = false;

        public function emitirSom(): string
        {
            return "piu piu";
        }

        public function voar()
        {
            $this->estaVoando = true;
            parent::mover();
        }
    }

    $humano = new Humano();
    $humano->mover();

    echo $humano->emitirSom();

    var_dump($humano);

    echo "<br><br><hr>";

    $passaro = new Passaro();
    $passaro->voar();

    echo $passaro->emitirSom();

    echo "<br><br>";

    var_dump($passaro);

?>

</body>
</html>
