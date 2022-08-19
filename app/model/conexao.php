<?php 
// CLASSE QUE IRÁ FAZER A CONEXÃO COM O BANCO DE DADOS
class Conexao{
    private static $instancia;

    public static function getConexao(){
        if(!isset(self::$instancia)){
            self::$instancia = new PDO("mysql:host=localhost;dbname=projeto_evento","root","");
                // Object Data PHP = Objeto PHP de data, permite o acesso ao banco de dados, 1- tipo banco de dados, 2- servidor, 3- nome do banco, 4- nome do usuário do banco, 5- senha 

            
        }

        return self::$instancia;
    }
}