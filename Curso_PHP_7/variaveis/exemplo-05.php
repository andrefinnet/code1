<?php
// escopo de variaveis:
// até onde esse dados são visiveis, até onde e possivel ser visualizado, escutado:
echo strtoupper("<strong> Escopo de Variaveis <br>");

$nome = "Andre";  // este e o escopo local 

function teste(){ // este e o escopo da minha função {}
    global $nome;  // agora eu quero usar a variavel que foi definida fora desse escopo.
    echo $nome;
}

//se eu tiver outro escopo por exemplo a função teste2:

function teste2(){
    global $nome; // enchergando a variavel $nome que esta fora do escopo;
    echo " Agora na função teste2 " . $nome;

}

//pra invocar a função:
// a variavel não existe neste escopo: por isso do Notice Indefined Existe
// a function teste não entende que a variavel nome que esta fora da função, e a que utilizamos.
echo teste();
echo "<br>";
echo teste2();

//chamandos as variaveis;


?>