<?php

class Funcionario{
    public $nome;
    public $codigo;
    public $salario;


    function __construct($nome, $codigo, $salario)
    {
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->salario = $salario;
    }

    function relatorio($texto){
        // echo "O funcionario {$this->nome}, de código {$this->codigo}, recebe {$this}";   UMA OUTRA FORMA DE FAZER
        echo $texto;
    }



}
$receber = new Funcionario("Pedro", 01, 1212.98);

$receber -> relatorio("O funcionario {$receber->nome} de código {$receber->codigo} recebe {$receber->salario}");