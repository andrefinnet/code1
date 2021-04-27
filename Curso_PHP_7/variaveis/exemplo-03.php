<?php
// Dados especiais: Resources e Null:

/*
- Tipos de Dados:
01 - String;
02 - Numeros;
03 - Ponto Flutuante;
04 - Boleano;
*/

echo "Estes são os Principais tipos de Dados <br>";
$nome = "Hcode";
$site = 'www.Hcode.com.br';
// numeros:
$ano = 1990;
// float:
$salario = 5500.99;
//boleano:
$bloqueado = false;
/////////////////////////////////////////////////////////////////////////////////////////
// Outros Tipos de Dados Compostos:
// Note que usei a função strtoupper ( pra entrar como caixa alta )
$frutas = array(strtoupper("Abacaxi"),strtoupper("Laranja"),strtoupper("Manga"));
// indice começa assim [0, 1, 2];
// mostrando o array pelo indice:
echo "Esse e meu array: ".$frutas[2]."<br>"."pegando a segunda posição: [2] "; //peguei o array pelo indice [2];
echo "<br>";
/////////////////////////////////////////////////////////////////////////////////////////
echo "Exemplo Simples de um Objeto: <br>";

// declarando um objeto:
$nascimento = new datetime(); // a palavra reservada new, datetime() pega á data atual de agora;

//vou exibir o tipo e tamanho com var_dump:
echo "<strong>" . strtoupper("Esse e o Resultado do meu objeto abaixo: <br>");
var_dump($nascimento);

//////////////////////////////////////////////////////////////////////////////////////////

//Vou trabalhar com os Tipos de Variaveis Especiais:

echo "<br>";
echo "Tipos Especias: Resource, e o NULL: <br>";

//declarar variaveis:
// vamos utilizar uma função que serve pra leituras de arquivos no disco Rigido que e a fopen() que tem um segundo parametro r:
$arquivo = fopen("exemplo-03.php", "r");

// vou mostrar o tipo de dado usando o var_dump:
var_dump(strtoupper("esse e o tipo de dado do arquivo usando fopen()" . $arquivo));

// tipo NuLL:

// criando uma variavel:
$nulo = NULL; // nulo e a ausencia de valor, não existe;
$vazio = ""; //  vazio ele foi iniciado, só não tem informação.
/* Note que isso e diferente de criarmos uma variavel vazia */

exit; "parar a execução do codigo aqui";
////////////////////////////////////////////////////////////////////////////////////////////
?>
