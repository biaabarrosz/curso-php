<?php

//constantes = identificador para valor único
//CONSTANTE NÃO PODE ALTERAR DURANTE A EXECUÇÃO DO SCRIPT

define("NOME", "José Carlos");
define("IDADE", 78);
define("CASADO", true);
echo 'Meu nome é '.NOME.', tenho '.IDADE.' anos sou casado'.CASADO;

//o identifcador da constante é sempre MAIÚSCULO

define("TIMES", ['vasco', 'flamengo', 'santos']);
echo "<hr>";
echo TIMES[0];

//constantes são automaticamente globais, ou seja, funcionam em todo o script




