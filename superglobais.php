<?php

//são variáveis pré-definidas do PHP
/* 
   $GLOBALS
   $_SERVER
   $_REQUEST
   $_POST
   $_GET
   $_FILES
   $_ENV
   $_COOCKIE
   $_SESSION
   */

   // $GLOBALS: usada para acessar variáveis globais de qualquer lugar do script php. Armazena todas as variáveis globais em um array

   $x = 10;
   $y = 15;

   function soma(){
    echo $GLOBALS ['x'] + $GLOBALS ['y'];
   }

   soma();

   //$_POST: 