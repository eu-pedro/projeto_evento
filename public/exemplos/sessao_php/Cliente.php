<?php
session_start();
$nome = "Beltrano";
$idade = 26;
$preferencias = [
    "tipo" => "Calçados",
    "preco" => "Mais barato",
    "pagamento" =>"Cartão de dábito",
];


// CRIANDO VARIÁVEIS DE SESSÃO
$_SESSION["nomeCliente"] = $nome;
$_SESSION["idadeCliente"] = $idade;
$_SESSION["preferenciasCliente"] = $preferencias;
echo "{$nome} tem {$idade} anos e gosta de pagar a {$_SESSION["nomeProduto"]} com a forma de pagamento {$preferencias['pagamento']}";
header("Location: /Produto.php");