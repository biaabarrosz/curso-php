<?php

$nome = 'Bia';
echo 'meu nome é $nome';
//aspas simples são literais, então vai ficar literalmente "meu nome é $nome", e não "meu nome é Bia"
//se quiser concatenar e usar aspas simples, coloca um .
//por exemplo 'meu nome é '.$nome
echo "<br>";
echo'meu nome é '.$nome;
echo "<br>";

//as aspas duplas são interpretativas, se houver uma variável, ela vai interpretar

echo"meu nome é $nome";