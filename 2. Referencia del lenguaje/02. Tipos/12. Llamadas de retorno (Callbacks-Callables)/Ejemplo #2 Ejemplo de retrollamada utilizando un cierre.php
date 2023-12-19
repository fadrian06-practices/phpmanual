<?php

// Nuestro cierre
$doble = function ($a) {
  return $a * 2;
};

// Este es nuestro rango de números
$números = range(1, 5);

// Usar el cierre como llamada de retorno para
// doblar el valor de cada elemento de nuestro
// rango
$números_nuevos = array_map($doble, $números);

print implode(' ', $números_nuevos); // 2 4 6 8 10
