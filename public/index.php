<!doctype html>
<html lang="pt-br">
<head>
    <?php include 'inc/head.php'; ?>
    <?php $title = "POO - Heranças" ?>
    <title><?= $title ?></title>
</head>
<body>
<div>
    <h1><?= $title ?></h1>
</div>

<h2>Classes - Início</h2>

<?php
    class Veiculo {
        protected string $tracao = 'animal';
        protected int $rodas = 0;
        protected bool $hasMotor = false;
        protected bool $emMovimento = false;
        private ?string $tipoCombustivel = null;

        public function movimentar(string $combustivel):self
        {
            $this->emMovimento = true;
            $this->setCombustivel($combustivel);

            return $this;
        }

        public function parar():self
        {
            $this->emMovimento = false;

            return $this;
        }

        public function emMovimento():bool
        {
            return $this->emMovimento;
        }

        public function __construct()
        {
            if($this->tracao === 'automotor'){
                $this->hasMotor = true;
            }
            return $this;
        }

        private function setCombustivel($combustivel):void
        {
            $this->tipoCombustivel = $combustivel;
        }
    }

    class Moto extends Veiculo
    {
        protected string $tracao = 'automotor';
        protected int $rodas = 2;
    }

    class Skate extends Veiculo
    {
        protected string $tracao = 'deus';
        protected int $rodas = 4;
    }

    $skate = new Skate();
    $moto = new Moto();

    var_dump($moto->movimentar('gasolina')->emMovimento());
    echo "<br><br>";
    var_dump($moto);
    echo "<br><br>";
    var_dump((new Veiculo()));
    echo "<br><br>";
    var_dump($skate);
?>

<hr>

<h2>Acessando métodos públicos e privados</h2>

<?php
    echo $moto->movimentar('gasolina')->emMovimento();

    class Caminhao extends Veiculo{
        protected string $tracao = 'automotor';
        protected int $rodas = 12;
    }
    $caminhao = new Caminhao();
    $caminhao->movimentar('diesel')->emMovimento();

    echo "<br><br>";
    var_dump($caminhao);

    echo "<br><br>";
    $caminhao->parar();
    var_dump($caminhao);
?>

</body>
</html>
