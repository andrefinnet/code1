<?php
// Tipos de Variaveis
/*
-variaveis do tipo String;
-variaveis do tipo inteiro;
-variaveis do tipo Boleano;
-variaveis do tipo float;
*/
$nome = "Andre Panizza dos Santos"; //string 
echo "Essa e uma variavel de string: <br> ". $nome ."<br>";
// string exibe a variavel nome;

$numero = 123456; //inteiro
echo "esse e o numero: ". $numero ."<br>";
// inteiro exibe variavel numero;

$boleano = true; //decisão
echo "esse e um valor boleano true ou false: <br> " . $boleano . "<br>";

$floats = 1.34; //tipo Ponto flutuante
echo "essa variavel e do tipo quebrada, ou ponto flutuante: <br> " . $floats . "<br>";

// para exibir o tipo de dado e o tamanho usamos var_dump, e mais utilizado para objetos e arrays:
var_dump($nome) . "<br>"; // estou exibindo o tipo e o tamanho dessa variavel $nome
echo "<br>";
var_dump($numero) . "<br>";
echo "<br>";
var_dump($boleano) . "<br>";
echo "<br>";
var_dump($floats) . "<br>";

// O var_dump exibe o tamanho e o Tipo.





?>