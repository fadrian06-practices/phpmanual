<?php

// Esto:
$a = array(
  'color' => 'rojo',
  'sabor' => 'dulce',
  'forma' => 'redonda',
  'nombre'  => 'manzana',
  4        // la clave será 0
);

$b = array('a', 'b', 'c');

// . . .es completamente equivalente a
$a = array();
$a['color'] = 'rojo';
$a['sabor'] = 'dulce';
$a['forma'] = 'redonda';
$a['nombre']  = 'manzana';
$a[]        = 4;        // la clave será 0

$b = array();
$b[] = 'a';
$b[] = 'b';
$b[] = 'c';

// Después de que se ejecute el código, $a será el array
// array('color' => 'red', 'taste' => 'sweet', 'shape' => 'round',
// 'name' => 'apple', 0 => 4), y $b será el array
// array(0 => 'a', 1 => 'b', 2 => 'c'), o simplemente array('a', 'b', 'c').
