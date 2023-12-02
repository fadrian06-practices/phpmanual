<?php

$arr = array(5 => 1, 12 => 2);

$arr[] = 56;    // Esto es lo mismo que $arr[13] = 56;
// en este punto de el script

$arr["x"] = 42; // Esto agrega un nuevo elemento a
// el array con la clave "x"

unset($arr[5]); // Esto elimina el elemento del array

unset($arr);    // Esto elimina el array completo
