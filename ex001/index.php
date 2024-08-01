<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Carro{
            public $marca;
            public $modelo;
            private $documento;

            public function __construct($marca,$modelo){
                $this->marca = $marca;
                $this->modelo = $modelo;
            }

            public function exibirInfo(){
                echo "Carro: {$this->marca}
                {$this->modelo}";
            }

        }
        //Instanciando um objeto
        $carro1 = new Carro("Toyota","Corolla");

        $carro1->exibirInfo()

        

        



    ?>
</body>
</html>