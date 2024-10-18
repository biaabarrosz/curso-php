<?php

//como criar funções: function nomedafuncao() {}

function exibirNome($nome){
    echo "meu nome é $nome";
}

exibirNome("Bia");

//os parenteses servem para passar parametros

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if ($media >= 7):
        echo "$nome foi aprovado com a média $media";
    else:
        echo "$nome foi reprovado, pois a média é $media";
    endif;
}

calcularMedia("Bob", 5, 7, 9, 4);