<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        class Livro {
            private $titulo;
            private $autor;

            public function __construct($titulo,$autor){
                $this->titulo = $titulo;
                $this->autor = $autor;
            }
            public function exibirInfo(){
                echo "Livro: {$this->titulo}{$this->autor}";
            }

            public function setTitulo($novoTitulo){
                $this->titulo = $novoTitulo;
            }
            
            public function setAutor($novoAutor){
                $this->autor = $novoAutor;
            }
        }

        $livro1 = new Livro("Harry Potter","Amy whinehouse");

        $livro1->exibirInfo();
        
        $livro1->setTitulo("Game of Thrones");
        $livro1->setAutor("Michael Jackson");
        $livro1->exibirInfo();


        class Animal{
            private $nome;
            private $idade;

            public function __construct($nome,$idade){
                $this-> nome = $nome;
                $this-> idade = $idade;

            }

            public function setnovoNome($novoNome){
                $this->nome = $novoNome;
            }
            
            public function setidade($novoIdade){
                $this->idade = $novoIdade;
            }

            public function emitirSom(){
                echo ("Som do animal");
            }
        }

        class Cachorro extends Animal{
            public function latir(){
                echo("Au Au");
            }
        }


    ?>
</body>
</html>