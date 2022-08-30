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
        
        $preparacao->bindValue(":nome",$evento->nomeEvento); // BindValue = Ligação de Valor, do apelido com o valor final
        $preparacao->bindValue(":dataEvento", $evento->dataEvento);
        $preparacao->bindValue(":foto",$evento->banner);

        $preparacao->execute(); // MÉTODO DO PDO PARA EXECUTAR O COMANDO CONTIDO NA VARIÁVEL $PREPARACAO

        if($preparacao->rowCount() > 0){
            // rowCount verifica se alguma linha foi acrescentada
            return true;
        }
        else{
            return false;
        }
    }

    public function consultar($dataBr = false){


        $sql = "SELECT * FROM {$this->tabela}";
        $preparacao = Conexao::getConexao()->prepare($sql);

        $preparacao->execute();

        if($preparacao->rowCount() > 0){
            $resultado = $preparacao->fetchAll(PDO::FETCH_ASSOC); // o método fetchAll() retorna todos os registros do banco de dados e o valor PDO::FETCH_ASSOC faz a associação do nome dos campos da tabela com os índices no vetor

        if($dataBr){

            

            foreach($resultado as $indice => $itens){
                // a variável indice está percorrendo $resultado e $itens está percorrendo os conteúdos de indice
                $data = new DateTime($itens["data_evento"]);
                $resultado[$indice]["data_evento"] = $data->format("d/m/Y");


            }
        }
        return $resultado;

        }

        else{
            return false;
        }
    }

    public function consultarUnico($id){
        $sql = "SELECT * FROM {$this->tabela} WHERE id_evento = :id";
        $preparacao = Conexao::getConexao()->prepare($sql);

        $preparacao->bindValue(":id", $id);

        $preparacao->execute();

        if($preparacao->rowCount() > 0){
            return $preparacao->fetchAll(PDO::FETCH_ASSOC); // o método fetchAll() retorna todos os registros do banco de dados e o valor PDO::FETCH_ASSOC faz a associação do nome dos campos da tabela com os índices no vetor

        
        }

        else{
            return false;
        }


    }
   
    public function atualizar(Evento $evento, $id){
        $sql = "UPDATE {$this->tabela} SET nome_evento = :nome, data_evento = :dataEvento, foto_evento = :foto WHERE id_evento = :id";

        $preparacao = Conexao::getConexao()->prepare($sql);
        $preparacao->bindValue(":nome", $evento->nomeEvento);
        $preparacao->bindValue(":dataEvento", $evento->dataEvento);
        $preparacao->bindValue(":foto", $evento->banner);
        $preparacao->bindValue(":id", $id);

        $preparacao->execute();

        if($preparacao->rowCount() > 0){
            return true;
        }
        return false;

    }

    public function deletar(){

     }
}