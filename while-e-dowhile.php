<?php

// while: enquanto uma condição for verdadeira, ele vai executar o trcho de código

$contador = 1;

while ($contador <= 10):
    echo "contador é $contador <br>";
    $contador++;
endwhile;

echo"<hr>";

//do-while: primeiro executa o trecho de código E DEPOIS faz a verificação

do {
    echo "Contador é $contador <br>";
    $contador ++;
} while ($conatdor <= 10);