<?php
session_start();
$nomeProduto = "Havaiana";
$preco = 99.99;
$quantidade = 4;



echo "{$_SESSION["nomeCliente"]} decidiu comprar o produto {$nomeProduto} e custou R$ {$preco} e vai levar {$quantidade} unidade pagando com {$_SESSION["preferenciasCliente"]["pagamento"]}! ";

// CRIANDO VARIÁVEIS DE SESSÃO
$_SESSION["nomeProduto"] = $nomeProduto;
$_SESSION["valorProduto"] = $preco;
$_SESSION["quantidadeProduto"] = $quantidade;


header("Location: /Venda.php");
