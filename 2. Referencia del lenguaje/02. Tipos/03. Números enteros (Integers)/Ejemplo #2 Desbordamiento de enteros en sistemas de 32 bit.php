<?php

$número_grande = 2147483647;
var_dump($número_grande); // int(2147483647)

$número_grande = 2147483648;
var_dump($número_grande); // float(2147483648)

$millón = 1000000;
$número_grande =  50000 * $millón;
var_dump($número_grande); // float(50000000000)
