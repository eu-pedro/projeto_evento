<?php
require("heranca2.php");

$p1 = new Pessoa("Fulano", 19);
$p1->relatorio();
echo "<hr>";
$a1 = new Aluno("Luis", 18, 01);
$a1->relatorio();