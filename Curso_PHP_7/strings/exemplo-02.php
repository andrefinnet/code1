<?php
// funções de string em php
$nome = "andre panizza dos santos";

echo strtoupper($nome) . "<br>";// essa função espera uma string, ela vai transforma-la em letras maiusculas;
echo strtolower($nome) . "<br>";// essa função espera uma string, ela vai transforma-la em letras minúsculas;
echo ucwords($nome) .    "<br>";   // essa função espera uma string, ela vai mudar a primeira letra de cada palavra caixa alta;
echo ucfirst($nome) .    "<br>";   // essa função espera uma string, ela vai mudar so a primeira letra em maiuscula caixa alta;
// utilizo a função strtoupper();

echo "<br>-------------------------------------------------------------------------------------------------------<br>";
// troca de dados e informações:

$empresa = "Hcode";
/* O que e o Replace, ele troca uma coisa, por outra coisa! 
01 - O primeiro parametro que ele espera e o que você esta procurando?: O que quer trocar, no caso: letra "o" de "Hcode";
02 - O segundo  parametro troco pelo o que: to trocando pelo "0"; 
03 - O terceiro parametro qual e o alvo, qual a variavel;*/
   

$empresa = str_replace("o","0", $empresa);
$empresa = str_replace("e","3", $empresa);


echo $empresa;

echo "<br>---------------------------------------------------------------------------------------------------------<br>";
// Troca de Posições Usando StrPosition();

$frase = "A repetição e a mãe da retenção";

// como funciona o strreplace:
//01 - Qual e o Alvo: No caso a variavel $frase;
//02 - O que estamos procurando dentro dessa variavel $frase: o Nome "mãe";
//03 - vai me retornar a posição de mãe;

$q = strpos($frase,$palavra); // ele vai me mostrar até a variavel mãe, quantas posições eu tenho somando os espaços;

// vamos utilizar a função substr():
//01 qual a variavel que contém todo o texto: no caso $frase.
//02 Apartir de Onde você que procurar o texto: então vou procurar apartir do 0. (desde a primeira letra. inicio da frase);
//03 Até onde você quer ir: sei que a variavel $q, tem 18 posições com o strposition();
$texto = substr($frase,0,$q);
//posição da variavel $frase. no caso a $q;
var_dump($q);
//resultado;
var_dump($texto);

// substr($HL5,5,3) //5 a posição e 3 e o tamanho que vc quer pegar;

$palavra = "mae"; // palavra recebe mãe;

$texto2 = substr($frase,$q + strlen($palavra),strlen($frase));
/* 01 - Com a variavel Texto2, uso o substr( alvo frase, começo pela posição 17, + conte qual o tamanho $palavra)
, e a´te onde eu quero ir, até o final da palavra frase, então conte $frase. usando strlen()*/

echo "<br>";

var_dump($texto2);
echo "<br>";

echo "Esse e o resultado: " .  $texto2 . "<br>";
?>