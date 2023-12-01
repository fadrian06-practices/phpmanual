<?php

$un_bool = true;   // un valor booleano
$un_str  = "foo";  // una cadena de caracteres
$un_str2 = 'foo';  // una cadena de caracteres
$un_int  = 12;     // un número entero

echo gettype($un_bool); // imprime: boolean
echo gettype($un_str);  // imprime: string

// Si este valor es un entero, incrementarlo en cuatro
if (is_int($un_int)) {
  $un_int += 4;
}

// Si $un_bool es una cadena, imprimirla
// (no imprime nada)
if (is_string($un_bool)) {
  echo "Cadena: $un_bool";
}
