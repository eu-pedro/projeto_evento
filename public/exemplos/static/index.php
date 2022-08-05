<?php
require ("funcionario.php");
// $f1 = new Funcionarioo();
// $f1->relatorio("Paulo", 1200);

Funcionarioo::relatorio("Fulano", 1212);
Funcionarioo::setSalario(1212);
echo "<br>".Funcionarioo::getSalario();

