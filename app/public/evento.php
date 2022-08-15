<?php
date_default_timezone_set("America/Sao_Paulo"); // Alterando o fuso horário do servidor
$nomeEvento =($_POST)["nomeEvento"];
$dataEvento =($_POST)["dataEvento"];

echo "O {$nomeEvento} vai acontecer na data {$dataEvento}";

echo "<hr>";



// Mostrando vetores de forma completa  
// print_r($_POST);
var_dump($_POST);  // Mostra a quantidade de elementos dentro do $_POST, o tipo de dado e a quantidade de caracteres 

function validaData ($data){
    $dataEvento = new DateTime($data); // esta classe precisa de uma data no padrão americano para funcionar
    $dataAtual = new DateTime("now"); // estamos pegando a data atual

    echo $dataEvento->format("d/m/Y"); // mostrando a data no padrão brasileiro
    
    echo "<br>";
    print_r($dataAtual);

    if($dataEvento > $dataAtual){
        echo "<p> Data do evento cadastrada com sucesso!</p>";
    } else{
        echo "<p>A data do evento não pode ser igual ou anterior a data atual!</p>";
    }


}
validaData($dataEvento);