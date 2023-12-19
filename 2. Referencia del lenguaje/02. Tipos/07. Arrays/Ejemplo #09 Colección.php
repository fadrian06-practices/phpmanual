<?php

header('Content-Type: text/plain');

$colors = array('rojo', 'azul', 'verde', 'amarillo');

foreach ($colors as $color) {
  echo "¿Le gusta el $color?\n";
}
