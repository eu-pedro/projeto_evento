<?php 
require ("classeLogin/login.php");
require ("apiLogin/login.php");

use classelogin\Login;
use apiLogin\Login as apiLogin;

$meuLogin = new \classeLogin\Login(); // 1º forma de utilizar namespace
$meuLogin->verificaLogin();

$meuLogin2 = new Login(); // 2º forma de utilizar namespace, usando o use.
$meuLogin3 = new apiLogin(); // 3º forma de usar, com o as, dando um apelido para ele