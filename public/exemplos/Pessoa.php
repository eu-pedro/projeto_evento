<?php

class Pessoa{

    private $nome;  
    private $idade;
    private $peso;
    private $corDosOlhos;

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
    function __get($atributo){
        return $this->$atributo;
    }
    function __set($atributo, $valor){
        // if($atributo == "nome"){
        //     $this->$atributo = strtoupper($valor);
        // } 
        // else {
        //     $this-> $atributo = $valor;
        // }
        $this->$atributo = $valor;
        
        
    }



    // Encapsulamento 
    /*
    function getNome(){
        return strtoupper($this->nome); // strtoupper() retorna tudo maiúsculo e strtolower() retorna minúsculo

    }
    function setNome($valor){
        $this->nome = $valor;
    }
    */

}

$pessoa1 = new Pessoa("Pedro", 19, 80,"verdes");
// $pessoa1->setNome("julio");
$pessoa1->nome = "Jose";
$pessoa1->idade= 23;

// echo $pessoa1->getNome();
echo "{$pessoa1->nome} tem {$pessoa1->idade} anos e pesa {$pessoa1->peso}kg e tem olhos {$pessoa1->corDosOlhos}";





/*
$pessoa1 ->Falar("Olá mundo! Sou uma pessoa"); // acessando o método falar da classe
echo "<br>";

$pessoa1->nome = "Fabricio";
echo "Meu nome é {$pessoa1->nome}, minha idade é {$pessoa1->idade} anos, eu peso {$pessoa1->peso} kg <hr>";

$pessoa1 -> Comer("Lasanha <hr>"); // acessando o método falar da classe

$pessoa2 = new Pessoa("Maria", 23, 55, "Azul");

echo "Olá, me chamo {$pessoa2->nome} e meu peso é {$pessoa2->peso} kg";
*/