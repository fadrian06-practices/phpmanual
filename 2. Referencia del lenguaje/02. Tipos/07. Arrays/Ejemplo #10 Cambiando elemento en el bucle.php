<?php

header('Content-Type: text/plain');

$colors = array('rojo', 'azul', 'verde', 'amarillo');

foreach ($colors as &$color) {
  $color = strtoupper($color);
}

unset($color); /* se asegura de que escrituras subsiguientes a $color
no modifiquen el último elemento del arrays */

print_r($colors);
