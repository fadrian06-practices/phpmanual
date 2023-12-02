<?php

// Obtener el primer carácter de un string
$str = 'Esto es una prueba.';
$primero = $str[0];

// Obtener el tercer carácter de un string
$tercero = $str[2];

// Obtener el último carácter de un string
$str = 'Esto sigue siendo una prueba.';
$último = $str[strlen($str) - 1];

// Modificar el último carácter de un string
$str = 'Mira el mar';
$str[strlen($str) - 1] = 'l';
