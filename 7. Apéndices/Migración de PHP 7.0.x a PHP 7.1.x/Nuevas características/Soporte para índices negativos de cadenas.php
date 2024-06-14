<?php

var_dump('abcdef'[-2]);              // string (1) "e"
var_dump(strpos('aabbcc', 'b', -3)); // int(3)

$cadena = 'bar';

echo "El último carácter de '$cadena' es '{$cadena[-1]}'.\n";

/*
El resultado del ejemplo sería:
-------------------------------
El último carácter de 'bar' es 'r'.
 */
