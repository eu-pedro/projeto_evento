<?php 
// DAO = data acess object, padrão de projeto de acesso a dados

require_once("../classes/Evento.php");
require_once("Conexao.php");

class EventoDAO{
    private $tabela = "evento";

    // estamos passando como parâmetro uma variável do tipo evento, ou seja, o método irá esperar receber o valor que seja um objeto da classe Evento.
    public function inserir(Evento $evento){
        // RECEBER UMA VARIÁVEL DO TIPO EVENTO(da classe Evento)
        $sql = "INSERT INTO {$this->tabela} VALUES(NULL,:nome,:dataEvento,:foto)";
        // 4 CAMPOS NA TABELA QUE PRECISAM SER DETERMINADOS NO VALUE(1- ID RECEBE NULL POIS É AUTO INCREMET)
        $preparacao = Conexao::getConexao()->prepare($sql); // variável recebendo o banco de dados
        
        $preparacao->bindValue(":nome,$evento->nomeEvento");
        $preparacao->bindValue(":dataEvento, $evento->dataEvento");
        $preparacao->bindValue(":foto,$evento->banner");

        $preparacao->execute(); // MÉTODO DO PDO PARA EXECUTAR O COMANDO CONTIDO NA VARIÁVEL $PREPARACAO

        if($preparacao->rowCount() > 0){
            // rowCount verifica se alguma linha foi acrescentada
            return true;
        }
        else{
            return false;
        }
    }

    public function consultar(){

     }

    public function atualizar(){

     }

    public function deletar(){

     }
}