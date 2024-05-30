<!doctype html>
<html lang="pt-br">
<head>
    <?php include 'inc/head.php'; ?>
    <title>Classes</title>
</head>
<body>
<div>
    <h1>Classes - O básico</h1>
</div>

<h2>Classes - Início</h2>
<?php
    class Pessoa
    {
        protected string $nome;
        protected int $idade;
        public ?string $nacionalidade = null;

        public function  __construct(string $nome, int $idade)
        {
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function andar():string
        {
            return $this->nome . ' está andando...';
        }

        public function falar():string
        {
            return $this->nome . ' está falando...';
        }

        public function getNome():string
        {
            return $this->nome;
        }

        public function getIdade():int
        {
            return $this->idade;
        }

        public function setNome(string $nome): self
        {
            $this->nome = $nome;

            return $this;
        }

        public function setIdade(int $idade): self
        {
            $this->idade = $idade;
            return $this;
        }

        public function tempoRestante(): int
        {
            return 100 - $this->idade;
        }
    }

    $pessoa = new Pessoa("ygor", 25);

    $pessoa->nacionalidade = "brasileira";
//    $pessoa->nome = "andrezinho gameplays";
    $pessoa->setNome("Andrezinho gameplays");
    var_dump($pessoa);

    echo "<br><br>";

    echo $pessoa->andar() . "<br>";
    echo $pessoa->falar() . "<br>";
    echo 'A ' . $pessoa->getNome() . ' tem mais ' . $pessoa->tempoRestante() . " anos de vida. <br>";
?>


</body>
</html>
