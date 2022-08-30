<?php 
session_start(); // iniciar uma sessão no PHP, com objetivo de transportar dados de uma página para outra

require_once("../classes/Evento.php");
require_once("../model/EventoDAO.php");

$meuEvento = new Evento();
$meuEventoDAO = new EventoDAO();



if(isset($_POST["cadastrar"])){
    $_SESSION["mensagem"] = $meuEvento -> inicio($_POST, $_FILES['banner']);
    if($_SESSION["mensagem"]["status"]){
    $meuEventoDAO->inserir($meuEvento);
    header("Location: ../view/CadastroView.php"); // Redirecionando o usuário para a página CadastroView.php
    die();
}
}
if(isset($_POST["atualizar"])){
    $_SESSION["atualizar"] = $meuEvento->inicio($_POST, $_FILES['banner']);
    if($_SESSION["atualizar"]["status"]){
        $meuEventoDAO->atualizar($meuEvento, $_POST["atualizar"]); // estamos passando como parâmetro um objeto Evento e o id do evento que esta atriubuído ao $_POST["atualizar"]
    }
    header("Location: ../view/AtualizarEventoView.php");
}


// echo "<pre>";
//     print_r($meuEventoDAO -> consultar());
// echo "</pre>";

/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<hr>";


echo "<pre>";
print_r($_FILES);
echo "</pre>";
*/