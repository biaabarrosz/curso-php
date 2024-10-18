<?php
//is_array verifica se a variável é um array
$nomes = array("Bia", "Sarah", "Luiz", "Cene");
echo is_array($nomes);
if(is_array($nomes)):
    echo "é um array";
else:
    echo "não é um array";
endif;
echo"<hr>";

//in_array verifica se um determinado valor existe em alguma posição do array
if(in_array("Bia", $nomes)):
    echo"está no array";
else:
    echo"não está no array";
endif;

//array_values($array) retorna um novo array com os valores do array passado como parâmetro
