<?php

$numero = 10;

if ($numero == 10):
    echo "é igual a 10";
    elseif($numero <= 9):
        echo "é menor ou igual a 9";
else:
    echo "é diferente de 10";

endif;
echo "<hr>";

// switch case
// precisa colocar o "break"!!

$cor = "vermelho";

switch ($cor):
    case "vermelho":
        echo "é vermelho";
        break;
    case "verde":
        echo "é verde";
        break;

    case "azul":
        echo "é azul";
        break;

    default:
    echo "não é vermelho, verde ou azul";

    endswitch;