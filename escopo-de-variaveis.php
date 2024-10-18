<?php

//contexto onde a variável foi definida

$nome = "Bia";

function exibeNome() {
    global $nome;
    echo $nome;
}

// não poderia serusada fora do escopo.
// caso quisesse que funcionasse, deveria definir essa variavel como global: function exibeNome() {
    //global $nome;    
//   echo $nome;
//}
// dessa forma, poderia usar a variavel fora dauqle escopo 
exibeNome();