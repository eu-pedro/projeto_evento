<?php

class Pessoa{

    public $nome;  
    public $idade;
    public $peso;
    public $corDosOlhos;

    // O método construtor irá inicializar os atributos com valores dinâmicos.

    function __construct($nome, $idade, $peso, $corDosOlhos)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->corDosOlhos = $corDosOlhos;
    }
    

    function Falar($texto){
        echo $texto;
    }

    function Comer($comida){
        echo "Minha comida preferida é: {$comida}";
    }

}

$pessoa1 = new Pessoa("Pedro", 19, 80,"Verde");
$pessoa1 ->Falar("Olá mundo! Sou uma pessoa"); // acessando o método falar da classe
echo "<br>";

echo "Meu nome é {$pessoa1->nome}, minha idade é {$pessoa1->idade} anos, eu peso {$pessoa1->peso} kg <hr>";

$pessoa1 -> Comer("Lasanha <hr>");

$pessoa2 = new Pessoa("Maria", 23, 55, "Azul");

echo "Olá, me chamo {$pessoa2->nome} e meu peso é {$pessoa2->peso} kg";
