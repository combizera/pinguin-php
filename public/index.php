<!doctype html>
<html lang="pt-br">
<head>
    <?php include 'inc/head.php'; ?>
    <?php $title = "Scope Resolution Operator" ?>
    <title><?= $title ?></title>
</head>
<body>
<div>
    <h1><?= $title ?></h1>
</div>

<div>
    <h3>Constantes</h3>
    <?php
        class MyExampleConstant {
            public const MY_CONSTANTE = 'algumaCoisa';
        }
    ?>
<?= MyExampleConstant::MY_CONSTANTE ?>
</div>
<div>
    <h3>Self</h3>
    <?php
        class MyExampleSelf
        {
            protected const MESSAGE = 'mensagem legal';
            public function showMessage():string
            {
//            return MyExampleSelf::MESSAGE;
                return self::MESSAGE;
            }
        }
    ?>
    <?php
        $message = new MyExampleSelf();
        echo  $message->showMessage();
    ?>
</div>

<div>
    <h3>Static</h3>
    <?php
        class MySuperStaticComponent{
            public static function who()
            {
                return __CLASS__;
            }

            public function greetings()
            {
//                return 'hello from ' . self::who();
                return 'hello from ' . static::who();
            }
        }

        class MyStaticComponent extends MySuperStaticComponent{
            public static function who():string
            {
                return __CLASS__;
            }
        }

        $superStatic = new MySuperStaticComponent();
        echo $superStatic->greetings();

        echo "<br><br>";
        $static = new MyStaticComponent();
        echo $static->greetings();
    ?>
</div>

<div>
    <h3>Parent</h3>
    <?php
        class Veiculo
        {
            protected bool $movendo = false;
            public function ligarMotor():void
            {
                $this->movendo = true;
            }
        }

        class Moto extends Veiculo
        {
            protected $isOnNeutral = true;
            public function ligarMotor():void
            {
                $this->isOnNeutral = false;

                parent::ligarMotor();
            }
        }

        $moto = new Moto();
        var_dump($moto);
        $moto->ligarMotor();
        echo "<br><br>";
        var_dump($moto);

    ?>

</div>

</body>
</html>
