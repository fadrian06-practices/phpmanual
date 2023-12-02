<?php

$foo = 1 + "10.5";                   // $foo es float (11.5)
$foo = 1 + "-1.3e3";                 // $foo es float (-1299)
$foo = 1 + "bob-1.3e3";              // $foo es integer (1)
$foo = 1 + "bob3";                   // $foo es integer (1)
$foo = 1 + "10 pequeños cerdos";     // $foo es integer (11)
$foo = 4 + "10.2 pequeños cerditos"; // $foo es float (14.2)
$foo = "10.0 cerdos " + 1;           // $foo es float (11)
$foo = "10.0 cerdos " + 1.0;         // $foo es float (11)

echo "\$foo==$foo; tipo : " . gettype($foo) . "<br />\n";
