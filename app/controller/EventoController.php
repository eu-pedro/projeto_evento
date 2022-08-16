<?php 
session_start(); // iniciar uma sessão no PHP, com objetivo de transportar dados de uma página para outra

require_once("../classes/Evento.php");
$meuEvento = new Evento();


$_SESSION["mensagem"] = $meuEvento -> inicio($_POST, $_FILES['banner']);
header("Location: ../view/CadastroView.php"); // Redirecionando o usuário para a página CadastroView.php
die();


/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<hr>";


echo "<pre>";
print_r($_FILES);
echo "</pre>";
*/