<?php

$número_grande = 9223372036854775807;
var_dump($número_grande); // int(9223372036854775807)

$número_grande = 9223372036854775808;
var_dump($número_grande); // float(9.2233720368548E+18)

$millón = 1000000;
$número_grande = 50000000000000 * $millón;
var_dump($número_grande); // float(5.0E+19)
