<?php

class Veiculo{
    private $marca;
    private $modelo;
    private $ligado = false; // para informar se o veículo está ligado!
    protected $nomeClasse; // somente as classes filhas poderão acessar esse atributo diretamente

    public function __construct($marca, $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->nomeClasse = get_class($this);
    }
    
    public function ligar(){
        $this->ligado = true;
        echo "<br>O {$this->nomeClasse} modelo {$this->modelo} e marca {$this->marca} está ligado!";
    }

    public function desligar(){
        $this->ligado = false;
        echo " <br>O {$this->nomeClasse} de modelo {$this->modelo} e marca {$this->marca} está desligado!";
    }

    public function estaLigado(){
        echo ($this->ligado) ? "O veículo está ligado!" : "O veículo está desligado!";
        
        /*
        if($this->ligado){ 
            echo "<br>O veículo está ligado! :)";
        }
        else{
            echo "<br>O veículo está desligado! ";
        }
        */
    }
}

// A classe Carro está herdando todas as informaçoes(atributos e metodos) da classe Veiculo
class Carro extends Veiculo{
    public function ligarParaBrisa(){
        echo "{$this->nomeClasse} ligou o para-brisa!<br>";
    }
}

// criando a classe moto e herdando da classe Veiculo
class Moto extends Veiculo{
    public function descansoAtivo(){
        echo "{$this->nomeClasse} está com o apoio do descanso!";
    }
}

