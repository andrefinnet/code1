<?php
// Srings no PHP
// Diferenças entre aspas duplas e aspas simples:

$nome1 = "Hcode";

$nome2 = 'Treinamentos';

var_dump($nome1, $nome2);
echo "<br>";

//nota: quando colocamos a variavel dentro das aspas duplas, ele ira mostrar o valor dessa variavel na tela:

echo "ABC $nome1"; // ele escreveu Hcode; (interpolação de Variaveis)
echo "<br>";

//se mudarmos pra aspas simples:

echo 'ABC $nome1'; // No caso das Aspas Simples, ele vai entender que tudo e Texto.
echo "<br>";










?>