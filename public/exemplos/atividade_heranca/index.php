<?php 
require ("heranca3.php");
// instanciando a Classe Animal
$a1 = new Animal(20, "anfíbio", "marrom" );
$a1-> estaCacando();
$a1-> dormir();

echo "<hr>";
// instanciando a classe Cachorro
$c1 = new Cachorro(25, "mamífero", "branca", "pibull");
$c1->uivar();

echo "<hr>";
// instanciando a classe Peixe 
$p1 = new Peixe(5,"peixe", "cinza", "doce");
$p1->nadar();