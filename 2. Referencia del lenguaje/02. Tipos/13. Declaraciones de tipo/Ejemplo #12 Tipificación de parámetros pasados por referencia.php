<?php

function array_baz(array &$param) {
  $param = 1;
}

$var = [];
array_baz($var);
var_dump($var); // Salida: int(1)

/* Uncaught TypeError: array_baz(): Argument #1 ($param) must be of type array,
int given */
array_baz($var);
