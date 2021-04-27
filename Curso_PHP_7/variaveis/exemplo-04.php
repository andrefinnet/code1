<?php

// variaveis pré-definidas, variaveis superglobais:
// quais são as variaveis pré-definidas:
//array superglobal.
$nome = (int)$_GET["a"]; // teremos todas as variaveis atraves da URL, de um metodo GET. 
//var_dump($nome);// usando o tipo e o valor;
// toda a informação de vir por $_GET ou $_POST ele sempre virá string;
//Como pegar o ip do usuario:

$ip = $_SERVER["REMOTE_ADDR"]; //$dolar server pega informações do ambiente!
echo "<br>";
$ips = $_SERVER["SCRIPT_NAME"]; // para saber informações e log
echo $ip; // acessando do localhost pro localhost; 
echo $ips;
?>