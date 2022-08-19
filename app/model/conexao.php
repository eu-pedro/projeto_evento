<?php 

class Conexao{
    private static $instancia;

    public static function getConexao(){
        if(!isset(self::$instancia)){
            self::$instancia = new PDO("
                mysql:host=localhost;dbname=projeto_evento
                

            "); // Object Data PHP = Objeto PHP de data, permite o acesso ao banco de dados
        }
    }
}