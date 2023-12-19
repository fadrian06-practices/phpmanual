<?php

header('Content-Type: text/plain');

// Crear un array simple.
$array = array(1, 2, 3, 4, 5);
print_r($array);

// Ahora elimina cada elemento, pero deja el mismo array intacto:
foreach ($array as $i => $value) {
  unset($array[$i]);
}

print_r($array);

// Agregar un elemento (note que la nueva clave es 5, en lugar de 0).
$array[] = 6;
print_r($array);

// Re-indexar:
$array = array_values($array);
$array[] = 7;
print_r($array);
