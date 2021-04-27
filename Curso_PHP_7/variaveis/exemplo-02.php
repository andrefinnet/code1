<?php
/*
 trabalhando com unset que limpa variaveis:
exemplo de utilização:

*/
// Declaração da Variavel $nome:
$nome = "Andre";
$nome2 = "André";

// Exibir o Nome da Variavel na tela:
echo $nome1 . "<br/>";

// agora vou limpar a variavel e vai constar como undefined.
unset($nome1);
echo "<br>";


//agora a variavel foi limpada listando Undefined:
echo $nome1. "<br>"; // esta variavel não esta declarada. // deixamos de definila.

//Posso colocar uma validação basica, com o comando isset();
// if (isset($nome)); significa, se a variavel $nome existir, ou estiver definida:
    if(isset($nome1)){
        // fazer o echo so se ela existir:
        echo "A variavel existe!! confirmação: " . $nome1 . " <br> "; //existe se fica branca e não der erro!
        
    } 

// concatenação de variaveis (juntar as informações:)
$sobrenome = " Panizza ";
// acima eu defini uma variavel com o contéudo Panizza.
// Note que vou declarar mais uma variavel que recebe os valores:

$nome_completo = $nome2. "  " . $sobrenome . "<br>"; //pra não ficar colado eu dei espaços!!

// agora que concatenei os 02 nome e sobrenome vou exibir a variavel $nome_completo;
echo " Esse e o Resultado da concatenação das variaveis:  " . $nome_completo . "<br>"; // estou dando um echo simples pra mostrar na tela;

echo "<br>";

var_dump( " Mostrando Tipo e Tamanho: " . $nome_completo) . "<br>"; // estou mostrando o tipo e o tamanho com var_dump também aqui.

echo "<br>";


print_r(" Estou utilizando o Print_r aqui:  <br> " . $nome_completo) . "<br>"; // aqui estou printando com print_r a informação na tela!

exit; // a função exit, para a execução do codigo do PHP!


?>