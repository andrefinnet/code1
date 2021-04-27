<?php
// exemplo da utilização do += e o -= :
$valor_total = 0; // inicializa com 0;

$valor_total += 100; // pega o 0 adiciona + 100 = 100;

$valor_total += 25; // pega o 100 adiciona + 25 = 125;

echo " Valor da Somatoria e: " . $valor_total . "<br>"; // exibo o valor da minha variavel com o subtotal 125;
echo "<br>";
// estou atribuindo os valores com +=

//////////////////////////////////////////////////////////////////////////////

//Agora vou usar a Regra de Desconto:

$valor_total1 = 0; // inicializa com 0;

$valor_total1 += 100; // adiciona + 100 ao valor inicial 0;

$valor_total1 += 25; // adiciona 25 que fica um total de = 125;

//decrescimo:

$valor_total1 -= 50; // Da um desconto de 50;

echo "Valor com desconto de 50 pontos:  " . $valor_total1 . "<br>";
// valor do desconto e mostrado acima!; (R$ 75):
// para utilizar as porcentagem usamos *= (porcentagem):
// Suponhamos que queriamos dar 10% de desconto nos produtos de uma loja:

$valor_total2 = 0; // inicializa com 0;

$valor_total2 += 100; //adiciona mais 100 ao valor de 0;

$valor_total2 += 25; // adiciona mais 25 igual a 125;

$valor_total2 -= 50; // da um desconto de 50 que vira 75.

$valor_total2 *= .9; // da um desconto de 10% em cima dos 75.
// so quero 90% desse valor;

echo "Esse e o valor com desconto de 10%:  " .  $valor_total2 . "<br>"; // esse e o valor final com o desconto de 10% sobre 75;


?>
