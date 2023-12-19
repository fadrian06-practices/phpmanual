<?php

$foo = 1 + "10.5";                // $foo es float (11.5)
$foo = 1 + "-1.3e3";              // $foo es float (-1299)

try {
  $foo = 1 + "bob-1.3e3";           // TypeError en PHP 8.0.0, $foo es entero (1) previamente
  $foo = 1 + "bob3";                // TypeError en PHP 8.0.0, $foo es entero (1) previamente
} catch (TypeError $error) {}

$foo = @(1 + "10 Small Pigs");       // $foo es entero (11) y un E_WARNING es lanzado en PHP 8.0.0, E_NOTICE previamente
$foo = @(4 + "10.2 Little Piggies"); // $foo es flotante (14.2) y un E_WARNING es lanzado en PHP 8.0.0, E_NOTICE previamente
$foo = @("10.0 pigs " + 1);          // $foo es flotante (11) y un E_WARNING es lanzado en PHP 8.0.0, E_NOTICE previamente
$foo = @("10.0 pigs " + 1.0);        // $foo es flotante (11) y un E_WARNING es lanzado en PHP 8.0.0, E_NOTICE previamente
