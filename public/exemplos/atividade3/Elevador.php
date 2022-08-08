<?php 
class Elevador{
    private static $andarAtual;
    private static $totalAndares;
    private static $capacidadeElevador;
    private static $quantidadePessoas;
    private static $resultadoPessoas;

    public static function inicializar($capacidadeElevador, $totalAndares){
        self::$capacidadeElevador = $capacidadeElevador;
        self::$totalAndares = $totalAndares;
        echo "O elevador está iniciando!<br> A capacidade é para ". self::$capacidadeElevador ." pessoas e possui ". self::$totalAndares. "andares!" ;
    }

    public static function entrar(){
        self::$quantidadePessoas = 1;

        if(self::$resultadoPessoas > self::$capacidadeElevador){
            echo "A capacidade máxima do elevador foi atingida!";
        }
        else{
            echo "<br>Uma pessoa entrou no elevador! Total de pessoas no elevador: ". self::$resultadoPessoas += 1;
            echo "<br>";
        }
    }

    public static function sair(){
        if(self::$quantidadePessoas = 0){
            echo "Não há ninguem dentro do elevador!";
        }
        else{
            echo "Uma pessoa saiu do elevador!";
        }
    }

    public static function subir(){
        if($andarAtual = 5){
            echo "Você não pode subir mais um andar!";
        }
        else{

        }
    }

}