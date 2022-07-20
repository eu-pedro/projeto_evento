<?php
$nomeEvento =($_POST)["nomeEvento"];
$dataEvento =($_POST)["dataEvento"];

echo "O {$nomeEvento} vai acontecer na data {$dataEvento}";

echo "<hr>";



// Mostrando vetores de forma completa  
// print_r($_POST);
var_dump($_POST);  // Mostra a quantidade de elementos dentro do $_POST, o tipo de dado e a quantidade de caracteres 

function validaData ($data){
    $dataEvento = new DateTime($data); // esta classe precisa de uma data no padrão americano para funcionar

    echo $dataEvento->format("d/m/Y"); // mostrando a data no padrão brasileiro
}
validaData($dataEvento);