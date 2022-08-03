<?php 
include("heranca1.php");
$v1 = new Veiculo("Fiat","Argo");

$v1->ligar();
$v1->desligar();
echo "<br>";
$v1->estaLigado();

echo "<hr>";
$c1 = new Carro("Chevrolet", "Onix");
$c1-> ligar();
echo "<br>";
$c1->ligarParaBrisa();

// instanciando a classe Moto

$m1 = new Moto("Honda", "Bis");
$m1->descansoAtivo();


