<?php

// Mostrar todos los errores
error_reporting(E_ALL);

$arr = array('fruit' => 'apple', 'veggie' => 'carrot');

// Correcto
print $arr['fruit'];  // apple
print $arr['veggie']; // carrot

// Incorrecto. Esto funciona pero también genera un error de PHP de
// nivel E_NOTICE ya que no hay definida una constante llamada fruit
//
// Notice: Use of undefined constant fruit - assumed 'fruit' in...
print $arr[fruit];    // apple

// Esto define una constante para demostrar lo que pasa. El valor 'veggie'
// es asignado a una constante llamada fruit.
define('fruit', 'veggie');

// Note la diferencia ahora
print $arr['fruit'];  // apple
print $arr[fruit];    // carrot

// Lo siguiente está bien ya que se encuentra al interior de una cadena. Las constantes no son procesadas al
// interior de cadenas, así que no se produce un error E_NOTICE aquí
print "Hello $arr[fruit]";      // Hello apple

// Con una excepción, los corchetes que rodean las matrices al
// interior de cadenas permiten el uso de constantes
print "Hello {$arr[fruit]}";    // Hello carrot
print "Hello {$arr['fruit']}";  // Hello apple

// Esto no funciona, resulta en un error de intérprete como:
// Parse error: parse error, expecting T_STRING' or T_VARIABLE' or T_NUM_STRING'
// Esto por supuesto se aplica también al uso de superglobales en cadenas
// print "Hello $arr['fruit']";
// print "Hello $_GET['foo']";

// La concatenación es otra opción
print "Hello " . $arr['fruit']; // Hello apple
