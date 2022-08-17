<?php
session_start();



echo "{$_SESSION["nomeCliente"]} comprou um {$_SESSION["nomeProduto"]} e custou {$_SESSION["valorProduto"]} reais. Ele levou {$_SESSION["quantidadeProduto"]} unidades, sendo que a preferência pelo preço de pagamento é o {$_SESSION["preferenciasCliente"]["preco"]}";