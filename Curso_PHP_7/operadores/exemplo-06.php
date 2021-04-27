<?php
//Ordem de execução dos Operadores utilizando ();
// Nota, que usamos () para arrays, [] para indice de arrays, e {} para funções ou functions;
//Nota: E = (&&), OU = (||)
$resultado = 10 + 3 / 2; // aqui ele vai dividir primeiro 3 / 2 que da: 1.5 e depois somar com 10: 10 + 1.5 = 11.5;
$resultado2 = (10 + 3) / 2;// com o parenteses estou forçando ele somar 10 + 3 e depois dividir por 2 = 6.5
$resultado3 = (10 + 3) / 2 > 5 || 10 + 5 < 3; // Aqui estou perguntando se ele e maior do que 5 e 10 + 5 e menor q 03

//Nota importante: O && significa, que tanto a condição da direita, quanto da esquerda devem ser verdadeiras.
// se caso uma delas for falsa o resultado sempre sera False;
//Nota importante: O || significa OR, pelo menos uma das condições for verdadeira, ele retorna True, caso nenhuma for
//verdadeira ele retornara False;
// precedencia de operadores.

echo "Esse e o Resultado da Expressão: " . $resultado . "<br>";

echo "Esse e o Resultado 2 da Expressão n°02: " . $resultado2 . "<br>";

var_dump($resultado3);



?>