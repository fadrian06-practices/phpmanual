<?php

// Array como mapa de propiedades
$map = array(
  'version'    => 4,
  'OS'         => 'Linux',
  'idioma'       => 'inglés',
  'etiquetas_cortas' => true
);

// Keys estrictamente numéricas
$array = array(
  7,
  8,
  0,
  156,
  -10
);
// esto es lo mismo que array(0 => 7, 1 => 8, ...)

$switching = array(
  10, // clave = 0
  5    =>  6,
  3    =>  7,
  'a'  =>  4,
  11, // clave = 6 (el índice entero máximo era 5)
  '8'  =>  2, // clave = 8 (entera!)
  '02' => 77, // clave = '02'
  0    => 12  // el valor 10 será reemplazado por 12
);

// array vacío
$empty = array();
